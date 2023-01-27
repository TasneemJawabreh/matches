<?php

$servername="localhost";
$username="root";
$password="";
$dbname="training2";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "can not connect to database";
    exit;
}
if (isset($_POST['Delete'])) {
    echo $_POST["Delete"] ;      
   $id=$_POST["Delete"];

   
    
    $sql = "DELETE FROM players WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
    
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

if (isset($_POST['choose'])) {     
 $id=$_POST["choose"];


if (isset($_SESSION['player_id'])){
  $player_id=$_SESSION['player_id'];

}

 $sql1 = "UPDATE players SET matcid=$id WHERE id=$player_id";
       if ($conn->query($sql1) === TRUE) {
        } else {
          echo "Error updating record: " . $conn->error;
          }
  
  mysqli_close($conn);
}

?>
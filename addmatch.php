<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="training2";

if(isset($_REQUEST['match_name'])) {
	$match_name = $_REQUEST['match_name'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "can not connect to database";
        exit;
    } 


	$qr_str = "select match_name from matches WHERE match_name='$match_name' ";
		
			$result = $conn->query($qr_str);
			$check=0;
			for ($i = 0; $i < ($result->num_rows); $i++) {
		
				$row = $result->fetch_assoc();
		
			$check=1;		
			$_SESSION['matchname']=0;
			}
		
		
		
		
    if($check==0){
		$sql = "INSERT INTO matches (match_name) VALUES ('$match_name')";
		$_SESSION['signup_error']=1;
	$result = $conn->query($sql);
	$conn->commit();
	//$conn->close();
	//header("Location:http://localhost/training1/sign_in_front.php/");
	}
	$conn->close();
	

   

}



?>
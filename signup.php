<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="training2";

if(isset($_REQUEST['player_name'])&&isset($_REQUEST['player_email'])&&isset($_REQUEST['player_password'])) {
	$player_email = $_REQUEST['player_email'];
	$player_password = $_REQUEST['player_password'];
	$player_name = $_REQUEST['player_name'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "can not connect to database";
        exit;
    } 


	$qr_str = "select email from players WHERE email='$player_email' ";
		
			$result = $conn->query($qr_str);
			$check=0;
			for ($i = 0; $i < ($result->num_rows); $i++) {
		
				$row = $result->fetch_assoc();
		
			$check=1;		
			$_SESSION['sigup_error']=0;
			}
		
		
		
		
    if($check==0){
		$sql = "INSERT INTO players (email,password,name) VALUES ('$player_email','$player_password','$player_name')";
		echo $sql;
		$_SESSION['signup_error']=1;
	$result = $conn->query($sql);
	$conn->commit();
	//$conn->close();
	//header("Location:http://localhost/training1/sign_in_front.php/");
	}
	$conn->close();
	

   

}



?>
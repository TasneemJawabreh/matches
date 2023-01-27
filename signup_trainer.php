<?php
 error_reporting(E_ERROR | E_PARSE);
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="training2";

if(isset($_REQUEST['trainer_name'])&&isset($_REQUEST['trainer_email'])&&isset($_REQUEST['trainer_password'])) {
	$trainer_email = $_REQUEST['trainer_email'];
	$trainer_password = $_REQUEST['trainer_password'];
	$trainer_name = $_REQUEST['trainer_name'];
	
	
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "can not connect to database";
        exit;
    } 


	$qr_str = "select email from trainers WHERE email='$trainer_email' ";
		
			$result = $conn->query($qr_str);
			$check=0;
			for ($i = 0; $i < ($result->num_rows); $i++) {
		
				$row = $result->fetch_assoc();
		
			$check=1;		
			$_SESSION['sigup_error']=0;
		
			}
		
		
		
		
    if($check==0){
		$sql = "INSERT INTO trainers (email,password,name) VALUES ('$trainer_email','$trainer_password','$trainer_name')";
		echo $sql;
		$_SESSION['signup_error']=1;
	$result = $conn->query($sql);
	$conn->commit();
	//$conn->close();
	header("Location:http://localhost/training2/signin_front.php/");
	}
	$conn->close();
	

   

}



?>
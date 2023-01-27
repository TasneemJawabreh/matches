<?php


session_start();

if(isset($_REQUEST['email'])&&isset($_REQUEST['password'])) {
$servername="localhost";
$username="root";
$password="";
$dbname="training2";
$email="";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "can not connect to database";
        exit;
    } 

	$email = $_REQUEST['email'];
	$password0 = $_REQUEST['password'];

    $qr_str = "select email , password from players WHERE email='$email'";
	$qr_str2 = "select email, password from trainers WHERE email='$email'";
    $result = $conn->query($qr_str);
    $result2 = $conn->query($qr_str2);
	
      
        $check=0;
        for ($i = 0; $i < ($result->num_rows); $i++){

            $row = $result->fetch_assoc();
			 if($row['password']==$password0){
			   $check=1;
			   $_SESSION['email'] = $email;
               $_SESSION['error'] = 1;

			   header("Location:http://localhost/training2/home_page_player.php/");
		         
			}
            }
			for ($i = 0; $i < ($result->num_rows); $i++) {

                $row = $result2->fetch_assoc();
    
              
                 if($row['password']==$password0){
                   $check=1;
                   $_SESSION['email'] = $email;
                   $_SESSION['error'] = 1;
    
                   header("Location:http://localhost/training2/home_page_front_trainer.php/");
                     
                }
                
                }
			if($check==0){
					
					$_SESSION['error'] = 0;
					echo"errrror";
                   
                   
				}
			
			
            



 
    



$conn->close();
}
?>
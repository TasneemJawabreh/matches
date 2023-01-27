<?php

	  session_start();
	  if (isset($_SESSION['email'])){
		$emaill  = $_SESSION['email'];
		
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="training2";
		
		
		{
		
			$conn = new mysqli($servername, $username, $password, $dbname);
		
			if ($conn->connect_error) {
				echo "can not connect to database";
				exit;
			} else {
			}
		
		
			$qr_str = 'select * from players ';
		
			$result = $conn->query($qr_str);
			
			for ($i = 0; $i < ($result->num_rows); $i++) {
		
				$row = $result->fetch_assoc();
		
					if ($row['email'] == $emaill) {
						$name=$row['name'];
						$email=$row['email'];
						
						echo "name: " ."$name"."\r\n";
						echo "<br>";
		                echo "email: " ."$email"."\r\n";
		
					} 
		
		
		
		
			}
		
		
		
		$conn->close();
		}

	}else{
		echo "error";
	}




	

?>
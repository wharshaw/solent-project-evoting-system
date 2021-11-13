<?php
	session_start();
	include 'includes/conn.php';

	/*
	if(isset($_POST['login'])){
		$voter = $_POST['voter'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE voters_id = '$voter'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find voter with the ID';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['voter'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input voter credentials first';
	}

	header('location: index.php');

	*/
	if(isset($_POST['login'])){
		//$voter = $_POST['voter'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM voters WHERE voters_id = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			
					$sql = "SELECT * FROM admin WHERE username = '$username'";
					$query = $conn->query($sql);

					if($query->num_rows < 1){
						$_SESSION['error'] = 'Incorrect credentials';
					}
					else{
						$row = $query->fetch_assoc();
						if(password_verify($password, $row['password'])){
							$_SESSION['admin'] = $row['id'];
							
						}
						else{
							$_SESSION['error'] = 'Incorrect credentials';
						}
					}
					header('location: index.php');
			
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['voter'] = $row['id'];
				header('location: index.php');

			}
			else{
				$_SESSION['error'] = 'Incorrect credentials';
			}

			header('location: index.php');
		}
		
	}
	else{
		$_SESSION['error'] = 'Input credentials first';
		header('location: index.php');
	}

	

	

?>
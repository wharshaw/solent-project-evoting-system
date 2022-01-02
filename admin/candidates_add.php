<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$nic = $_POST['nic'];
		$address = $_POST['address'];
		$division = $_POST['division'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$party = $_POST['party'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO candidates (position_id, firstname, lastname, photo, platform, party_id, nic, address, division) VALUES ('$position', '$firstname', '$lastname', '$filename', '$platform', '$party', '$nic', '$address', '$division')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>
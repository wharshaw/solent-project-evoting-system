<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$partyname = $_POST['partyname'];
		$status = $_POST['status'];
		// $platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO party (PartyName, photo, status_id) VALUES ('$partyname', '$filename', '$status')";
// 		echo $sql;
// if (!$mysqli->query($sql)) {
//     echo 'Error: ', $mysqli->error;
// }
// 		if($conn->query($sql)){
// 			$_SESSION['success'] = 'Party added successfully';
// 		}
// 		else{
// 			$_SESSION['error'] = $conn->error;
// 		}

	
// 	else{
// 		$_SESSION['error'] = 'Fill up add form first';
// 	}
	if($conn->query($sql)){
		$_SESSION['success'] = 'Party added successfully';
	}
	else{
		$_SESSION['error'] = $conn->error;
	}

	}
	else{
	$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: parties.php');
?>
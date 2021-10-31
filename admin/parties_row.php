<?php 
	include 'includes/session.php';

	if(isset($_POST['Partyid'])){
		$id = $_POST['Partyid'];
		$sql = "SELECT *, party.id AS canid	FROM party LEFT JOIN status ON status.id=party.status_id WHERE party.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>
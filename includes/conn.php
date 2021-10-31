<?php
	$conn = new mysqli('localhost', 'root', 'theprime', 'e_voting_system');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
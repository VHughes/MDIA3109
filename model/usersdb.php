<?php
include('dbconnector.php');

	function createUser(){
		global $db;
		$query = "INSERT INTO users (username, password) VALUES ('".$_POST['username']."', '".$_POST['password']."')";
		$result = $db->query($query);
	} 

	function readUser(){
		global $db;
		$query = "SELECT username FROM users WHERE id = '".$_POST['id']."'";
		$result = $db->query($query);

		echo json_encode($result->fetchAll());
	}

	function updateUser(){
        $newUser = $_POST['newuser'];
		global $db;
		$query = "UPDATE users SET username = '".$_POST['newname']."' WHERE id = '".$_POST['id']."'";
		$result = $db->query($query);
	}
	
	function deleteUser(){
		global $db;
		$query = "DELETE FROM users WHERE username='".$_POST['username']."'";
		$result = $db->query($query);
	}

    function getId(){
        global $db;
        $query = "SELECT id FROM users WHERE password = '".$_POST['password']."' AND username = '".$_POST['username']."'";
        $result = $db->query($query);
        echo json_encode($result->fetchAll());
    }


?>
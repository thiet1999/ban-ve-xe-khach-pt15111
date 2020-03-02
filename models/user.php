<?php
require_once ".config/utils.php";

function loginUser($email, $password){
	$sql = "select * from users where email = '$email'";
	$conn = getdbConn();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$user = $stmt->fetch();
	if(!$user){
		return false;
	}
<<<<<<< HEAD

=======
	
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
	if(password_verify($password, $user['password'])){
		return $user;
	}
}


 ?>
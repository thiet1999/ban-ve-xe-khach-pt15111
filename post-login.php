<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
session_start();
require_once "./config/utils.php";
$email = isset($_POST['email']) == true ? trim($_POST['email']) : "";
$password = isset($_POST['password']) == true ? trim($_POST['password']) : "";

$sql = "select * from users where email = '$email'";
$loggedInUser = queryExecute($sql, false);
if(password_verify($password, $loggedInUser['password'])){
    $_SESSION[AUTH] = $loggedInUser;
    header('location: index.php');
    die;
}else{
    header('location: login.php?msg=Sai thông tin đăng nhập!');
    die;
}



<<<<<<< HEAD
?>
=======
 ?>
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1

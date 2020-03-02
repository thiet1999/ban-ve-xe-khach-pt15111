<?php
<<<<<<< HEAD
session_start();
require_once './config/utils.php';
unset($_SESSION[AUTH]);
header('location: '.BASE_URL);
?>
=======
/**
 * Created by PhpStorm.
 * User: ginv2
 * Date: 2/14/20
 * Time: 11:57
 */
session_start();
require_once "./config/utils.php";
unset($_SESSION[AUTH]);
header('location: ' . BASE_URL);
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1

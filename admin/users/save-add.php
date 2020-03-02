<?php
session_start();
include_once "../../config/utils.php";
<<<<<<< HEAD
checkAdminLoggedIn();
=======
// checkAdminLoggedIn();
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$cfpassword = trim($_POST['cfpassword']);
$phone_number = trim($_POST['phone_number']);
$role_id = trim($_POST['role_id']);
<<<<<<< HEAD
=======

>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
// validate bằng php
$nameerr = "";
$emailerr = "";
$passworderr = "";
// check name
<<<<<<< HEAD
if (strlen($name) < 2 || strlen($name) > 191) {
=======
if(strlen($name) < 2 || strlen($name) > 191){
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
    $nameerr = "Yêu cầu nhập tên tài khoản nằm trong khoảng 2-191 ký tự";
}

// check email
<<<<<<< HEAD
if (strlen($email) == 0) {
=======
if(strlen($email) == 0){
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
    $emailerr = "Yêu cầu nhập email!";
}
if ($emailerr == "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerr = "Không đúng định dạng email";
}
// check email đã tồn tại hay chưa
$checkEmailQuery = "select * from users where email = '$email'";
$users = queryExecute($checkEmailQuery, true);
<<<<<<< HEAD
if ($emailerr == "" && count($users) > 0) {
    $emailerr = "Email đã tồn tại, vui lòng sử dụng email khác";
}
// check password
if (strlen($password) < 6) {
    $passworderr = "Mật khẩu cần >= 6 ký tự";
}

if ($passworderr == "" && $password != $cfpassword) {
    $passworderr = "Mật khẩu và nhập lại mật khẩu không khớp nhau";
}

if ($nameerr . $emailerr . $passworderr != "") {
=======
if($emailerr == "" && count($users) > 0){
    $emailerr = "Email đã tồn tại, vui lòng sử dụng email khác";
}
// check password
if(strlen($password) < 6){
    $passworderr = "Mật khẩu cần >= 6 ký tự";
}

if($passworderr == "" && $password != $cfpassword){
    $passworderr = "Mật khẩu và nhập lại mật khẩu không khớp nhau";
}

if($nameerr . $emailerr . $passworderr != "" ){
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1
    header('location: ' . ADMIN_URL . "users/add-form.php?nameerr=$nameerr&emailerr=$emailerr&passworderr=$passworderr");
    die;
}
// mã hóa mật khẩu
$password = password_hash($password, PASSWORD_DEFAULT);
// upload file ảnh
<<<<<<< HEAD
$insertUserQuery = "insert into users
                          (name, email, password, phone_number, role_id)
                    values
                          ('$name', '$email', '$password', '$phone_number', '$role_id')";
queryExecute($insertUserQuery, false);
header("location: " . ADMIN_URL . "users");
die;
=======
$insertUserQuery = "insert into users 
                          (email, password, name, phone_number, role_id)
                    values 
                          ('$email', '$password', '$name', '$phone_number', '$role_id')";
                          
queryExecute($insertUserQuery, false);
header("location: " . ADMIN_URL . "users");
die;
>>>>>>> 8ad8af4234f5a616a92d545eed0b6bcf9c58cda1

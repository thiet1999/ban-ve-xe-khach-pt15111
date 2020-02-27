<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$distance = trim($_POST['distance']);
$estimate_time = trim($_POST['estimate_time']);
$begin_point = trim($_POST['begin_point']);
$end_point = trim($_POST['end_point']);

// validate bằng php

$distancerr = "";
$estimate_timerr = "";
$begin_pointrr = "";
$end_pointrr = "";

if(strlen($begin_point) < 2 || strlen($begin_point) > 191){
    $begin_pointrr = "Yêu cầu nhập trong khoảng 2-191 ký tự";
}
if(strlen($end_point) < 2 || strlen($end_point) > 191){
    $end_pointrr = "Yêu cầu nhập trong khoảng 2-191 ký tự";
}
if(strlen($distance) == 0){
    $distancerr = "Yêu cầu nhập khoảng cách quãng đường";
}

$insertRoutesQuery = "insert into 'routes'
                          (distance, estimate_time, begin_point, end_point)
                    values
                          ('$distance', '$estimate_time','$begin_point', '$end_point')";

queryExecute($insertRoutesQuery, false);
// dd($insertVehicleQuery);
header("location: " . ADMIN_URL . "routes?msg=Thêm quãng đường thành công");
die;
<?php
define('BASE_URL', 'http://localhost/ban-ve-xe-khach-pt15111/');
define('ADMIN_URL', BASE_URL . 'admin/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('DEFAULT_IMAGE', PUBLIC_URL . '/images/default-image.jpg');
define('AUTH', 'AUTH_SESSION');
define("ACTIVE", 1);
define("INACTIVE", -1);

function getdbConn() {
    try {
        $host = "localhost";
        $dbname = "ban-ve-xe-khach-pt15111";
        $dbusername = "root";
        $dbpass = "";

        $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpass);
        return $connect;
    } catch (Exception $ex) {
        var_dump($ex->getMessage());
        die;
    }
}

function queryExecute($sql, $fetchAll = false){

    $conn = getdbConn();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($fetchAll){
        $data = $stmt->fetchAll();
    }else{
        $data = $stmt->fetch();
    }
    return $data;
}

# kiểm tra xem user đã đăng nhập hay chưa
function checkAdminLoggedIn(){
    // kiểm tra đăng nhập
    // 1 - đăng nhập thành công - ktra bằng session AUTH
    if(!isset($_SESSION[AUTH]) || $_SESSION[AUTH] == null || count($_SESSION[AUTH]) == 0){
        header('location: ' . BASE_URL . 'login.php?msg=Hãy đăng nhập');
        die;
    }
    // 2 - giá trị của cột role_id = 2
    if($_SESSION[AUTH]['role_id'] > 1){
        header('location: ' . BASE_URL . 'login.php?msg=Bạn không có quyền truy cập');
        die;
    }
}

function dd($data){
    echo "<pre>";
	var_dump($data);
	die;
}


?>
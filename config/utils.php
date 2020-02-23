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

?>
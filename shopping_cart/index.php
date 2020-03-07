<?php
// bắt đầu sử dụng session
session_start();
require_once "../config/utils.php";
$loggedInUser = $_SESSION[AUTH];

// lấy dữ liệu từ Routes
$getRoutesQuery = "select * from routes";
$routes = queryExecute($getRoutesQuery, true);

$getSchedulesQuery = "select * from route_schedules";
$Schedules = queryExecute($getSchedulesQuery, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo PUBLIC_URL . '/css/main.css' ?>">
    <title>Bán vé xe khách - Shopping cart</title>
</head>

<body>
    <header class="border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2 dashboard-logo">
                    <a href="<?php BASE_URL ?>">
                        <img src="<?php echo PUBLIC_URL . 'images/logo1.ico' ?>" alt="LOGO" class="">
                    </a>
                </div>
                <div class="col-md-10">
                    <ul class="navbar navbar-expand-md dashboard-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo BASE_URL ?>">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thông tin</a>
                        </li>
                        <?php if ($_SESSION[AUTH]['role_id'] < 5) : ?>
                            <li class="nav-item" style="display: none">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link" href="<?php echo ADMIN_URL . 'dashboard' ?>">Quản lý Trang Web</a>
                            </li>
                            <?php if ($loggedInUser) : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?= $loggedInUser['name']; ?></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                                        <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                        <a class="dropdown-item" href="#">Thông tin vé xe</a>
                                        <a class="dropdown-item" href="<?php echo ADMIN_URL . 'users/' ?>">Quản lý</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo BASE_URL . './logout.php' ?>">Đăng xuất</a>
                                    </div>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php" title="">Đăng Nhập</a>
                                </li>
                            <?php endif ?>
                            <li class="btn-cart nav-item btn btn-outline-primary">
                                <a class="nav-link" href="<?php echo CART_URL ?>" title="">Giỏ Hàng <i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                            </li>
                    </ul>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </header>
    <section class="info-basket pt-4">
        <h2 class="h3 text-center">Danh sách vé đã đặt</h2>
        <div class="container">
           <?php  ?>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <p>Công ty Company</p>
            <p>Địa chỉ: Lầu 8,9, Tòa nhà CirCO, 222 Điện Biên Phủ, Quận 3, TP. Hồ Chí Minh, Việt Nam</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
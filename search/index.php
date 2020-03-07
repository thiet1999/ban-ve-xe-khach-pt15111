<?php
// bắt đầu sử dụng session
session_start();
require_once "../config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

// lấy dữ liệu từ Routes
$getRoutesQuery = "select * from routes";
$routes = queryExecute($getRoutesQuery, true);

// lấy dữ liệu từ bảng routes: begin_point, end_point; route_schedules: begin/end_time, price; vehicles: seat, plate_number
$getAllDataQuery = "select rs.*, v.seat as seat, v.plate_number as plate_number, r.begin_point as begin, r.end_point as end
                from vehicles v join route_schedules rs
                        on v.id=rs.vehicle_id
                        join routes r on rs.route_id=r.id";
$allData = queryExecute($getAllDataQuery, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <!-- main.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />

    <link rel="stylesheet" href="<?php echo PUBLIC_URL . '/css/main.css' ?>">
    <title>Bán vé xe khách - Trang chủ</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SEARCH_URL?>">Danh sách vé</a>
                        </li>
                        <li class="nav-item" style="<?php if ($loggedInUser !== null && $loggedInUser['role_id'] > 1) {
                                                        echo 'display:inline-block';
                                                    }else {echo 'display:none';} ?>">
                            <a class="nav-link" href="<?php echo ADMIN_URL . 'dashboard' ?>">Quản lý Trang Web</a>
                        </li>
                        <?php if ($loggedInUser) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?= $loggedInUser['name']; ?></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                                    <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                    <a class="dropdown-item" href="#">Thông tin vé xe</a>
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
    <!--END HEADER - START LIST-->
    <div class="container">
        <div class="row">
            <div class="col-2 side-bar bg-secondary border">
                <h3 class="h4 text-center text-capitalize border-bottom pt-2 pb-2">Lọc vé</h3>
                
            </div>
            <div class="col-10 listSearch border">
                <h3 class="h4 text-center text-capitalize border-bottom pt-2 pb-2">Danh sách vé xe</h3>
                <?php foreach ($allData as $data) : ?>
                    <div class="row pt-2 border-bottom">
                        <div class="col-3">
                            <img src="<?php echo PUBLIC_URL . 'images/default-image.jpg' ?>" alt="">
                        </div>
                        <div class="col-7">
                            <h4 class="h5">Nhà xe Thiên Thanh</h4>
                            <ul>
                                <li>Tuyến đường: <span class="font-weight-bold text-primary"><?php echo $data['begin'] . " - " . $data['end'] ?></span></li>
                                <li>Xe: <span class="font-weight-bold text-primary"><?php echo $data['plate_number'] ?></span></li>
                                <li>Số ghế: <span class="font-weight-bold text-primary"><?php echo $data['seat'] ?> ghế</span></li>
                                <li>Thời gian bắt đầu: <span class="font-weight-bold text-primary"><?php echo $data['start_time'] ?></span></li>
                                <li>Thời gian kết thúc: <span class="font-weight-bold text-primary"><?php echo $data['end_time'] ?></span></li>
                                <li>Giá vé: <span class="font-weight-bold text-danger"><?php echo $data['price'] ?> VND</span></li>
                            </ul>
                        </div>
                        <div class="col-2 position-relative">
                            <button type="submit" class="btn btn-outline-primary position-absolute" style="bottom: 20px">Book</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!--END LSIT - START NEWS-->
    <div class="contact pt-4 pb-2 mt-5 border-top border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <ul class="contact-list">
                        <h4 class="h6 text-capitalize font-weight-bold">bến xe</h4>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="contact-list">
                        <h4 class="h6 text-capitalize font-weight-bold">nhà xe</h4>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="contact-list">
                        <h4 class="h6 text-capitalize font-weight-bold">tuyến đường</h4>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                        <li><a href="#" class="text-capitalize">mỹ đình</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul class="contact-list">
                        <h4 class="h6 text-capitalize font-weight-bold">mạng xã hội</h4>
                        <li>
                            <a href="#" class="text-capitalize">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-capitalize">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-capitalize">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--END CONTACT - START FOOTER-->
    <footer>
        <div class="container pt-2 text-center">
            <p>Công ty Company</p>
            <p>Địa chỉ: Lầu 8,9, Tòa nhà CirCO, 222 Điện Biên Phủ, Quận 3, TP. Hồ Chí Minh, Việt Nam</p>
        </div>
    </footer>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- boottrap.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- <script type="text/javascript" src="./ru.js"> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    </script>
</body>

</html>
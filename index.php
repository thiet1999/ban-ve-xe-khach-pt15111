<?php
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;

// lấy dữ liệu từ Routes
$getRoutesQuery = "select * from routes";
$routes = queryExecute($getRoutesQuery, true);

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
    <!--END HEADER - START BANNER-->
    <div class="banner border-bottom pt-3 pb-3">
        <div class="container">
            <h1 class="slogan h3 text-center text-capitalize">đặt vé xe trước, nhận chỗ sớm, không lo hết vé</h1>
            <p class="text-center text-uppercase h4 font-weight-bold">tìm vé xe</p>
            <form action="<?php echo SEARCH_URL ?>" method="get" enctype="multipart/form-data">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 form-group">
                        <select id="my-select" class="form-control" name="begin_point">
                            <option value="" selected>Tuyến đường</option>
                            <?php foreach ($routes as $route) : ?>
                                <option value="<?php echo $route['id'] ?>"><?php echo $route['begin_point'] . "  -  " . $route['end_point'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <div class="col-4 form-group">
                        <label for="" class="text-capitalize font-weight-bold">ngày giờ</label>

                        <div class="form-group">
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(function() {
                                $('#datetimepicker1').datetimepicker();
                            });
                        </script>

                    </div> -->
                </div>
                <div class="text-center">
                    <button type="submit" name="btn-submit" class="btn btn-primary">Tìm Vé</button>
                </div>
            </form>
        </div>
    </div>
    <!--END BANNER - START NEWS-->
    <div class="new pt-2 pb-5">
        <div class="container">
            <h2 class="h3 text-capitalize text-center">tin tức chung</h2>
            <div class="row">
                <div class="newsImg col-4 border p-2">
                    <img class="img-rounded" src="<?php echo PUBLIC_URL . 'images/default-image.jpg' ?>" alt="here is news image">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam impedit optio perspiciatis?</p>
                </div>
                <div class="newsImg col-4 border p-2">
                    <img class="img-rounded" src="<?php echo PUBLIC_URL . 'images/default-image.jpg' ?>" alt="here is news image">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam impedit optio perspiciatis?</p>
                </div>
                <div class="newsImg col-4 border p-2">
                    <img class="img-rounded" src="<?php echo PUBLIC_URL . 'images/default-image.jpg' ?>" alt="here is news image">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam impedit optio perspiciatis?</p>
                </div>
            </div>
        </div>
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
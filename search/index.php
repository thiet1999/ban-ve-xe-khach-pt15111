<?php
// bắt đầu sử dụng session
session_start();
require_once "../config/utils.php";
$loggedInUser = isset($_SESSION[AUTH]) ? $_SESSION[AUTH] : null;
$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
// lấy dữ liệu từ Routes
$getRoutesQuery = "select * from routes";
$routes = queryExecute($getRoutesQuery, true);

// lấy dữ liệu từ bảng routes: begin_point, end_point; route_schedules: begin/end_time, price; vehicles: seat, plate_number
$getAllDataQuery = "select rs.*, vt.name as type_name, v.seat as seat, v.plate_number as plate_number, r.begin_point as begin, r.end_point as end
                from    vehicle_types vt join vehicles v
                        on vt.id=v.type_id
                        join route_schedules rs
                        on v.id=rs.vehicle_id
                        join routes r on rs.route_id=r.id";

if ($keyword !== "") {
    $getAllDataQuery .= " where vt.name like '%$keyword%'
                            or v.seat like '%$keyword%'
                            or v.plate_number like '%$keyword%'
                            or r.begin_point like '%$keyword%'
                            or r.end_point like '%$keyword%'
                            or rs.price like '%$keyword%'";
}

$allData = queryExecute($getAllDataQuery, true);
// dd($allData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Favicon ico -->
    <link rel="shortcut icon" type="image/png" href="<?= PUBLIC_URL . 'images/favicon.ico' ?>" />
    <!-- Bootstrap -->
    <link href="<?= THEME_ASSET_URL ?>dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?= THEME_ASSET_URL ?>assets/css/custom.css" rel="stylesheet" media="screen">
    <!-- Carousel -->
    <link href="<?= THEME_ASSET_URL ?>examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?= THEME_ASSET_URL ?>assets/js/html5shiv.js"></script>
    <script src="<?= THEME_ASSET_URL ?>assets/js/respond.min.js"></script>
<![endif]-->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>css/fullscreen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= THEME_ASSET_URL ?>rs-plugin/css/settings.css" media="screen" />

    <!-- Picker UI-->
    <link rel="stylesheet" href="<?= THEME_ASSET_URL ?>assets/css/jquery-ui.css" />

    <!-- jQuery -->
    <script src="<?= THEME_ASSET_URL ?>assets/js/jquery.v2.0.3.js"></script>


    <title>Bán vé xe khách - Trang chủ</title>
</head>

<body>
     
     <div class="navbar-wrapper2">
            <div class="container">
            <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="<?= THEME_ASSET_URL ?>images/logo1.ico" width="100px" alt="" /></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a class="nav-link" href="#">Thông tin</a></li>
      <li><a class="nav-link" href="<?php echo SEARCH_URL?>">Danh sách vé</a></li>
      <li class="nav-item" style="<?php if ($loggedInUser !== null && $loggedInUser['role_id'] > 1) {
                                                        echo 'display:inline-block';
                                                    }else {echo 'display:none';} ?>">
                            <a class="nav-link text-danger font-weight-bold text-uppercase" href="<?php echo ADMIN_URL . 'dashboard' ?>">Quản lý Website</a>
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
  </div>
</nav>
                
                

            </div>
        </div>
    </div>

   
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
            s                <h4 class="h5">Nhà xe Thiên Thanh</h4>
                            <ul>
                                <li>Tuyến đường: <span class="font-weight-bold text-primary"><?php echo $data['begin'] . " - " . $data['end'] ?></span></li>
                                <li>Xe: <span class="font-weight-bold text-primary"><?php echo $data['plate_number'] ?></span></li>
                                <li>Loại xe: <span class="font-weight-bold text-primary"><?php echo $data['type_name'] ?></span></li>
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
    <div class="new pt-2 pb-5">
    <div class="container">
                    <h1>Thông tin</h1>
                     <div class="wrapper">
                    <div class="list_carousel">
                        <ul id="foo">
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-hawaii.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Thông Tin</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-santorini.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Thông Tin</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-dubai.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Thông Tin</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-hawaii.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Thông Tin</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-santorini.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Thông Tin</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list4.html"><img src="<?= THEME_ASSET_URL ?>images/thumb-dubai.jpg" alt=""/></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Thông Tin</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <a id="prev_btn" class="prev" href="#"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                        <a id="next_btn" class="next" href="#"><img src="<?= THEME_ASSET_URL ?>images/spacer.png" alt=""/></a>
                    </div>
                </div>
                </div>
       
    <!--END CONTACT - START FOOTER-->
    <div class="footerbg">
            <div class="container">

                <div class="col-md-3">
                    <span class="ftitle">Mạng xã hội</span>
                    <div class="scont">
                        <a href="#" class="social1b"><img src="<?= THEME_ASSET_URL ?>images/icon-facebook.png" alt="" /></a>
                        <a href="#" class="social2b"><img src="<?= THEME_ASSET_URL ?>images/icon-twitter.png" alt="" /></a>
                        <a href="#" class="social3b"><img src="<?= THEME_ASSET_URL ?>images/icon-gplus.png" alt="" /></a>
                        <a href="#" class="social4b"><img src="<?= THEME_ASSET_URL ?>images/icon-youtube.png" alt="" /></a>
                        <br /><br /><br />
                        <img src="<?= THEME_ASSET_URL ?>images/logo1.ico" width="100px" alt="" /><br />
                        &copy; 2013 | <a href="#">Privacy Policy</a><br />
                        All Rights Reserved
                        <br /><br />

                    </div>
                </div>
                <!-- End of column 1-->

                <div class="col-md-3">
                    <span class="ftitle">Điểm đi</span>
                    <br /><br />
                    <ul class="footerlist">
                        <li><a href="#">Hà Nội</a></li>
                        <li><a href="#">Hải Phòng</a></li>
                        <li><a href="#">Nam Định</a></li>
                        <li><a href="#">Bắc Ninh</a></li>
                        <li><a href="#">Hà Nam</a></li>
                        <li><a href="#">Ninh Bình</a></li>
                    </ul>
                </div>
                <!-- End of column 2-->

                <div class="col-md-3">
                    <span class="ftitle">Điểm đến</span>
                    <br /><br />
                    <ul class="footerlist">
                        <li><a href="#">Hà Nội</a></li>
                        <li><a href="#">Hải Phòng</a></li>
                        <li><a href="#">Nam Định</a></li>
                        <li><a href="#">Bắc Ninh</a></li>
                        <li><a href="#">Hà Nam</a></li>
                        <li><a href="#">Ninh Bình</a></li>
                    </ul>
                </div>
                <!-- End of column 3-->

                <div class="col-md-3 grey">
                    <span class="ftitle">Liên lạc</span>
                    <div class="relative">
                        <input type="email" class="form-control fccustom2" id="exampleInputEmail1" placeholder="Nhập email">
                        <button type="submit" class="btn btn-default btncustom">Submit<img src="<?= THEME_ASSET_URL ?>images/arrow.png" alt="" /></button>
                    </div>
                    <br /><br />
                    <span class="ftitle">Hỗ trợ</span><br />
                    <span class="pnr">024.5333.344</span><br />
                    office@travel.com
                </div>
                <!-- End of column 4-->

            </div>
        </div>
    </div>

    <!-- jquery -->
    <script src="<?= THEME_ASSET_URL ?>assets/js/js-index3.js"></script>

<!-- Custom functions -->
<script src="<?= THEME_ASSET_URL ?>assets/js/functions.js"></script>

<!-- Picker UI-->
<script src="<?= THEME_ASSET_URL ?>assets/js/jquery-ui.js"></script>

<!-- Easing -->
<script src="<?= THEME_ASSET_URL ?>assets/js/jquery.easing.js"></script>

<!-- jQuery KenBurn Slider  -->
<script type="text/javascript" src="<?= THEME_ASSET_URL ?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Nicescroll  -->
<script src="<?= THEME_ASSET_URL ?>assets/js/jquery.nicescroll.min.js"></script>

<!-- CarouFredSel -->
<script src="<?= THEME_ASSET_URL ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.transit.min.js"></script>
<script type="text/javascript" src="<?= THEME_ASSET_URL ?>assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>

<!-- Custom Select -->
<script type='text/javascript' src="<?= THEME_ASSET_URL ?>assets/js/jquery.customSelect.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= THEME_ASSET_URL ?>dist/js/bootstrap.min.js"></script>
</body>

</html>
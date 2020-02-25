<?php 
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";
$loggedInUser = $_SESSION[AUTH];
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
    <link rel="stylesheet" href="public/css/main.css">
    <title>Bán vé xe khách - Trang chủ</title>
</head>

<body>
    <header class="border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2 dashboard-logo">
                    <a href="#">
                        <img src="public/images/logo1.ico" alt="LOGO" class="">
                    </a>
                </div>
                <div class="col-md-10">
                    <!-- <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
                    <ul class="navbar navbar-expand-md dashboard-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thông tin</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, abcxyz</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                                    <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                    <a class="dropdown-item" href="#">Thông tin vé xe</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Đăng xuất</a>
                                </div>
                            </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" title="">Đăng Nhập</a>
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
            <div class="row">
                <div class="col-4 form-group">
                    <label for="my-select" class="text-capitalize font-weight-bold">Điểm đầu</label>
                    <select id="my-select" class="form-control" name="">
                        <option>Text</option>
                        <option>Text</option>
                        <option>Text</option>
                        <option>Text</option>
                        <option>Text</option>
                    </select>
                </div>
                <div class="col-4 form-group">
                    <label for="" class="text-capitalize font-weight-bold">Chọn ngày</label>
                    <input type="date" name="" id="" class="form-control">
                </div>
                <div class="col-4 form-group">
                    <label for="my-select" class="text-capitalize font-weight-bold">điểm cuối</label>
                    <select id="my-select" class="form-control" name="">
                        <option>Text</option>
                        <option>Text</option>
                        <option>Text</option>
                        <option>Text</option>
                        <option>Text</option>
                    </select>
                </div>
            </div>
            <input id="my-input" class="form-control btn btn-primary col-2 center" type="submit" name="" value="Tìm Vé">
        </div>
    </div>
    <!--END BANNER - START NEWS-->
    <div class="new pt-2 pb-5">
        <div class="container">
            <h2 class="h3 text-capitalize text-center">tin tức chung</h2>
            <div class="row">
                <div class="newsImg col-4 border p-2">
                    <img class="img-rounded" src="https://dummyimage.com/400x400/aaa/b3e3f2&text=Code+Nhu+Len" alt="here is news image">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam impedit optio perspiciatis?</p>
                </div>
                <div class="newsImg col-4 border p-2">
                    <img class="img-rounded" src="https://dummyimage.com/400x400/aaa/b3e3f2&text=Code+Nhu+Len" alt="here is news image">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam impedit optio perspiciatis?</p>
                </div>
                <div class="newsImg col-4 border p-2">
                    <img class="img-rounded" src="https://dummyimage.com/400x400/aaa/b3e3f2&text=Code+Nhu+Len" alt="here is news image">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
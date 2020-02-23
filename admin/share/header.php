<?php
// session_start();
// require_once '../../config/utils.php';

// $loggedInUser = $_SESSION[AUTH];
?>
<header >
    <div class="row">
        <div class="col-2 dashboard-logo">
            <a href="<?php echo ADMIN_URL . '../'?>">
                <img src="<?php echo BASE_URL . 'public/images/logo1.ico'?>" alt="" class="img-thumbnail">
            </a>
        </div>
        <div class="col-md-10">
                    <!-- <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
                    <ul class="navbar navbar-expand-md dashboard-nav nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= ADMIN_URL . 'users'?>">Quản Lý Tài Khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản Lý Vé Xe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quản Lý Xe</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Quản Lý Loại Xe</a>
                                <a class="dropdown-item" href="#">Quản Lý Nhà Xe</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản Lý Quãng Đường</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, abcxyz</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                                    <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                                    <a class="dropdown-item" href="#">Thông tin vé xe</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Đăng xuất</a>
                                </div>
                            </li>

                    </ul>
                    <!-- </div> -->
                </div>
    </div>
</header>
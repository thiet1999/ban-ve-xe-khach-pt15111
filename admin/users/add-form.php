<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$getRoleQuery = "select * from roles where status = 1";
$roles = queryExecute($getRoleQuery, true);

?>
<!doctype html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản trị - Thêm tài khoản</title>
    <?php include_once '../share/style.php' ?>
</head>
<body>
<div class="container">
    <?php include_once '../share/header.php' ?>
    <main class="container">
        <h3>Tạo tài khoản</h3>
        <form id="add-user-form" action="<?= ADMIN_URL . 'users/save-add.php'?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tên người dùng<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name">
                        <?php if(isset($_GET['nameerr'])):?>
                        <label class="error"><?= $_GET['nameerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email">
                        <?php if(isset($_GET['emailerr'])):?>
                            <label class="error"><?= $_GET['emailerr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu<span class="text-danger">*</span></label>
                        <input type="password" id="main-password" class="form-control" name="password">
                        <?php if(isset($_GET['passworderr'])):?>
                            <label class="error"><?= $_GET['passworderr']?></label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="cfpassword">
                    </div>
                    <div class="form-group">
                                <label for="">Quyền</label>
                                <select name="role_id" class="form-control">
                                    <?php foreach ($roles as $ro):?>
                                        <option value="<?= $ro['id'] ?>"><?= $ro['name'] ?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                    <a href="<?= ADMIN_URL . 'users'?>" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>


    </main>
</div>
<?php include_once '../share/script.php' ?>
<!-- <script>
    $('#add-user-form').validate({
        rules:{
            name: {
                required: true,
                maxlength: 191
            },
            email: {
                required: true,
                maxlength: 191,
                email: true,
                remote: {
                    url: "<?= ADMIN_URL . 'users/verify-email-existed.php'?>",
                    type: "post",
                    data: {
                        email: function() {
                            return $( "input[name='email']" ).val();
                        }
                    }
                }
            },
            password:{
                required: true,
                maxlength: 191
            },
            cfpassword: {
                required: true,
                equalTo: "#main-password"
            },
            phone_number: {
                number: true
            },
           
        },
        messages: {
            name: {
                required: "Hãy nhập tên người dùng",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            email: {
                required: "Hãy nhập email",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                email: "Không đúng định dạng email",
                remote: "Email đã tồn tại, vui lòng sử dụng email khác"
            },
            password:{
                required: "Hãy nhập mật khẩu",
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            cfpassword: {
                required: "Nhập lại mật khẩu",
                equalTo: "Cần khớp với mật khẩu"
            },
            phone_number: {
                min: "Bắt buộc là số có 10 chữ số",
                max: "Bắt buộc là số có 10 chữ số",
                number: "Nhập định dạng số"
            },
           
        }
    });
</script> -->
</body>
</html>

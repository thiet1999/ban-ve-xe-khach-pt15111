<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
$roleId = isset($_GET['role']) == true ? $_GET['role'] : false;

// lay danh sach roles
$getRolesQuery = "select * from roles where status = 1";
$roles = queryExecute($getRolesQuery, true);

// danh sach users
$getUsersQuery = "select u.*, r.name as role_name
from users u
join roles r
on u.role_id = r.id";

if($keyword !== ""){
    $getUsersQuery .= " where (u.email like '%$keyword%'
                            or u.phone_number like '%$keyword%'
                            or u.name like '%$keyword%'
                            or u.house_no like '%$keyword%'  )
                      ";
    if($roleId !== false && $roleId !== ""){
        $getUsersQuery .= " and u.role_id = $roleId";
    }
}else{
    if($roleId !== false && $roleId !== ""){
        $getUsersQuery .= " where u.role_id = $roleId";
    }
}
$users = queryExecute($getUsersQuery, true);
?>
<!doctype html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản trị - Thêm tài khoản</title>
    <?php include_once '../_share/style.php' ?>
</head>

<body>
    <?php include_once '../_share/header.php' ?>
    <!-- END HEADER -> MAIN -->
    <main class="border-bottom">
        <div class="container">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Quản trị users</h1>
                            </div><!-- /.col -->
                            <!-- <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?= ADMIN_URL ?>">Dashboard</a></li>
                                </ol>
                            </div> -->
                            <!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <!-- BỎ TÌM KIẾM -->
                    <!-- Danh sách users  -->
                    <table class="table table-stripped">
                        <thead>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Loại tài khoản</th>
                            <th>Số ĐT</th>
                            <th>
                                <a href="<?php echo ADMIN_URL . 'users/add-form.php' ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm</a>
                            </th>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $us) : ?>
                                <tr>
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td>
                                        <?php echo $us['role_id'] ?>
                                    </td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['id'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
    </main>
    <?php include_once '../_share/script.php' ?>
    <!-- <script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $('#preview-img').attr('src', "<?= DEFAULT_IMAGE ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
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
                    url: "<?= ADMIN_URL . 'users/verify-email-existed.php' ?>",
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
            house_no:{
                maxlength: 191
            },
            avatar: {
                required: true,
                extension: "png|jpg|jpeg|gif"
            }
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
            house_no:{
                maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
            },
            avatar: {
                required: "Hãy nhập ảnh đại diện",
                extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
            }
        }
    });
</script> -->
</body>

</html>
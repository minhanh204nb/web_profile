<?php require_once('head.php'); ?>
<?php require_once('nav.php'); ?>
<?php
if (isset($_POST["submit"]) && isset($_SESSION['admin'])) {

    $create = $ketnoi->query("UPDATE `setting` SET
        `title` = '" . $_POST['title'] . "',
        `image` = '" . $_POST['image'] . "',
        `description` = '" . $_POST['description'] . "',
        `keywords` = '" . $_POST['keywords'] . "',
        `author` = '" . $_POST['author'] . "',
        `favicon` = '" . $_POST['favicon'] . "',
        `email` = '" . $_POST['email'] . "',
        `number` = '" . $_POST['number'] . "',
        `fanpage` = '" . $_POST['fanpage'] . "',
        `groupfacebook` = '" . $_POST['groupfacebook'] . "',
        `messenger` = '" . $_POST['messenger'] . "',
        `comment` = '" . $_POST['comment'] . "'
        ");

    if ($create) {
        echo '<script type="text/javascript">swal("Thành Công","Lưu thành công","success");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    } else {
        echo '<script type="text/javascript">swal("Thất Bại","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    }
}
?>
<div class="row mb-2">
    <div class="col-sm-6">

    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Thông Tin</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Tiêu đề</label>
                                <input type="text" class="form-control" name="title" placeholder="logo" value="<?= $title; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh bìa</label>
                                <input type="text" class="form-control" name="image" placeholder="banner" value="<?= $image; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh logo mini</label>
                                <input type="text" class="form-control" name="favicon" placeholder="favicon" value="<?= $favicon; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <input type="text" class="form-control" placeholder="URL BANNER" name="description" value="<?= $description; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Từ khóa</label>
                                <input type="text" class="form-control" name="keywords" placeholder="keywords" value="<?= $keywords; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên tác giả</label>
                                <input type="text" class="form-control" name="author" placeholder="Nguyễn Đình Bảo" value="<?= $author; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="vani.realest@gmail.com" value="<?= $email; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fanpage</label>
                                <input type="text" class="form-control" name="fanpage" placeholder="fanpage" value="<?= $fanpage; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Group</label>
                                <input type="text" class="form-control" name="groupfacebook" placeholder="Nhóm Facebook" value="<?= $groupfacebook; ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Messenger</label>
                                <input type="text" class="form-control" name="messenger" placeholder="Messenger" value="<?= $messenger; ?>">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">SDT CỦA BẠN</label>
                                <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="number" value="<?= $number; ?>">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung chuyển khoản</label>
                                <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="comment" value="<?= $comment; ?>">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-info btn-block">LƯU THAY ĐỔI</button>

                    </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
<div class="col-md-12">
    <div class="card">
        <form class="form-horizontal" action="" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">ACCOUNT ADMIN</h3>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tài Khoản</label>
                            <input type="text" class="form-control" name="user" placeholder="nhập tài khoản" value="<?= $user['username']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" class="form-control" placeholder="nhập mạt khẩu" name="pass" value="<?= $user['password']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">TOKEN</label>
                            <input type="text" class="form-control" placeholder="nhập token" name="token" value="<?= $user['token']; ?>">
                        </div>
                    </div>
                    <button name="luupass" type="submit" class="btn btn-success btn-block">THAY ĐỔI</button>
                </div>
        </form>
    </div>
</div>
</div>
<?php
//VANI DZ 
if (isset($_POST['luupass'])) {
    $create = $ketnoi->query("UPDATE `users` SET
    `username` = '" . $_POST['user'] . "',
    `token` = '" . $_POST['token'] . "',
    `password` = '" . $_POST['pass'] . "' ");

    if ($create) {
        echo '<script type="text/javascript">swal("Thành Công","Thay Đổi thành công","success");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    } else {
        echo '<script type="text/javascript">swal("Thất Bại","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    }
}
//VANI DZ 
?>

<!-- /.col -->
</div>
<!-- /.row (main row) -->
<?php require_once('foot.php'); ?>
<script src="dist/jquery-asColor.js"></script>
<script src="dist/jquery-asGradient.js"></script>
<script src="dist/jquery-asColorPicker.js"></script>
<script src="dist/colorpicker.js"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        //VANI DZ 
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                        .endOf('month')
                    ]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        //VANI DZ 
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
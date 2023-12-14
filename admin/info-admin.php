<?php require_once('head.php'); ?>
<?php require_once('nav.php'); ?>
<?php
if (isset($_POST["submit"]) && isset($_SESSION['admin'])) {

    $info = $ketnoi->query("UPDATE `user` SET
        `name` = '" . $_POST['name'] . "',
        `username` = '" . $_POST['username'] . "',
        `idfb` = '" . $_POST['idfb'] . "',
        `telegram` = '" . $_POST['telegram'] . "',
        `avatar` = '" . $_POST['avatar'] . "'
        ");

    if ($info) {
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
                                <label for="exampleInputFile">Tên</label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên bạn" value="<?= $name; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên người dùng</label>
                                <input type="text" class="form-control" name="username" placeholder="Nhập tên người dùng" value="<?= $username; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Facebook</label>
                                <input type="text" class="form-control" name="idfb" placeholder="Nhập idfb" value="<?= $idfb; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhập user telegram</label>
                                <input type="text" class="form-control" placeholder="Telegram" name="telegram" value="<?= $telegram; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link avatar hiển thị</label>
                                <input type="text" class="form-control" name="avatar" placeholder="Nhập link avatar" value="<?= $avatar; ?>">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-info btn-block">LƯU THAY ĐỔI</button>

                    </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>

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
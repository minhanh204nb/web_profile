<?php require_once('head.php'); ?>
<?php require_once('nav.php'); ?>
<?php
function xoadaune($str)
{
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
    $str = preg_replace("/( )/", '-', $str);
    return $str;
}

if (isset($_GET['xoabaiviet'])) {
    $xoabaiviet = $_GET['xoabaiviet'];

    $thaotac = mysqli_query($ketnoi, "DELETE FROM `news` WHERE `link` = '" . $xoabaiviet . "' ");

    if ($thaotac) {
        echo '<script type="text/javascript">swal("Thành Công","Xóa Thành Công","success");setTimeout(function(){ location.href = "news.php" },500);</script>';
    } else {
        echo '<script type="text/javascript">swal("Lỗi","Lỗi Mẹ Rồi","error");setTimeout(function(){ location.href = "news.php" },1000);</script>';
    }
}
?>
<?php
//VANI DZ 
if (isset($_POST["submit"]) && isset($_SESSION['admin'])) {
    $title_news = $_POST['tieude'];
    $codelink = xoadaune($title_news);
    $ngaydangbaiviet = date('d-m-Y');
    $taomoi = $ketnoi->query("INSERT INTO `news` SET
        `link` = '" . $codelink . "',
        `image-news` = '" . $_POST['image-news'] . "',
        `tieude` = '" . $_POST['tieude'] . "',
        `noidung` = '" . $_POST['noidung'] . "',
        `status` = 'success',
        `luotxem` = '0',
        `ngaydang` = '" . $ngaydangbaiviet . "' ");
    if ($taomoi) {
        echo '<script type="text/javascript">swal("Thành Công","Đăng Thành Công Rồi Đó","success");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    } else {
        echo '<script type="text/javascript">swal("Thất Bại","Lỗi Rồi Vào Fix Lại Đi","error");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    }
}
//VANI DZ 
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
                            <h3 class="text-center">TIN TỨC</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TIÊU ĐỀ</label>
                                <input type="text" class="form-control" placeholder="Tiêu Đề Bài Viết" name="tieude">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LINK ẢNH</label>
                                <input type="text" class="form-control" placeholder="Link Ảnh Cho Bài Viết" name="image-news">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">NỘI DUNG</label>
                                <textarea name="noidung" class="textarea"></textarea>
                            </div>
                        </div>

                        <button name="submit" type="submit" class="btn btn-info btn-block">ĐĂNG BÀI VIẾT</button>

                    </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">BÀI VIẾT HIỆN CÓ</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">LINK</th>
                                    <th>TIÊU ĐỀ</th>
                                    <th>NỘI DUNG</th>
                                    <th>NGÀY ĐĂNG</th>
                                    <th>LƯỢT XEM</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>THAO TÁC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach (news() as $vanidz) { ?>
                                    <tr>
                                        <td><?= $vanidz['link']; ?></td>
                                        <td><?= $vanidz['tieude']; ?></td>
                                        <td><?= $vanidz['noidung']; ?></td>
                                        <td><?= $vanidz['ngaydang']; ?></td>
                                        <td><?= $vanidz['luotxem']; ?></td>
                                        <td><?= $vanidz['status']; ?></td>
                                        <td>
                                            <a href="news.php?xoabaiviet=<?= $vanidz['link']; ?>" class="btn btn-default">
                                                <i class="fas fa-trash"></i> Xóa
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    VUI LÒNG THAO TÁC CẨN THẬN
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row (main row) -->
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
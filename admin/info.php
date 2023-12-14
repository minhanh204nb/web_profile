<?php include('head.php'); ?>
<?php include('nav.php'); ?>

<?php
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];

    $create = mysqli_query($ketnoi, "DELETE FROM `info` WHERE `id` = '" . $delete . "' ");

    if ($create) {
        echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "info.php" },500);</script>';
    } else {
        echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "info.php" },1000);</script>';
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
            <div class="card-header">
                <h3 class="card-title">THÔNG TIN</h3>
                <div class="text-right">
                    <a type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" class="btn btn-info">TẠO CHUYÊN MỤC</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>TIÊU ĐỀ</th>
                                <th>THÔNG TIN</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = mysqli_query($ketnoi, "SELECT * FROM `info` ORDER BY id asc ");
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['title']; ?></td>
                                    <td><?= $row['info']; ?></td>=
                                    <td>
                                        <a href="info.php?delete=<?= $row['id']; ?>" class="btn btn-default">
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">THÊM THÔNG TIN</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">TIÊU ĐỀ</label>
                        <input type="text" class="form-control" name="title" placeholder="Nhập Tiêu đề" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">THÔNG TIN</label>
                        <textarea type="text" class="textarea" name="info" placeholder="Nhập thông tin" required=""></textarea>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
                <button type="submit" name="submit" class="btn btn-primary">TẠO</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
if (isset($_POST["submit"])) {
    $create = mysqli_query($ketnoi, "INSERT INTO `info` SET 
    `title` = '" . $_POST['title'] . "',
    `info` = '" . $_POST['info'] . "'
    ");

    if ($create) {
        echo '<script type="text/javascript">swal("Thành Công","Thêm Thành Công","success");
            setTimeout(function(){ location.href = "" },1000);</script>';
    } else {
        echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");</script>';
    }
}

?>

<?php include('foot.php'); ?>
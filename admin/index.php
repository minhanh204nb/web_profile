<?php include('head.php'); ?>
<?php include('nav.php'); ?>

<div class="row mb-2">
	<div class="col-sm-12">
		<br>

	</div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
	<!-- Vui Lòng Không Xóa Để Tôn Trọng Tác Giả -->
	<div class="col-lg-12 col-12">
		<div class="alert alert-info" role="alert">
			<b>Đã Cập Nhập Version 3.0 Thành Công </b><br>
			<b>Ngày Cập Nhập Gần Nhất : 14 / 08 / 2023</b> <br>
			<p>Được Thực Hiện Bởi <b><a href="https://www.facebook.com/minhanh204nb/" style="text-decoration: none">Trần Minh Anh </a></b></p>
		</div>
	</div>
	<!-- THANK YOU - I LOVE YOU SO MUCH -->

	<div class="col-lg-6 col-6">

		<div class="card card-service box-service-panel">
			<div class="card-body" data-toggle="tooltip" data-placement="bottom">
				<div class="box-body text-center">
					<a>THÔNG TIN ADMIN</a><br>
					<h3></h3>
					<hr>
					<a rel="nofollow" href="info-admin.php"><button class="btn btn-primary btn-block">Xem Ngay</button></a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-6">

		<div class="card card-service box-service-panel">
			<div class="card-body" data-toggle="tooltip" data-placement="bottom">
				<div class="box-body text-center">
					<a>THÊM BÀI VIẾT</a><br>
					<h3></h3>
					<hr>
					<a rel="nofollow" href="news.php"><button class="btn btn-secondary btn-block">Xem Ngay</button></a>
				</div>
			</div>
		</div>
	</div>


	<div class="col-lg-6 col-6">

		<div class="card card-service box-service-panel">
			<div class="card-body" data-toggle="tooltip" data-placement="bottom">
				<div class="box-body text-center">
					<a>THÔNG TIN CHUYỂN KHOẢN</a><br>
					<h3></h3>
					<hr>
					<a rel="nofollow" href="banking.php"><button class="btn btn-success btn-block">Xem Ngay</button></a>
				</div>
			</div>
		</div>
	</div>


	<div class="col-lg-6 col-6">
		<div class="card card-service box-service-panel">
			<div class="card-body" data-toggle="tooltip" data-placement="bottom">
				<div class="box-body text-center">
					<a>CÀI ĐẶT WEBSITE</a><br>
					<h3></h3>
					<hr>
					<a rel="nofollow" href="cai-dat.php"><button class="btn btn-warning btn-block">Xem Ngay</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		$("#datatable2").DataTable({
			"responsive": false,
			"autoWidth": false,
		});
	});
</script>
<?php include('foot.php'); ?>
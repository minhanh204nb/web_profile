<?php include 'config/config.php'; ?>
<?php include 'layouts/header.php'; ?>
<?php include 'layouts/nav.php'; ?>
<div class="ta-content">
	<div class="shop-profile">
		<?php include 'layouts/avatar.php'; ?>
		<div class="ta-container pt-3">
			<div class="shop-navigation">
				<div class="row gx-sm-3 gx-2">X
					<div class="col-4">
						<div class="profile-navigation home active"><a href="/" class="nuxt-link-exact-active nuxt-link-active" aria-current="page"><i class="fad fa-home"></i> <span class="text">Cá nhân</span></a></div>
					</div>
					<div class="col-4">
						<div class="profile-navigation review"><a href="/pages/banking.php" class=""><i class="fad fa-star"></i>
								<span class="text">Thanh toán</span></a></div>
					</div>
					<div class="col-4">
						<div class="profile-navigation community"><a href="/pages/blogs.php" class=""><i class="fad fa-flag"></i> <span class="text">Bài đăng</span></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="ta-content">
			<div class="ta-container py-3 pb-sm-4 pt-sm-3">
				<div>
					<div class="row align-items-center gx-3">
						<h4 class="page-title">Mạng xã hội của <?= $name; ?></h4>
						<?php foreach (social() as $vanidangiu) { ?>
							<div class="col-xl-2 col-md-3 col-sm-4 col-6">
								<div class="ta-categories mb-3 p-2 border border-gray rounded list-categories">
									<div class="d-flex align-items-center flex-column flex-sm-row text-center text-sm-start pb-2">
										<div class="img pb-1"><img height="45" title="Logo" alt="Logo" class="rounded shadow-sm border rounded" src="<?= $vanidangiu['logo']; ?>">
										</div>
										<div class="info ps-sm-2 pt-2 pt-sm-0">
											<h4 class="name fs-14 fw-bold mb-0">
												<?= $vanidangiu['social']; ?>
											</h4>
											<span class="fs-12 text-muted">
												Followers: <b><?= format_cash($vanidangiu['followers']); ?></b></span>
										</div>
									</div>
									<a href="<?= $vanidangiu['link']; ?>" class="btn btn-light btn-sm w-100 fs-13">
										Truy cập
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row align-items-center gx-3">
						<h4 class="page-title">Thông tin của <?= $name; ?></h4>
						<?php foreach (info() as $vaniluv) { ?>
							<div class="col-lg-6">
								<div class="card">
									<div data-bs-toggle="tooltip" data-bs-title="Default tooltip" class="card-body">
										<h5 class="card-title text-danger"><i class="fad fa-star"></i> <?= $vaniluv['title']; ?>:</h5>
										<p class="mb-0 fs-14">
											<?= $vaniluv['info']; ?>
										</p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row align-items-center gx-3">
						<h4 class="page-title">Website do <?= $name; ?> quản lý</h4>
						<?php foreach (website() as $vanilmao) { ?>
							<div class="col-lg-3 col-md-4 col-sm-6 mb-3">
								<div class="seller-profile border rounded">
									<div class="d-flex align-items-center p-2">
										<div class="avatar"><img height="65" width="65" title="Logo" alt="logo" class="rounded" src="<?= $vanilmao['logo']; ?>">
										</div>
										<div class="info ps-2">
											<h4 class="m-0 fs-15 fw-500 lh-1"><?= $vanilmao['domain']; ?></h4>
											<div class="stats"><span class="fs-13 text-muted">
													<?= $vanilmao['provide']; ?></span></div>
										</div>
									</div> <a href="<?= $vanilmao['link']; ?>" class="p-2 d-block fs-13 fw-bold text-dark text-center border-top">
										Truy cập ngay <i class="fa fa-arrow-right lh-0"></i></a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'layouts/footer.php'; ?>
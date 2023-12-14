<?php require_once('../config/config.php'); ?>
<?php require_once('../layouts/header.php'); ?>
<?php require_once('../layouts/nav.php');
?>
<div class="ta-content">
    <div class="shop-profile">
        <?php require_once('../layouts/avatar.php'); ?>
        <div class="ta-container pt-3">
            <div class="shop-navigation">
                <div class="row gx-sm-3 gx-2">
                    <div class="col-4">
                        <div class="profile-navigation home"><a href="/" class="" aria-current="page"><i class="fad fa-home"></i> <span class="text">Cá nhân</span></a></div>
                    </div>
                    <div class="col-4">
                        <div class="profile-navigation review"><a href="/pages/banking.php" class=""><i class="fad fa-star"></i> <span class="text">Thanh toán</span></a></div>
                    </div>
                    <div class="col-4">
                        <div class="profile-navigation community active"><a href="/blogs" class="nuxt-link-exact-active nuxt-link-active"><i class="fad fa-flag"></i> <span class="text">Bài đăng</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ta-content">
            <div class="ta-content">
                <div class="ta-container py-3 pb-sm-4 pt-sm-3">
                    <div>
                        <div class="row flex-row">
                            <?php foreach (news() as $vanidz) { ?>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="ta-account mb-4 shadow-sm position-relative"><span class="ta-account-id bg-primary">Lượt xem: <?= $vanidz['luotxem']; ?></span>
                                        <div class="thumbnail position-relative">
                                            <div id="account-carousel-127" class="carousel slide">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active"><img title="" alt="" class="w-100 mh-100 ta-lz-load ta-lz-loaded" src="<?= $vanidz['image-news']; ?>">
                                                    </div>
                                                </div> <!---->
                                            </div> <span class="description text-truncate">
                                                <?= $vanidz['tieude']; ?>
                                            </span>
                                        </div>
                                        <div class="info position-relative">
                                            <div class="p-2">
                                                <div class="seller"><a href="#" class="d-flex align-items-center">
                                                        <div class="avatar"><img alt="" class="rounded-circle" src="<?= $avatar; ?>">
                                                        </div> <span class="name fs-13 text-main">
                                                            <?= $name; ?>
                                                        </span>
                                                    </a> <span class="time fs-12 text-muted"><i class="fad fa-clock"></i>
                                                        <?= $vanidz['ngaydang']; ?>
                                                    </span></div>
                                            </div>
                                            <div class="text-center view-account bg-main"><a href="/blog/<?= $vanidz['link']; ?>" class="fs-14 d-block py-2 stretched-link text-white">
                                                    <strong>Xem ngay</strong></a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../layouts/footer.php'); ?>
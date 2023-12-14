<?php require_once('../config/config.php'); ?>
<?php require_once('../layouts/header.php'); ?>
<?php require_once('../layouts/nav.php');
if (isset($_GET['link'])) {
    $link = $_GET['link'];
}

$stmt = $ketnoi->prepare("SELECT * FROM `news` WHERE `link` = ? AND `status` = 'success'");
$stmt->bind_param("s", $link);
$stmt->execute();

$baidang = $stmt->get_result();
while ($vanidz = mysqli_fetch_assoc($baidang)) {
    // Rest of your code...
}
$stmt->close();

$baidang = $ketnoi->query("SELECT * FROM `news` WHERE `link` = '$link' AND `status` = 'success'");
while ($vanidz = mysqli_fetch_assoc($baidang)) {
    mysqli_query($ketnoi, "UPDATE `news` SET luotxem = luotxem + 1 WHERE `link` = '$link' ");
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
                            <div class="profile-navigation review"><a href="/banking" class=""><i class="fad fa-star"></i> <span class="text">Thanh toán</span></a></div>
                        </div>
                        <div class="col-4">
                            <div class="profile-navigation community"><a href="/blogs" class=""><i class="fad fa-flag"></i> <span class="text">Bài đăng</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ta-content">
                <div class="ta-content">
                    <div class="ta-container py-3 pb-sm-4 pt-sm-3">
                        <div>
                            <div class="row flex-row">
                                <div class="col-xl-7">
                                    <div class="card">
                                        <div data-bs-toggle="tooltip" data-bs-title="Default tooltip" class="card-body">
                                            <h5 class="card-title text-danger"><i class="fad fa-star"></i> <?= $vanidz['tieude']; ?>
                                            </h5>
                                            <p class="mb-0 fs-14">
                                                <?= $vanidz['noidung']; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-xl-5">
                                    <div class="card">
                                        <div class="seller-profile bg-profile rounded-top">
                                            <div class="seller d-flex align-items-center p-3">
                                                <div class="avatar"><img height="42" alt="" class="rounded-circle shadow-sm" src="<?= $avatar; ?>"></div>
                                                <div class="ps-2">
                                                    <h4 class="group fs-14 mb-0"><span class="text-break name"><?= $name; ?></span> <span class="text-muted">(Nguời đăng)</span></h4>
                                                </div>
                                            </div>
                                            <div class="pt-0 p-3">
                                                <div class="seller-contacts">
                                                    <h5 class="fs-13 text-secondary fw-normal small pb-1">
                                                        Thông tin liên hệ của người đăng:
                                                    </h5>
                                                    <div class="row gx-3">
                                                        <div class="col-4">
                                                            <div class="seller-contact"><a href="https://www.facebook.com/<?= $messenger; ?>" target="_blank" class="btn btn-light bg-white d-block btn-sm"><img height="20" src="https://cdn.hassbase.com/imgs/social-icon/facebook.png"></a></div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="seller-contact"><a href="https://zalo.me/<?= $number; ?>" target="_blank" class="btn btn-light bg-white d-block btn-sm"><img height="20" src="https://cdn.hassbase.com/imgs/social-icon/zalo.png"></a></div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="seller-contact"><a href="#" class="btn btn-light bg-white d-block btn-sm"><i height="20" class="fad fa-phone-plus text-primary"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 d-block mb-0 py-2 px-3 fs-13 rounded border dashed shadow-sm bg-light"><b>Chú ý:</b> Copyright © 2022 | Thiết kế web bởi Vani All rights reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../layouts/footer.php'); ?>
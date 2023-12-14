<?php require_once('../config/config.php'); ?>
<?php require_once('../layouts/header.php'); ?>
<?php require_once('../layouts/nav.php'); ?>
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
                        <div class="profile-navigation review active"><a href="/banking" class="nuxt-link-exact-active nuxt-link-active"><i class="fad fa-star"></i> <span class="text">Thanh toán</span></a></div>
                    </div>
                    <div class="col-4">
                        <div class="profile-navigation community"><a href="/pages/blogs.php" class=""><i class="fad fa-flag"></i> <span class="text">Bài đăng</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ta-content">
            <div class="ta-content">
                <div class="ta-container py-3 pb-sm-4 pt-sm-3">
                    <div>
                        <h2 class="page-title">Chuyển khoản tài khoản</h2>
                        <div class="row flex-row-reverse">
                            <div class="col-lg-12">
                                <div class="ta-transfer-content text-center bg-light py-2 px-3 rounded border-dashed mb-3">
                                    <div class="fs-13 text-muted">Nội dung chuyển khoản: </div>
                                    <p class="mb-0 fs-18">
                                        <strong><?= $comment; ?></strong>
                                        <i class="fad text-primary cursor-pointer fa-clone" onclick="copy('<?= $comment; ?>')"></i>
                                    </p>
                                </div>
                                <div class="row">
                                    <!--BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN-->
                                    <!--COPYRIGHT BELONG TO VANI - CEO MSV.VN-->
                                    <?php foreach ($ketnoi->query("SELECT * FROM `banking` ORDER BY `id` asc") as $value) { ?>
                                        <div class="col-sm-6">
                                            <div class="payment mb-3 bg-white rounded border shadow-sm p-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon position-relative"><img alt="<?= $value['bank']; ?>" title="MB" class="shadow-sm border border-gray" src="<?= $value['logo']; ?>">
                                                        <?php if ($value['bank'] == 'MB' or $value['bank'] == 'VCB' or $value['bank'] == 'ACB' or $value['bank'] == 'MOMO') { ?>
                                                            <button class="btn btn-main btn-qr mt-1 w-100 fs-10" data-bs-toggle="modal" data-bs-target="#<?= $value['id']; ?>"><i class="fal fa-qrcode"></i> QR-Code
                                                            </button>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="info ps-3">
                                                        <div class="bank fs-14 text-muted">
                                                            Chuyển khoản <?= $value['bank']; ?>
                                                        </div>
                                                        <div class="number fs-17"><strong><?= $value['number']; ?></strong> <i class="fad text-primary cursor-pointer fa-clone" onclick="copy('<?= $value['number']; ?>')"></i></div>
                                                        <div class="name fs-15">
                                                            <?= $value['name']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!--BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN-->
                                    <!--COPYRIGHT BELONG TO VANI - CEO MSV.VN-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <?php foreach ($ketnoi->query("SELECT * FROM `banking` ORDER BY `id` asc") as $value) { ?>
                    <?php if ($value['bank'] == 'MOMO') { ?>
                        <div class="modal fade" id="<?= $value['id']; ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold">Quét mã QR</h5> <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center"><img height="320" alt="" class="mw-100 ta-lz-load ta-lz-loaded" src="https://momosv3.apimienphi.com/api/QRCode?phone=<?= $value['number']; ?>&note=<?= $comment; ?>&amount=10000">
                                        </div>
                                        <div class="alert alert-primary">
                                            Vào App của ngân hàng, tìm đến phần quét mã QR-Code để thanh toán, hệ thống đã thiết
                                            lập sẵn
                                            thông tin
                                            cũng như nội dung chuyển khoản, chỉ cần quét mã và xác nhận chuyển là xong
                                        </div> <button type="button" data-bs-dismiss="modal" class="btn btn-main w-100">Đóng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="modal fade" id="<?= $value['id']; ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold">Quét mã QR</h5> <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center"><img height="320" alt="" class="mw-100 ta-lz-load ta-lz-loaded" src="https://img.vietqr.io/image/<?= $value['bank']; ?>-<?= $value['number']; ?>-compact2.png?amount=10000&amp;accountName=<?= $value['name']; ?>&amp;addInfo=<?= $comment; ?>">
                                        </div>
                                        <div class="alert alert-primary">
                                            Vào App của ngân hàng, tìm đến phần quét mã QR-Code để thanh toán, hệ thống đã thiết
                                            lập sẵn
                                            thông tin
                                            cũng như nội dung chuyển khoản, chỉ cần quét mã và xác nhận chuyển là xong
                                        </div> <button type="button" data-bs-dismiss="modal" class="btn btn-main w-100">Đóng</button>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php require_once('../layouts/footer.php'); ?>
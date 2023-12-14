<body>
    <nav class="ta-navbar navbar navbar-expand-lg sticky-top navbar-white bg-white shadow-sm">
        <div class="container-fluid ta-container">
            <div class="d-flex align-items-center">
                <button type="button" aria-label="Toggle navigation" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/" class="navbar-brand fw-bold d-flex align-items-center nuxt-link-active">
                    <img height="27" alt="<?= $author; ?>" src="<?= $favicon; ?>">
                </a>
                <ul class="navbar-nav dropdown-profile">
                    <li class="nav-item dropdown bg-light rounded">
                        <a href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="nav-link dropdown-toggle d-flex align-items-center">
                            <img alt="" src="<?= $avatar; ?>" class="img-navbar rounded-circle shadow-sm me-1">
                            <span class="px-0 px-sm-1 lh-0 fs-13">
                                <span class="text-muted d-none d-sm-inline"><?= $author; ?> -
                                </span>
                                <span class="fw-bold text-teal px-1 px-sm-0">
                                    <span data-v-0abbdf5a="">Admin</span></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a href="/admin/login.php" class="dropdown-item">
                                    <i class="fal fa-user-circle"></i>
                                    <span>Thông tin</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <!--BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN-->
                <!--COPYRIGHT BELONG TO VANI - CEO MSV.VN-->
            </div>
            <div class="collapse navbar-collapse my-2 mt-lg-0 mb-1 mb-lg-0">
                <ul class="navbar-nav navbar-main me-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link"><i class="fal text-dark fa-home"></i> Cá nhân
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/banking.php" class="nav-link" aria-current="page"><i class="fal text-dark fa-wallet"></i>
                            Thanh toán
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/blogs.php" class="nav-link" aria-current="page"><i class="fal text-dark fa-flag"></i>
                            Bài đăng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
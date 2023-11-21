<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt=""> -->
                                    <h1><b>Daftar dulu Cuy!!</b></h1>
                                </a>
                                <p class="text-center">Buat akun mu disini.</p>
                                <form method="post" action="<?= base_url('auth/register');?>">
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">Name</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputtext1"
                                            aria-describedby="textHelp" value="<?= set_value('nama'); ?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password1" class="form-control"
                                            id="exampleInputPassword1" value="<?= set_value('password1'); ?>">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Ulangi Password</label>
                                        <input type="password" name="password2" class="form-control"
                                            id="exampleInputPassword1" value="<?= set_value('password2'); ?>">
                                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">submit</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Sudah punya akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="<?= base_url('Auth')?>">Login
                                            yuk
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
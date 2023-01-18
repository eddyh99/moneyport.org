<div class="login bg-signin">
    <div class="container">
        <div class="row d-flex d-lg-inline-grid justify-content-center align-items-center">
            <div class="col-10 col-sm-9 col-md-7 col-lg-5 box-form">
                <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                    action="<?= base_url(); ?>auth/register_refferal">
                    <?php if (@isset($_SESSION["failed"])) { ?>
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                    <?php if (@isset($_SESSION["success"])) { ?>
                    <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                    <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" name="time_location" id="time_location">
                    <div class="col-12 mb-4 text-center">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url(); ?>assets/img/logo-login.png" alt="">
                        </a>
                    </div>
                    <div class="col-12 mb-5">
                        <label for="email" class="form-label f-publicsans">Refferal code <span class="text-mute">(
                                optional )</span>
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control f-publicsans py-2" id="referral" name="referral"
                                value="<?php
                                                                                                                            if (@$_GET['ref'] == '') {
                                                                                                                                if (@isset($_SESSION['referral'])) {
                                                                                                                                    echo $_SESSION['referral'];
                                                                                                                                }
                                                                                                                            } else {
                                                                                                                                echo @$_GET['ref'];
                                                                                                                            } ?>">
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="submit" class="btn btn-login f-roboto">NEXT</button>
                        <p>Already have an account? <a href="<?= base_url(); ?>auth/login">Login</a></p>
                    </div>
                    <div class="col-12 d-grid gap-2 mt-5">
                        <p class="text-center f-roboto"><b>ATTENTION</b> : it is necessary to have a REFERRAL CODE for
                            the
                            subscription on the platform, if you do not have it follow us on our Instagram page and
                            request it.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
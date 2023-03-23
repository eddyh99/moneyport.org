<!-- Start Already Card -->
<?php if($card == 'confirm') {?>
    <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="container" style="margin-bottom: 8rem;">
                <div class="app-container py-5 ">
                    <h3 class="text-center text-blue-freedy fw-bolder f-poppins mt-5 pt-5">Confirmation details</h3>
                    <div class="mt-5 wrap-border-topup p-3 p-md-4 col-12 col-md-10 mx-auto">
                        <div class="d-flex justify-content-between px-0 px-md-5 py-4 text-blue-freedy fw-bold">
                            <span>Top up amount</span>
                            <span>€ 120</span>
                        </div>
                        <div class="d-flex justify-content-between px-0 px-md-5 py-4 text-blue-freedy fw-bold">
                            <span>Transaction Fee</span>
                            <span>€ 2</span>
                        </div>
                        <div class="d-flex justify-content-between px-0 px-md-5 py-4 text-blue-freedy fw-bold">
                            <span>Total deducted</span>
                            <span>€ 122</span>
                        </div>
                        <div class="d-flex justify-content-between px-0 px-md-5 py-4 text-blue-freedy fw-bold">
                            <span>New balance</span>
                        </div>
                        <div class="text-start d-flex justify-content-center mt-5 mb-4">
                            <a href="<?= base_url(); ?>homepage/card?card=<?= base64_encode('success')?>"
                                class="btn-card-confirm d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="f-lexend">Confirm</span>
                            </a>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
<?php } elseif($card == 'success'){?>
    <div class="d-flex justify-content-center align-items-center card-topup-success">
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="container" style="margin-bottom: 8rem;">
                <div class="app-container py-5 d-flex flex-column justify-content-center align-items-center ">
                    <h1 class="text-center f-poppins text-blue-freedy my-5">SUCCESS</h1>
                    <img src="<?= base_url()?>assets/img/check-success.png" alt="success">
                    <h1 class="text-center f-poppins text-blue-freedy my-5">YOUR CARD BALANCE WILL BE UPDATE WITHIN 2 WORKING DAYS</h1>
                    <div class="text-start d-flex justify-content-center mt-5 mb-4">
                        <a href="<?= base_url(); ?>homepage/card?card=<?= base64_encode('card')?>"
                            class="btn-card-confirm d-inline-flex align-items-center justify-content-center align-self-center">
                            <span class="f-lexend">Done</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {?>
    <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="container" style="margin-bottom: 8rem;">
                <div class="app-container py-5 ">
                    <div class="row" style="margin-top: 5rem;">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-12 box-code-freedy px-4 py-3">
                                <div class="d-flex flex-row">
                                    <div class="d-flex flex-column">
                                        <div class="copy-uqcode mt-3 mb-2 d-flex flex-row align-items-center">
                                            <span class="me-2">UNIQUE CODE : </span>
                                            <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                                            <a class="btn btn-copy me-2" id="btnuq">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z" stroke="#FF5C01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="">Copy & share your referral link to earn money</span>
                                            <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                                                <input class="me-2" type="text" name="" id="refcode" value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly style="min-width: 28ch;">
                                                <a class="btn btn-copy me-2" id="btnref">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z" stroke="#FF5C01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>Thumbnail.png" download class="qrcode-download ms-auto mt-3 d-flex flex-column align-items-center">
                                        <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="50" height="50">
                                        <div class="">
                                            <i class="ri-download-line"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>   
        
                        <?php if($card == 'card'){?>
                        <div class="mt-5 f-poppins">
                            <div class="d-flex justify-content-between align-items-center card-balance my-1">
                                <div>
                                    <span>Card balance</span>
                                </div>
                                <div class="text-blue-freedy d-flex align-items-center">
                                    <span class="mx-3">E 1000,87</span>
                                    <i class="ri-eye-line"></i>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between card-number my-1">
                                <div class="">
                                    <span>Card number</span>
                                </div>
                                <div class="">
                                    <span class="mx-3">XXXXXX</span>
                                    <span>
                                        <img src="<?= base_url()?>assets/img/copy.png" class="img-fluid" alt="copy">
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between my-1 card-expire-date">
                                <div class="">
                                    <span>Expire date</span>
                                </div>
                                <div class="">
                                    <span class="">07 march 2024</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between my-1 card-cvv">
                                <div>
                                    <span>CVV</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="mx-3">XXX</span>
                                    <i class="ri-eye-line text-blue-freedy"></i>
                                </div>
                            </div>

                            

                        </div>
                        <div class="d-flex flex-column mx-auto justify-content-center w-100">
                            <div style="height: 1px; width: 100%; background-color: #FF0F00" class="mt-4"></div>
                        </div>
                        <div class="row my-4">
                            <a href="<?= base_url(); ?>homepage/card?card=<?= base64_encode('topup')?>" class="col-12 mx-auto card-topup d-flex align-items-center justify-content-center">
                                <span class="text-blue-freed fw-bold">
                                    Top Up Your Card
                                </span>
                            </a>
                            <a href="" class="col-12 mx-auto card-topup d-flex align-items-center justify-content-center mt-4">
                                <span class="text-blue-freed fw-bold">
                                    History
                                </span>
                            </a>
                        </div>
                        <?php }?>

                        <?php if($card == 'topup'){?>
                        <div class="my-5 row">
                            <div class="col-12 text-topup-card">
                                <h1 class="text-blue-freedy fw-bolder f-poppins text-center">
                                    Top up Card
                                </h1>
                                <p class="text-center fw-semibold f-lexend col-12 col-md-10 mx-auto">
                                    Your top up will arrive within 2 workings days, the fee it will be the the same as ‘’wallet to bank’’ cost.
                                    <br>
                                    The card top up can be done just in Euro currency, so make sure to have enough funds in Euro, in case you don’t have them, convert one of your <span translate="no">FIAT</span>  balances into Euro by using the swap function 
                                </p>
                            </div>
                            <div class="mt-5 wrap-border-topup p-3 p-md-4 col-10 mx-auto">
                                <span class="fw-semibold">Max amount : <?= $_SESSION["symbol"] ?> 230,00</span>
                                <form action="POST">

                                    <div class="mt-4">
                                        <span>Amount</span>
                                        <div class="form-topup-card d-flex flex-row align-items-center my-2" style="height: 70px;">
                                            <label for="amount"><?= $_SESSION["symbol"] ?></label>
                                            <input type="text" class="form-control money-input text-end" autocomplete="off" name="amount"
                                                id="amount" placeholder="0.00">
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <span>Confirm amount</span>
                                        <div class="form-topup-card d-flex flex-row align-items-center my-2" style="height: 70px;">
                                            <label for="confirmamount"><?= $_SESSION["symbol"] ?></label>
                                            <input type="text" class="form-control money-input text-end" autocomplete="off" name="amount"
                                                id="confirmamount" placeholder="0.00">
                                        </div>
                                    </div>

                                    <div class="text-start d-flex justify-content-center mt-5 mb-4">
                                        <a href="<?= base_url(); ?>homepage/card?card=<?= base64_encode('confirm')?>"
                                            class="btn-card-confirm d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span class="f-lexend">Confirm</span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Already Card -->



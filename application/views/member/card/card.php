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
                    <?php $this->load->view("tamplate/banner-nofiat"); ?>
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



<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/back-link.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($features == 1) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-1.png" alt="">
                    <span class="f-lexend text-blue-freedy fw-bold">100% Secure</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-none d-md-grid">
                        <img src="<?= base_url() ?>assets/img/img-17.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 col-md-8 text-start">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">Why you can trust <b
                                translate="no">PiggyBank</b> ?</h2>
                        <p>Your money is protected by global banks, our clients' funds are entirely deposited in
                            encrypted escrow accounts at the main credit institutions with which our payment gateway
                            works in the various countries.<br>
                        <p>To give total security to our customers, only the account holder will have access to the
                            operations and even for <b translate="no">PiggyBank</b> it will be impossible to bypass this
                            security system.</p>

                        <p><b translate="no">PiggyBank</b>, being part of the TraclessBank circuit, offers to customers
                            a great guarantee, as
                            any problem that may arise, the funds will always be accessible at another institution of
                            the TraklessBank circuit.</p>

                        <p>None of the tracklessbank institutions have the ability to make any type of investment or
                            money handling using clients’ funds, leaving the capital available to the customers in the
                            fiat corresponding to the balance of the <b translate="no">PiggyBank</b> wallet</p>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($features == 2) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-3.png" alt="">
                    <span class="f-lexend text-blue-freedy fw-bold">Wallet</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-19.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="title-top-header fw-bold mb-3 f-lexend">Send, Receive and Request</h2>
                        <p>
                            You can identify your wallet through the unique code that you find on the home screen of
                            your account, this code is the only one that identifies your account and you must use it for
                            all incoming transfers.
                        </p>
                        <p>
                            The <b translate="no">Piggy</b> Wallet, which uses the innovative tracklessbank technology,
                            offers its customers
                            the possibility of regaining total control over their capital and managing it easily,
                            without limits and in total anonymity.
                        </p>
                        <p>
                            The <b translate="no">Piggy</b> wallet is the only one in the world that offers you, through
                            the Bank to wallet -
                            Wallet to bank functions, the possibility of sending or receiving funds by bank transfer,
                            even from an IBAN not in your name, without limitations, without any documentation required
                            and anonymously.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Bank to Wallet</h2>
                        <p>
                            You can receive bank transfers into your wallet in 10 currencies (<a
                                href="<?= base_url(); ?>link/service?service=<?= base64_encode('2') ?>">find out which
                                they are</a>) from any
                            IBAN even if not under your name.
                        </p>
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-20.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-21.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Wallet to Wallet</h2>
                        <p>
                            Now you can send money anywhere in the world in seconds. Wallet-to-Wallet transfers are
                            instantaneous and also available between users of different banks, belonging to the
                            trackless bank circuit.
                        </p>
                        <p>
                            Use the Wallet to Wallet function to send and receive money without limits, without any
                            documentation required and anywhere in the world, for a small fixed fee, regardless of the
                            amount.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Wallet to Bank</h2>
                        <p>
                            Send from your wallet by bank transfer to any IBAN, even if not in your name. By taking
                            advantage of the Swap option you can reduce costs and speed up international transfers.
                        </p>
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-22.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 d-none d-md-grid my-auto">
                        <img src="<?= base_url() ?>assets/img/img-23.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 text-start my-auto">
                        <h2 class="fw-bold mb-3 f-lexend">From Swap currency</h2>
                        <p>
                            From your wallet you can convert and custody for free, in over 50 currencies at the real
                            exchange rate and without fees. Through this function you will be able to export capitals
                            100% legally (
                            <a href="<?= base_url(); ?>link/utilities?utilities=<?= base64_encode('1') ?>">Read here to
                                discover how the
                                capital exportation works</a>).<br>
                            Using the SWAP, to convert into the currency you want to send, makes the money transfer a
                            national transfer; FreedyBank is the only one in the world to offer you this service.

                        </p>
                    </div>
                </div>
            </div>

            <?php } ?>

            <?php if ($features == 3) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-2-1.png" alt="">
                    <span class="f-lexend text-blue-freedy fw-bold">Technology</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-lg-6 text-start my-auto">
                        <p>is a Dapp running on NP
                            <b translate="no">PiggyBank</b> is a Dapp running on NP, considered the evolution of
                            the blockchain and it
                            uses SECC (SMART ELECTRONIC CREDIT CERTIFICATE), developed by MONEY INDUSTRIAL FACTORY on NP
                            and issued by PBS Online which converts FIAT by capitalizing the SECC 1: 1 with the currency
                            on which it is pegged to offer a cheaper and faster alternative to normal Stable coins such
                            as Tether and others and with greater security and transparency than the complicated Smart
                            Contracts that run on Ethereum and on the others blockchain.<br>
                            NP is a brand new decentralized and distributed storage system, designed and built as a
                            neural network and not as a chain. This makes it immune to attacks by 51% and solves the
                            main problems of blockchain technology; this technology has come to completion after more
                            than 5 years of research and development.



                        </p>
                    </div>
                    <div class="col-6 d-none d-lg-grid">
                        <img src="<?= base_url() ?>assets/img/img-18.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 mt-5 text-start">
                        <h2 class="f-lexend fw-bold">This new technology was born as an evolution of the blockchain and
                            is the solution for:</h2>
                        <ol>
                            <li>The problem of scalability, the first major problem that afflicts the old blockchain
                                technology ;</li>
                            <li>Resolving vulnerability to hashrate attacks;</li>
                            <li>Optimizing speed and reduce transaction costs;</li>
                            <li>An ecological system because it has low energy consumption, without losing any of the
                                strengths of traditional blockchain.</li>
                        </ol>
                        <p>
                            NP eliminates the figure of miners and ensures that this system is decentralized and truly
                            distributed on a large scale and not in the hands of a few large companies, as happens with
                            the main cryptocurrencies. This also allows us to replace the PoW, PoS or PoA with more
                            modern, secure consensus mechanisms that are not subject to hashrate attacks, minimizing
                            transaction costs and energy consumption, using the double ring cryptographic signature,
                            protocol gossip to gossip and bulletproof. All this has been made possible starting from a
                            DHT Framework previously used by the most famous P2P platforms (NAPSTER, eMule, BitTorre,
                            WinMX, etc.) rewritten from scratch in Golang and rusty, with direct acyclic graph,
                            effectively making double spending impossible.<br>
                            NP is 100% anonymous, no data will be recorded or saved on an external source, but only an
                            encrypted SHA256 file.log saved exclusively on your device is created;
                            This will make impossible for anyone to connect a user to their wallet, even with forensic
                            techniques, and,
                            through the implementation of CryptoNote, it will be impossible for anyone to see balances
                            and transactions, except for the user himself. NP has a different concept of the block,
                            compared to traditional blockchains, where the block carries within it all the historical
                            data, since its creation, making the blockchain increasingly heavy, while in NP the block
                            will carry with it alone essential data and the last change of ownership so as not to become
                            heavy and remain lean and fast, secure and resilient, without servers or blockchain.<br>
                            NP is the only one not to have a native coin as it was conceived and built to be the basis
                            of what will be the evolution of smart contracts or tokens and to be able to manage them
                            simultaneously on a single network at a single level.<br>
                            Money Industrial Factory has developed SECC (smart electronic credit certificate) on NP,
                            intelligent electronic credit certificates, which are intelligent Stable Coins created by
                            merging Token and Smart Contract. This technology allows you to have a change of ownership
                            of a value, data or file in a safe and anonymous way without having to perform what is
                            called a transaction, but only by replacing the owner of the value, gaining speed with a
                            huge saving in computing power.<br>
                            NP, being a decentralized and distributed storage system, which arises from a P2P, does not
                            lose the quality and functionality of the basic project, remaining able to manage in
                            addition to transactions also Dapp, name domain, streaming video and file sharing of any
                            like, anonymously. Safe and non-obscurable as it is impossible to shut down a large-scale
                            and decentralized distributed system.<br>
                            NP solves the scalability problem by transforming each user into a validating node every
                            time he performs an operation, thus giving double the necessary computing power.<br>
                            all the users of FreedyBank will be repaid with part of the<br>
                            <b>commissions in a clear, transparent and fair manner, as described in the section Earn
                                with</b>
                            <b translate="no">PiggyBank</b>.
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($features == 4) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/features-4.png" alt="">
                    <span class="f-lexend text-blue-freedy fw-bold">Missions</span>
                </div>
            </div>
            <div class="col-12">
                <h2 class="fw-bold mb-3 f-lexend text-dark">Our mission, through the <b translate="no">PIGGYBANK</b>
                    Dapp, is to
                    give back to the individual</h2>
            </div>
            <div class="col-12 col-md-8 text-start">
                <p>
                    <b>1. Privacy:</b><br>
                    nowadays, privacy is continuously violated by multinationals, organizations that
                    register and sell our data, making a profit and influencing public opinion, knowing at
                    all times what we like, where we are and what we do.<br><br>
                    <b>2. Financial anonymity:</b><br>
                    each person should be able to manage his own capital without being tracked by
                    governments, institutions and authorities that could operate financial controls without
                    any authorization.<br><br>
                    <b>3.Redistribution of wealth:</b><br>
                    taking a cue from the events of recent years, we have learned that the new rich arise
                    from activities related to new technologies and, precisely for this reason, we have
                    developed this new and revolutionary system that will make possible to redistribute
                    these potential earnings towards all users who will be part of it, thanks to the
                    Referral link campaign.
                </p>
            </div>
            <div class="col-4 d-none d-md-grid my-auto">
                <img src="<?= base_url() ?>assets/img/img-25.png" alt="" class="img-fluid">
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Hero -->
<div class="row" style="margin-top: 5rem;">
    <div class="col-12 d-flex justify-content-center flex-column">
        <div class="col-12 box-code-freedy px-4 py-3">
            <div class="copy-uqcode mt-3 mb-2 d-flex flex-row align-items-center">
                <span class="me-2">UNIQUE CODE : </span>
                <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                <a class="btn btn-copy me-2" id="btnuq">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                            stroke="#FF5C01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <span class="">Copy & share your referral link to earn money</span>
            <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                <input class="me-2" type="text" name="" id="refcode"
                    value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                <a class="btn btn-copy me-2" id="btnref">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.16675 12.5C3.39018 12.5 3.00189 12.5 2.69561 12.3731C2.28723 12.204 1.96277 11.8795 1.79362 11.4711C1.66675 11.1649 1.66675 10.7766 1.66675 10V4.33333C1.66675 3.39991 1.66675 2.9332 1.8484 2.57668C2.00819 2.26308 2.26316 2.00811 2.57676 1.84832C2.93328 1.66666 3.39999 1.66666 4.33341 1.66666H10.0001C10.7767 1.66666 11.1649 1.66666 11.4712 1.79353C11.8796 1.96269 12.2041 2.28714 12.3732 2.69553C12.5001 3.00181 12.5001 3.39009 12.5001 4.16666M10.1667 18.3333H15.6667C16.6002 18.3333 17.0669 18.3333 17.4234 18.1517C17.737 17.9919 17.992 17.7369 18.1518 17.4233C18.3334 17.0668 18.3334 16.6001 18.3334 15.6667V10.1667C18.3334 9.23324 18.3334 8.76653 18.1518 8.41001C17.992 8.09641 17.737 7.84144 17.4234 7.68165C17.0669 7.5 16.6002 7.5 15.6667 7.5H10.1667C9.23333 7.5 8.76662 7.5 8.4101 7.68165C8.09649 7.84144 7.84153 8.09641 7.68174 8.41001C7.50008 8.76653 7.50008 9.23324 7.50008 10.1667V15.6667C7.50008 16.6001 7.50008 17.0668 7.68174 17.4233C7.84153 17.7369 8.09649 17.9919 8.4101 18.1517C8.76662 18.3333 9.23333 18.3333 10.1667 18.3333Z"
                            stroke="#FF5C01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-12 px-4 py-3">
            <div class="mywallet d-flex mb-4 align-items-center w-100">
                <div class="d-flex flex-column w-100">
                    <div class="saldo-box d-flex flex-row align-items-center w-100 mb-3">
                        <span class="balance me-auto">Your Balance :</span>
                    </div>
                    <div class="saldo-box d-flex flex-row align-items-center w-100">
                        <span class="saldo me-auto">
                            <?= $_SESSION["symbol"] ?>
                            <?= substr(number_format(balance($_SESSION['user_id'], $_SESSION["currency"]),4),0,-2) ?>
                        </span>
                        <a href="<?= base_url() ?>homepage">
                            <svg width="" height="68" viewBox="0 0 138 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg" style="height: 45px !important;">
                                <path
                                    d="M16.4165 32.9398C16.4165 30.1677 16.4165 28.7817 16.9883 27.5633C17.5601 26.345 18.6339 25.4429 20.7816 23.6389L22.8649 21.8889C26.7469 18.6281 28.6878 16.9977 30.9998 16.9977C33.3119 16.9977 35.2528 18.6281 39.1347 21.8889L41.2181 23.6389C43.3657 25.4429 44.4396 26.345 45.0114 27.5633C45.5832 28.7817 45.5832 30.1677 45.5832 32.9398V41.5972C45.5832 45.447 45.5832 47.3719 44.3628 48.5679C43.1424 49.7639 41.1782 49.7639 37.2498 49.7639H24.7498C20.8215 49.7639 18.8573 49.7639 17.6369 48.5679C16.4165 47.3719 16.4165 45.447 16.4165 41.5972V32.9398Z"
                                    stroke="#9E00FF" stroke-width="4" />
                                <path
                                    d="M36.2082 49.7639V38.5139C36.2082 37.9616 35.7605 37.5139 35.2082 37.5139H26.7915C26.2392 37.5139 25.7915 37.9616 25.7915 38.5139V49.7639"
                                    stroke="#9E00FF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                <rect x="0.5" y="1.48352" width="136.223" height="65.033" rx="7.5" stroke="#9E00FF" />
                                <path
                                    d="M61.066 43.625C61.7827 43.4917 62.2577 43.2833 62.491 43C62.741 42.7167 62.866 42.225 62.866 41.525V31.85C62.866 31.3333 62.8077 30.9917 62.691 30.825C62.5743 30.6417 62.3327 30.55 61.966 30.55L61.216 30.575L61.091 30.375L61.266 28.925L64.241 28.95C64.891 28.95 66.1327 28.8917 67.966 28.775L67.816 30.425C67.3827 30.4917 67.066 30.5833 66.866 30.7C66.6827 30.8 66.5493 30.9583 66.466 31.175C66.3993 31.3917 66.3493 31.7417 66.316 32.225L66.166 35.825L69.441 35.875C70.3077 35.875 71.2993 35.8167 72.416 35.7V31.85C72.416 31.3333 72.3577 30.9917 72.241 30.825C72.1243 30.6417 71.8827 30.55 71.516 30.55L70.741 30.575L70.616 30.375L70.816 28.925L73.966 28.95C74.516 28.95 75.7243 28.8917 77.591 28.775L77.466 30.4C76.8493 30.4833 76.441 30.6167 76.241 30.8C76.0577 30.9667 75.9493 31.2917 75.916 31.775C75.8327 33.2417 75.7577 34.925 75.691 36.825C75.641 38.725 75.616 40.3167 75.616 41.6C75.616 42.3 75.6827 42.775 75.816 43.025C75.966 43.275 76.241 43.4 76.641 43.4C76.8243 43.4 77.141 43.375 77.591 43.325L77.691 43.5L77.466 45.075C77.2327 45.075 77.0577 45.0667 76.941 45.05C75.6743 45.0167 74.6493 45 73.866 45L70.416 45.05L70.616 43.45C71.0993 43.4333 71.466 43.3583 71.716 43.225C71.9827 43.0917 72.166 42.8667 72.266 42.55C72.366 42.2167 72.416 41.7417 72.416 41.125V37.9L69.666 37.875C69.2993 37.875 68.7993 37.9 68.166 37.95C67.5327 38 66.8493 38.0583 66.116 38.125L66.041 41.7C66.041 42.3833 66.1077 42.8417 66.241 43.075C66.3743 43.3083 66.6327 43.425 67.016 43.425C67.1827 43.425 67.491 43.4 67.941 43.35L68.066 43.5L67.841 45.075C66.641 45.025 65.641 45 64.841 45C64.2743 45 63.5743 45.025 62.741 45.075C61.9243 45.125 61.3077 45.175 60.891 45.225L61.066 43.625ZM85.3178 45.225C83.4511 45.225 81.9844 44.6833 80.9178 43.6C79.8678 42.5 79.3428 40.9833 79.3428 39.05C79.3428 37.6667 79.6178 36.4667 80.1678 35.45C80.7178 34.4167 81.5011 33.625 82.5178 33.075C83.5511 32.525 84.7511 32.25 86.1178 32.25C88.0178 32.25 89.4928 32.7917 90.5428 33.875C91.5928 34.9417 92.1178 36.4417 92.1178 38.375C92.1178 39.7583 91.8344 40.9667 91.2678 42C90.7178 43.0333 89.9261 43.8333 88.8928 44.4C87.8761 44.95 86.6844 45.225 85.3178 45.225ZM85.8178 43.35C86.7178 43.35 87.4094 43.0167 87.8928 42.35C88.3761 41.6833 88.6178 40.7167 88.6178 39.45C88.6178 37.75 88.3511 36.475 87.8178 35.625C87.3011 34.775 86.5511 34.35 85.5678 34.35C84.6844 34.35 84.0094 34.675 83.5428 35.325C83.0761 35.975 82.8428 36.9417 82.8428 38.225C82.8428 39.9417 83.0928 41.225 83.5928 42.075C84.1094 42.925 84.8511 43.35 85.8178 43.35ZM100.575 45.275C99.2083 41.0417 98.2167 38.2 97.6 36.75H97.4C97.3667 37.35 97.3083 38.3417 97.225 39.725C97.1417 41.1083 97.0833 42.1917 97.05 42.975C97.05 43.1917 97.1 43.35 97.2 43.45C97.3167 43.55 97.4917 43.6 97.725 43.6H98.375L98.5 43.7L98.3 45.075C98.1 45.075 97.7333 45.0583 97.2 45.025C96.6667 45.0083 96.175 45 95.725 45C95.375 45 94.9667 45.0167 94.5 45.05C94.05 45.1 93.75 45.1333 93.6 45.15L93.725 43.725C94.125 43.6917 94.4167 43.575 94.6 43.375C94.8 43.1583 94.9167 42.8167 94.95 42.35C95.0667 41.4667 95.225 40.0417 95.425 38.075C95.6417 36.1083 95.75 35 95.75 34.75C95.75 34.4 95.6583 34.175 95.475 34.075C95.2917 33.9583 94.8833 33.875 94.25 33.825L94.125 33.675L94.325 32.375C94.5417 32.3917 94.9167 32.4167 95.45 32.45C96 32.4667 96.525 32.475 97.025 32.475C97.5417 32.475 98.0333 32.4667 98.5 32.45C98.9833 32.4333 99.3083 32.4167 99.475 32.4C99.9417 34.05 100.408 35.6167 100.875 37.1C101.358 38.5667 101.675 39.5083 101.825 39.925H102.025C102.175 39.5083 102.5 38.5667 103 37.1C103.5 35.6333 104.008 34.0917 104.525 32.475C104.742 32.4583 104.942 32.4583 105.125 32.475C105.325 32.475 105.5 32.475 105.65 32.475C105.833 32.4917 106.133 32.5 106.55 32.5C106.883 32.5 107.133 32.4917 107.3 32.475C107.75 32.4583 108.167 32.4417 108.55 32.425C108.95 32.3917 109.217 32.3667 109.35 32.35L109.45 32.425L109.3 33.775C108.733 33.8083 108.35 33.9 108.15 34.05C107.95 34.1833 107.85 34.4333 107.85 34.8C107.85 35.2667 107.9 36.2833 108 37.85C108.117 39.4 108.225 40.7333 108.325 41.85C108.408 42.5333 108.517 43 108.65 43.25C108.783 43.4833 109.008 43.6 109.325 43.6L109.9 43.575L110 43.7L109.825 45.05C109.675 45.05 109.392 45.0417 108.975 45.025C108.575 45.0083 108.142 45 107.675 45C107.192 45.0167 106.617 45.0333 105.95 45.05C105.3 45.0833 104.817 45.1167 104.5 45.15L104.65 43.725C105.067 43.675 105.358 43.5833 105.525 43.45C105.708 43.3 105.8 43.0667 105.8 42.75C105.8 42.4333 105.75 41.4917 105.65 39.925C105.55 38.3583 105.483 37.3 105.45 36.75H105.25C104.95 37.4833 104.517 38.6333 103.95 40.2C103.4 41.75 102.842 43.3833 102.275 45.1L100.575 45.275ZM111.674 43.75C112.241 43.6833 112.624 43.5333 112.824 43.3C113.024 43.05 113.124 42.6333 113.124 42.05L113.149 34.925C113.149 34.5083 113.107 34.2333 113.024 34.1C112.941 33.95 112.766 33.875 112.499 33.875L111.899 33.9L111.749 33.7L111.924 32.425C112.191 32.425 112.699 32.4333 113.449 32.45C114.216 32.4667 115.032 32.475 115.899 32.475C118.849 32.475 120.949 32.4 122.199 32.25L122.374 32.475C122.324 32.6917 122.241 33.1667 122.124 33.9C122.024 34.6167 121.949 35.3583 121.899 36.125L119.824 36.25C119.824 36.2 119.832 36.1 119.849 35.95C119.866 35.7833 119.874 35.625 119.874 35.475C119.874 35.1083 119.816 34.85 119.699 34.7C119.582 34.55 119.357 34.45 119.024 34.4C118.691 34.3333 118.141 34.3 117.374 34.3C116.924 34.3 116.641 34.3333 116.524 34.4C116.424 34.4667 116.366 34.6333 116.349 34.9L116.224 37.725H118.074C118.374 37.725 118.799 37.7083 119.349 37.675C119.899 37.625 120.266 37.5917 120.449 37.575L120.649 37.8L120.349 39.6C120.166 39.6 119.816 39.5917 119.299 39.575C118.799 39.5583 118.266 39.55 117.699 39.55C117.249 39.55 116.732 39.5917 116.149 39.675C116.116 40.475 116.099 41.2917 116.099 42.125C116.099 42.4917 116.124 42.75 116.174 42.9C116.224 43.05 116.332 43.1583 116.499 43.225C116.666 43.275 116.949 43.3 117.349 43.3C118.182 43.3 118.791 43.25 119.174 43.15C119.557 43.0333 119.832 42.8333 119.999 42.55C120.166 42.25 120.299 41.7667 120.399 41.1L122.299 40.95L122.499 41.175C122.449 41.375 122.357 41.8417 122.224 42.575C122.107 43.3083 122.007 44.0833 121.924 44.9L121.699 45.125C121.282 45.1083 120.374 45.0833 118.974 45.05C117.591 45.0167 116.341 45 115.224 45C114.441 45 113.682 45.025 112.949 45.075C112.216 45.1417 111.741 45.1833 111.524 45.2L111.674 43.75Z"
                                    fill="#9E00FF" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
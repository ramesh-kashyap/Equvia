@include('layouts.upnl.header')
<div data-v-6b868a30="" id="scroll" class="content-container">
    <div data-v-6b868a30="" id="content" class="content-scroll">
        <div data-v-4bcdfc27="" data-v-6b868a30="" class="page-recharge tw-min-h-full tw-p-16px">
            <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-mb-10px tw-text-14px">Select Currency</div>
            <div data-v-4bcdfc27="" data-v-6b868a30=""
                class="tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white3 tw-rounded-10px">
                <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-flex tw-items-center"><img
                        data-v-4bcdfc27="" data-v-6b868a30=""
                        src="{{ asset('') }}static/img/usdt.png"
                        alt="" class="tw-w-24px">
                    <input data-v-4bcdfc27="" data-v-6b868a30="" type="text" value="USDT"
                        readonly="readonly" class="tw-pl-8px van-field__control1">
                </div><i data-v-4bcdfc27="" data-v-6b868a30=""
                    class="van-icon van-icon-arrow" style="color: rgb(182, 188, 198);">
                    <!----></i>
            </div>
            <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-mt-18px tw-mb-10px tw-text-14px"> Select
                Network </div>
            <div class="tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white3 tw-rounded-10px">
                <select id="currencyId" class="tw-pl-8px van-field__control1" name="paymentMode">
                    <option value="bep20">BEP20</option>
                    <option value="trc20">TRC20</option>
                </select>


            </div>

            <div data-v-4bcdfc27="" data-v-6b868a30=""
                class="tw-mt-18px tw-mb-10px tw-pt-16px tw-text-14px tw-bg-white3 tw-rounded-10px">
                <div data-v-4bcdfc27="" data-v-6b868a30=""
                    class="tw-mx-auto tw-p-10px tw-w-180px tw-h-180px tw-flex tw-justify-center tw-items-center tw-border tw-border-solid tw-border-primary tw-border-opacity-20 tw-rounded-10px">
                    <div data-v-4bcdfc27="" value="TF58GzEQpuZeyDFQ7Nx6AgFWt2iwbXgva7" level="H"
                        background="#fff" foreground="#000" class="custom-qrcode" data-v-6b868a30="">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="" id="qrCodeImg" class="img-fluid">

                            <!-- <img id="qrCodeImg" src="" width="180" height="180" style="margin-top: 10px;"> -->


                        </div>

                    </div>
                </div>
                <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-mt-16px tw-p-16px">
                    <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-text-14px tw-text-secondary">
                        Deposit Address </div>
                    <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-flex tw-items-center">
                        <div data-v-4bcdfc27="" data-v-6b868a30=""
                            class="tw-flex-1 break tw-break-words tw-text-16px" id="">
                            <p style="font-size: 12px;" id="walletAddress"></p>
                            <!-- <input type="hidden" id="walletAddress" readonly style="display: block; margin-top: 10px;"> -->
                        </div>
                        <div data-v-4bcdfc27="" data-v-6b868a30="" onclick="copyWallet()"> <svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon"
                                data-v-6b868a30=""
                                style="color: rgba(255, 255, 255, 1); width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                <use data-v-3f1a7394="" xlink:href="#svg-icon-copy-line"></use>
                            </svg></div>
                    </div>
                </div>
            </div>
            <div data-v-4bcdfc27="" data-v-6b868a30=""
                class="tw-mt-18px tw-p-14px tw-text-14px tw-bg-white3 tw-rounded-10px">
                <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-flex tw-items-center"><i
                        data-v-4bcdfc27="" data-v-6b868a30="" class="tw-text-20px van-icon van-icon-warning"
                        style="color: rgba(255, 255, 255, 1);">
                        <!----></i><span data-v-4bcdfc27="" data-v-6b868a30=""
                        class="tw-text-primary tw-pl-8px">Note</span></div>
                <div data-v-4bcdfc27="" data-v-6b868a30="" class="tw-text-14px tw-text-secondary tw-mt-8px">
                    <p>1. Minimum deposit amount: 1 USDT, (if the deposit is lower than the minimum deposit
                        amount, the funds will not be deposited into the account).</p>

                    <p>2. Please choose the correct network to transfer currency. If you choose the wrong
                        network, the recharge will not be successful</p>

                    <p>3. Before each deposit, you need to obtain the deposit address on the deposit page.
                        The loss of funds caused by transferring the wrong deposit address will not be
                        found. SEOKORE takes no responsibility for this!</p>

                    <p style="text-align:justify">&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!---->
</div>
<div class="van-overlay" style="display: none;">
    <div class="tw-w-full tw-h-full tw-flex tw-justify-center tw-items-center">
        <div
            class="tw-w-100px tw-h-100px tw-flex tw-justify-center tw-items-center tw-bg-dark tw-bg-opacity-10 tw-rounded-10px">
            <div class="van-loading van-loading--circular"><span
                    class="van-loading__spinner van-loading__spinner--circular"
                    style="color: rgba(106, 255, 124, 0.18); width: 1rem; height: 1rem;"><svg viewBox="25 25 50 50"
                        class="van-loading__circular">
                        <circle cx="50" cy="50" r="20" fill="none"></circle>
                    </svg></span></div>
        </div>
    </div>
</div>
<div data-v-4d1ba5fa="">
    <!---->
</div>
</div>
<!-- <script>
        document.querySelector('.copy-btn').addEventListener('click', function() {
            let copyText = document.getElementById('depositAddressDiv').innerText.trim();

            navigator.clipboard.writeText(copyText).then(function() {
                let toast = document.querySelector('.van-toast');
                toast.style.display = 'block'; // Show the toast

                // Hide after 3 seconds
                setTimeout(() => {
                    toast.style.display = 'none';
                }, 3000);
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        });
    </script> -->
<script>
    let selectedCoin = null;

    function selectChain(element) {
        // Remove previous selections
        document.querySelectorAll('.chains .item').forEach(item => {
            item.classList.remove('on');
            const check = item.querySelector('.check');
            if (check) check.style.display = 'none';
        });

        // Mark selected item
        element.classList.add('on');
        const check = element.querySelector('.check');
        if (check) check.style.display = 'block';

        // Save selected coin from attribute
        selectedCoin = element.getAttribute('data-coin');
    }

    function confirmSelectedChain() {
        if (!selectedCoin) {
            alert("Please select a network first.");
            return;
        }

        // Call API

        if (selectedCoin == "USDT_BSC") {
            document.getElementById('currencyImg').src =
                "https://tux-all.s3.ap-southeast-1.amazonaws.com/upload/20240723/284411f22a828b42a327a5a8586fae88.png";
            document.getElementById('currencyId').value = "BEP20";
        } else {
            document.getElementById('currencyImg').src =
                "https://tux-all.s3.ap-southeast-1.amazonaws.com/upload/20240723/bcabd0a39b535b0c04e14dc6b5f16bdd.png";
            document.getElementById('currencyId').value = "TRC20";
        }



        document.getElementById('popupBox').style.display = 'none';
        document.getElementById('global-loading').style.display = 'block';


        fetch(`/user/get-address-details/${selectedCoin}`)
            .then(response => response.json())
            .then(data => {
                console.log("API Response:", data); // Add this log

                if (data.success) {
                    document.getElementById('global-loading').style.display = 'none';
                    document.getElementById('qrCodeImage').src = data.qr;
                    document.getElementById('depositAddressDiv').innerText = data.address;
                } else {
                    alert(data.message || 'Failed to get address');
                    document.getElementById('global-loading').style.display = 'none';
                }
            })
            .catch(error => {
                console.error("Fetch error:", error);
                document.getElementById('global-loading').style.display = 'none';
            });
    }
</script>
<script>
    function showPopup() {
        document.getElementById('popupBox').style.display = 'block';
    }

    function hidePopup() {
        document.getElementById('popupBox').style.display = 'none';
    }

    function changeTab(type) {
        const h2 = document.getElementById('networkText');
        const tabs = document.querySelectorAll('.van-tab');

        tabs.forEach(tab => tab.classList.remove('van-tab--active'));

        if (type === 'usdt') {
            h2.textContent = 'USDT(BEP20)';
            tabs[0].classList.add('van-tab--active');
        } else if (type === 'usdc') {
            h2.textContent = 'USDT(TRC20)';
            tabs[1].classList.add('van-tab--active');
        }
    }
</script>
<script>
    window.onload = function() {
        // 禁用双指放大
        document.addEventListener("touchstart", function(event) {
            if (event.touches.length > 1) {
                event.preventDefault();
            }
        });
        // 禁用双击放大
        let lastTouchEnd = 0;
        document.addEventListener(
            "touchend",
            function(event) {
                const now = new Date().getTime();
                if (now - lastTouchEnd <= 300) {
                    event.preventDefault();
                }
                lastTouchEnd = now;
            },
            false
        );
        document.addEventListener("gesturestart", function(event) {
            event.preventDefault();
        });
    };
</script>
<script>
    function copyWallet() {
        const walletText = document.getElementById("walletAddress").innerText;

        navigator.clipboard.writeText(walletText)
            .then(() => {
                alert("Wallet address copied!");
            })
            .catch(err => {
                console.error("Failed to copy!", err);
            });
    }
</script>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const addresses = {
            bep20: "{{ Auth::user()->usdtBep20 }}",
            trc20: "{{ Auth::user()->usdtTrc20 }}"
        };

        function updateAddressAndQR() {
            const selectedNetwork = $('#currencyId').val();
            const selectedAddress = addresses[selectedNetwork] || "";

            // ✅ Update the <p> tag
            $('#walletAddress').text(selectedAddress);
            $('#walletAddress').val(selectedAddress);
            const qrUrl = "https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=" + encodeURIComponent(selectedAddress);
            $('#qrCodeImg').attr('src', qrUrl);
        }

        updateAddressAndQR();

        $('#currencyId').change(function() {
            updateAddressAndQR();
        });
    });
</script>

</body>

</html>
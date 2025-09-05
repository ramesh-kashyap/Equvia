<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>Withdrawal Address</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#fff">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <script>
        window.addEventListener('error', function(event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        if ('standalone' in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                'click',
                function(event) {
                    noddy = event.target;
                    while (noddy.nodeName !== 'A' && noddy.nodeName !== 'HTML') {
                        noddy = noddy.parentNode;
                    }
                    if (
                        'href' in noddy &&
                        noddy.href.indexOf('http') !== -1 &&
                        (noddy.href.indexOf(document.location.host) !== -1 || remotes)
                    ) {
                        event.preventDefault();
                        document.location.href = noddy.href;
                    }
                },
                false
            );
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
        }

        #startLogo {
            width: 100%;
            min-width: 7.5rem;
            height: 100vh;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000000;
            background: #020503;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }

        #startLogo img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        x-vue-echarts {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            min-width: 0
        }

        .vue-echarts-inner {
            flex-grow: 1;
            min-width: 0;
            width: auto !important;
            height: auto !important
        }


        .custom-dropdown {
            position: relative;
            width: 100%;
            max-width: 400px;
            font-family: inherit;
        }

        .dropdown-trigger {
            color: #fff;
            padding: 12px 16px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown-trigger::after {
            content: "▼";
            font-size: 0.7em;
            margin-left: 8px;
        }

        .dropdown-options {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #0f2a20;
            border-radius: 10px;
            display: none;
            flex-direction: column;
            margin-top: 4px;
            z-index: 10;
        }

        .dropdown-option {
            padding: 12px 16px;
            color: #fff;
            cursor: pointer;
            transition: background 0.2s;
        }

        .dropdown-option:hover,
        .dropdown-option.selected {
            background: #1e3a30;
        }

        @media (max-width: 600px) {
            .custom-dropdown {
                max-width: 100%;
            }

            .dropdown-trigger {
                padding: 14px;
                font-size: 16px;
            }

        .dropdown-option {
            padding: 14px;
            font-size: 16px;
        }
       
    }
    </style>
    <link href="{{ asset('') }}static/css/chunk-02c8c6ba.f02a30c2.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-03c1575b.3035c347.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-0566fd30.1e11c8e5.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-08efff57.d1c57c5a.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-146e34fc.2bd67213.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-19b6a8e4.44d66000.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-19e32f24.1162d6ae.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-1cc9e062.bb2c1f95.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-1ee97074.f442ee68.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-23dc19ae.78dc4650.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-256b9400.46bcaa64.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-25a0e88c.c5a59136.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-267a32e6.0d9f6f8d.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-29126459.fe5ce88a.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-2a53918e.7e78b090.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-2c3295d4.68d7e20d.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-2cd18a7d.c47d657b.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-2ec80ff3.d777b076.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-3d3dcf32.c3875b9f.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-4e5f1a7a.de8b1aed.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-50b10c92.241dffcb.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-51107498.c550911e.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-54637b65.30970f55.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-5872ff8d.12cc21e8.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-5a04fba1.4a4b249e.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-5b6ac7a8.56edffb4.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-5c64915e.135fdcf8.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-5f0d6286.33002893.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-616795b6.5cc48433.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-6c7affd0.660ce06f.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-6da4369c.fd57190d.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-6de1bc62.d01efc86.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-7136a154.e2d1f0d3.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-74147bd1.876e2c63.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-757ca954.b15553a7.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-75ad7c0e.b67017d0.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-785ac04e.d5101bf5.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-78742a63.3df502ae.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-78fb2058.3f8e5458.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-7aea5d2b.f8ad3983.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-7c80ecb0.8195c814.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-7dfd5052.01550f14.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-84d1de02.29c87bce.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-891177f6.0e8a2793.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-926160c6.52e9758a.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-a704e872.b44651a8.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-a961b78c.b074a75d.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-ad302a42.529caf45.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-b205bdbe.123b5f57.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-b45589e4.41a14156.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-b68f65e0.f4e5dd07.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-bc37b504.24b0d89b.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-bf393944.1940f3bc.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-c0a3e2fa.5d784513.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-c5fb740a.89eacbb4.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-dab37d56.632af7dd.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-ded9edba.aa2bfcd6.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-ea0143b0.0982c731.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-ee39cd88.8adb81bc.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/chunk-f6532530.0eb12746.css" rel="prefetch">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-51107498.c550911e.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
</head>

<body class="">
    <div id="app">
        <div data-v-6b868a30="" data-v-62bda71e="" class="page">
            <div data-v-6b868a30="" class="headers">
                <div data-v-62bda71e="" class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center"
                    data-v-6b868a30="" style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{route('user.Withdraw')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>

                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Withdrawal Address</span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">


                        <div> <a href="{{ route('user.notice') }}">
                                <img data-v-6b868a30="" src="{{ asset('static/img/111.png') }}" alt="" class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <form method="POST" action="{{ route('user.wallet_change') }}">
                        @csrf
                        <div data-v-62bda71e="" data-v-6b868a30="" class="tw-min-h-full tw-p-16px tw-flex tw-flex-col">
                            <div data-v-62bda71e="" data-v-6b868a30="" class="tw-flex-1">
                                <div data-v-62bda71e="" data-v-6b868a30="" class="tw-mb-10px tw-text-14px">Select Currency
                                </div>
                                <div data-v-62bda71e="" data-v-6b868a30=""
                                    class="van-cell1 tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white1 tw-rounded-10px">
                                    <div data-v-62bda71e="" data-v-6b868a30="" class="tw-flex tw-items-center">
                                        <img data-v-62bda71e="" data-v-6b868a30=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20241119/a374614d2b1d9d3b68ad00f1b2b38e68.jpeg"
                                            alt="" class="tw-w-24px">
                                        <span data-v-62bda71e="" data-v-6b868a30="" class="tw-pl-8px">USDT</span>
                                    </div>
                                    <i data-v-62bda71e="" data-v-6b868a30=""
                                        class="van-icon van-icon-arrow" style="color: rgb(182, 188, 198);">
                                    </i>
                                </div>
                                <div data-v-62bda71e="" data-v-6b868a30="" class="tw-mt-18px tw-mb-10px tw-text-14px">
                                    Select Network </div>
                                <div data-v-62bda71e="" data-v-6b868a30=""
                                    class="van-cell1 tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white1 tw-rounded-10px">
                                    <span data-v-62bda71e="" data-v-6b868a30="" id="showType">TRC20</span><i data-v-62bda71e=""
                                        data-v-6b868a30="" class="van-icon van-icon-arrow" id="openPopup"
                                        style="color: rgb(182, 188, 198);">
                                    </i>
                                </div>
                                <input type="hidden" name="selected_mainnet" value="BEP20" id="walletType">

                                <div data-v-62bda71e="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px">
                                    Withdrawal Address </div>
                                <div data-v-62bda71e="" class="van-cell1 van-field tw-rounded-10px" data-v-6b868a30="">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body">
                                            <input type="text" name="walletAddress" placeholder="Please enter the withdrawal address"
                                                class="van-field__control1">
                                        </div>
                                    </div>
                                </div>
                                <div data-v-62bda71e="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px">
                                    Transaction Password </div>
                                <div data-v-62bda71e="" class="van-cell1 van-field tw-rounded-10px" data-v-6b868a30="">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body"><input type="password" name="code" id="passwordInput"
                                                placeholder="Please enter the transaction password"
                                                class="van-field__control1">
                                            <div class="van-field__right-icon" onclick="togglePassword()"><i data-v-62bda71e="" id="eyeIcon"
                                                    class="van-icon van-icon-closed-eye tw-text-secondary">
                                                </i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button data-v-62bda71e="" data-v-6b868a30="" type="submit"
                                class="van-button van-button--primary van-button--normal">
                                <div data-v-62bda71e="" data-v-6b868a30="" class="van-button__content"><span
                                        data-v-62bda71e="" data-v-6b868a30="" class="van-button__text"> Confirm </span>
                                </div>
                            </button>
                        </div>
                    </form>
                     @include('partials.notify')
                </div>
            </div>

        </div>
        <div class="van-overlay" style="display: none;">
            <div class="tw-w-full tw-h-full tw-flex tw-justify-center tw-items-center">
                <div
                    class="tw-w-100px tw-h-100px tw-flex tw-justify-center tw-items-center tw-bg-dark tw-bg-opacity-10 tw-rounded-10px">
                    <div class="van-loading van-loading--circular"><span
                            class="van-loading__spinner van-loading__spinner--circular"
                            style="color: rgb(23, 114, 248); width: 1rem; height: 1rem;"><svg viewBox="25 25 50 50"
                                class="van-loading__circular">
                                <circle cx="50" cy="50" r="20" fill="none"></circle>
                            </svg></span></div>
                </div>
            </div>
        </div>
        <div data-v-4d1ba5fa="">

        </div>
    </div>
    <script src="/static/1756094289381/js/chunk-vendors.b893e1dd.js"></script>
    <script src="/static/1756094289381/js/app.5acd7986.js"></script>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
        </i>
        <div class="van-toast__text">Login successful</div>
    </div>
    <div class="van-overlay" id="overlay" style="z-index: 2008; display: none;"></div>
    <div data-v-62bda71e="" id="popup" class="chain-select-popup van-popup van-popup--round van-popup--bottom"
        style="display: none; z-index: 2009; background-color: #fff;">
        <div class="tw-p-14px tw-text-16px tw-text-center" style="color:#000"> Select Network </div>
        <div class="tw-px-16px tw-pb-16px">
            <div class="tw-mb-16px van-tabs van-tabs--line">
                <!-- <div class="van-tabs__wrap">
                    <div role="tablist" class="van-tabs__nav van-tabs__nav--line">
                        <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span
                                class="van-tab__text van-tab__text--ellipsis">
                                <div class="tw-flex tw-items-center tw-gap-4px"><img
                                        src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20241119/a374614d2b1d9d3b68ad00f1b2b38e68.jpeg"
                                        class="tw-w-24px tw-h-24px"> USDT </div>
                            </span></div>
                        <div role="tab" class="van-tab"><span class="van-tab__text van-tab__text--ellipsis">
                                <div class="tw-flex tw-items-center tw-gap-4px"><img
                                        src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240904/baa89f4d0b494fec297b855f2740d8f2.png"
                                        class="tw-w-24px tw-h-24px"> USDC </div>
                            </span></div>
                        <div class="van-tabs__line"
                            style="transform: translateX(97px) translateX(-50%); transition-duration: 0.3s;"></div>
                    </div>
                </div> -->
                <div class="van-tabs__content">
                    <div role="tabpanel" class="van-tab__pane" style="">
                        <div
                            class="chain-item tw-mt-16px tw-p-14px tw-border tw-border-solid tw-border-hairline tw-rounded-10px " id="tron">
                            <div class="tw-text-14px" style="color:#000">Tron</div>
                            <div class="tw-text-12px tw-text-secondary"  style="color:#000"> Minimum Withdrawal Amount≥ 50 USDT </div>
                        </div>
                        <div
                            class="chain-item tw-mt-16px tw-p-14px tw-border tw-border-solid tw-border-hairline tw-rounded-10px active " id="bep20">
                            <div class="tw-text-14px" style="color:#000">Bep20</div>
                            <div class="tw-text-12px tw-text-secondary" style="color:#000"> Minimum Withdrawal Amount≥ 50 USDT </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="van-tab__pane" style="display: none;">

                    </div>
                </div>
            </div><button class="van-button van-button--primary van-button--normal van-button--block" id="close" style="color: #fff; background-color: #158960; border: .02667rem solid #d4d4d4;">
                <div class="van-button__content"><span class="van-button__text" > Confirm </span></div>
            </button>
        </div><i role="button" tabindex="0"
            class="van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right" id="close">
        </i>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const overlay = document.getElementById("overlay");
            const popup = document.getElementById("popup");
            const closeBtn = document.getElementById("close");
            const openBtn = document.getElementById("openPopup"); // 👈 create a button with this ID
            const tron = document.getElementById("tron");
            const bep20 = document.getElementById("bep20");
            const walletType = document.getElementById("walletType");
            const showType = document.getElementById("showType");
            tron.addEventListener("click", () => {
                walletType.value = "TRC20";
                showType.textContent = "Trc20";
            });
            bep20.addEventListener("click", () => {
                walletType.value = "BEP20";
                showType.textContent = "Bep20";
            })

            openBtn.addEventListener("click", () => {
                overlay.style.display = "block";
                popup.style.display = "block";
            });

            closeBtn.addEventListener("click", () => {
                overlay.style.display = "none";
                popup.style.display = "none";
            });

            overlay.addEventListener("click", () => {
                overlay.style.display = "none";
                popup.style.display = "none";
            });
        });

        function togglePassword() {
            const passwordInput = document.getElementById("passwordInput");
            const eyeIcon = document.getElementById("eyeIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.className = "van-icon van-icon-eye tw-text-primary"; // show icon when password visible
            } else {
                passwordInput.type = "password";
                eyeIcon.className = "van-icon van-icon-closed-eye tw-text-secondary"; // hide icon
            }
        }
    </script>
</body>

</html>
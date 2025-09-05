<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}} Strategy</title>

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
<style>
    .tw-rounded-10px {
        border-radius: .26667rem;
        border: 1px solid #969696;
        /* border-radius: 10px; */
    }

    .chain-select-popup .van-tabs__content {
        height: 34vh;
        overflow-y: auto;
    }

    .van-button--block {
        display: block;
        width: 100%;
        top: -13px;
    }

    .van-button--primary {
        color: #fff;
        background-color: #158960;
        border: .02667rem solid #d4d4d4;
    }

    .van-popup {
        background-color: #fff;

    }

    .tw-text-16px {
        font-size: .42667rem;
        color: #000000;
    }

    .van-popup .tw-text-14px {
        color: #1e1111;
    }

    .van-popup .tw-text-secondary {
        --tw-text-opacity: 1;
        color: rgb(45 27 27);
        line-height: 24px;
    }

    .chain-select-popup .chain-item.active {
        border-color: #158960;
        position: relative;
    }

    .chain-select-popup .chain-item.active:after {
        content: "";
        position: absolute;
        top: -.01rem;
        right: -.01rem;
        width: .65rem;
        height: .64rem;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAABACAYAAABFqxrgAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALVSURBVHgB5dqxb9NAFMfxdxfqEqhEurYDSMxUXRiRyAQjKxISMLOUwkQHJtgQYejAhPgLKAIJOlHBwBrRGakTcxCEINr68C+VW9eNY8d+Z59fvlIU27WH+/TuokhRZ1d+LxulPxGpFtU4RaprFO0oMm9nfNrqdZo72Z8NkgIRLRjYltb6xa9nsxsZ7j1IIsQwpTY839wfNzNU9EQsBKleQ6u7SbNCR0/6nbmuMn6byPRIVKa17/tvzqwOHo/6qxp1Ue6MwIAbd/rPvdfHryUkeWkoo9v9jtcNr+ikWyUvDVL+q+gVPe52qRCGzHJz9c9KeK7THpAKESyJw00yFQHJhDCtuYeDqzjKhIAkQhhf38Z7ZgQkDcIYcwPvinIk6ePTM6fnJ5oJYa7OiKUFRV8feMFrNjjONrRd2r2QayaEuTQjAPDhnket5sGQfg6IFtb+pj6nG9TONRPCXJkRcYBJK4SAbEFcuajp0bVTdH5+/MCSANY/71HWCi2HaJxL49blBr28OTM8xrS+vv6Pvv3wT9yXBPB0c4+ebGZDKLwconHOiEuLR4M61yT6GAw0vtFxAISxISAuiPfbx//rcQhOAMSKgDggvnz3TwwmhMBS4QRAbHtCPI49AhvjWvBKqwgA654Qj2NGZBlcEYAwawjINgQHALKKgGxBcAEga3tCPI49Apvi0qKmd9v7w82TI+wJpSEgF799Wt0YR+Xqt89SEZCLEKUjINcgKkFALkFUhoBcgagUAbkAUTkCqhrCCQRUJYQzCKgqCKcQUBUQziGgsiGcREBlQjiLgMqCcBoBlQHhPAKyDVELBGQTojYIyBZErRCQDYjaISBuiFoiIE6I2iIgLohaIyAOiNojoKIQIhBQEQgxCCgvhCgElAdCHAKaFEIkApoEQiwCygohGgFlgRCPgNIgpgIBjYOYGgSUBDFVCGgUxNQhoDhEqb9Zci38horIo/+JYBQeWYQuvgAAAABJRU5ErkJggg==) no-repeat 50%;
        background-size: 100% 100%;
    }

    .van-popup__close-icon--top-right {
        top: .12667rem;
        right: -2.9rem;
    }

    .van-popup__close-icon {
        position: absolute;
        z-index: 1;
        color: #c8c9cc;
        font-size: .58667rem;
        cursor: pointer;
    }

    .van-icon,
    .van-icon:before {
        display: inline-block;
    }

    .van-icon {
        position: relative;
        font: normal normal normal .37333rem / 1 vant-icon;
        font: normal normal normal .37333rem / 1 var(--van-icon-font-family, "vant-icon");
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
    }

    .van-icon-cross:before {
        content: "\e6a7";
    }

    .van-icon,
    .van-icon:before {
        display: inline-block;
    }
    p {
    line-height: 25px;
    }
</style>

<body>

    <div id="app">
        <div data-v-6b868a30="" class="page">
            <div data-v-6b868a30="" class="headers">
                <div class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center" data-v-6b868a30=""
                    style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{ route('user.dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>

                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Withdrawal</span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">

                        <div>
                            <a href="{{ route('user.notice') }}">
                                <img data-v-6b868a30="" src="{{ asset('static/img/111.png') }}" alt=""
                                    class="svg-icon"
                                    style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <form action="{{ route('user.Withdraw-Request') }}" methode="post" data-v-7daccefc=""
                        id="scroll">
                        {{ csrf_field() }}
                        <div data-v-6b868a30="" class="page-withdraw tw-min-h-full tw-p-16px">
                            <div data-v-6b868a30="" class="tw-mb-10px tw-text-14px">Select Currency</div>
                            <div data-v-6b868a30=""
                                class="tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white3 tw-rounded-10px">
                                <div data-v-6b868a30="" class="tw-flex tw-items-center"><img data-v-6b868a30=""
                                        src="{{ asset('/static/img/usdt.png') }}" alt="" class="tw-w-24px">
                                    <input data-v-6b868a30="" class="tw-pl-8px van-field__control1" value="USDT"
                                        readonly="readonly" type="text">
                                </div><i data-v-6b868a30="" class="van-icon van-icon-arrow"
                                    style="color: rgb(182, 188, 198);">
                                </i>
                            </div>
                            <div data-v-6b868a30="" class="tw-mt-18px tw-mb-10px tw-text-14px"> Select Network </div>
                            <!-- <div data-v-6b868a30=""
                                class="tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white3 tw-rounded-10px">
                                <input data-v-6b868a30="" value="BEP20" id="currencyId" class="tw-pl-8px van-field__control1" name="paymentMode"><i data-v-6b868a30="" class="van-icon van-icon-arrow"
                                    style="color: rgb(182, 188, 198);">
                                    </i>
                            </div> -->
                            <div
                                class="tw-h-44px tw-px-14px tw-flex tw-justify-between tw-items-center tw-bg-white3 tw-rounded-10px">
                                <div class="custom-dropdown">
                                    <div class="dropdown-trigger">TRC20</div>
                                    <input type="hidden" name="paymentMode" id="currencyId" value="trc20">
                                </div>
                            </div>






                            <div data-v-6b868a30="" class="tw-mt-18px tw-mb-10px tw-text-14px"> Withdrawal Address
                            </div>
                            <div class="tw-rounded-10px van-cell1 van-field tw-mb-16px" data-v-6b868a30="">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">

                                        <input type="text" id="walletAddress" readonly name="walletAddress"
                                            style="color:#fff" placeholder="Wallet Address"
                                            class="van-field__control">


                                        <a href="{{route('user.wallets')}}">
                                            <div class="van-field__right-icon">
                                            <img data-v-6b868a30=""
                                                src="{{ asset('static/img/icons8-wallet-50.png') }}" alt=""
                                                class="svg-icon"
                                                style=" width: 0.4706rem; height: 0.4706 rem; font-size: 0.4706rem;">
                                        </div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div data-v-6b868a30="" class="tw-mt-18px tw-mb-10px tw-text-14px"> Withdrawal Amount
                            </div>

                            <div class="tw-rounded-10px van-cell1 van-field" data-v-6b868a30="">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        <input type="text"  name="amount" 
                                            placeholder="Please enter the withdrawal amount"
                                            class="van-field__control" style="color:#fff">
                                        <div class="van-field__right-icon"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-6b868a30=""
                                class="tw-mb-16px tw-p-14px tw-h-38px tw-flex tw-justify-between tw-items-center tw-bg-secondary tw-bg-opacity-10 tw-rounded-bl-10px tw-rounded-br-10px">
                                <span data-v-6b868a30="" class="tw-text-secondary">Arrival Amount</span><span
                                    data-v-6b868a30="" class="tw-text-success">
                                    {{ number_format(Auth::user()->withdrawalble_balance(), 2) }} USDT </span>
                            </div>
                            <div data-v-6b868a30="" class="tw-mt-18px tw-mb-10px tw-text-14px"> Verification Code
                            </div>
                            <div class="tw-rounded-10px van-cell1 van-field tw-mb-16px" data-v-6b868a30="">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body">
                                        <input type="hidden" id="emailId" name="email"
                                            value="{{ Auth::user()->email }}">

                                        <input type="text" name="code" style="color:#fff"
                                            placeholder="Please enter the verification code"
                                            class="van-field__control">

                                        <button type="button"
                                            style="width:40px;color:white;border-radius: 0 1rem 1rem 0;"
                                            class="btn" id="sendButton" onclick="sendVerificationCode()">
                                            <span id="buttonLabel" style="margin: -12px;font-size:15px;">Send</span>
                                            <span id="countdownTimer"
                                                style="display: none;margin: -12px;font-size:18px;"></span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <?php
                            use Carbon\Carbon;
                            use App\Models\Withdraw;

                            $user = Auth::user();
                            $quantifiable_count = 0;
                           
                            $min_withdrawal = 50;
                            $maximum_withdrawal = 500;
                            $chargeAmt = 9;
                             $vip = getVip(Auth::user()->id);
                             $chargeAmt = getWithdrawalFeePercent($vip);
                            
                                if ($user->adate) {
                                    // last successful withdrawal (non-failed)
                                    $last = Withdraw::where('user_id', $user->id)
                                        ->where('status', '!=', 'Failed')
                                        ->latest('created_at')
                                        ->first();

                                    // baseline date = last withdrawal date OR user's adate
                                    $baseline = $last ? Carbon::parse($last->created_at) : Carbon::parse($user->adate);

                                    // if 21+ days have passed since baseline → fee = 0
                                    if ($baseline->lte(now()->subDays(21))) {
                                        // if you're using percent:
                                        // $feePercent = 0;

                                        // if you're using a precomputed amount:
                                        $chargeAmt = 0;
                                    }
                                }
                            
                            ?>
                            <input type="hidden" id="chargeAmt" value="{{ $chargeAmt }}">
                            <input type="hidden" id="min_withdrawal" value="{{ $min_withdrawal }}">
                            <input type="hidden" id="max_withdrawal" value="{{ $maximum_withdrawal }}">
                            <div data-v-6b868a30="" class="tw-mb-12px tw-flex tw-justify-between tw-items-center">
                                <span data-v-6b868a30="" class="tw-text-secondary"> Withdraw Process Fee
                                    {{ $chargeAmt }}
                                    % </span><span id="chargefee" data-v-6b868a30="">0 USDT</span></div>
                            <div data-v-6b868a30="" class="tw-mb-12px tw-flex tw-justify-between tw-items-center">
                                <span data-v-6b868a30="" class="tw-text-secondary"> Days to Free Withdrawal </span>


                                <div data-v-6b868a30=""> 21 days </div>

                            </div>
                            <div data-v-6b868a30="" class="tw-mb-12px tw-flex tw-justify-between tw-items-center">
                                <span data-v-6b868a30="" class="tw-text-secondary"> Minimum Withdrawal Amount
                                </span><span data-v-6b868a30="">{{ $min_withdrawal }} USDT</span></div>
                            <div data-v-6b868a30="" class="tw-mb-12px tw-flex tw-justify-between tw-items-center">
                                <span data-v-6b868a30="" class="tw-text-secondary"> Maximum Withdrawal Amount
                                </span><span data-v-6b868a30="">{{ $maximum_withdrawal }} USDT</span></div>
                            <div data-v-6b868a30=""
                                class="tw-mt-18px tw-mb-24px tw-p-14px tw-text-14px tw-bg-white3 tw-rounded-10px">
                                <div data-v-6b868a30="" class="tw-flex tw-items-center"><i data-v-6b868a30=""
                                        class="tw-text-20px van-icon van-icon-warning"
                                        style="color: rgba(211, 255, 231, 1);">
                                    </i><span data-v-6b868a30="" class="tw-text-primary tw-pl-8px"> Note </span>
                                </div>
                                <div data-v-6b868a30="" class="tw-text-14px tw-text-secondary tw-mt-8px">
                                   <div class="withdrawal-rules tw-text-sm tw-leading-relaxed tw-space-y-3">
                                <p>1. <strong>Processing Time:</strong> Withdrawals are processed within 
                                    <strong>72 working hours</strong> (Monday to Friday). Weekends are excluded.</p>

                                <p>2.<strong>Fee-Free Withdrawal:</strong> Stay active without withdrawing for 
                                    <strong>21 consecutive days</strong> to unlock one fee-free withdrawal.</p>

                                <p>3.<strong>Cancellation Policy:</strong> If you apply for a fee-free withdrawal 
                                    but <strong>cancel it</strong>, the opportunity is lost and the 21-day waiting 
                                    period restarts.</p>

                                <p>4.<strong>Password Format:</strong> Your withdrawal password must be a 
                                    <strong>6-digit numeric code (0–9)</strong>. Letters and symbols are not allowed.</p>

                                <p>5.<strong>Security Hold:</strong> After changing your login password, transaction 
                                    password, or wallet address, a <strong>48-hour security period</strong> applies 
                                    before withdrawals can be made.</p>

                                <p>6.<strong>Fund Availability:</strong> Withdrawals can only be made from 
                                    <strong>flexible funds</strong>. If insufficient, wait for pending release funds 
                                    to convert before withdrawing.</p>
                            </div>
                                </div>
                            </div>'
                            <?php
                            date_default_timezone_set('Asia/Kolkata');
                            
                            $date1 = Auth::user()->adate;
                            $date1 = strtotime($date1);
                            $date1 = strtotime(' + 4 day', $date1);
                            $new_date1 = date('Y-m-d H:i:s', $date1);
                            
                            ?>
                            @if (date('Y-m-d H:i:s') > $new_date1)
                                <button data-v-6b868a30="" type="submit"
                                    class="van-button van-button--primary van-button--normal van-button--block submit-btn">
                                    <div data-v-6b868a30="" class="van-button__content"><span data-v-6b868a30=""
                                            class="van-button__text"> Confirm </span></div>
                                </button>
                            @else
                                <button data-v-6b868a30="" type="button" disabled=""
                                    class="van-button van-button--primary van-button--normal van-button--block">
                                    <div data-v-6b868a30="" class="van-button__content"><span data-v-6b868a30=""
                                            class="van-button__text"> Confirm </span></div>
                                </button>
                            @endif
                        </div>
                    </form>
                    @include('partials.notify')

                </div>
            </div>

        </div>

        <div class="chain-select-popup van-popup van-popup--round van-popup--bottom"
            style="z-index: 2007; display: none;">
            <div class="tw-p-14px tw-text-16px tw-text-center"> Select Network

                <i role="button" tabindex="0"
                    class="van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right">
                    <!---->
                </i>
            </div>
            <div class="tw-px-16px tw-pb-16px">

                <div class="van-tabs__content">
                    <div role="tabpanel" class="van-tab__pane" style="">
                        <div
                            class="chain-item tw-mt-16px tw-p-14px tw-border tw-border-solid tw-border-hairline tw-rounded-10px active">
                            <div class="tw-text-14px">Tron</div>
                            <div class="tw-text-12px tw-text-secondary"> Minimum Withdrawal Amount≥ 50 USDT </div>
                        </div>
                        <div
                            class="chain-item tw-mt-16px tw-p-14px tw-border tw-border-solid tw-border-hairline tw-rounded-10px">
                            <div class="tw-text-14px">Binance Smart Chain</div>
                            <div class="tw-text-12px tw-text-secondary"> Minimum Withdrawal Amount≥ 50 USDT </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="van-tab__pane" style="display: none;">
                        <!---->
                    </div>
                </div>
            </div><button type="submit" class="van-button van-button--primary van-button--normal van-button--block ">
                <div class="van-button__content"><span class="van-button__text"> Confirm </span></div>
            </button>
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

   

    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

    <script>
        $(function() {
            $('input[name="amount"]').on('change keyup', function() {
                let str = $(this).val();
                str = str.replace(',', '.');
                $(this).val(str);
                let min = $('#min_withdrawal').val();
                let max = $('#max_withdrawal').val();

                let charge = $('#chargeAmt').val();

                let amount = parseFloat(str);

            


                if (amount >= min && amount <= max) {
                    $(".submit-btn").prop("disabled", false);
                } else {

                    $(".submit-btn").prop("disabled", true);
                }


                $('#ActualAmount').html(amount - amount * charge / 100 + " USDT");
                $('#chargefee').html(amount * charge / 100 + " USDT");




                //console.log(summ_usd);
            });
        })
    </script>

    <script>
        function sendVerificationCode() {
            const email = document.querySelector('input[name="email"]').value;
            const sendButton = document.getElementById('sendButton');
            const buttonLabel = document.getElementById('buttonLabel');
            const countdownTimer = document.getElementById('countdownTimer');

            if (!email) {
                iziToast.error({
                    message: "Please enter your email first.",
                    position: "topRight"
                });
                return;
            }

            sendButton.disabled = false;

            buttonLabel.style.display = 'none';
            countdownTimer.style.display = 'inline';

            let countdown = 60;
            countdownTimer.textContent = `${countdown}s`;

            const timerInterval = setInterval(() => {
                countdown--;
                countdownTimer.textContent = `${countdown}s`;

                if (countdown <= 0) {
                    clearInterval(timerInterval);
                    countdownTimer.style.display = 'none';
                    buttonLabel.style.display = 'inline';
                    sendButton.disabled = false;
                }
            }, 1000);

            fetch("{{ route('send_forgot') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        email: email
                    })
                })
                .then(res => {
                    if (!res.ok) throw new Error(res.statusText); // status 200 check
                    return res.json();
                })
                .then(data => {
                    iziToast.success({
                        message: 'Email sent Successfully',
                        position: "topRight"
                    });
                })
                .catch(err => {
                    iziToast.error({
                        message: "Code sent failed.",
                        position: "topRight"
                    });
                });
        }
    </script>
    <script>
        function copyWallet() {
            const walletText = document.getElementById("walletAddress").innerText;

            navigator.clipboard.writeText(walletText)
                .then(() => {
                    iziToast.success({
                        message: 'Wallet address copied!',
                        position: "topRight"
                    });
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

                $('#walletAddress').text(selectedAddress);
                $('#walletAddress').val(selectedAddress);


            }

            updateAddressAndQR();

            $('.dropdown-option').on('click', function() {
                $('#currencyId').trigger('change');
            });

            $('#currencyId').on('change', function() {
                updateAddressAndQR();
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropdown = document.querySelector(".custom-dropdown");
            const popup = document.querySelector(".chain-select-popup");
            const confirmBtn = popup.querySelector(".van-button");
            const dropdownTrigger = dropdown.querySelector(".dropdown-trigger");
            const currencyInput = document.getElementById("currencyId");
            let selectedNetwork = null;

            // Open popup on dropdown click
            dropdown.addEventListener("click", () => {
                popup.style.display = "block";
            });

            // Close popup when clicking close icon (X)
            const closeIcon = popup.querySelector(".van-popup__close-icon--top-right");
            if (closeIcon) {
                closeIcon.addEventListener("click", () => {
                    popup.style.display = "none";
                });
            }


            // Close popup when clicking close icon
            popup.querySelector(".van-icon-cross").addEventListener("click", () => {
                popup.style.display = "none";
            });

            // Handle chain item selection
            popup.querySelectorAll(".chain-item").forEach(item => {
                item.addEventListener("click", () => {
                    popup.querySelectorAll(".chain-item").forEach(i => i.classList.remove(
                    "active"));
                    item.classList.add("active");

                    // Save selection (Tron / Binance Smart Chain)
                    selectedNetwork = item.querySelector(".tw-text-14px").textContent.trim();
                });
            });

            // Confirm button click
            confirmBtn.addEventListener("click", () => {
                if (!selectedNetwork) return;

                // Update dropdown text
                dropdownTrigger.textContent = selectedNetwork;
                const addresses = {
                    bep20: "{{ Auth::user()->usdtBep20 }}",
                    trc20: "{{ Auth::user()->usdtTrc20 }}"
                };
                const selectedAddress = selectedNetwork === "Tron" ? addresses.trc20 : addresses.bep20;
                document.getElementById("walletAddress").value = selectedAddress;

                // Update hidden input based on network
                if (selectedNetwork === "Tron") {
                    currencyInput.value = "trc20";
                } else if (selectedNetwork === "Binance Smart Chain") {
                    currencyInput.value = "bep20";
                }

                // Close popup
                popup.style.display = "none";
            });
        });
    </script>



</body>

</html>

<html data-dpr="1" style="font-size: 32px; max-width: 320px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>Login</title>

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
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css" />


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

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5c64915e.135fdcf8.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">

</head>

<style>
    .tw-text-16px {
        font-size: .42667rem;
        color: #fff;
        margin-bottom: 18px;
    }

    .van-cell {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        box-sizing: border-box;
        width: 100%;
        padding: .16667rem .42667rem;
        overflow: hidden;
        color: #18191c;
        font-size: .37333rem;
        line-height: .64rem;
        background-color: #fff;
    }
</style>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
</head>

<body>


    <div id="app">
        <div data-v-6b868a30="" class="page page-auth">
            <div data-v-6b868a30="" class="headers">
                <div class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center" data-v-6b868a30="" style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center"><svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" style="color: rgb(24, 25, 28); width: 0.70625rem; height: 0.70625rem; font-size: 0.70625rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-close"></use>
                        </svg><!----></div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis" style="color: rgb(24, 25, 28);"><span></span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px"><svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" style="color: rgb(24, 25, 28); width: 0.70625rem; height: 0.70625rem; font-size: 0.70625rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-website"></use>
                        </svg><svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" style="color: rgb(24, 25, 28); width: 0.70625rem; height: 0.70625rem; font-size: 0.70625rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-clear-cache"></use>
                        </svg>
                        <div><svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" style="color: rgb(24, 25, 28); width: 0.70625rem; height: 0.70625rem; font-size: 0.70625rem;">
                                <use data-v-3f1a7394="" xlink:href="#svg-icon-bell"></use>
                            </svg></div><svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" style="color: rgb(24, 25, 28); width: 0.70625rem; height: 0.70625rem; font-size: 0.70625rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-i18n"></use>
                        </svg><svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" style="color: rgb(24, 25, 28); width: 0.70625rem; height: 0.70625rem; font-size: 0.70625rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-service"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <div data-v-6b868a30="" class="page-auth-container tw-h-full tw-p-20px">
                        <div data-v-6b868a30="" class="page-auth-header tw-relative tw-z-10 tw-mb-20px tw-flex tw-items-center"><img data-v-6b868a30="" src="/static/1756094289381/img/logo.41d208eb.svg" alt="" class="tw-w-64px tw-h-64px">
                            <div data-v-6b868a30="" class="tw-pl-12px tw-flex-1">
                                <div data-v-6b868a30="" class="tw-mb-6px tw-text-24px">Hello,</div>
                                <div data-v-6b868a30="" class="tw-text-18px van-ellipsis"> Welcome SEOKORE </div>
                            </div>
                        </div>
                        <div data-v-6b868a30="" class="page-auth-content tw-relative tw-z-10">
                            <div data-v-6b868a30="" class="page-auth-form tw-pb-24px">
                                <div data-v-6b868a30="" class="tw-relative tw-z-0 tw-top-10px tw-flex tw-justify-between tw-items-start">
                                    <div data-v-6b868a30="" class="page-auth-form-title"> Login </div>
                                </div>
                                <div data-v-6b868a30="" class="tw-relative tw-z-10 tw-bg-white tw-px-16px tw-pb-20px tw-rounded-10px">
                                    <div class="van-tabs van-tabs--line" data-v-6b868a30="">
                                        <div class="van-tabs__wrap van-hairline--top-bottom">
                                            <div role="tablist" class="van-tabs__nav van-tabs__nav--line">
                                                <div role="tab" aria-selected="true" class="van-tab van-tab--active"><span class="van-tab__text van-tab__text--ellipsis">Mobile login</span></div>
                                                <div role="tab" class="van-tab"><span class="van-tab__text van-tab__text--ellipsis">Email login</span></div>
                                                <div class="van-tabs__line" style="transform: translateX(59.5px) translateX(-50%); transition-duration: 0.3s;"></div>
                                            </div>
                                        </div>
                                        <div class="van-tabs__content">
                                            <div role="tabpanel" class="van-tab__pane" style="">
                                                <div class="tw-mt-20px tw-text-16px"> Mobile phone </div>
                                                <div class="van-cell van-field !tw-px-0 cell-after-full">
                                                    <div class="van-field__left-icon">
                                                        <div class="tw-flex tw-items-center"><span class="tw-pr-4px">+1</span><i class="van-icon van-icon-arrow-down"><!----></i></div>
                                                    </div>
                                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                                        <div class="van-field__body"><input type="tel" placeholder="Please enter your phone number" class="van-field__control"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div role="tabpanel" class="van-tab__pane" style="display: none;"><!----></div>
                                        </div>
                                    </div>
                                    <div data-v-6b868a30="" class="tw-mt-20px tw-text-16px">Login Password</div>
                                    <div class="van-cell van-field !tw-px-0 cell-after-full" data-v-6b868a30="">
                                        <div class="van-cell__value van-cell__value--alone van-field__value">
                                            <div class="van-field__body"><input type="password" autocomplete="new-password" placeholder="Please enter a password (6-20 alphanumeric characters)" class="van-field__control">
                                                <div class="van-field__right-icon"><i class="van-icon van-icon-closed-eye tw-text-secondary"><!----></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-6b868a30="" class="tw-mt-16px tw-flex tw-items-center tw-text-14px">
                                        <div role="checkbox" tabindex="0" aria-checked="false" class="tw-mr-8px rounded van-checkbox" data-v-6b868a30="">
                                            <div class="van-checkbox__icon van-checkbox__icon--square"><i class="van-icon van-icon-success"><!----></i></div><span class="van-checkbox__label"> Remember account password </span>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-6b868a30="" class="tw-relative tw-z-0 tw-bottom-10px tw-flex tw-justify-between tw-items-center"><a href="/user/forget_password?id=1" class="tw-mt-12px tw-text-primary" data-v-6b868a30=""> Forgot password? </a><a href="/user/register/index" class="page-auth-form-footer" data-v-6b868a30=""> Registration <i class="van-icon van-icon-arrow"><!----></i></a></div>
                                <div data-v-6b868a30="" class="tw-mt-24px"><button data-v-6b868a30="" disabled="disabled" class="van-button van-button--default van-button--large van-button--disabled van-button--block">
                                        <div data-v-6b868a30="" class="van-button__content"><span data-v-6b868a30="" class="van-button__text"> Login </span></div>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!---->
        </div>
        <div class="van-overlay" style="display: none;">
            <div class="tw-w-full tw-h-full tw-flex tw-justify-center tw-items-center">
                <div class="tw-w-100px tw-h-100px tw-flex tw-justify-center tw-items-center tw-bg-dark tw-bg-opacity-10 tw-rounded-10px">
                    <div class="van-loading van-loading--circular"><span class="van-loading__spinner van-loading__spinner--circular" style="color: rgb(23, 114, 248); width: 1rem; height: 1rem;"><svg viewBox="25 25 50 50" class="van-loading__circular">
                                <circle cx="50" cy="50" r="20" fill="none"></circle>
                            </svg></span></div>
                </div>
            </div>
        </div>
        <div data-v-4d1ba5fa=""><!----></div>
    </div>

</body>

</html>
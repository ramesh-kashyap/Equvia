<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>SEOKORE Strategy</title>
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
    <link href="{{ asset('') }}static/eed/js/app.5acd7986.js" rel="preload" as="script">
    <link href="{{ asset('') }}static/eed/js/chunk-vendors.b893e1dd.js" rel="preload" as="script">
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="stylesheet">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-51107498.c550911e.css">

    <style type="text/css">
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
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-a961b78c.b074a75d.css">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-1ee97074.f442ee68.css">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-ea0143b0.0982c731.css">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-267a32e6.0d9f6f8d.css">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-926160c6.52e9758a.css">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-2a53918e.7e78b090.css">
    <script charset="utf-8" src="/static/1756094289381/js/chunk-2a53918e.f5cd7495.js"></script>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
</head>
<style>
    .tw-rounded-10px {
        border-radius: .26667rem;
        border: none;
        /* border-radius: 10px; */
    }
</style>

<body>
    <div id="app">
        <div data-v-6b868a30="" class="page page-mine">
            <div data-v-6b868a30="" class="headers">
                <div class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center" data-v-6b868a30=""
                    style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{ route('user.dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>
                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Mine</span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">
                        <a href="{{ route('user.lang') }}">
                            <img data-v-6b868a30="" src="{{ asset('static/icon/lang.png') }}" alt=""
                                class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        </a>
                        
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
                    <div data-v-6b868a30="" class="tw-min-h-full tw-p-16px">
                        <div data-v-6b868a30="" class="page-mine-header tw-mb-16px">
                            <div data-v-6b868a30="" class="tw-mb-16px tw-flex tw-justify-between tw-items-center">
                                <div data-v-6b868a30="" class="tw-flex tw-items-center">
                                    <div data-v-6b868a30=""
                                        class="tw-w-60px tw-h-60px tw-rounded-full tw-overflow-hidden">
                                        <img data-v-6b868a30="" src="{{ asset('') }}2.png" alt="">
                                    </div>
                                    <div data-v-6b868a30="" class="tw-ml-12px">
                                        <div data-v-6b868a30="" class="tw-text-18px">{{ sitename('') }}</div>
                                        <div data-v-6b868a30="" class="tw-text-12px tw-flex tw-items-center"><span
                                                data-v-6b868a30="" class="tw-text-secondary"> Invitation Code:
                                            </span><span data-v-6b868a30=""
                                                class="tw-px-8px">{{ Auth::user()->sponsor_detail ? Auth::user()->sponsor_detail->username : 0 }}</span><span
                                                data-v-6b868a30="">
                                                <svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon"
                                                    data-v-6b868a30=""
                                                    style="color: rgba(255, 255, 255, 1); width: 0.2824rem; height: 0.2824rem; font-size: 0.2824rem;"
                                                    onclick="copyById('code')">
                                                    <use data-v-3f1a7394="" xlink:href="#svg-icon-copy"></use>
                                                </svg></span></div>
                                        <div data-v-6b868a30="" class="tw-text-12px"><span data-v-6b868a30=""
                                                class="tw-text-secondary">UID:</span><span data-v-6b868a30=""
                                                class="tw-pl-4px">{{ Auth::user()->username }}</span></div>
                                    </div>
                                </div>
                                <a href="{{ route('user.showinfo') }}">
                                    <i data-v-6b868a30="" class="tw-text-20px van-icon van-icon-arrow">
                                    </i>
                                </a>
                            </div>
                            <div data-v-6b868a30=""
                                class="page-mine-header-banner tw-p-16px tw-flex tw-justify-between tw-items-center"
                                style="border:0.3px solid #3f3f3f; border-radius:5px">
                                <div data-v-6b868a30="" class="tw-flex tw-items-center">
                                    <div data-v-6b868a30=""
                                        class="tw-w-36px tw-h-36px tw-rounded-full tw-overflow-hidden">
                                        <img
                                            data-v-6b868a30=""
                                            src="{{ asset('static/img/rank/eq' . strtolower($rank) . '.png') }}"
                                            alt=""></div><span data-v-6b868a30=""
                                        class="tw-pl-8px tw-text-16px tw-text-white"> EQ{{$rank}} </span>
                                </div>
                                <div data-v-6b868a30="" class="level-btn">
                                    <button data-v-6b868a30="" {{ route('user.vip') }}
                                        class="tw-w-8 van-button van-button--default1 van-button--mini van-button--round">
                                        <div data-v-6b868a30="" class="van-button__content">
                                            <a href="{{ route('user.vip') }}">
                                                <span data-v-6b868a30="" class="van-button__text"> Upgrade </span>
                                            </a>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div data-v-6b868a30="" class="tw-mb-16px tw-p-16px  tw-rounded-10px">
                            <div class="actions">
                                <a href="{{ route('user.deposit') }}">
                                    <span>
                                        <img src="{{ asset('') }}static/icon/scanner.png" alt="">
                                        <p>Deposit</p>
                                    </span>
                                </a>
                                <a href="{{ route('user.Withdraw') }}">
                                    <span>
                                        <img src="{{ asset('') }}static/icon/telegram.png" alt="">
                                        <p>Withdraw</p>
                                    </span>
                                </a>
                                <a href="{{ route('user.share') }}">
                                    <span>
                                        <img src="{{ asset('') }}static/icon/invite.png" alt="">
                                        <p>Invite</p>
                                    </span>
                                </a>
                                <a href="{{ route('user.about') }}">
                                    <span>
                                        <img src="{{ asset('') }}static/icon/support.png" alt="">
                                        <p>Help Center</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div data-v-6b868a30="" class="tw-mb-16px tw-px-16px tw-pt-16px tw-bg-white3 tw-rounded-10px">
                            <div data-v-6b868a30="" class="tw-mb-12px tw-text-16px">Menu</div>
                            <ul data-v-6b868a30="" class="tw-flex tw-flex-wrap">
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-rules"></use>
                                    </svg> -->
                                    <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/langu.png"
                                        alt=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                    <a href="{{ route('user.terms') }}">
                                        <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center">
                                            Terms of
                                            Use </div>
                                    </a>
                                </li>
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-kyc"></use>
                                    </svg> -->
                                    <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/download (9).png"
                                        alt=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                    <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center"> Verify
                                    </div>
                                </li>
                                <!-- <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon"
                                        alt="" data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-google-auth"></use>
                                    </svg>
                                    <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center"> Google
                                        Authenticator </div>
                                </li> -->
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-lock"></use>
                                    </svg> -->
                                    <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/download (6).png"
                                        alt=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                    <a href="{{ route('user.ChangePass') }}">
                                        <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center">
                                            Login
                                            Password </div>
                                    </a>
                                </li>
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-security"></use>
                                    </svg> -->
                                    <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/download (3).png"
                                        alt=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                    <a href="{{ route('user.change-trx-password') }}">
                                        <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center">
                                            Transaction Password </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div data-v-6b868a30="" class="tw-mb-16px tw-px-16px tw-pt-16px tw-bg-white3 tw-rounded-10px">
                            <div data-v-6b868a30="" class="tw-mb-12px tw-text-16px">Help</div>
                            <ul data-v-6b868a30="" class="tw-flex tw-flex-wrap">
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <a href="{{ route('user.terms') }}">
                                        <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-feedback"></use>
                                    </svg> -->
                                        <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/download (9).png"
                                            alt=""
                                            style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center">
                                            Feedback
                                        </div>
                                    </a>
                                </li>
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <a href="{{ route('user.about') }}">
                                        <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-question"></use>
                                    </svg> -->
                                        <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/download (10).png"
                                            alt=""
                                            style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center">
                                            Help
                                            Center </div>
                                    </a>
                                </li>
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-i18n"></use>
                                    </svg> -->
                                    <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/download (6).png"
                                        alt=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                    <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center"> Switch
                                        Language </div>
                                </li>
                                <li data-v-6b868a30=""
                                    class="tw-mb-16px tw-w-1/4 tw-flex tw-flex-col tw-items-center">
                                    <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="tw-mb-4px svg-icon" alt=""
                                        data-v-6b868a30=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-service"></use>
                                    </svg> -->
                                    <img class="tw-mb-6px svg-icon"src="{{ asset('') }}static/icon/support.png"
                                        alt=""
                                        style="width: 0.6118rem; height: 0.6118rem; font-size: 0.6118rem;">
                                    <div data-v-6b868a30="" class="tw-text-12px tw-break-words tw-text-center">
                                        Customer
                                        Service </div>
                                </li>
                            </ul>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                            <button data-v-6b868a30="" type="submit"
                                class="!tw-mb-12px !tw-border-none van-button van-button--default1 van-button--normal van-button--plain van-button--block">
                                <div data-v-6b868a30="" class="van-button__content">
                                    <span data-v-6b868a30="" class="van-button__text"> Sign Out </span>
                                </div>
                            </button>
                        </form>
                        <!-- <button data-v-6b868a30=""
                            class="!tw-border-none van-button van-button--danger van-button--normal van-button--plain van-button--block">
                            <div data-v-6b868a30="" class="van-button__content"><span data-v-6b868a30=""
                                    class="van-button__text"> Delete Account </span></div>
                        </button> -->

                    </div>
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
    <script>
        function copyById(elementId) {
            const text = document.getElementById(elementId)?.innerText?.trim();
            if (!text) return;

            navigator.clipboard.writeText(text)
                .then(() => {
                    showToast("Copied: " + text);
                })
                .catch(() => {
                    showToast("Failed to copy");
                });
        }

        function showToast(message) {
            const toast = document.getElementById("copyToast");
            toast.innerText = message;
            toast.style.visibility = "visible";
            toast.style.opacity = "1";
            toast.style.bottom = "50px";

            setTimeout(() => {
                toast.style.visibility = "hidden";
                toast.style.opacity = "0";
                toast.style.bottom = "30px";
            }, 2000);
        }
    </script>
    
</body>

</html>

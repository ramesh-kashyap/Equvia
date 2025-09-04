<html class="pc" style="font-size: 50px;background:white;">

<head>
    <meta charset="utf-8">
    <title>{{ siteName() }}</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <link rel="manifest" href="/manifest.json">

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
            max-width: 8.5rem;
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
    <link href="/js1743475952730/app.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/axios.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/compressorjs.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/core-js.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/crypto-js.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/vant.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/vendors~app.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="/js1743475952730/vue.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-7f362702.6a53b834.css">
    <script charset="utf-8" src="/js1743475952730/chunk-7f362702.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1743475952730/chunk-5576a184.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-60c8a75a.d6f6b692.css">
    <script charset="utf-8" src="/js1743475952730/chunk-60c8a75a.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-a7d8f170.c87a4291.css">
    <script charset="utf-8" src="/js1743475952730/chunk-a7d8f170.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-00b1464f.674dbd13.css">
    <script charset="utf-8" src="/js1743475952730/chunk-00b1464f.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-67912ed2.ae8d438d.css">
    <script charset="utf-8" src="/js1743475952730/chunk-67912ed2.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script charset="utf-8" src="/js1743475952730/echarts.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script charset="utf-8" src="/js1743475952730/chunk-0119f9da.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-0b116a05.250ed6be.css">
    <script charset="utf-8" src="/js1743475952730/chunk-0b116a05.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-367626f4.8674be05.css">
    <script charset="utf-8" src="/js1743475952730/chunk-367626f4.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script charset="utf-8" src="/js1743475952730/qrcodejs2.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-0d09da43.555d1171.css">
    <script charset="utf-8" src="/js1743475952730/chunk-0d09da43.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-115aa5d8.9d416f08.css">
    <script charset="utf-8" src="/js1743475952730/chunk-115aa5d8.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5f936813.7deb1a32.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-2f63d074.281755cb.css">
    <script charset="utf-8" src="/js1743475952730/chunk-2f63d074.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5412a522.b373626a.css">
    <script charset="utf-8" src="/js1743475952730/chunk-5412a522.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-17ff7542.34892cae.css">
    <script charset="utf-8" src="/js1743475952730/chunk-17ff7542.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-747287e5.9009fee8.css">
    <script charset="utf-8" src="/js1743475952730/chunk-747287e5.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-bb17762c.89cc2aa3.css">
    <script charset="utf-8" src="/js1743475952730/chunk-bb17762c.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-27780c3e.ddc32929.css">
    <script charset="utf-8" src="/js1743475952730/chunk-27780c3e.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="icon" href="{{ asset('static/img/logo2.png') }}">

</head>
<style>
    /* Base pagination styling */
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding-left: 0;
        margin: 20px 0;
        gap: 6px;
    }

    /* Page items */
    .page-item {
        display: inline-block;
    }

    /* Page links */
    .page-link {
        display: block;
        padding: 8px 14px;
        color: rgb(25 140 82 / 11%);
        /* Highlight color */
        background-color: #f9f9f9;
        border: 1px solid rgb(25 140 82 / 11%);
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Hover effect */
    .page-link:hover {
        background-color: rgb(25 140 82 / 11%);
        color: white;
    }

    /* Active page */
    .page-item.active .page-link {
        background-color: rgb(25 140 82 / 11%);
        color: white;
        border-color: rgb(25 140 82 / 11%);
        font-weight: 600;
    }

    /* Disabled links */
    .page-item.disabled .page-link {
        color: #aaa;
        background-color: #eee;
        border-color: #ddd;
        cursor: not-allowed;
        pointer-events: none;
    }

    /* Optional: Smooth animation on hover */
    .page-link {
        transition: all 0.2s ease-in-out;
    }

    .page-link {
        background-color: #222;
        color: rgb(25 140 82 / 11%);
        border: 1px solid rgb(25 140 82 / 11%);
    }

    .page-link:hover,
    .page-item.active .page-link {
        background-color: rgb(25 140 82 / 11%);
        color: #fff;
    }
</style>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-4f616302="" class="page" style="">
            <div data-v-6e2d35de="" class="headers">
                <div data-v-4f616302="" data-v-6e2d35de="">
                    <div data-v-b73557e2="" data-v-4f616302="" class="head" data-v-6e2d35de="">
                        <div data-v-b73557e2="" class="safe"></div>
                        <div data-v-b73557e2="" class="container flex">
                            <div data-v-b73557e2="" class="back">

                                <a href="{{ route('user.level-team') }}"> <img data-v-b73557e2=""
                                        src="{{ asset('') }}static/img/kumar.png" alt="">






                                </a>
                            </div>
                            <div data-v-b73557e2="" class="name tac"> Community List
                            </div>
                            <div data-v-b73557e2="" class="flex1"></div>
                            <div data-v-b73557e2="" class="head_right"></div>
                        </div>
                        <div data-v-b73557e2=""></div>
                    </div>
                    <div data-v-4f616302="" data-v-6e2d35de="" class="container">
                        <div data-v-0d336a05="" data-v-4f616302="" class="tab_list" data-v-6e2d35de="">
                            @for ($l = 1; $l <= 3; $l++)
                                <div id="van-tabs-1-0" role="tab"
                                class="van-tab van-tab--line van-tab--grow {{ Session::get('selected_level') == $l ? 'van-tab--active' : '' }}"
                                style="background: {{ Session::get('selected_level') == $l ? 'rgb(0, 188, 129)':'rgb(25 140 82 / 11%)'  }};
           border-radius: 5px; padding: 8px 15px; margin: 5px;">
                                <a href="{{ route('user.referral-team') }}?selected_level={{ $l }}"
                                    style="color: {{ Session::get('selected_level') == $l ? '#000' : '#fff' }};
              font-weight: bold; text-decoration: none;">
                                    <span class="van-tab__text">
                                        Level {{ $l }}
                                    </span>
                                </a>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>




        <div data-v-6e2d35de="" id="scroll" class="content-container">
            <div data-v-6e2d35de="" id="content" class="content-scroll">
                <div data-v-4f616302="" data-v-6e2d35de="" class="container" style="padding-top: 0.5rem;">


                    <?php if (is_array($direct_team) || is_object($direct_team)) { ?>

                        <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                        @foreach ($direct_team as $value)
                        <ul data-v-4f616302="" data-v-6e2d35de="" class="income-com">
                            <li data-v-4f616302="" data-v-6e2d35de="">
                                <div data-v-4f616302="" data-v-6e2d35de="" class="title">ID</div>
                                <div data-v-4f616302="" data-v-6e2d35de="" class="val">
                                    {{ $value->username }}
                                </div>
                            </li>

                            <li data-v-4f616302="" data-v-6e2d35de="">
                                <div data-v-4f616302="" data-v-6e2d35de="" class="title">Deposit</div>
                                <div data-v-4f616302="" data-v-6e2d35de="" class="val">
                                    {{ $value->investment->sum('amount') ? $value->investment->sum('amount') : 0 }}
                                    USDT
                                </div>
                            </li>
                            <li data-v-4f616302="" data-v-6e2d35de="">
                                <div data-v-4f616302="" data-v-6e2d35de="" class="title">Join Date</div>
                                <div data-v-4f616302="" data-v-6e2d35de="" class="val">
                                    {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}
                                </div>
                            </li>
                            <li data-v-4f616302="" data-v-6e2d35de="">
                                <div data-v-4f616302="" data-v-6e2d35de="" class="title">Status</div>
                                <div data-v-4f616302="" data-v-6e2d35de="" class="val">
                                    {{ $value->active_status }}
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    <?php } ?>

                    {{ $direct_team->withQueryString()->links() }}



                </div>
            </div>
        </div>





    </div>
    <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
        <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII="
                alt=""></div>
    </div>
    </div>
    <script src="/js1743475952730/core-js.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/vue.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/vant.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/crypto-js.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/axios.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/compressorjs.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/vendors~app.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script src="/js1743475952730/app.fe8857a9.1743475952730.js?v=1743475952730"></script>
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
    <div class="van-toast van-toast--middle van-toast--text" style="z-index: 2036; display: none;">
        <div class="van-toast__text">Incorrect password format</div>
    </div>
</body>

</html>
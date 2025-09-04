<html class="" style="font-size: 55.2px;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>

    <script>
        window.addEventListener("error", function(event) {
            if (event.message.indexOf("Unexpected token '<'") > -1) {
                location.reload();
            }
        });
        if ("standalone" in window.navigator && window.navigator.standalone) {
            var noddy,
                remotes = false;
            document.addEventListener(
                "click",
                function(event) {
                    noddy = event.target;
                    while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                        noddy = noddy.parentNode;
                    }
                    if (
                        "href" in noddy &&
                        noddy.href.indexOf("http") !== -1 &&
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
    <style>
        .pagination {
            display: flex;
            justify-content: flex-start;
            list-style: none;
            padding-left: 0;
            margin: 20px auto;
            gap: 6px;
            max-width: 480px;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            scrollbar-width: thin;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .pagination::-webkit-scrollbar {
            height: 6px;
            display: none;
        }

        .pagination::-webkit-scrollbar-thumb {
            background: #35604b;
            border-radius: 10px;
        }

        .pagination::-webkit-scrollbar-track {
            background: #35604b;
        }

        .page-item {
            display: inline-block;
            background: #35604b;

        }

        .page-link {
            display: block;
            padding: 8px 14px;
            color: #06140d;
            background-color: #35604b;
            border: 1px solid #35604b;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s, color 0.3s;
        }

        .page-link:hover {
            background-color: #06140d;
            color: white;
        }

        .page-item.active .page-link {
            background-color: #06140d;
            color: white;
            border-color: #35604b;
            font-weight: 600;
        }

        .page-item.disabled .page-link {
            color: #fff;
            background-color: #eee;
            border-color: #ddd;
            cursor: not-allowed;
            pointer-events: none;
        }

        .page-link {
            transition: all 0.2s ease-in-out;
        }

        .page-link {
            background-color: #113926;
            color: #fff;
            border: 1px solid #35604b;
        }

        .page-link:hover,
        .page-item.active .page-link {
            background-color: #06140d;
            color: #fff;
        }
    </style>


    <link href="{{asset('')}}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-6f896b4e.5bb66763.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60c8a75a.d6f6b692.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-a7d8f170.c87a4291.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-67912ed2.ae8d438d.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-00b1464f.674dbd13.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7f362702.6a53b834.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-05e98ee6.bea82fa2.css">
    <link rel="icon" href="{{ asset('2.png') }}">

</head>

<body class="w856">
    <div id="app" class="applang">
        <div data-v-73b46d99="" class="home">
            <div data-v-6e2d35de="" data-v-73b46d99="" class="page">
                <div data-v-6e2d35de="" class="headers">
                    <div data-v-b73557e2="" data-v-73b46d99="" class="head head_isModule" data-v-6e2d35de="">
                        <div data-v-b73557e2="" class="safe"></div>
                        <div data-v-b73557e2="" class="container flex">
                            <div data-v-b73557e2="" class="back"><a href="{{route('user.profile')}}"><img data-v-b73557e2=""
                                        src="{{ asset('') }}static/img/eroo.png"
                                        alt=""></a></div>
                            <div data-v-b73557e2="" class="name tac"> My Withdraw </div>
                            <div data-v-b73557e2="" class="flex1"></div>

                            <div data-v-b73557e2="" class="head_right"></div>
                        </div>
                        <div data-v-b73557e2="">

                        </div>
                    </div>
                </div>
                <div data-v-6e2d35de="" id="scroll" class="content-container">
                    <div data-v-6e2d35de="" id="content" class="content-scroll">
                        <div data-v-73b46d99="" data-v-6e2d35de="" class="container">
                            <div id="dateFilterPopup" style="display:none; background: #06140d; padding: 20px; border-radius: 12px; position: fixed; top: 20%; left: 50%; transform: translateX(-50%); width: 90%; max-width: 400px; z-index: 999; box-shadow: rgb(0 0 0) 0px 10px 25px;">
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                                    <h3 style="margin: 0; font-size: 18px; font-weight: bold;color:#fff">Select Date Range</h3>
                                    <button onclick="document.getElementById('dateFilterPopup').style.display='none'" style="border: none; background: transparent; font-size: 20px; cursor: pointer;color:#fff">&times;</button>
                                </div>

                                <form method="GET" action="{{ route('user.Withdraw-History') }}">
                                    <div style="margin-bottom: 15px;">
                                        <label style="display:block; font-size: 14px; margin-bottom: 5px;color:#fff">Start Date</label>
                                        <input type="date" name="start_date" required style="width: 100%; padding: 10px; border: 1px solid #403d3d; border-radius: 6px;background-color: #06140d;color:#929292">
                                    </div>

                                    <div style="margin-bottom: 15px;">
                                        <label style="display:block; font-size: 14px; margin-bottom: 5px;color:#fff">End Date</label>
                                        <input type="date" name="end_date" required style="width: 100%; padding: 10px; border: 1px solid #403d3d; border-radius: 6px;background-color: #06140d;color:#929292">
                                    </div>

                                    <div style="display: flex; justify-content: flex-end; gap: 10px;">
                                        <button type="submit" style="padding: 8px 16px; border: none; border-radius: 5px; background-color: #185c28ff; color: white; font-weight: bold; cursor: pointer;">Apply</button>
                                    </div>
                                </form>
                            </div>

                            <ul data-v-73b46d99="" data-v-6e2d35de="" class="setList">
                                <li data-v-73b46d99="" data-v-6e2d35de="" id="openPopupBtn"> All <img data-v-73b46d99=""
                                        data-v-6e2d35de=""
                                        src="{{ asset('') }}static/img/bb.png"
                                        alt="">

                                </li>
                                <li id="openDateFilter" data-v-73b46d99="" data-v-6e2d35de=""><span data-v-73b46d99=""
                                        data-v-6e2d35de="">time</span><img data-v-73b46d99="" data-v-6e2d35de=""
                                        src="{{ asset('') }}static/img/bb.png"
                                        alt=""></li>
                            </ul>

                            <div data-v-73b46d99="" class="van-pull-refresh" data-v-6e2d35de="">
                                <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                    <div class="van-pull-refresh__head" style="height: 100px;"></div>
                                    <div data-v-73b46d99="" role="feed" class="van-list">
                                        <ul data-v-8b8e62ac="" data-v-73b46d99="" class="list">



                                            <?php if (is_array($withdraw_report) || is_object($withdraw_report)) { ?>

                                                <?php
                                                date_default_timezone_set('UTC');
                                                $cnt = 0; ?>

                                                <?php if (count($withdraw_report) > 0) { ?>

                                                    @foreach($withdraw_report as $value)


                                                    <li data-v-8b8e62ac="">



                                                        <div data-v-8b8e62ac="" class="flex">
                                                            <div data-v-8b8e62ac="" class="title">Withdrawal</div>
                                                            <div data-v-8b8e62ac="" class="amount">{{$value->amount}} USDT</div>
                                                        </div>
                                                        <div data-v-8b8e62ac="" class="flex">
                                                            <div data-v-8b8e62ac="" class="time">{{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}</div>
                                                            <div data-v-8b8e62ac="" class="str"><span data-v-8b8e62ac=""
                                                                    class="s1"></span>
                                                                <?= ($value->status == "Active") ? 'completed' : $value->status ?> </div>
                                                        </div>




                                                    </li>

                                                    @endforeach

                                                <?php } else { ?>
                                                    <li>
                                                        <div class="van-list__finished-text">No Data</div>
                                                    </li>
                                                <?php } ?>
                                            <?php } ?>

                                        </ul>
                                        {{ $withdraw_report->withQueryString()->links() }}

                                        <div class="van-list__placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-554f6835="" data-v-73b46d99="" data-v-6e2d35de="">
                            <!-- Overlay -->
                            <div id="popupOverlay" class="van-overlay" style="z-index: 2004; display: none;"></div>

                            <!-- Popup Box -->
                            <div id="popupContainer" data-v-554f6835="" class="van-popup van-popup--round van-popup--bottom"
                                style="background: red; z-index: 2005; display: none;">
                                <div data-v-554f6835="" class="popup_box">
                                    <div data-v-554f6835="" class="scroll">
                                        <div data-v-554f6835="" class="ul">
                                            <div data-v-554f6835="">
                                                <div data-v-554f6835="" class="item"> <a href="{{route('user.roi-bonus')}}">Income<a></div>
                                            </div>


                                            <div data-v-554f6835="">
                                                <div data-v-554f6835="" class="item"> <a href="{{route('user.DepositHistory')}}">Deposit</a></div>
                                            </div>
                                            <div data-v-554f6835="">
                                                <div data-v-554f6835="" class="item"> <a href="{{route('user.Withdraw-History')}}">Withdrawal</a></div>
                                            </div>


                                        </div>
                                    </div>
                                    <div data-v-554f6835="" class="esc" id="closePopupBtn" style="color:white; background: #06140d;    ">Cancel</div>
                                </div>
                            </div>
                        </div>
                        <div class="van-overlay" style="z-index: 2006; display: none;"></div>
                        <div data-v-73b46d99="" class="van-popup van-popup--round van-popup--bottom"
                            style="z-index: 2007; display: none;">
                            <div data-v-73b46d99="" class="van-picker van-datetime-picker">
                                <div class="van-picker__toolbar"><button type="button"
                                        class="van-picker__cancel">Cancel</button><button type="button"
                                        class="van-picker__confirm">Confirm</button></div>

                                <div class="van-picker__columns" style="height: 264px;">
                                    <div class="van-picker-column">
                                        <ul class="van-picker-column__wrapper"
                                            style="transform: translate3d(0px, 66px, 0px); transition-duration: 0ms; transition-property: none;">
                                            <li role="button" tabindex="0" class="van-picker-column__item"
                                                style="height: 44px;">
                                                <div class="van-ellipsis">2024</div>
                                            </li>
                                            <li role="button" tabindex="0"
                                                class="van-picker-column__item van-picker-column__item--selected"
                                                style="height: 44px;">
                                                <div class="van-ellipsis">2025</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="van-picker-column">
                                        <ul class="van-picker-column__wrapper"
                                            style="transform: translate3d(0px, -22px, 0px); transition-duration: 0ms; transition-property: none;">
                                            <li role="button" tabindex="0" class="van-picker-column__item"
                                                style="height: 44px;">
                                                <div class="van-ellipsis">01</div>
                                            </li>
                                            <li role="button" tabindex="0" class="van-picker-column__item"
                                                style="height: 44px;">
                                                <div class="van-ellipsis">02</div>
                                            </li>
                                            <li role="button" tabindex="0" class="van-picker-column__item"
                                                style="height: 44px;">
                                                <div class="van-ellipsis">03</div>
                                            </li>
                                            <li role="button" tabindex="0"
                                                class="van-picker-column__item van-picker-column__item--selected"
                                                style="height: 44px;">
                                                <div class="van-ellipsis">04</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="van-picker__mask" style="background-size: 100% 110px;"></div>
                                    <div class="van-hairline-unset--top-bottom van-picker__frame" style="height: 44px;">
                                    </div>
                                </div>

                            </div>
                        </div>
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

    <script>
        document.getElementById('openDateFilter').onclick = function() {
            document.getElementById('dateFilterPopup').style.display = 'block';
        };
    </script>
    <script>
        const popup = document.getElementById('dateFilterPopup');
        document.getElementById('openDateFilter').onclick = () => {
            popup.style.display = 'block';
            popup.style.opacity = 0;
            setTimeout(() => {
                popup.style.transition = 'opacity 0.3s';
                popup.style.opacity = 1;
            }, 10);
        };
    </script>
    <script>
        window.onload = function() {
            document.addEventListener("touchstart", function(event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            });
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
        document.getElementById('openPopupBtn').addEventListener('click', function() {
            document.getElementById('popupContainer').style.display = 'block';
        });

        document.getElementById('closePopupBtn').addEventListener('click', function() {
            document.getElementById('popupContainer').style.display = 'none';
        });
    </script>

    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
        </i>
        <div class="van-toast__text">Login successful</div>
    </div>

</body>

</html>
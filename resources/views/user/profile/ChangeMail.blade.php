<html class="pc" style="font-size: 50px;">

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
    <link href="/static/css/app.6328f701.css" rel="preload" as="style">
    <link href="/static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="/static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="/static/css/app.6328f701.css" rel="stylesheet">
    <script charset="utf-8" src="/js1743475952730/echarts.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <script charset="utf-8" src="/js1743475952730/chunk-0119f9da.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-bb17762c.89cc2aa3.css">
    <script charset="utf-8" src="/js1743475952730/chunk-bb17762c.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1743475952730/chunk-5576a184.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-60c8a75a.d6f6b692.css">
    <script charset="utf-8" src="/js1743475952730/chunk-60c8a75a.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-a7d8f170.c87a4291.css">
    <script charset="utf-8" src="/js1743475952730/chunk-a7d8f170.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-00b1464f.674dbd13.css">
    <script charset="utf-8" src="/js1743475952730/chunk-00b1464f.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-67912ed2.ae8d438d.css">
    <script charset="utf-8" src="/js1743475952730/chunk-67912ed2.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-27780c3e.ddc32929.css">
    <script charset="utf-8" src="/js1743475952730/chunk-27780c3e.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-7f362702.6a53b834.css">
    <script charset="utf-8" src="/js1743475952730/chunk-7f362702.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-75ff273e.12bb350e.css">
    <script charset="utf-8" src="/js1743475952730/chunk-75ff273e.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-747287e5.9009fee8.css">
    <script charset="utf-8" src="/js1743475952730/chunk-747287e5.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-55778048.d9711f02.css">
    <script charset="utf-8" src="/js1743475952730/chunk-55778048.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/chunk-17ff7542.34892cae.css">
    <script charset="utf-8" src="/js1743475952730/chunk-17ff7542.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="icon" href="{{ asset('static/img/logo2.png') }}">

</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-39479e50="" class="page">
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-39479e50="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex">
                        <div data-v-b73557e2="" class="back"><a href="{{ route('user.profile') }}"><img
                                    data-v-b73557e2="" src="{{ asset('') }}static/img/eroo.png" alt="">
                            </a></div>
                        
                        
                        
                        <div data-v-b73557e2="" class="name tac"> @lang('Change Email') </div>
                        
                        
                        
                        <div data-v-b73557e2="" class="flex1"></div>
                        
                        
                        
                        
                        
                        <div data-v-b73557e2="" class="head_right"></div>
                    </div>
                    <div data-v-b73557e2="">
                        
                    </div>
                </div>
            </div>
            <form method="post" action="{{ route('user.changeEmailAction') }}">

                {{ csrf_field() }}


                <div data-v-6e2d35de="" id="scroll" class="content-container">
                    <div data-v-6e2d35de="" id="content" class="content-scroll">
                        <div data-v-39479e50="" data-v-6e2d35de="" class="container">
                            <div data-v-39479e50="" data-v-6e2d35de="" class="item valMob">
                                <div data-v-39479e50="" data-v-6e2d35de="" class="cname" style="color:white;">
                                    @lang('User ID')</div>
                                <div data-v-39479e50="" data-v-6e2d35de="" class="val inp"><input data-v-39479e50=""
                                        data-v-6e2d35de="" value="{{ Auth::user()->username }}" maxlength="6"
                                        style="color:white;"></div>
                            </div>

                            <div data-v-39479e50="" data-v-6e2d35de="" class="item valMob">
                                <div data-v-39479e50="" data-v-6e2d35de="" class="cname" style="color:white;">
                                    @lang('Mailbox')</div>
                                <div data-v-39479e50="" data-v-6e2d35de="" class="val inp"><input data-v-39479e50=""
                                        data-v-6e2d35de="" type="email" name="email" readonly=""
                                        id="emailId" value="{{ Auth::user()->email }}" disabled="disabled"
                                        style="color:white;">
                                </div>
                            </div>
                            <div data-v-5745725e="" data-v-7daccefc="" class="item valMob">
                                <div data-v-5745725e="" data-v-7daccefc="" class="cname" msttexthash="314899"
                                    msthash="59" style="color:white;">Verification code</div>
                                <div data-v-5745725e="" data-v-7daccefc="" class="inp val flex">
                                    <div data-v-5745725e="" data-v-7daccefc="" class="flex1">
                                        <input data-v-5745725e="" data-v-7daccefc="" type="text"
                                            name="first_code" placeholder="Email Verification code"
                                            style="color:white;">
                                    </div>
                                    <div data-v-5745725e="" data-v-7daccefc="" class="code-btn sendCode"
                                        msttexthash="43927" msthash="61"> Send </div>
                                    <div data-v-5745725e="" data-v-7daccefc="" class="resend-btn" _msthidden="1"
                                        style="display: none;">
                                        <div data-v-5745725e="" class="van-count-down" data-v-7daccefc=""
                                            msthidden="1">
                                            <span data-v-5745725e="" msttexthash="16328" msthidden="1"
                                                msthash="62">0
                                                <var data-v-5745725e="">s</var></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="item valMob">
                                <div class="cname" style="color:white;">@lang('New Email')</div>
                                <div class="val inp">
                                    <input type="email" name="newEmail" id="newEmailId"
                                        placeholder="Enter your new email" style="color:white;">
                                </div>
                            </div>
                            </br>
                            <!-- NEW EMAIL VERIFICATION -->
                            <div class="item valMob">
                                <div class="cname" style="color:white;">Verification code</div>
                                <div class="inp val flex">
                                    <div class="flex1">
                                        <input type="text" name="second_code"
                                            placeholder="Email Verification code" style="color:white;">
                                    </div>
                                    <div class="code-btn-new sendCode">Send</div>
                                    <div class="resend-btn-new" style="display: none;"></div>
                                </div>
                            </div>
                            <div data-v-39479e50="" data-v-6e2d35de="" class="err" style="color: red;"> </div>
                            <div data-v-39479e50="" data-v-6e2d35de="" class="go">
                                <div data-v-d8bb9fe2="" data-v-39479e50="" data-v-6e2d35de=""
                                    style="height: 1.4rem;">
                                    <div data-v-d8bb9fe2="" class="big_btn_box">
                                        <div data-v-d8bb9fe2="" class="btn_box"><button data-v-d8bb9fe2="" class="btn" type="submit"   style=" color:black;   background: #00fefb;">@lang('Confirm')</button></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII="
                    alt=""></div>
        </div>
    </div>





    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>



    <script>
        $(document).ready(function() {
            // First Email Code
            $('.code-btn').click(function() {
                var emailId = $('#emailId').val();
                if (!emailId) {
                    iziToast.error({
                        message: 'Invalid Email!',
                        position: "topRight"
                    });
                    return false;
                }

                startTimer('.resend-btn'); // Use class-specific timer
                $('.code-btn').hide();
                $('.resend-btn').show();

                $.ajax({
                    type: "POST",
                    url: "{{ route('send_forgot') }}",
                    data: {
                        "emailId": emailId,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response) {
                            iziToast.success({
                                message: 'Email sent Successfully',
                                position: "topRight"
                            });
                        } else {
                            iziToast.error({
                                message: 'Error!',
                                position: "topRight"
                            });
                        }
                    }
                });
            });

            // New Email Code
            $('.code-btn-new').click(function() {
                var newEmail = $('#newEmailId').val();
                if (!newEmail) {
                    iziToast.error({
                        message: 'Invalid New Email!',
                        position: "topRight"
                    });
                    return false;
                }

                startTimer('.resend-btn-new');
                $('.code-btn-new').hide();
                $('.resend-btn-new').show();

                $.ajax({
                    type: "POST",
                    url: "{{ route('send_forgot') }}", // If different route, change here
                    data: {
                        "emailId": newEmail, // Same parameter name if backend supports it
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response) {
                            iziToast.success({
                                message: 'New Email sent Successfully',
                                position: "topRight"
                            });
                        } else {
                            iziToast.error({
                                message: 'Error sending to new email!',
                                position: "topRight"
                            });
                        }
                    }
                });
            });

            // Timer Function (Reusable)
            function startTimer(selector) {
                var resendButton = $(selector);
                var countdown = 60;
                resendButton.prop('disabled', true).text('Wait ' + countdown + 's');

                var timer = setInterval(function() {
                    countdown--;
                    resendButton.text('Wait ' + countdown + 's');
                    if (countdown <= 0) {
                        clearInterval(timer);
                        resendButton.prop('disabled', false).text('Resend Code');
                    }
                }, 1000);
            }

            // Optional Resend Clicks
            $('.resend-btn').click(function() {
                $('.code-btn').trigger('click');
            });

            $('.resend-btn-new').click(function() {
                $('.code-btn-new').trigger('click');
            });
        });
    </script>

</body>

</html>

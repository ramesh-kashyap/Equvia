<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>{{ siteName() }} - Register Successfully</title>
    <meta name="csrf-param" content="_csrf">

    <link type="image/png" href="{{ asset('') }}assets/c20a81c4/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}assets/c20a81c4/fonts/icomoon/style985d.css?v=1634350014" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/fonts/stylesheet11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/jquery-ui.min11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/selectric11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/jquery.mCustomScrollbar11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/ion.rangeSlider11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/ion.rangeSlider.skinSimple94b9.css?v=1700299396"
        rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/slick11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/style7d51.css?v=1700506980" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/responsived706.css?v=1701345157" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/alert9b0b.css?v=1627541768" rel="stylesheet">
</head>

<body>
    <script src="{{ asset('') }}assets/b808595e/jquery.mincba3.js?v=1669716178"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery-3.3.1.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery-ui.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/detect.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/clipboard.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/slick.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery.selectric.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery.mCustomScrollbar11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/ion.rangeSlider.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/clock2eb3.js?v=1640874314"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/modal11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/script5b51.js?v=1699953866"></script>


    <section class="wrapper">
        <div class="loginPage" style="background-image: url({{ asset('') }}assets/c20a81c4/img/login-bg.jpeg);">
            <div class="loginForm">
                <form action="{{ route('login') }}" method="POST">



                    {{ csrf_field() }}

                    <div class="formBl">
                        <div class="logo invisLink">
                            <a href="{{ asset('') }}"></a>
                            <img src="{{ asset('') }}assets/c20a81c4/img/logo.png" alt="">
                        </div>
                        <span class="title">Register Successfully</span>
                        <span class="sub-title">In case you have 2-FA security enabled, please, use Google Authenticator
                            code instead of password.</span>
                        <div class="inputList">
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                            <div class="inputLine field-loginform-username required">
                                @if(session()->has('messages'))
                                <?php
                                $user_details=session()->get('messages')
                            ?>



                                <h4 style="color: ##000">Congratulations! Your Account has been successfully
                                    Created.</h4>
                                <br>

                                <h4 style="color: ##000">Dear <span class="main-color"
                                        style="color: #ffc70d;font-weight: 700;">{{$user_details->name }}</span>,
                                </h4>
                                <br>
                                <h4 style="color: ##000"> You have been successfully registered. <br> Your
                                    user id is <span class="main-color"
                                        style="    color: #1885c1;font-weight: 700;">{{$user_details->username  }}</span>
                                    Password is: <span class="main-color"
                                        style="color: #1885c1;font-weight: 700;">
                                        {{$user_details->PSR  }}</span> and Transaction Password is: <span
                                        class="main-color" style="color: #1885c1;font-weight: 700;">
                                        {{$user_details->TPSR  }}</span>
                                    please check your mail for more details.</h4>

                                @endif
                            


                            </div>
                            
                        </div>
                        <div class="form-group field-check2">
                            <input type="hidden" id="check2" class="form-control" name="LoginForm[check]"
                                value="">
                        </div> <a class="btn btnBlue" style="margin-top:-5px; margin-bottom:30px"
                            href="{{route('login')}}">Login</a>
                </form>
                <div class="links">
                    <a href="{{ route('forgot-password') }}" class="link">Forgot your password?</a>
                    <a href="{{ route('register') }}" class="link">Sign up</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="modalsScroll">
        <div class="modals table">
            <div class="middle tCell">
                <span class="closeModal">
                    <span></span>
                    <span></span>
                </span>
                <div class="blockMod" id="modal_error">
                    <div class="in">
                        <div class="modalsContent">
                            <div class="grayBl">
                                <span class="iconCircle icon-plus"></span>
                                <span class="title">Error</span>
                                <div class="modalSend">
                                    <ul class="txt" id="error-message" style="text-align: center;"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlayModal"></div>
    </div>

    <script>
        function show_error() {
            $(document).find('.error-summary ul').each(function() {
                if (!$(this).is(':empty')) {
                    error = $(this).html();
                    $(this).html('');
                    $('#error-message').html(error);
                    modalEventOpen('modal_error');
                }
            })
        }


        $(document).on("ajaxComplete", function() {
            show_error();
        });
        show_error();
    </script>


    <script src="{{ asset('') }}assets/9d244e36/yii.js?v=1669716178"></script>
    <script src="{{ asset('') }}assets/9d244e36/yii.captcha.js?v=1669716178"></script>
    <script src="{{ asset('') }}assets/9d244e36/yii.activeForm.js?v=1669716178"></script>
    <script>
        jQuery(function($) {
            jQuery('#loginform-code-image').yiiCaptcha({
                "refreshUrl": "\/site\/captcha\/?refresh=1",
                "hashKey": "yiiCaptcha\/site\/captcha"
            });
            jQuery('#login-form').yiiActiveForm([{
                "id": "loginform-username",
                "name": "username",
                "container": ".field-loginform-username",
                "input": "#loginform-username",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "loginform-password",
                "name": "password",
                "container": ".field-loginform-password",
                "input": "#loginform-password",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "loginform-code",
                "name": "code",
                "container": ".field-loginform-code",
                "input": "#loginform-code",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "agreeReg",
                "name": "rememberMe",
                "container": ".field-agreeReg",
                "input": "#agreeReg",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }], []);
        });
    </script>
</body>

</html>

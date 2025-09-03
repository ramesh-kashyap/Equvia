


<!DOCTYPE html>
<html>
<head>
    <!-- Google Tag Manager -->
    

    <meta charset="utf-8">
    <title>Password reset | {{siteName()}}</title>
	<base href="{{asset('')}}" />
     <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-iconf9e3.png?v=1.1">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32f9e3.png?v=1.1">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16f9e3.png?v=1.1">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#0f0e11fff">

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

    <link rel="stylesheet" href="{{asset('')}}assets/css/libs.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/app54f9.css?v=1.009995">
    <link rel="stylesheet" href="{{asset('')}}assets/css/customb361.css?v=1.000099999">
    
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->

</head>
<body>


<div class="copy-success">
    <svg>
        <use xlink:href="/assets/img/sprite.svg#check"></use>
    </svg>
</div>
<div class="wrapper">
    <section class="sign">
        <div class="container"> <a class="sign-logo" href="/"><img style="   width: 200px;" src="/assets/img/logo.png?v=1.0" alt="logo"/></a>
            <div class="row">
                <div class="col-lg-6 offset-lg-3"><form method="post" action="{{route('verifyCode')}}" name="login_frm">
                    
                      {{ csrf_field() }}
                      <div class="sign-box"><div class="sign-img"> <img src="/assets/img/contacts-form-img.png" alt="contacts-form-img"/></div><div class="sign-title" style="    font-size: 20px;">Confirmation<p>Welcome to {{siteName()}}</p></div><div class="contacts-form__inputs"><label class="contacts-form__input contacts-form__input_icon"><input type="text" name="code" value="" placeholder="Recovery Code"><svg><use xlink:href="/assets/img/sprite.svg#user"></use></svg></label>
                        <input type="hidden"  value="{{$userID}}" class="form-control" name="userID" >
                        
                        </div><button name="account/reset_pass_frm_btn" type="submit" class="main-btn main-btn_orange main-btn_m">Submit</button></div></form></div>
</div>
</div>
<div class="sign-footer">Copyright © 2022 etriton.co All rights reserved</div>
</section>
</div>
@include('partials.notify')
    <script src="{{asset('')}}assets/js/libsb883.js?v=1.01"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="{{asset('')}}assets/js/app437f.js?v=1.000991"></script>


</body>
</html>

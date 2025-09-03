<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
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
        input[type="radio"] {
        appearance: none;
        -webkit-appearance: none;
        background-color: #222;
        border: 2px solid #666;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        margin-right: 8px;
        cursor: pointer;
        transition: 0.2s ease-in-out;
    }

    input[type="radio"]:checked {
        border-color: #98c80d;
        background-color: #98c80d;
    }

    input[type="radio"]:checked::after {
        content: "✔";
        color: white;
        font-size: 10px;
        position: absolute;
        top: 1px;
        left: 4px;
    }

    label {
        font-size: 16px;
        cursor: pointer;
    }
    </style>

    <link href="{{asset('')}}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{asset('')}}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{asset('')}}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60c8a75a.d6f6b692.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-a7d8f170.c87a4291.css">
    <link rel="icon"  href="{{ asset('static/img/logo2.png') }}">


</head>


<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-76ac7338="" class="home">
            <div data-v-6e2d35de="" data-v-76ac7338="" class="page">
                <div data-v-6e2d35de="" class="headers">
                    <div data-v-b73557e2="" data-v-76ac7338="" class="head" data-v-6e2d35de="">
                        <div data-v-b73557e2="" class="safe"></div>
                        <div data-v-b73557e2="" class="container flex">
                            <div data-v-b73557e2="" class="back"> <a href="{{route('user.profile')}}"><img data-v-b73557e2="" src="{{asset('')}}static/img/rony.png" alt=""></a></div><!----><!----><!---->
                            <div data-v-b73557e2="" class="name tac" style="color: white;"> @lang('Feedback') </div><!----><!----><!---->
                            <div data-v-b73557e2="" class="flex1"></div><!----><!----><!----><!----><!---->
                            <div data-v-b73557e2="" class="head_right"></div>
                        </div>
                        <div data-v-b73557e2=""><!----></div>`
                    </div>
                </div>


                <div data-v-6e2d35de="" id="scroll" class="content-container">
                    <form method="POST" action="{{route('user.SubmitTicket')}}" >
                        @csrf
                       
                        <div style=" color:white; padding:20px; border-radius:10px;">
                        <div style="border:1px solid #252222;padding:20px;border-radius:20px;">
                            <label style="display:block; padding:10px; border-bottom:1px solid #333;">
                                <input type="radio" name="category"  value="Software Function Problem" checked>
                                @lang('Software Function Problem')
                            </label>

                            <label style="display:block; padding:10px; border-bottom:1px solid #333;">
                                <input type="radio" name="category"  value="Complaints And Suggestions">
                                @lang('Complaints And Suggestions')
                            </label>

                            <label style="display:block; padding:10px; border-bottom:1px solid #333;">
                                <input type="radio" name="category"  value="Bug Report">
                                @lang(' Bug Report')
                            </label>

                            <label style="display:block; padding:10px;">
                                <input type="radio" name="category"  value="Other">
                                @lang(' Other')
                            </label>
                            </div>
                            <button type="submit" style="margin-top: 100%;width:100%; background: #a4e11f; color: black; padding: 10px 30px; border: none; border-radius: 8px;">
                            @lang(' Submit')
                            </button>
                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc="" src="" alt="aa"></div>
        </div>
    </div>

 
</body>

</html>
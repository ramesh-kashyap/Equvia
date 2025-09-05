<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>Forgot Password</title>
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
    <!-- <link href="{{ asset('') }}static/eed/js/app.5acd7986.js" rel="preload" as="script"> -->
    <link href="{{ asset('') }}static/eed/js/chunk-vendors.b893e1dd.js" rel="preload" as="script">
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="stylesheet">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5c64915e.135fdcf8.css">
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-5c64915e.c084ce21.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-18e03ad8.59f8f8a0.js"></script>
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-2d0d09bb.e2e1a111.js"></script>
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-2d0aec69.24f884e8.js"></script>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
</head>

<body datasqstyle="{&quot;top&quot;:0,&quot;position&quot;:&quot;static&quot;}"
    datasquuid="376203bd-baee-4dd8-8666-c64e25faa7ca" style="top: 40px; position: relative;"><svg
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        style="position: absolute; width: 0px; height: 0px; top: 40px;" aria-hidden="true" id="__SVG_SPRITE_NODE__"
        dataSqstyle="{&quot;top&quot;:null}" dataSquuid="376203bd-baee-4dd8-8666-c64e25faa7ca">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" id="svg-icon-address-book">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M18 3C19.6569 3 21 4.34315 21 6V18C21 19.6569 19.6569 21 18 21H7C5.34315 21 4 19.6569 4 18V17L4.00685 16.9032C4.05651 16.5371 4.3703 16.255 4.75 16.255C5.16421 16.255 5.5 16.5907 5.5 17.005V18C5.5 18.8284 6.17157 19.5 7 19.5H18C18.8284 19.5 19.5 18.8284 19.5 18V6C19.5 5.17157 18.8284 4.5 18 4.5H7C6.17157 4.5 5.5 5.17157 5.5 6V7.00496C5.5 7.41917 5.16421 7.75496 4.75 7.75496C4.33579 7.75496 4 7.41917 4 7.00496V6C4 4.34315 5.34315 3 7 3H18ZM13.2587 7.37443C14.9156 7.37443 16.2587 8.71757 16.2587 10.3744C16.2587 11.1989 15.9261 11.9457 15.3878 12.488C16.4697 13.1709 17.2008 14.3589 17.251 15.7209C17.2629 15.7708 17.2684 15.8225 17.2684 15.8756C17.2684 16.2898 16.9326 16.6256 16.5184 16.6256C16.1042 16.6256 15.7684 16.2898 15.7684 15.8756L15.7537 15.8708C15.7537 14.512 14.6697 13.4064 13.3192 13.3717L13.2587 13.3744L13.1936 13.3724L13.0894 13.3762C11.8396 13.4573 10.8402 14.4567 10.759 15.7065L10.7536 15.8695C10.7536 16.2837 10.4178 16.6195 10.0036 16.6195C9.58941 16.6195 9.25362 16.2837 9.25362 15.8695C9.25369 14.4435 10.0008 13.1914 11.1252 12.4835C10.5897 11.9421 10.2587 11.1969 10.2587 10.3744C10.2587 8.71757 11.6019 7.37443 13.2587 7.37443ZM6.25 13.5C6.66421 13.5 7 13.8358 7 14.25C7 14.6642 6.66421 15 6.25 15H3.75C3.33579 15 3 14.6642 3 14.25C3 13.8358 3.33579 13.5 3.75 13.5H6.25ZM6.25 11C6.66421 11 7 11.3358 7 11.75C7 12.1642 6.66421 12.5 6.25 12.5H3.75C3.33579 12.5 3 12.1642 3 11.75C3 11.3358 3.33579 11 3.75 11H6.25ZM13.2587 8.87443C12.4303 8.87443 11.7587 9.546 11.7587 10.3744C11.7587 11.184 12.4001 11.8438 13.2025 11.8734L13.2537 11.8708L13.3116 11.8714L13.4032 11.8676C14.1638 11.7949 14.7587 11.1541 14.7587 10.3744C14.7587 9.546 14.0871 8.87443 13.2587 8.87443ZM6.25 8.5C6.66421 8.5 7 8.83579 7 9.25C7 9.66421 6.66421 10 6.25 10H3.75C3.33579 10 3 9.66421 3 9.25C3 8.83579 3.33579 8.5 3.75 8.5H6.25Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" fill="none" id="svg-icon-android">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.5342 0.308289L13.4097 1.82077L13.4098 1.82077C15.1914 2.59825 16.4223 4.06824 16.6132 5.7912H4.54297C4.69188 4.06873 5.94328 2.59824 7.70347 1.82124L6.57901 0.308288C6.51699 0.220681 6.53604 0.0996156 6.62197 0.035287C6.70692 -0.0277131 6.83388 -0.0062358 6.89783 0.0987643L8.04329 1.67377C8.80692 1.37977 9.65504 1.23277 10.5461 1.23277C11.3995 1.23532 12.2461 1.38449 13.0489 1.67377L14.1944 0.0982886C14.2583 0.0142885 14.3853 -0.0277117 14.4702 0.0352885C14.5762 0.0772897 14.5762 0.203289 14.5342 0.308289ZM1 7.86988C1 7.15636 1.61568 6.56836 2.35737 6.56836V6.56884C3.121 6.56884 3.71521 7.15684 3.71521 7.87084V12.9333C3.71521 13.6478 3.121 14.2362 2.35737 14.2362C1.59373 14.2362 1 13.6478 1 12.9338V7.86988ZM17.375 7.87036C17.375 7.15636 17.9902 6.56836 18.7328 6.56836V6.56883C19.475 6.56883 20.0692 7.15683 20.0902 7.87083V12.9333C20.0902 13.6477 19.475 14.2362 18.7328 14.2362C17.9692 14.2362 17.375 13.6477 17.375 12.9337V7.87036ZM4.54297 6.61082V15.8747C4.54297 16.4207 5.00974 16.8827 5.60347 16.8827H6.81288V19.6977C6.81288 20.4121 7.40661 21.0001 8.17025 21.0001C8.91288 21.0001 9.52809 20.4121 9.52809 19.6977V16.8827H11.6491V19.6977C11.6491 20.4121 12.2433 21.0001 13.0069 21.0001C13.7486 21.0001 14.3643 20.4121 14.3643 19.6977V16.8827H15.5732C16.1674 16.8827 16.6342 16.4417 16.6342 15.8747V6.61035H4.54298L4.54297 6.61082ZM7.99948 4.21508C7.61766 4.21508 7.3418 3.94208 7.3418 3.58508C7.3418 3.2276 7.63866 2.95508 7.99948 2.95508C8.3813 2.95508 8.65669 3.2276 8.65669 3.58508C8.65669 3.94208 8.35982 4.21508 7.99948 4.21508ZM12.5176 3.58508C12.5176 3.94208 12.7934 4.21508 13.1753 4.21508C13.5361 4.21508 13.8329 3.94208 13.8329 3.58508C13.8329 3.2276 13.5571 2.95508 13.1753 2.95508C12.8149 2.95508 12.5176 3.2276 12.5176 3.58508Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" fill="none" id="svg-icon-apple">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.7301 0C14.8653 1.23047 14.3705 2.46422 13.6375 3.35344C12.9038 4.24003 11.7009 4.93106 10.5222 4.83919C10.3628 3.633 10.9573 2.37694 11.6372 1.59009C12.3945 0.7035 13.6742 0.0433125 14.7301 0ZM18.5329 7.16985C18.3126 7.30664 16.2564 8.58383 16.2819 11.1585C16.3088 14.2662 18.9494 15.345 19.0939 15.404C19.0971 15.4053 19.0991 15.4061 19.0998 15.4064C19.0986 15.41 19.0965 15.4168 19.0935 15.4266C19.0337 15.619 18.6091 16.9849 17.6455 18.393C16.7695 19.6727 15.8625 20.9458 14.4319 20.9728C13.744 20.9856 13.2842 20.7867 12.8064 20.5799C12.3064 20.3636 11.7866 20.1387 10.9649 20.1387C10.1035 20.1387 9.55925 20.3705 9.03489 20.5939C8.58089 20.7873 8.14183 20.9743 7.52486 20.999C6.14411 21.0502 5.09214 19.6176 4.21014 18.3418C2.4048 15.7352 1.02733 10.9748 2.87926 7.76115C3.7967 6.16449 5.44061 5.15452 7.22298 5.12827C7.99214 5.11413 8.73703 5.40974 9.38874 5.66837C9.88638 5.86585 10.3297 6.04177 10.688 6.04177C11.0106 6.04177 11.4427 5.87141 11.9465 5.67281C12.739 5.36034 13.709 4.97795 14.7088 5.07906C15.3933 5.10793 17.3148 5.35468 18.5485 7.16002C18.5454 7.16206 18.5401 7.16533 18.5329 7.16985Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16" fill="none" id="svg-icon-arrow-back">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M3.48688e-05 8L1.41214 6.58789L7.35965 0.640381L8.77372 2.05444L3.82816 7H18.6783V9H3.82425L8.77176 13.9475L7.35962 15.3597L0 8.00003L3.48688e-05 8Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" fill="none" id="svg-icon-assets">
            <path
                d="M1.8 5C1.8 3.23269 3.23269 1.8 5 1.8H17C18.7673 1.8 20.2 3.23269 20.2 5V13C20.2 14.7673 18.7673 16.2 17 16.2H5C3.23269 16.2 1.8 14.7673 1.8 13V5Z"
                fill="white" stroke="currentColor" stroke-width="1.6"></path>
            <path
                d="M1.8 8C1.8 6.23269 3.23269 4.8 5 4.8H17C18.7673 4.8 20.2 6.23269 20.2 8V17C20.2 18.7673 18.7673 20.2 17 20.2H5C3.23269 20.2 1.8 18.7673 1.8 17V8Z"
                fill="white" stroke="currentColor" stroke-width="1.6"></path>
            <circle cx="15" cy="12.5" r="2.2" stroke="currentColor" stroke-width="1.6"></circle>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-bell">
            <mask id="svg-icon-bell_mask0_1_46" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                width="20" height="20">
                <rect width="20" height="20" fill="#D9D9D9"></rect>
            </mask>
            <g mask="url(#svg-icon-bell_mask0_1_46)">
                <path d="M8 2C8 0.895431 8.89543 0 10 0C11.1046 0 12 0.895431 12 2V3H8V2Z" fill="#18191C"></path>
                <path
                    d="M5 16.1041V16.1041C5 17.761 6.34315 19.1041 8 19.1041H12C13.6569 19.1041 15 17.761 15 16.1041V16.1041"
                    stroke="#1772F8" stroke-width="1.8"></path>
                <mask id="svg-icon-bell_path-4-inside-1_1_46" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 2C5.58172 2 2 5.58172 2 10V13C0.895431 13 0 13.8954 0 15C0 16.1046 0.895431 17 2 17H18C19.1046 17 20 16.1046 20 15C20 13.8954 19.1046 13 18 13V10C18 5.58172 14.4183 2 10 2Z">
                    </path>
                </mask>
                <path
                    d="M2 13V14.8H3.8V13H2ZM18 13H16.2V14.8H18V13ZM3.8 10C3.8 6.57583 6.57583 3.8 10 3.8V0.2C4.58761 0.2 0.2 4.58761 0.2 10H3.8ZM3.8 13V10H0.2V13H3.8ZM1.8 15C1.8 14.8895 1.88954 14.8 2 14.8V11.2C-0.098682 11.2 -1.8 12.9013 -1.8 15H1.8ZM2 15.2C1.88954 15.2 1.8 15.1105 1.8 15H-1.8C-1.8 17.0987 -0.098681 18.8 2 18.8V15.2ZM18 15.2H2V18.8H18V15.2ZM18.2 15C18.2 15.1105 18.1105 15.2 18 15.2V18.8C20.0987 18.8 21.8 17.0987 21.8 15H18.2ZM18 14.8C18.1105 14.8 18.2 14.8895 18.2 15H21.8C21.8 12.9013 20.0987 11.2 18 11.2V14.8ZM16.2 10V13H19.8V10H16.2ZM10 3.8C13.4242 3.8 16.2 6.57583 16.2 10H19.8C19.8 4.58761 15.4124 0.2 10 0.2V3.8Z"
                    fill="#18191C" mask="url(#svg-icon-bell_path-4-inside-1_1_46)"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 6" fill="none" id="svg-icon-caret-down">
            <path
                d="M8.29197 0H1.70803C1.02976 0 0.659238 0.791085 1.09346 1.31215L4.38542 5.26251C4.70526 5.64631 5.29474 5.64631 5.61458 5.26251L8.90654 1.31215C9.34076 0.791086 8.97024 0 8.29197 0Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-checked-top">
            <path d="M12 0H0L20 20V8C20 3.58172 16.4183 0 12 0Z" fill="#1772F8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16.5358 3.52463C16.2429 3.23174 15.7681 3.23174 15.4752 3.52463L12.1157 6.8841L10.525 5.29336C10.2321 5.00047 9.75719 5.00047 9.4643 5.29336C9.17141 5.58626 9.17141 6.06113 9.4643 6.35402L11.5856 8.47534C11.8785 8.76824 12.3534 8.76824 12.6463 8.47534C12.6518 8.46985 12.6572 8.46429 12.6625 8.45867L16.5358 4.58529C16.8287 4.2924 16.8287 3.81753 16.5358 3.52463Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-clear-cache">
            <path d="M13 23V17" stroke="#1772F8" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M15.2 6H17C17 3.79086 15.2091 2 13 2C10.7909 2 9 3.79086 9 6H10.8C10.8 4.78497 11.785 3.8 13 3.8C14.215 3.8 15.2 4.78497 15.2 6Z"
                fill="currentColor"></path>
            <path
                d="M2.9 10C2.9 8.28792 4.28792 6.9 6 6.9H20C21.7121 6.9 23.1 8.28792 23.1 10V11C23.1 11.0552 23.0552 11.1 23 11.1H3C2.94477 11.1 2.9 11.0552 2.9 11V10Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.60007 11L2.95697 19.2155C2.46193 21.6907 4.3551 24 6.87929 24H19.1209C21.645 24 23.5382 21.6907 23.0432 19.2155L21.4001 11H19.5644L21.2781 19.5685C21.5504 20.9299 20.5092 22.2 19.1209 22.2H6.87929C5.49099 22.2 4.44974 20.9299 4.72201 19.5685L6.43572 11H4.60007Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-close">
            <path d="M2 2L18 18" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
            <path d="M18 2L2 18" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 40" fill="none" id="svg-icon-colorful-community">
            <rect width="52" height="40" rx="20" fill="url(#svg-icon-colorful-community_paint0_linear_105_162)"></rect>
            <mask id="svg-icon-colorful-community_mask0_105_162" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                x="0" y="0" width="52" height="40">
                <rect width="52" height="40" rx="20" fill="#E01717"></rect>
            </mask>
            <g mask="url(#svg-icon-colorful-community_mask0_105_162)">
                <path d="M47 1H62L29 46H14L47 1Z" fill="url(#svg-icon-colorful-community_paint1_linear_105_162)"></path>
                <path d="M24 -9H33L0 36H-9L24 -9Z" fill="url(#svg-icon-colorful-community_paint2_linear_105_162)">
                </path>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19 25.1416V29.7641C19 31.2509 20.5646 32.2179 21.8944 31.553L25.1056 29.9474C25.6686 29.6659 26.3314 29.6659 26.8944 29.9474L30.1056 31.553C31.4354 32.2179 33 31.2509 33 29.7641V25.1416C31.1962 26.9099 28.7255 28.0002 26 28.0002C23.2745 28.0002 20.8038 26.9099 19 25.1416Z"
                fill="white" fill-opacity="0.8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M26 29C31.799 29 36.5 24.299 36.5 18.5C36.5 12.701 31.799 8 26 8C20.201 8 15.5 12.701 15.5 18.5C15.5 24.299 20.201 29 26 29ZM27.0623 17.4377L26.4777 15.5459C26.3325 15.0761 25.6675 15.0761 25.5223 15.5459L24.9377 17.4377H22.9781C22.4999 17.4377 22.2946 18.0447 22.6746 18.335L24.2812 19.5623L23.6807 21.5054C23.537 21.9705 24.0751 22.3459 24.4619 22.0504L26 20.8754L27.5381 22.0504C27.9249 22.3459 28.463 21.9705 28.3193 21.5054L27.7188 19.5623L29.3254 18.335C29.7054 18.0447 29.5001 17.4377 29.0219 17.4377H27.0623Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-colorful-community_paint0_linear_105_162" x1="4.5" y1="7" x2="47.5"
                    y2="32.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF9B77"></stop>
                    <stop offset="1" stop-color="#FF538F"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-community_paint1_linear_105_162" x1="51" y1="7.5" x2="27" y2="40"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-community_paint2_linear_105_162" x1="23.375" y1="-2.5"
                    x2="-1.37943" y2="26.8314" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-colorful-detail">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <rect x="6.6001" y="6.59961" width="13.8" height="15" fill="#1E86FF"></rect>
            <circle cx="18" cy="17.9998" r="4.2" fill="#10BB88"></circle>
            <rect x="16.3032" y="18" width="2.4" height="2.4" transform="rotate(-45 16.3032 18)" fill="white"></rect>
            <path d="M9.6001 9.59961H17.4001" stroke="white" stroke-width="2.4"></path>
            <path d="M9.6001 13.2002H14.4001" stroke="white" stroke-width="2.4"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 40" fill="none" id="svg-icon-colorful-order-list">
            <rect width="52" height="40" rx="20" fill="url(#svg-icon-colorful-order-list_paint0_linear_105_144)"></rect>
            <mask id="svg-icon-colorful-order-list_mask0_105_144" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                x="0" y="0" width="52" height="40">
                <rect width="52" height="40" rx="20" fill="#E01717"></rect>
            </mask>
            <g mask="url(#svg-icon-colorful-order-list_mask0_105_144)">
                <path d="M47 1H62L29 46H14L47 1Z" fill="url(#svg-icon-colorful-order-list_paint1_linear_105_144)">
                </path>
                <path d="M24 -9H33L0 36H-9L24 -9Z" fill="url(#svg-icon-colorful-order-list_paint2_linear_105_144)">
                </path>
            </g>
            <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd"
                d="M19.0295 12.5127C19.0101 12.6724 19.0002 12.835 19.0002 13V27C19.0002 28.4906 19.8155 29.7908 21.0245 30.4789L21.0231 30.4792C19.4227 30.9081 17.7777 29.9583 17.3489 28.3579L14.2766 16.8921C13.8478 15.2917 14.7975 13.6467 16.3979 13.2178L19.0295 12.5127Z"
                fill="white"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M23 9C20.7909 9 19 10.7909 19 13V27C19 29.2091 20.7909 31 23 31H34C36.2091 31 38 29.2091 38 27V13C38 10.7909 36.2091 9 34 9H23ZM33.9 28.8C34.3971 28.8 34.8 28.3971 34.8 27.9C34.8 27.4029 34.3971 27 33.9 27C33.4029 27 33 27.4029 33 27.9C33 28.3971 33.4029 28.8 33.9 28.8ZM22.1 16C22.1 15.5029 22.5029 15.1 23 15.1H28C28.4971 15.1 28.9 15.5029 28.9 16C28.9 16.4971 28.4971 16.9 28 16.9H23C22.5029 16.9 22.1 16.4971 22.1 16ZM23 21.1C22.5029 21.1 22.1 21.5029 22.1 22C22.1 22.4971 22.5029 22.9 23 22.9H32C32.4971 22.9 32.9 22.4971 32.9 22C32.9 21.5029 32.4971 21.1 32 21.1H23Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-colorful-order-list_paint0_linear_105_144" x1="4.5" y1="7" x2="47.5"
                    y2="32.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EF72EA"></stop>
                    <stop offset="1" stop-color="#9564FA"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-order-list_paint1_linear_105_144" x1="51" y1="7.5" x2="27" y2="40"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-order-list_paint2_linear_105_144" x1="23.375" y1="-2.5"
                    x2="-1.37943" y2="26.8314" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 40" fill="none"
            id="svg-icon-colorful-recharge-large">
            <rect width="52" height="40" rx="20" fill="url(#svg-icon-colorful-recharge-large_paint0_linear_657_403)">
            </rect>
            <mask id="svg-icon-colorful-recharge-large_mask0_657_403" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                x="0" y="0" width="52" height="40">
                <rect width="52" height="40" rx="20" fill="#E01717"></rect>
            </mask>
            <g mask="url(#svg-icon-colorful-recharge-large_mask0_657_403)">
                <path d="M47 1H62L29 46H14L47 1Z" fill="url(#svg-icon-colorful-recharge-large_paint1_linear_657_403)">
                </path>
                <path d="M24 -9H33L0 36H-9L24 -9Z" fill="url(#svg-icon-colorful-recharge-large_paint2_linear_657_403)">
                </path>
            </g>
            <path
                d="M14 14.397C14 12.7401 15.3431 11.397 17 11.397H35C36.6569 11.397 38 12.7401 38 14.397V16.397H14V14.397Z"
                fill="#9DCEFE"></path>
            <path opacity="0.9" fill-rule="evenodd" clip-rule="evenodd"
                d="M26 24.6154C30.5882 24.6154 34.3077 20.8959 34.3077 16.3077C34.3077 11.7195 30.5882 8 26 8C21.4118 8 17.6923 11.7195 17.6923 16.3077C17.6923 20.8959 21.4118 24.6154 26 24.6154ZM28.9244 12.1705H23.0488V13.589H25.2774V14.5281C23.5531 14.6036 22.2518 14.9442 22.2518 15.3529C22.2518 15.7616 23.5531 16.1021 25.2773 16.1776V19.1705H26.6958V16.1788C28.4333 16.1056 29.7482 15.7637 29.7482 15.3529C29.7482 14.9421 28.4334 14.6001 26.6958 14.5269V13.589H28.9244V12.1705ZM22.6619 15.2443C22.6619 14.9328 23.7812 14.6723 25.2774 14.6079V15.6739H26.6958V14.6067C28.2054 14.6692 29.3381 14.9309 29.3381 15.2443C29.3381 15.6042 27.8436 15.896 26 15.896C24.1565 15.896 22.6619 15.6042 22.6619 15.2443Z"
                fill="white"></path>
            <path
                d="M14 16.3076H38V28.9999C38 30.6568 36.6569 31.9999 35 31.9999H17C15.3431 31.9999 14 30.6568 14 28.9999V16.3076Z"
                fill="white"></path>
            <path
                d="M27.8461 24.1537C27.8461 22.1145 29.4992 20.4614 31.5384 20.4614H38V27.846H31.5384C29.4992 27.846 27.8461 26.1929 27.8461 24.1537Z"
                fill="#E4F6FF"></path>
            <defs>
                <linearGradient id="svg-icon-colorful-recharge-large_paint0_linear_657_403" x1="4.5" y1="7" x2="47.5"
                    y2="32.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#17B5F8"></stop>
                    <stop offset="1" stop-color="#0067FF"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-recharge-large_paint1_linear_657_403" x1="51" y1="7.5" x2="27"
                    y2="40" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-recharge-large_paint2_linear_657_403" x1="23.375" y1="-2.5"
                    x2="-1.37943" y2="26.8314" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-colorful-recharge">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M21.6157 12.3412C21.6157 15.7549 18.8484 18.5223 15.4347 18.5223C12.021 18.5223 9.25362 15.7549 9.25362 12.3412C9.25362 8.92751 12.021 6.16016 15.4347 6.16016C18.8484 6.16016 21.6157 8.92751 21.6157 12.3412ZM15.4344 9.53128L18.2441 12.341L15.4344 15.1507L12.6247 12.341L15.4344 9.53128Z"
                fill="#10BB88"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.32856 11.3748C9.27914 11.6896 9.25348 12.0123 9.25348 12.341C9.25348 14.0642 9.95859 15.6226 11.096 16.7436L10.3449 17.4541C10.2402 17.5386 10.1739 17.6023 10.1461 17.6451C10.1128 17.6963 10.0379 17.9346 10.0974 18.0947C10.157 18.2549 10.3511 18.337 10.4641 18.337C10.5621 18.337 10.659 18.3412 10.8148 18.2423C10.8708 18.2067 10.9732 18.1211 11.1221 17.9854L12.362 16.7859C12.4999 16.6816 12.6267 16.6135 12.7424 16.5818C12.8283 16.5583 13.3098 16.4617 13.7602 16.4808C14.2205 16.5004 14.6501 16.6363 14.7565 16.6776C14.8528 16.715 15.0728 16.7921 15.195 16.9026C15.3401 17.0338 15.3807 17.205 15.3807 17.3124C15.3807 17.4443 15.3188 17.5601 15.195 17.6598L11.4497 21.4482C11.2948 21.6134 11.1567 21.7185 11.0352 21.7635C10.9137 21.8085 10.6996 21.834 10.3927 21.84H6.16921V15.0129C6.15693 14.7847 6.15693 14.6238 6.16921 14.5303C6.2058 14.2518 6.29733 14.0608 6.3314 13.9962C6.37261 13.9181 6.5535 13.5631 6.81554 13.2383C6.9211 13.1075 7.19834 12.7791 7.68221 12.3863C7.8212 12.2734 8.07064 12.102 8.43052 11.8721L9.32856 11.3748Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-colorful-record">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6 8.80371H16.4188V10.3418H6V8.80371ZM6 18.46H16.4188V19.998H6V18.46ZM9.39375 11.9877H6V13.5257H9.39375V11.9877ZM7.19473 15.2238H12.2936V16.7619H7.19473V15.2238Z"
                fill="#10BB88"></path>
            <path
                d="M15 22.1996C19.3078 22.1996 22.8 18.7074 22.8 14.3996C22.8 10.0918 19.3078 6.59961 15 6.59961C10.6921 6.59961 7.19995 10.0918 7.19995 14.3996C7.19995 18.7074 10.6921 22.1996 15 22.1996Z"
                fill="#1E86FF"></path>
            <path
                d="M15.7626 19.1996V18.1304C17.2438 17.8855 17.9343 16.9611 17.9343 15.8696C17.9343 14.7337 17.1882 14.0989 15.629 13.7425V11.8938C16.1636 12.0163 16.52 12.2613 16.7872 12.562L17.8007 11.6488C17.3107 11.0919 16.6535 10.7467 15.7626 10.6465V9.59961H14.4931V10.6465C13.0564 10.8135 12.2879 11.5931 12.2879 12.7625C12.2879 13.8427 12.9673 14.5778 14.6378 14.923V16.9276C14.0141 16.8385 13.4907 16.5379 13.0675 16.0924L12.0652 17.0057C12.622 17.6181 13.3682 18.0747 14.4931 18.175V19.1996H15.7626ZM13.8248 12.7179C13.8248 12.2836 14.0699 11.9829 14.6378 11.8715V13.5198C14.0699 13.3639 13.8248 13.1411 13.8248 12.7179ZM16.3974 15.9921C16.3974 16.4153 16.1524 16.7606 15.629 16.9054V15.1458C16.2638 15.3351 16.3974 15.6692 16.3974 15.9921Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 40" fill="none" id="svg-icon-colorful-social">
            <rect width="52" height="40" rx="20" fill="url(#svg-icon-colorful-social_paint0_linear_657_477)"></rect>
            <mask id="svg-icon-colorful-social_mask0_657_477" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                y="0" width="52" height="40">
                <rect width="52" height="40" rx="20" fill="#E01717"></rect>
            </mask>
            <g mask="url(#svg-icon-colorful-social_mask0_657_477)">
                <path d="M47 1H62L29 46H14L47 1Z" fill="url(#svg-icon-colorful-social_paint1_linear_657_477)"></path>
                <path d="M24 -9H33L0 36H-9L24 -9Z" fill="url(#svg-icon-colorful-social_paint2_linear_657_477)"></path>
            </g>
            <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd"
                d="M21.5382 26.3887V28.0181C21.5382 28.9018 22.2546 29.6181 23.1382 29.6181H33.3645L37.1053 31.9998V22.4961L37.0975 17.2441C37.0961 16.3614 36.3802 15.6465 35.4975 15.6465H33.3799V24.3887C33.3799 25.4933 32.4845 26.3887 31.3799 26.3887H21.5382Z"
                fill="white"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14 17.5222V29.3331L18.6272 26.3887H31.3799C32.4845 26.3887 33.3799 25.4933 33.3799 24.3887V11C33.3799 9.89543 32.4845 9 31.3799 9H16.0098C14.9064 9 14.0115 9.89359 14.0098 10.997L14 17.5222ZM22.083 14.1114H19.3965L22.6069 18.3023L19.5647 21.7781H20.8672L23.2066 19.0911L25.2589 21.7771H27.8749L24.5367 17.3612L27.3738 14.1114H26.0787L23.9306 16.5635L22.083 14.1114ZM21.6888 14.8517H20.9206L25.6129 21.003H26.3442L21.6888 14.8517Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-colorful-social_paint0_linear_657_477" x1="4.5" y1="7" x2="47.5" y2="32.5"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF9B77"></stop>
                    <stop offset="1" stop-color="#FF538F"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-social_paint1_linear_657_477" x1="51" y1="7.5" x2="27" y2="40"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-social_paint2_linear_657_477" x1="23.375" y1="-2.5" x2="-1.37943"
                    y2="26.8314" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 40" fill="none" id="svg-icon-colorful-team">
            <rect width="52" height="40" rx="20" fill="url(#svg-icon-colorful-team_paint0_linear_105_162)"></rect>
            <mask id="svg-icon-colorful-team_mask0_105_162" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                y="0" width="52" height="40">
                <rect width="52" height="40" rx="20" fill="#E01717"></rect>
            </mask>
            <g mask="url(#svg-icon-colorful-team_mask0_105_162)">
                <path d="M47 1H62L29 46H14L47 1Z" fill="url(#svg-icon-colorful-team_paint1_linear_105_162)"></path>
                <path d="M24 -9H33L0 36H-9L24 -9Z" fill="url(#svg-icon-colorful-team_paint2_linear_105_162)"></path>
            </g>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19 25.1416V29.7641C19 31.2509 20.5646 32.2179 21.8944 31.553L25.1056 29.9474C25.6686 29.6659 26.3314 29.6659 26.8944 29.9474L30.1056 31.553C31.4354 32.2179 33 31.2509 33 29.7641V25.1416C31.1962 26.9099 28.7255 28.0002 26 28.0002C23.2745 28.0002 20.8038 26.9099 19 25.1416Z"
                fill="white" fill-opacity="0.8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M26 29C31.799 29 36.5 24.299 36.5 18.5C36.5 12.701 31.799 8 26 8C20.201 8 15.5 12.701 15.5 18.5C15.5 24.299 20.201 29 26 29ZM27.0623 17.4377L26.4777 15.5459C26.3325 15.0761 25.6675 15.0761 25.5223 15.5459L24.9377 17.4377H22.9781C22.4999 17.4377 22.2946 18.0447 22.6746 18.335L24.2812 19.5623L23.6807 21.5054C23.537 21.9705 24.0751 22.3459 24.4619 22.0504L26 20.8754L27.5381 22.0504C27.9249 22.3459 28.463 21.9705 28.3193 21.5054L27.7188 19.5623L29.3254 18.335C29.7054 18.0447 29.5001 17.4377 29.0219 17.4377H27.0623Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-colorful-team_paint0_linear_105_162" x1="4.5" y1="7" x2="47.5" y2="32.5"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF9B77"></stop>
                    <stop offset="1" stop-color="#FF538F"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-team_paint1_linear_105_162" x1="51" y1="7.5" x2="27" y2="40"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-team_paint2_linear_105_162" x1="23.375" y1="-2.5" x2="-1.37943"
                    y2="26.8314" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 40" fill="none"
            id="svg-icon-colorful-withdraw-large">
            <rect width="52" height="40" rx="20" fill="url(#svg-icon-colorful-withdraw-large_paint0_linear_105_110)">
            </rect>
            <mask id="svg-icon-colorful-withdraw-large_mask0_105_110" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                x="0" y="0" width="52" height="40">
                <rect width="52" height="40" rx="20" fill="#E01717"></rect>
            </mask>
            <g mask="url(#svg-icon-colorful-withdraw-large_mask0_105_110)">
                <path d="M47 1H62L29 46H14L47 1Z" fill="url(#svg-icon-colorful-withdraw-large_paint1_linear_105_110)">
                </path>
                <path d="M24 -9H33L0 36H-9L24 -9Z" fill="url(#svg-icon-colorful-withdraw-large_paint2_linear_105_110)">
                </path>
            </g>
            <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd"
                d="M15 13C15 10.7909 16.7909 9 19 9H29C31.2091 9 33 10.7909 33 13H19C17.3644 13 15.9122 13.7853 15 14.9995V13ZM19 14C16.7909 14 15 15.7909 15 18V26C15 28.2091 16.7909 30 19 30H33C35.2091 30 37 28.2091 37 26V18C37 15.7909 35.2091 14 33 14H19Z"
                fill="white"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M30.6459 30.624C32.4868 28.8152 36.4572 24.5832 36.4572 21.7287C36.4572 18.0124 33.4449 15 29.7287 15C26.0124 15 23 18.0126 23 21.7287C23 24.5832 26.9704 28.815 28.8113 30.624C29.3215 31.1253 30.1356 31.1253 30.6459 30.624ZM27.8137 24.3281C27.316 23.8304 27.0364 23.1554 27.0364 22.4516C27.0364 22.103 27.105 21.7579 27.2384 21.436C27.3718 21.114 27.5673 20.8214 27.8137 20.575C28.0601 20.3285 28.3527 20.1331 28.6747 19.9997C28.9967 19.8663 29.3418 19.7977 29.6903 19.7977C30.0388 19.7977 30.3839 19.8663 30.7059 19.9997C31.0278 20.1331 31.3204 20.3285 31.5668 20.575C31.8133 20.8214 32.0088 21.114 32.1421 21.436C32.2755 21.7579 32.3441 22.103 32.3441 22.4516C32.3441 23.1554 32.0645 23.8304 31.5668 24.3281C31.0691 24.8258 30.3941 25.1054 29.6903 25.1054C28.9864 25.1054 28.3114 24.8258 27.8137 24.3281Z"
                fill="white" fill-opacity="0.8"></path>
            <defs>
                <linearGradient id="svg-icon-colorful-withdraw-large_paint0_linear_105_110" x1="4.5" y1="7" x2="47.5"
                    y2="32.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#17B5F8"></stop>
                    <stop offset="1" stop-color="#0067FF"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-withdraw-large_paint1_linear_105_110" x1="51" y1="7.5" x2="27"
                    y2="40" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-colorful-withdraw-large_paint2_linear_105_110" x1="23.375" y1="-2.5"
                    x2="-1.37943" y2="26.8314" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" stop-opacity="0.1"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-colorful-withdraw">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.36 7.28003C8.04039 7.28003 6.15999 9.16043 6.15999 11.48V19.6H12.32C16.9592 19.6 20.72 15.8392 20.72 11.2V8.68003C20.72 7.90683 20.0932 7.28003 19.32 7.28003H10.36ZM14.56 10.0801H8.96V11.2001H14.56V10.0801Z"
                fill="#1772F8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.3912 19.1362L20.2922 20.0371C20.5442 20.2891 20.3657 20.72 20.0093 20.72H15.215C14.9941 20.72 14.815 20.5409 14.815 20.32V15.5257C14.815 15.1693 15.2459 14.9908 15.4979 15.2428L16.7962 16.5411C19.4336 15.3135 20.5317 14.0025 21.815 11.2C21.9889 14.6631 21.4751 16.5034 19.3912 19.1362Z"
                fill="#10BB88"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-copy-line">
            <g mask="url(#mask0_194_1201)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M15.534 8.125H11.125V8.5H10V8.125V7H11.125H16L18.25 9.25V15.625V16.75H17.125H16.75V15.625H17.125V9.71599L15.534 8.125ZM8.875 10.375H13.284L14.875 11.966V17.875H8.875V10.375ZM8.875 9.25H13.75L16 11.5V17.875V19H14.875H8.875H7.75V17.875V10.375V9.25H8.875Z"
                    fill="currentColor"></path>
            </g>
            <rect x="0.5" y="0.5" width="25" height="25" rx="3.5" stroke="currentColor" stroke-opacity="0.2"
                stroke-dasharray="3 3"></rect>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none" id="svg-icon-copy">
            <g mask="url(#mask0_137_77)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.53401 1.125H4.125V1.5H3V1.125V0H4.125H9L11.25 2.25V8.625V9.75H10.125H9.75V8.625H10.125V2.71599L8.53401 1.125ZM1.875 3.375H6.28401L7.875 4.96599V10.875H1.875V3.375ZM1.875 2.25H6.75L9 4.5V10.875V12H7.875H1.875H0.75V10.875V3.375V2.25H1.875Z"
                    fill="currentColor"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" fill="none" id="svg-icon-delete-account">
            <mask id="svg-icon-delete-account_mask0_105_2454" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                y="0" width="90" height="90">
                <rect width="90" height="90" fill="#D9D9D9"></rect>
            </mask>
            <g mask="url(#svg-icon-delete-account_mask0_105_2454)">
                <rect y="4" width="76" height="82" rx="8" fill="url(#svg-icon-delete-account_paint0_linear_105_2454)">
                </rect>
                <rect x="4" width="76" height="82" rx="8" fill="url(#svg-icon-delete-account_paint1_linear_105_2454)">
                </rect>
                <g filter="url(#svg-icon-delete-account_filter0_d_105_2454)">
                    <rect x="19" y="14" width="24" height="6" rx="3" fill="white"></rect>
                </g>
                <g filter="url(#svg-icon-delete-account_filter1_d_105_2454)">
                    <rect x="19" y="30" width="46" height="6" rx="3" fill="white"></rect>
                </g>
                <g filter="url(#svg-icon-delete-account_filter2_d_105_2454)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M35.0001 45.3091C32.5249 43.88 29.4754 43.88 27.0001 45.3091L22.0098 48.1903C19.5346 49.6194 18.0098 52.2604 18.0098 55.1185V60.8809C18.0098 63.739 19.5346 66.38 22.0098 67.8091L27.0001 70.6903C29.4754 72.1194 32.5249 72.1194 35.0001 70.6903L39.9905 67.8091C42.4657 66.38 43.9905 63.739 43.9905 60.8809V55.1185C43.9905 52.2604 42.4657 49.6194 39.9905 48.1903L35.0001 45.3091ZM31.0001 62.9997C33.7616 62.9997 36.0001 60.7611 36.0001 57.9997C36.0001 55.2383 33.7616 52.9997 31.0001 52.9997C28.2387 52.9997 26.0001 55.2383 26.0001 57.9997C26.0001 60.7611 28.2387 62.9997 31.0001 62.9997Z"
                        fill="white"></path>
                </g>
                <g filter="url(#svg-icon-delete-account_filter3_b_105_2454)">
                    <circle cx="68" cy="70" r="20" fill="white" fill-opacity="0.3"></circle>
                </g>
                <g filter="url(#svg-icon-delete-account_filter4_b_105_2454)">
                    <circle cx="70" cy="68" r="20" fill="#1772F8" fill-opacity="0.4"></circle>
                    <circle cx="70" cy="68" r="19.5" stroke="url(#svg-icon-delete-account_paint2_linear_105_2454)">
                    </circle>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M62.9289 72.2427C62.1479 73.0237 62.1479 74.2901 62.9289 75.0711C63.71 75.8522 64.9763 75.8522 65.7574 75.0711L70 70.8285L74.2426 75.0711C75.0237 75.8522 76.29 75.8522 77.0711 75.0711C77.8521 74.2901 77.8521 73.0237 77.0711 72.2427L72.8284 68L77.0711 63.7574C77.8521 62.9764 77.8521 61.71 77.0711 60.929C76.29 60.1479 75.0237 60.1479 74.2426 60.929L70 65.1716L65.7574 60.929C64.9763 60.1479 63.71 60.1479 62.9289 60.929C62.1479 61.71 62.1479 62.9764 62.9289 63.7574L67.1716 68L62.9289 72.2427Z"
                    fill="white"></path>
            </g>
            <defs>
                <filter id="svg-icon-delete-account_filter0_d_105_2454" x="15" y="14" width="32" height="14"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha"></feColorMatrix>
                    <feOffset dy="4"></feOffset>
                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.305725 0 0 0 0 0.578709 0 0 0 0 0.979085 0 0 0 1 0">
                    </feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_105_2454"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_105_2454" result="shape">
                    </feBlend>
                </filter>
                <filter id="svg-icon-delete-account_filter1_d_105_2454" x="15" y="30" width="54" height="14"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha"></feColorMatrix>
                    <feOffset dy="4"></feOffset>
                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.305725 0 0 0 0 0.578709 0 0 0 0 0.979085 0 0 0 1 0">
                    </feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_105_2454"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_105_2454" result="shape">
                    </feBlend>
                </filter>
                <filter id="svg-icon-delete-account_filter2_d_105_2454" x="14.0098" y="44.2373" width="33.9805"
                    height="35.5249" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha"></feColorMatrix>
                    <feOffset dy="4"></feOffset>
                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.169745 0 0 0 0 0.473475 0 0 0 0 0.918945 0 0 0 1 0">
                    </feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_105_2454"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_105_2454" result="shape">
                    </feBlend>
                </filter>
                <filter id="svg-icon-delete-account_filter3_b_105_2454" x="36" y="38" width="64" height="64"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"></feGaussianBlur>
                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_105_2454"></feComposite>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_105_2454" result="shape">
                    </feBlend>
                </filter>
                <filter id="svg-icon-delete-account_filter4_b_105_2454" x="38" y="36" width="64" height="64"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"></feGaussianBlur>
                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_105_2454"></feComposite>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_105_2454" result="shape">
                    </feBlend>
                </filter>
                <linearGradient id="svg-icon-delete-account_paint0_linear_105_2454" x1="38" y1="4" x2="38" y2="86"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#3184FF"></stop>
                    <stop offset="0.39" stop-color="#69A6FF"></stop>
                    <stop offset="1" stop-color="#1772F8"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-delete-account_paint1_linear_105_2454" x1="42" y1="0" x2="42" y2="82"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#95C0FF"></stop>
                    <stop offset="1" stop-color="#3184FF"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-delete-account_paint2_linear_105_2454" x1="83.5" y1="52" x2="52" y2="74"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#B5D3FF"></stop>
                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-download-filled">
            <rect x="2" width="16" height="20" rx="3" fill="#1772F8"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.75 1.75C10.75 2.16421 10.4142 2.5 10 2.5C9.58579 2.5 9.25 2.16421 9.25 1.75C9.25 1.33579 9.58579 1 10 1C10.4142 1 10.75 1.33579 10.75 1.75ZM8 17.75C8 17.3358 8.33579 17 8.75 17H11.25C11.6642 17 12 17.3358 12 17.75C12 18.1642 11.6642 18.5 11.25 18.5H8.75C8.33579 18.5 8 18.1642 8 17.75ZM9.16978 6.76411C9.16978 6.29181 9.55265 5.90894 10.0249 5.90894C10.4972 5.90894 10.8801 6.29181 10.8801 6.76411V11.4704L11.8381 10.6111C12.1721 10.3115 12.7137 10.3115 13.0477 10.6111C13.3817 10.9107 13.3817 11.3964 13.0477 11.696L10.651 13.8458C10.6439 13.8526 10.6367 13.8593 10.6293 13.8659C10.4748 14.0045 10.2759 14.079 10.0737 14.0894C10.0575 14.0903 10.0413 14.0908 10.0249 14.0908C10.0135 14.0908 10.002 14.0905 9.99066 14.0901C9.78291 14.0829 9.57753 14.0082 9.41893 13.8659C9.41154 13.8593 9.40431 13.8526 9.39725 13.8458L7.00052 11.696C6.66649 11.3964 6.66649 10.9107 7.00052 10.6111C7.33454 10.3115 7.8761 10.3115 8.21012 10.6111L9.16978 11.4719V6.76411Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-download">
            <path
                d="M8 5H7C4.79086 5 3 6.79086 3 9V20C3 22.2091 4.79086 24 7 24H19C21.2091 24 23 22.2091 23 20V9C23 6.79086 21.2091 5 19 5H18"
                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M13.9 3.0001C13.9 2.50304 13.4971 2.1001 13 2.1001C12.5029 2.1001 12.1 2.50304 12.1 3.0001V15.8273L10.1364 13.8637C9.78492 13.5122 9.21507 13.5122 8.8636 13.8637C8.51213 14.2152 8.51213 14.785 8.8636 15.1365L12.3991 18.672C12.7506 19.0235 13.3205 19.0235 13.6719 18.672L17.2075 15.1365C17.5589 14.785 17.5589 14.2152 17.2075 13.8637C16.856 13.5122 16.2861 13.5122 15.9347 13.8637L13.9 15.8984V3.0001Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-edit">
            <circle cx="14" cy="14" r="14" fill="#1772F8"></circle>
            <g mask="url(#mask0_543_89)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.3918 10.2862L9.90715 17.7709L7.69046 17.8663L7.78583 15.6496L15.2705 8.16493C15.8563 7.57914 16.8061 7.57914 17.3918 8.16493C17.9776 8.75071 17.9776 9.70046 17.3918 10.2862ZM10.1661 19.2612L7.62575 19.3705L6.12158 19.4352L6.18629 17.931L6.29558 15.3907C6.30634 15.1406 6.41052 14.9036 6.58755 14.7266L14.2099 7.10427C15.3814 5.93269 17.2809 5.93269 18.4525 7.10427C19.6241 8.27584 19.6241 10.1753 18.4525 11.3469L10.8302 18.9692C10.6532 19.1462 10.4162 19.2504 10.1661 19.2612ZM15.2501 18C15.2501 17.5858 15.5859 17.25 16.0001 17.25H21.0001C21.4143 17.25 21.7501 17.5858 21.7501 18C21.7501 18.4142 21.4143 18.75 21.0001 18.75H16.0001C15.5859 18.75 15.2501 18.4142 15.2501 18ZM6.25013 21C6.25013 20.5858 6.58591 20.25 7.00013 20.25H21.0001C21.4143 20.25 21.7501 20.5858 21.7501 21C21.7501 21.4142 21.4143 21.75 21.0001 21.75H7.00013C6.58591 21.75 6.25013 21.4142 6.25013 21Z"
                    fill="currentColor"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" id="svg-icon-facebook">
            <path
                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                fill="url(#svg-icon-facebook_paint0_linear_657_282)"></path>
            <path
                d="M21.8264 20.2528L22.5109 16.0637H17.6634V12.8698C17.6634 11.5507 18.0172 10.6125 19.9087 10.6125L22.7087 10.6138V6.38975C22.7087 6.38975 20.9317 6 19.2647 6C15.7859 6 13.4837 8.2975 13.4837 12.1975V16.064H9.28992V20.253H13.4827V31.8013C14.3029 31.931 15.1432 32 15.9994 32C16.5614 32 17.1164 31.9702 17.6634 31.9137V20.2528H21.8264Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-facebook_paint0_linear_657_282" x1="0" y1="0" x2="32" y2="32"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#68B5FC"></stop>
                    <stop offset="1" stop-color="#2260D7"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-feedback">
            <path
                d="M2.9 9C2.9 7.28792 4.28792 5.9 6 5.9H8.58579C9.0897 5.9 9.57297 5.69982 9.92929 5.3435L12.2222 3.05061C12.6518 2.62103 13.3482 2.62103 13.7778 3.05061L16.0707 5.3435C16.427 5.69982 16.9103 5.9 17.4142 5.9H20C21.7121 5.9 23.1 7.28792 23.1 9V20C23.1 21.7121 21.7121 23.1 20 23.1H6C4.28792 23.1 2.9 21.7121 2.9 20V9Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path d="M9 14H17" stroke="#1772F8" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            </path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-female">
            <circle cx="10" cy="10" r="10" fill="currentColor"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.0003 11.8C12.5467 11.8 13.8003 10.5464 13.8003 9C13.8003 7.4536 12.5467 6.2 11.0003 6.2C9.45388 6.2 8.20028 7.4536 8.20028 9C8.20028 10.5464 9.45388 11.8 11.0003 11.8ZM11.0003 13C13.2094 13 15.0003 11.2091 15.0003 9C15.0003 6.79086 13.2094 5 11.0003 5C8.79114 5 7.00028 6.79086 7.00028 9C7.00028 9.91337 7.30641 10.7552 7.82167 11.4286L6.95731 12.293L5.96714 11.3028C5.73282 11.0685 5.35292 11.0685 5.11861 11.3028C4.88429 11.5371 4.88429 11.917 5.11861 12.1513L6.10878 13.1415L5.2601 13.9902C5.02579 14.2245 5.02579 14.6044 5.2601 14.8387C5.49442 15.073 5.87432 15.073 6.10863 14.8387L6.95731 13.99L7.80561 14.8383C8.03993 15.0726 8.41983 15.0726 8.65414 14.8383C8.88846 14.604 8.88846 14.2241 8.65414 13.9898L7.80584 13.1415L8.68507 12.2623C9.33849 12.7268 10.1375 13 11.0003 13Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" fill="none" id="svg-icon-gen-1">
            <circle cx="17" cy="17" r="16.5" stroke="#E7EBF1"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6 9.67041H19.6436V11.6845H6V9.67041ZM6 22.3152H19.6436V24.3293H6V22.3152ZM10.4442 13.8402H6V15.8543H10.4442V13.8402ZM7.56406 18.078H14.2411V20.0921H7.56406V18.078Z"
                fill="#10BB88"></path>
            <path
                d="M17.7856 27.2142C23.4268 27.2142 27.9999 22.6411 27.9999 16.9999C27.9999 11.3587 23.4268 6.78564 17.7856 6.78564C12.1444 6.78564 7.57129 11.3587 7.57129 16.9999C7.57129 22.6411 12.1444 27.2142 17.7856 27.2142Z"
                fill="#1E86FF"></path>
            <path d="M17.3664 13.9759L15.5044 15.6979L14.5244 14.5359L17.5204 12.0439H19.0464V21.9559H17.3664V13.9759Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" fill="none" id="svg-icon-gen-2">
            <circle cx="17" cy="17" r="16.5" stroke="#E7EBF1"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6 9.67041H19.6436V11.6845H6V9.67041ZM6 22.3152H19.6436V24.3293H6V22.3152ZM10.4442 13.8402H6V15.8543H10.4442V13.8402ZM7.56406 18.078H14.2411V20.0921H7.56406V18.078Z"
                fill="#10BB88"></path>
            <path
                d="M17.7856 27.2142C23.4268 27.2142 27.9999 22.6411 27.9999 16.9999C27.9999 11.3587 23.4268 6.78564 17.7856 6.78564C12.1444 6.78564 7.57129 11.3587 7.57129 16.9999C7.57129 22.6411 12.1444 27.2142 17.7856 27.2142Z"
                fill="#1E86FF"></path>
            <path
                d="M14.4678 20.262L18.3178 16.538C18.4298 16.426 18.5464 16.3093 18.6678 16.188C18.7891 16.0573 18.8964 15.922 18.9898 15.782C19.0924 15.642 19.1764 15.4973 19.2418 15.348C19.3071 15.1893 19.3398 15.026 19.3398 14.858C19.3398 14.6526 19.2978 14.4706 19.2138 14.312C19.1391 14.1533 19.0364 14.018 18.9058 13.906C18.7751 13.794 18.6211 13.71 18.4438 13.654C18.2758 13.5886 18.0938 13.556 17.8978 13.556C17.4778 13.556 17.1324 13.6773 16.8618 13.92C16.5911 14.1626 16.4278 14.4893 16.3718 14.9L14.6078 14.76C14.6451 14.3026 14.7524 13.9013 14.9298 13.556C15.1164 13.2013 15.3544 12.9073 15.6438 12.674C15.9331 12.4406 16.2691 12.2633 16.6518 12.142C17.0344 12.0206 17.4498 11.96 17.8978 11.96C18.3458 11.96 18.7611 12.0206 19.1438 12.142C19.5358 12.254 19.8764 12.4266 20.1658 12.66C20.4551 12.884 20.6838 13.1733 20.8518 13.528C21.0198 13.8826 21.1038 14.298 21.1038 14.774C21.1038 15.3993 20.9591 15.9406 20.6698 16.398C20.3898 16.846 20.0258 17.2753 19.5778 17.686L16.5118 20.528H21.1038V22.04H14.4678V20.262Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" fill="none" id="svg-icon-gen-3">
            <circle cx="17" cy="17" r="16.5" stroke="#E7EBF1"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6 9.67041H19.6436V11.6845H6V9.67041ZM6 22.3152H19.6436V24.3293H6V22.3152ZM10.4442 13.8402H6V15.8543H10.4442V13.8402ZM7.56406 18.078H14.2411V20.0921H7.56406V18.078Z"
                fill="#10BB88"></path>
            <path
                d="M17.7856 27.2142C23.4268 27.2142 27.9999 22.6411 27.9999 16.9999C27.9999 11.3587 23.4268 6.78564 17.7856 6.78564C12.1444 6.78564 7.57129 11.3587 7.57129 16.9999C7.57129 22.6411 12.1444 27.2142 17.7856 27.2142Z"
                fill="#1E86FF"></path>
            <path
                d="M16.8761 16.034H17.3101C17.5528 16.034 17.7861 16.02 18.0101 15.992C18.2434 15.964 18.4488 15.9033 18.6261 15.81C18.8128 15.7166 18.9621 15.5813 19.0741 15.404C19.1861 15.2266 19.2421 14.9886 19.2421 14.69C19.2421 14.3073 19.1114 13.9946 18.8501 13.752C18.5888 13.5093 18.2481 13.388 17.8281 13.388C17.4921 13.388 17.1888 13.486 16.9181 13.682C16.6568 13.8686 16.4654 14.1346 16.3441 14.48L14.5661 14.004C14.6781 13.64 14.8368 13.3226 15.0421 13.052C15.2474 12.7813 15.4901 12.562 15.7701 12.394C16.0501 12.2166 16.3581 12.086 16.6941 12.002C17.0301 11.918 17.3801 11.876 17.7441 11.876C18.1734 11.876 18.5794 11.932 18.9621 12.044C19.3448 12.156 19.6808 12.324 19.9701 12.548C20.2594 12.7626 20.4881 13.038 20.6561 13.374C20.8334 13.7006 20.9221 14.0833 20.9221 14.522C20.9221 15.054 20.7728 15.53 20.4741 15.95C20.1754 16.3606 19.7601 16.6313 19.2281 16.762V16.79C19.8628 16.8833 20.3434 17.154 20.6701 17.602C20.9968 18.05 21.1601 18.582 21.1601 19.198C21.1601 19.674 21.0668 20.094 20.8801 20.458C20.7028 20.822 20.4601 21.13 20.1521 21.382C19.8441 21.6246 19.4848 21.8113 19.0741 21.942C18.6728 22.0633 18.2528 22.124 17.8141 22.124C17.4034 22.124 17.0161 22.0773 16.6521 21.984C16.2881 21.9 15.9568 21.7646 15.6581 21.578C15.3688 21.3913 15.1168 21.1533 14.9021 20.864C14.6874 20.5653 14.5241 20.2106 14.4121 19.8L16.2041 19.324C16.3068 19.7346 16.4888 20.052 16.7501 20.276C17.0114 20.5 17.3661 20.612 17.8141 20.612C18.0381 20.612 18.2481 20.5746 18.4441 20.5C18.6494 20.4253 18.8268 20.3226 18.9761 20.192C19.1348 20.052 19.2561 19.8886 19.3401 19.702C19.4334 19.506 19.4801 19.2913 19.4801 19.058C19.4801 18.7406 19.4101 18.484 19.2701 18.288C19.1394 18.0826 18.9668 17.9286 18.7521 17.826C18.5468 17.714 18.3134 17.6393 18.0521 17.602C17.7908 17.5646 17.5341 17.546 17.2821 17.546H16.8761V16.034Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-google-auth">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M22.2 13C22.2 18.081 18.081 22.2 13 22.2C12.7207 22.2 12.4444 22.1876 12.1715 22.1632L16.117 15.5166C16.3717 15.0875 16.2303 14.5331 15.8012 14.2784C15.3721 14.0237 14.8177 14.165 14.563 14.5942L10.289 21.7941C6.53118 20.637 3.8 17.1374 3.8 13C3.8 11.0611 4.39981 9.26222 5.42401 7.7789L9.25279 14.4105C9.50128 14.8409 10.0516 14.9884 10.482 14.7399C10.9124 14.4914 11.0599 13.9411 10.8114 13.5107L6.66488 6.32868C8.3146 4.76159 10.545 3.8 13 3.8C16.6474 3.8 19.7991 5.92258 21.2872 8.99991H13.1423C12.6452 8.99991 12.2423 9.40285 12.2423 9.89991C12.2423 10.397 12.6452 10.7999 13.1423 10.7999H21.9353C22.1083 11.5048 22.2 12.2417 22.2 13ZM24 13C24 19.0751 19.0751 24 13 24C6.92487 24 2 19.0751 2 13C2 6.92487 6.92487 2 13 2C19.0751 2 24 6.92487 24 13Z"
                fill="currentColor"></path>
            <circle cx="13" cy="13" r="3.1" stroke="#1772F8" stroke-width="1.8"></circle>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" fill="none" id="svg-icon-home">
            <rect x="1.34302" y="8.70166" width="1.6" height="9.4259" rx="0.8" fill="currentColor"></rect>
            <rect x="19.0571" y="9.0011" width="1.6" height="9.12649" rx="0.8" fill="currentColor"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M2.94299 12.1761H1.34302V13.7761V18.4106C1.34302 19.8466 2.50708 21.0106 3.94302 21.0106H6.39548H7.99548V19.4106V19.4091H6.39548V19.4106H3.94302C3.39073 19.4106 2.94302 18.9629 2.94302 18.4106V17.4191C2.943 17.4157 2.94299 17.4124 2.94299 17.4091V12.1761Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.0571 12.1761H20.6571V13.7761V18.4106C20.6571 19.8466 19.493 21.0106 18.0571 21.0106H15.6046H14.0046V19.4106V19.4091H15.6046V19.4106H18.0571C18.6094 19.4106 19.0571 18.9629 19.0571 18.4106V17.4191C19.0571 17.4157 19.0571 17.4124 19.0571 17.4091V12.1761Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.5257 3.13654L18.1832 7.79437C18.7619 8.27078 19.0567 8.95613 19.0578 9.64436H20.653V9.84448C20.7121 8.63073 20.2212 7.39978 19.2002 6.55915L13.5426 1.90131C12.0659 0.685489 9.93498 0.685394 8.45811 1.90108L2.80581 6.55376C1.83923 7.3494 1.34768 8.49481 1.3479 9.64436H2.94792C2.94752 8.95432 3.24245 8.26667 3.82266 7.78908L9.47496 3.1364C10.3611 2.40699 11.6396 2.40705 12.5257 3.13654ZM10.9697 19.2994C10.9935 19.2996 11.0173 19.2996 11.0412 19.2994H10.9697Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.0299 15.3465C9.60317 15.2322 9.1645 15.4855 9.05015 15.9122L8.11276 19.4106H6.58015C6.13832 19.4106 5.78015 19.7688 5.78015 20.2106C5.78015 20.6524 6.13832 21.0106 6.58015 21.0106H8.72344C8.93766 21.0106 9.13221 20.9264 9.27581 20.7893C9.3808 20.6908 9.46049 20.5627 9.5005 20.4134L10.5956 16.3263C10.71 15.8996 10.4567 15.4609 10.0299 15.3465Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.9411 15.3465C12.3679 15.2322 12.8066 15.4855 12.9209 15.9122L13.8583 19.4106H15.3909C15.8327 19.4106 16.1909 19.7688 16.1909 20.2106C16.1909 20.6524 15.8327 21.0106 15.3909 21.0106H13.2476C13.0334 21.0106 12.8389 20.9264 12.6953 20.7893C12.5903 20.6908 12.5106 20.5627 12.4706 20.4134L11.3754 16.3263C11.2611 15.8996 11.5144 15.4609 11.9411 15.3465Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.4944 12.8431C12.4944 13.5967 12.233 14.1387 11.8991 14.4803L11.8993 14.4806C11.5398 14.8422 11.3177 15.3405 11.3177 15.8906C11.3177 16.4859 11.5778 17.0205 11.9906 17.3869L12.9139 16.3689L12.7773 16.2148L12.9412 16.026C12.926 15.9837 12.9177 15.9381 12.9177 15.8906C12.9177 15.7969 12.9499 15.7107 13.0039 15.6425C13.6713 14.9672 14.0944 13.9636 14.0944 12.8431C14.0944 10.8099 12.7015 9.16162 10.9832 9.16162C9.26498 9.16162 7.87207 10.8099 7.87207 12.8431C7.87207 13.9527 8.28688 14.9476 8.94299 15.6226L8.9416 15.6249C9.00445 15.6955 9.04264 15.7886 9.04264 15.8906C9.04264 15.9349 9.03544 15.9775 9.02216 16.0173L9.1875 16.2177L9.08709 16.4137L9.96976 17.3869C10.3825 17.0205 10.6426 16.4859 10.6426 15.8906C10.6426 15.3353 10.4163 14.8328 10.0508 14.4704V14.4632C9.72486 14.1207 9.47207 13.5842 9.47207 12.8431C9.47207 11.4305 10.3905 10.7616 10.9832 10.7616C11.5759 10.7616 12.4944 11.4305 12.4944 12.8431Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="svg-icon-horn">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M7.28894 4.39421L5.48888 6.19426C5.36889 6.31426 5.21617 6.38158 5.05945 6.39623V6.4H1.4V9.6H4.94232C4.97296 9.59799 5.0037 9.59799 5.03434 9.6H5.05945V9.6021C5.21421 9.61781 5.36473 9.68495 5.4833 9.80352L7.28894 11.6092V4.39421ZM8.68886 13.3104C8.68895 13.3052 8.68897 13.2999 8.68894 13.2947V2.70508C8.68894 2.70453 8.68894 2.70398 8.68894 2.70344V2.7C8.68894 2.3134 8.37554 2 7.98894 2C7.77222 2 7.5785 2.09849 7.4501 2.25315L4.70325 5H1C0.447715 5 0 5.44772 0 6V10C0 10.5523 0.447715 11 1 11H4.69988L7.47332 13.7734C7.60127 13.9127 7.78491 14 7.98894 14C8.37207 14 8.68331 13.6922 8.68886 13.3104Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.7 2.04688C10.7292 2.04688 10.758 2.04866 10.7863 2.05214L10.7864 2.05108C13.7285 2.43625 16 4.95286 16 8C16 11.0257 13.7603 13.5284 10.8483 13.9405L10.8478 13.9375C10.8001 13.9477 10.7507 13.9531 10.7 13.9531C10.3134 13.9531 10 13.6397 10 13.2531C10 12.8857 10.2831 12.5844 10.643 12.5554C12.8791 12.2426 14.6 10.3223 14.6 8C14.6 5.67772 12.8791 3.75736 10.643 3.44459C10.2831 3.41558 10 3.11428 10 2.74687C10 2.36028 10.3134 2.04688 10.7 2.04688ZM10.7 5.11028C10.773 5.11028 10.8433 5.12144 10.9094 5.14215L10.9099 5.14049C12.1219 5.52583 13 6.66037 13 8C13 9.32945 12.1352 10.4569 10.9375 10.8506L10.9373 10.85C10.8632 10.8767 10.7833 10.8912 10.7 10.8912C10.3134 10.8912 10 10.5778 10 10.1912C10 9.87289 10.2125 9.6042 10.5033 9.51922C11.1404 9.30826 11.6 8.7078 11.6 8C11.6 7.30066 11.1513 6.70611 10.5261 6.48852C10.2236 6.4112 10 6.13686 10 5.81028C10 5.42368 10.3134 5.11028 10.7 5.11028Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-i18n">
            <path
                d="M19.1 10C19.1 10.8562 18.3825 11.8736 16.6686 12.7305C15.0084 13.5606 12.652 14.1 10 14.1C7.348 14.1 4.99156 13.5606 3.33142 12.7305C1.61745 11.8736 0.9 10.8562 0.9 10C0.9 9.14383 1.61745 8.12644 3.33142 7.26945C4.99156 6.43938 7.348 5.9 10 5.9C12.652 5.9 15.0084 6.43938 16.6686 7.26945C18.3825 8.12644 19.1 9.14383 19.1 10Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10 18.2C9.66838 18.2 8.88358 17.8844 8.07443 16.2661C7.31912 14.7555 6.8 12.5426 6.8 10C6.8 7.45743 7.31912 5.24455 8.07443 3.73392C8.88358 2.11562 9.66838 1.8 10 1.8C10.3316 1.8 11.1164 2.11562 11.9256 3.73392C12.1367 4.15618 12.3294 4.63332 12.4974 5.15719C13.1876 5.24591 13.849 5.37055 14.4731 5.52689C13.6522 2.24972 11.9575 0 10 0C7.23858 0 5 4.47715 5 10C5 15.5228 7.23858 20 10 20C11.9575 20 13.6522 17.7503 14.4731 14.4731C13.849 14.6294 13.1876 14.7541 12.4974 14.8428C12.3294 15.3667 12.1367 15.8438 11.9256 16.2661C11.1164 17.8844 10.3316 18.2 10 18.2ZM12.9544 12.9544C13.6333 12.8374 14.2663 12.6823 14.8428 12.4974C14.9454 11.6991 15 10.8623 15 10C15 9.13768 14.9454 8.30086 14.8428 7.50258C14.2663 7.31767 13.6333 7.16258 12.9544 7.04556C13.1115 7.95669 13.2 8.95025 13.2 10C13.2 11.0498 13.1115 12.0433 12.9544 12.9544Z"
                fill="#1772F8"></path>
            <circle cx="10" cy="10" r="9.1" stroke="currentColor" stroke-width="1.8"></circle>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-income-new">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <path d="M6.60059 11.5999C6.60059 10.4953 7.49602 9.59985 8.60059 9.59985H22.2006V13.1999H6.60059V11.5999Z"
                fill="#1772F8"></path>
            <circle cx="14.401" cy="11.9999" r="5.4" fill="#10BB88"></circle>
            <path
                d="M13.0041 10.98L13.0041 15.0156L16.0598 15.0156L16.0598 10.98L17.0455 10.98L14.6044 8.39977L12.001 10.98L13.0041 10.98Z"
                fill="white"></path>
            <path d="M6.60059 12.5999H22.2006V22.1999H8.60058C7.49602 22.1999 6.60059 21.3044 6.60059 20.1999V12.5999Z"
                fill="#1E86FF"></path>
            <path
                d="M15.6006 17.3998C15.6006 16.0743 16.6751 14.9998 18.0006 14.9998H22.2006V19.7998H18.0006C16.6751 19.7998 15.6006 18.7252 15.6006 17.3998Z"
                fill="#1772F8"></path>
            <circle cx="18.0008" cy="17.4" r="1.2" fill="white"></circle>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" id="svg-icon-instagram">
            <path
                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                fill="url(#svg-icon-instagram_paint0_linear_657_268)"></path>
            <path
                d="M20.5833 26H11.4167C8.43 26 6 23.5702 6 20.5833V11.4167C6 8.42975 8.43 6 11.4167 6H20.5833C23.5702 6 26 8.42975 26 11.4167V20.5835C26 23.5702 23.5702 26 20.5833 26ZM11.4167 7.66675C9.349 7.66675 7.66675 9.349 7.66675 11.4167V20.5835C7.66675 22.6512 9.349 24.3335 11.4167 24.3335H20.5833C22.651 24.3335 24.3333 22.6512 24.3333 20.5835V11.4167C24.3333 9.349 22.651 7.66675 20.5833 7.66675H11.4167Z"
                fill="white"></path>
            <path
                d="M16 21C13.243 21 11 18.7568 11 16C11 13.2427 13.243 11 16 11C18.757 11 21 13.2427 21 16C21 18.7568 18.757 21 16 21ZM16 12.6667C14.162 12.6667 12.6667 14.162 12.6667 16C12.6667 17.8383 14.162 19.3333 16 19.3333C17.838 19.3333 19.3333 17.8383 19.3333 16C19.3333 14.162 17.8383 12.6667 16 12.6667Z"
                fill="white"></path>
            <path
                d="M21.3124 11.833C21.9452 11.833 22.4582 11.32 22.4582 10.6873C22.4582 10.0545 21.9452 9.5415 21.3124 9.5415C20.6796 9.5415 20.1667 10.0545 20.1667 10.6873C20.1667 11.32 20.6796 11.833 21.3124 11.833Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-instagram_paint0_linear_657_268" x1="32" y1="32" x2="0" y2="0"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F4BA44"></stop>
                    <stop offset="0.208333" stop-color="#E86B4D"></stop>
                    <stop offset="0.354167" stop-color="#E45266"></stop>
                    <stop offset="0.588542" stop-color="#AD46CF"></stop>
                    <stop offset="0.791667" stop-color="#734EF4"></stop>
                    <stop offset="1" stop-color="#4484F1"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 26" fill="none" id="svg-icon-kyc">
            <path
                d="M2.2335 10C2.2335 6.07878 5.41227 2.9 9.3335 2.9H21.3335C23.0456 2.9 24.4335 4.28792 24.4335 6V16C24.4335 19.9212 21.2547 23.1 17.3335 23.1H5.3335C3.62141 23.1 2.2335 21.7121 2.2335 20V10Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path d="M6.3335 11H9.3335" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
            <path d="M6.3335 16H10.3335" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
            <circle cx="16.8335" cy="11.5" r="2.5" stroke="#1772F8" stroke-width="1.8"></circle>
            <path d="M20.3335 17.5C20.3335 15.567 18.7665 14 16.8335 14C14.9005 14 13.3335 15.567 13.3335 17.5"
                stroke="#1772F8" stroke-width="1.8" stroke-linecap="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 21" fill="none" id="svg-icon-list">
            <path d="M4.73809 6.28729H1.5V15.0571C1.5 16.9945 3.19137 18.5651 5.27778 18.5651H7.16667"
                stroke="currentColor" stroke-width="1.8"></path>
            <path
                d="M4.33325 1.56506H15.6666C17.2314 1.56506 18.4999 2.76683 18.4999 4.24927V12.4936V18.5651H7.16659C5.60178 18.5651 4.33325 17.3633 4.33325 15.8809V1.56506Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path d="M8.11108 5.34283H13.7778" stroke="#1772F8" stroke-width="1.8" stroke-linecap="square"></path>
            <path d="M8.11108 9.12061H10.9444" stroke="#1772F8" stroke-width="1.8" stroke-linecap="square"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-lock">
            <rect x="2.9" y="9.9" width="20.2" height="13.2" rx="3.1" stroke="currentColor" stroke-width="1.8"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M17.2 9V8C17.2 5.6804 15.3196 3.8 13 3.8C10.6804 3.8 8.8 5.6804 8.8 8V9H7V8C7 4.68629 9.68629 2 13 2C16.3137 2 19 4.68629 19 8V9H17.2Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.9001 16.5001C9.9001 16.9972 9.49715 17.4001 9.0001 17.4001C8.50304 17.4001 8.1001 16.9972 8.1001 16.5001C8.1001 16.003 8.50304 15.6001 9.0001 15.6001C9.49715 15.6001 9.9001 16.003 9.9001 16.5001ZM13.9001 16.5001C13.9001 16.9972 13.4972 17.4001 13.0001 17.4001C12.503 17.4001 12.1001 16.9972 12.1001 16.5001C12.1001 16.003 12.503 15.6001 13.0001 15.6001C13.4972 15.6001 13.9001 16.003 13.9001 16.5001ZM17.0001 17.4001C17.4972 17.4001 17.9001 16.9972 17.9001 16.5001C17.9001 16.003 17.4972 15.6001 17.0001 15.6001C16.503 15.6001 16.1001 16.003 16.1001 16.5001C16.1001 16.9972 16.503 17.4001 17.0001 17.4001Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 24" fill="none" id="svg-icon-logo-long">
            <path d="M33.7174 13.3763H31.5242V14.9H33.7174V13.3763Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask0_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="31"
                y="13" width="3" height="2">
                <path d="M33.7174 13.3763H31.5242V14.9H33.7174V13.3763Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask0_524_349)">
                <path d="M46.7391 11.1931H18.5033V17.0857H46.7391V11.1931Z" fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask1_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="33"
                y="13" width="6" height="4">
                <path
                    d="M33.7181 14.9025V13.3788C33.7656 13.8709 33.978 14.278 34.3578 14.5953C34.7351 14.9125 35.2674 15.0724 35.9495 15.0724C36.6317 15.0724 37.2089 14.9175 37.6037 14.6053C37.9985 14.293 38.1984 13.8909 38.1984 13.3988V14.9225C38.1984 15.4146 38.001 15.8168 37.6037 16.129C37.2089 16.4412 36.6567 16.5961 35.9495 16.5961C35.2424 16.5961 34.7351 16.4387 34.3578 16.119C33.9805 15.8018 33.7656 15.3971 33.7181 14.9025Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask1_524_349)">
                <path
                    d="M38.1984 14.9176C38.1984 15.4096 38.001 15.8118 37.6037 16.1241C37.2089 16.4363 36.6567 16.5912 35.9495 16.5912C35.2424 16.5912 34.7351 16.4338 34.3578 16.1141C33.9805 15.7968 33.7656 15.3922 33.7181 14.8976V13.3738C33.7656 13.8659 33.978 14.2731 34.3578 14.5903C34.7351 14.9076 35.2674 15.0674 35.9495 15.0674C36.6317 15.0674 37.2089 14.9126 37.6037 14.6003C37.9985 14.2881 38.1984 13.8859 38.1984 13.3938V14.9176Z"
                    fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask2_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="33"
                y="8" width="8" height="7">
                <path
                    d="M33.6457 9.67687V8.15314C33.6457 8.50534 33.7631 8.7926 33.9955 9.01492C34.2304 9.23973 34.5252 9.41708 34.8851 9.54947C35.2449 9.68186 35.7371 9.82424 36.3593 9.97662C37.1864 10.1864 37.8611 10.3938 38.3833 10.6011C38.9055 10.8109 39.3478 11.1307 39.7151 11.5628C40.0825 11.9949 40.2649 12.5745 40.2649 13.2964V14.8201C40.2649 14.0982 40.0825 13.5212 39.7151 13.0865C39.3478 12.6544 38.9055 12.3347 38.3833 12.1248C37.8611 11.9175 37.1864 11.7102 36.3593 11.5003C35.7371 11.348 35.2449 11.2056 34.8851 11.0732C34.5252 10.9408 34.2279 10.766 33.9955 10.5386C33.7606 10.3138 33.6457 10.0266 33.6457 9.67687Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask2_524_349)">
                <path
                    d="M40.2674 14.8201C40.2674 14.0982 40.085 13.5212 39.7176 13.0865C39.3503 12.6544 38.908 12.3347 38.3858 12.1248C37.8636 11.9175 37.1889 11.7102 36.3618 11.5003C35.7396 11.348 35.2474 11.2056 34.8875 11.0732C34.5277 10.9408 34.2304 10.766 33.998 10.5386C33.7631 10.3138 33.6482 10.0266 33.6482 9.67687V8.15314C33.6482 8.50534 33.7656 8.7926 33.998 9.01492C34.2329 9.23973 34.5277 9.41708 34.8875 9.54947C35.2474 9.68186 35.7396 9.82424 36.3618 9.97662C37.1889 10.1864 37.8636 10.3938 38.3858 10.6011C38.908 10.8109 39.3503 11.1307 39.7176 11.5628C40.085 11.9949 40.2674 12.5745 40.2674 13.2964V14.8201Z"
                    fill="#4A9CFF"></path>
            </g>
            <path
                d="M35.8596 6.4895C37.0715 6.4895 38.0635 6.76677 38.8381 7.31881C39.6127 7.87335 40.0425 8.63022 40.1249 9.59442H37.8586C37.8236 9.17976 37.6062 8.82256 37.2114 8.52531C36.8166 8.23055 36.2944 8.08068 35.6472 8.08068C35.06 8.08068 34.5802 8.21806 34.2079 8.49034C33.8381 8.76511 33.6507 9.15978 33.6507 9.67435C33.6507 10.0266 33.7681 10.3138 34.0005 10.5361C34.2354 10.7609 34.5302 10.9383 34.8901 11.0707C35.2499 11.2031 35.7421 11.3455 36.3643 11.4978C37.1914 11.7077 37.8661 11.915 38.3883 12.1223C38.9105 12.3321 39.3528 12.6519 39.7201 13.084C40.0875 13.5162 40.2699 14.0957 40.2699 14.8176C40.2699 15.3996 40.0999 15.9466 39.7576 16.4612C39.4153 16.9758 38.918 17.3904 38.2634 17.7027C37.6087 18.0149 36.8391 18.1698 35.952 18.1698C35.1124 18.1698 34.3578 18.0374 33.6857 17.7676C33.0135 17.5003 32.4863 17.1182 32.1014 16.6261C31.7166 16.134 31.5267 15.557 31.5267 14.9H33.7206C33.7681 15.3921 33.9805 15.7993 34.3603 16.1165C34.7376 16.4337 35.2699 16.5936 35.952 16.5936C36.6342 16.5936 37.2114 16.4387 37.6062 16.1265C38.001 15.8142 38.2009 15.4121 38.2009 14.92C38.2009 14.5378 38.0785 14.2256 37.8311 13.9833C37.5862 13.7435 37.2814 13.5561 36.914 13.4237C36.5467 13.2913 36.042 13.1515 35.3948 12.9966C34.5777 12.7992 33.918 12.5994 33.4058 12.3971C32.8961 12.1948 32.4613 11.88 32.1014 11.4529C31.7416 11.0257 31.5617 10.4562 31.5617 9.74429C31.5617 9.08734 31.7416 8.51282 32.1014 8.01823C32.4613 7.52614 32.966 7.14646 33.6132 6.88417C34.2604 6.62189 35.01 6.4895 35.8621 6.4895H35.8596Z"
                fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask3_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="35"
                y="4" width="6" height="6">
                <path
                    d="M35.8596 6.48949V4.96576C37.0715 4.96576 38.0635 5.24303 38.8381 5.79507C39.6127 6.34961 40.0425 7.10648 40.1249 8.07067V9.59441C40.0425 8.63021 39.6127 7.87334 38.8381 7.3188C38.0635 6.76676 37.0715 6.48949 35.8596 6.48949Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask3_524_349)">
                <path
                    d="M40.1224 9.59441C40.04 8.63021 39.6102 7.87334 38.8356 7.3188C38.061 6.76676 37.069 6.48949 35.8571 6.48949V4.96576C37.069 4.96576 38.061 5.24303 38.8356 5.79507C39.6102 6.34961 40.04 7.10648 40.1224 8.07067V9.59441Z"
                    fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask4_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="31"
                y="4" width="5" height="6">
                <path
                    d="M31.5592 9.74178V8.21805C31.5592 7.56109 31.7391 6.98657 32.0989 6.49198C32.4588 5.99989 32.9635 5.62021 33.6107 5.35793C34.2579 5.09565 35.0075 4.96326 35.8596 4.96326V6.48699C35.0075 6.48699 34.2579 6.61938 33.6107 6.88166C32.9635 7.14394 32.4588 7.52363 32.0989 8.01572C31.7391 8.50781 31.5592 9.08482 31.5592 9.74178Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask4_524_349)">
                <path
                    d="M35.8596 6.48943C35.0075 6.48943 34.2579 6.62182 33.6107 6.8841C32.9635 7.14638 32.4588 7.52607 32.0989 8.01816C31.7391 8.51025 31.5592 9.08727 31.5592 9.74422V8.22049C31.5592 7.56353 31.7391 6.98901 32.0989 6.49442C32.4588 6.00233 32.9635 5.62265 33.6107 5.36037C34.2579 5.09809 35.0075 4.9657 35.8596 4.9657V6.48943Z"
                    fill="#4A9CFF"></path>
            </g>
            <path d="M49.6052 15.0049H44.7476V16.5287H49.6052V15.0049Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask5_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="44"
                y="15" width="6" height="2">
                <path d="M49.6052 15.0049H44.7476V16.5287H49.6052V15.0049Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask5_524_349)">
                <path d="M61.2944 12.8192H33.0585V18.7118H61.2944V12.8192Z" fill="#4A9CFF"></path>
            </g>
            <path d="M49.0655 9.97662H44.7476V11.5004H49.0655V9.97662Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask6_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="44"
                y="9" width="6" height="3">
                <path d="M49.0655 9.97662H44.7476V11.5004H49.0655V9.97662Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask6_524_349)">
                <path d="M61.0245 7.79095H32.7886V13.6835H61.0245V7.79095Z" fill="#4A9CFF"></path>
            </g>
            <path
                d="M49.6052 6.61938V8.14811H44.7476V11.5003H49.0655V13.029H44.7476V16.5286H49.6052V18.0549H42.6962V6.61938H49.6052Z"
                fill="#1772F8"></path>
            <path d="M49.6052 5.09564H42.6962V6.61937H49.6052V5.09564Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask7_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="42"
                y="5" width="8" height="2">
                <path d="M49.6052 5.09564H42.6962V6.61937H49.6052V5.09564Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask7_524_349)">
                <path d="M60.2674 2.91248H32.034V8.80507H60.2674V2.91248Z" fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask8_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="61"
                y="10" width="2" height="5">
                <path
                    d="M61.5592 14.5478V13.024C61.9264 12.3821 62.1088 11.6427 62.1088 10.7984V12.3221C62.1088 13.1664 61.9264 13.9083 61.5592 14.5478Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask8_524_349)">
                <path
                    d="M62.1088 12.3221C62.1088 13.1664 61.9264 13.9083 61.5592 14.5478V13.024C61.9264 12.3821 62.1088 11.6427 62.1088 10.7984V12.3221Z"
                    fill="#1155B8"></path>
            </g>
            <mask id="svg-icon-logo-long_mask9_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="53"
                y="10" width="9" height="7">
                <path
                    d="M53.5432 12.3221V10.7984C53.5432 11.6427 53.7256 12.3846 54.093 13.024C54.4603 13.666 54.965 14.1581 55.6122 14.5028C56.2594 14.8475 56.9965 15.0199 57.8261 15.0199C58.6557 15.0199 59.3903 14.8475 60.04 14.5028C60.6872 14.1581 61.1944 13.666 61.5592 13.024V14.5478C61.1919 15.1897 60.6872 15.6818 60.04 16.0265C59.3928 16.3713 58.6557 16.5436 57.8261 16.5436C56.9965 16.5436 56.2619 16.3713 55.6122 16.0265C54.965 15.6818 54.4578 15.1897 54.093 14.5478C53.7256 13.9058 53.5432 13.1664 53.5432 12.3221Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask9_524_349)">
                <path
                    d="M61.5592 14.5478C59.7002 17.7002 54.5452 17.0207 53.6807 13.5086C53.5507 12.9816 53.5457 12.5345 53.5432 12.3196V10.7959C53.5432 11.6402 53.7256 12.3821 54.093 13.0215C54.4603 13.6635 54.965 14.1556 55.6122 14.5003C56.2594 14.845 56.9965 15.0174 57.8261 15.0174C58.6557 15.0174 59.3903 14.845 60.04 14.5003C60.6872 14.1556 61.1944 13.6635 61.5592 13.0215V14.5453"
                    fill="#1155B8"></path>
            </g>
            <mask id="svg-icon-logo-long_mask10_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="63"
                y="7" width="2" height="6">
                <path
                    d="M63.3683 9.31469V7.79095C63.9328 8.67772 64.2126 9.67938 64.2126 10.7985V12.3222C64.2126 11.2056 63.9328 10.2039 63.3683 9.31469Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask10_524_349)">
                <path
                    d="M64.2126 12.3222C64.2126 11.2056 63.9328 10.2039 63.3683 9.31719V7.79346C63.9328 8.68022 64.2126 9.68188 64.2126 10.7985V12.3222Z"
                    fill="#4A9CFF"></path>
            </g>
            <path
                d="M63.3683 9.31465C63.933 10.2014 64.2129 11.2031 64.2129 12.3221C64.2129 13.4412 63.933 14.4454 63.3683 15.3371C62.8036 16.2314 62.0315 16.9258 61.057 17.4229C60.0775 17.9225 59.003 18.1698 57.8286 18.1698C56.6542 18.1698 55.5947 17.9225 54.6177 17.4229C53.6382 16.9258 52.8661 16.2289 52.2963 15.3371C51.7241 14.4454 51.4418 13.4387 51.4418 12.3221C51.4418 11.2056 51.7241 10.2039 52.2963 9.31465C52.8661 8.42789 53.6382 7.73596 54.6177 7.23638C55.5947 6.73929 56.6642 6.4895 57.8286 6.4895C58.993 6.4895 60.08 6.73929 61.057 7.23638C62.034 7.73596 62.8036 8.42789 63.3683 9.31465ZM61.5592 14.5478C61.9265 13.9058 62.1089 13.1664 62.1089 12.3221C62.1089 11.4778 61.9265 10.741 61.5592 10.104C61.1919 9.46952 60.6872 8.98243 60.04 8.64271C59.3928 8.30299 58.6557 8.13313 57.8261 8.13313C56.9965 8.13313 56.2619 8.30299 55.6122 8.64271C54.965 8.98243 54.4578 9.46952 54.0929 10.104C53.7256 10.741 53.5432 11.4803 53.5432 12.3221C53.5432 13.1639 53.7256 13.9083 54.0929 14.5478C54.4603 15.1898 54.965 15.6818 55.6122 16.0266C56.2594 16.3713 56.9965 16.5436 57.8261 16.5436C58.6557 16.5436 59.3903 16.3713 60.04 16.0266C60.6872 15.6818 61.1944 15.1898 61.5592 14.5478Z"
                fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask11_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="51"
                y="4" width="13" height="9">
                <path
                    d="M51.4393 12.3221V10.7984C51.4393 9.68183 51.7216 8.68017 52.2939 7.79091C52.8636 6.90414 53.6357 6.21222 54.6152 5.71264C55.5922 5.21555 56.6617 4.96576 57.8261 4.96576C58.9905 4.96576 60.0775 5.21555 61.0545 5.71264C62.0315 6.21222 62.8011 6.90414 63.3658 7.79091V9.31464C62.8011 8.42788 62.029 7.73595 61.0545 7.23637C60.075 6.73928 59.0005 6.48949 57.8261 6.48949C56.6517 6.48949 55.5922 6.73928 54.6152 7.23637C53.6357 7.73595 52.8636 8.42788 52.2939 9.31464C51.7216 10.2014 51.4393 11.2031 51.4393 12.3221Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask11_524_349)">
                <path
                    d="M63.3683 9.31464C62.8036 8.42788 62.0315 7.73595 61.057 7.23637C60.0775 6.73928 59.003 6.48949 57.8286 6.48949C56.6542 6.48949 55.5947 6.73928 54.6177 7.23637C53.6382 7.73595 52.8661 8.42788 52.2963 9.31464C51.7241 10.2014 51.4418 11.2031 51.4418 12.3221V10.7984C51.4418 9.68183 51.7241 8.68017 52.2963 7.79091C52.8661 6.90414 53.6382 6.21222 54.6177 5.71264C55.5947 5.21555 56.6642 4.96576 57.8286 4.96576C58.993 4.96576 60.08 5.21555 61.057 5.71264C62.034 6.21222 62.8036 6.90414 63.3683 7.79091V9.31464Z"
                    fill="#4A9CFF"></path>
            </g>
            <path d="M70.2749 12.3547V10.8309L75.7996 16.5312V18.0549L70.2749 12.3547Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask12_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="70"
                y="10" width="6" height="9">
                <path d="M70.2749 12.3547V10.8309L75.7996 16.5312V18.0549L70.2749 12.3547Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask12_524_349)">
                <path d="M75.7996 16.5312L70.2774 10.8309V12.3547L75.7996 18.0549V16.5312Z" fill="#4A9CFF"></path>
            </g>
            <path
                d="M75.7096 6.6369L70.2749 12.3546L75.7996 18.0549H73.1184L68.2784 12.9466V18.0549H66.2269V6.6369H68.2784V11.8451L73.1359 6.6369H75.7096Z"
                fill="#1772F8"></path>
            <path d="M68.2777 5.11316H66.2269V6.63689H68.2777V5.11316Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask13_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="66"
                y="5" width="3" height="2">
                <path d="M68.2777 5.11316H66.2269V6.63689H68.2777V5.11316Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask13_524_349)">
                <path d="M81.3718 2.92755H53.1359V8.82015H81.3718V2.92755Z" fill="#4A9CFF"></path>
            </g>
            <path d="M68.2784 11.8451V10.3214L73.1359 5.11322V6.63695L68.2784 11.8451Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask14_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="68"
                y="5" width="6" height="7">
                <path d="M68.2784 11.8451V10.3214L73.1359 5.11322V6.63695L68.2784 11.8451Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask14_524_349)">
                <path d="M80.3473 -7.90088L61.067 12.7719V24.8618L80.3473 4.18906V-7.90088Z" fill="#1155B8"></path>
            </g>
            <path d="M75.7088 5.11322H73.1359V6.63695H75.7088V5.11322Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask15_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="73"
                y="5" width="3" height="2">
                <path d="M75.7088 5.11322H73.1359V6.63695H75.7088V5.11322Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask15_524_349)">
                <path d="M88.5407 2.92761H60.3073V8.82021H88.5407V2.92761Z" fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask16_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="87"
                y="10" width="1" height="5">
                <path
                    d="M87.0515 14.5478V13.024C87.4162 12.3821 87.601 11.6427 87.601 10.7984V12.3221C87.601 13.1664 87.4162 13.9083 87.0515 14.5478Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask16_524_349)">
                <path
                    d="M87.601 12.3221C87.601 13.1664 87.4162 13.9083 87.0515 14.5478V13.024C87.4162 12.3821 87.601 11.6427 87.601 10.7984V12.3221Z"
                    fill="#1155B8"></path>
            </g>
            <mask id="svg-icon-logo-long_mask17_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="79"
                y="10" width="9" height="7">
                <path
                    d="M79.038 12.3221V10.7984C79.038 11.6427 79.2204 12.3846 79.5877 13.024C79.9525 13.666 80.4598 14.1581 81.107 14.5028C81.7541 14.8475 82.4913 15.0199 83.3208 15.0199C84.1504 15.0199 84.8851 14.8475 85.5347 14.5028C86.1819 14.1581 86.6892 13.666 87.054 13.024V14.5478C86.6867 15.1897 86.1819 15.6818 85.5347 16.0265C84.8876 16.3713 84.1504 16.5436 83.3208 16.5436C82.4913 16.5436 81.7566 16.3713 81.107 16.0265C80.4598 15.6818 79.95 15.1897 79.5877 14.5478C79.2204 13.9058 79.038 13.1664 79.038 12.3221Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask17_524_349)">
                <path
                    d="M87.0515 14.5478C86.6842 15.1872 86.1794 15.6818 85.5322 16.0265C84.8851 16.3713 84.1479 16.5436 83.3183 16.5436C82.4888 16.5436 81.7541 16.3713 81.1045 16.0265C80.4573 15.6818 79.9475 15.1897 79.5852 14.5478C79.2179 13.9058 79.0355 13.1664 79.0355 12.3221C79.0355 12.2772 79.0355 12.2147 79.0355 12.1698V10.7984C79.0355 11.6427 79.2179 12.3846 79.5852 13.024C79.95 13.666 80.4573 14.1581 81.1045 14.5028C81.7516 14.8475 82.4888 15.0199 83.3183 15.0199C84.1479 15.0199 84.8826 14.8475 85.5322 14.5028C86.1794 14.1581 86.6867 13.666 87.0515 13.024V14.5478Z"
                    fill="#1155B8"></path>
            </g>
            <mask id="svg-icon-logo-long_mask18_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="88"
                y="7" width="2" height="6">
                <path
                    d="M88.8606 9.31469V7.79095C89.4226 8.67772 89.7049 9.67938 89.7049 10.7985V12.3222C89.7049 11.2056 89.4226 10.2039 88.8606 9.31469Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask18_524_349)">
                <path
                    d="M89.7049 12.3222C89.7049 11.2056 89.4226 10.2039 88.8606 9.31719V7.79346C89.4226 8.68022 89.7049 9.68188 89.7049 10.7985V12.3222Z"
                    fill="#4A9CFF"></path>
            </g>
            <path
                d="M88.8606 9.31465C89.4228 10.2014 89.7051 11.2031 89.7051 12.3221C89.7051 13.4412 89.4228 14.4454 88.8606 15.3371C88.2959 16.2314 87.5237 16.9258 86.5492 17.4229C85.5697 17.9225 84.4928 18.1698 83.3208 18.1698C82.1489 18.1698 81.0845 17.9225 80.1099 17.4229C79.1304 16.9258 78.3583 16.2289 77.7886 15.3371C77.2164 14.4454 76.934 13.4387 76.934 12.3221C76.934 11.2056 77.2164 10.2039 77.7886 9.31465C78.3583 8.42789 79.1304 7.73596 80.1099 7.23638C81.087 6.73929 82.1564 6.4895 83.3208 6.4895C84.4853 6.4895 85.5722 6.73929 86.5492 7.23638C87.5262 7.73596 88.2959 8.42789 88.8606 9.31465ZM87.0515 14.5478C87.4163 13.9058 87.6012 13.1664 87.6012 12.3221C87.6012 11.4778 87.4163 10.741 87.0515 10.104C86.6842 9.46952 86.1794 8.98243 85.5322 8.64271C84.8851 8.30299 84.1479 8.13313 83.3183 8.13313C82.4888 8.13313 81.7541 8.30299 81.1044 8.64271C80.4573 8.98243 79.9475 9.46952 79.5852 10.104C79.2179 10.741 79.0355 11.4803 79.0355 12.3221C79.0355 13.1639 79.2179 13.9083 79.5852 14.5478C79.95 15.1898 80.4573 15.6818 81.1044 16.0266C81.7516 16.3713 82.4888 16.5436 83.3183 16.5436C84.1479 16.5436 84.8826 16.3713 85.5322 16.0266C86.1794 15.6818 86.6867 15.1898 87.0515 14.5478Z"
                fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask19_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="76"
                y="4" width="13" height="9">
                <path
                    d="M76.9315 12.3221V10.7984C76.9315 9.68183 77.2139 8.68017 77.7861 7.79091C78.3558 6.90414 79.1279 6.21222 80.1075 5.71264C81.0845 5.21555 82.1539 4.96576 83.3183 4.96576C84.4828 4.96576 85.5697 5.21555 86.5467 5.71264C87.5237 6.21222 88.2934 6.90414 88.8581 7.79091V9.31464C88.2934 8.42788 87.5212 7.73595 86.5467 7.23637C85.5672 6.73928 84.4903 6.48949 83.3183 6.48949C82.1464 6.48949 81.082 6.73928 80.1075 7.23637C79.1279 7.73595 78.3558 8.42788 77.7861 9.31464C77.2139 10.2014 76.9315 11.2031 76.9315 12.3221Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask19_524_349)">
                <path
                    d="M88.8606 9.31464C88.2959 8.42788 87.5237 7.73595 86.5492 7.23637C85.5697 6.73928 84.4928 6.48949 83.3208 6.48949C82.1489 6.48949 81.0845 6.73928 80.1099 7.23637C79.1304 7.73595 78.3583 8.42788 77.7886 9.31464C77.2164 10.2014 76.934 11.2031 76.934 12.3221V10.7984C76.934 9.68183 77.2164 8.68017 77.7886 7.79091C78.3583 6.90414 79.1304 6.21222 80.1099 5.71264C81.087 5.21555 82.1564 4.96576 83.3208 4.96576C84.4853 4.96576 85.5722 5.21555 86.5492 5.71264C87.5262 6.21222 88.2959 6.90414 88.8606 7.79091V9.31464Z"
                    fill="#4A9CFF"></path>
            </g>
            <path d="M97.5687 13.3239V11.8002L100.662 16.5312V18.055L97.5687 13.3239Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask20_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="97"
                y="11" width="4" height="8">
                <path d="M97.5687 13.3239V11.8002L100.662 16.5312V18.055L97.5687 13.3239Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask20_524_349)">
                <path d="M106.354 23.0508L91.8766 0.914246V6.80684L106.354 28.9434V23.0508Z" fill="#4A9CFF"></path>
            </g>
            <path d="M96.0387 10.4688H93.7731V11.9925H96.0387V10.4688Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask21_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="93"
                y="10" width="4" height="2">
                <path d="M96.0387 10.4688H93.7731V11.9925H96.0387V10.4688Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask21_524_349)">
                <path d="M109.023 8.28552H80.7896V14.1781H109.023V8.28552Z" fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask22_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="96"
                y="8" width="3" height="4">
                <path
                    d="M96.0395 11.9925V10.4688C96.8063 10.4688 97.3834 10.2939 97.7755 9.94422C98.1652 9.59451 98.36 9.1224 98.36 8.5304V10.0541C98.36 10.6461 98.1652 11.1182 97.7755 11.468C97.3834 11.8202 96.8063 11.9925 96.0395 11.9925Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask22_524_349)">
                <path
                    d="M98.36 10.0541C98.36 10.6461 98.1652 11.1182 97.7755 11.468C97.3834 11.8202 96.8063 11.9925 96.0395 11.9925V10.4688C96.8063 10.4688 97.3834 10.2939 97.7755 9.94422C98.1652 9.59451 98.36 9.1224 98.36 8.5304V10.0541Z"
                    fill="#4A9CFF"></path>
            </g>
            <path
                d="M97.5687 13.3238L100.662 18.0549H98.2159L95.3373 13.4862H93.7731V18.0549H91.7216V6.6369H96.0395C96.9965 6.6369 97.8111 6.79177 98.4783 7.09652C99.1429 7.40376 99.6402 7.81592 99.9725 8.32799C100.3 8.84256 100.467 9.41958 100.467 10.0541C100.467 10.7984 100.23 11.4754 99.7576 12.0824C99.2829 12.6894 98.5532 13.104 97.5712 13.3238H97.5687ZM93.7731 11.9924H96.0395C96.8066 11.9924 97.3838 11.8176 97.7761 11.4679C98.1659 11.1182 98.3608 10.6461 98.3608 10.0541C98.3608 9.46205 98.1684 8.99993 97.7861 8.66521C97.4013 8.33299 96.8191 8.16313 96.042 8.16313H93.7756V11.9924"
                fill="#1772F8"></path>
            <path d="M96.0395 5.11316H91.7216V6.63689H96.0395V5.11316Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask23_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="91"
                y="5" width="6" height="2">
                <path d="M96.0395 5.11316H91.7216V6.63689H96.0395V5.11316Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask23_524_349)">
                <path d="M107.998 2.92755H79.7626V8.82015H107.998V2.92755Z" fill="#4A9CFF"></path>
            </g>
            <mask id="svg-icon-logo-long_mask24_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="96"
                y="5" width="5" height="6">
                <path
                    d="M96.0395 6.63695V5.11322C96.9965 5.11322 97.8111 5.26809 98.4783 5.57284C99.1429 5.88008 99.6402 6.29224 99.9725 6.80431C100.3 7.31888 100.467 7.8959 100.467 8.53038V10.0541C100.467 9.41963 100.3 8.84511 99.9725 8.32804C99.6427 7.81347 99.1454 7.40381 98.4783 7.09657C97.8136 6.78933 96.999 6.63695 96.0395 6.63695Z"
                    fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask24_524_349)">
                <path
                    d="M100.465 10.0542C100.465 9.4197 100.297 8.84517 99.97 8.32811C99.6402 7.81353 99.1429 7.40387 98.4758 7.09663C97.8111 6.78939 96.9965 6.63701 96.037 6.63701V5.11328C96.994 5.11328 97.8086 5.26815 98.4758 5.5729C99.1404 5.88014 99.6377 6.2923 99.97 6.80437C100.297 7.31895 100.465 7.89596 100.465 8.53044V10.0542Z"
                    fill="#4A9CFF"></path>
            </g>
            <path d="M110 15.0049H105.142V16.5287H110V15.0049Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask25_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="105"
                y="15" width="5" height="2">
                <path d="M110 15.0049H105.142V16.5287H110V15.0049Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask25_524_349)">
                <path d="M121.689 12.8192H93.4558V18.7118H121.689V12.8192Z" fill="#4A9CFF"></path>
            </g>
            <path d="M109.46 9.97662H105.142V11.5004H109.46V9.97662Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask26_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="105"
                y="9" width="5" height="3">
                <path d="M109.46 9.97662H105.142V11.5004H109.46V9.97662Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask26_524_349)">
                <path d="M121.419 7.79095H93.1859V13.6835H121.419V7.79095Z" fill="#4A9CFF"></path>
            </g>
            <path
                d="M110 6.61938V8.14811H105.142V11.5003H109.46V13.029H105.142V16.5286H110V18.0549H103.091V6.61938H110Z"
                fill="#1772F8"></path>
            <path d="M110 5.09564H103.091V6.61937H110V5.09564Z" fill="#1772F8"></path>
            <mask id="svg-icon-logo-long_mask27_524_349" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="103"
                y="5" width="7" height="2">
                <path d="M110 5.09564H103.091V6.61937H110V5.09564Z" fill="white"></path>
            </mask>
            <g mask="url(#svg-icon-logo-long_mask27_524_349)">
                <path d="M120.665 2.91248H92.4288V8.80507H120.665V2.91248Z" fill="#4A9CFF"></path>
            </g>
            <path d="M14.4528 1.3239L10.4248 5.46795L4.80009 4.14155L8.82808 0L14.4528 1.3239Z" fill="#125BC5"></path>
            <path d="M10.4248 5.46788L12.3313 11.9924L8.36831 16.3588L4.80009 4.14148L10.4248 5.46788Z" fill="#1772F8">
            </path>
            <path d="M13.2234 18.2248L7.5987 16.8984L3.57071 21.0424L9.1954 22.3663L13.2234 18.2248Z" fill="#00C9FF">
            </path>
            <path d="M7.5987 16.8984L4.05797 4.78101L0 8.82514L3.57072 21.0425L7.5987 16.8984Z"
                fill="url(#svg-icon-logo-long_paint0_linear_524_349)"></path>
            <path d="M11.4393 5.7627L17.064 7.0891L21.0919 2.94505L15.4673 1.61865L11.4393 5.7627Z" fill="#00C9FF">
            </path>
            <path d="M17.064 7.08906L20.6047 19.204L24.6627 15.1623L21.0919 2.94501L17.064 7.08906Z"
                fill="url(#svg-icon-logo-long_paint1_linear_524_349)"></path>
            <path d="M10.1299 22.6736L14.1579 18.5295L19.7826 19.8559L15.7546 24L10.1299 22.6736Z" fill="#125BC5">
            </path>
            <path d="M14.1579 18.5295L12.2514 12.005L16.2119 7.63861L19.7826 19.8559L14.1579 18.5295Z" fill="#1772F8">
            </path>
            <defs>
                <linearGradient id="svg-icon-logo-long_paint0_linear_524_349" x1="1.59999" y1="5.49359" x2="5.9361"
                    y2="20.3461" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00BFFF"></stop>
                    <stop offset="1" stop-color="#1772F8"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-logo-long_paint1_linear_524_349" x1="23.0157" y1="18.4825" x2="18.6796"
                    y2="3.63" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00BFFF"></stop>
                    <stop offset="1" stop-color="#1155B8"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-male">
            <circle cx="10" cy="10" r="10" fill="currentColor"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.5986 6.19876H12.9396L11.8756 7.256C11.1578 6.71865 10.2664 6.40039 9.30078 6.40039C6.92553 6.40039 5 8.32592 5 10.7012C5 13.0764 6.92553 15.002 9.30078 15.002C11.676 15.002 13.6016 13.0764 13.6016 10.7012C13.6016 9.7243 13.2759 8.82349 12.7271 8.10142L13.7982 7.03719V7.4006C13.7982 7.73247 14.0672 8.0015 14.3991 8.0015C14.731 8.0015 15 7.73247 15 7.4006V5.60239L15 5.60126L15 5.60013C15 5.43534 14.9334 5.2861 14.8257 5.17785L14.822 5.17415C14.6862 5.03749 14.501 4.97988 14.3235 5.0015L12.5986 5.0015C12.268 5.0015 12 5.26951 12 5.60013C12 5.93074 12.268 6.19876 12.5986 6.19876ZM12.2016 10.7012C12.2016 12.3032 10.9028 13.602 9.30078 13.602C7.69872 13.602 6.4 12.3032 6.4 10.7012C6.4 9.09911 7.69872 7.80039 9.30078 7.80039C10.9028 7.80039 12.2016 9.09911 12.2016 10.7012Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="none" id="svg-icon-menu-dot">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2ZM11 2C11 3.10457 10.1046 4 9 4C7.89543 4 7 3.10457 7 2C7 0.895431 7.89543 0 9 0C10.1046 0 11 0.895431 11 2ZM16 4C17.1046 4 18 3.10457 18 2C18 0.895431 17.1046 0 16 0C14.8954 0 14 0.895431 14 2C14 3.10457 14.8954 4 16 4ZM4 9C4 10.1046 3.10457 11 2 11C0.895431 11 0 10.1046 0 9C0 7.89543 0.895431 7 2 7C3.10457 7 4 7.89543 4 9ZM9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.89543 7 7 7.89543 7 9C7 10.1046 7.89543 11 9 11ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9ZM2 18C3.10457 18 4 17.1046 4 16C4 14.8954 3.10457 14 2 14C0.895431 14 0 14.8954 0 16C0 17.1046 0.895431 18 2 18ZM11 16C11 17.1046 10.1046 18 9 18C7.89543 18 7 17.1046 7 16C7 14.8954 7.89543 14 9 14C10.1046 14 11 14.8954 11 16ZM16 18C17.1046 18 18 17.1046 18 16C18 14.8954 17.1046 14 16 14C14.8954 14 14 14.8954 14 16C14 17.1046 14.8954 18 16 18Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-people-all">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <path
                d="M20.8083 16.1536C20.715 16.1121 19.0834 15.4 17.253 15.0128C18.195 14.4096 18.7653 13.3657 18.7653 12.244V10.2891C18.7653 8.47605 17.2979 7 15.4935 7C13.689 7 12.2216 8.47605 12.2216 10.2891V12.2457C12.2216 13.3501 12.7678 14.3284 13.6009 14.923C11.5873 15.2721 9.67744 16.1086 9.58929 16.1484C9.0483 16.3731 8.63867 16.9849 8.63867 17.5743V19.9353H8.64904C8.72855 20.5437 9.24707 21 9.85892 21H20.5248C21.0589 21 21.536 20.6491 21.7123 20.1272L21.7434 20.0338V17.5743C21.7434 16.9798 21.3337 16.3662 20.8083 16.1536Z"
                fill="#1772F8" stroke="#1772F8" stroke-width="0.2"></path>
            <path
                d="M11.1776 14.723C11.1966 14.723 11.2139 14.7282 11.2329 14.7282C11.5613 14.7282 11.8292 14.4603 11.8292 14.1301C11.8292 13.8 11.563 13.5321 11.2329 13.5321C10.526 13.5304 9.9556 12.9566 9.9556 12.2479V10.6733C9.9556 9.96643 10.5294 9.39087 11.2329 9.39087C11.5613 9.39087 11.8292 9.12297 11.8292 8.79285C11.8292 8.46273 11.563 8.19482 11.2329 8.19482C9.86918 8.19655 8.76474 9.30618 8.76474 10.6733V12.2479C8.76474 12.8598 8.99461 13.4128 9.36103 13.8449C8.19437 14.2079 7.17289 14.7748 6.98622 14.882C6.56103 15.0842 6.25684 15.5682 6.25684 16.0487V17.7649C6.25684 18.0951 6.52301 18.363 6.85313 18.363C7.18153 18.363 7.44943 18.0951 7.44943 17.7649V16.0504C7.45634 16.0175 7.4719 15.9882 7.49264 15.964C7.51511 15.9536 7.53758 15.9432 7.56005 15.9294C8.12696 15.5975 9.86573 14.7385 11.0929 14.7385C11.1205 14.7403 11.1482 14.7282 11.1776 14.723Z"
                fill="#10BB88" stroke="#10BB88" stroke-width="0.2"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" fill="none" id="svg-icon-people-new">
            <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#E7EBF1"></rect>
            <path
                d="M18.613 15.6536C18.5197 15.6121 16.8881 14.9 15.0577 14.5128C15.9997 13.9096 16.57 12.8657 16.57 11.744V9.78914C16.57 7.97605 15.1026 6.5 13.2982 6.5C11.4937 6.5 10.0263 7.97605 10.0263 9.78914V11.7457C10.0263 12.8501 10.5725 13.8284 11.4056 14.423C9.392 14.7721 7.48212 15.6086 7.39398 15.6484C6.85299 15.8731 6.44336 16.4849 6.44336 17.0743V19.4353H6.45373C6.53324 20.0437 7.05175 20.5 7.66361 20.5H18.3295C18.8636 20.5 19.3406 20.1491 19.5169 19.6272L19.5481 19.5338V17.0743C19.5481 16.4798 19.1384 15.8662 18.613 15.6536Z"
                fill="#1772F8" stroke="#1772F8" stroke-width="0.2"></path>
            <circle cx="17.0566" cy="17" r="4.5" fill="#10BB88"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M17.0566 14.5C16.7805 14.5 16.5566 14.7239 16.5566 15V16.5L15.0566 16.5C14.7805 16.5 14.5566 16.7239 14.5566 17C14.5566 17.2761 14.7805 17.5 15.0566 17.5H16.5566V19C16.5566 19.2761 16.7805 19.5 17.0566 19.5C17.3328 19.5 17.5566 19.2761 17.5566 19V17.5H19.0566C19.3328 17.5 19.5566 17.2761 19.5566 17C19.5566 16.7239 19.3328 16.5 19.0566 16.5L17.5566 16.5V15C17.5566 14.7239 17.3328 14.5 17.0566 14.5Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="svg-icon-plus-circle">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM7 5C7 4.44772 7.44772 4 8 4C8.55228 4 9 4.44772 9 5V7H11C11.5523 7 12 7.44772 12 8C12 8.55228 11.5523 9 11 9H9V11C9 11.5523 8.55228 12 8 12C7.44772 12 7 11.5523 7 11V9H5C4.44772 9 4 8.55228 4 8C4 7.44772 4.44772 7 5 7H7V5Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-question">
            <path
                d="M23.1 13C23.1 18.5781 18.5781 23.1 13 23.1H12.9945H12.9888H12.9831H12.9773H12.9714H12.9653H12.9593H12.9531H12.9468H12.9404H12.934H12.9274H12.9208H12.914H12.9072H12.9003H12.8933H12.8862H12.8791H12.8718H12.8645H12.857H12.8495H12.8419H12.8342H12.8264H12.8185H12.8106H12.8025H12.7944H12.7862H12.7779H12.7695H12.7611H12.7525H12.7439H12.7352H12.7264H12.7175H12.7085H12.6995H12.6904H12.6811H12.6719H12.6625H12.653H12.6435H12.6339H12.6242H12.6144H12.6045H12.5946H12.5846H12.5745H12.5643H12.5541H12.5437H12.5333H12.5228H12.5123H12.5016H12.4909H12.4801H12.4692H12.4583H12.4473H12.4362H12.425H12.4137H12.4024H12.391H12.3795H12.368H12.3564H12.3447H12.3329H12.321H12.3091H12.2971H12.2851H12.2729H12.2607H12.2485H12.2361H12.2237H12.2112H12.1986H12.186H12.1733H12.1605H12.1477H12.1348H12.1218H12.1088H12.0956H12.0825H12.0692H12.0559H12.0425H12.0291H12.0155H12.0019H11.9883H11.9746H11.9608H11.9469H11.933H11.919H11.905H11.8909H11.8767H11.8625H11.8482H11.8338H11.8194H11.8049H11.7903H11.7757H11.761H11.7463H11.7315H11.7166H11.7017H11.6867H11.6716H11.6565H11.6414H11.6261H11.6108H11.5955H11.5801H11.5646H11.5491H11.5335H11.5179H11.5022H11.4864H11.4706H11.4547H11.4388H11.4228H11.4068H11.3907H11.3745H11.3583H11.3421H11.3257H11.3094H11.2929H11.2765H11.2599H11.2433H11.2267H11.21H11.1932H11.1764H11.1596H11.1427H11.1257H11.1087H11.0917H11.0746H11.0574H11.0402H11.0229H11.0056H10.9882H10.9708H10.9534H10.9359H10.9183H10.9007H10.883H10.8653H10.8476H10.8298H10.8119H10.794H10.7761H10.7581H10.7401H10.722H10.7039H10.6857H10.6675H10.6493H10.6309H10.6126H10.5942H10.5758H10.5573H10.5388H10.5202H10.5016H10.483H10.4643H10.4455H10.4268H10.4079H10.3891H10.3702H10.3512H10.3323H10.3132H10.2942H10.2751H10.2559H10.2368H10.2175H10.1983H10.179H10.1597H10.1403H10.1209H10.1014H10.082H10.0624H10.0429H10.0233H10.0037H9.984H9.9643H9.94457H9.9248H9.905H9.88516H9.86529H9.84538H9.82544H9.80547H9.78546H9.76542H9.74535H9.72525H9.70511H9.68495H9.66475H9.64452H9.62425H9.60396H9.58364H9.56328H9.5429H9.52249H9.50205H9.48157H9.46107H9.44054H9.41999H9.3994H9.37879H9.35814H9.33748H9.31678H9.29606H9.27531H9.25453H9.23373H9.2129H9.19205H9.17117H9.15026H9.12933H9.10838H9.0874H9.0664H9.04538H9.02433H9.00325H8.98216H8.96104H8.9399H8.91874H8.89755H8.87635H8.85512H8.83387H8.8126H8.79131H8.77H8.74867H8.72732H8.70595H8.68456H8.66315H8.64172H8.62027H8.59881H8.57733H8.55583H8.53431H8.51277H8.49122H8.46965H8.44806H8.42646H8.40484H8.38321H8.36156H8.3399H8.31822H8.29653H8.27482H8.25309H8.23136H8.20961H8.18784H8.16607H8.14428H8.12248H8.10066H8.07884H8.057H8.03515H8.01329H7.99141H7.96953H7.94764H7.92573H7.90382H7.8819H7.85996H7.83802H7.81607H7.79411H7.77214H7.75017H7.72818H7.70619H7.68419H7.66218H7.64017H7.61815H7.59613H7.57409H7.55205H7.53001H7.50796H7.48591H7.46385H7.44178H7.41972H7.39764H7.37557H7.35349H7.33141H7.30932H7.28723H7.26514H7.24305H7.22095H7.19886H7.17676H7.15466H7.13256H7.11046H7.08836H7.06626H7.04416H7.02205H6.99995H6.97786H6.95576H6.93366H6.91157H6.88947H6.86738H6.84529H6.82321H6.80113H6.77905H6.75697H6.7349H6.71283H6.69077H6.66871H6.64665H6.6246H6.60256H6.58052H6.55849H6.53646H6.51444H6.49243H6.47042H6.44842H6.42643H6.40445H6.38247H6.3605H6.33854H6.31659H6.29465H6.27272H6.25079H6.22888H6.20698H6.18508H6.1632H6.14133H6.11947H6.09762H6.07578H6.05395H6.03214H6.01034H5.98855H5.96677H5.94501H5.92326H5.90152H5.8798H5.85809H5.8364H5.81472H5.79305H5.77141H5.74977H5.72815H5.70655H5.68497H5.6634H5.64185H5.62031H5.59879H5.57729H5.55581H5.53434H5.5129H5.49147H5.47006H5.44867H5.4273H5.40595H5.38462H5.36331H5.34202H5.32075H5.2995H5.27827H5.25706H5.23588H5.21472H5.19358H5.17246H5.15136H5.13029H5.10924H5.09086C5.35174 22.9387 5.59353 22.7703 5.79547 22.5988C6.01765 22.4101 6.29673 22.1319 6.43559 21.7682C6.51206 21.5678 6.55526 21.3163 6.49483 21.0425C6.43386 20.7664 6.28524 20.5484 6.11378 20.3886C4.13525 18.5437 2.9 15.9168 2.9 13C2.9 7.42192 7.42192 2.9 13 2.9C18.5781 2.9 23.1 7.42192 23.1 13Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.4001 11.0001C11.4001 10.1164 12.1164 9.4001 13.0001 9.4001C13.8838 9.4001 14.6001 10.1164 14.6001 11.0001C14.6001 11.8838 13.8838 12.6001 13.0001 12.6001H12.1001V13.5001V15.0001C12.1001 15.4972 12.503 15.9001 13.0001 15.9001C13.4972 15.9001 13.9001 15.4972 13.9001 15.0001V14.2797C15.3411 13.8852 16.4001 12.5663 16.4001 11.0001C16.4001 9.12233 14.8779 7.6001 13.0001 7.6001C11.1223 7.6001 9.6001 9.12233 9.6001 11.0001C9.6001 11.4972 10.003 11.9001 10.5001 11.9001C10.9972 11.9001 11.4001 11.4972 11.4001 11.0001ZM13.0002 18.3001C13.4973 18.3001 13.9002 17.8972 13.9002 17.4001C13.9002 16.903 13.4973 16.5001 13.0002 16.5001C12.5031 16.5001 12.1002 16.903 12.1002 17.4001C12.1002 17.8972 12.5031 18.3001 13.0002 18.3001Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" fill="none" id="svg-icon-quotes">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11 19.4C15.6392 19.4 19.4 15.6392 19.4 11C19.4 6.36081 15.6392 2.6 11 2.6C6.36081 2.6 2.6 6.36081 2.6 11C2.6 12.4809 2.9832 13.8722 3.65586 15.0803L6.41849 12.3177L6.41654 12.3158L7.54822 11.1841L7.55017 11.186L7.55554 11.1807L8.6799 12.305L8.67453 12.3104L9.4624 13.0983L12.1745 10.3862L12.1664 10.3854L10.3718 8.14624H16.6209L14.41 10.405L14.4123 10.4073L9.46257 15.3571L9.46014 15.3546L9.45777 15.357L7.54285 13.4421L3.67795 17.307L3.67581 17.3048L3.43754 17.5431C1.91886 15.7894 1 13.502 1 11C1 5.47715 5.47715 1 11 1C16.5228 1 21 5.47715 21 11C21 16.5228 16.5228 21 11 21C8.84485 21 6.84893 20.3182 5.21614 19.1586L6.36692 18.0079C7.69498 18.8876 9.28765 19.4 11 19.4Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-radio">
            <circle cx="10" cy="10" r="10" fill="#0A71F7"></circle>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M14.8408 6.91423C14.4503 6.52371 13.8171 6.52371 13.4266 6.91423L9.41739 10.9234L7.37401 8.88005C6.98348 8.48953 6.35032 8.48953 5.95979 8.88005L5.80266 9.03719C5.41213 9.42771 5.41213 10.0609 5.80266 10.4514L8.70965 13.3584C9.03491 13.6836 9.52846 13.738 9.90998 13.5215C9.98762 13.4778 10.0607 13.4229 10.1268 13.3568L14.9979 8.48558C15.3885 8.09505 15.3885 7.46189 14.9979 7.07137L14.8408 6.91423Z"
                fill="white"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-recharge">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M17 3.6H6C3.56995 3.6 1.6 5.56995 1.6 8V15C1.6 15.7732 2.2268 16.4 3 16.4H8.99714L9.0002 16.4C9.44202 16.4 9.8002 16.7582 9.8002 17.2C9.8002 17.6418 9.44202 18 9.0002 18L9 18H3C1.34315 18 0 16.6569 0 15V8C0 4.68629 2.68629 2 6 2H17C18.6569 2 20 3.34315 20 5V11L19.9999 11C19.9999 11.4418 19.6417 11.8 19.1999 11.8C18.7581 11.8 18.3999 11.4418 18.3999 11L18.4 10.9874V5C18.4 4.2268 17.7732 3.6 17 3.6ZM4.8 7C4.35817 7 4 7.35817 4 7.8C4 8.24183 4.35817 8.6 4.8 8.6H9.2C9.64183 8.6 10 8.24183 10 7.8C10 7.35817 9.64183 7 9.2 7H4.8Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.7784 17.9997C12.3484 17.9862 12.0039 17.6334 12.0039 17.2C12.0039 16.9721 12.0992 16.7665 12.2521 16.6208L15.3451 13.5278C15.6576 13.2154 16.1641 13.2154 16.4765 13.5278C16.7889 13.8402 16.7889 14.3467 16.4765 14.6591L14.7356 16.4H19.2C19.6418 16.4 20 16.7582 20 17.2C20 17.6419 19.6418 18 19.2 18H12.8092H12.8039C12.7954 18 12.7869 17.9999 12.7784 17.9997Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-record">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4 1.8H13.7778C14.9928 1.8 15.9778 2.78497 15.9778 4V5.55556H17.7778V4C17.7778 1.79086 15.9869 0 13.7778 0H4C1.79086 0 0 1.79086 0 4V14.8889C0 17.098 1.79086 18.8889 4 18.8889H4.44444V17.0889H4C2.78497 17.0889 1.8 16.1039 1.8 14.8889V4C1.8 2.78497 2.78497 1.8 4 1.8Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M18.1998 13.3334C18.1998 16.0212 16.021 18.2001 13.3332 18.2001C10.6454 18.2001 8.4665 16.0212 8.4665 13.3334C8.4665 10.6456 10.6454 8.46675 13.3332 8.46675C16.021 8.46675 18.1998 10.6456 18.1998 13.3334ZM19.9998 13.3334C19.9998 17.0153 17.0151 20.0001 13.3332 20.0001C9.65127 20.0001 6.6665 17.0153 6.6665 13.3334C6.6665 9.65152 9.65127 6.66675 13.3332 6.66675C17.0151 6.66675 19.9998 9.65152 19.9998 13.3334ZM15.6117 12.4691L14.3389 11.1963L11.1962 14.339L12.469 15.6118L15.6117 12.4691Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" fill="none" id="svg-icon-robot">
            <path
                d="M3.8 7.30439H16C17.215 7.30439 18.2 8.28937 18.2 9.50439V20.2044H6C4.78497 20.2044 3.8 19.2194 3.8 18.0044V7.30439Z"
                stroke="currentColor" stroke-width="1.6"></path>
            <rect x="1" y="11" width="1.6" height="4" fill="currentColor"></rect>
            <rect x="19.3906" y="11" width="1.60938" height="4" fill="currentColor"></rect>
            <path d="M6.54523 15.9552L9.80618 12.9007L12.3394 14.9876L15.4548 11.5536" stroke="currentColor"
                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="11" cy="3.5" r="1.7" stroke="currentColor" stroke-width="1.6"></circle>
            <rect x="10.2" y="5" width="1.6" height="2" fill="currentColor"></rect>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 21" fill="none" id="svg-icon-rules-task">
            <path d="M4.73809 6.28729H1.5V15.0571C1.5 16.9945 3.19137 18.5651 5.27778 18.5651H7.16667"
                stroke="currentColor" stroke-width="1.8"></path>
            <path
                d="M4.33325 1.56506H15.6666C17.2314 1.56506 18.4999 2.76683 18.4999 4.24927V12.4936V18.5651H7.16659C5.60178 18.5651 4.33325 17.3633 4.33325 15.8809V1.56506Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path d="M8.11108 5.34283H13.7778" stroke="#1772F8" stroke-width="1.8" stroke-linecap="square"></path>
            <path d="M8.11108 9.12061H10.9444" stroke="#1772F8" stroke-width="1.8" stroke-linecap="square"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-rules">
            <rect x="8.82129" y="6.49805" width="9.28571" height="1.8" rx="0.9" fill="#1772F8"></rect>
            <rect x="8.82129" y="10.2124" width="6.5" height="1.8" rx="0.9" fill="#1772F8"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M13.5239 18.5942V19.0586C13.5239 21.7227 15.5638 23.9103 18.1668 24.1449V22.3334C16.5601 22.1076 15.3239 20.7275 15.3239 19.0586V18.5942H13.5239Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6.03558 18.5124H13.5213V18.827H15.3213V18.4081C15.3213 17.4716 14.5621 16.7124 13.6256 16.7124H6.03558C3.98423 16.7124 2.32129 18.3753 2.32129 20.4267C2.32129 22.478 3.98423 24.141 6.03558 24.141H13.5213H15.3213V24.1409H13.4641V22.341H6.03558C4.97834 22.341 4.12129 21.4839 4.12129 20.4267C4.12129 19.3695 4.97834 18.5124 6.03558 18.5124Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.10693 3.65498H19.6784C20.8934 3.65498 21.8784 4.63995 21.8784 5.85498V20.1407C21.8784 21.3557 20.8934 22.3407 19.6784 22.3407H9.74979V24.1407H19.6784C21.8875 24.1407 23.6784 22.3498 23.6784 20.1407V5.85498C23.6784 3.64584 21.8875 1.85498 19.6784 1.85498H9.10693C6.89779 1.85498 5.10693 3.64584 5.10693 5.85498V17.6409H6.90693V5.85498C6.90693 4.63995 7.89191 3.65498 9.10693 3.65498Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-security">
            <path
                d="M2.90001 8.68538C2.90001 7.42661 3.66118 6.29282 4.82625 5.8162L11.8262 2.95257C12.5785 2.64483 13.4215 2.64483 14.1738 2.95257L21.1738 5.81621C22.3391 6.29295 23.1 7.42567 23.1 8.68411V8.69277V8.70144V8.71013V8.71882V8.72752V8.73623V8.74495V8.75369V8.76243V8.77118V8.77994V8.78871V8.79749V8.80629V8.81509V8.8239V8.83272V8.84155V8.85039V8.85924V8.8681V8.87697V8.88585V8.89474V8.90364V8.91254V8.92146V8.93039V8.93933V8.94827V8.95723V8.96619V8.97517V8.98415V8.99315V9.00215V9.01116V9.02018V9.02922V9.03826V9.04731V9.05637V9.06543V9.07451V9.0836V9.0927V9.1018V9.11092V9.12004V9.12917V9.13831V9.14747V9.15663V9.1658V9.17497V9.18416V9.19336V9.20256V9.21178V9.221V9.23023V9.23948V9.24873V9.25798V9.26725V9.27653V9.28581V9.29511V9.30441V9.31372V9.32304V9.33237V9.34171V9.35106V9.36041V9.36978V9.37915V9.38853V9.39792V9.40732V9.41673V9.42614V9.43556V9.445V9.45444V9.46389V9.47334V9.48281V9.49228V9.50177V9.51126V9.52076V9.53026V9.53978V9.5493V9.55884V9.56838V9.57793V9.58748V9.59705V9.60662V9.6162V9.62579V9.63539V9.64499V9.65461V9.66423V9.67386V9.6835V9.69314V9.7028V9.71246V9.72213V9.7318V9.74149V9.75118V9.76088V9.77059V9.78031V9.79003V9.79976V9.8095V9.81925V9.82901V9.83877V9.84854V9.85832V9.8681V9.8779V9.8877V9.8975V9.90732V9.91714V9.92697V9.93681V9.94666V9.95651V9.96637V9.97624V9.98611V9.996V10.0059V10.0158V10.0257V10.0356V10.0455V10.0554V10.0654V10.0753V10.0853V10.0952V10.1052V10.1152V10.1251V10.1351V10.1451V10.1551V10.1651V10.1751V10.1851V10.1952V10.2052V10.2152V10.2253V10.2353V10.2454V10.2555V10.2655V10.2756V10.2857V10.2958V10.3059V10.316V10.3261V10.3362V10.3464V10.3565V10.3666V10.3768V10.3869V10.3971V10.4073V10.4174V10.4276V10.4378V10.448V10.4582V10.4684V10.4786V10.4888V10.4991V10.5093V10.5195V10.5298V10.54V10.5503V10.5605V10.5708V10.5811V10.5914V10.6017V10.6119V10.6222V10.6325V10.6429V10.6532V10.6635V10.6738V10.6842V10.6945V10.7049V10.7152V10.7256V10.7359V10.7463V10.7567V10.7671V10.7775V10.7879V10.7983V10.8087V10.8191V10.8295V10.8399V10.8503V10.8608V10.8712V10.8817V10.8921V10.9026V10.913V10.9235V10.934V10.9445V10.9549V10.9654V10.9759V10.9864V10.9969V11.0075V11.018V11.0285V11.039V11.0496V11.0601V11.0706V11.0812V11.0917V11.1023V11.1129V11.1234V11.134V11.1446V11.1552V11.1658V11.1764V11.187V11.1976V11.2082V11.2188V11.2294V11.24V11.2507V11.2613V11.272V11.2826V11.2932V11.3039V11.3146V11.3252V11.3359V11.3466V11.3573V11.3679V11.3786V11.3893V11.4V11.4107V11.4214V11.4321V11.4429V11.4536V11.4643V11.475V11.4858V11.4965V11.5072V11.518V11.5287V11.5395V11.5503V11.561V11.5718V11.5826V11.5933V11.6041V11.6149V11.6257V11.6365V11.6473V11.6581V11.6689V11.6797V11.6905V11.7014V11.7122V11.723V11.7339V11.7447V11.7555V11.7664V11.7772V11.7881V11.7989V11.8098V11.8207V11.8315V11.8424V11.8533V11.8642V11.875V11.8859V11.8968V11.9077V11.9186V11.9295V11.9404V11.9513V11.9622V11.9732V11.9841V11.995V12.0059V12.0169V12.0278V12.0387V12.0497V12.0606V12.0716V12.0825V12.0935V12.1044V12.1154V12.1264V12.1373V12.1483V12.1593V12.1702V12.1812V12.1922V12.2032V12.2142V12.2252V12.2362V12.2472V12.2582V12.2692V12.2802V12.2912V12.3022V12.3133V12.3243V12.3353V12.3463V12.3574V12.3684V12.3794V12.3905V12.4015V12.4126V12.4236V12.4347V12.4457V12.4568V12.4678V12.4789V12.4899V12.501V12.5121V12.5232V12.5342V12.5453V12.5564V12.5675V12.5786V12.5896V12.6007V12.6118V12.6229V12.634V12.6451V12.6562V12.6673V12.6784V12.6895V12.7007V12.7118V12.7229V12.734V12.7451V12.7562V12.7674V12.7785V12.7896V12.8008V12.8119V12.823V12.8342V12.8453V12.8564V12.8676V12.8787V12.8899V12.901V12.9122V12.9233V12.9345V12.9457V12.9568V12.968V12.9791V12.9903V13.0015V13.0126V13.0238V13.035V13.0461V13.0573V13.0685V13.0797V13.0909V13.102V13.1132V13.1244V13.1356V13.1468V13.158V13.1692V13.1804V13.1915V13.2027V13.2139V13.2251V13.2363V13.2475V13.2587V13.2699V13.2811V13.2924V13.3036V13.3148V13.326V13.3372V13.3484V13.3596V13.3708V13.382V13.3933V13.4045V13.4157V13.4269V13.4381V13.4494V13.4606V13.4718V13.483V13.4942V13.5055V13.5167V13.5279V13.5392V13.5504V13.5616V13.5728V13.5841V13.5953V13.6065V13.6178V13.629V13.6402V13.6515V13.6627V13.674V13.6852V13.6964V13.7077V13.7189V13.7302V13.7414V13.7526V13.7639V13.7751V13.7864V13.7976V13.8088V13.8201V13.8313V13.8426V13.8538V13.8651V13.8763V13.8875V13.8988V13.91V13.9213V13.9325V13.9438V13.955V13.9663V13.9775V13.9888V14C23.1 14.7114 22.8099 15.5018 22.2391 16.3559C21.6711 17.2058 20.8647 18.059 19.9333 18.8769C18.0705 20.5128 15.8141 21.9164 14.2858 22.7862C13.484 23.2426 12.516 23.2426 11.7142 22.7862C10.1859 21.9164 7.92946 20.5128 6.06666 18.8769C5.13529 18.059 4.32887 17.2058 3.76089 16.3559C3.19005 15.5018 2.89999 14.7114 2.9 14L2.90001 8.68538Z"
                stroke="currentColor" stroke-width="1.8"></path>
            <path d="M10 11H16L14 9" stroke="#1772F8" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            </path>
            <path d="M16 14H10L12 16" stroke="#1772F8" stroke-width="1.8" stroke-linecap="round"
                stroke-linejoin="round"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-service">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M15.4 13V7C15.4 4.01766 12.9823 1.6 10 1.6C7.01766 1.6 4.6 4.01766 4.6 7L4.60156 7V8.6V11.4V13H4.6H3.00156H3H1C0.447715 13 0 12.5523 0 12V8C0 7.44772 0.447715 7 1 7L3 7C3 3.13401 6.13401 0 10 0C13.866 0 17 3.13401 17 7L17.0026 7H19C19.5523 7 20 7.44772 20 8V12C20 12.5523 19.5523 13 19 13H17.0026H17C17 16.866 13.866 20 10 20V18.4C12.9823 18.4 15.4 15.9823 15.4 13ZM3 11.4V8.6H1.6V11.4H3ZM18.4 8.6H17.0026V11.4H18.4V8.6Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.8173 11.3804C12.0541 12.017 11.072 12.4001 10.0004 12.4001C8.92879 12.4001 7.94668 12.017 7.1835 11.3804L6.15918 12.6096C7.19987 13.4777 8.53913 14.0001 10.0004 14.0001C11.4616 14.0001 12.8009 13.4777 13.8416 12.6096L12.8173 11.3804Z"
                fill="#1772F8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 21" fill="none" id="svg-icon-setting">
            <rect x="0.45" y="9.61534" width="19.1" height="0.9" fill="currentColor" stroke="currentColor"
                stroke-width="0.9"></rect>
            <mask id="svg-icon-setting_path-2-inside-1_26_1373" fill="white">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.19189 15.7656H0V17.5651H4.19189V15.7656ZM8.0376 15.7656V17.5651H20V15.7656H8.0376Z"></path>
            </mask>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.19189 15.7656H0V17.5651H4.19189V15.7656ZM8.0376 15.7656V17.5651H20V15.7656H8.0376Z"
                fill="currentColor"></path>
            <path
                d="M0 15.7656V14.7656H-1V15.7656H0ZM4.19189 15.7656H5.19189V14.7656H4.19189V15.7656ZM0 17.5651H-1V18.5651H0V17.5651ZM4.19189 17.5651V18.5651H5.19189V17.5651H4.19189ZM8.0376 15.7656V14.7656H7.0376V15.7656H8.0376ZM8.0376 17.5651H7.0376V18.5651H8.0376V17.5651ZM20 17.5651V18.5651H21V17.5651H20ZM20 15.7656H21V14.7656H20V15.7656ZM0 16.7656H4.19189V14.7656H0V16.7656ZM1 17.5651V15.7656H-1V17.5651H1ZM4.19189 16.5651H0V18.5651H4.19189V16.5651ZM5.19189 17.5651V15.7656H3.19189V17.5651H5.19189ZM7.0376 15.7656V17.5651H9.0376V15.7656H7.0376ZM20 16.5651H8.0376V18.5651H20V16.5651ZM19 15.7656V17.5651H21V15.7656H19ZM8.0376 16.7656H20V14.7656H8.0376V16.7656Z"
                fill="currentColor" mask="url(#svg-icon-setting_path-2-inside-1_26_1373)"></path>
            <mask id="svg-icon-setting_path-4-inside-2_26_1373" fill="white">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.0366 2.56506H0V4.36506H12.0366V2.56506ZM15.782 2.56506V4.36506H20V2.56506H15.782Z"></path>
            </mask>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.0366 2.56506H0V4.36506H12.0366V2.56506ZM15.782 2.56506V4.36506H20V2.56506H15.782Z"
                fill="currentColor"></path>
            <path
                d="M0 2.56506V1.56506H-1V2.56506H0ZM12.0366 2.56506H13.0366V1.56506H12.0366V2.56506ZM0 4.36506H-1V5.36506H0V4.36506ZM12.0366 4.36506V5.36506H13.0366V4.36506H12.0366ZM15.782 2.56506V1.56506H14.782V2.56506H15.782ZM15.782 4.36506H14.782V5.36506H15.782V4.36506ZM20 4.36506V5.36506H21V4.36506H20ZM20 2.56506H21V1.56506H20V2.56506ZM0 3.56506H12.0366V1.56506H0V3.56506ZM1 4.36506V2.56506H-1V4.36506H1ZM12.0366 3.36506H0V5.36506H12.0366V3.36506ZM13.0366 4.36506V2.56506H11.0366V4.36506H13.0366ZM14.782 2.56506V4.36506H16.782V2.56506H14.782ZM20 3.36506H15.782V5.36506H20V3.36506ZM19 2.56506V4.36506H21V2.56506H19ZM15.782 3.56506H20V1.56506H15.782V3.56506Z"
                fill="currentColor" mask="url(#svg-icon-setting_path-4-inside-2_26_1373)"></path>
            <path
                d="M3.9 14.4651H7C7.60751 14.4651 8.1 14.9576 8.1 15.5651V18.6651H5C4.39249 18.6651 3.9 18.1726 3.9 17.5651V14.4651Z"
                stroke="#1772F8" stroke-width="1.8"></path>
            <path
                d="M11.9 1.46506H15C15.6075 1.46506 16.1 1.95755 16.1 2.56506V5.66506H13C12.3925 5.66506 11.9 5.17258 11.9 4.56506V1.46506Z"
                stroke="#1772F8" stroke-width="1.8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none" id="svg-icon-shield">
            <path
                d="M6.90576 0L12.4949 1.25951C12.8002 1.36543 13.0439 1.56742 13.2159 1.82638C13.3978 2.10024 13.5 2.43757 13.5 2.79707V7.6737C13.5 8.66155 13.1491 9.60507 12.4717 10.4857C11.9309 11.1888 11.1855 11.8476 10.2576 12.4517C8.89301 13.341 7.5427 13.8451 7.16097 13.98C6.90883 14.0251 6.85716 13.9898 6.65814 13.9154C6.42615 13.8284 6.18346 13.7307 5.93428 13.6219C5.38983 13.3856 4.56677 12.9897 3.74256 12.4536C2.81624 11.8495 2.0689 11.1886 1.52829 10.4875C0.850895 9.60691 0.5 8.66174 0.5 7.67554V2.79707C0.5 2.43757 0.602193 2.10024 0.784083 1.82638C0.956079 1.56742 1.19984 1.36543 1.49462 1.26316L6.90576 0Z"
                fill="url(#svg-icon-shield_paint0_linear_105_1424)"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.89908 4.95014C9.62571 4.67678 9.18249 4.67678 8.90913 4.95014L6.2918 7.56747L5.09048 6.36616C4.81712 6.09279 4.3739 6.09279 4.10053 6.36616C3.82717 6.63953 3.82717 7.08274 4.10053 7.35611L5.79579 9.05136C5.93276 9.18833 6.11236 9.25667 6.29188 9.25639C6.47134 9.25663 6.65088 9.18829 6.78781 9.05136L9.89908 5.94009C10.1724 5.66672 10.1724 5.22351 9.89908 4.95014Z"
                fill="white"></path>
            <defs>
                <linearGradient id="svg-icon-shield_paint0_linear_105_1424" x1="0.5" y1="0" x2="11.5" y2="11.5"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#18D027"></stop>
                    <stop offset="1" stop-color="#00A911"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" fill="none" id="svg-icon-shutdown">
            <path
                d="M9 3.83203C5.46819 5.37514 3 8.89931 3 12.9999C3 18.5228 7.47715 22.9999 13 22.9999C18.5228 22.9999 23 18.5228 23 12.9999C23 8.89931 20.5318 5.37514 17 3.83203"
                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
            <path d="M13 3V12" stroke="#1772F8" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            </path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" fill="none" id="svg-icon-team">
            <circle cx="11" cy="11" r="9.2" stroke="currentColor" stroke-width="1.6"></circle>
            <circle cx="11" cy="9" r="3.2" stroke="currentColor" stroke-width="1.6"></circle>
            <mask id="svg-icon-team_mask0_127_80" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="1" y="1"
                width="20" height="20">
                <circle cx="11" cy="11" r="10" fill="#D9D9D9"></circle>
            </mask>
            <g mask="url(#svg-icon-team_mask0_127_80)">
                <path d="M4.8 19C4.8 16.6804 6.6804 14.8 9 14.8H13C15.3196 14.8 17.2 16.6804 17.2 19V22.2H4.8V19Z"
                    stroke="currentColor" stroke-width="1.6"></path>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" id="svg-icon-telegram">
            <path
                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                fill="url(#svg-icon-telegram_paint0_linear_657_262)"></path>
            <path
                d="M23.7868 9.20648L20.9306 23.6127C20.9306 23.6127 20.5306 24.6127 19.4306 24.1315L12.8368 19.0752L10.4368 17.919L6.39931 16.5627C6.39931 16.5627 5.78056 16.344 5.71806 15.8627C5.65556 15.3815 6.41806 15.1252 6.41806 15.1252L22.4681 8.83148C22.4681 8.82523 23.7868 8.24398 23.7868 9.20648Z"
                fill="white"></path>
            <path
                d="M12.3241 23.4503C12.3241 23.4503 12.1304 23.4315 11.8929 22.6753C11.6554 21.919 10.4366 17.919 10.4366 17.919L20.1304 11.7628C20.1304 11.7628 20.6929 11.4253 20.6679 11.7628C20.6679 11.7628 20.7679 11.8253 20.4679 12.1003C20.1679 12.3815 12.8554 18.9565 12.8554 18.9565"
                fill="#D2E4F0"></path>
            <path d="M15.362 21.0125L12.7557 23.3937C12.7557 23.3937 12.5495 23.55 12.3307 23.45L12.8307 19.0312"
                fill="#B5CFE4"></path>
            <defs>
                <linearGradient id="svg-icon-telegram_paint0_linear_657_262" x1="16" y1="0" x2="16" y2="31.8833"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#41BCE7"></stop>
                    <stop offset="1" stop-color="#22A6DC"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" id="svg-icon-twitter">
            <path
                d="M14.2806 0.0890768C8.64248 0.677267 3.6047 4.388 1.31453 9.63915C-0.161331 13.0293 -0.406952 16.9327 0.640999 20.5262C1.93543 25.007 5.28382 28.7926 9.6164 30.6859C13.0076 32.1613 16.9123 32.4068 20.5071 31.3592C25.8877 29.8085 30.1242 25.3922 31.5149 19.9055C33.6861 11.3075 28.3588 2.51606 19.7365 0.46338C17.8425 0.0142162 16.1745 -0.103636 14.2806 0.0890768ZM14.4946 10.0241C15.8635 11.8422 17.0192 13.3394 17.062 13.3394C17.1048 13.3394 18.528 11.8422 20.2072 10.0241L23.2774 6.70889H25.0211L24.6467 7.10501C24.4328 7.32874 23.0421 8.83686 21.5551 10.4519C20.0681 12.0668 18.6132 13.6384 18.3239 13.9276L17.8109 14.473L21.8225 19.8095C24.0263 22.7504 25.8342 25.1883 25.8342 25.232C25.8342 25.2854 24.5188 25.3171 22.924 25.3171L20.0039 25.3064L17.2867 21.6703C15.4146 19.1571 14.5374 18.0764 14.4518 18.1412C14.3876 18.1946 12.8681 19.8313 11.0713 21.7773L7.80848 25.3171H6.98433C6.52476 25.3171 6.15033 25.2953 6.15033 25.2636C6.15033 25.232 7.85127 23.3703 9.92621 21.1356C11.9915 18.9005 13.7032 17.029 13.7239 16.9973C13.735 16.9537 12.0341 14.6334 9.94803 11.8422C7.86197 9.06165 6.15033 6.76236 6.15033 6.74055C6.15033 6.7198 7.46573 6.70889 9.08152 6.70889H12.0123L14.4946 10.0241Z"
                fill="black"></path>
            <path
                d="M8.79311 8.14191C8.83568 8.21677 11.5309 11.8315 14.762 16.1516L20.6458 24.0228L21.9612 24.0337C22.7744 24.0337 23.2667 23.991 23.2449 23.9268C23.2351 23.8733 20.5497 20.2591 17.2978 15.906L11.3704 7.99219H10.0443C8.94288 7.99219 8.7178 8.014 8.79311 8.14191Z"
                fill="black"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" fill="none" id="svg-icon-usdt-large">
            <mask id="svg-icon-usdt-large_mask0_106_181" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                width="72" height="72">
                <rect width="72" height="72" fill="#D9D9D9"></rect>
            </mask>
            <g mask="url(#svg-icon-usdt-large_mask0_106_181)">
                <path
                    d="M38.0121 1.31567L29.996 70.7759C38.2593 70.667 42.0648 69.9896 47.598 67.9032C52.9692 65.6901 55.5112 64.0545 59.0499 60.4372C60.9495 58.5218 62.478 56.462 64.2552 53.5584C66.0539 49.941 67.1294 47.2494 67.8522 43.9174C69.0192 37.1182 68.9936 33.3808 67.9024 26.702C67.4168 24.7875 66.6618 22.7933 65.4617 20.1833C63.2621 15.7915 61.4059 13.0181 57.8098 9.9024C54.4893 6.88545 52.1791 5.39041 46.7483 3.24831C44.3719 2.34986 41.7334 1.73213 38.0121 1.31567Z"
                    fill="url(#svg-icon-usdt-large_paint0_linear_106_181)"></path>
                <mask id="svg-icon-usdt-large_mask1_106_181" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="29"
                    y="1" width="40" height="70">
                    <path
                        d="M38.0121 1.31567L29.996 70.7759C38.2593 70.667 42.0648 69.9896 47.598 67.9032C52.9692 65.6901 55.5112 64.0545 59.0499 60.4372C60.9495 58.5218 62.478 56.462 64.2552 53.5584C66.0539 49.941 67.1294 47.2494 67.8522 43.9174C69.0192 37.1182 68.9936 33.3808 67.9024 26.702C67.4168 24.7875 66.6618 22.7933 65.4617 20.1833C63.2621 15.7915 61.4059 13.0181 57.8098 9.9024C54.4893 6.88545 52.1791 5.39041 46.7483 3.24831C44.3719 2.34986 41.7334 1.73213 38.0121 1.31567Z"
                        fill="url(#svg-icon-usdt-large_paint1_linear_106_181)"></path>
                </mask>
                <g mask="url(#svg-icon-usdt-large_mask1_106_181)">
                    <g filter="url(#svg-icon-usdt-large_filter0_f_106_181)">
                        <ellipse cx="51.9352" cy="24.2146" rx="10.2376" ry="9.43404" fill="#00B870"></ellipse>
                    </g>
                    <g opacity="0.5" filter="url(#svg-icon-usdt-large_filter1_f_106_181)">
                        <path
                            d="M62.1081 37.0913C62.4203 30.3755 61.9141 26.7963 59.4015 20.8518L32.66 40.357L28.3806 74.9156L39.927 75.4C45.2687 69.9528 48.7928 66.3251 53.649 59.3594C58.5345 51.4658 60.5702 46.6825 62.1081 37.0913Z"
                            fill="#00B870"></path>
                    </g>
                    <g filter="url(#svg-icon-usdt-large_filter2_f_106_181)">
                        <path
                            d="M60.7558 61.156C48.8202 68.1797 42.2032 70.706 30.6259 71.0759L32.3286 76.1099L56.6102 70.1876L60.7558 61.156Z"
                            fill="#00B870"></path>
                    </g>
                </g>
                <path
                    d="M38.1236 69.4407C45.8438 66.1978 48.9137 63.683 53.077 58.4841C56.6355 53.7096 58.7167 49.9799 60.1237 45.5398C62.3136 37.7127 62.581 33.2034 61.4815 24.9629C60.7185 20.4768 59.2783 17.2162 56.6948 13.0727C53.3422 8.2106 50.5331 5.30069 45.4033 3.16217C40.3776 1.27252 37.2997 0.813684 31.1264 1.57347C29.7371 1.86391 28.3525 2.24211 26.4779 2.83968C22.3975 4.58409 20.2344 5.87363 16.6927 8.80036C11.7865 13.55 9.60934 16.6645 6.56303 22.9268C4.34304 28.2446 3.74163 31.2321 3.35879 36.5709C3.09773 42.2294 3.40426 45.4367 4.94911 51.2425C5.73374 53.7473 6.68424 55.8332 7.94179 57.8895C10.3078 61.9558 12.1771 63.8682 16.1545 66.8085C17.8881 67.9632 19.5661 68.7886 21.484 69.4407C25.7221 70.7717 28.3499 70.9672 33.3829 70.4943C34.9373 70.2666 36.3425 69.9294 38.1236 69.4407Z"
                    fill="url(#svg-icon-usdt-large_paint2_linear_106_181)"></path>
                <mask id="svg-icon-usdt-large_mask2_106_181" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3"
                    y="1" width="60" height="70">
                    <path
                        d="M8.37396 57.6381L8.37406 57.638L8.36835 57.6287C7.13462 55.6113 6.20168 53.5658 5.4295 51.1034C3.90102 45.3567 3.5999 42.2012 3.85796 36.6003C4.23706 31.318 4.82735 28.3849 7.01891 23.1327C10.0357 16.9329 12.1788 13.8681 17.0264 9.17327C20.5148 6.29194 22.635 5.02764 26.6525 3.30882C28.496 2.72167 29.8533 2.35129 31.2083 2.06717C34.2632 1.69211 36.5269 1.62193 38.6366 1.87084C40.7475 2.11988 42.7291 2.69123 45.219 3.62706C50.2188 5.71321 52.9586 8.53673 56.2766 13.3471C58.8304 17.4445 60.2381 20.6408 60.987 25.0379C62.0763 33.2063 61.8123 37.6464 59.6445 45.3968C58.2602 49.762 56.213 53.4388 52.6813 58.1784C50.6152 60.7579 48.8383 62.6485 46.6348 64.2954C44.4331 65.9411 41.7846 67.359 37.96 68.9671C36.2069 69.4476 34.8342 69.7756 33.3232 69.9977C28.3534 70.4639 25.7952 70.27 21.6396 68.9655C19.7692 68.3291 18.1345 67.5255 16.4418 66.3991C12.5151 63.4955 10.6975 61.6314 8.37396 57.6381Z"
                        fill="url(#svg-icon-usdt-large_paint3_linear_106_181)"
                        stroke="url(#svg-icon-usdt-large_paint4_linear_106_181)"></path>
                </mask>
                <g mask="url(#svg-icon-usdt-large_mask2_106_181)">
                    <g filter="url(#svg-icon-usdt-large_filter3_f_106_181)">
                        <path
                            d="M26.8156 40.1292L65.5672 19.3889L60.4731 -9.35645L11.3513 2.65109L17.537 28.1216L26.8156 40.1292Z"
                            fill="url(#svg-icon-usdt-large_paint5_linear_106_181)"></path>
                    </g>
                    <g opacity="0.5" filter="url(#svg-icon-usdt-large_filter4_f_106_181)">
                        <path
                            d="M23.8664 66.5554C26.6683 68.2191 27.2229 72.8672 27.1499 74.9832L8.43361 67.6499C4.63929 64.5853 -1.72351 58.1057 3.17995 56.7047C9.30926 54.9535 20.3639 64.4758 23.8664 66.5554Z"
                            fill="url(#svg-icon-usdt-large_paint6_linear_106_181)"></path>
                    </g>
                </g>
                <path
                    d="M8.37396 57.6381L8.37406 57.638L8.36835 57.6287C7.13462 55.6113 6.20168 53.5658 5.4295 51.1034C3.90102 45.3567 3.5999 42.2012 3.85796 36.6003C4.23706 31.318 4.82735 28.3849 7.01891 23.1327C10.0357 16.9329 12.1788 13.8681 17.0264 9.17327C20.5148 6.29194 22.635 5.02764 26.6525 3.30882C28.496 2.72167 29.8533 2.35129 31.2083 2.06717C34.2632 1.69211 36.5269 1.62193 38.6366 1.87084C40.7475 2.11988 42.7291 2.69123 45.219 3.62706C50.2188 5.71321 52.9586 8.53673 56.2766 13.3471C58.8304 17.4445 60.2381 20.6408 60.987 25.0379C62.0763 33.2063 61.8123 37.6464 59.6445 45.3968C58.2602 49.762 56.213 53.4388 52.6813 58.1784C50.6152 60.7579 48.8383 62.6485 46.6348 64.2954C44.4331 65.9411 41.7846 67.359 37.96 68.9671C36.2069 69.4476 34.8342 69.7756 33.3232 69.9977C28.3534 70.4639 25.7952 70.27 21.6396 68.9655C19.7692 68.3291 18.1345 67.5255 16.4418 66.3991C12.5151 63.4955 10.6975 61.6314 8.37396 57.6381Z"
                    stroke="url(#svg-icon-usdt-large_paint7_linear_106_181)"></path>
                <path
                    d="M13.5256 18.9303C17.7202 13.4351 21.0061 10.7488 25.6655 8.95176C28.8571 7.57859 30.8431 7.26889 34.6382 7.31394C38.2184 7.69999 41.0101 8.47689 43.4208 9.86394C48.814 13.4779 50.6277 15.7622 52.6881 20.0865C54.2052 22.9449 54.7638 25.7138 55.1235 29.6335C55.2874 34.6462 55.0777 37.3271 53.5906 41.6296C52.0627 46.4399 49.7843 49.9916 45.6155 54.7867C43.0212 57.55 40.9026 59.3156 38.0622 60.676C32.6955 62.8073 29.3749 63.2295 22.612 61.8993C20.2624 61.2291 18.2577 60.1794 15.6832 58.3585C12.2697 55.238 10.2899 52.502 9.06717 47.3271C7.42211 39.8401 7.19751 35.6431 9.14052 28.1583C10.03 25.0536 11.3884 22.4146 13.5256 18.9303Z"
                    fill="url(#svg-icon-usdt-large_paint8_linear_106_181)"></path>
                <path
                    d="M33.3908 9.61035H36.3079C39.1209 9.92285 40.2806 10.2945 42.1213 11.0647C51.2904 16.1665 52.9065 21.2437 54.098 31.3633C54.1839 34.57 53.6152 37.9635 52.4602 42.1378C50.6426 46.6852 48.8077 50.1036 46.3602 52.8493C41.1864 58.853 36.5616 61.5928 28.8294 61.1602C22.5555 60.7906 19.3259 59.1272 14.2073 52.8802C12.7828 50.3294 11.8522 48.3985 11.1684 46.0166C10.1751 41.367 9.99479 38.7643 10.486 34.1338C10.672 32.7625 10.9499 31.4147 11.3963 29.6601C12.6455 25.6735 13.9126 22.8122 15.7232 20.2684C19.4658 15.2574 21.9715 13.2898 27.0547 11.0647C29.1732 10.1647 30.9998 9.78143 33.3908 9.61035Z"
                    fill="url(#svg-icon-usdt-large_paint9_linear_106_181)"></path>
                <mask id="svg-icon-usdt-large_mask3_106_181" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10"
                    y="9" width="45" height="53">
                    <path
                        d="M33.3908 9.61035H36.3079C39.1209 9.92285 40.2806 10.2945 42.1213 11.0647C51.2904 16.1665 52.9065 21.2437 54.098 31.3633C54.1839 34.57 53.6152 37.9635 52.4602 42.1378C50.6426 46.6852 48.8077 50.1036 46.3602 52.8493C41.1864 58.853 36.5616 61.5928 28.8294 61.1602C22.5555 60.7906 19.3259 59.1272 14.2073 52.8802C12.7828 50.3294 11.8522 48.3985 11.1684 46.0166C10.1751 41.367 9.99479 38.7643 10.486 34.1338C10.672 32.7625 10.9499 31.4147 11.3963 29.6601C12.6455 25.6735 13.9126 22.8122 15.7232 20.2684C19.4658 15.2574 21.9715 13.2898 27.0547 11.0647C29.1732 10.1647 30.9998 9.78143 33.3908 9.61035Z"
                        fill="url(#svg-icon-usdt-large_paint10_linear_106_181)"></path>
                </mask>
                <g mask="url(#svg-icon-usdt-large_mask3_106_181)">
                    <g opacity="0.3" filter="url(#svg-icon-usdt-large_filter5_f_106_181)">
                        <path d="M19.0308 4.01929L20.0579 62.1525H5.0624L0.954071 15.7281L19.0308 4.01929Z"
                            fill="#00BE70"></path>
                    </g>
                </g>
                <g filter="url(#svg-icon-usdt-large_filter6_d_106_181)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M25.5827 19.1816L48.4621 24.4929L46.8279 31.0299L37.8396 28.9871L36.6139 33.0727C39.2737 33.7412 40.5593 34.2157 42.7423 35.1155C45.2014 36.3931 46.1562 37.0985 47.145 38.3276C47.971 39.7175 47.7505 40.3334 46.2179 41.139C45.7849 41.3391 45.2288 41.5179 44.4754 41.7048C43.4794 41.9318 42.8741 41.9895 41.7093 41.9943C39.1514 41.9636 37.487 41.6716 34.3115 40.9007L30.4196 55.1816L24.5657 53.7664L28.7471 39.3568C25.3098 38.5278 23.4231 37.8885 20.2235 36.0439C18.862 35.0117 18.3773 34.4034 18.1972 33.2456C18.2374 32.5059 18.3897 32.1708 19.0138 31.7897C19.9481 31.1744 20.8721 31.0337 22.3786 30.9941L25.3698 31.0299C27.8186 31.098 29.0896 31.2149 31.2881 31.4766L32.2852 27.5847L23.8581 25.6227L25.5827 19.1816ZM30.8708 32.3479L29.4432 37.0447L35.0917 38.5551L36.5401 33.8376L41.63 35.6377C43.4492 36.2922 44.1867 36.7551 45.1888 37.6861C45.7077 38.153 45.7926 38.4336 45.7888 38.9482C45.3675 39.8536 44.8459 40.1069 43.4922 40.1897H40.0575C36.9595 40.0514 35.0489 39.7121 31.3467 38.6999C29.1245 38.1088 27.5447 37.6323 25.7464 36.9507C23.1371 35.9871 21.8522 35.3449 20.3392 33.7549C19.7188 32.6233 19.9989 32.2874 21.1533 31.9994C21.7175 31.802 22.4538 31.7667 23.4527 31.7557L27.5323 31.844C29.3463 31.9607 30.0788 32.073 30.8708 32.3479Z"
                        fill="#006E3B"></path>
                </g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M23.7829 17.3818L46.6623 22.6931L45.028 29.2301L36.0397 27.1873L34.814 31.2729C37.4739 31.9414 38.7594 32.4159 40.9424 33.3157C43.4015 34.5933 44.3564 35.2986 45.3452 36.5278C46.1711 37.9177 45.9507 38.5336 44.4181 39.3392C43.9851 39.5393 43.429 39.7181 42.6755 39.905C41.6795 40.132 41.0742 40.1897 39.9094 40.1945C37.3515 40.1638 35.6872 39.8718 32.5116 39.1009L28.6198 53.3818L22.7659 51.9666L26.9472 37.557C23.51 36.7279 21.6233 36.0887 18.4237 34.2441C17.0622 33.2119 16.5774 32.6036 16.3974 31.4458C16.4376 30.7061 16.5898 30.371 17.214 29.9899C18.1483 29.3746 19.0723 29.2339 20.5787 29.1943L23.57 29.2301C26.0188 29.2981 27.2898 29.4151 29.4882 29.6768L30.4853 25.7849L22.0583 23.8229L23.7829 17.3818ZM29.0707 30.5481L27.643 35.2449L33.2916 36.7553L34.7399 32.0378L39.8299 33.8379C41.6491 34.4923 42.3866 34.9553 43.3887 35.8863C43.9076 36.3532 43.9924 36.6337 43.9887 37.1484C43.5673 38.0538 43.0457 38.3071 41.692 38.3898H38.2574C35.1594 38.2516 33.2487 37.9122 29.5466 36.9001C27.3243 36.3089 25.7445 35.8325 23.9463 35.1508C21.3369 34.1872 20.0521 33.5451 18.5391 31.955C17.9187 30.8235 18.1987 30.4875 19.3531 30.1996C19.9174 30.0022 20.6536 29.9669 21.6526 29.9559L25.7322 30.0442C27.5461 30.1608 28.2786 30.2732 29.0707 30.5481Z"
                    fill="#4FFFB7"></path>
                <mask id="svg-icon-usdt-large_mask4_106_181" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16"
                    y="17" width="31" height="37">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M23.7829 17.3818L46.6623 22.6931L45.028 29.2301L36.0397 27.1873L34.814 31.2729C37.4739 31.9414 38.7594 32.4159 40.9424 33.3157C43.4015 34.5933 44.3564 35.2986 45.3452 36.5278C46.1711 37.9177 45.9507 38.5336 44.4181 39.3392C43.9851 39.5393 43.429 39.7181 42.6755 39.905C41.6795 40.132 41.0742 40.1897 39.9094 40.1945C37.3515 40.1638 35.6872 39.8718 32.5116 39.1009L28.6198 53.3818L22.7659 51.9666L26.9472 37.557C23.51 36.7279 21.6233 36.0887 18.4237 34.2441C17.0622 33.2119 16.5774 32.6036 16.3974 31.4458C16.4376 30.7061 16.5898 30.371 17.214 29.9899C18.1483 29.3746 19.0723 29.2339 20.5787 29.1943L23.57 29.2301C26.0188 29.2981 27.2898 29.4151 29.4882 29.6768L30.4853 25.7849L22.0583 23.8229L23.7829 17.3818ZM29.0707 30.5481L27.643 35.2449L33.2916 36.7553L34.7399 32.0378L39.8299 33.8379C41.6491 34.4923 42.3866 34.9553 43.3887 35.8863C43.9076 36.3532 43.9924 36.6337 43.9887 37.1484C43.5673 38.0538 43.0457 38.3071 41.692 38.3898H38.2574C35.1594 38.2516 33.2487 37.9122 29.5466 36.9001C27.3243 36.3089 25.7445 35.8325 23.9463 35.1508C21.3369 34.1872 20.0521 33.5451 18.5391 31.955C17.9187 30.8235 18.1987 30.4875 19.3531 30.1996C19.9174 30.0022 20.6536 29.9669 21.6526 29.9559L25.7322 30.0442C27.5461 30.1608 28.2786 30.2732 29.0707 30.5481Z"
                        fill="white"></path>
                </mask>
                <g mask="url(#svg-icon-usdt-large_mask4_106_181)">
                    <path
                        d="M54.126 33.1646C36.3023 30.5471 16.37 36.2287 8.63187 39.3967L9.56666 4.80859L50.0752 6.05501C58.852 16.1821 71.9498 35.782 54.126 33.1646Z"
                        fill="url(#svg-icon-usdt-large_paint11_linear_106_181)"></path>
                </g>
            </g>
            <defs>
                <filter id="svg-icon-usdt-large_filter0_f_106_181" x="37.6977" y="10.7805" width="28.4752"
                    height="26.8682" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_106_181"></feGaussianBlur>
                </filter>
                <filter id="svg-icon-usdt-large_filter1_f_106_181" x="24.3806" y="16.8518" width="41.8099"
                    height="62.5481" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_106_181"></feGaussianBlur>
                </filter>
                <filter id="svg-icon-usdt-large_filter2_f_106_181" x="26.6259" y="57.156" width="38.1299"
                    height="22.9539" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_106_181"></feGaussianBlur>
                </filter>
                <filter id="svg-icon-usdt-large_filter3_f_106_181" x="7.35129" y="-13.3564" width="62.2159"
                    height="57.4856" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_106_181"></feGaussianBlur>
                </filter>
                <filter id="svg-icon-usdt-large_filter4_f_106_181" x="-2.60315" y="52.491" width="33.7592"
                    height="26.4922" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_106_181"></feGaussianBlur>
                </filter>
                <filter id="svg-icon-usdt-large_filter5_f_106_181" x="-7.04593" y="-3.98071" width="35.1039"
                    height="74.1333" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_106_181"></feGaussianBlur>
                </filter>
                <filter id="svg-icon-usdt-large_filter6_d_106_181" x="14.1972" y="17.1816" width="38.2649" height="44"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha"></feColorMatrix>
                    <feOffset dy="2"></feOffset>
                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.445524 0 0 0 0 0.238963 0 0 0 1 0">
                    </feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_106_181"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_106_181" result="shape"></feBlend>
                </filter>
                <linearGradient id="svg-icon-usdt-large_paint0_linear_106_181" x1="49.3601" y1="1.31567" x2="49.3601"
                    y2="70.7759" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#005A2E"></stop>
                    <stop offset="0.456732" stop-color="#009759"></stop>
                    <stop offset="1" stop-color="#004927"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint1_linear_106_181" x1="49.3601" y1="1.31567" x2="49.3601"
                    y2="70.7759" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#01C2FC"></stop>
                    <stop offset="0.456732" stop-color="#36D1FF"></stop>
                    <stop offset="1" stop-color="#007EA5"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint2_linear_106_181" x1="42.0825" y1="1.22437" x2="20.0452"
                    y2="68.6128" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00BC6C"></stop>
                    <stop offset="0.490901" stop-color="#00D984"></stop>
                    <stop offset="0.709115" stop-color="#009150"></stop>
                    <stop offset="1" stop-color="#01733D"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint3_linear_106_181" x1="42.0825" y1="1.22437" x2="20.0452"
                    y2="68.6128" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#36D0FF"></stop>
                    <stop offset="0.485" stop-color="#01C1FB"></stop>
                    <stop offset="1" stop-color="#019FCF"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint4_linear_106_181" x1="43.49" y1="2.80199" x2="21.107"
                    y2="69.4745" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#31CEFE"></stop>
                    <stop offset="1" stop-color="#12C8FF"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint5_linear_106_181" x1="30.2723" y1="1.74143" x2="48.8294"
                    y2="28.4855" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00C170"></stop>
                    <stop offset="0.691651" stop-color="#00ED8E"></stop>
                    <stop offset="1" stop-color="#00DC7E"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint6_linear_106_181" x1="1.39685" y1="54.7503" x2="23.0681"
                    y2="70.7707" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#01EB8C" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#01E687"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint7_linear_106_181" x1="43.49" y1="2.80199" x2="21.107"
                    y2="69.4745" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#01DE84"></stop>
                    <stop offset="1" stop-color="#01AF6A"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint8_linear_106_181" x1="39.7796" y1="7.30981" x2="21.3758"
                    y2="61.5487" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#004C28"></stop>
                    <stop offset="0.516089" stop-color="#00F894"></stop>
                    <stop offset="1" stop-color="#00834D"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint9_linear_106_181" x1="32.1647" y1="9.61035" x2="39.332"
                    y2="55.5436" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00B56E"></stop>
                    <stop offset="1" stop-color="#007D43"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint10_linear_106_181" x1="32.1647" y1="9.61035" x2="39.332"
                    y2="55.5436" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00F6FF"></stop>
                    <stop offset="1" stop-color="#0093BF"></stop>
                </linearGradient>
                <linearGradient id="svg-icon-usdt-large_paint11_linear_106_181" x1="35.8151" y1="19.9239" x2="39.2146"
                    y2="40.8501" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white"></stop>
                    <stop offset="1" stop-color="#4FFFB7"></stop>
                </linearGradient>
            </defs>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" id="svg-icon-usdt">
            <circle cx="8" cy="8" r="8" fill="#10BB88"></circle>
            <path d="M11.2368 4.51685H4.64136V6.10908H7.14297V8.44938H8.73514V6.10908H11.2368V4.51685Z" fill="white">
            </path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M7.95348 7.14722C10.2771 7.14722 12.1608 7.56958 12.1608 8.09058C12.1608 8.55174 10.6849 8.93553 8.73441 9.01764V12.3759H7.14224V9.01632C5.20676 8.93156 3.74609 8.54931 3.74609 8.09058C3.74609 7.56958 5.62982 7.14722 7.95348 7.14722ZM4.20625 7.96905C4.20625 8.3731 5.88388 8.7006 7.95331 8.7006C10.0227 8.7006 11.7003 8.3731 11.7003 7.96905C11.7003 7.56507 10.0227 7.2375 7.95331 7.2375C5.88388 7.2375 4.20625 7.56507 4.20625 7.96905Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-video">
            <circle cx="10" cy="10" r="9.1" stroke="currentColor" stroke-width="1.8"></circle>
            <path
                d="M13 9.13398C13.6667 9.51888 13.6667 10.4811 13 10.866L9.25 13.0311C8.58333 13.416 7.75 12.9349 7.75 12.1651L7.75 7.83493C7.75 7.06513 8.58333 6.58401 9.25 6.96891L13 9.13398Z"
                stroke="#1772F8" stroke-width="1.8"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 20" fill="none" id="svg-icon-website">
            <g id="svg-icon-website_å®ç½">
                <mask id="svg-icon-website_mask0_1391_146" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                    y="0" width="26" height="20">
                    <rect id="svg-icon-website_Rectangle 34626186" width="26" height="20" fill="#D9D9D9"></rect>
                </mask>
                <g mask="url(#svg-icon-website_mask0_1391_146)">
                    <g id="svg-icon-website_Group 1533210060">
                        <path id="svg-icon-website_Vector 2780"
                            d="M11.3625 19L13.2946 16.7275C13.3326 16.6828 13.3883 16.657 13.4469 16.657H14.7309C14.8066 16.657 14.8759 16.6142 14.9098 16.5465L15.6808 15.0043C15.7536 14.8589 15.9602 14.8564 16.0364 15L17.3143 17.409C17.3445 17.4661 17.3454 17.5343 17.3165 17.5922L16.8625 18.5"
                            stroke="#18191C" stroke-width="1.8"></path>
                        <path id="svg-icon-website_Vector 2781"
                            d="M8.36253 2.5C8.5292 2.83333 9.06253 3.6 9.86253 4C10.8625 4.5 11.8625 4.5 11.8625 6C11.8625 7.5 11.8625 9.5 12.3625 9.5C12.7625 9.5 13.5292 8.5 13.8625 8C14.3625 7.83333 15.3625 7.3 15.3625 6.5C15.3625 5.5 15.3625 4 15.8625 3.5C16.2625 3.1 17.0292 2.33333 17.3625 2"
                            stroke="#18191C" stroke-width="1.8"></path>
                        <g id="svg-icon-website_Union">
                            <mask id="svg-icon-website_path-4-inside-1_1391_146" fill="white">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.5338 10.6912C21.1828 14.8965 17.6585 18.2 13.3625 18.2C10.2941 18.2 7.61922 16.5146 6.21329 14.019L4.31135 14.2571C5.91042 17.651 9.36216 20 13.3625 20C18.8854 20 23.3625 15.5228 23.3625 10L23.3625 9.96965L21.5338 10.6912ZM5.16253 10C5.16253 10.3538 5.18494 10.7023 5.2284 11.0443C5.23941 11.1005 5.24518 11.1587 5.24518 11.2181C5.24518 11.7152 4.84223 12.1181 4.34518 12.1181C3.90343 12.1181 3.53602 11.7999 3.45972 11.3801L3.45705 11.3805C3.39474 10.9293 3.36253 10.4684 3.36253 10C3.36253 4.47715 7.83969 0 13.3625 0C17.7708 0 21.5128 2.85237 22.8437 6.81216C22.8916 6.92217 22.9182 7.04363 22.9182 7.1713C22.9182 7.66836 22.5152 8.0713 22.0182 8.0713C21.6603 8.0713 21.3511 7.86236 21.2061 7.5598L21.1949 7.56475C20.1576 4.22515 17.0433 1.8 13.3625 1.8C8.8338 1.8 5.16253 5.47126 5.16253 10Z">
                                </path>
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.5338 10.6912C21.1828 14.8965 17.6585 18.2 13.3625 18.2C10.2941 18.2 7.61922 16.5146 6.21329 14.019L4.31135 14.2571C5.91042 17.651 9.36216 20 13.3625 20C18.8854 20 23.3625 15.5228 23.3625 10L23.3625 9.96965L21.5338 10.6912ZM5.16253 10C5.16253 10.3538 5.18494 10.7023 5.2284 11.0443C5.23941 11.1005 5.24518 11.1587 5.24518 11.2181C5.24518 11.7152 4.84223 12.1181 4.34518 12.1181C3.90343 12.1181 3.53602 11.7999 3.45972 11.3801L3.45705 11.3805C3.39474 10.9293 3.36253 10.4684 3.36253 10C3.36253 4.47715 7.83969 0 13.3625 0C17.7708 0 21.5128 2.85237 22.8437 6.81216C22.8916 6.92217 22.9182 7.04363 22.9182 7.1713C22.9182 7.66836 22.5152 8.0713 22.0182 8.0713C21.6603 8.0713 21.3511 7.86236 21.2061 7.5598L21.1949 7.56475C20.1576 4.22515 17.0433 1.8 13.3625 1.8C8.8338 1.8 5.16253 5.47126 5.16253 10Z"
                                fill="#FF0000"></path>
                            <path
                                d="M21.5338 10.6912L21.1668 9.761L20.5889 9.989L20.5373 10.608L21.5338 10.6912ZM6.21329 14.019L7.08455 13.5281L6.75508 12.9433L6.08904 13.0267L6.21329 14.019ZM4.31135 14.2571L4.1871 13.2649L2.81911 13.4362L3.40673 14.6834L4.31135 14.2571ZM23.3625 10H24.3625L24.3625 9.99849L23.3625 10ZM23.3625 9.96965L24.3625 9.96814L24.3603 8.50091L22.9954 9.03944L23.3625 9.96965ZM5.2284 11.0443L4.23639 11.1704L4.2406 11.2035L4.24701 11.2363L5.2284 11.0443ZM3.45972 11.3801L4.44359 11.2013L4.27097 10.2517L3.31587 10.3905L3.45972 11.3801ZM3.45705 11.3805L2.46645 11.5173L2.60422 12.515L3.60091 12.3701L3.45705 11.3805ZM22.8437 6.81216L21.8958 7.13074L21.9096 7.17183L21.9269 7.21157L22.8437 6.81216ZM21.2061 7.5598L22.1079 7.1276L21.6896 6.25482L20.8036 6.64438L21.2061 7.5598ZM21.1949 7.56475L20.2399 7.86136L20.5721 8.93098L21.5974 8.48017L21.1949 7.56475ZM13.3625 19.2C18.1829 19.2 22.1365 15.4935 22.5303 10.7744L20.5373 10.608C20.2292 14.2994 17.1341 17.2 13.3625 17.2V19.2ZM5.34204 14.5098C6.91796 17.3072 9.91854 19.2 13.3625 19.2V17.2C10.6696 17.2 8.32048 15.722 7.08455 13.5281L5.34204 14.5098ZM4.4356 15.2494L6.33755 15.0112L6.08904 13.0267L4.1871 13.2649L4.4356 15.2494ZM13.3625 19C9.76371 19 6.65622 16.8877 5.21597 13.8309L3.40673 14.6834C5.16463 18.4143 8.96062 21 13.3625 21V19ZM22.3625 10C22.3625 14.9706 18.3331 19 13.3625 19V21C19.4377 21 24.3625 16.0751 24.3625 10H22.3625ZM22.3625 9.97116L22.3625 10.0015L24.3625 9.99849L24.3625 9.96814L22.3625 9.97116ZM21.9009 11.6214L23.7295 10.8999L22.9954 9.03944L21.1668 9.761L21.9009 11.6214ZM6.22042 10.9182C6.18226 10.6179 6.16253 10.3115 6.16253 10H4.16253C4.16253 10.396 4.18762 10.7867 4.23639 11.1704L6.22042 10.9182ZM6.24518 11.2181C6.24518 11.0939 6.23311 10.9714 6.20979 10.8523L4.24701 11.2363C4.24571 11.2296 4.24518 11.2235 4.24518 11.2181H6.24518ZM4.34518 13.1181C5.39452 13.1181 6.24518 12.2675 6.24518 11.2181H4.24518C4.24518 11.1629 4.28995 11.1181 4.34518 11.1181V13.1181ZM2.47585 11.559C2.63705 12.4457 3.41155 13.1181 4.34518 13.1181V11.1181C4.39532 11.1181 4.435 11.154 4.44359 11.2013L2.47585 11.559ZM3.60091 12.3701L3.60358 12.3697L3.31587 10.3905L3.3132 10.3909L3.60091 12.3701ZM2.36253 10C2.36253 10.5143 2.3979 11.0209 2.46645 11.5173L4.44765 11.2437C4.39158 10.8377 4.36253 10.4225 4.36253 10H2.36253ZM13.3625 -1C7.2874 -1 2.36253 3.92487 2.36253 10H4.36253C4.36253 5.02944 8.39197 1 13.3625 1V-1ZM23.7916 6.49357C22.328 2.13897 18.2131 -1 13.3625 -1V1C17.3284 1 20.6976 3.56577 21.8958 7.13074L23.7916 6.49357ZM21.9269 7.21157C21.921 7.19796 21.9182 7.18364 21.9182 7.1713H23.9182C23.9182 6.90362 23.8622 6.64639 23.7604 6.41274L21.9269 7.21157ZM21.9182 7.1713C21.9182 7.11607 21.963 7.0713 22.0182 7.0713V9.0713C23.0675 9.0713 23.9182 8.22064 23.9182 7.1713H21.9182ZM22.0182 7.0713C22.0595 7.0713 22.0929 7.09633 22.1079 7.1276L20.3043 7.992C20.6094 8.6284 21.2611 9.0713 22.0182 9.0713V7.0713ZM21.5974 8.48017L21.6086 8.47522L20.8036 6.64438L20.7924 6.64933L21.5974 8.48017ZM13.3625 2.8C16.5929 2.8 19.3289 4.92816 20.2399 7.86136L22.1499 7.26814C20.9864 3.52214 17.4937 0.8 13.3625 0.8V2.8ZM6.16253 10C6.16253 6.02355 9.38608 2.8 13.3625 2.8V0.8C8.28151 0.8 4.16253 4.91898 4.16253 10H6.16253Z"
                                fill="#18191C" mask="url(#svg-icon-website_path-4-inside-1_1391_146)"></path>
                        </g>
                        <path id="svg-icon-website_Vector 2782"
                            d="M1.86253 11.0002C1.0292 11.8335 0.0625287 13.6002 2.86253 14.0002C6.36253 14.5002 12.3625 13.5002 14.8625 13.0002C17.3625 12.5002 21.0906 11.5181 23.0906 10.0181C25.0906 8.51813 25.0906 8.51813 25.0906 8.01813C25.0906 7.51813 24.5906 7.01813 24.0906 7.01813"
                            stroke="#1772F8" stroke-width="1.8" stroke-linecap="round"></path>
                    </g>
                </g>
            </g>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" id="svg-icon-withdraw">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M17 16.4H6C3.56995 16.4 1.6 14.4301 1.6 12V5C1.6 4.2268 2.2268 3.6 3 3.6H8.99714L9.0002 3.60001C9.44202 3.60001 9.8002 3.24183 9.8002 2.80001C9.8002 2.35818 9.44202 2.00001 9.0002 2.00001L9 2H3C1.34315 2 0 3.34315 0 5V12C0 15.3137 2.68629 18 6 18H17C18.6569 18 20 16.6569 20 15V9L19.9999 8.99999C19.9999 8.55816 19.6417 8.19999 19.1999 8.19999C18.7581 8.19999 18.3999 8.55816 18.3999 8.99999L18.4 9.01259V15C18.4 15.7732 17.7732 16.4 17 16.4ZM4.8 13C4.35817 13 4 12.6418 4 12.2C4 11.7582 4.35817 11.4 4.8 11.4H9.2C9.64183 11.4 10 11.7582 10 12.2C10 12.6418 9.64183 13 9.2 13H4.8Z"
                fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.2255 2.00035C19.6555 2.0138 20 2.36664 20 2.79995C20 3.02787 19.9047 3.23352 19.7518 3.37923L16.6588 6.47223C16.3463 6.78465 15.8398 6.78465 15.5274 6.47223C15.215 6.15981 15.215 5.65327 15.5274 5.34085L17.2683 3.59996H12.8039C12.3621 3.59996 12.0039 3.24178 12.0039 2.79995C12.0039 2.35812 12.3621 1.99995 12.8039 1.99995H19.1947H19.2C19.2085 1.99995 19.217 2.00008 19.2255 2.00035Z"
                fill="currentColor"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" id="svg-icon-youtube">
            <path
                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                fill="#EA3323"></path>
            <path
                d="M25.8002 12.0013C25.8002 12.0013 25.605 10.623 25.0053 10.0165C24.2445 9.2198 23.392 9.2158 23.0012 9.1693C20.2035 8.9668 16.0042 8.9668 16.0042 8.9668H15.9952C15.9952 8.9668 11.7965 8.9668 8.99825 9.1693C8.60725 9.2158 7.75525 9.21955 6.9945 10.0165C6.39475 10.623 6.1995 12.0013 6.1995 12.0013C6.1995 12.0013 6 13.6198 6 15.2385V16.7563C6 18.374 6.19975 19.993 6.19975 19.993C6.19975 19.993 6.395 21.3705 6.99475 21.9775C7.75575 22.7748 8.755 22.7495 9.19975 22.833C10.8 22.9868 16.0002 23.0343 16.0002 23.0343C16.0002 23.0343 20.2027 23.028 23.0015 22.8258C23.3925 22.7788 24.2453 22.775 25.0055 21.978C25.6055 21.3705 25.801 19.9933 25.801 19.9933C25.801 19.9933 26 18.3743 26 16.756V15.2383C26 13.6198 25.8002 12.0013 25.8002 12.0013ZM13.6823 18.8573L13.6815 12.712L19.5907 15.795L13.6823 18.8573Z"
                fill="white"></path>
        </symbol>
    </svg>
    <div id="app">
        <div data-v-6b868a30="" class="page page-auth">
            <div data-v-6b868a30="" class="headers">
                <div class="tw-px-16px tw-w-full tw-h-full tw-flex rtw-items-center" data-v-6b868a30=""
                    style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">

                        <a href="{{route('login')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>
                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 253, 253, 1);"><span></span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">
                        <a href="{{route('user.Withdraw-History')}}">

                            <img data-v-6b868a30="" src="{{ asset('static/icon/langu.png') }}" alt=""
                                class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">

                        </a>
                        <a href="{{route('user.notice')}}">
                            <div>
                                <img data-v-6b868a30="" src="{{ asset('static/img/111.png') }}" alt=""
                                    class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                            </div>

                        </a>
                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <div data-v-6b868a30="" class="page-auth-container tw-h-full tw-p-20px">
                        <div data-v-6b868a30=""
                            class="page-auth-header tw-relative tw-z-10 tw-mb-20px tw-flex tw-items-center"><img
                                data-v-6b868a30="" src="{{ asset('/2.png') }}" alt=""
                                class="tw-w-64px tw-h-64px">
                            <div data-v-6b868a30="" class="tw-pl-12px tw-flex-1">
                                <div data-v-6b868a30="" class="tw-mb-6px tw-text-24px">Hello,</div>
                                <div data-v-6b868a30="" class="tw-text-18px van-ellipsis"> Welcome {{siteName()}}</div>
                            </div>
                        </div>
                        <div data-v-6b868a30="" class="page-auth-content tw-relative tw-z-10">
                            <div data-v-6b868a30="" class="page-auth-form tw-pb-24px">
                                <form action="{{ route('forgot_submit') }}" method="POST">
                                    @csrf

                                    @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-z-0 tw-top-10px tw-flex tw-justify-between tw-items-start">
                                        <div data-v-6b868a30="" class="page-auth-form-title"> Reset Password </div>
                                    </div>
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-z-10 tw-bg-white tw-px-16px tw-pb-20px tw-pt-20px tw-rounded-11px">


                                        <div data-v-6b868a30="" class="tw-mt-16px rtw-text-16px">Mailbox</div>
                                        <div class="van-cell van-field tw-rounded-11px" data-v-6b868a30="">
                                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                                <div class="van-field__body">
                                                    <input type="text" name="email" id="emailId"
                                                        placeholder="Please enter your email address"
                                                        class="van-field__control">
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-6b868a30="" class="tw-mt-16px rtw-text-16px"> Verification code </div>
                                        <div class="van-cell van-field tw-rounded-11px" data-v-6b868a30="">
                                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                                <div class="van-field__body">
                                                    <input type="text" inputmode="numeric" name="code"
                                                        placeholder="Please enter the verification code"
                                                        class="van-field__control">
                                                    <div class="van-field__right-icon">
                                                        <button type="button" style="width:40px;color:black;border-radius: 0 1rem 1rem 0;" class="btn" id="sendButton" onclick="sendVerificationCode()">
                                                            <span id="buttonLabel" style="font-size:15px;">Send</span>
                                                            <span id="countdownTimer" style="display: none;margin: -12px;font-size:18px;"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-v-6b868a30="" class="tw-mt-16px rtw-text-16px">New password</div>
                                        <div class="van-cell van-field tw-rounded-11px" data-v-6b868a30="">
                                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                                <div class="van-field__body"><input type="password"
                                                        autocomplete="new-password" id="password" name="password"
                                                        placeholder="Please enter new password " accept="onkeyup=" this.value=this.value.replace(/[ ]/g,'')" type="password"
                                                        class="van-field__control">
                                                    <div class="van-field__right-icon"><i
                                                            class="van-icon van-icon-closed-eye tw-text-secondary">
                                                        </i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-6b868a30="" class="tw-mt-16px rtw-text-16px">Confirm password</div>
                                        <div class="van-cell van-field tw-rounded-11px" data-v-6b868a30="">
                                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                                <div class="van-field__body"><input type="password"
                                                        autocomplete="new-password" id="password_confirmation" name="password_confirmation"
                                                        placeholder="Please enter confirm password " accept="onkeyup=" this.value=this.value.replace(/[ ]/g,'')" type="password"
                                                        class="van-field__control">
                                                    <div class="van-field__right-icon"><i
                                                            class="van-icon van-icon-closed-eye tw-text-secondary">
                                                        </i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-6b868a30="" class="tw-mt-16px tw-flex rtw-items-center tw-text-14px">

                                            <!-- <a href="/article?id=REGISTRATION_AGREEMENT" class="" data-v-6b868a30="">
                                                I have read the privacy agreement </a> -->
                                        </div>
                                    </div>
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-z-0 tw-bottom-10px tw-flex tw-justify-end"><a href="/login"
                                            class="page-auth-form-footer" data-v-6b868a30=""> Login <i
                                                class="van-icon van-icon-arrow">
                                            </i></a></div>
                                    <div data-v-6b868a30="" class="tw-mt-24px"><button data-v-6b868a30="" type="submit"
                                            class="van-button van-button--default van-button--large">
                                            <div data-v-6b868a30="" class="van-button__content"><span data-v-6b868a30=""
                                                    class="van-button__text"> Reset Password </span></div>
                                        </button></div>
                                </form>
                                @include('partials.notify')

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="van-overlay" style="display: none;">
            <div class="tw-w-full tw-h-full tw-flex tw-justify-center rtw-items-center">
                <div
                    class="tw-w-100px tw-h-100px tw-flex tw-justify-center rtw-items-center tw-bg-dark tw-bg-opacity-10 tw-rounded-11px">
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
    <div class="van-popup van-popup--round van-popup--bottom" style="z-index: 2005; display: none" id="overlay">
        <div class="tw-p-16px tw-overflow-hidden" style="z-index: 2010; display: none" id="popup">
            <div class="tw-text-center tw-text-16px"> Choose an international phone area code </div>
            <div class="van-cell van-field">
                <div class="van-field__left-icon">
                    <i id="cancel" role="button" tabindex="0" class="van-icon van-icon-search"></i>
                </div>
                <div class="van-cell__value van-cell__value--alone van-field__value">
                    <div class="van-field__body">
                        <input type="text" placeholder="Search area code"
                            class="van-field__control" id="country-search" autocomplete="off">
                    </div>
                </div>
            </div>
            <ul class="tw-h-32 tw-overflow-y-auto">
                <div class="country-list" id="country-list"></div>

            </ul>

        </div>
        <i role="button" tabindex="0"
            class="van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right">
        </i>
    </div>


    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>



    <script>
        $(document).ready(function() {

            $("#phone_code").click(function() {
                $("#popup").show();
                $("#overlay").show();
            });
            $("#cancel").click(function() {
                $("#popup").hide();
                $("#overlay").hide();
            });
        });
    </script>
    <?php
    $countries = \DB::table('country')
        ->select('phonecode as code', 'name', 'iso as flag')
        ->get()
        ->map(function ($country) {
            return [
                'code' => '+' . ltrim($country->code, '+'),
                'name' => $country->name,
                'flag' => strtolower($country->flag),
            ];
        })
        ->toArray();
    ?>
    <script>
        const countries = <?php echo json_encode($countries, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>;
    </script>
    <script>
        (function($) {
            function populateList(filteredCountries) {
                const $list = $('#country-list');
                $list.empty();
                filteredCountries.forEach(country => {
                    $list.append(`           
                     <li class="tw-h-42px tw-flex tw-items-center" id="country-list">
                <div class="tw-w-24px tw-h-24px" data-code="${country.code}" data-flag="${country.flag}">
                    <span class="fi fi-${country.flag}"></span>
                    </div>
                <div class="tw-h-full tw-flex-1 tw-flex tw-items-center van-hairline--bottom"> ${country.name} (${country.code}) </div>
            </li>
                    
                `);
                });
            }

            $(document).ready(function() {
                const $popup = $('#popup');
                const $overlay = $('#overlay');
                const $search = $('#country-search');
                const $countryList = $('#country-list');
                const $phone_code = $('#phone_code');
                const $country_iso = $('#country_iso');
                populateList(countries); // Initial population of the list

                // Show popup when input is focused
                $search.on('focus', function() {
                    $popup.show();
                    $overlay.show();
                });

                // Hide popup when clicking outside
                $overlay.on('click', function() {
                    $popup.hide();
                    $overlay.hide();
                });

                // Filter the list based on search input
                $search.on('input', function() {
                    const searchTerm = $(this).val().toLowerCase();
                    const filteredCountries = countries.filter(country =>
                        country.name.toLowerCase().includes(searchTerm) || country.code.includes(
                            searchTerm)
                    );
                    populateList(filteredCountries);
                });

                // Handle country selection
                $countryList.on('click', 'div', function() {
                    const countryCode = $(this).data('code');
                    const countryIso = $(this).data('flag'); // Correct way to get the ISO code
                    $phone_code.find('span').text(countryCode);
                    $('#country-name').val($(this).text().split('(')[0].trim());
                    $('#dial-code').val(countryCode.replace('+', ''));
                    $('#country_iso').val(countryIso.toUpperCase()); // Set the ISO code correctly
                    $popup.hide();
                    $overlay.hide();
                });
                // Hide popup when the close icon is clicked
                $('#cancel').on('click', function() {
                    $popup.hide();
                    $overlay.hide();
                });
            });
        }(jQuery));
    </script>




    <script>
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


    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
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

            sendButton.disabled = true;

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
                .then(res => res.json())
                .then(data => {
                    iziToast.success({
                        message: "Code sent successfully.",
                        position: "topRight"
                    });
                })
                .catch(err => {
                    iziToast.error({
                        message: "Code sent failed.",
                        position: "topRight"


                    });
                    console.error(err);
                });
        }
    </script>

</body>

</html>
<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>Equvia Strategy</title>
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
    <link href="{{ asset('') }}static/eed/js/chunk-02c8c6ba.e6ce0cf8.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-03c1575b.3e7d5deb.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-0566fd30.54cec5fc.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-08efff57.e7d2211e.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-146e34fc.71366adb.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-18e03ad8.59f8f8a0.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-19b6a8e4.3b65fe58.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-19e32f24.ec62c3f7.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-1cc9e062.1c851893.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-1ee97074.56275ac5.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-23dc19ae.41643e95.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-256b9400.f7e486aa.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-25a0e88c.4e08fd2e.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-267a32e6.193794b3.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-285466cd.1fee2e06.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-29126459.ce2f338d.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2a53918e.f5cd7495.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2c3295d4.abd7d7bd.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2cd18a7d.f37bfa04.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0a482c.22971d1b.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0a4bce.8bc33f3b.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0aec69.24f884e8.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0af4bb.4e868bee.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0d09bb.e2e1a111.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0d697d.1f674f19.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0d6f02.dd6bdd21.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0d8021.ccc86eec.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0e48bf.df06201a.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d0f0f34.b139ae44.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d20979d.70a797b0.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d212f56.94099410.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d21b536.0c2aa775.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d21f097.e7facfb5.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d221444.770f7e37.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d22d3f8.67a86445.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2d22d813.61a8be3e.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-2ec80ff3.07938ce0.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-3d3dcf32.5d17c1d9.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-45610082.add35a6f.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-4e5f1a7a.c4ae6cc4.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-50b10c92.01a6be8c.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-51107498.d0f576b5.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-54637b65.847a74f5.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-5872ff8d.8ebbd8b2.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-5a04fba1.af03e330.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-5b6ac7a8.7a89b73b.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-5c64915e.c084ce21.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-5f0d6286.a7ae8bdc.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-616795b6.b7e63cc2.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-6c7affd0.065e9a8a.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-6da4369c.2a245889.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-6de1bc62.d4778e4b.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-7136a154.b8492953.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-74147bd1.ed438ba9.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-757ca954.ad69c870.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-75ad7c0e.428e52c8.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-785ac04e.31468def.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-78742a63.3b8a24a7.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-78fb2058.fdae4e23.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-7aea5d2b.8c73affa.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-7c80ecb0.6eedf55a.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-7dfd5052.0df840c3.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-84d1de02.7b169b0e.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-891177f6.c1b719a2.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-926160c6.3f177ae1.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-a704e872.ddbd067c.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-a961b78c.923cdbe2.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-ad302a42.bf25b888.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-b124f7bc.38a4e04a.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-b205bdbe.5c6a1f3c.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-b45589e4.b98ec75e.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-b68f65e0.5d60f042.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-bc37b504.f51a5405.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-bf393944.b3025197.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-c0a3e2fa.19a3da91.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-c5fb740a.bb7c7872.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-dab37d56.5c5b3cfd.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-ded9edba.70ade7c0.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-ea0143b0.df6a01ac.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-ee39cd88.ee49685e.js" rel="prefetch">
    <link href="{{ asset('') }}static/eed/js/chunk-f6532530.1e0297b2.js" rel="prefetch">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/eed/js/app.5acd7986.js" rel="preload" as="script">
    <link href="{{ asset('') }}static/eed/js/chunk-vendors.b893e1dd.js" rel="preload" as="script">
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="stylesheet">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-b124f7bc.38a4e04a.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-51107498.c550911e.css">
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-51107498.d0f576b5.js"></script>
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

        .custom-dropdown {
            /* Green */
            color: #fff;
            border-radius: 6px;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .custom-dropdown:hover {
            background-color: #0c0c0cff;
            color: #fff;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-18e03ad8.59f8f8a0.js"></script>
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-2d0d09bb.e2e1a111.js"></script>
    <script charset="utf-8" src="{{ asset('') }}static/eed/js/chunk-2d0a482c.22971d1b.js"></script>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-a961b78c.b074a75d.css">
    <script charset="utf-8" src="/static/1756094289381/js/chunk-a961b78c.923cdbe2.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-1ee97074.f442ee68.css">
    <script charset="utf-8" src="/static/1756094289381/js/chunk-1ee97074.56275ac5.js"></script>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-ea0143b0.0982c731.css">
    <script charset="utf-8" src="/static/1756094289381/js/chunk-ea0143b0.df6a01ac.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-267a32e6.0d9f6f8d.css">
    <script charset="utf-8" src="/static/1756094289381/js/chunk-267a32e6.193794b3.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/1756094289381/css/chunk-926160c6.52e9758a.css">
    <script charset="utf-8" src="/static/1756094289381/js/chunk-926160c6.3f177ae1.js"></script>
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

<body class="">




    <div id="app">
        <div data-v-6b868a30="" class="page">
            <div data-v-6b868a30="" class="headers">
                <div class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center" data-v-6b868a30=""
                    style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{route('user.profile')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>

                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Personal information</span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">
                        <a href="{{ route('user.lang') }}">
                            <img data-v-6b868a30="" src="{{ asset('static/icon/lang.png') }}" alt="" class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        </a>

                        <div>
                            <a href="{{ route('user.notice') }}">
                                <img data-v-6b868a30="" src="{{ asset('static/img/111.png') }}" alt="" class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <div data-v-6b868a30="" class="tw-min-h-full tw-p-16px tw-flex tw-flex-col tw-justify-between">
                        <form action="{{ route('user.infochange') }}" method="POST">
                            @csrf
                            <div data-v-6b868a30="" class="tw-flex-1">
                                <div data-v-6b868a30="" class="tw-mt-32px tw-mb-20px tw-flex tw-justify-center">
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-w-100px tw-h-100px tw-flex tw-justify-center tw-items-center tw-rounded-full tw-border-2 tw-border-primary">
                                        <img data-v-6b868a30="" alt="" class="tw-w-80px tw-h-80px tw-rounded-full" style="border: 4px solid #069d6a; border-radius:50%;"
                                            src="{{ asset('') }}2.png">
                                        <div data-v-6b868a30=""
                                            class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-opacity-0"><input
                                                data-v-6b868a30="" type="file" accept="image/*"
                                                class="tw-w-full tw-h-full tw-opacity-0"></div>
                                        <div data-v-6b868a30="" class="tw-absolute tw-bottom-0 tw-right-0">
                                            <svg
                                                data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                                                style="color: rgb(255, 255, 255); width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">

                                                <use data-v-3f1a7394="" xlink:href="#svg-icon-edit"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-mb-16px tw-rounded-10px van-cell1 van-cell--large van-field"
                                    data-v-6b868a30="">
                                    <div class="van-cell__title van-field__label"><span>Nickname</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <input type="text" name="name" placeholder="" value="{{$user->name}}"
                                                class="van-field__control1 van-field__control--right">
                                        </div>
                                    </div>
                                </div>
                                <div class="tw-mb-16px tw-rounded-10px van-cell1 van-cell--large van-field"
                                    data-v-6b868a30="">
                                    <div class="van-cell__title van-field__label"><span>Gender</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <div class="van-field__control van-field__control--right van-field__control--custom">
                                                <div role="radiogroup" class="van-radio-group van-radio-group--horizontal">

                                                    <select id="genderInput" name="gender" class="van-field__control1 van-field__control--right custom-dropdown">
                                                        <option value="">-- Select Gender --</option>
                                                        <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                                        <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                                    </select>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tw-mb-16px tw-rounded-10px van-cell1 van-cell--large van-field"
                                    data-v-6b868a30="">
                                    <div class="van-cell__title van-field__label"><span>Mobile number</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="text" readonly="" value="{{$user->phone}}"
                                                class="van-field__control van-field__control--right"
                                                placeholder="Enter your nickname"></div>
                                    </div>
                                </div>
                            </div><button data-v-6b868a30="" type="submit"
                                class="van-button van-button--primary van-button--normal van-button--block">
                                <div data-v-6b868a30="" class="van-button__content"><span data-v-6b868a30=""
                                        class="van-button__text"> Update </span></div>
                            </button>
                        </form>
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

</body>

</html>
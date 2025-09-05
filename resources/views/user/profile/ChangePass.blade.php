<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>Equvia Strategy</title>

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

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-51107498.c550911e.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">

</head>

<body class="">

    <div id="app">
        <div data-v-6b868a30="" data-v-7c19a79c="" class="page">
            <div data-v-6b868a30="" class="headers">
                <div data-v-7c19a79c="" class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center"
                    data-v-6b868a30="" style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{ route('user.profile') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>

                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Modify login password</span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">


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
                    <div data-v-7c19a79c="" data-v-6b868a30="" class="tw-h-full tw-p-16px tw-flex tw-flex-col">
                        <form method="post" action="{{ route('user.edit-password') }}">
                            {{ csrf_field() }}

                            <div data-v-7c19a79c="" data-v-6b868a30="" class="tw-flex-1 tw-mb-32px">


                                <div data-v-7c19a79c="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px"> New
                                    password </div>
                                <div data-v-7c19a79c="" class="van-cell1 van-field .tw-rounded-11px" data-v-6b868a30="">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body">
                                            <input type="password" name="password"
                                                placeholder="Please enter a password "
                                                class="van-field__control1">
                                            <div class="van-field__right-icon"><i data-v-7c19a79c="" id="eyeIcon2"
                                                    class="van-icon van-icon-closed-eye tw-text-secondary" onclick="togglePassword('passwordInput2','eyeIcon2')">
                                                </i></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-7c19a79c="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px"> Confirm
                                    password </div>
                                <div data-v-7c19a79c="" class="van-cell1 van-field .tw-rounded-11px" data-v-6b868a30="">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body">
                                            <input type="password" name="password_confirmation" id=""
                                                placeholder="Please enter a password "
                                                class="van-field__control1">
                                            <div class="van-field__right-icon"><i data-v-7c19a79c="" id="eyeIcon2"
                                                    class="van-icon van-icon-closed-eye tw-text-secondary" onclick="togglePassword('passwordInput2','eyeIcon2')"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <input data-v-47636760="" data-v-6e2d35de="" type="hidden" name="email" id="emailId" value="{{Auth::user()->email}}">
                                <div data-v-7c19a79c="" data-v-6b868a30="" class="tw-mt-16px tw-mb-10px tw-text-14px">
                                    Varification Code </div>
                                <div data-v-7c19a79c="" class="van-cell1 van-field .tw-rounded-11px" data-v-6b868a30="">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body">
                                            <input type="text" name="code"
                                                placeholder="Email Verification code"
                                                class="van-field__control1">
                                            <button type="button" style="width:40px;color:white;border-radius: 0 1rem 1rem 0;" class="btn" id="sendButton" onclick="sendVerificationCode()">
                                                <span id="buttonLabel" style="margin: -12px;font-size:15px;">Send</span>
                                                <span id="countdownTimer" style="display: none;margin: -12px;font-size:18px;"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-7c19a79c="" data-v-6b868a30=""
                                    class="tw-mt-18px tw-p-14px tw-text-14px tw-bg-white1 .tw-rounded-11px">
                                    <div data-v-7c19a79c="" data-v-6b868a30="" class="tw-flex tw-items-center"><i
                                            data-v-7c19a79c="" data-v-6b868a30=""
                                            class="tw-text-20px van-icon van-icon-warning"
                                            style="color: rgba(255, 255, 255, 1);">
                                        </i><span data-v-7c19a79c="" data-v-6b868a30=""
                                            class="tw-text-primary tw-pl-8px"> Reminder </span></div>
                                    <div data-v-7c19a79c="" data-v-6b868a30=""
                                        class="tw-text-14px tw-text-secondary tw-mt-8px"> To ensure the security of your
                                        account, you can withdraw money only 48 hours after resetting your login password
                                    </div>
                                </div>
                            </div>
                            <button data-v-7c19a79c="" data-v-6b868a30="" type="submit"
                                class="van-button van-button--default van-button--normal van-button--block">
                                <div data-v-7c19a79c="" data-v-6b868a30="" class="van-button__content"><span
                                        data-v-7c19a79c="" data-v-6b868a30="" class="van-button__text"> Confirm </span>
                                </div>
                            </button>
                        </form>

                    @include('partials.notify')

                    </div>
                </div>
            </div>

        </div>
        <div class="van-overlay" style="display: none;">
            <div class="tw-w-full tw-h-full tw-flex tw-justify-center tw-items-center">
                <div
                    class="tw-w-100px tw-h-100px tw-flex tw-justify-center tw-items-center tw-bg-dark tw-bg-opacity-10 .tw-rounded-11px">
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
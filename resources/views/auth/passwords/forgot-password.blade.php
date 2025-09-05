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
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5c64915e.135fdcf8.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
</head>

<body datasqstyle="{&quot;top&quot;:0,&quot;position&quot;:&quot;static&quot;}"
    datasquuid="376203bd-baee-4dd8-8666-c64e25faa7ca" style="top: 40px; position: relative;">

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
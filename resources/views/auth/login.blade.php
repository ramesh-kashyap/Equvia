<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>Login</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css" />


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

<style>
    .tw-text-16px {
        font-size: .42667rem;
        color: #fff;
        margin-bottom: 18px;
    }

    .van-cell {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        box-sizing: border-box;
        width: 100%;
        padding: .16667rem .42667rem;
        overflow: hidden;
        color: #18191c;
        font-size: .37333rem;
        line-height: .64rem;
        background-color: #fff;
    }
</style>

<body datasqstyle="{&quot;top&quot;:0,&quot;position&quot;:&quot;static&quot;}"
    datasquuid="376203bd-baee-4dd8-8666-c64e25faa7ca" style="top: 40px; position: relative;">
    <div id="app">
        <div data-v-6b868a30="" class="page page-auth">
            <div data-v-6b868a30="" class="headers">
                <div class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center" data-v-6b868a30=""
                    style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center"><svg data-v-3f1a7394=""
                            aria-hidden="true" class="svg-icon"
                            style="color: rgba(255, 255, 255, 1); width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-close"></use>
                        </svg>

                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center rtw-text-16px van-ellipsis"
                        style="color: rgb(24, 25, 28);"><span></span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">
                        <img data-v-6b868a30="" src="{{ asset('static/icon/lang.png') }}" alt=""
                            class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        <img data-v-6b868a30="" src="{{ asset('static/icon/langu.png') }}" alt=""
                            class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        <div>
                            <img data-v-6b868a30="" src="{{ asset('static/img/111.png') }}" alt=""
                                class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        </div>

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
                                <div data-v-6b868a30="" class="tw-text-18px van-ellipsis"> Welcome SEOKORE </div>
                            </div>
                        </div>
                        <form action="{{ route('login') }}" method="POST" name="login_frm" id="form-id">
                            {{ csrf_field() }}
                            <div data-v-6b868a30="" class="page-auth-content tw-relative tw-z-10">
                                <div data-v-6b868a30="" class="page-auth-form tw-pb-24px">
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-z-0 tw-top-10px tw-flex tw-justify-between tw-items-start">
                                        <div data-v-6b868a30="" class="page-auth-form-title"> Login </div>
                                    </div>
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-z-10 tw-bg-white tw-px-16px tw-pb-20px tw-rounded-10px">
                                        <div class="van-tabs van-tabs--line" data-v-6b868a30="">
                                            <div class="van-tabs__wrap van-hairline--top-bottom">
                                                <div role="tablist" class="van-tabs__nav van-tabs__nav--line">
                                                    <div role="tab" class="van-tab"><span
                                                            class="van-tab__text van-tab__text--ellipsis"
                                                            onclick="Mobileplate()">Mobile
                                                            login</span></div>
                                                    <div role="tab" class="van-tab van-tab--active"
                                                        aria-selected="true">
                                                        <span class="van-tab__text van-tab__text--ellipsis"
                                                            onclick="Emailplate()">Email
                                                            login</span>
                                                    </div>
                                                    <div class="van-tabs__line" id="stlech"
                                                        style="transform: translateX(258px) translateX(-50%); transition-duration: 0.3s;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="van-tabs__content">
                                                <div role="tabpanel" class="van-tab__pane" id="mobilephase"
                                                    style="display:none">
                                                    <div class="tw-mt-20px rtw-text-16px"> Mobile phone </div>
                                                    <div class="van-cell van-field tw-rounded-11px">
                                                        <div class="van-field__left-icon">
                                                            <div class="tw-flex rtw-items-center" id="phone_code">
                                                                <input type="hidden" id="country-name"
                                                                    name="country" value="CANADA">
                                                                <input type="hidden" id="dial-code" name="dialCode"
                                                                    value="1">
                                                                <input type="hidden" id="country_iso"
                                                                    name="country_iso" value="CA">
                                                                <span class="tw-pr-4px"
                                                                    style="display: block;">+1</span>
                                                                <i class="van-icon van-icon-arrow-down">
                                                                </i>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="van-cell__value van-cell__value--alone van-field__value">
                                                            <div class="van-field__body">
                                                                <input type="text"
                                                                    onkeyup="this.value=this.value.replace(/[ ]/g,'')"
                                                                    name="phone"
                                                                    placeholder="Please enter your phone number"
                                                                    class="van-field__control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div></div>
                                                </div>
                                                <div role="tabpanel" class="van-tab__pane" id="emailphase"
                                                    style="">
                                                    <div class="tw-mt-20px rtw-text-16px"> Mailbox </div>
                                                    <div class="van-cell van-field tw-rounded-11px">
                                                        <div
                                                            class="van-cell__value van-cell__value--alone van-field__value">
                                                            <div class="van-field__body"><input type="text"
                                                                    name="email"
                                                                    placeholder="Please enter your email address"
                                                                    class="van-field__control"></div>
                                                        </div>
                                                    </div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-6b868a30="" class="tw-mt-20px rtw-text-16px">Login Password</div>
                                        <div class="van-cell van-field tw-rounded-11px" data-v-6b868a30="">
                                            <div class="van-cell__value van-cell__value--alone van-field__value">
                                                <div class="van-field__body"><input type="password"
                                                        autocomplete="new-password" name="password"
                                                        id="passwordInput" placeholder="Please enter a password"
                                                        onkeyup="this.value=this.value.replace(/[ ]/g,'')"
                                                        class="van-field__control">
                                                    <div class="van-field__right-icon" onclick="togglePassword()">
                                                        <i id="eyeIcon"
                                                            class="van-icon van-icon-closed-eye tw-text-secondary"
                                                            style="cursor: pointer;">
                                                        </i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-6b868a30=""
                                            class="tw-mt-16px tw-flex rtw-items-center tw-text-14px">
                                            <div role="checkbox" tabindex="0" aria-checked="false"
                                                class="tw-mr-8px rounded van-checkbox" data-v-6b868a30="">
                                                <div class="van-checkbox__icon van-checkbox__icon--square">

                                                    <input type="checkbox" name="checkbox" id="checkbox">
                                                </div><span class="van-checkbox__label" style="  margin-bottom: 9px;">
                                                    Remember account
                                                    password </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-6b868a30=""
                                        class="tw-relative tw-z-0 tw-bottom-10px tw-flex tw-justify-between rtw-items-center">
                                        <a href="{{ route('forgot-password') }}" class="rtw-mt-12px "
                                            style="color: #ffffffff;" data-v-6b868a30=""> Forgot password? </a><a
                                            href="{{ route('register') }}" class="page-auth-form-footer"
                                            data-v-6b868a30=""> Registration <i class="van-icon van-icon-arrow">
                                            </i></a>
                                    </div>
                                    <div data-v-6b868a30="" class="tw-mt-24px"><button data-v-6b868a30=""
                                            type="submit"
                                            class="van-button van-button--default van-button--large van-button--block">
                                            <div data-v-6b868a30="" class="van-button__content"><span
                                                    data-v-6b868a30="" class="van-button__text"> Login </span></div>
                                        </button></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="van-overlay" style="display: none;">
            <div class="tw-w-full tw-h-full tw-flex tw-justify-center rtw-items-center">
                <div
                    class="tw-w-100px tw-h-100px tw-flex tw-justify-center rtw-items-center tw-bg-dark tw-bg-opacity-10 tw-rounded-10px">
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
                        <input type="text" placeholder="Search area code" class="van-field__control"
                            id="country-search" autocomplete="off">
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
    <script>
        function Mobileplate() {
            document.getElementById("stlech").style.transform =
                "translateX(80px) translateX(-50%)"; // Move to 80px
            document.getElementById("mobilephase").style.display =
                ""
            document.getElementById("emailphase").style.display =
                "none"
        }

        function Emailplate() {
            document.getElementById("stlech").style.transform =
                "translateX(258px) translateX(-50%)"; // Move to 258px
            document.getElementById("emailphase").style.display =
                ""
            document.getElementById("mobilephase").style.display =
                "none"
        }
    </script>
    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>

    @include('partials.notify')

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
                     <li class="tw-h-42px tw-flex tw-items-center">
                <div class="tw-w-24px tw-h-24px" >
                    <span class="fi fi-${country.flag}"></span>
                    </div>
                <div class="tw-h-full tw-flex-1 tw-flex tw-items-center van-hairline--bottom" data-code="${country.code}" data-flag="${country.flag}"> ${country.name} (${country.code}) </div>
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
                // $overlay.on('click', function() {
                //     $popup.hide();
                //     $overlay.hide();
                // });

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

                    console.log($(this)[0]);
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
        document.getElementById('form-id').addEventListener('submit', function(e) {
            const checkboxIcon = document.getElementById('checkbox-icon');

            // Check if the checkbox is in the checked state
            if (!checkboxIcon.classList.contains('van-checkbox__icon--checked')) {
                e.preventDefault(); // Prevent form submission
                iziToast.error({
                    message: 'Please check the box to continue.',
                    position: "topRight"
                });
            }
        });

        // Toggle checkbox state on click
        document.getElementById('checkbox').addEventListener('click', function() {
            const checkboxIcon = document.getElementById('checkbox-icon');
            checkboxIcon.classList.toggle('van-checkbox__icon--checked');
            checkboxIcon.classList.toggle('van-checkbox__icon--unchecked');
        });
    </script>


    <script>
        var input = document.querySelector('#phone');
        var info = document.querySelector('#info');
        var status = document.getElementById('status');
        var iti = window.intlTelInput(input, {
            initialCountry: "auto",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" 
        });

        input.addEventListener('blur', function() {
            if (iti.isValidNumber()) {
                status.textContent = 'Valid number';
                status.className = 'valid-number';
            } else {
                status.textContent = 'Invalid number';
                status.className = 'invalid-number';
            }
        });

        input.addEventListener('countrychange', function() {
            updateCountryInfo(); // Update the information displayed when the country changes
        });

        function updateCountryInfo() {
            var countryData = iti.getSelectedCountryData();
            console.log(countryData)

            $('#country-name').val(countryData.name)
            $('#dial-code').val(countryData.dialCode)
            $('#country_iso').val(countryData.iso2)

        }

        // Initialize with the current selected country's info
        document.addEventListener('DOMContentLoaded', updateCountryInfo);
    </script>
</body>

</html>
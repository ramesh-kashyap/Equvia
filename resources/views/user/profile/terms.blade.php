<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>

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

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-51107498.c550911e.css">
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
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
</head>

<body>

    <div id="app">
        <div data-v-6b868a30="" data-v-2be00b70="" class="page">
            <div data-v-6b868a30="" class="headers">
                <div data-v-2be00b70="" class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center"
                    data-v-6b868a30="" style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{ route('user.profile') }}">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                            </svg>
                        </a>

                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Operation Center </span></div>
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
                    <div data-v-2be00b70="" data-v-6b868a30="" class="tw-min-h-full tw-p-16px">
                        <div data-v-2be00b70="" data-v-6b868a30="" class="tw-p-16px tw-bg-white3 tw-rounded-10px">
                            <p><strong>Equvia Company Terms of Use</strong></p>

                            <p>Welcome to use Equvia's products and services! We are well aware of the importance of
                                personal information, so we promise to strictly abide by relevant laws and regulations
                                and take effective security protection measures to ensure that your personal information
                                is protected in a safe and controllable manner. To help you fully understand our privacy
                                practices, we have developed this Privacy Policy, which details how we collect, use,
                                share, store and protect your personal information and how you can manage it. </p>

                            <p>Please read and understand this policy carefully before you use our products and
                                services. We'll explain the terms involved in plain, easy-to-understand language to
                                ensure you clearly understand their meaning. If you have any questions or suggestions
                                about this policy, please feel free to contact us. </p>

                            <p>Agreeing to this Privacy Policy indicates that you have fully understood the functions we
                                provide and the necessary personal information required to run them, and agree that we
                                collect and use this information as described in this policy. This does not mean that
                                you automatically consent to any additional features or the processing of non-essential
                                personal information. We will separately seek your consent based on your actual use
                                needs to ensure that you maintain full control over the use and sharing of personal
                                information. </p>

                            <p><strong>Equvia business operation rules are summarized as follows:</strong></p>

                            <p><strong>Age requirements</strong></p>

                            <ul>
                                <li>Equvia users must be over 18 years old. </li>
                                <li>When using Equvia services, users must fully agree and accept Equvia's business
                                    operating rules. </li>
                            </ul>

                            <p><strong>Basic User Services</strong></p>

                            <ul>
                                <li>On the Equvia platform, basic services involve account creation and management.
                                </li>
                                <li>To create a Equvia account, you need to provide your mobile phone number, member
                                    name and password. </li>
                                <li>If you do not provide this information, you will not be able to register and will
                                    only be able to browse and search. </li>
                                <li>We determine your account level based on your account usage and platform rules, and
                                    provide corresponding basic rights and interests. </li>
                            </ul>

                            <p><strong>Additional user services</strong></p>

                            <ul>
                                <li>Special user rights: Provide more information (such as real name, email, withdrawal
                                    wallet address, nickname, avatar) to enjoy personalized services. </li>
                                <li>Nickname and avatar will be displayed publicly. </li>
                                <li>For users who already have accounts, their personal information, offers and orders
                                    may be displayed on the Equvia platform. </li>
                                <li>Respect users’ personal setting choices on the Equvia platform. </li>
                            </ul>

                            <p><strong>Authentication</strong></p>

                            <ul>
                                <li>In order to meet legal and regulatory requirements and ensure account security, we
                                    need to verify user identity in certain services/functions. </li>
                                <li>Account retrieval: Collect identity information (real name, identity authentication,
                                    Google authentication information) to assist in account recovery. </li>
                            </ul>

                            <p><strong>Rule modification</strong></p>

                            <ul>
                                <li>Equvia reserves the right to modify the business rules when necessary. </li>
                                <li>If business operation rules change, Equvia will prompt users to make changes on
                                    important pages. </li>
                                <li>If the user does not agree to the changes, he or she can choose to cancel the
                                    relevant services. </li>
                                <li>Continued use of the service is deemed to be acceptance of the changes to the terms
                                    of service. </li>
                            </ul>

                            <p><strong>Service Scope</strong></p>

                            <ul>
                                <li>Equvia provides strategic order operations, related information and online payment
                                    and settlement services. </li>
                                <li>Excludes the provision of computer terminals, auxiliary equipment, network and
                                    communication resources for registered members. </li>
                            </ul>

                            <p><strong>Privacy Protection</strong></p>

                            <ul>
                                <li>Equvia is committed to maintaining the confidentiality of user registration
                                    information and private information. </li>
                                <li>Users are required to keep their passwords and account information confidential and
                                    are responsible for all activities in their accounts. </li>
                                <li>Users should contact Equvia immediately when discovering illegal use or security
                                    vulnerabilities. </li>
                            </ul>

                            <p><strong>Accuracy of registration information</strong></p>

                            <ul>
                                <li>When registering, users must fill in personal information in accordance with the
                                    principle of authenticity. </li>
                                <li>Equvia does not bear legal responsibility for abnormal situations caused by users
                                    themselves. </li>
                            </ul>

                            <p><strong>Fund security</strong></p>

                            <ul>
                                <li>The Equvia system will strictly review funds to ensure the safety of user funds.
                                </li>
                            </ul>

                            <p><strong>Legitimate rights protection</strong></p>

                            <ul>
                                <li>Equvia will take legal measures to protect the legitimate rights and interests of
                                    users and the company. </li>
                            </ul>

                            <p><strong>Right of interpretation of terms</strong></p>

                            <ul>
                                <li>Equvia has the final right to interpret all terms and content. </li>
                            </ul>

                            <p><strong>Prohibitions</strong></p>

                            <ul>
                                <li>Malicious use of multiple Equvia accounts is prohibited. </li>
                                <li>It is prohibited to maliciously waste company resources. </li>
                                <li>Theft of company and user assets is prohibited. </li>
                                <li>Impersonating Equvia officials and defaming Equvia is prohibited. </li>
                            </ul>

                            <p><strong>Information technology support service specifications</strong></p>

                            <ul>
                                <li>Equvia carries out user information technology support service survey activities to
                                    improve user experience and service quality. </li>
                                <li>Users can provide suggestions and feedback in a variety of ways. </li>
                                <li>Equvia will actively pay attention to user feedback and complaints and provide
                                    solutions. </li>
                                <li>Continuously improve the quality of products and services, and increase user return
                                    rates and awareness. </li>
                            </ul>

                            <p>In order to enhance user experience and improve product quality and service levels,
                                Equvia carries out user information technology support service survey activities. Users
                                can make suggestions in a variety of ways, including Telegram, Whatsapp email, SMS, etc.
                                Equvia will actively pay attention to user feedback and complaints and provide
                                solutions to win user trust and loyalty. The platform will continue to improve the
                                quality of products and services and increase user awareness. This service rule aims to
                                clarify the user service scope of the Equvia platform and ensure that users understand
                                their rights and obligations during use. We encourage users to read these rules
                                carefully to better understand and utilize the services of the Equvia platform. </p>

                            <p><strong>Equvia has the final right to interpret all the above terms and content.
                                </strong></p>
                        </div>
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

    <div class="van-toast van-toast--middle van-toast--text" style="z-index: 2002; display: none;">
        <div class="van-toast__text">The trial period has expired and quantification is prohibited.</div>
    </div>
</body>

</html>
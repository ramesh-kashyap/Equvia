<html data-dpr="1" style="font-size: 42.5px; max-width: 425px; margin: 0px auto;">

<head>
    <meta charset="utf-8">
    <title>{{siteName()}}</title>

    <link rel="icon" href="{{ asset('2.png') }}">

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
    <link href="{{ asset('') }}static/css/chunk-vendors.843dcc67.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.5003e83e.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-51107498.c550911e.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-18e03ad8.50afbc77.css">
<style>
      .pagination {
          display: flex
;
    justify-content: center;
    list-style: none;
    padding-left: 0;
    /* margin: 19px 9px; */
    gap: 5px;
    overflow-x: scroll;
      }
      .page-item {
      display: inline-block;
      }
      .page-link {
      display: block;
      padding: 5px 8px;
      color: rgb(25 140 82 / 11%);
      background-color: #f9f9f9;
      border: 1px solid rgb(25 140 82 / 11%);
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: background-color 0.3s, color 0.3s;
      }
      .page-link:hover {
      background-color: rgb(25 140 82 / 11%);
      color: white;
      }
      .page-item.active .page-link {
      background-color: rgb(25 140 82 / 11%);
      color: white;
      border-color: rgb(25 140 82 / 11%);
      font-weight: 600;
      }
      .page-item.disabled .page-link {
      color: #aaa;
      background-color: #eee;
      border-color: #ddd;
      cursor: not-allowed;
      pointer-events: none;
      }
      .page-link {
      transition: all 0.2s ease-in-out;
      }
      .page-link {
      background-color: #222;
      color: rgb(25 140 82 );
      border: 1px solid rgb(25 140 82 / 11%);
      }
      .page-link:hover,
      .page-item.active .page-link {
      background-color: rgb(25 140 82 / 11%);
      color: #fff;
      }
      .tw-rounded-10px {
    border-radius: .26667rem;
    border: 1px solid #7e7d7d;
    /* border-radius: 10px; */
}
   </style>
 
</head>

<body>
    <div id="app">
        <div data-v-6b868a30="" data-v-6a8ea654="" class="page">
           <div data-v-6b868a30="" class="headers">
                <div data-v-7c19a79c="" class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center"
                    data-v-6b868a30="" style="background-color: transparent;">
                    <div class="tw-w-44px tw-h-full tw-flex tw-items-center">
                        <a href="{{ route('user.asset') }}">
                           <img data-v-6b868a30="" src="{{ asset('static/img/icons8-back-48.png') }}" alt="" class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        </a>
                    </div>
                    <div class="tw-flex-1 tw-h-full tw-flex tw-justify-center tw-items-center tw-text-16px van-ellipsis"
                        style="color: rgba(255, 255, 255, 1);"><span>Team List</span></div>
                    <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">
                        <!-- <a href="{{ route('user.lang') }}">
                            <img data-v-6b868a30="" src="{{ asset('static/icon/lang.png') }}" alt="" class="svg-icon" style=" width: 0.4706rem; height: 0.4706rem; font-size: 0.4706rem;">
                        </a> -->
                        
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
                    <div data-v-6a8ea654="" data-v-6b868a30="" class="page-team-record tw-min-h-full tw-p-16px">
                        <ul data-v-6a8ea654="" data-v-6b868a30=""
                            class="tab-list tw-mb-16px tw-h-40px tw-p-4px tw-flex tw-justify-between tw-items-stretch tw-bg-white1 tw-rounded-10px">
                            @for ($l = 1; $l <= 3; $l++)
                            <li data-v-6a8ea654="" data-v-6b868a30=""
                                class="tab tw-flex-1 tw-h-32px tw-flex tw-justify-center tw-items-center tw-text-secondary tw-rounded-8px tw-text-primary {{ Session::get('selected_level') == $l ? 'tw-bg-primary tw-bg-opacity-10' : '' }}">
                                <a href="{{ route('user.referral-team') }}?selected_level={{ $l }}">{{ $l }} Gen</a>
                             </li>
                                @endfor
                        </ul>
                        <div data-v-6a8ea654="" class="van-pull-refresh" data-v-6b868a30="">
                            <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                                <div class="van-pull-refresh__head" style="height: 50px;"></div>
                                <div data-v-6a8ea654="" role="feed" class="van-list" style="overflow:scroll; height:100%">
                                    <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                        <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                        @foreach ($direct_team as $value)
                                    <div data-v-6a8ea654=""
                                        class="tw-relative tw-mb-12px tw-px-16px tw-py-12px tw-bg-white1 tw-rounded-10px">
                                        <div data-v-6a8ea654=""
                                            class="tw-mb-16px tw-pb-14px tw-h-74px tw-flex tw-items-center van-hairline--bottom">
                                            <div data-v-6a8ea654="" class="tw-flex-1 tw-flex tw-items-center">
                                                    <img data-v-6a8ea654="" alt="" class="tw-mr-8px tw-w-36px tw-h-36px tw-rounded-full" style="border: 4px solid #069d6a; border-radius:50%;"
                                            src="{{ asset('') }}2.png">
                                                <ul data-v-6a8ea654="">
                                                    <li data-v-6a8ea654="">ID：{{ $value->username }}</li>
                                                    <li data-v-6a8ea654="" class="tw-text-secondary tw-text-12px"> {{ '(+' . substr($value->phone, 0, 4) . '****' . substr($value->phone, -4) . ')' }} </li>
                                                    <li data-v-6a8ea654="" class="tw-text-secondary tw-text-12px">
                                                       {{ date('D, d M Y H:i:s', strtotime($value->created_at)) }} </li>
                                                    <!-- <li data-v-6a8ea654=""><span data-v-6a8ea654=""
                                                            class="tw-text-secondary tw-text-12px">User
                                                            level：</span><span data-v-6a8ea654=""
                                                            style="text-transform: uppercase;">SK 0</span></li> -->
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <ul data-v-6a8ea654="" class="tw-flex tw-justify-between tw-items-center">
                                            <!-- <li data-v-6a8ea654="" class="tw-flex-1 tw-text-center">
                                                <div data-v-6a8ea654="" class="tw-mb-4px"> 6 USDT </div>
                                                <div data-v-6a8ea654="" class="tw-text-secondary tw-text-12px"> Total
                                                    Income </div>
                                            </li> -->
                                            <li data-v-6a8ea654="" class="tw-flex-1 tw-text-center">
                                                <div data-v-6a8ea654="" class="tw-mb-4px"> {{ $value->investments->sum('amount') }} USDT </div>
                                                <div data-v-6a8ea654="" class="tw-text-secondary tw-text-12px"> Total
                                                    Deposit </div>
                                            </li>
                                            <li data-v-6a8ea654="" class="tw-flex-1 tw-text-center">
                                                <div data-v-6a8ea654="" class="tw-mb-4px"> {{ $value->withdrawals->sum('amount') }} USDT </div>
                                                <div data-v-6a8ea654="" class="tw-text-secondary tw-text-12px"> Total
                                                    Withdrawal </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                   <?php }?>
                           
                                    <!-- <div class="van-list__finished-text">No more</div> -->
                                    <div class="van-list__placeholder"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="pagination">
                           {{ $direct_team->withQueryString()->links() }}
                           </div>
                    </div>
                </div>
            </div>
            <!---->
            
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
            <!---->
        </div>
    </div>
    <script src="/static/1756094289381/js/chunk-vendors.b893e1dd.js"></script>
    <script src="/static/1756094289381/js/app.5acd7986.js"></script>
    <div class="van-toast van-toast--middle van-toast--success" style="z-index: 2001; display: none;"><i
            class="van-icon van-icon-success van-toast__icon">
            <!----></i>
        <div class="van-toast__text">Login successful</div>
    </div>
</body>

</html>

<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Mission Center</title>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="true">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <meta name="renderer" content="webkit">
    <meta name="robots" content="noindex, nofollow">
    <meta name="google-site-verification" content="olGkVGDAnx0Fe2q3J0zV8Im_BttDuD8oeV8gBwzGtIY">
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
    </style>

    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="preload" as="style">
    <link href="{{ asset('') }}static/css/vant.d14f5539.css" rel="stylesheet">
    <link href="{{ asset('') }}static/css/app.6328f701.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-3553982a.589d4855.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5576a184.9f52f39a.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-3972bc07.d09a948b.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-29d84727.afc05e0f.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-67912ed2.ae8d438d.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-6b11ef3e.540ca443.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-747287e5.9009fee8.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-115aa5d8.9d416f08.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-5f936813.7deb1a32.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-40649a9d.ed09f4c6.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-00b1464f.674dbd13.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-1eddbeec.6dc4cf76.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-6942d258.21edcc5f.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}static/css/chunk-000bcce0.fa57cd31.css">
</head>
<style>
    .task .task-head[data-v-9db064ee] {
        display: flex
;
    align-items: center;
    gap: .12rem;
    border-radius: .2069rem .2069rem 0 0;
    background: #0be0f7;
    padding: .22rem .3rem;
    color: #1f1c1c;
    font-size: .28rem;
    }

    .tab_list .active[data-v-105d75f1] {
        color: #fff;
        border-bottom: .04rem solid #00fff2;
    }

    .task .task-con .btn.ing[data-v-9db064ee] {
        color: #00e7ff;
        border: .02rem solid #32adc0;
        background: transparent;
    }

    .task .task-con .btn.ing[data-v-9db064ee] {
        color: #00e7ff;
        border: .02rem solid #32adc0;
        background: transparent;
        cursor: pointer;
    }

    .task .task-con .info-con .title[data-v-9db064ee] {
        color: #fff;
        font-size: .28rem;
        font-family: system-ui;
        font-weight: 200;
    }
</style>

<body class="mein_cn" data-new-gr-c-s-check-loaded="14.1233.0" data-gr-ext-installed="">
    <div id="app" class="applang">
        <div data-v-9db064ee="">
            <div data-v-887483d6="" data-v-9db064ee="" class="page">
                <div data-v-887483d6="" class="headers">
                    <div data-v-1c7b237a="" data-v-9db064ee="" class="head" data-v-887483d6="">
                        <div data-v-1c7b237a="" class="safe"></div>
                        <div data-v-1c7b237a="" class="container flex">
                            <div data-v-1c7b237a="" class="back"><a href="{{route('user.dashboard')}}"><img data-v-1c7b237a=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEeSURBVHgB7Ze9DcIwEIWf+W1ZgQ0oWIBJYBMoqekoEUJsQAsFA7ACYgCYAHNWbBGO2ICVEBf3SU9Ozufk6ZzYCSAIQrVorQekMVLEmrvqjLRMMnO6KpMNRGDMUbMn9VhXH3XjqZxhhroRc7GIuVjEXCwpmVM8oP2L8JI0R7a4N1lbFGtG5Lrji1LqYG7a+tLchrQjDUkdUteqE2iL8nif71pb0gHIbXUBcyvS2qTYc1d1nctRuXOeB0++r++FX/ZixY7VhxvowHgeU54xzymmOT9RFUd4r6L5QrmTFqQ2smekbcc6uXhRjOeG5HKP8BF4g6dIBTFZFmKyLMRkWYjJsvinyaj/YrMtUmO2xRvrOiMlWCUnSBFrcgJBEOrhAfmtScdij3WYAAAAAElFTkSuQmCC"
                                    alt=""></a></div><!----><!----><!---->
                            <div data-v-1c7b237a="" class="name tac"> Mission Center </div><!----><!----><!---->
                            <div data-v-1c7b237a="" class="flex1"></div><!----><!----><!----><!----><!---->
                            <div data-v-1c7b237a="" class="head_right"></div>
                        </div>
                        <div data-v-1c7b237a=""><!----></div>
                    </div>
                </div>
                <div data-v-887483d6="" id="scroll" class="content-container">
                    <div data-v-887483d6="" id="content" class="content-scroll">
                        <div data-v-9db064ee="" data-v-887483d6="" class="container">
                            <div data-v-9db064ee="" data-v-887483d6="" class="task-top">
                                <div data-v-9db064ee="" data-v-887483d6="" class="img-con"><img data-v-9db064ee=""
                                        data-v-887483d6="" src="{{ asset('') }}static/img/bj_7.416e3f3b.png"
                                        alt="">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="text-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="name">
                                            {{ siteName() }}</div>
                                        <div data-v-9db064ee="" data-v-887483d6="" class="value">Doing tasks and
                                            receiving benefits</div>
                                    </div>
                                </div>
                                <div data-v-9db064ee="" data-v-887483d6="" class="assets">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="name"> The intercept is
                                        currently collecting the total reward: <div data-v-9db064ee=""
                                            data-v-887483d6="" class="amount"><img data-v-9db064ee=""
                                                data-v-887483d6=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                                alt="">
                                            {{ number_format(Auth::user()->task_bonus->sum('comm'), 2) }} USDT </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-105d75f1="" data-v-9db064ee="" class="tab_list tab-list" data-v-887483d6="">
                                <div data-v-105d75f1="" class="tab_item active"> Long-Term Missions </div>
                                {{-- <div data-v-105d75f1="" class="tab_item"> Limited Time Task </div> --}}
                            </div>
                            <div data-v-2236272b="" data-v-9db064ee="" class="empty db" data-v-887483d6=""
                                style="display: none;">
                                <div data-v-2236272b="" class="flexs">
                                    <div data-v-2236272b="" class="custom-image van-empty">
                                        <div class="van-empty__image"><img
                                                src="{{ asset('') }}static/img/none.624b4d8f.png"></div>
                                        <p class="van-empty__description">Please look forward to</p>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9db064ee="" data-v-887483d6="" class="task-list">
                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee=""
                                            data-v-887483d6="">@lang('Inviting 1 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">
                                                @lang("If the number of invited users reaches 1 and the user's first deposit exceeds 100 USDT, he or she will be considered a valid user. This reward can only be obtained once and cannot be obtained repeatedly")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">5
                                                    USDT</span></div>
                                        </div>

                                        @php
                                            $checkTask1Claimed = \DB::table('incomes')
                                                ->where('user_id', Auth::user()->id)
                                                ->where('remarks', 'Task Income')
                                                ->where('comm', 5)
                                                ->first();
                                        @endphp

                                        @if ($userDirect >= 1)

                                            @if (!$checkTask1Claimed)
                                                <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="amount" value="5">
                                                    <input type="hidden" name="rank" value="1">

                                                    <button data-v-9db064ee="" data-v-887483d6=""
                                                        class="btn btn-success ing" type="submit">Claim</button>

                                                </form>
                                            @else
                                                <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                                </div>
                                            @endif
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                            </div>
                                        @endif


                                    </div>
                                </div>
                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee="" data-v-887483d6="">@lang('Inviting 5 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">@lang("If the number of invited users reaches 5 and the first deposit of 5 users exceeds 100 USDT,they will be considered as valid users. This reward can only be obtained once and cannot be obtained repeatedly.")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">30
                                                    USDT</span></div>
                                        </div>
                                        @php
                                        $checkTask1Claimed = \DB::table('incomes')
                                            ->where('user_id', Auth::user()->id)
                                            ->where('remarks', 'Task Income')
                                            ->where('comm', 30)
                                            ->first();
                                    @endphp

                                    @if ($userDirect >= 6)

                                        @if (!$checkTask1Claimed)
                                            <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="amount" value="30">
                                                <input type="hidden" name="rank" value="2">

                                                <button data-v-9db064ee="" data-v-887483d6=""
                                                    class="btn btn-success ing" type="submit">Claim</button>

                                            </form>
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                            </div>
                                        @endif
                                    @else
                                        <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee="" data-v-887483d6="">@lang('Inviting 10 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">@lang("If the number of invited users reaches 10, and the first deposit amount of these 10 people exceeds 100 USDT, they will be regarded as 10 valid users. This reward can only be obtained once and cannot be obtained repeatedly.")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">120
                                                    USDT</span></div>
                                        </div>
                                        @php
                                        $checkTask1Claimed = \DB::table('incomes')
                                            ->where('user_id', Auth::user()->id)
                                            ->where('remarks', 'Task Income')
                                            ->where('comm', 120)
                                            ->first();
                                    @endphp

                                    @if ($userDirect >= 16)

                                        @if (!$checkTask1Claimed)
                                            <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="amount" value="120">
                                                <input type="hidden" name="rank" value="3">

                                                <button data-v-9db064ee="" data-v-887483d6=""
                                                    class="btn btn-success ing" type="submit">Claim</button>

                                            </form>
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                            </div>
                                        @endif
                                    @else
                                        <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee="" data-v-887483d6="">@lang('Inviting 20 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">@lang("If the number of invited users reaches 20, and the first deposit amount of these 20 people exceeds 100 USDT, they will be regarded as 20 valid users. This reward can only be obtained once and cannot  be obtained repeatedly.")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">220
                                                    USDT</span></div>
                                        </div>
                                        @php
                                        $checkTask1Claimed = \DB::table('incomes')
                                            ->where('user_id', Auth::user()->id)
                                            ->where('remarks', 'Task Income')
                                            ->where('comm', 220)
                                            ->first();
                                    @endphp

                                    @if ($userDirect >= 36)

                                        @if (!$checkTask1Claimed)
                                            <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="amount" value="220">
                                                <input type="hidden" name="rank" value="4">

                                                <button data-v-9db064ee="" data-v-887483d6=""
                                                    class="btn btn-success ing" type="submit">Claim</button>

                                            </form>
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                            </div>
                                        @endif
                                    @else
                                        <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                        </div>
                                    @endif
                                    </div>
                                </div>
                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee="" data-v-887483d6="">@lang('Inviting 50 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">@lang("If the number of invited users reaches 50, and the first deposit amount of these 50 people exceeds 100 USDT, they will be regarded as 50 valid users. This reward can only be obtained once and cannot  be obtained repeatedly.")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">300
                                                    USDT</span></div>
                                        </div>
                                        @php
                                        $checkTask1Claimed = \DB::table('incomes')
                                            ->where('user_id', Auth::user()->id)
                                            ->where('remarks', 'Task Income')
                                            ->where('comm', 300)
                                            ->first();
                                    @endphp

                                    @if ($userDirect >= 86)

                                        @if (!$checkTask1Claimed)
                                            <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="amount" value="300">
                                                <input type="hidden" name="rank" value="5">

                                                <button data-v-9db064ee="" data-v-887483d6=""
                                                    class="btn btn-success ing" type="submit">Claim</button>

                                            </form>
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                            </div>
                                        @endif
                                    @else
                                        <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                        </div>
                                    @endif
                                    </div>
                                </div>

                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee="" data-v-887483d6="">@lang('Inviting 100 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">@lang("If the number of invited users reaches 100, and the first deposit amount of these 100 people exceeds 100 USDT, they will be regarded as 100 valid users. This reward can only be obtained once and cannot  be obtained repeatedly.")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">700
                                                    USDT</span></div>
                                        </div>
                                        @php
                                        $checkTask1Claimed = \DB::table('incomes')
                                            ->where('user_id', Auth::user()->id)
                                            ->where('remarks', 'Task Income')
                                            ->where('comm', 700)
                                            ->first();
                                    @endphp

                                    @if ($userDirect >= 186)

                                        @if (!$checkTask1Claimed)
                                            <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="amount" value="700">
                                                <input type="hidden" name="rank" value="6">

                                                <button data-v-9db064ee="" data-v-887483d6=""
                                                    class="btn btn-success ing" type="submit">Claim</button>

                                            </form>
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                            </div>
                                        @endif
                                    @else
                                        <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                        </div>
                                    @endif
                                    </div>
                                </div>

                                <div data-v-9db064ee="" data-v-887483d6="" class="task">
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-head"><img
                                            data-v-9db064ee="" data-v-887483d6=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgBxZc9TBRBFMf/s7e7nkHgoBEUzGJslMLD2FAhjSQ2SqGJFZDYS2mkYOmsCPQmQIwxkUIaExs/aKQxAiYQG3UTSMDGg1Mi3LI7zpu747539877+CULezOTeR/z5r23DAExXpkR+3fiDsAGwHiUcWZw8AjNMbA9zrgFxtbg8mWtWV+yhs29IPsyX8EvTMN27IfMxWhaYCAUNq+FtCnrvmmhEgWSFtuTAB/H/6CwGa1JKFLCI0UVkFbbiff0iupgaZo+WMwbSv7A+eePo1UWTkiDaO/8iRwP1MDyfAo8caJAKspXayg8o0Sz3peOiZMjSAZczYUThn0gZUmkB1Ku/4E6Io6ih45CpR/ink96LV68+QD9Z3tQDtPrbzH95V3Jefs4Qdd7XDHmzIjIXqOoNxwjFHeKHaL02hAijkjtqshUA8IDnivNT6/RooVzx67fQm/7Ofn+8ttnLIonm+0D/1LgAgMq44hyn4Ubv3YKxuL2UUbYnxhWflYQwwxRVahh+JUksr77TBtaToURPzosnNfD6G3rTG9K54uN2A584TBUUUZLVrjupjbcvXQNK7vfPS2MJw4LBPa2d2Ko6zKefv0o50sQUeBBf0cP7l3skxbmx8CWcPt26onbuQJoLV3boQtX0KqHvUSAdS1MxDy9IFwvNxPW7KcEteqnsZ/4m7OOxqTvU8ptxnbxZmvTy3pij3U9m1jlnEdRJtnJyS/plIRhTeGuu45GwYUCoo/7gMaxrGiOviQazEANZLWh5lWxxqgu8wXUn3nqCeQ1PHbdGdQZx3Gn6L9UYHfsiSVS8mw5G1B6lglKPEHyfg4MsySTXtX0mOrqpqiMtxGwK6ICVSGWdqybGV2y6Jh7ZIRCSk2bUuH6wbT1RE4qlhMOhmkhqo/cO1s4UbQO1sATBZanKVqMaKHID33lBmZRRMDRXsWEJ6d9kN5QmCky5ggCIr+WOV9wxPUuJTizNiDUvMr+kfMbTFGuUjOR/Xku/tBVXnMhPs9Fdk0mOH/+AWc9XkXOlIh6AAAAAElFTkSuQmCC"
                                            alt=""><span data-v-9db064ee="" data-v-887483d6="">@lang('Inviting 150 valid user')</span></div>
                                    <div data-v-9db064ee="" data-v-887483d6="" class="task-con">
                                        <div data-v-9db064ee="" data-v-887483d6="" class="info-con">
                                            <div data-v-9db064ee="" data-v-887483d6="" class="title">@lang("If the number of invited users reaches 150, and the first deposit amount of these 150 people exceeds 100 USDT, they will be regarded as 150 valid users. This reward can only be obtained once and cannot  be obtained repeatedly.")</div>
                                            <div data-v-9db064ee="" data-v-887483d6="" class="reward"> Reward： <img
                                                    data-v-9db064ee="" data-v-887483d6=""
                                                    src="{{ asset('') }}static/img/usdt.png" alt=""><span
                                                    data-v-9db064ee="" data-v-887483d6="">1000
                                                    USDT</span></div>
                                        </div>
                                        @php
                                        $checkTask1Claimed = \DB::table('incomes')
                                            ->where('user_id', Auth::user()->id)
                                            ->where('remarks', 'Task Income')
                                            ->where('comm', 1000)
                                            ->first();
                                    @endphp

                                    @if ($userDirect >= 336)

                                        @if (!$checkTask1Claimed)
                                            <form action="{{ route('user.cliam-reward') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="amount" value="1000">
                                                <input type="hidden" name="rank" value="7">

                                                <button data-v-9db064ee="" data-v-887483d6=""
                                                    class="btn btn-success ing" type="submit">Claim</button>

                                            </form>
                                        @else
                                            <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Claimed
                                            </div>
                                        @endif
                                    @else
                                        <div data-v-9db064ee="" data-v-887483d6="" class="btn ing"> Proceed
                                        </div>
                                    @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!---->
            </div>
        </div>

        {{-- @include('partials.notify') --}}
        <div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
            <div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII="
                    alt=""></div>
        </div>
    </div>


    <div class="van-toast van-toast--middle van-toast--text" style="z-index: 2007; display: none;">
        <div class="van-toast__text">Verification code error</div>
    </div><!----><!---->
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>

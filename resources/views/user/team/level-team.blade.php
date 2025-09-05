@include('layouts.upnl.header')


<div data-v-6b868a30="" id="scroll" class="content-container">
    <div data-v-6b868a30="" id="content" class="content-scroll">
        <div data-v-6b868a30="" class="page-team-container tw-min-h-full tw-p-16px">
            <!-- <div data-v-6b868a30="" class="tw-mb-12px tw-flex tw-justify-between tw-items-center">
                <div data-v-6b868a30="" class="tw-text-16px tw-font-bold">Team Data Overview</div>
                <div data-v-6b868a30="" class="tw-flex tw-items-center"><span data-v-6b868a30=""
                        class="tw-pr-4px">Today</span><i data-v-6b868a30="" id="openPopup"
                        class="van-icon van-icon-arrow-down">
                    </i></div>
            </div> -->
            <div data-v-6b868a30="" class="page-team-header tw-text-white tw-relative">
                <div data-v-6b868a30="" class="page-team-header-top">
                    <div data-v-6b868a30="" class="tw-text-12px tw-opacity-80"> Cumulative Income </div>
                    <div data-v-6b868a30="" style="margin-top:15px ;  font-size: 20px;"> {{number_format($teamEarning,2)}} USDT </div>
                    <div data-v-6b868a30=""
                        class="tw-flex tw-justify-between tw-items-center tw-px-28px tw-py-16px tw-bg-white3 tw-bg-opacity-90 tw-rounded-8px" style="margin-top:10px">
                        <div data-v-6b868a30="" class="tw-flex-1 tw-text-center">
                            <div data-v-6b868a30="" class="tw-text-primary tw-text-18px tw-font-bold"> ${{ number_format($totalrecharge, 2) }}
                            </div>
                            <div data-v-6b868a30="" class="tw-text-12px tw-text-secondary tw-mt-8px">
                                Cumulative Deposit </div>
                        </div>
                        <div data-v-6b868a30="" class="tw-flex-1 tw-text-center">
                            <div data-v-6b868a30="" class="tw-text-dark tw-text-18px tw-font-bold"> ${{ number_format($totalwithdrawal, 2) }} </div>
                            <div data-v-6b868a30="" class="tw-text-12px tw-text-secondary tw-mt-8px">
                                Cumulative Withdrawal </div>
                        </div>
                    </div>
                </div>
                <div data-v-6b868a30=""
                    class="tw-p-12px tw-flex tw-justify-between tw-items-center tw-text-dark">
                    <a href="{{ route('user.referral-team') }}">
                        <span
                            data-v-6b868a30="" class="tw-text-14px">View Team List</span><i data-v-6b868a30=""
                            class="van-icon van-icon-arrow">
                        </i>
                    </a>
                </div>
            </div>
            <div data-v-6b868a30="" class="tw-mb-16px tw-grid tw-grid-cols-3 tw-gap-12px">
                <div data-v-6b868a30="" class="tw-flex-1 tw-p-12px tw-bg-white3 tw-rounded-10px statisic">
                    <img src="{{ asset('/static/icon/teams.png') }}" data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                        style="width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">

                    <div data-v-6b868a30="" class="tw-mt-6px tw-text-secondary tw-text-12px"> Number of
                        Users </div>
                    <div data-v-6b868a30="" class="tw-mt-12px tw-text-18px tw-font-bold"> {{$tatalActive}} / {{$totalTeam}}</div>
                </div>
                <div data-v-6b868a30="" class="tw-flex-1 tw-p-12px tw-bg-white3 tw-rounded-10px statisic">
                    <img src="{{ asset('/static/icon/invite.png') }}" data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                        style="width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">
                    <div data-v-6b868a30="" class="tw-mt-6px tw-text-secondary tw-text-12px"> New Users
                    </div>
                    <div data-v-6b868a30="" class="tw-mt-12px tw-text-18px tw-text-success tw-font-bold"> {{ $newUsers }}
                    </div>
                </div>
                <div data-v-6b868a30="" class="tw-flex-1 tw-p-12px tw-bg-white3 tw-rounded-10px statisic">
                    <img src="{{ asset('/static/img/buy (1).png') }}" data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                        style="width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">
                    <div data-v-6b868a30="" class="tw-mt-6px tw-text-secondary tw-text-12px"> Today's Income
                    </div>
                    <div data-v-6b868a30="" class="tw-mt-12px tw-text-18px tw-text-primary tw-font-bold">
                        <span data-v-6b868a30="">{{ number_format($gen_teamIncome, 2) }}</span>
                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" class="tw-p-16px tw-bg-white3 tw-rounded-10px">
                <div data-v-6b868a30="" class="tw-mb-12px tw-pb-12px van-hairline--bottom">
                    <div data-v-6b868a30="" class="tw-mb-12px"> First Generation </div>
                    <div data-v-6b868a30="" class="tw-flex tw-justify-between tw-items-center">
                        <dl data-v-6b868a30="">
                            <dt data-v-6b868a30="" class="tw-mb-8px"> {{$active_gen_team1total}} / {{$gen_team1total}} </dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Number of Users
                            </dd>
                        </dl>
                        <dl data-v-6b868a30="" class="tw-text-center">
                            <dt data-v-6b868a30="" class="tw-mb-8px">13%</dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Commission Rate
                            </dd>
                        </dl>
                        <dl data-v-6b868a30="" class="tw-text-right">
                            <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team1Income,2)}} </dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Income
                            </dd>
                        </dl>
                    </div>
                </div>
                <div data-v-6b868a30="" class="tw-mb-12px tw-pb-12px van-hairline--bottom">
                    <div data-v-6b868a30="" class="tw-mb-12px"> Second Generation </div>
                    <div data-v-6b868a30="" class="tw-flex tw-justify-between tw-items-center">
                        <dl data-v-6b868a30="">
                            <dt data-v-6b868a30="" class="tw-mb-8px"> {{$active_gen_team2total}} / {{$gen_team2total}} </dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Number of Users
                            </dd>
                        </dl>
                        <dl data-v-6b868a30="" class="tw-text-center">
                            <dt data-v-6b868a30="" class="tw-mb-8px">4%</dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Commission Rate
                            </dd>
                        </dl>
                        <dl data-v-6b868a30="" class="tw-text-right">
                            <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team2Income,2)}} </dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Income
                            </dd>
                        </dl>
                    </div>
                </div>
                <div data-v-6b868a30="" class="">
                    <div data-v-6b868a30="" class="tw-mb-12px"> Third Generation </div>
                    <div data-v-6b868a30="" class="tw-flex tw-justify-between tw-items-center">
                        <dl data-v-6b868a30="">
                            <dt data-v-6b868a30="" class="tw-mb-8px"> {{$active_gen_team3total}} / {{$gen_team3total}} </dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Number of Users
                            </dd>
                        </dl>
                        <dl data-v-6b868a30="" class="tw-text-center">
                            <dt data-v-6b868a30="" class="tw-mb-8px">2%</dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Commission Rate
                            </dd>
                        </dl>
                        <dl data-v-6b868a30="" class="tw-text-right">
                            <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team3Income,2)}} </dt>
                            <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Income
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div data-v-6b868a30="" class="tw-mt-16px tw-mb-12px tw-text-16px"> Three-Generation Data </div>
            <div data-v-6b868a30="" class="tw-mt-16px tw-p-16px tw-bg-white3 tw-rounded-10px">
                <div data-v-6b868a30="" class="tw-h-34px tw-flex tw-items-center">
                    <img data-v-6a8ea654="" alt="" class="tw-mr-8px tw-w-36px tw-h-36px tw-rounded-full" style="border: 4px solid #069d6a; border-radius:50%;"
                        src="{{ asset('') }}2.png">
                    <div data-v-6b868a30="" class="tw-pl-8px">
                        <div data-v-6b868a30="" class="tw-text-14px"> First Generation Data </div>


                        <div data-v-6b868a30="" class="tw-text-12px"><span data-v-6b868a30=""
                                class="tw-pr-4px tw-text-secondary"> Number of Users: </span><span
                                data-v-6b868a30="" class="tw-text-primary"> {{$active_gen_team1total}} / {{$gen_team1total}} </span></div>
                    </div>
                </div>
                <div data-v-6b868a30="" role="separator" class="van-divider van-divider--hairline"></div>
                <div data-v-6b868a30="" class="tw-flex tw-justify-between tw-items-center">
                    <dl data-v-6b868a30="">
                        <dt data-v-6b868a30="" class="tw-mb-8px">{{number_format($gen_team1_deposit,2)}}</dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Deposit
                        </dd>
                    </dl>
                    <dl data-v-6b868a30="" class="tw-text-center">
                        <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team1_withdraw,2)}} </dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Withdrawal
                        </dd>
                    </dl>
                    <dl data-v-6b868a30="" class="tw-text-right">
                        <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team1Income,2)}} </dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Income
                        </dd>
                    </dl>
                </div>
            </div>
            <div data-v-6b868a30="" class="tw-mt-16px tw-p-16px tw-bg-white3 tw-rounded-10px">
                <div data-v-6b868a30="" class="tw-h-34px tw-flex tw-items-center">
                    <img data-v-6a8ea654="" alt="" class="tw-mr-8px tw-w-36px tw-h-36px tw-rounded-full" style="border: 4px solid #069d6a; border-radius:50%;"
                        src="{{ asset('') }}2.png">
                    <div data-v-6b868a30="" class="tw-pl-8px">

                        <div data-v-6b868a30="" class="tw-text-14px"> Second Generation Data </div>

                        <div data-v-6b868a30="" class="tw-text-12px"><span data-v-6b868a30=""
                                class="tw-pr-4px tw-text-secondary"> Number of Users: </span><span
                                data-v-6b868a30="" class="tw-text-primary"> {{$active_gen_team2total}} / {{$gen_team2total}} </span></div>
                    </div>
                </div>
                <div data-v-6b868a30="" role="separator" class="van-divider van-divider--hairline"></div>
                <div data-v-6b868a30="" class="tw-flex tw-justify-between tw-items-center">
                    <dl data-v-6b868a30="">
                        <dt data-v-6b868a30="" class="tw-mb-8px">{{number_format($gen_team2_deposit,2)}}</dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Deposit
                        </dd>
                    </dl>
                    <dl data-v-6b868a30="" class="tw-text-center">
                        <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team2_withdraw,2)}}</dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Withdrawal
                        </dd>
                    </dl>
                    <dl data-v-6b868a30="" class="tw-text-right">
                        <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team2Income,2)}} </dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Income
                        </dd>
                    </dl>
                </div>
            </div>
            <div data-v-6b868a30="" class="tw-mt-16px tw-p-16px tw-bg-white3 tw-rounded-10px">
                <div data-v-6b868a30="" class="tw-h-34px tw-flex tw-items-center"> <img data-v-6a8ea654="" alt="" class="tw-mr-8px tw-w-36px tw-h-36px tw-rounded-full" style="border: 4px solid #069d6a; border-radius:50%;"
                        src="{{ asset('') }}2.png">
                    <div data-v-6b868a30="" class="tw-pl-8px">


                        <div data-v-6b868a30="" class="tw-text-14px"> Third Generation Data </div>
                        <div data-v-6b868a30="" class="tw-text-12px"><span data-v-6b868a30=""
                                class="tw-pr-4px tw-text-secondary"> Number of Users: </span><span
                                data-v-6b868a30="" class="tw-text-primary"> {{$active_gen_team3total}} / {{$gen_team3total}}</span></div>
                    </div>
                </div>
                <div data-v-6b868a30="" role="separator" class="van-divider van-divider--hairline"></div>
                <div data-v-6b868a30="" class="tw-flex tw-justify-between tw-items-center">
                    <dl data-v-6b868a30="">
                        <dt data-v-6b868a30="" class="tw-mb-8px">{{number_format($gen_team3_deposit,2)}}</dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Deposit
                        </dd>
                    </dl>
                    <dl data-v-6b868a30="" class="tw-text-center">
                        <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team3_withdraw,2)}} </dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Withdrawal
                        </dd>
                    </dl>
                    <dl data-v-6b868a30="" class="tw-text-right">
                        <dt data-v-6b868a30="" class="tw-mb-8px"> {{number_format($gen_team3Income,2)}} </dt>
                        <dd data-v-6b868a30="" class="tw-text-12px tw-text-secondary"> Cumulative Income
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div data-v-91b14df4="" data-v-6b868a30=""></div>
    </div>
</div>
<div class="van-overlay" id="overlay" style="display :none; z-index: 2017;"></div>
<div data-v-91b14df4="" id="popup" class="van-popup van-popup--round van-popup--bottom" style="display :none; z-index: 2018;">
    <div data-v-91b14df4="" class="popup_box">
        <div data-v-91b14df4="" class="scroll">
            <div data-v-91b14df4="" class="ul">
                <div data-v-91b14df4="">
                    <div data-v-91b14df4="" class="item" onclick="applyFilter('all')"> All </div>
                </div>
                <div data-v-91b14df4="">
                    <div data-v-91b14df4="" class="item" onclick="applyFilter('today')"> Today </div>
                </div>
                <div data-v-91b14df4="">
                    <div data-v-91b14df4="" class="item " onclick="applyFilter('7days')"> Last 7 days </div>
                </div>
                <div data-v-91b14df4="">
                    <div data-v-91b14df4="" class="item" onclick="applyFilter('30days')"> Last 30 days </div>
                </div>
                <div data-v-91b14df4="">
                    <div data-v-91b14df4="" class="item" onclick="applyFilter('60days')"> Last 60 days </div>
                </div>
            </div>
        </div>
        <div data-v-91b14df4="" class="esc" id="close">Cancel</div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const overlay = document.getElementById("overlay");
        const popup = document.getElementById("popup");
        const closeBtn = document.getElementById("close");
        const openBtn = document.getElementById("openPopup"); // 👈 create a button with this ID

        openBtn.addEventListener("click", () => {
            overlay.style.display = "block";
            popup.style.display = "block";
        });

        closeBtn.addEventListener("click", () => {
            overlay.style.display = "none";
            popup.style.display = "none";
        });

        overlay.addEventListener("click", () => {
            overlay.style.display = "none";
            popup.style.display = "none";
        });
    });
</script>
<script>
    function applyFilter(range) {
        window.location.href = "?filter=" + range; // reload with filter
    }
</script>

@include('layouts.upnl.footer')
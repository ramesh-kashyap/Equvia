@include('layouts.upnl.header')
            <div data-v-6b868a30="" id="scroll" class="content-container">
                <div data-v-6b868a30="" id="content" class="content-scroll">
                    <div data-v-6b868a30="" class="page-assets-container tw-min-h-full tw-p-16px">
                        <div data-v-6b868a30="" class="page-assets-header tw-text-white tw-relative">
                            <div data-v-6b868a30="" class="page-assets-header-top">
                                <div data-v-6b868a30="" class="tw-absolute tw-top-0 tw-right-16px tw-w-72px tw-h-72px">
                                    <svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                                        style="width: 1.694rem; height: 1.694rem; font-size: 1.694rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-usdt-large"></use>
                                    </svg>
                                </div>
                                <div data-v-6b868a30="" class="tw-text-12px tw-opacity-80" style="margin: 5px;"> Total Assets (USDT) </div>
                                <div data-v-6b868a30="" class=" tw-font-bold" style="font-size: 25px;"> ${{ number_format(Auth::user()->available_balance(), 2) }} </div>
                                <div data-v-6b868a30=""
                                    class="list tw-flex tw-justify-between tw-px-28px tw-py-16px tw-bg-white3 tw-bg-opacity-90 tw-rounded-8px" style="margin-top:10px;">
                                    <div data-v-6b868a30="" class="item tw-flex-1 tw-px-4px tw-text-center">
                                        <div data-v-6b868a30="" class="tw-text-primary tw-text-18px">  {{ number_format(Auth::user()->available_balance(), 2) }} </div>
                                        <div data-v-6b868a30="" class="name tw-text-12px tw-text-secondary" style="margin: 5px;"> Flexible
                                            Funds </div>
                                    </div>
                                    <div data-v-6b868a30="" class="item tw-flex-1 tw-text-center">
                                        <div data-v-6b868a30="" class="tw-text-dark tw-text-18px">  {{ number_format(Auth::user()->deposite_balance(), 2) }} </div>
                                        <div data-v-6b868a30="" class="name tw-text-12px tw-text-secondary" style="margin: 5px;"> Strategic
                                            Funds </div>
                                    </div>
                                    <div data-v-6b868a30="" class="item tw-flex-1 tw-text-center">
                                        <div data-v-6b868a30="" class="tw-text-dark tw-text-18px"> ${{number_format(Auth::user()->withdraw(),2)}} </div>
                                        <div data-v-6b868a30="" class="tw-text-12px tw-text-secondary" style="margin: 5px;"> To Be Released
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-6b868a30=""
                                class="tw-pt-28px tw-pb-12px tw-flex tw-justify-between tw-items-center tw-text-dark tw-bg-white1" >
                                <div data-v-6b868a30="" class="tw-flex-1 tw-flex tw-justify-center tw-items-center">
                                <!-- <svg data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                                        style="width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">
                                        <use data-v-3f1a7394="" xlink:href="#svg-icon-colorful-recharge"></use>
                                    </svg> -->
                                    <img src="{{asset('static/icon/scanner.png')}}"data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                                        style="width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">
                                    <a href="{{ route('user.invest') }}"><span data-v-6b868a30="" class="tw-pl-8px">Deposit</span></a></div>
                                <div data-v-6b868a30=""
                                    class="tw-flex-1 tw-flex tw-justify-center tw-items-center van-hairline--left">
                                    <img src="{{asset('static/icon/telegram.png')}}"data-v-3f1a7394="" aria-hidden="true" class="svg-icon" data-v-6b868a30=""
                                        style="width: 0.6588rem; height: 0.6588rem; font-size: 0.6588rem;">
                                    <a href="{{ route('user.Withdraw') }}"><span data-v-6b868a30="" class="tw-pl-8px">Withdraw</span></a></div>
                            </div>
                        </div>
                        <div class="revenue" data-v-6b868a30="" style="margin-top: 30px;">
                            <div class="tw-mb-12px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-16px">Total Income</div>
                                <!-- <div class="tw-flex tw-items-center"><span class="tw-pr-4px tw-text-14px">Last 7
                                        days</span><i class="van-icon van-icon-arrow-down">
                                        </i></div> -->
                            </div>
                            <div class="tw-bg-white tw-rounded-10px">
                                <div class="tw-px-14px tw-py-16px">
                                    <div class="tw-mb-16px tw-flex tw-justify-between tw-items-center">
                                        <div class="tw-flex tw-items-center">
                                            <div class="tw-mr-8px tw-w-36px tw-h-36px"><img
                                                    src="{{asset('static/img/usdt.png')}}"
                                                    alt=""></div>
                                            <div class="rtw-text-16px" >USDT</div>
                                        </div>
                                        <div class="tw-flex-1 tw-text-right">
                                            <!-- <div class="tw-text-14px tw-text-dark"> 6.096 </div>
                                            <div class="tw-text-12px tw-text-secondary"> ≈6.096 USDT </div> -->
                                        </div>
                                    </div>
                                    <!-- <div class="tw-mb-16px tw-flex tw-justify-between tw-items-center">
                                        <div class="tw-flex tw-items-center">
                                            <div class="tw-mr-8px tw-w-36px tw-h-36px"><img
                                                    src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240904/baa89f4d0b494fec297b855f2740d8f2.png"
                                                    alt=""></div>
                                            <div class="tw-text-16px tw-text-dark">USDC</div>
                                        </div>
                                        <div class="tw-flex-1 tw-text-right">
                                            <div class="tw-text-14px tw-text-dark"> 0 </div>
                                            <div class="tw-text-12px tw-text-secondary"> ≈0 USDT </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="tw-h-260px">
                                    <div class="tw-h-full echarts">
                                        <div class="vue-echarts-inner" _echarts_instance_="ec_1757068484502"
                                            style="user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                            <div
                                                style="position: relative; width: 389px; height: 295px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                                <canvas  id="profitChart" width="583" height="442"
                                                    style="position: absolute; left: 0px; top: 0px; width: 389px; height: 295px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                                <!-- <div class="tw-h-260px">
                                    <div
                                        class="tw-w-full tw-py-12 tw-flex tw-justify-center tw-items-center tw-pt-2 tw-pb-2">
                                        <div class="custom-empty van-empty">
                                            <div class="van-empty__image"><img
                                                    src="{{asset('')}}static/img/empty_data.b69933fd.svg"></div>
                                            <p class="van-empty__description">No record yet</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div data-v-91b14df4=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const profitChart = new Chart(document.getElementById('profitChart'), {
        type: 'line',
        data: {
            labels: @json($dates),      // X-axis
            datasets: [{
                label: 'Profit',
                data: @json($profit), // Y-axis
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                fill: true,
                tension: 0.3
            }]
        }
    });
</script>

            @include('layouts.upnl.footer')
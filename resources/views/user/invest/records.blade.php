@include('layouts.upnl.header')

<div data-v-6b868a30="" class="">
    <div data-v-6b868a30="" class="headers">
        <div class="tw-px-16px tw-w-full tw-h-full tw-flex tw-items-center" data-v-6b868a30="" style="background-color: transparent;">

            <div class="tw-flex-1 tw-h-full tw-flex mt-4 tw-text-16px van-ellipsis" style="color: rgba(255, 255, 255, 1);"><span>Order History</span></div>
            <div class="tw-h-full tw-min-w-44px tw-flex tw-justify-end tw-items-center tw-gap-12px">
            </div>
        </div>
    </div>
    <div data-v-6b868a30="" id="scroll" class="content-container ">
        <div data-v-6b868a30="" id="content" class="content-scroll">
            <div data-v-6b868a30="" class="tw-min-h-full tw-p-16px">
                <div data-v-6b868a30="" class="tw-mb-16px tw-flex tw-items-center tw-gap-24px">
                    <div data-v-6b868a30="" class="tw-flex tw-items-center"> Currency： <span data-v-6b868a30="" class="tw-text-secondary tw-text-12px">all</span><i data-v-6b868a30="" class="tw-ml-4px van-icon van-icon-arrow-down"><!----></i></div>
                    <div data-v-6b868a30="" class="tw-flex tw-items-center"> Date： <span data-v-6b868a30="" class="tw-text-secondary tw-text-12px">Please select</span><i data-v-6b868a30="" class="tw-ml-4px van-icon van-icon-arrow-down"><!----></i></div>
                </div>
                <div role="feed" class="van-list " data-v-6b868a30="">

                    <?php if (is_array($level_income) || is_object($level_income)) { ?>


                        @foreach ($level_income as $value)
                        <ul class="tw-mb-16px tw-p-16px tw-bg-white3 tw-rounded-10px">
                            <li class="tw-mb-8px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Investment Amount </div>
                                <div>{{$value->c_buy}} USDT</div>
                            </li>
                            <li class="tw-mb-8px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Quantitative Product Type</div>
                                <div>{{$value->trade}}</div>
                            </li>
                            <li class="tw-mb-8px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Profit Amount</div>
                                <div>{{$value->profit}} USDT</div>
                            </li>
                            <li class="tw-mb-8px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Buy Price</div>
                                <div>{{$value->c_buy}} USDT</div>
                            </li>
                            <li class="tw-mb-8px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Sell Price</div>
                                <div>{{$value->c_sell}} USDT</div>
                            </li>
                            <li class="tw-mb-8px tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Trading Type</div>
                                <div>{{$value->trade}}</div>
                            </li>
                            <li class="tw-flex tw-justify-between tw-items-center">
                                <div class="tw-text-secondary">Completion Time </div>
                                <div>{{$value->created_at}}</div>
                            </li>
                        </ul>
                        @endforeach
                    <?php } ?>

                    <!-- <div class="van-list__finished-text">No more</div> -->
                    <div class="van-list__placeholder"></div>
                </div>
            </div>
            <div data-v-91b14df4="" data-v-6b868a30=""></div>
        </div>
    </div><!---->
</div>
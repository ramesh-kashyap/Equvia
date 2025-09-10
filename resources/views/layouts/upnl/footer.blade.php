
            <div data-v-6b868a30="" class="footer">
                <ul class="tw-w-full tw-h-full tw-flex tw-justify-around" data-v-6b868a30="" style="margin: 10px; background: #fff; border-radius: 10px;">
                    <li class="tw-flex-1 tw-flex tw-flex-col tw-items-center tw-justify-center actived">
                        <a href="{{ route('user.dashboard') }}">
                        <svg
                            data-v-3f1a7394="" aria-hidden="true" class="tw-mb-2px svg-icon"
                            style="color: rgb(174, 184, 196); width: 0.5176rem; height: 0.5176rem; font-size: 0.5176rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-home"></use>
                        </svg>
                        </a>
                        <span class="tw-text-12px tw-text-secondary" style="color: #000"> Home</span></li>
                    <li class="tw-flex-1 tw-flex tw-flex-col tw-items-center tw-justify-center">
                        <a href="{{ route('user.quality') }}">
                       <img src="{{asset('static/img/icons8-e-key-50.png')}}" style="width: 26px;height:26px" alt="" srcset="">
                        </a>
                        <span class="tw-text-12px tw-text-secondary" style="color: #000"> Equvia</span></li>
                    <li class="tw-flex-1 tw-flex tw-flex-col tw-items-center tw-justify-center">
                        <a href="{{ route('user.level-team') }}">
                        <svg data-v-3f1a7394=""
                            aria-hidden="true" class="tw-mb-2px svg-icon"
                            style="color: rgb(174, 184, 196); width: 0.5176rem; height: 0.5176rem; font-size: 0.5176rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-team"></use>
                        </svg>
                        </a>
                        <span class="tw-text-12px tw-text-secondary" style="color: #000"> Team</span></li>
                    <li class="tw-flex-1 tw-flex tw-flex-col tw-items-center tw-justify-center">
                    <a href="{{ route('user.asset') }}">  
                    <svg data-v-3f1a7394=""
                            aria-hidden="true" class="tw-mb-2px svg-icon"
                            style="color: rgb(174, 184, 196); width: 0.5176rem; height: 0.5176rem; font-size: 0.5176rem;">
                            <use data-v-3f1a7394="" xlink:href="#svg-icon-assets"></use>
                        </svg>
                        </a>  
                        <span class="tw-text-12px tw-text-secondary" style="color: #000"> Assets</span></li>
                </ul>
            </div>
        </div>
        <div class="van-overlay" style="display: none;">
            <div class="tw-w-full tw-h-full tw-flex tw-justify-center tw-items-center">
                <div
                    class="tw-w-100px tw-h-100px tw-flex tw-justify-center tw-items-center tw-bg-dark tw-bg-opacity-10 tw-rounded-10px">
                    <div class="van-loading van-loading--circular"><span
                            class="van-loading__spinner van-loading__spinner--circular"
                            style="color: rgba(255, 255, 255, 1); width: 1rem; height: 1rem;"><svg viewBox="25 25 50 50"
                                class="van-loading__circular">
                                <circle cx="50" cy="50" r="20" fill="none"></circle>
                            </svg></span></div>
                </div>
            </div>
        </div>
        <div data-v-4d1ba5fa="">
            
        </div>
    </div>

    
</body>

</html>
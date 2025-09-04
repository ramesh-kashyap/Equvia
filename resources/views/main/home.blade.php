@include('layouts.upnl.header')

<style>
    .marquee-container {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
        background: transparent;
        /* optional */  
        padding: 5px 0;
    }

    .marquee-item {
        display: inline-block;
        padding-left: 100%;
        /* start off screen */
        animation: marquee 12s linear infinite;
        font-size: 16px;
        color: #fff;
    }
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    .market_card[data-v-40a6c17a] {
    margin-top: 0;
}
</style>
<div data-v-6b868a30="" id="scroll" class="content-container">
    <div data-v-6b868a30="" id="content" class="content-scroll">
        <div data-v-6b868a30="" class="tw-p-16px tw-bg-white2 tw-rounded-bl-16px tw-rounded-br-16px">
            <div data-v-77e1eeea="" class="tw-bg-white2 tw-rounded-bl-10px tw-rounded-br-10px" data-v-6b868a30="">
                <div id="carousel" class="van-swipe" style="width: 400px; overflow: hidden;">
                    <div class="van-swipe__track" id="carousel-track"
                        style="display: flex; transition: transform 0.5s;">
                        <div class="van-swipe-item">
                            <img src="{{ asset('static/img/dome.png') }}" alt="Banner 1"
                                style="width:100%;  object-fit:cover; display:block; border-radius:10px;">
                        </div>
                        <div class="van-swipe-item">
                            <img src="{{ asset('static/img/dome.png') }}" alt="Banner 2"
                                style="width:100%; object-fit:cover; display:block; border-radius:10px;">
                        </div>
                        <div class="van-swipe-item">
                            <img src="{{ asset('static/img/dome.png') }}" alt="Banner 3"
                                style="width:100%;  object-fit:cover; display:block; border-radius:10px;">
                        </div>
                    </div>
                </div>


                <div data-v-77e1eeea="" role="alert" class="van-notice-bar" vertical=""
                    style="color: rgb(24, 25, 28); background: none;"><i class="van-icon van-notice-bar__left-icon">
                        <img src="{{ asset('static/icon/speaker.png') }}" class="van-icon__image">
                        </i>
                    <div class="marquee-container">
                        <div class="marquee-item">
                            Welcome to Equvia! We’re excited to see your success!
                        </div>
                    </div>

                </div>
            </div>
            <div class="actions">
                <a href="{{ route('user.deposit') }}">
                    <span>
                        <img src="{{ asset('') }}static/icon/scanner.png" alt="">
                        <p>Deposit</p>
                    </span>
                </a>
                <a href="{{ route('user.Withdraw') }}">
                    <span>
                        <img src="{{ asset('') }}static/icon/telegram.png" alt="">
                        <p>Withdraw</p>
                    </span>
                </a>
                <a href="{{ route('user.share') }}">
                    <span>
                        <img src="{{ asset('') }}static/icon/invite.png" alt="">
                        <p>Invite</p>
                    </span>
                </a>
                <a href="{{ route('user.about') }}">
                    <span>
                        <img src="{{ asset('') }}static/icon/support.png" alt="">
                        <p>Help Center</p>
                    </span>
                </a>
            </div>
        </div>
        <div data-v-6b868a30="" class="tw-p-16px">

            {{-- <ul class="page-home-card tw-mt-16px tw-flex tw-justify-between tw-items-center tw-gap-4px" role="menu">
                <!-- Invite Friends -->
                <li role="menuitem"
                    class="invite tw-flex-1 tw-pt-20px tw-px-12px tw-text-16px tw-text-white tw-font-bold tw-text-center tw-break-words tw-bg-[#1f2937] tw-rounded-lg hover:tw-bg-[#374151] cursor-pointer">
                    Invite Friends
                </li>

                <!-- Mission Centre -->
                <li role="menuitem"
                    class="task tw-flex-1 tw-pt-20px tw-px-12px tw-text-16px tw-text-white tw-font-bold tw-text-center tw-break-words tw-bg-[#1f2937] tw-rounded-lg hover:tw-bg-[#374151] cursor-pointer">
                    Mission Centre
                </li>

                <!-- Levels -->
                <li role="menuitem"
                    class="level tw-flex-1 tw-pt-20px tw-px-12px tw-text-16px tw-text-white tw-font-bold tw-text-center tw-break-words tw-bg-[#1f2937] tw-rounded-lg hover:tw-bg-[#374151] cursor-pointer">
                    Levels
                    <div class="tw-mt-12px tw-flex tw-justify-center">
                    <img src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/2990dbe8b66676d6d1602405620a8d2b.png"
                        alt="Level Icon"
                        class="tw-w-20 tw-h-20 tw-object-contain tw-rounded">
                    </div>
                </li>
                </ul> --}}

            <div data-v-40a6c17a="" data-v-6b868a30="">
                <div data-v-40a6c17a="" class="market_card">
                    <div data-v-40a6c17a="" class="market_box">
                        <div data-v-40a6c17a="" class="market_list">
                            <div data-v-40a6c17a="" class="tabbar-list">
                                <!-- <div data-v-40a6c17a="" class="act"> STOCKS </div>
                                            <div data-v-40a6c17a="" class=""> FOREX </div> -->
                                <div data-v-40a6c17a="" class=""> Crypto </div>
                            </div>
                            <div data-v-40a6c17a="" class="market-list">
                                <div data-v-40a6c17a="" class="tr">
                                    <div data-v-40a6c17a="" class="list-coin">Name</div>
                                    <div data-v-40a6c17a="" class="list-price">Last price</div>
                                    <div data-v-40a6c17a="" class="list-down">24h change</div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="https://meta2032.s3.ap-east-1.amazonaws.com/upload/20220308/e795dba042eb43472cfd11297581e607.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">BTC</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price" id="btc-rate">$64312.76</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up" id="btc-percentage">+0.37%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="https://meta2032.s3.ap-east-1.amazonaws.com/upload/20220224/8bec4afab0e8f479f8479f47aef9e822.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">ETH</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price" id="eth-rate">$3140.45</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up" id="eth-percentage">+2.88%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="https://meta2032.s3.ap-east-1.amazonaws.com/upload/20220224/ce23a8f522542d64023021ddcad30711.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">DOGE</div>

                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price" id="doge-rate">$0.15314</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up" id="doge-percentage">+1.37%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="https://meta2032.s3.ap-east-1.amazonaws.com/upload/20220224/4dfb5e25907eaf15d4d87f253b5d2ba8.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">ADA</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price" id="ada-rate">$307.77</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up" id="ada-percentage">+1.81%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="https://meta2032.s3.ap-east-1.amazonaws.com/upload/20220224/147c6a59421991d1da20c9919492d195.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">AVAX</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price" id="avax-rate">$179</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up" id="avax-percentage">+1.70%</div>
                                    </div>
                                </div>
                                <input type="hidden" name="" id="exchange" value="BINANCE">
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/59880c5ceae09e49da9427896f5d3efd.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">BCH</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price" id="bch-rate">$110.2</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up" id="bch-percentage">+1.62%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/d44602725f444b9498a7097e04e907fa.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">UNH</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price">$533.37</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up">+1.08%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/ea7cf8c8fe3d360ee5e02b3dc283a2b4.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.64rem;">CVX</div>
                                            
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price">$155.89</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFHSURBVHgBvdbfTcMwEAbwz24lXjtCRigj5AGeywYwAhNgwQLdgGzAAlRhhI7ACDzy0lz9R2nT1G3vzlI+KZIj2Zdf4lwUgynz7VYgs2TPn9N6jikzww92ePMjHvL/rrGYMrX7w4xqP9pyl+iAYau0ESLlwM2H3yLzhc37J7RJyCfOVBkw4KhzcUz0rEa2boGdv0lG+MAhro8GmXAtmI3CA+ZwfSRIIQ4s4DVcHw7yGs7g17+T98g0ji3GcZC3cNZ3de22ue62KhzRayzMQfJwqVbmE2TFuI5e8ODWsfAtpATXZ4Q0Ytyjaw7nravQeQChOgeYxmOXItww4eYwBkpwHGQuHNzJ9BKcFCnEpSWlOC5SgQuxca+pWxXhQsKFLzWOEpeWhuS6TYIbZvwkC3Bp+bHwEanFjZEhBbhc4UXRv95prSoehdkDIhcAUPF/3UsAAAAASUVORK5CYII="
                                            alt="">
                                        <div data-v-40a6c17a="" class="up">+1.03%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/81ec1d4e3f0cd8c9e2b5b1f229461a2d.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.28rem;">DOT</div>
                                            <p data-v-40a6c17a="">USDT</p>
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price">$4.267</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAF8SURBVHgBvZbRTcMwEEDv0nzwGaTCd5mATIDCBnSCdhPaSaATQCcgYgKP0H8q0U+EQg9f2yDLOPFdEvVJUZ36Yj/57qIAOHwWebYt8gcYALvWhC/oSeIsmFWEb0T4sr3LZ9ADFvuxa/HVVxJdOTvM/yaI5uN3swIltRwBTE4bbEZI95el2UAHDifoyzGE+Kw9SV/usI4d9znJY4qR1qFJjWRIbghJrAcfRb6wRo/BoEi62+S8zdTpRvemi6RUrqsk+n9oJFvTirRCwlvwalsqyY3Lv4k/cVWahTVZhh5yazImd12aeWol7K35Nx+pyfqt8gWQITTQdpJ7xOWIaNYm528GwpN04yukm0bBmGQIX04r6cdFBTWSTXJSyT2mU6TqyZ0XCUokY3ISyRAsmEgC2xtHJsfYNO6aGqcJkSATktTI1WglxYKMK9lFruYkOZXEimrQh78Zx6V5hY5Ia1HcJEOiaRRxkwyFtouZFM7IN4yK5Phpt5bEXwDtfgEkDDromZ0WDAAAAABJRU5ErkJggg=="
                                            alt="">
                                        <div data-v-40a6c17a="" class="">-2.40%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/e0020a378c09cd7b7ee3936f8b1a4622.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.28rem;">LTC</div>
                                            <p data-v-40a6c17a="">USDT</p>
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price">$90</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAF8SURBVHgBvZbRTcMwEEDv0nzwGaTCd5mATIDCBnSCdhPaSaATQCcgYgKP0H8q0U+EQg9f2yDLOPFdEvVJUZ36Yj/57qIAOHwWebYt8gcYALvWhC/oSeIsmFWEb0T4sr3LZ9ADFvuxa/HVVxJdOTvM/yaI5uN3swIltRwBTE4bbEZI95el2UAHDifoyzGE+Kw9SV/usI4d9znJY4qR1qFJjWRIbghJrAcfRb6wRo/BoEi62+S8zdTpRvemi6RUrqsk+n9oJFvTirRCwlvwalsqyY3Lv4k/cVWahTVZhh5yazImd12aeWol7K35Nx+pyfqt8gWQITTQdpJ7xOWIaNYm528GwpN04yukm0bBmGQIX04r6cdFBTWSTXJSyT2mU6TqyZ0XCUokY3ISyRAsmEgC2xtHJsfYNO6aGqcJkSATktTI1WglxYKMK9lFruYkOZXEimrQh78Zx6V5hY5Ia1HcJEOiaRRxkwyFtouZFM7IN4yK5Phpt5bEXwDtfgEkDDromZ0WDAAAAABJRU5ErkJggg=="
                                            alt="">
                                        <div data-v-40a6c17a="" class="">-2.49%</div>
                                    </div>
                                </div>
                                <div data-v-40a6c17a="" class="quotes-list">
                                    <div data-v-40a6c17a="" class="list-coin"><img data-v-40a6c17a=""
                                            src="http://seokore-all.s3.ap-southeast-1.amazonaws.com/upload/20240821/39c3d51f604b3d8ffcc7e1a35724bdb2.png"
                                            alt="">
                                        <div data-v-40a6c17a="" class="coin-name">
                                            <div data-v-40a6c17a="" style="line-height: 0.28rem;">DOGE</div>
                                            <p data-v-40a6c17a="">USDT</p>
                                        </div>
                                    </div>
                                    <div data-v-40a6c17a="" class="list-price">$0.16812</div>
                                    <div data-v-40a6c17a="" class="list-down"><img data-v-40a6c17a=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAF8SURBVHgBvZbRTcMwEEDv0nzwGaTCd5mATIDCBnSCdhPaSaATQCcgYgKP0H8q0U+EQg9f2yDLOPFdEvVJUZ36Yj/57qIAOHwWebYt8gcYALvWhC/oSeIsmFWEb0T4sr3LZ9ADFvuxa/HVVxJdOTvM/yaI5uN3swIltRwBTE4bbEZI95el2UAHDifoyzGE+Kw9SV/usI4d9znJY4qR1qFJjWRIbghJrAcfRb6wRo/BoEi62+S8zdTpRvemi6RUrqsk+n9oJFvTirRCwlvwalsqyY3Lv4k/cVWahTVZhh5yazImd12aeWol7K35Nx+pyfqt8gWQITTQdpJ7xOWIaNYm528GwpN04yukm0bBmGQIX04r6cdFBTWSTXJSyT2mU6TqyZ0XCUokY3ISyRAsmEgC2xtHJsfYNO6aGqcJkSATktTI1WglxYKMK9lFruYkOZXEimrQh78Zx6V5hY5Ia1HcJEOiaRRxkwyFtouZFM7IN4yK5Phpt5bEXwDtfgEkDDromZ0WDAAAAABJRU5ErkJggg=="
                                            alt="">
                                        <div data-v-40a6c17a="" class="">-3.00%</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div data-v-6b868a30="" class="tw-mt-24px">
                            <div data-v-6b868a30="" class="tw-mb-16px tw-text-16px tw-font-bold"> Partner </div>
                            <ul data-v-6b868a30="" class="tw-grid tw-grid-cols-3 tw-gap-16px">
                                <li data-v-6b868a30=""
                                    class="tw-px-16px tw-h-44px tw-bg-white3 tw-rounded-full tw-flex tw-justify-center tw-items-center">
                                    <img data-v-6b868a30=""
                                        src="{{ asset('') }}static/img/partner (1).png"
                                        class="tw-w-full"></li>
                                <li data-v-6b868a30=""
                                    class="tw-px-16px tw-h-44px tw-bg-white3 tw-rounded-full tw-flex tw-justify-center tw-items-center">
                                    <img data-v-6b868a30=""
                                        src="{{ asset('') }}static/img/partner (2).png"
                                        class="tw-w-full"></li>
                                <li data-v-6b868a30=""
                                    class="tw-px-16px tw-h-44px tw-bg-white3 tw-rounded-full tw-flex tw-justify-center tw-items-center">
                                    <img data-v-6b868a30=""
                                        src="{{ asset('') }}static/img/partner (3).png"
                                        class="tw-w-full"></li>
                                <li data-v-6b868a30=""
                                    class="tw-px-16px tw-h-44px tw-bg-white3 tw-rounded-full tw-flex tw-justify-center tw-items-center">
                                    <img data-v-6b868a30=""
                                        src="{{ asset('') }}static/img/partner (4).png"
                                        class="tw-w-full"></li>
                                <li data-v-6b868a30=""
                                    class="tw-px-16px tw-h-44px tw-bg-white3 tw-rounded-full tw-flex tw-justify-center tw-items-center">
                                    <img data-v-6b868a30=""
                                        src="{{ asset('') }}static/img/partner (5).png"
                                        class="tw-w-full"></li>
                                <li data-v-6b868a30=""
                                    class="tw-px-16px tw-h-44px tw-bg-white3 tw-rounded-full tw-flex tw-justify-center tw-items-center">
                                    <img data-v-6b868a30=""
                                        src="{{ asset('') }}static/img/partner (6).png"
                                        class="tw-w-full"></li>
                            </ul>
                        </div> -->
            <div data-v-1e8e5ea6="" data-v-6b868a30=""></div>
        </div>
    </div>
</div>

<script>
    const container = document.getElementById('carousel');
    const track = document.getElementById('carousel-track');
    const slides = Array.from(track.querySelectorAll('.van-swipe-item'));
    let index = 0;

    function slideWidth() {
        return container.clientWidth; // always use the real container width
    }

    function layout() {
        // Set each slide to container width
        const w = slideWidth();
        slides.forEach(s => {
            s.style.minWidth = w + 'px';
            s.style.maxWidth = w + 'px';
            s.style.flex = '0 0 ' + w + 'px';
        });
        // Optional: track width (flex handles it, but ok to set)
        track.style.width = (w * slides.length) + 'px';
        // Re-apply current position to avoid jumps on resize
        track.style.transform = `translateX(-${index * w}px)`;
    }

    function goTo(i) {
        index = (i + slides.length) % slides.length; // loop safely
        track.style.transform = `translateX(-${index * slideWidth()}px)`;
    }

    function next() {
        goTo(index + 1);
    }

    // Initial layout + on resize
    layout();
    window.addEventListener('resize', layout);

    // Autoplay
    const intervalMs = 3000;
    let timer = setInterval(next, intervalMs);

    // (Optional) Pause on hover
    container.addEventListener('mouseenter', () => clearInterval(timer));
    container.addEventListener('mouseleave', () => (timer = setInterval(next, intervalMs)));
    // (optional) swipe with mouse/touch listeners can be added here
</script>
<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
        let exchange = $('#exchange').val();
        let intervalId;

        // Update active tab and exchange value
        function updateActiveTab(selectedTab) {
            $('.home-market .tab').removeClass('first');
            selectedTab.addClass('first');
            exchange = selectedTab.attr('data-response');
            $('#exchange').val(exchange);
        }
        console.log(exchange)
        // Function to get the API URL based on exchange and coin
        function getApiUrl(exchange, coin) {

            switch (exchange) {
                case "BINANCE":
                    return `https://api.binance.com/api/v3/ticker/24hr?symbol=${coin}USDT`;
                case "KUCOIN":
                    return `https://api.kraken.com/0/public/Ticker?pair=${coin}USD`;
                case "HUOBI":
                    return `https://api.huobi.pro/market/detail/merged?symbol=${coin.toLowerCase()}usdt`;
                default:
                    return null;
            }
        }

        // Function to fetch and update coin rate
        function fetchRate(coin, rateId, percentageId) {
            const apiUrl = getApiUrl(exchange, coin);
            if (!apiUrl) return;

            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function(response) {
                    let rate, percentageChange;
                    console.log(`Fetching ${coin} rate from ${exchange}`);
                    switch (exchange) {
                        case "BINANCE":
                            rate = parseFloat(response.bidPrice).toFixed(4);
                            percentageChange = parseFloat(response.priceChangePercent).toFixed(2);
                            break;
                        case "KUCOIN":
                            const tickerKey = Object.keys(response.result)[0];
                            const ticker = response.result[tickerKey];

                            if (ticker && ticker.c && ticker.o) {
                                rate = parseFloat(ticker.c[0]).toFixed(4); // Last closing price
                                const openPrice = parseFloat(ticker.o); // Opening price
                                percentageChange = (((rate / openPrice) - 1) * 100).toFixed(2);
                            } else {
                                throw new Error("Invalid data structure from Kraken");
                            }

                            break;
                        case "HUOBI":
                            rate = parseFloat(response.tick.close).toFixed(4);
                            percentageChange = ((response.tick.close / response.tick.open - 1) *
                                100).toFixed(2);
                            break;
                    }

                    // Update rate and percentage on the page
                    $(`#${rateId}`).text(`$${rate}`);
                    $(`#${percentageId}`).text(`${percentageChange}%`)
                        .css('background-color', (percentageChange > 0) ? '#00bc81' : 'red');
                },
                error: function(xhr, status, error) {
                    console.error(`Error fetching ${coin} rate from ${exchange}:`, error);
                }
            });
        }

        // Update all coin rates
        function updateAllRates() {
            fetchRate("BTC", "btc-rate", "btc-percentage");
            fetchRate("ETH", "eth-rate", "eth-percentage");
            fetchRate("DOGE", "doge-rate", "doge-percentage");
            fetchRate("ADA", "ada-rate", "ada-percentage");
            fetchRate("AVAX", "avax-rate", "avax-percentage");
        }

        // Switch tab and update rates immediately
        $('.home-market .tab').on('click', function() {
            updateActiveTab($(this));
            clearInterval(intervalId); // Clear the previous interval
            updateAllRates(); // Fetch rates immediately on tab change
            intervalId = setInterval(updateAllRates, 5000); // Start a new interval
        });

        // Initial rate update and interval setup
        updateAllRates();
        intervalId = setInterval(updateAllRates, 5000);
    });
</script>


<script>
    const items = document.querySelectorAll(".marquee-item");
    let index = 0;

    function showNext() {
        // sab hide karo
        items.forEach(item => item.classList.remove("active"));

        // current show karo
        items[index].classList.add("active");

        // index update karo
        index = (index + 1) % items.length;
    }

    showNext(); // first run
    setInterval(showNext, 30000); // har 30 sec me change hoga
</script>
@include('layouts.upnl.footer')

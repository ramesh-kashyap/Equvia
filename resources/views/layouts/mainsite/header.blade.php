<div class="header-side">
    <div class="nicescroll-box">
        <div class="wrap">
            <div class="header-menu">

                <style>
                    .header-menu__item span sup {
                        width: auto;
                        padding: 6px;
                        position: absolute;
                        display: none;
                    }
                </style>
                <a class="header-menu__item active" href="{{asset('')}}">
                    <span>
                        <i style="font-style: normal;">Home
                        </i>
                    </span>main
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
                <a class="header-menu__item" href="{{route('about-us')}}">
                    <span>
                        <i style="font-style: normal;">About Us
                        </i>
                    </span>company
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
                <a class="header-menu__item" href="{{route('news')}}">
                    <span>
                        <i style="font-style: normal;">News
                            <sup id="news_new" data-id="166"
                                style="display: inline-block;">New</sup>
                        </i>
                    </span>events
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
               
              
                <a class="header-menu__item" href="{{route('team')}}">
                    <span>
                        <i style="font-style: normal;">Team
                        </i>
                    </span>group
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
               
                <a class="header-menu__item" href="{{route('faq')}}">
                    <span>
                        <i style="font-style: normal;">FAQ
                        </i>
                    </span>answers
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
                <a class="header-menu__item" href="{{route('tutorial')}}">
                    <span>
                        <i style="font-style: normal;">Guide
                        </i>
                    </span>Tutorial
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a> 
                
                <a class="header-menu__item" href="/EtritonAi.pdf" target="_blank">
                    <span>
                        <i style="font-style: normal;">Plan
                        </i>
                    </span>Presentation
                    <div class="header-menu__icon">
                        <svg>
                            <use xlink:href="{{asset('')}}assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
               
            </div>
            <a class="header-contacts" href="{{route('contact-us')}}">
                <img src="{{asset('')}}assets/img/header-contacts.svg" alt="header-contacts" />
                <span>Contacts</span>Support
            </a>
            <div class="header-btns">
                <a class="main-btn main-btn_line" href="{{route('login')}}">
                    <img src="{{asset('')}}assets/img/btn-loginc619.svg?v=1.0" alt="btn-login" />login
                </a>
                <a class="main-btn" href="{{route('register')}}">
                    <img src="{{asset('')}}assets/img/btn-signc619.svg?v=1.0" alt="btn-sign" />register
                </a>
            </div>
        </div>
    </div>
</div>
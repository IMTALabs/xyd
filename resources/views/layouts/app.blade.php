<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo-footer.png') }}" type="image/png">

    {!! SEO::generate() !!}

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body data-instant-allow-query-string>
    <header
        class="fixed top-0 right-0 left-0 w-full z-[1000] shadow-xl flex items-center justify-between p-2 bg-primary lg:px-8"
        x-data="{
        current: null,
        mobileMenu: false,
        showLang: false,
        toggle(index) {
            if (this.current === index) {
                this.current = null
            } else {
                this.current = index
            }
        },
        toggleMobileMenu() {
            this.mobileMenu = !this.mobileMenu
            if (this.mobileMenu) {
                document.body.style.overflow = 'hidden'
            } else {
                document.body.style.overflow = 'auto'
            }
        },
        toogleShowLang() {
            this.showLang = !this.showLang
        }
    }">
        <button class="lg:hidden" @click="toggleMobileMenu">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="M21 18H3v-2h18v2Zm0-5H3v-2h18v2Zm0-5H3V6h18v2Z"/>
            </svg>
        </button>
        <div x-show="mobileMenu" style="display: none"
             class="fixed z-50 lg:hidden w-screen h-[calc(100vh-3rem)] bg-secondary top-12 left-0 p-4 flex flex-col overflow-auto gap-3 text-primary">
            <a class="text-sm" href="{{ route('home') }}">{{ __('Home') }}</a>
            <span class="mt-2 block text-sm font-bold">{{ __('About us') }}</span>
            <a class="text-sm" href="{{ route('about-us') }}">{{ __('About XYD Express') }}</a>
            <a class="text-sm" href="{{ route('management-team') }}">{{ __('Management Team') }}</a>
            <a class="text-sm" href="{{ route('long-term-vision') }}">{{ __('Long-term Vision') }}</a>
            <a class="text-sm" href="{{ route('our-quality') }}">{{ __('Our Quality') }}</a>
            <a class="text-sm" href="{{ route('business-enterprise') }}">{{ __('Business Enterprise') }}</a>
            <a class="text-sm" href="{{ route('careers') }}">{{ __('Careers') }}</a>
            <span class="mt-2 block text-sm font-bold">{{ __('Our Service') }}</span>
            <a class="text-sm" href="{{ route('main-business-summary') }}">{{ __('Main Business Summary') }}</a>
            <a class="text-sm" href="{{ route('consulting-and-quotation') }}">{{ __('Consulting and Quotation') }}</a>
            <a class="text-sm" href="{{ route('supply-chain-solution') }}">{{ __('Supply Chain Solution') }}</a>
            <a class="text-sm" href="{{ route('service-usage-process') }}">{{ __('Service Usage Process') }}</a>
            <a class="text-sm" href="{{ route('a-to-z') }}">{{ __('A to Z Transportation Service') }}</a>
            <span class="mt-2 block text-sm font-bold">{{ __('Main Channels') }}</span>
            <a class="text-sm" href="{{ route('land-freight') }}">{{ __('Land Freight') }}</a>
            <a class="text-sm" href="{{ route('sea-freight') }}">{{ __('Sea Freight') }}</a>
            <a class="text-sm" href="{{ route('air-freight') }}">{{ __('Air Freight') }}</a>
            <a class="text-sm" href="{{ route('warehouse') }}">{{ __('Warehouse & Value-Added Services') }}</a>
            <span class="mt-2 block text-sm font-bold">{{ __('Help Center') }}</span>
            <a class="text-sm" href="{{ route('support-center') }}">{{ __('Support Center') }}</a>
            <a class="text-sm" href="{{ route('faq') }}">{{ __('FAQ') }}</a>
            <span class="mt-2 block text-sm font-bold">{{ __('Insight & News') }}</span>
            <a class="text-sm" href="{{ route('company-news') }}">{{ __('Company News') }}</a>
            <a class="text-sm" href="{{ route('resources') }}">{{ __('Resources') }}</a>
        </div>

        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="w-24" alt="Logo">
        </a>

        <div class="relative hidden lg:block">
            <ul class="flex items-center gap-8 text-sm">
                <li @mouseenter="toggle('about')" @mouseleave="toggle('about')">
                    <div
                        class="absolute top-5 left-0 flex shadow-xl text-primary w-[120%] border-t-[1rem] border-primary peer"
                        x-transition
                        style="display: none;" x-show="current === 'about'">
                        <div
                            class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">{{ __('About us') }}</div>
                        <div class="grid grow grid-cols-2 gap-y-4 bg-white px-8 py-4 text-sm">
                            <div class="col-span-1"><a href="{{ route('about-us') }}">{{ __('About XYD Express') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('management-team') }}">{{ __('Management Team') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('long-term-vision') }}">{{ __('Long-term Vision') }}</a></div>
                            <div class="col-span-1"><a href="{{ route('our-quality') }}">{{ __('Our Quality') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('business-enterprise') }}">{{ __('Business Enterprise') }}</a>
                            </div>
                            <div class="col-span-1"><a href="{{ route('careers') }}">{{ __('Careers') }}</a></div>
                        </div>
                    </div>
                    <a class="flex items-center font-semibold text-white hover:text-black peer-hover:text-black"
                       href="#">{{ __('About us') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                             class="transition-all" :class="{'!rotate-x-180': current === 'about'}">
                            <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                        </svg>
                    </a>
                </li>
                <li @mouseenter="toggle('services')" @mouseleave="toggle('services')">
                    <div
                        class="absolute top-5 left-0 flex shadow-xl text-primary w-[120%] border-t-[1rem] border-primary peer"
                        x-transition style="display: none;" x-show="current === 'services'">
                        <div
                            class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">{{ __('Our service') }}</div>
                        <div class="grid grow grid-cols-2 gap-y-4 bg-white px-8 py-4 text-sm">
                            <div class="col-span-1"><a
                                    href="{{ route('main-business-summary') }}">{{ __('Main Business Summary') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('consulting-and-quotation') }}">{{ __('Consulting And Quotation') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('supply-chain-solution') }}">{{ __('Supply Chain Solution') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('service-usage-process') }}">{{ __('Service Usage Process') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('a-to-z') }}">{{ __('A to Z Transportation Service') }}</a></div>
                        </div>
                    </div>
                    <a class="flex items-center font-semibold text-white hover:text-black peer-hover:text-black"
                       href="#">{{ __('Our service') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                             class="transition-all" :class="{'!rotate-x-180': current === 'services'}">
                            <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                        </svg>
                    </a>
                </li>
                <li @mouseenter="toggle('channels')" @mouseleave="toggle('channels')">
                    <div
                        class="absolute top-5 left-0 flex shadow-xl text-primary w-[120%] border-t-[1rem] border-primary peer"
                        x-transition
                        style="display: none;" x-show="current === 'channels'">
                        <div
                            class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">{{ __('Main channels') }}</div>
                        <div class="grid grow grid-cols-2 gap-y-4 bg-white px-8 py-4 text-sm">
                            <div class="col-span-1"><a href="{{ route('land-freight') }}">{{ __('Land Freight') }}</a>
                            </div>
                            <div class="col-span-1"><a href="{{ route('sea-freight') }}">{{ __('Sea Freight') }}</a>
                            </div>
                            <div class="col-span-1"><a href="{{ route('air-freight') }}">{{ __('Air Freight') }}</a>
                            </div>
                            <div class="col-span-1"><a
                                    href="{{ route('warehouse') }}">{{ __('Warehouse & Value-Added Services') }}</a>
                            </div>
                        </div>
                    </div>
                    <a class="flex items-center font-semibold text-white hover:text-black peer-hover:text-black"
                       href="#">{{ __('Main channels') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                             class="transition-all" :class="{'!rotate-x-180': current === 'channels'}">
                            <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                        </svg>
                    </a>
                </li>
                <li @mouseenter="toggle('help')" @mouseleave="toggle('help')">
                    <div
                        class="absolute top-5 left-0 flex shadow-xl text-primary w-[120%] border-t-[1rem] border-primary peer"
                        x-transition
                        style="display: none;" x-show="current === 'help'">
                        <div
                            class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">{{ __('Help center') }}</div>
                        <div class="grid grow grid-cols-2 gap-y-4 bg-white px-8 py-4 text-sm">
                            <div class="col-span-1"><a
                                    href="{{ route('support-center') }}">{{ __('Support center') }}</a>
                            </div>
                            <div class="col-span-1"><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></div>
                        </div>
                    </div>
                    <a class="flex items-center font-semibold text-white hover:text-black peer-hover:text-black"
                       href="#">{{ __('Help center') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                             class="transition-all" :class="{'!rotate-x-180': current === 'help'}">
                            <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                        </svg>
                    </a>
                </li>
                <li @mouseenter="toggle('news')" @mouseleave="toggle('news')">
                    <div
                        class="absolute top-5 left-0 flex shadow-xl text-primary w-[120%] border-t-[1rem] border-primary peer"
                        x-transition
                        style="display: none;" x-show="current === 'news'">
                        <div
                            class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">{{ __('Insight & News') }}</div>
                        <div class="grid grow grid-cols-2 gap-y-4 bg-white px-8 py-4 text-sm">
                            <div class="col-span-1"><a href="{{ route('company-news') }}">{{ __('Company News') }}</a>
                            </div>
                            <div class="col-span-1"><a href="{{ route('resources') }}">{{ __('Resources') }}</a></div>
                        </div>
                    </div>
                    <a class="flex items-center font-semibold text-white hover:text-black peer-hover:text-black"
                       href="#">{{ __('Insight & News') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                             class="transition-all" :class="{'!rotate-x-180': current === 'news'}">
                            <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex items-center gap-2 text-sm text-white">
            <div class="relative cursor-pointer" @mouseenter="showLang = true" @mouseleave="showLang = false">
                <span>
                    @switch(app()->getLocale())
                        @case('vi')
                            Tiếng Việt
                            @break
                        @case('zh')
                            中国人
                            @break
                        @case('en')
                            English
                    @endswitch
                </span>
                <ul x-show="showLang" style="display: none;"
                    class="absolute top-full max-lg:right-0 lg:left-1/2 w-max lg:-translate-x-1/2 p-4 shadow bg-secondary text-primary space-y-2">
                    <li><a href="{{ route('change-language', ['language' => 'en']) }}">English</a></li>
                    <li><a href="{{ route('change-language', ['language' => 'vi']) }}">Tiếng Việt</a></li>
                    <li><a href="{{ route('change-language', ['language' => 'zh']) }}">中国人</a></li>
                </ul>
            </div>

            <div class="hidden h-4 w-px bg-white lg:block"></div>
            <div class="hidden items-center gap-1 lg:flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M19.95 21q-3.125 0-6.175-1.363t-5.55-3.862q-2.5-2.5-3.862-5.55T3 4.05q0-.45.3-.75t.75-.3H8.1q.35 0 .625.238t.325.562l.65 3.5q.05.4-.025.675T9.4 8.45L6.975 10.9q.5.925 1.187 1.787t1.513 1.663q.775.775 1.625 1.438T13.1 17l2.35-2.35q.225-.225.588-.338t.712-.062l3.45.7q.35.1.575.363T21 15.9v4.05q0 .45-.3.75t-.75.3Z"/>
                </svg>
                400-836-9156
            </div>
        </div>
    </header>

    <main>
        @yield('content')
        <div
            class="bg-[#4f2912] flex flex-col lg:flex-row items-center justify-between px-2 lg:px-32 text-secondary gap-4 lg:gap-16 py-3">
            <h2 class="grow text-2xl">{{ __('Get the latest information from XYD Express') }}</h2>

            <div class="relative w-full container lg:max-w-2xl">
                <input type="text"
                       class="w-full px-4 py-2 pr-8 placeholder:font-medium placeholder:text-primary bg-secondary text-primary"
                       placeholder="{{ __('Enter search keyword') }}">
                <svg class="absolute top-1/2 right-2 -translate-y-1/2 text-primary" xmlns="http://www.w3.org/2000/svg"
                     width="20"
                     height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/>
                </svg>
            </div>
        </div>
    </main>

    <footer class="grid grid-cols-4 gap-8 pt-8 bg-primary">
        <div class="col-span-full border-r border-solid px-2 border-orange-950 lg:col-span-1">
            <img src="{{ asset('images/logo-footer.png') }}" class="mx-auto w-80" alt="">
        </div>
        <div class="col-span-full px-2 text-sm text-secondary lg:col-span-1">
            <h3 class="text-2xl font-semibold">{{ __('Contacts') }}</h3>
            <p class="mt-3">xydexpress@gmail.com</p>
            <p class="mt-2">400-836-9156</p>
            <p class="mt-2">
                1005, Block B, Building 6, Zhonggang Plaza, Convention Bay, Baoan District, Shenzhen Guangdong, China
            </p>
        </div>
        <div class="col-span-full px-2 text-sm text-secondary lg:col-span-1">
            <h3 class="text-2xl font-semibold">Customer service</h3>
            <a class="mt-3 block" href="{{ route('faq') }}">{{ __('Frequently asked questions') }}</a>
            <a class="mt-2 block" href="#">{{ __('Terms & Policy') }}</a>
            <a class="mt-2 block" href="#">{{ __('Customer Feedback') }}</a>
        </div>
        <div class="col-span-full px-2 text-secondary lg:col-span-1">
            <h3 class="text-2xl font-semibold">{{ __('Connect with us') }}</h3>
            <div class="mt-3 flex gap-4">
                <a class="h-8 w-8" href="https://m.facebook.com/XYD.express.VN/?locale=hi_IN" target="_blank">
                    <img class="w-full rounded-md" width="32" height="32"
                         src="https://cdn.iconscout.com/icon/free/png-512/free-facebook-262-721949.png?f=webp&w=256"
                         alt="facebook"/>
                </a>
                <a class="h-8 w-8" href="https://www.tiktok.com" target="_blank">
                    <img class="w-full rounded-md" width="32" height="32"
                         src="https://cdn.iconscout.com/icon/free/png-512/free-tiktok-8289869-7136524.png?f=webp&w=256"
                         alt="tiktok"/>
                </a>
                <a class="h-8 w-8"
                   href="https://www.linkedin.com/company/xyd-international-logistic-company?trk=public_post_feed-actor-name"
                   target="_blank">
                    <img class="w-full rounded-md" width="32" height="32"
                         src="https://cdn.iconscout.com/icon/premium/png-512-thumb/linkedin-2752135-2284952.png?f=webp&w=256"
                         alt="linkedin"/>
                </a>
                <a class="h-8 w-8" href="https://www.wechat.com" target="_blank">
                    <img class="w-full rounded-md" width="32" height="32"
                         src="https://cdn.iconscout.com/icon/free/png-256/free-wechat-1868969-1583133.png?f=webp&w=256"
                         alt="wechat"/>
                </a>
            </div>
        </div>
        <div class="bg-[#4f2912] text-center lg:px-32 text-secondary py-3 col-span-full text-xs px-4">
            Copyright© 2023 XYD Global Express Service. All rights reserved. ICP2021000263
        </div>
    </footer>

    <script src="//instant.page/5.2.0" type="module"
            integrity="sha384-jnZyxPjiipYXnSU0ygqeac2q7CVYMbh84q0uHVRRxEtvFPiQYbXWUorga2aqZJ0z"></script>
    <script>
        const currentUrl = window.location.href;
        const aTagContainCurrentUrl = document.querySelector(`header ul a[href="${ currentUrl }"]`);
        aTagContainCurrentUrl?.parentElement?.parentElement?.parentElement?.nextElementSibling?.classList.add('!text-black');
    </script>
</body>
</html>

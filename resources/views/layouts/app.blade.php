<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<header class="bg-primary flex items-center justify-between py-2 px-8">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" class="w-24" alt="Logo">
    </a>

    <div class="relative" x-data="{
        current: null,
        toggle(index) {
            if (this.current === index) {
                this.current = null
            } else {
                this.current = index
            }
        }
    }">
        <ul class="flex items-center gap-8 text-sm">
            <li @mouseenter="toggle('about')" @mouseleave="toggle('about')">
                <a class="text-white font-semibold flex items-center" href="#">About us
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         class="transition-all" :class="{'!rotate-x-180': current === 'about'}">
                        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                    </svg>
                </a>
                <div class="flex absolute top-5 left-0 shadow-xl text-primary w-[120%] border-t-[1rem] border-primary"
                     x-transition
                     x-show="current === 'about'">
                    <div class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">About us</div>
                    <div class="grid grid-cols-2 px-8 py-4 bg-white grow text-sm gap-y-4">
                        <div class="col-span-1"><a href="{{ route('about-us') }}">About XYD Express</a></div>
                        <div class="col-span-1"><a href="{{ route('management-team') }}">Management Team</a></div>
                        <div class="col-span-1"><a href="{{ route('long-term-vision') }}">Long-term Vision</a></div>
                        <div class="col-span-1"><a href="{{ route('our-quality') }}">Our Quality</a></div>
                        <div class="col-span-1"><a href="{{ route('business-enterprise') }}">Business Enterprise</a>
                        </div>
                        <div class="col-span-1"><a href="{{ route('careers') }}">Careers</a></div>
                    </div>
                </div>
            </li>
            <li @mouseenter="toggle('services')" @mouseleave="toggle('services')">
                <a class="text-white font-semibold flex items-center" href="#">Our service
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         class="transition-all" :class="{'!rotate-x-180': current === 'services'}">
                        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                    </svg>
                </a>
                <div class="flex absolute top-5 left-0 shadow-xl text-primary w-[120%] border-t-[1rem] border-primary"
                     x-transition
                     x-show="current === 'services'">
                    <div class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">Our Service</div>
                    <div class="grid grid-cols-2 px-8 py-4 bg-white grow text-sm gap-y-4">
                        <div class="col-span-1"><a href="{{ route('main-business-summary') }}">Main Business Summary</a>
                        </div>
                        <div class="col-span-1"><a href="{{ route('consulting-and-quotation') }}">Consulting and
                                quotation</a></div>
                        <div class="col-span-1"><a href="{{ route('supply-chain-solution') }}">Supply Chain Solution</a>
                        </div>
                        <div class="col-span-1"><a href="{{ route('service-usage-process') }}">Service usage process</a>
                        </div>
                        <div class="col-span-1"><a href="{{ route('a-to-z') }}">A to Z Transportation Service</a></div>
                    </div>
                </div>
            </li>
            <li @mouseenter="toggle('channels')" @mouseleave="toggle('channels')">
                <a class="text-white font-semibold flex items-center" href="#">Main channels
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         class="transition-all" :class="{'!rotate-x-180': current === 'channels'}">
                        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                    </svg>
                </a>
                <div class="flex absolute top-5 left-0 shadow-xl text-primary w-[120%] border-t-[1rem] border-primary"
                     x-transition
                     x-show="current === 'channels'">
                    <div class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">Main Channels</div>
                    <div class="grid grid-cols-2 px-8 py-4 bg-white grow text-sm gap-y-4">
                        <div class="col-span-1"><a href="{{ route('land-freight') }}">Land Freight</a></div>
                        <div class="col-span-1"><a href="{{ route('sea-freight') }}">Sea Freight</a></div>
                        <div class="col-span-1"><a href="{{ route('air-freight') }}">Air Freight</a></div>
                        <div class="col-span-1"><a href="{{ route('warehouse') }}">Warehouse & Value-Added Services</a>
                        </div>
                    </div>
                </div>
            </li>
            <li @mouseenter="toggle('help')" @mouseleave="toggle('help')">
                <a class="text-white font-semibold flex items-center" href="#">Help center
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         class="transition-all" :class="{'!rotate-x-180': current === 'help'}">
                        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                    </svg>
                </a>
                <div class="flex absolute top-5 left-0 shadow-xl text-primary w-[120%] border-t-[1rem] border-primary"
                     x-transition
                     x-show="current === 'help'">
                    <div class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">Help Center</div>
                    <div class="grid grid-cols-2 px-8 py-4 bg-white grow text-sm gap-y-4">
                        <div class="col-span-1"><a href="{{ route('support-center') }}">Support center</a></div>
                        <div class="col-span-1"><a href="{{ route('faq') }}">FAQ</a></div>
                    </div>
                </div>
            </li>
            <li @mouseenter="toggle('news')" @mouseleave="toggle('news')">
                <a class="text-white font-semibold flex items-center" href="#">Insight & News
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                         class="transition-all" :class="{'!rotate-x-180': current === 'news'}">
                        <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6l1.41-1.42Z"/>
                    </svg>
                </a>
                <div class="flex absolute top-5 left-0 shadow-xl text-primary w-[120%] border-t-[1rem] border-primary"
                     x-transition
                     x-show="current === 'news'">
                    <div class="bg-[#f6f0b4] font-semibold text-xl flex items-center px-8">Insight & News</div>
                    <div class="grid grid-cols-2 px-8 py-4 bg-white grow text-sm gap-y-4">
                        <div class="col-span-1"><a href="{{ route('company-news') }}">Company News</a></div>
                        <div class="col-span-1"><a href="{{ route('resources') }}">Resources</a></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="flex items-center gap-2 text-white text-sm">
        <div>English</div>
        <div class="w-px h-4 bg-white"></div>
        <a href="#">Login</a>
        <div class="w-px h-4 bg-white"></div>
        <div class="flex items-center gap-1">
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
    <div class="bg-[#4f2912] flex items-center justify-between px-32 text-secondary gap-16 py-3">
        <h2 class="grow text-2xl">{{ __('Get the latest information from XYD Express') }}</h2>

        <div class="relative w-1/2 max-w-2xl">
            <input type="text"
                   class="placeholder:text-primary placeholder:font-medium bg-secondary px-4 pr-8 py-2 w-full text-primary"
                   placeholder="Enter search keyword">
            <svg class="absolute right-2 top-1/2 -translate-y-1/2 text-primary" xmlns="http://www.w3.org/2000/svg"
                 width="20"
                 height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/>
            </svg>
        </div>
    </div>
</main>

<footer class="bg-primary grid grid-cols-4 pt-8 gap-8">
    <div class="border-r border-solid border-orange-950">
        <img src="{{ asset('images/logo-footer.png') }}" class="w-80 mx-auto" alt="">
    </div>
    <div class="text-secondary text-sm">
        <h3 class="text-2xl font-semibold">Contacts</h3>
        <p class="mt-3">xydexpress@gmail.com</p>
        <p class="mt-2">400-836-9156</p>
        <p class="mt-2">
            1005, Block B, Building 6, Zhonggang Plaza, Convention Bay, Baoan District, Shenzhen Guangdong, China
        </p>
    </div>
    <div class="text-secondary text-sm">
        <h3 class="text-2xl font-semibold">Customer service</h3>
        <a class="mt-3 block">Frequently asked questions</a>
        <a class="mt-2 block">Terms & Policy</a>
        <a class="mt-2 block">Customer Feedback</a>
    </div>
    <div class="text-secondary">
        <h3 class="text-2xl font-semibold">Connect with us</h3>
        <div class="mt-3 flex gap-4">
            <div class="w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                    <path fill="#1877F2"
                          d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.307 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.347-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.958 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"/>
                    <path fill="#FFF"
                          d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165h29.825"/>
                </svg>
            </div>
            <div class="w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.25" height="32" viewBox="0 0 256 290">
                    <path fill="#FF004F"
                          d="M189.72 104.421c18.678 13.345 41.56 21.197 66.273 21.197v-47.53a67.115 67.115 0 0 1-13.918-1.456v37.413c-24.711 0-47.59-7.851-66.272-21.195v96.996c0 48.523-39.356 87.855-87.9 87.855c-18.113 0-34.949-5.473-48.934-14.86c15.962 16.313 38.222 26.432 62.848 26.432c48.548 0 87.905-39.332 87.905-87.857v-96.995h-.002Zm17.17-47.952c-9.546-10.423-15.814-23.893-17.17-38.785v-6.113h-13.189c3.32 18.927 14.644 35.097 30.358 44.898ZM69.673 225.607a40.008 40.008 0 0 1-8.203-24.33c0-22.192 18.001-40.186 40.21-40.186a40.313 40.313 0 0 1 12.197 1.883v-48.593c-4.61-.631-9.262-.9-13.912-.801v37.822a40.268 40.268 0 0 0-12.203-1.882c-22.208 0-40.208 17.992-40.208 40.187c0 15.694 8.997 29.281 22.119 35.9Z"/>
                    <path
                        d="M175.803 92.849c18.683 13.344 41.56 21.195 66.272 21.195V76.631c-13.794-2.937-26.005-10.141-35.186-20.162c-15.715-9.802-27.038-25.972-30.358-44.898h-34.643v189.843c-.079 22.132-18.049 40.052-40.21 40.052c-13.058 0-24.66-6.221-32.007-15.86c-13.12-6.618-22.118-20.206-22.118-35.898c0-22.193 18-40.187 40.208-40.187c4.255 0 8.356.662 12.203 1.882v-37.822c-47.692.985-86.047 39.933-86.047 87.834c0 23.912 9.551 45.589 25.053 61.428c13.985 9.385 30.82 14.86 48.934 14.86c48.545 0 87.9-39.335 87.9-87.857V92.85h-.001Z"/>
                    <path fill="#00F2EA"
                          d="M242.075 76.63V66.516a66.285 66.285 0 0 1-35.186-10.047a66.47 66.47 0 0 0 35.186 20.163ZM176.53 11.57a67.788 67.788 0 0 1-.728-5.457V0h-47.834v189.845c-.076 22.13-18.046 40.05-40.208 40.05a40.06 40.06 0 0 1-18.09-4.287c7.347 9.637 18.949 15.857 32.007 15.857c22.16 0 40.132-17.918 40.21-40.05V11.571h34.643ZM99.966 113.58v-10.769a88.787 88.787 0 0 0-12.061-.818C39.355 101.993 0 141.327 0 189.845c0 30.419 15.467 57.227 38.971 72.996c-15.502-15.838-25.053-37.516-25.053-61.427c0-47.9 38.354-86.848 86.048-87.833Z"/>
                </svg>
            </div>
            <div class="w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                    <path fill="#0A66C2"
                          d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4c-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009c-.002-12.157 9.851-22.014 22.008-22.016c12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h218.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453"/>
                </svg>
            </div>
            <div class="w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
                     aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path data-name="layer1"
                          d="M64 43.1c0-9.4-8.9-17-20-17-11 0-20 7.6-20 17s8.9 17 20 17a23.272 23.272 0 0 0 9.6-2.1l7.9 3.4-.9-8.8a15.526 15.526 0 0 0 3.4-9.5zm-26.7-4.6a2.8 2.8 0 1 1 2.8-2.8 2.734 2.734 0 0 1-2.8 2.8zm13.5 0a2.8 2.8 0 1 1 2.8-2.8 2.8 2.8 0 0 1-2.8 2.8z"
                          fill="#2dc100"></path>
                    <path data-name="layer1"
                          d="M44 23.9a27.375 27.375 0 0 1 8.7 1.5c0-.4.1-.7.1-1.1C52.8 12 41 2 26.4 2S0 12 0 24.4A20.408 20.408 0 0 0 4.5 37L3.3 48.6l10.4-4.5a29.1 29.1 0 0 0 8.4 2.4 18.61 18.61 0 0 1-.4-3.4c.1-10.6 10.1-19.2 22.3-19.2zm-8.7-13.1a3.8 3.8 0 1 1-3.8 3.8 3.8 3.8 0 0 1 3.8-3.8zm-17.8 7.5a3.714 3.714 0 0 1-3.7-3.8 3.75 3.75 0 1 1 3.7 3.8z"
                          fill="#2dc100"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="bg-[#4f2912] text-center px-32 text-secondary py-3 col-span-full">
        Copyright© 2023 XYD Global Express Service. All rights reserved. ICP2021000263
    </div>
</footer>
</body>
</html>

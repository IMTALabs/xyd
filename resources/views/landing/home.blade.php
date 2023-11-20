@extends('layouts.app')

@section('content')
    <div class="flex items-end justify-center bg-cover bg-center aspect-[10/4] bg-secondary"
         style="background-image: url('{{ asset('images/covers/home page.png') }}')">
        <div class="container mb-1 w-full py-2 text-center font-bold uppercase bg-primary text-secondary">
            {{ __('Here is quick access to') }}
        </div>
    </div>

    <div
        class="container mx-auto flex w-full flex-col items-center justify-between gap-4 px-16 py-4 bg-primary text-secondary lg:flex-row">
        <div class="flex flex-col gap-1">
            {{ __('Tracking') }}
            <form class="flex items-center gap-2">
                <input type="text" class="px-2 bg-secondary max-w-[10rem] text-primary">
                <button class="h-6 w-6 bg-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                         class="mx-auto text-primary">
                        <path fill="currentColor"
                              d="M16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.313t.712.288L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7L16.15 13Z"/>
                    </svg>
                </button>
            </form>
        </div>

        <div class="flex flex-col gap-1">
            {{ __('Find an office') }}
            <form class="flex items-center gap-2">
                <input type="text" class="px-2 bg-secondary max-w-[10rem] text-primary">
                <button class="h-6 w-6 bg-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                         class="mx-auto text-primary">
                        <path fill="currentColor"
                              d="M16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.313t.712.288L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7L16.15 13Z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="pt-28 bg-secondary">
        <div class="mt-8 h-0.5 bg-primary"></div>
        <div class="container mx-auto w-full -translate-y-14 px-4 text-primary bg-secondary" x-data="{
                first: true,
                second: true,
                third: true,
                move(position) {
                    ['first', 'second', 'third'].forEach($ref => {
                        this[$ref] = $ref === position;
                        setTimeout(() => {
                            if (this[$ref]) {
                                if ($ref === 'first') {
                                    this.$refs.first.style.zIndex = 999;
                                    this.$refs.first.querySelector('.content').classList.remove('hidden');
                                    // ...
                                } else if ($ref === 'second') {
                                    this.$refs.second.style.zIndex = 999;
                                    this.$refs.second.classList.add('translate-x-0');
                                    this.$refs.second.classList.remove('translate-x-[331px]');
                                    this.$refs.second.querySelector('.content').classList.remove('hidden');
                                } else {
                                    this.$refs.third.style.zIndex = 999;
                                    this.$refs.third.classList.add('translate-x-0');
                                    this.$refs.third.classList.remove('translate-x-[662px]');
                                    this.$refs.third.querySelector('.content').classList.remove('hidden');
                                }
                            }
                        },0)
                    });
                },

                restore() {
                    this.$refs.first.querySelector('.content').classList.add('hidden');
                    this.$refs.second.querySelector('.content').classList.add('hidden');
                    this.$refs.third.querySelector('.content').classList.add('hidden');

                    ['first', 'second', 'third'].forEach($ref => {
                        {{--setTimeout(() => {--}}
                            this[$ref] = true;
                        {{--}, 100)--}}
                    });

                    this.$refs.first.classList.add('translate-x-0');
                    this.$refs.first.style.zIndex = 0;

                    this.$refs.second.classList.add('translate-x-[331px]');
                    this.$refs.second.style.zIndex = 0;

                    this.$refs.third.classList.add('translate-x-[662px]');
                    this.$refs.third.style.zIndex = 0;
                }
            }">
            <h2 class="w-fit text-3xl font-bold">{{ __('We strive to improve our services every day to always have the most optimal solution for our customers') }}</h2>
            <p class="mt-6 text-lg">
                {{ __('Our objective is to constantly develop our services in order to deliver effective logistical solutions while providing the most value to our customers. Our distinct value rests in the following services:') }}
            </p>

            <div class="pt-8 flex items-center justify-center w-[993px] min-h-[10rem] mt-8" x-ref="container"
                 @mouseleave="restore()">
                <div x-ref="first" class="w-full min-h-[10rem] transition-all absolute left-0 " x-transition
                     x-transition.duration.75ms x-show="first"
                     @mouseenter="move('first')">
                    <div class="flex max-lg:flex-col items-center gap-4 px-16">
                        <div class="flex flex-col items-center gap-4 font-bold shrink-0">
                            <img data-src="{{ asset('images/icons/Icon/Web icon-04.png') }}" class="h-24 w-24"
                                 alt="icon">
                            {{ __('Supply Chain Solutions') }}
                        </div>
                        <div class="content hidden">
                            {{ __('Transportation is an essential need of economic development aimed at changing the location of goods and people from one place to another by means of transportation. Additionally, the development of cargo services is crucial for facilitating the movement of commodities. In a similar manner, the stages of distribution and circulation of goods both heavily rely on logistics') }}
                            <a href="{{ route('supply-chain-solution') }}"
                               class="mt-1 ml-auto block w-fit px-4 py-2 bg-primary text-secondary">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div x-ref="second" class="w-full min-h-[10rem] transition-all absolute left-0 translate-x-[331px]"
                     x-transition x-transition.duration.75ms x-show="second" @mouseenter="move('second')">
                    <div class="flex max-lg:flex-col items-center gap-4 px-16">
                        <div class="flex flex-col items-center gap-4 font-bold shrink-0">
                            <img src="{{ asset('images/icons/Icon/Web icon-05.png') }}" class="h-24 w-24" alt="icon">
                            {{ __('A to Z Transportation Service') }}
                        </div>
                        <div class="content hidden">
                            {{ __('The first step that businesses must prepare in import and export procedures is customs documents. Customs procedures are surely no longer mysterious to businesses involved in import and export. While completing customs clearance procedures, it is inevitable for those who are inexperienced in the field to run into unforeseen difficulties') }}
                            <a href="{{ route('a-to-z') }}"
                               class="mt-1 ml-auto block w-fit px-4 py-2 bg-primary text-secondary">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div x-ref="third" class="w-full min-h-[10rem] transition-all absolute left-0 translate-x-[662px]"
                     x-transition x-transition.duration.75ms x-show="third" @mouseenter="move('third')">
                    <div class="flex max-lg:flex-col items-center gap-4 px-16">
                        <div class="flex flex-col items-center gap-4 font-bold shrink-0">
                            <img src="{{ asset('images/icons/Icon/Web icon-06.png') }}" class="h-24 w-24" alt="icon">
                            {{ __('Consulting and Quotation') }}
                        </div>
                        <div class="content hidden">
                            {{ __('We put an emphasis on specialized training to ensure that you receive the best possible solution for your unique needs. In order to provide direction and detailed solutions to customer challenges, XYD consistently looks deeply into customer needs in an effort to identify essential solutions. Additionally, our dedication is accompanied by knowledge and enthusiasm. Your happiness is what makes XYD Express successful') }}
                            <a href="{{ route('consulting-and-quotation') }}"
                               class="mt-1 ml-auto block w-fit px-4 py-2 bg-primary text-secondary">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-28 bg-primary">
        <div class="mt-8 h-0.5 bg-secondary"></div>
        <div class="container mx-auto w-full -translate-y-5 px-4 text-secondary bg-primary">
            <h2 class="w-fit text-3xl font-semibold">{{ __('Our main channels') }}</h2>
            <div class="mt-16 flex flex-col justify-center gap-20 pb-16 lg:flex-row">
                <div class="flex flex-col items-center">
                    <img class="h-40 w-40" src="{{ asset('images/icons/Icon-light/web icon (beige)-01.png') }}" alt="">
                    <span class="mt-2 text-3xl">{{ __('Land Freight') }}</span>
                    <span class="mt-1">— 10 {{ __('business days') }} —</span>
                    <a href="{{ route('land-freight') }}" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>

                <div class="flex flex-col items-center">
                    <img class="h-40 w-40" src="{{ asset('images/icons/Icon-light/web icon (beige)-02.png') }}" alt="">
                    <span class="mt-2 text-3xl">{{ __('Air Freight') }}</span>
                    <span class="mt-1">— 35 {{ __('business days') }} —</span>
                    <a href="{{ route('air-freight') }}" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>

                <div class="flex flex-col items-center">
                    <img class="h-40 w-40" src="{{ asset('images/icons/Icon-light/web icon (beige)-03.png') }}" alt="">
                    <span class="mt-2 text-3xl">{{ __('Sea Freight') }}</span>
                    <span class="mt-1">— 25 {{ __('business days') }} —</span>
                    <a href="{{ route('sea-freight') }}" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-auto px-4 py-16 bg-secondary">
        <h2 class="text-center text-3xl font-bold text-primary">{{ __('History & Achievement') }}</h2>
    </div>
    <div class="relative overflow-auto px-4 py-16 bg-secondary world-map">
        <div class="container relative mx-auto mt-16 flex items-center gap-8 min-w-[104rem]">
            <div class="w-[calc(100%-10rem)] h-0.5 bg-primary absolute top-[13.4rem] left-0"></div>
            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 1</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('Founded in 2009, Xiangyuda focuses on the four major express delivery companies and is a first-level agent for UPS, FEDEX, and DHL in the South China region.') }}
                    </p>
                </div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2009
                </div>
                <div class="h-40"></div>
            </div>

            <div class="flex flex-col gap-8">
                <div class="h-40"></div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2015
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 2</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('We opened up air dispatch business from the United States to mainland China and Hong Kong, as well as a dedicated air dispatch line for pure batteries. In the same year, a branch was established in Guangzhou.') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 3</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('We Opened up a dedicated air dispatch line to Europe. Built a customs clearance team in Europe and America, achieving a clearance rate of up to 99%.') }}
                    </p>
                </div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2016
                </div>
                <div class="h-40"></div>
            </div>

            <div class="flex flex-col gap-8">
                <div class="h-40"></div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2017
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 4</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('We are the first to enter the dedicated air dispatch line to the United States to South Korea, signing long-term strategic cooperation with well-known airlines OZ and KE. In the same year, a branch was established in Bantian.') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 5</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('We opened up a dedicated sea freight channel to the United States, focusing on building a DG pure battery channel and establishing its own overseas warehouse. In the same year, a branch was established in Yiwu.') }}
                    </p>
                </div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2019
                </div>
                <div class="h-40"></div>
            </div>

            <div class="flex flex-col gap-8">
                <div class="h-40"></div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2020
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 6</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('In order to resolutely win the global epidemic prevention and control battle, we opened up a transpor tation channel for epidemic prevention materials, transporting nearly 2000 tons of  materials.') }}
                    </p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 7</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('For expanding the business scope, Xiangyuda’s whollyowned subsidiary Huasheng Yunlian was established to under take minternational parcel business.') }}
                    </p>
                </div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2021
                </div>
                <div class="h-40"></div>
            </div>

            <div class="flex flex-col gap-8">
                <div class="h-40"></div>
                <div
                    class="w-fit px-4 py-1 text-3xl font-bold text-secondary bg-primary relative after:content-[''] after:absolute after:left-full after:top-0 after:border-solid after:border-[22.5px] after:border-r-0 after:border-l-primary after:border-y-transparent">
                    2022
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">{{ __('Step') }} 8</span>
                    <p class="mt-4 line-clamp-5 text-sm min-w-[10rem]">
                        {{ __('For expanding business channels, we established a subsidiary Yuepai, and efficiently developing project customers. In the same year, the headquar ters was relocated to Zhonggang Plaza in Huizhan Bay.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-28 pb-20 bg-primary">
        <div class="mt-8 h-0.5 bg-secondary"></div>
        <div class="container mx-auto w-full -translate-y-5 px-4 text-secondary bg-primary">
            <h2 class="w-fit text-3xl font-semibold">{{ __('Our latest news') }}</h2>
            <div class="mt-16 grid grid-cols-2 gap-4 lg:grid-rows-3">
                <div class="col-span-full flex lg:col-span-1 lg:row-span-3">
                    <img
                        data-src="{{ Storage::url($posts->first()->image) }}"
                        class="h-full w-1/2 object-cover" alt="">
                    <div class="bg-black p-2 min-w-[10rem]">
                        <h3 class="text-3xl font-medium break-all">
                            {{ $posts->first()->title }}
                        </h3>
                        <a href="{{ route('company-new-detail', ['id' => $posts->first()->id]) }}" class="mt-2 block">{{ __('Read more') }} ...</a>
                    </div>
                </div>
                @foreach($posts->skip(1) as $post)
                    <div class="col-span-full flex lg:col-span-1">
                        <img
                            data-src="{{ Storage::url($post->image) }}"
                            class="aspect-square w-24 object-cover" alt="">
                        <div class="ml-4 text-sm">
                            <span class="mt-1 inline-block rounded-full bg-black px-8 py-1">{{ __('New release') }}</span>
                            {{ $post->created_at->format('d/m/Y') }}
                            <h3 class="mt-2 text-3xl font-medium line-clamp-2">
                                {{ $post->title }}
                            </h3>
                            <a href="{{ route('company-new-detail', ['id' => $post->id]) }}" class="mt-2 block">{{ __('Read more') }} ...</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{ route('company-news') }}" class="mx-auto mt-8 block w-fit px-8 py-2 bg-secondary text-primary">
            {{ __('View all news') }}
        </a>
    </div>

    <div class="pt-28 bg-secondary">
        <h2 class="mx-auto mb-10 w-fit text-xl font-bold text-primary lg:text-7xl">
            {{ __('IF YOU NEED HELP') }}
        </h2>
        <div class="mt-8 h-0.5 bg-primary"></div>
        <div class="container mx-auto w-full -translate-y-4 px-4 text-primary bg-secondary">
            <h3 class="w-fit text-center text-5xl font-semibold uppercase">
                {{ __('Please leave your information so we can assist you') }}
            </h3>
            <p class="mt-6 text-center">{{ __('Required fields') }} *</p>
            <form action="{{ route('contact-us') }}" class="mt-4 grid grid-cols-2 gap-4 lg:grid-rows-6">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Please enter your full name') }} *">
                <div class="col-span-1 row-span-6 max-lg:hidden bg-cover bg-center bg-primary"
                     style="background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaDU9sDD7Jpuakk_suG7G8azPUwN0lTmmjpGeTYmpd_TiiRUFe-4dDZiu6ZHd5TGFRGtIsh3OjTJOgahvBESoJueH4FK=w1830-h975');"
                ></div>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Where are you currently staying') }}' *'">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('What is your phone number') }}' *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('What is your email address') }} *">
                <textarea
                    class="col-span-full lg:col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-2 bg-[#f5eccb] resize-none"
                    placeholder="{{ __('Please enter your problem so that we can assist you') }} *"></textarea>
            </form>
            <a href="{{ route('contact-us') }}"
               class="mx-auto mt-8 block w-fit bg-white px-8 py-2 text-primary">{{ __('Next') }}</a>
        </div>

        <div class="mt-8 h-0.5 bg-primary"></div>
        <div class="container mx-auto w-full -translate-y-4 px-4 text-primary">
            <h3 class="mx-auto w-fit px-4 text-center text-3xl font-semibold uppercase bg-secondary">{{ __('Our cooperation') }}</h3>
            <div class="mt-8 grid grid-cols-6 gap-x-8 gap-y-4 pb-4">
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/UPS Logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto scale-[1.5] translate-x-2" src="{{ asset('images/New/The peopple nework.jpg') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/aramex logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/DHL_Logo.svg.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/DHgate-Logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/Fedex logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/Hongkong_Post_Logo.svg.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/EBay_logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/17 track logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto"
                         src="{{ asset('images/New/china postal express and logistics logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto" src="{{ asset('images/New/Amazon-Logo.png') }}"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1 overflow-hidden">
                    <img class="h-20 object-contain mx-auto scale-[1.2]" src="{{ asset('images/New/Alibaba-Logo.png') }}"
                         alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

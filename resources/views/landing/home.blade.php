@extends('layouts.app')

@section('content')
    <div class="flex h-80 items-end justify-center bg-secondary">
        <div class="mb-1 w-full lg:w-1/2 py-2 text-center font-bold uppercase bg-primary text-secondary">
            Here is quick access to
        </div>
    </div>

    <div class="mx-auto flex flex-col lg:flex-row w-full lg:w-1/2 items-center justify-between gap-4 px-16 py-4 bg-primary text-secondary">
        <div class="flex flex-col gap-1">
            Tracking
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
            Find an office
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
        <div class="mx-auto w-full lg:w-3/4 -translate-y-14 px-4 text-primary bg-secondary">
            <h2 class="w-fit text-3xl">We strive to improve our services every
                day<br>to always have the most optimal solution for our customers</h2>
            <p class="mt-6">
                Our objective is to constantly develop our services in order to deliver effective logistical solutions
                while providing
                the most value to our customers. Our distinct value rests in the following services:
            </p>
            <div class="mt-16 flex flex-col lg:flex-row justify-center gap-16">
                <div class="flex flex-col items-center gap-4 font-bold">
                    <img src="{{ asset('images/icons/Icon/Web icon-04.png') }}" class="h-20 w-20" alt="icon">
                    Supply Chain Solutions
                </div>

                <div class="flex flex-col items-center gap-4 font-bold">
                    <img src="{{ asset('images/icons/Icon/Web icon-05.png') }}" class="h-20 w-20" alt="icon">
                    A to Z Transportation Service
                </div>

                <div class="flex flex-col items-center gap-4 font-bold">
                    <img src="{{ asset('images/icons/Icon/Web icon-06.png') }}" class="h-20 w-20" alt="icon">
                    Consulting and Quotation
                </div>
            </div>
        </div>
    </div>

    <div class="pt-28 bg-primary">
        <div class="mt-8 h-0.5 bg-secondary"></div>
        <div class="mx-auto w-full lg:w-3/4 -translate-y-5 px-4 text-secondary bg-primary">
            <h2 class="w-fit text-3xl font-semibold">Our main channels</h2>
            <p class="mt-6">
                Our objective is to constantly develop our services in order to deliver effective logistical solutions
                while providing
                the most value to our customers. Our distinct value rests in the following services:
            </p>
            <div class="mt-16 flex flex-col lg:flex-row justify-center gap-20 pb-16">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="m243.71 118.52l-14-35A12 12 0 0 0 218.58 76H180V64a4 4 0 0 0-4-4H24a12 12 0 0 0-12 12v112a12 12 0 0 0 12 12h20.29a28 28 0 0 0 55.42 0h56.58a28 28 0 0 0 55.42 0H232a12 12 0 0 0 12-12v-64a4 4 0 0 0-.29-1.48ZM180 84h38.58a4 4 0 0 1 3.72 2.51L234.09 116H180ZM20 72a4 4 0 0 1 4-4h148v72H20Zm52 140a20 20 0 1 1 20-20a20 20 0 0 1-20 20Zm84.29-24H99.71a28 28 0 0 0-55.42 0H24a4 4 0 0 1-4-4v-36h152v18.71A28.05 28.05 0 0 0 156.29 188ZM184 212a20 20 0 1 1 20-20a20 20 0 0 1-20 20Zm52-28a4 4 0 0 1-4 4h-20.29A28 28 0 0 0 180 164.29V124h56Z"/>
                    </svg>
                    <span class="mt-2 text-3xl">{{ __('Land Freight') }}</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="#" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>

                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M220 216a4 4 0 0 1-4 4H72a4 4 0 0 1 0-8h144a4 4 0 0 1 4 4Zm24-80v24a4 4 0 0 1-4 4H61.06a35.79 35.79 0 0 1-34.48-25.66L12.52 91.45A12 12 0 0 1 24 76h8a4 4 0 0 1 2.83 1.17L57.66 100h29.7L76.63 67.79A12 12 0 0 1 88 52h8a4 4 0 0 1 2.83 1.17L145.66 100H208a36 36 0 0 1 36 36Zm-8 0a28 28 0 0 0-28-28h-64a4 4 0 0 1-2.83-1.17L94.35 60H88a4 4 0 0 0-3.8 5.26l12.5 37.48a4 4 0 0 1-3.79 5.26H56a4 4 0 0 1-2.82-1.17L30.35 84H24a4 4 0 0 0-3.83 5.15l14.07 46.9A27.83 27.83 0 0 0 61.06 156H236Z"/>
                    </svg>
                    <span class="mt-2 text-3xl">{{ __('Air Freight') }}</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="#" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>

                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor"
                              d="M0 23.5a3 3 0 0 0 3-3a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 1 0 6 0a3 3 0 0 0 3 3M5.5 10.237V3.5h13v6.737M12 0v3.5M5.5 19c0-.174-.12-.77-.279-1.476c-.448-2.004-1.342-3.878-2.55-5.538L2.5 11.75v-.25l8.117-3.418A2.259 2.259 0 0 0 12 6m0 0c0 .909.545 1.73 1.383 2.082L21.5 11.5v.25l-.172.236c-1.207 1.66-2.101 3.534-2.55 5.538c-.157.705-.278 1.302-.278 1.476M12 6v13"/>
                    </svg>
                    <span class="mt-2 text-3xl">{{ __('Sea Freight') }}</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="#" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-secondary px-4 overflow-auto">
        <h2 class="text-center text-3xl font-bold text-primary">{{ __('History & Achievement') }}</h2>
        <div class="container relative mx-auto mt-16 flex items-center gap-8 min-w-[104rem]">
            <div class="w-[calc(100%-10rem)] h-0.5 bg-primary absolute top-[13.4rem] left-0"></div>
            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
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
                    2009
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
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
                    2009
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
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
                    2009
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
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
                    2009
                </div>
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ad, at
                        deserunt dignissimos eaque facilis
                        illo inventore ipsum libero magnam mollitia</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-28 pb-20 bg-primary">
        <div class="mt-8 h-0.5 bg-secondary"></div>
        <div class="mx-auto w-full lg:w-3/4 -translate-y-5 px-4 text-secondary bg-primary">
            <h2 class="w-fit text-3xl font-semibold">Our latest news</h2>
            <div class="mt-16 grid grid-cols-2 lg:grid-rows-3 gap-4">
                <div class="col-span-full lg:col-span-1 lg:row-span-3 flex">
                    <img src="https://placehold.co/600x400" class="w-1/2 h-full object-cover" alt="">
                    <div class="bg-black p-2 min-w-[10rem]">
                        <h3 class="text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            aliquam architecto
                            delectus</h3>
                        <a href="#" class="mt-2 block text-xs">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-1 flex">
                    <img src="https://placehold.co/600x400" class="aspect-square w-24 object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="rounded-full bg-black px-8 py-1 inline-block mt-1">New release</span>
                        10/10/2023
                        <h3 class="mt-2 text-3xl font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 block text-sm">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-1 flex">
                    <img src="https://placehold.co/600x400" class="aspect-square w-24 object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="rounded-full bg-black px-8 py-1 inline-block mt-1">New release</span>
                        10/10/2023
                        <h3 class="mt-2 text-3xl font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 block text-sm">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-1 flex">
                    <img src="https://placehold.co/600x400" class="aspect-square w-24 object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="rounded-full bg-black px-8 py-1 inline-block mt-1">New release</span>
                        10/10/2023
                        <h3 class="mt-2 text-3xl font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 block text-sm">Read more ...</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="mx-auto mt-8 block w-fit px-8 py-2 bg-secondary text-primary">View all news</a>
    </div>

    <div class="pt-28 bg-secondary">
        <h2 class="mx-auto mb-10 w-fit text-xl lg:text-7xl font-bold text-primary">IF YOU NEED HELP</h2>
        <div class="mt-8 h-0.5 bg-primary"></div>
        <div class="mx-auto w-full lg:w-1/2 -translate-y-4 px-4 text-primary bg-secondary">
            <h3 class="w-fit text-center text-3xl font-semibold uppercase">Please leave your information so we can
                assist you</h3>
            <p class="mt-6 text-center">Required fields *</p>
            <form action="" class="mt-4 grid grid-cols-2 lg:grid-rows-6 gap-4">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Please enter your full name *">
                <div class="col-span-1 row-span-6 bg-primary hidden"></div>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Where are you currently staying *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="What is your phone number *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="What is your email address *">
                <textarea
                    class="col-span-full lg:col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-2 bg-[#f5eccb] resize-none"
                    placeholder="Please enter your problem so that we can assist you *"></textarea>
            </form>
            <a href="#" class="mx-auto mt-8 block w-fit bg-white px-8 py-2 text-primary">Next</a>
        </div>

        <div class="mt-8 h-0.5 bg-primary"></div>
        <div class="mx-auto w-full lg:w-3/4 -translate-y-4 px-4 text-primary">
            <h3 class="mx-auto w-fit px-4 text-center text-3xl font-semibold uppercase bg-secondary">Our
                cooperation</h3>
            <div class="mt-8 grid grid-cols-6 gap-x-8 gap-y-4 pb-4">
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 lg:col-span-1 bg-white p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

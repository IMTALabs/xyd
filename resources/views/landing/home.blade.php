@extends('layouts.app')

@section('content')
    <div class="flex items-end justify-center bg-cover bg-center aspect-[10/4] bg-secondary"
         style="background-image: url('https://res.cloudinary.com/dyxp9ndma/image/upload/f_auto,q_auto/uoyxzczanz4617ouqaix')">
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
                tab: null
            }">
            <h2 class="w-fit text-3xl font-bold">{{ __('We strive to improve our services every day to always have the most optimal solution for our customers') }}</h2>
            <p class="mt-6 text-lg">
                {{ __('Our objective is to constantly develop our services in order to deliver effective logistical solutions while providing the most value to our customers. Our distinct value rests in the following services:') }}
            </p>
            <div class="mt-16 flex flex-col justify-center gap-16 lg:flex-row" x-show="tab === null">
                <div class="flex flex-col items-center gap-4 font-bold" @mouseenter="tab = 1">
                    <img src="{{ asset('images/icons/Icon/Web icon-04.png') }}" class="h-24 w-24" alt="icon">
                    {{ __('Supply Chain Solutions') }}
                </div>

                <div class="flex flex-col items-center gap-4 font-bold" @mouseenter="tab = 2">
                    <img src="{{ asset('images/icons/Icon/Web icon-05.png') }}" class="h-24 w-24" alt="icon">
                    {{ __('A to Z Transportation Service') }}
                </div>

                <div class="flex flex-col items-center gap-4 font-bold" @mouseenter="tab = 3">
                    <img src="{{ asset('images/icons/Icon/Web icon-06.png') }}" class="h-24 w-24" alt="icon">
                    {{ __('Consulting and Quotation') }}
                </div>
            </div>

            <div x-show="tab !== null" style="display: none" class="pt-8" @mouseleave="tab = null">
                <div class="mx-auto max-w-2xl min-h-[10rem]" x-show="tab === 1">
                    <div class="flex max-lg:flex-col items-center gap-4">
                        <div class="flex flex-col items-center gap-4 font-bold shrink-0">
                            <img src="{{ asset('images/icons/Icon/Web icon-04.png') }}" class="h-24 w-24" alt="icon">
                            {{ __('Supply Chain Solutions') }}
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur atque autem
                            cumque dolorem eius eligendi exercitationem, iusto magnam molestiae natus officia pariatur
                            possimus quidem reiciendis repudiandae totam ullam voluptates.
                            <a href="{{ route('supply-chain-solution') }}"
                               class="mt-1 ml-auto block w-fit px-4 py-2 bg-primary text-secondary">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mx-auto max-w-2xl min-h-[10rem]" x-show="tab === 2">
                    <div class="flex max-lg:flex-col items-center gap-4">
                        <div class="flex flex-col items-center gap-4 font-bold shrink-0">
                            <img src="{{ asset('images/icons/Icon/Web icon-05.png') }}" class="h-24 w-24" alt="icon">
                            {{ __('A to Z Transportation Service') }}
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto assumenda
                            corporis dolores exercitationem quaerat rerum voluptas voluptatem? Architecto aspernatur
                            cupiditate iste iure molestiae, molestias perferendis quibusdam similique unde veniam.
                            <a href="{{ route('a-to-z') }}"
                               class="mt-1 ml-auto block w-fit px-4 py-2 bg-primary text-secondary">
                                {{ __('Read more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mx-auto max-w-2xl min-h-[10rem]" x-show="tab === 3">
                    <div class="flex max-lg:flex-col items-center gap-4">
                        <div class="flex flex-col items-center gap-4 font-bold shrink-0">
                            <img src="{{ asset('images/icons/Icon/Web icon-06.png') }}" class="h-24 w-24" alt="icon">
                            {{ __('Consulting and Quotation') }}
                        </div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore dolores eaque
                            eveniet fugit harum illum in, maxime nam neque nulla officia possimus praesentium
                            repellendus reprehenderit soluta tempore totam vel?
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
                    <span class="mt-1">— 10 business days —</span>
                    <a href="{{ route('land-freight') }}" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>

                <div class="flex flex-col items-center">
                    <img class="h-40 w-40" src="{{ asset('images/icons/Icon-light/web icon (beige)-02.png') }}" alt="">
                    <span class="mt-2 text-3xl">{{ __('Air Freight') }}</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="{{ route('air-freight') }}" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>

                <div class="flex flex-col items-center">
                    <img class="h-40 w-40" src="{{ asset('images/icons/Icon-light/web icon (beige)-03.png') }}" alt="">
                    <span class="mt-2 text-3xl">{{ __('Sea Freight') }}</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="{{ route('sea-freight') }}" class="mt-4 text-sm">{{ __('Read more') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-auto px-4 py-16 bg-secondary world-map">
        <h2 class="text-center text-3xl font-bold text-primary">{{ __('History & Achievement') }}</h2>
        <div class="container relative mx-auto mt-16 flex items-center gap-8 min-w-[104rem]">
            <div class="w-[calc(100%-10rem)] h-0.5 bg-primary absolute top-[13.4rem] left-0"></div>
            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ab </p>
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
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus delectus</p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. </p>
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
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Earum inventore </p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit</p>
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
                        elit. </p>
                </div>
            </div>

            <div class="flex flex-col gap-8">
                <div
                    class="h-40 text-primary border-l-2 border-primary pl-4 before:content-[''] before:w-2 before:h-2 before:bg-primary before:rounded-full before:block before:-translate-x-[21px] after:content-[''] after:w-2 after:h-2 after:bg-primary after:rounded-full after:block after:-translate-x-[21px]">
                    <span class="text-3xl font-bold">Step 1</span>
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Distinctio dolorum</p>
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
                    <p class="mt-4 text-justify line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Blanditiis </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-28 pb-20 bg-primary">
        <div class="mt-8 h-0.5 bg-secondary"></div>
        <div class="container mx-auto w-full -translate-y-5 px-4 text-secondary bg-primary">
            <h2 class="w-fit text-3xl font-semibold">Our latest news</h2>
            <div class="mt-16 grid grid-cols-2 gap-4 lg:grid-rows-3">
                <div class="col-span-full flex lg:col-span-1 lg:row-span-3">
                    <img src="https://placehold.co/600x400" class="h-full w-1/2 object-cover" alt="">
                    <div class="bg-black p-2 min-w-[10rem]">
                        <h3 class="text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            aliquam architecto
                            delectus</h3>
                        <a href="#" class="mt-2 block text-xs">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-full flex lg:col-span-1">
                    <img src="https://placehold.co/600x400" class="aspect-square w-24 object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="mt-1 inline-block rounded-full bg-black px-8 py-1">New release</span>
                        10/10/2023
                        <h3 class="mt-2 text-3xl font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 block text-sm">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-full flex lg:col-span-1">
                    <img src="https://placehold.co/600x400" class="aspect-square w-24 object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="mt-1 inline-block rounded-full bg-black px-8 py-1">New release</span>
                        10/10/2023
                        <h3 class="mt-2 text-3xl font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 block text-sm">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-full flex lg:col-span-1">
                    <img src="https://placehold.co/600x400" class="aspect-square w-24 object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="mt-1 inline-block rounded-full bg-black px-8 py-1">New release</span>
                        10/10/2023
                        <h3 class="mt-2 text-3xl font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 block text-sm">Read more ...</a>
                    </div>
                </div>
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
            <form action="" class="mt-4 grid grid-cols-2 gap-4 lg:grid-rows-6">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Please enter your full name *">
                <div class="col-span-1 row-span-6 max-lg:hidden bg-cover bg-center bg-primary"
                     style="background-image: url('{{ asset('images/covers/home page.png') }}');"
                ></div>
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
        <div class="container mx-auto w-full -translate-y-4 px-4 text-primary">
            <h3 class="mx-auto w-fit px-4 text-center text-3xl font-semibold uppercase bg-secondary">{{ __('Our cooperation') }}</h3>
            <div class="mt-8 grid grid-cols-6 gap-x-8 gap-y-4 pb-4">
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="col-span-3 bg-white p-4 lg:col-span-1">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

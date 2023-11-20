@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-11.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="container mx-auto flex w-full items-center overflow-auto whitespace-nowrap [&_svg]:shrink-0">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Our service') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Consulting and Quotation') }}</a>
            </ul>
        </div>

        <h1 class="container mx-auto w-full text-3xl font-medium text-primary">{{ __('Consulting and Quotation') }}</h1>

        <div class="container mx-auto grid w-full grid-cols-4 gap-10 pt-16">
            <div class="relative col-span-full lg:col-span-1 flex aspect-square items-center justify-center">
                <div class="absolute inset-0 flex justify-center rounded-full pt-2 bg-primary rotate-[135deg] z-[-2]">
                    <div class="rounded-tl-full rounded-tr-full bg-white w-[calc(100%-1rem)] h-1/2 relative"></div>
                </div>
                <div
                    class="max-lg:hidden absolute top-1/2 left-1/2 flex h-1/4 w-1/2 translate-x-1/2 -translate-y-1/2 items-center justify-center bg-white z-[-1]"
                    style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
                    <div class="w-[calc(100%-2rem)] h-[calc(100%-1rem)] bg-primary flex items-center justify-center"
                         style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
                        <div class="w-[calc(100%-2rem)] h-[calc(100%-1rem)] bg-white"
                             style="clip-path: polygon(0% 0%, 77% 0%, 100% 50%, 77% 100%, 0% 100%);">
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-0 left-0 z-10 flex h-1/4 w-1/4 items-center justify-center rounded-full bg-primary">
                    <div
                        class="text-primary bg-secondary w-[calc(100%-10px)] h-[calc(100%-10px)] rounded-full flex items-center justify-center text-center text-4xl font-bold">
                        1
                    </div>
                </div>

                <div
                    class="w-[calc(100%-3rem)] h-[calc(100%-3rem)] rounded-full bg-secondary shadow-2xl flex flex-col justify-center items-center text-center text-primary p-4">
                    <h2 class="font-bold xl:text-base">{{ __('Professional') }}</h2>
                    <p class="text-xs line-clamp-2 max-xl:text-xl mt-4 xl:text-base">
                        {{ __('Highly specialized consultants. Personalize service according to your requirements') }}
                    </p>
                </div>
            </div>

            <div class="relative col-span-full lg:col-span-1 flex aspect-square items-center justify-center">
                <div class="absolute inset-0 flex justify-center rounded-full pt-2 bg-primary rotate-[135deg] z-[-2]">
                    <div class="rounded-tl-full rounded-tr-full bg-white w-[calc(100%-1rem)] h-1/2 relative"></div>
                </div>
                <div
                    class="max-lg:hidden absolute top-1/2 left-1/2 flex h-1/4 w-1/2 translate-x-1/2 -translate-y-1/2 items-center justify-center bg-white z-[-1]"
                    style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
                    <div class="w-[calc(100%-2rem)] h-[calc(100%-1rem)] bg-primary flex items-center justify-center"
                         style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
                        <div class="w-[calc(100%-2rem)] h-[calc(100%-1rem)] bg-white"
                             style="clip-path: polygon(0% 0%, 77% 0%, 100% 50%, 77% 100%, 0% 100%);">
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-0 left-0 z-10 flex h-1/4 w-1/4 items-center justify-center rounded-full bg-primary">
                    <div
                        class="text-primary bg-secondary w-[calc(100%-10px)] h-[calc(100%-10px)] rounded-full flex items-center justify-center text-center text-4xl font-bold">
                        2
                    </div>
                </div>

                <div
                    class="w-[calc(100%-3rem)] h-[calc(100%-3rem)] rounded-full bg-secondary shadow-2xl flex flex-col justify-center items-center text-center text-primary p-4">
                    <h2 class="font-bold xl:text-base">{{ __('Flexible Settlement') }}</h2>
                    <p class="text-xs line-clamp-2 max-xl:text-xl mt-4 xl:text-base">
                        {{ __('We provide advanced service so you can have flexible payment time.') }}
                    </p>
                </div>
            </div>

            <div class="relative col-span-full lg:col-span-1 flex aspect-square items-center justify-center">
                <div class="absolute inset-0 flex justify-center rounded-full pt-2 bg-primary rotate-[135deg] z-[-2]">
                    <div class="rounded-tl-full rounded-tr-full bg-white w-[calc(100%-1rem)] h-1/2 relative"></div>
                </div>
                <div
                    class="max-lg:hidden absolute top-1/2 left-1/2 flex h-1/4 w-1/2 translate-x-1/2 -translate-y-1/2 items-center justify-center bg-white z-[-1]"
                    style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
                    <div class="w-[calc(100%-2rem)] h-[calc(100%-1rem)] bg-primary flex items-center justify-center"
                         style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);">
                        <div class="w-[calc(100%-2rem)] h-[calc(100%-1rem)] bg-white"
                             style="clip-path: polygon(0% 0%, 77% 0%, 100% 50%, 77% 100%, 0% 100%);">
                        </div>
                    </div>
                </div>

                <div
                    class="absolute top-0 left-0 z-10 flex h-1/4 w-1/4 items-center justify-center rounded-full bg-primary">
                    <div
                        class="text-primary bg-secondary w-[calc(100%-10px)] h-[calc(100%-10px)] rounded-full flex items-center justify-center text-center text-4xl font-bold">
                        3
                    </div>
                </div>

                <div
                    class="w-[calc(100%-3rem)] h-[calc(100%-3rem)] rounded-full bg-secondary shadow-2xl flex flex-col justify-center items-center text-center text-primary p-4">
                    <h2 class="font-bold xl:text-base">{{ __('Enthusiasm') }}</h2>
                    <p class="text-xs line-clamp-2 max-xl:text-xl mt-4 xl:text-base">
                        {{ __('Enthusiastic consulting staff, 24/7 customer support') }}
                    </p>
                </div>
            </div>

            <div class="relative col-span-full lg:col-span-1 flex aspect-square items-center justify-center">
                <div class="absolute inset-0 flex justify-center rounded-full pt-2 bg-primary rotate-[135deg] z-[-2]">
                    <div class="rounded-tl-full rounded-tr-full bg-white w-[calc(100%-1rem)] h-1/2 relative"></div>
                </div>

                <div
                    class="absolute top-0 left-0 z-10 flex h-1/4 w-1/4 items-center justify-center rounded-full bg-primary">
                    <div
                        class="text-primary bg-secondary w-[calc(100%-10px)] h-[calc(100%-10px)] rounded-full flex items-center justify-center text-center text-4xl font-bold">
                        4
                    </div>
                </div>

                <div
                    class="w-[calc(100%-3rem)] h-[calc(100%-3rem)] rounded-full bg-secondary shadow-2xl flex flex-col justify-center items-center text-center text-primary p-4">
                    <h2 class="font-bold xl:text-base">{{ __('With great care') }}</h2>
                    <p class="text-xs line-clamp-2 max-xl:text-xl mt-4 xl:text-base">
                        {{ __('We handle cargo with love and care') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="container mx-auto w-full py-16 text-primary">
            <div class="flex max-w-lg items-center gap-4">
                <div class="grow h-0.5 bg-primary min-w-[1rem]"></div>
                <div class="text-3xl font-bold">{{ __('Efficient working conditions') }}</div>
                <div class="grow h-0.5 bg-primary min-w-[1rem]"></div>
            </div>
            <div class="mx-auto w-full container pt-16 text-justify text-primary">
                {{ __('Our company has its own customs clearance agency and is equipped with an EDI system that directly connects to the customs network. We have our own warehouse and strictly follow customer requirements for unloading and packing, with dedicated personnel responsible for monitoring the loading process and taking photos. We have established good relationships with the port area and have signed contracts for cooperation with major international airlines, possessing strong partnership relations.') }}
            </div>

            <div class="mt-16 flex max-w-lg items-center gap-4">
                <div class="grow h-0.5 bg-primary min-w-[1rem]"></div>
                <div class="text-3xl font-bold">{{ __('Perfect service plan') }}</div>
                <div class="grow h-0.5 bg-primary min-w-[1rem]"></div>
            </div>
            <div class="mt-16 flex items-center container mx-auto">
                <div class="flex max-lg:hidden w-1/2 items-center justify-center pr-8 text-justify">
                    <img class="w-64 h-64"  data-src="{{ asset('images/icons/Icon/Web icon-06.png') }}" alt="">
                </div>
                <div class="w-full container lg:pl-8 text-justify">
                    {{ __('Through unified scheduling and coordination, timely cargo inquiries, and tracking, customers can
                    easily enjoy the advantages of networked services. A well-established transportation network can
                    effectively avoid the following situations:') }}
                    <br><br>
                    - {{ __('Higher charging standards of designated freight forwarders.') }}
                    <br>
                    - {{ __('Lack of systematic services, resulting in poor user experience.') }}
                    <br><br>
                    {{ __('This can effectively reduce unnecessary troubles for domestic customers and improve customer
                    satisfaction.') }}
                </div>
            </div>
        </div>
    </div>
@endsection

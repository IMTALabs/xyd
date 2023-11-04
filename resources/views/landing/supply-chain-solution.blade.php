@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-09.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
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
                <a href="#">{{ __('Supply chain solution') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Supply chain solution') }}</h1>

        <div class="mx-auto w-full container text-justify text-primary py-16">
            Our main business is undertaking diversified international freight transportation services, including
            sea, land, air, and rail. We focuse on meeting customer needs and pursuing perfect service. We rely on
            a fast transportation network and a comprehensive management system to establish in the freight
            industry and provide all-round "pickup-transport-delivery" one-to-one service.
        </div>

        <div class="w-full container mx-auto pb-16 text-primary grid lg:grid-cols-2 gap-16">
            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Air Freight') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img src="https://placehold.co/640x200" class="mt-4 object-cover w-full" alt="">
                <a href="{{ route('air-freight') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>

            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Sea Freight') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img src="https://placehold.co/640x200" class="mt-4 object-cover w-full" alt="">
                <a href="{{ route('sea-freight') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>

            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Land Freight') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img src="https://placehold.co/640x200" class="mt-4 object-cover w-full" alt="">
                <a href="{{ route('land-freight') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>

            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Warehouse') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img src="https://placehold.co/640x200" class="mt-4 object-cover w-full" alt="">
                <a href="{{ route('warehouse') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>
        </div>

        <div class="w-full container mx-auto pb-16 text-primary">
            <h1 class="text-3xl text-primary font-medium">We are exceptionally experienced</h1>
            <div class="grid lg:grid-cols-2 gap-16 mt-16">
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20" src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">South Korea and Hong Kong Freight Forwarding</h3>
                    <p class="text-center">We signed cooperation agreements with major international airlines, honored as the international
                        airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned
                        airlines.</p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20" src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">Europe and American International Air Freight Services</h3>
                    <p class="text-center">We signed cooperation agreements with major international airlines, honored as the international
                        airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned
                        airlines.</p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20" src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">International Sea Freight Services for Europe, America, England and Mexico</h3>
                    <p class="text-center">We signed cooperation agreements with major international airlines, honored as the international
                        airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned
                        airlines.</p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20" src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">Special channel of Air Freight</h3>
                    <p class="text-center">We signed cooperation agreements with major international airlines, honored as the international
                        airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned
                        airlines.</p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20" src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">Yantian / Hong Kong DG</h3>
                    <p class="text-center">We signed cooperation agreements with major international airlines, honored as the international
                        airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned
                        airlines.</p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20" src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">American Overseas Warehouse</h3>
                    <p class="text-center">We signed cooperation agreements with major international airlines, honored as the international
                        airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned
                        airlines.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

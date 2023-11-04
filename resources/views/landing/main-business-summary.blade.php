@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-08.png') }}" class="w-full" alt="">

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
                <a href="#">{{ __('Main Business Summary') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Main Business Summary') }}</h1>

        <div class="mx-auto w-full container text-justify text-primary py-16">
            Our main business is undertaking diversified international freight transportation services, including
            sea, land, air, and rail. We focuse on meeting customer needs and pursuing perfect service. We rely on
            a fast transportation network and a comprehensive management system to establish in the freight
            industry and provide all-round "pickup-transport-delivery" one-to-one service.
            Our main business is undertaking diversified international freight transportation services, including
            sea, land, air, and rail. We focuse on meeting customer needs and pursuing perfect service. We rely on
            a fast transportation network and a comprehensive management system to establish in the freight
            industry and provide all-round "pickup-transport-delivery" one-to-one service.
            Our main business is undertaking diversified international freight transportation services, including
            sea, land, air, and rail. We focuse on meeting customer needs and pursuing perfect service. We rely on
            a fast transportation network and a comprehensive management system to establish in the freight
            industry and provide all-round "pickup-transport-delivery" one-to-one service.
        </div>

        <div class="grid mx-auto w-full container grid-cols-4 gap-8 mb-16">
            <div class="p-4 pl-16 text-xl bg-primary text-secondary col-span-1" style="clip-path: polygon(90% 0%, 100% 50%, 90% 100%, 0% 100%, 0 49%, 0% 0%);">
                {{ __('Quick Feedback') }}
            </div>

            <div class="p-4 pl-16 text-xl bg-[#6a3c18] text-secondary col-span-1" style="clip-path: polygon(90% 0%, 100% 50%, 90% 100%, 0% 100%, 10% 49%, 0% 0%);">
                {{ __('Profession') }}
            </div>

            <div class="p-4 pl-16 text-xl bg-[#83481e] text-secondary col-span-1" style="clip-path: polygon(90% 0%, 100% 50%, 90% 100%, 0% 100%, 10% 49%, 0% 0%);">
                {{ __('Responsibility') }}
            </div>

            <div class="p-4 pl-16 text-xl bg-[#9c7b4e] text-secondary col-span-1" style="clip-path: polygon(90% 0%, 100% 50%, 90% 100%, 0% 100%, 10% 49%, 0% 0%);">
                {{ __('Safe solution') }}
            </div>
        </div>

        <div class="bg-secondary py-16 text-primary px-2">
            <h3 class="text-center text-3xl font-semibold">
                {{ __('We has gained the recognition and trust of a wide range of customers') }}
            </h3>
            <p class="text-center mt-4">{{ __('Stable timeliness and high-quality service are ahead of peers.') }}</p>
            <div class="w-full container mx-auto mt-12 flex max-lg:flex-col gap-16 justify-center">
                <div class="flex flex-col items-center text-2xl gap-2 text-center w-full lg:w-1/5">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-20.png') }}" alt="">
                    {{ __('Trailers') }}
                </div>
                <div class="flex flex-col items-center text-2xl gap-2 text-center w-full lg:w-1/5">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-23.png') }}" alt="">
                    {{ __('Storage') }}
                </div>
                <div class="flex flex-col items-center text-2xl gap-2 text-center w-full lg:w-1/5">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-27.png') }}" alt="">
                    {{ __('Door-to-door Delivery') }}
                </div>
                <div class="flex flex-col items-center text-2xl gap-2 text-center w-full lg:w-1/5">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-28.png') }}" alt="">
                    {{ __('Agent Customs Declaration And Inspection') }}
                </div>
                <div class="flex flex-col items-center text-2xl gap-2 text-center w-full lg:w-1/5">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-26.png') }}" alt="">
                    {{ __('Agent Cargo Transportation Insurance') }}
                </div>
            </div>
        </div>

        <div class="py-16 text-primary">
            <h3 class="text-center text-3xl font-semibold">
                {{ __('Diversified international freight transportation business') }}
            </h3>
            <p class="text-center mt-4">{{ __('Attracted a growing user base both domestically and globally.') }}</p>
            <div class="w-full container mx-auto mt-12 flex max-lg:flex-col flex-wrap gap-y-16 gap-x-8 justify-center">
                <div class="flex justify-center items-center text-2xl gap-8 text-center w-full lg:w-1/3">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-02.png') }}" alt="">
                    {{ __('Air Freight') }}
                </div>
                <div class="flex justify-center items-center text-2xl gap-8 text-center w-full lg:w-1/3">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                    {{ __('Sea Freight') }}
                </div>
                <div class="flex justify-center items-center text-2xl gap-8 text-center w-full lg:w-1/3">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-01.png') }}" alt="">
                    {{ __('Land Freight') }}
                </div>
                <div class="flex justify-center items-center text-2xl gap-8 text-center w-full lg:w-1/3">
                    <img class="w-32 h-32" src="{{ asset('images/icons/Icon/Web icon-19.png') }}" alt="">
                    {{ __('Warehouse') }}
                </div>
            </div>
        </div>
    </div>
@endsection

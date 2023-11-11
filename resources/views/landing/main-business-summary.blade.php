@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-08.png') }}" class="w-full" alt="">

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
                <a href="#">{{ __('Main Business Summary') }}</a>
            </ul>
        </div>

        <h1 class="container mx-auto w-full text-3xl font-medium text-primary">{{ __('Main Business Summary') }}</h1>

        <div class="container mx-auto w-full py-16 text-justify text-primary text-xl">
            {{ __('Our main business is undertaking diversified international freight transportation services, including sea, land, air, and rail. We focus on meeting customer needs and pursuing perfect service. We rely on a fast transportation network and a comprehensive management system to establish in the freight industry and provide all-round "pickup-transport-delivery" one-to-one service.') }}
        </div>

        <div class="container mx-auto mb-16 grid w-full grid-cols-4 max-lg:grid-cols-1 gap-8">
            <div class="col-span-1 p-4 pl-16 text-xl bg-primary text-secondary" style="clip-path: polygon(90% 0%, 100% 50%, 90% 100%, 0% 100%, 0 49%, 0% 0%);">
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

        <div class="px-2 py-16 bg-secondary text-primary">
            <h3 class="text-center text-3xl font-semibold">
                {{ __('We has gained the recognition and trust of a wide range of customers') }}
            </h3>
            <p class="mt-4 text-center text-xl">{{ __('Stable timeliness and high-quality service are ahead of peers.') }}</p>
            <div class="container mx-auto mt-12 flex w-full max-lg:flex-col justify-center gap-16">
                <div class="flex w-full flex-col items-center gap-2 text-center text-2xl lg:w-1/5">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-20.png') }}" alt="">
                    {{ __('Trailers') }}
                </div>
                <div class="flex w-full flex-col items-center gap-2 text-center text-2xl lg:w-1/5">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-23.png') }}" alt="">
                    {{ __('Storage') }}
                </div>
                <div class="flex w-full flex-col items-center gap-2 text-center text-2xl lg:w-1/5">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-27.png') }}" alt="">
                    {{ __('Door-to-door Delivery') }}
                </div>
                <div class="flex w-full flex-col items-center gap-2 text-center text-2xl lg:w-1/5">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-28.png') }}" alt="">
                    {{ __('Agent Customs Declaration And Inspection') }}
                </div>
                <div class="flex w-full flex-col items-center gap-2 text-center text-2xl lg:w-1/5">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-26.png') }}" alt="">
                    {{ __('Agent Cargo Transportation Insurance') }}
                </div>
            </div>
        </div>

        <div class="py-16 text-primary">
            <h3 class="text-center text-3xl font-semibold">
                {{ __('Diversified international freight transportation business') }}
            </h3>
            <p class="mt-4 text-center text-xl">{{ __('Attracted a growing user base both domestically and globally.') }}</p>
            <div class="container mx-auto mt-12 flex w-full max-lg:flex-col flex-wrap justify-center gap-x-8 gap-y-16">
                <div class="flex w-full items-center justify-center gap-8 text-center text-2xl lg:w-1/3">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-02.png') }}" alt="">
                    {{ __('Air Freight') }}
                </div>
                <div class="flex w-full items-center justify-center gap-8 text-center text-2xl lg:w-1/3">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                    {{ __('Sea Freight') }}
                </div>
                <div class="flex w-full items-center justify-center gap-8 text-center text-2xl lg:w-1/3">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-01.png') }}" alt="">
                    {{ __('Land Freight') }}
                </div>
                <div class="flex w-full items-center justify-center gap-8 text-center text-2xl lg:w-1/3">
                    <img class="h-24 w-24"  data-src="{{ asset('images/icons/Icon/Web icon-19.png') }}" alt="">
                    {{ __('Warehouse') }}
                </div>
            </div>
        </div>
    </div>
@endsection

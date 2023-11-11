@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-19.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Help Center') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Support Center') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Support Center') }}</h1>

        <div class=" flex flex-col items-center" x-data="{
            tab: ''
        }">
            <div class="w-full lg:max-w-2xl mx-auto pb-16 mt-16 grid grid-cols-2 gap-16 text-primary">
                <div class="col-span-1 flex flex-col items-center max cursor-pointer" @click="tab = 1">
                    <img  data-src="{{ asset('images/icons/Icon/Web icon-07.png') }}" class="w-20 h-20" alt="">
                    <h2 class="mt-8 text-3xl text-center lg:text-3xl font-bold">{{ __('Security Compliance') }}</h2>
                </div>
                <div class="col-span-1 flex flex-col items-center max cursor-pointer" @click="tab = 2">
                    <img  data-src="{{ asset('images/icons/Icon/Web icon-08.png') }}" class="w-20 h-20" alt="">
                    <h2 class="mt-8 text-3xl text-center lg:text-3xl font-bold">{{ __('Account Services') }}</h2>
                </div>
                <div class="col-span-1 flex flex-col items-center max cursor-pointer" @click="tab = 3">
                    <img  data-src="{{ asset('images/icons/Icon/Web icon-10.png') }}" class="w-20 h-20" alt="">
                    <h2 class="mt-8 text-3xl text-center lg:text-3xl font-bold">{{ __("Beginner's Guide") }}</h2>
                </div>
                <div class="col-span-1 flex flex-col items-center max cursor-pointer" @click="tab = 4">
                    <img  data-src="{{ asset('images/icons/Icon/Web icon-09.png') }}" class="w-20 h-20" alt="">
                    <h2 class="mt-8 text-3xl text-center lg:text-3xl font-bold">{{ __('Platform Collection') }}</h2>
                </div>
            </div>
            <div class="
                w-0 h-0
                border-l-[50px] border-l-transparent
                border-b-[75px] border-b-secondary
                border-r-[50px] border-r-transparent" x-show="tab !== ''">
            </div>
            <div class="bg-secondary w-full min-h-[10rem]" x-show="tab !== ''">
                <div class="container mt-8 mx-auto text-primary" x-show="tab === 1">
                    <h1>{{ __('This section will be updated soon') }}</h1>
                </div>
                <div class="container mt-8 mx-auto text-primary" x-show="tab === 2">
                    <h1>{{ __('This section will be updated soon') }}</h1>
                </div>
                <div class="container mt-8 mx-auto text-primary" x-show="tab === 3">
                    <h1>{{ __('This section will be updated soon') }}</h1>
                </div>
                <div class="container mt-8 mx-auto text-primary" x-show="tab === 4">
                    <h1>{{ __('This section will be updated soon') }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

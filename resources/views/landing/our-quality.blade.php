@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-06.png') }}" class="w-full" alt="">

    <div class="py-16 text-primary">
        <ul class="w-full lg:w-3/4 mx-auto flex items-center max-lg:px-4">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">Our Quality</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-full lg:w-3/4 text-primary font-medium max-lg:px-4 truncate">Bring the best quality ...</h1>
    <div class="mx-auto w-full lg:w-3/5 text-justify text-primary pb-16 mt-12 max-lg:px-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deserunt doloribus facilis modi ratione
        sapiente voluptate. Eaque, eos porro? Amet dolor dolore explicabo quibusdam quos reiciendis vel voluptates?
        Doloremque, provident? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at blanditiis cum ex
        expedita facilis, harum illo in incidunt iure, laboriosam laborum molestias, necessitatibus nobis quo ratione
        reiciendis rem voluptas!
    </div>

    <h2 class="text-3xl mx-auto w-full lg:w-3/4 text-primary max-lg:px-4">We have prove of our success</h2>
    <div class="flex max-lg:flex-col-reverse w-full lg:w-3/4 mx-auto max-lg:px-4">
        <div class="mb-4 border-l-2 py-8 border-primary text-primary w-full lg:w-2/3 mt-4 shrink-0">
            <div class="flex items-center gap-4 text-xl font-medium">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
            <div class="flex items-center gap-4 text-xl font-medium mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>
        <img src="https://placehold.co/453x632" class="w-full lg:w-1/3 object-cover my-4" alt="">
    </div>
@endsection

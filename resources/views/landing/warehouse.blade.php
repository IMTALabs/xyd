@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-16.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full lg:w-3/4 mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Main Channels') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Warehouse') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full lg:w-3/4 text-primary font-medium">{{ __('Warehouse') }}</h1>

        <div class="flex max-lg:flex-col items-center w-full lg:w-3/4 mx-auto text-primary py-16">
            <div class="w-full lg:w-1/2 lg:pr-16 bg-primary relative aspect-video">
                <div
                    class="bg-primary border-[1rem] border-white w-2/5 aspect-video absolute -right-8 -bottom-8 max-lg:hidden"></div>
            </div>
            <div class="w-full lg:w-1/2 lg:pl-16 max-lg:mt-8">
                <h2 class="text-3xl font-bold">{{ __('Domestic warehouse') }}</h2>
                <p class="text-justify mt-8 text-xl">{{ __('Modern systems help businesses save time warehousing and preserving goods and promote rapid business growth.') }}</p>
                <p class="mt-4 text-xl">
                    - <b>{{ __('Warehouse area') }}</b>: 5000m2<br>
                    - <b>{{ __('Processing abilit') }}</b>y: 30 {{ __('containers/week') }},
                    20 {{ __('bills of Lading/day') }}.<br>
                    - <b>{{ __('Prime location') }}</b>.
                </p>
            </div>
        </div>

        <div class="flex max-lg:flex-col items-center w-full lg:w-3/4 mx-auto text-primary py-16">
            <div class="w-full lg:w-1/2 lg:pr-16">
                <h2 class="text-3xl font-bold">{{ __('Overseas warehous') }}e</h2>
                <p class="mt-8 text-xl">
                    <b>{{ __('Warehouse area') }}</b>: 30,000 {{ __('square feet') }}.<br>
                    <b>{{ __('Loading docks') }}</b>: 5<br>
                    <b>{{ __('Processing ability') }}</b>: 40 {{ __('containers/week') }},
                    40 {{ __('bills of lading/day') }}.
                </p>
            </div>
            <div class="w-full lg:w-1/2 lg:pl-16 grid gap-4 grid-cols-2 grid-rows-2 aspect-video mt-8">
                <div class="bg-primary col-span-1"></div>
                <div class="bg-primary col-span-1 row-span-2"></div>
                <div class="bg-primary col-span-1"></div>
            </div>
        </div>

        <div class="w-full lg:w-3/4 mx-auto py-16 text-primary">
            <h2 class="text-3xl ">{{ __('Value-Added Services') }}</h2>

            <div class="w-full lg:w-3/4 mx-auto grid gap-x-24 gap-y-8 lg:grid-cols-2 mt-16">
                <div class="col-span-1">
                    <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 lg:px-16 lg:line-clamp-2 lg:h-[80px] flex justify-center items-center">
                        {{ __('Registering a company in America') }}</h3>
                    <p class="text-xl bg-secondary p-4 lg:line-clamp-6 lg:h-[200px]">{{ __('Having an international brand enhances corporate image, facilitates international trade, and improves business performance') }}
                        .</p>
                </div>

                <div class="col-span-1">
                    <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 lg:px-16 lg:line-clamp-2 lg:h-[80px] flex justify-center items-center">
                        {{ __('Express customs clearance assistance') }}</h3>
                    <p class="text-xl bg-secondary p-4 lg:line-clamp-6 lg:h-[200px]">{{ __('Years of mature operational experience, comprehensive customs clearance services both domestically and internationally, stable timeliness, always leading ahead of peers') }}
                        .</p>
                </div>

                <div class="col-span-1">
                    <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 lg:px-16 lg:line-clamp-2 lg:h-[80px] flex justify-center items-center">
                        {{ __('Pay annual pounds on behalf of the importer') }}</h3>
                    <p class="text-xl bg-secondary p-4 lg:line-clamp-6 lg:h-[200px]">{{ __('By utilizing a scientific logistics system and integrating resources, we provide customers with a secure payment collection service and ensure the safe recovery of their funds, based on comprehensive qualifications and our own good business integrity') }}
                        .</p>
                </div>

                <div class="col-span-1">
                    <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 lg:px-16 lg:line-clamp-2 lg:h-[80px] flex justify-center items-center">
                        {{ __('Overseas warehouse') }}</h3>
                    <p class="text-xl bg-secondary p-4 lg:line-clamp-6 lg:h-[200px]">{{ __('Faster delivery speed, lower logistics costs, increased pricing levels for selling goods, and enhanced local competitiveness') }}.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

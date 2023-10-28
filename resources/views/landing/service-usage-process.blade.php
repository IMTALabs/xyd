@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-12.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full lg:w-3/4 mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
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
                <a href="#">{{ __('Service Usage Process') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full lg:w-3/4 text-primary font-medium pb-8">{{ __('Service Usage Process') }}</h1>

        <div class="flex max-lg:flex-col flex-wrap gap-y-8 w-full lg:w-3/5 mx-auto pb-16">
            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        1
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Customer Account Opening') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        2
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Consulting And Pricing') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        3
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Forecasted Inventory') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        4
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Cargo Operations') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        5
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Delivery From Storage') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        6
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Export Declaration') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        7
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Destination Clearance') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        8
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Destination Transhipment') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center lg:w-1/2">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 text-3xl font-bold rounded-full bg-primary flex items-center justify-center text-secondary">
                        9
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Customer Signature') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection

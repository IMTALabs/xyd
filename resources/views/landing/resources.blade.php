@extends('layouts.app')

@section('content')
    <img data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-18.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="container mx-auto flex w-full items-center">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Insight & News') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Resources') }}</a>
            </ul>
        </div>

        <h1 class="container mx-auto w-full text-3xl font-medium text-primary">{{ __('Incoterms') }}</h1>

        <div class="container mx-auto mt-12 w-full pb-4 text-primary">
            <h2 class="text-3xl font-semibold">
                {{ __('ICC Incoterms® rules for international trade') }}
            </h2>
            <p class="container mx-auto mt-8 w-full text-justify text-xl">
                {{ __('Incoterms® rules, set by the International Chamber of Commerce (ICC), define the essential commercial terms for the global contractual sale of goods. Incoterms® 2020 includes 11 rules divided into two groups: “Rules for all modes or modes of transport” and “Rules for sea and inland waterway transport.') }}
            </p>
        </div>

        <div class="container mx-auto mt-4 w-full pb-4 text-primary">
            <h2 class="text-3xl font-semibold">{{ __('Rules for any mode or mode of transport') }}:</h2>
            <p class="container mx-auto mt-8 w-full text-justify text-xl">
                {{ __('EXW - Ex Works') }}<br>
                {{ __('FCA - Free Carrier') }}<br>
                {{ __('CPT - Carriage Paid to') }}<br>
                {{ __('CIP - Carriage and Insurance Paid to') }}<br>
                {{ __('DAP - Delivered at Place') }}<br>
                {{ __('DPU - Delivered at Place Unloaded (NEW)') }}<br>
                {{ __('DDP - Delivered Duty Paid') }}
            </p>
        </div>

        <div class="container mx-auto mt-4 w-full pb-16 text-primary">
            <h2 class="text-3xl font-semibold">{{ __('Regulations on sea and inland waterway transport') }}:</h2>
            <p class="container mx-auto mt-8 w-full text-justify text-xl">
                {{ __('FAS - Free Alongside Ship') }}<br>
                {{ __('FOB - Free On Board') }}<br>
                {{ __('CFR - Cost and Freight') }}<br>
                {{ __('CIF - Cost, Insurance and Freight') }}
            </p>
        </div>
    </div>
@endsection

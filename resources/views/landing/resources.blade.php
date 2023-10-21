@extends('layouts.app')

@section('content')
    <img src="https://placehold.co/1600x320" class="w-full" alt="">

    <div class="py-16 text-primary">
        <ul class="w-3/4 mx-auto flex items-center">
            <a href="{{ route('home') }}">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">Insight & News</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">Resources</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Incoterms</h1>

    <div class="w-3/4 mx-auto text-primary mt-12 pb-16">
        <h2 class="text-3xl font-semibold">ICC's Incoterms® rules for international trade</h2>
        <p class="w-3/4 mx-auto text-justify mt-8 text-xl">The Incoterms® rules, set by the International Chamber of Commerce
            (ICC), define the essential terms of trade for the sale of goods under worldwide contracts. Incoterms® 2020
            consists of 11 rules divided into two groups: 'Rules for any mode or modes of transport' and 'Rules for sea
            and inland waterway transport.</p>
    </div>

    <div class="w-3/4 mx-auto text-primary mt-12 pb-16">
        <h2 class="text-3xl font-semibold">Rules for any mode or modes of transport:</h2>
        <p class="w-3/4 mx-auto text-justify mt-8 text-xl">
            EXW - Ex Works<br>
            FCA - Free Carrier<br>
            CPT - Carriage Paid to<br>
            CIP - Carriage and Insurance Paid to<br>
            DAP - Delivered at Place<br>
            DPU - Delivered at Place Unloaded (NEW)<br>
            DDP - Delivered Duty Paid
        </p>
    </div>

    <div class="w-3/4 mx-auto text-primary mt-12 pb-16">
        <h2 class="text-3xl font-semibold">Rules for sea and inland waterway transport:</h2>
        <p class="w-3/4 mx-auto text-justify mt-8 text-xl">
            FAS - Free Alongside Ship<br>
            FOB - Free On Board<br>
            CFR - Cost and Freight<br>
            CIF - Cost, Insurance and Freight
        </p>
    </div>
@endsection

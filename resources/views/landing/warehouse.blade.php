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
            <a href="#">Main Channels</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">Warehouse</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Warehouse</h1>

    <div class="flex items-center w-3/4 mx-auto text-primary py-16">
        <div class="w-1/2 pr-16 bg-primary relative aspect-video">
            <div class="bg-primary border-[1rem] border-white w-2/5 aspect-video absolute -right-8 -bottom-8"></div>
        </div>
        <div class="w-1/2 pl-16">
            <h2 class="text-3xl font-bold">Domestic warehouse</h2>
            <p class="text-justify mt-8 text-xl">Modern systems help businesses save time warehousing
                and preserving goods and promote rapid business growth.</p>
            <p class="mt-4 text-xl">
                - Warehouse area: 5000m2<br>
                - Processing ability: 30 containers/week, 20 bills of Lading/day.<br>
                - Prime location.
            </p>
        </div>
    </div>

    <div class="flex items-center w-3/4 mx-auto text-primary py-16">
        <div class="w-1/2 pr-16">
            <h2 class="text-3xl font-bold">Overseas warehouse</h2>
            <p class="mt-8 text-xl">
                Warehouse area: 30,000 square feet.<br>
                Loading docks: 5<br>
                Processing ability: 40 containers/week,
                40 bills of lading/day.
            </p>
        </div>
        <div class="w-1/2 pl-16 grid gap-4 grid-cols-2 grid-rows-2 aspect-video">
            <div class="bg-primary col-span-1"></div>
            <div class="bg-primary col-span-1 row-span-2"></div>
            <div class="bg-primary col-span-1"></div>
        </div>
    </div>

    <div class="w-3/4 mx-auto py-16 text-primary">
        <h2 class="text-3xl ">Value-Added Services</h2>

        <div class="w-3/4 mx-auto grid gap-x-24 gap-y-8 grid-cols-2 mt-16">
            <div class="col-span-1">
                <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 px-16 line-clamp-2 h-[80px] flex justify-center items-center">
                    Registering a company in
                    America</h3>
                <p class="text-xl bg-secondary p-4 line-clamp-6 h-[200px]">Having an international brand enhances
                    corporate
                    image, facilitates international trade, and improves
                    business performance.</p>
            </div>

            <div class="col-span-1">
                <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 px-16 line-clamp-2 h-[80px] flex justify-center items-center">
                    Express customs
                    clearance assistance</h3>
                <p class="text-xl bg-secondary p-4 line-clamp-6 h-[200px]">Years of mature operational experience,
                    comprehensive customs clearance services both
                    domestically and internationally, stable timeliness,
                    always leading ahead of peers.</p>
            </div>

            <div class="col-span-1">
                <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 px-16 line-clamp-2 h-[80px] flex justify-center items-center">
                    Pay annual pounds on
                    behalf of the importer</h3>
                <p class="text-xl bg-secondary p-4 line-clamp-6 h-[200px]">By utilizing a scientific logistics
                    system and
                    integrating resources, we provide customers with a
                    secure payment collection service and ensure the
                    safe recovery of their funds, based on comprehensive
                    qualifications and our own good business integrity.</p>
            </div>

            <div class="col-span-1">
                <h3 class="text-2xl font-semibold bg-primary text-secondary text-center py-2 px-16 line-clamp-2 h-[80px] flex justify-center items-center">
                    Overseas warehouse</h3>
                <p class="text-xl bg-secondary p-4 line-clamp-6 h-[200px]">Faster delivery speed, lower logistics
                    costs,
                    increased pricing levels for selling goods,
                    and enhanced local competitiveness.</p>
            </div>
        </div>
    </div>
@endsection

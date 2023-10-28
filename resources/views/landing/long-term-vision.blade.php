@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-05.png') }}" class="w-full" alt="">

    <div class="py-16 text-primary max-lg:px-4">
        <ul class="mx-auto flex w-full lg:w-3/4 items-center whitespace-nowrap overflow-auto">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="shrink-0">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Current Business Status & Long-term Vision') }}</a>
        </ul>
    </div>

    <div class="mx-auto w-full lg:w-3/4 pb-16 text-primary max-lg:px-4">
        <h2 class="text-3xl">{{ __('Current Business Status') }}</h2>

        <div class="mx-auto mt-16 flex max-lg:flex-col">
            <div class="w-full lg:w-1/2 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut deleniti dolore impedit
                incidunt ipsam laborum minima molestias obcaecati odio odit placeat, quis velit vero? Delectus ex modi
                possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolor ex expedita facilis
                illum in maxime nam nulla optio perferendis possimus praesentium, provident quisquam repellat sequi.
                Consectetur numquam quis quod.
            </div>

            <div class="w-full lg:w-1/2 lg:pl-16 flex flex-col gap-4 max-lg:mt-4">
                <div>
                    <div
                        class="whitespace-nowrap rounded-r-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                        600 million +
                    </div>
                    <div class="flex">
                        <div class="inline-block w-4 overflow-hidden">
                            <div class="h-16 origin-top-left -rotate-45 transform bg-orange-950"></div>
                        </div>
                        <div class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl">
                            Company annual revenue
                        </div>
                    </div>
                </div>

                <div>
                    <div
                        class="whitespace-nowrap rounded-r-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                        600 million +
                    </div>
                    <div class="flex">
                        <div class="inline-block w-4 overflow-hidden">
                            <div class="h-16 origin-top-left -rotate-45 transform bg-orange-950"></div>
                        </div>
                        <div class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl">
                            Company annual revenue
                        </div>
                    </div>
                </div>

                <div>
                    <div
                        class="whitespace-nowrap rounded-r-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                        600 million +
                    </div>
                    <div class="flex">
                        <div class="inline-block w-4 overflow-hidden">
                            <div class="h-16 origin-top-left -rotate-45 transform bg-orange-950"></div>
                        </div>
                        <div class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl">
                            Company annual revenue
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-16 bg-secondary px-4">
        <div class="mx-auto w-full lg:w-3/4 pb-16 text-primary">
            <h2 class="text-3xl">{{ __('Long-term Vision') }}</h2>

            <div class="mx-auto mt-16 w-full lg:w-3/5">
                <h3 class="text-center text-3xl">Lorem ipsum</h3>
                <h4 class="mt-4 text-center text-xl">Lorem ipsum Lorem ipsum</h4>
                <p class="mt-8 text-justify text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et,
                    excepturi harum inventore iusto nam
                    nostrum quae quisquam reiciendis sapiente, sed sit soluta veniam voluptate. Beatae commodi eius
                    explicabo magnam nam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda
                    esse facere ipsum laborum, nesciunt non placeat tempora. Nostrum perferendis ratione tenetur. Culpa
                    ex hic iusto minus quo rem veniam?</p>
                <p class="mt-4 text-justify text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et,
                    excepturi harum inventore iusto nam
                    nostrum quae quisquam reiciendis sapiente, sed sit soluta veniam voluptate. Beatae commodi eius
                    explicabo magnam nam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda
                    esse facere ipsum laborum, nesciunt non placeat tempora. Nostrum perferendis ratione tenetur. Culpa
                    ex hic iusto minus quo rem veniam?</p>
            </div>
        </div>
    </div>
@endsection

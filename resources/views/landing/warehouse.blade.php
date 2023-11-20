@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-16.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
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
                <a href="#">{{ __('Warehouse & Value Added Service') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Warehouse & Value Added Service') }}</h1>

        <div class="flex max-lg:flex-col items-center w-full container mx-auto text-primary py-16">
            <div class="w-full lg:w-1/2 container lg:pr-16 relative aspect-video bg-contain"
                 style="background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaA2zUyglJ6nu1awJr0dxSgHgNKId-LpnBiv6ZwGzLBrlsnhcvuEgQAJHBH09ZKvzClSNA9mxYZbCt4qCBbVn97vzsPF-Q=w1830-h975')">
                <div style="background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaCcxO33kkVt_6OC_taSC_FbFX6b4EQmNdXS-RND9WygXp2YhvXyVGhFox1eVqRvL-rsV4H5HEl0Bo9PpdotWUD6mus9=w1830-h975')"
                     class="border-[1rem] border-white w-2/5 aspect-video absolute -right-8 -bottom-8 max-lg:hidden bg-contain"></div>
            </div>
            <div class="w-full lg:w-1/2 container lg:pl-16 max-lg:mt-8">
                <h2 class="text-3xl font-bold">{{ __('Domestic warehouse') }}</h2>
                <p class="text-justify mt-8 text-xl">{{ __('Modern systems help businesses save time warehousing and preserving goods and promote rapid business growth.') }}</p>
                <p class="mt-4 text-xl">
                    - <b>{{ __('Warehouse area') }}</b>: 5000m2<br>
                    - <b>{{ __('Processing ability') }}</b>: 30 {{ __('containers/week') }},
                    20 {{ __('bills of lading/day') }}.<br>
                    - <b>{{ __('Prime location') }}</b>.
                </p>
            </div>
        </div>

        <div class="flex max-lg:flex-col items-center w-full container mx-auto text-primary py-16">
            <div class="w-full lg:w-1/2 container lg:pr-16">
                <h2 class="text-3xl font-bold">{{ __('Overseas warehous') }}e</h2>
                <p class="mt-8 text-xl">
                    <b>{{ __('Warehouse area') }}</b>: 30,000 {{ __('square feet') }}.<br>
                    <b>{{ __('Loading docks') }}</b>: 5<br>
                    <b>{{ __('Processing ability') }}</b>: 40 {{ __('containers/week') }},
                    40 {{ __('bills of lading/day') }}.
                </p>
            </div>
            <div class="w-full lg:w-1/2 container lg:pl-16 grid gap-4 grid-cols-2 grid-rows-2 aspect-video mt-8">
                <div style="background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaDzhAzCJmynsS1tCnTPuEIjEXFcesxEHxhsm1BX_NiuEbVdU0xg40BXClnWwrkzo_ZU_VJ16FMK4nQyEI-TtW0cistClQ=w1830-h975')"
                     class="col-span-1 bg-cover"></div>
                <div style="background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAhtldpaOA_Qs7gTK4tmWJ04xbjpWTgUwhHwzd9mWc9rb4F5rwYesV32d0k_WvcMVw5P-Ibs_Ddc6KdmoESIRDgDrPggQ=w1830-h975')"
                     class="col-span-1 bg-cover row-span-2"></div>
                <div style="background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaB6xLfXWRaxizg-fQLKPFZlpL1k0FEIo7vfvYszgqQct7ZXPP13SGP76Rbk28VbxJ-qbUJRSXhD1yOK2ixNc3JmutYeNg=w1830-h975')"
                     class="col-span-1 bg-cover"></div>
            </div>
        </div>

        <div class="w-full container mx-auto py-16 text-primary">
            <h2 class="text-3xl ">{{ __('Value-Added Services') }}</h2>

            <div class="w-full container mx-auto mt-16 grid lg:grid-cols-2 gap-16">
                <div class="flex flex-col items-end rounded border-2 border-primary">
                    <div
                        class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                        <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                             style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                        <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                        {{ __('Registering a company in America') }}
                    </div>
                    <p class="p-4 text-center">
                        {{ __('Having an international brand enhances corporate image, facilitates international trade, and improves business performance.') }}
                    </p>
                </div>
                <div class="flex flex-col items-end rounded border-2 border-primary">
                    <div
                        class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                        <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                             style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                        <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                        {{ __('Express customs clearance assistance') }}
                    </div>
                    <p class="p-4 text-center">
                        {{ __('Years of mature operational experience, comprehensive customs clearance services both domestically and internationally, stable timeliness, always leading ahead of peers.') }}
                    </p>
                </div>
                <div class="flex flex-col items-end rounded border-2 border-primary">
                    <div
                        class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                        <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                             style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                        <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                        {{ __('Optimize all utilities') }}
                    </div>
                    <p class="p-4 text-center">
                        {{ __('Having multiple airline agency rights, a professional team operation, and a comprehensive air freight network service. Making full use of flight resources, fleet resources, port resources, and customs clearance resources, with an efficient intermodal network.') }}
                    </p>
                </div>
                <div class="flex flex-col items-end rounded border-2 border-primary">
                    <div
                        class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                        <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                             style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                        <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                        {{ __('Overseas warehouse') }}
                    </div>
                    <p class="p-4 text-center">
                        {{ __('International air transport (flying from Hong Kong, with over a decade of experience in handling Class 9 dangerous goods).') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

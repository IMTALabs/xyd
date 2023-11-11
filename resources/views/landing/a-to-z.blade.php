@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-10.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Our service') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('A to Z Transportation Service') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('A to Z Transportation Service') }}</h1>

        <div class="mx-auto w-full container text-justify text-primary py-16">
            {{ __('The first step that businesses must prepare in import and export procedures is customs documents. Customs procedures are surely no longer mysterious to businesses involved in import and export. While completing customs clearance procedures, it is inevitable for those who are inexperienced in the field to run into unforeseen difficulties. ') }}
            <br><br>
           {{ __("With more than 14 years of experience, we understand the difficulties of businesses during the customs clearance process. To minimize risks and unexpected losses, XYD Express's comprehensive customs service is the most ideal solution. XYD Express pledges to be a trustworthy, enduring partner of several domestic and international companies by: ") }}
            <br><br>
            - {{ __("Support complete customs clearance procedures for shipments.") }}<br>
            - {{ __("Vast experience, and meticulous problem-solving.") }}<br>
            - {{ __("Reasonable cost; currently the lowest on the market.") }}<br>
            - {{ __("Professional conduct; complete legality.") }}<br>
            - {{ __("Track the status of the shipment's customs clearance.") }}<br>
            - {{ __("Prepared to address any issues that emerge for companies during the customs clearance procedure.") }}<br>
        </div>

        <div class="mx-auto w-full container text-primary pb-16">
            <div class="flex items-center gap-4 max-w-md">
                <div class="h-0.5 grow bg-primary"></div>
                <div class="text-3xl font-bold">{{ __('Air Freight') }}</div>
                <div class="h-0.5 grow bg-primary"></div>
            </div>
            <p class="my-4">{{ __('Customized Professional Air Logistics Solutions') }}</p>
            <div class="flex max-lg:flex-col items-center mt-16">
                <div class="w-full container lg:pr-8 text-justify">
                    {{ __('Long-term fixed cooperation contracts with airlines such as KE/OZ/PO/CZ, with guaranteed availability of fixed seats and sufficient timeliness. ') }}
                    <br>
                    {{ __('Having multiple airline agency rights, a professional team operation, and a comprehensive air freight network service. Making full use of flight resources, fleet resources, port resources, and customs clearance resources, with an efficient intermodal network.') }}
                </div>
                <div class="w-full container lg:pl-8 grid lg:grid-cols-2 gap-x-16 gap-y-8 max-lg:mt-4">
                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-02.png') }}" alt="">
                        {{ __('Delivering Promise') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-02.png') }}" alt="">
                        {{ __('Stable and Punctual') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-02.png') }}" alt="">
                        {{ __('Priority Delivery') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-02.png') }}" alt="">
                        {{ __('Secure and Exclusive') }}
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 max-w-md mt-16">
                <div class="h-0.5 grow bg-primary"></div>
                <div class="text-3xl font-bold">{{ __('Sea Freight') }}</div>
                <div class="h-0.5 grow bg-primary"></div>
            </div>
            <p class="my-4">{{ __('Consistent Quality Assurance') }}</p>
            <div class="flex max-lg:flex-col items-center mt-16">
                <div class="w-full container lg:pr-8 text-justify">
                    {{ __('We have established long-term cooperative relations with Cosco, Emc, and Matson. With years of operating experience, we gradually owned our own dangerous goods export system, at the same time we have perfect and stable customs clearance services in foreign countries, our freight advantages are obvious, and we are ahead of peers all the time.') }}
                </div>
                <div class="w-full container lg:pl-8 grid lg:grid-cols-2 gap-x-16 gap-y-8 max-lg:mt-4">
                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                        {{ __('Stable Shipping Space') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                        {{ __('Stable Price') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                        {{ __('Stable Service') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                        {{ __('Stable DG Channel') }}
                    </div>

                    <div class="flex items-center text-xl gap-4 col-span-1 lg:col-span-2">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-03.png') }}" alt="">
                        {{ __('Formally declared of category 9 dangerous for export') }}
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 max-w-md mt-16">
                <div class="h-0.5 grow bg-primary"></div>
                <div class="text-3xl font-bold">{{ __('Train Freight') }}</div>
                <div class="h-0.5 grow bg-primary"></div>
            </div>
            <p class="my-4">{{ __('Consistent Quality Assurance') }}</p>
            <div class="flex max-lg:flex-col items-center mt-16">
                <div class="w-full container lg:pr-8 text-justify">
                    {{ __("As a first-level agent logistics company for China-Europe railway freight, the company maintains a good strategic partnership with Guangzhou Railway Group and China Railway Group. With the increasing number of train services, the company's comprehensive service system helps more customers deliver goods to various parts of Europe in a timely manner, fully reflecting the efficient and scalable advantages of logistics services.") }}
                </div>
                <div class="w-full container lg:pl-8 grid lg:grid-cols-2 gap-x-16 gap-y-8 max-lg:mt-4">
                    <div class="flex lg:flex-col items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-22.png') }}" alt="">
                        {{ __('Chongqing-Xinjiang Europe Freight Train') }}
                    </div>

                    <div class="flex lg:flex-col items-center text-xl gap-4 col-span-1">
                        <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-22.png') }}" alt="">
                        {{ __('Yiwu-Xinjiang Europe Freight Train') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

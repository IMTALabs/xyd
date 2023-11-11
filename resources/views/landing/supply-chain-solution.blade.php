@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-09.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
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
                <a href="#">{{ __('Supply chain solution') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Supply chain solution') }}</h1>

        <div class="mx-auto w-full container text-justify text-primary py-16">
            {{ __('Transportation is an essential need of economic development aimed at changing the location of goods and people from one place to another by means of transportation. Additionally, the development of cargo services is crucial for facilitating the movement of commodities. In a similar manner, the stages of distribution and circulation of goods both heavily rely on logistics.') }}<br><br>
            {{ __('Recognizing its significance, XYD Express was founded as a company offering transportation services and resolving cost optimization issues for international enterprises in recognition of the significance of this matter.') }}
        </div>

        <div class="w-full container mx-auto pb-16 text-primary grid lg:grid-cols-2 gap-16">
            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Air Freight') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaD07LRfN0GeGjrNrvY0OuYnOm3ikvoAs7F-W_OZeW5htEdHuAnhO2C7uLXjSz9COATVaZfXnsm8OmhvP61houC9N4i4=w1830-h975" class="mt-4 object-cover w-full aspect-video" alt="">
                <a href="{{ route('air-freight') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>

            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Sea Freight') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaDVll_CwOgoY-O5eLQpXMcusamfIKALdfHH1oUbRM9PxV6rpYNbq8CuE4jFpRC4ypuwygm5kfAsdKqVE_zEm-RNkUkNHw=w1830-h975" class="mt-4 object-cover w-full aspect-video" alt="">
                <a href="{{ route('sea-freight') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>

            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Land Freight') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAGtdc7MGj00ksIwjkNK3ie4f4jfpxflPnEaO8cQC2LnUJZsSt7-l_5Tgzi_TwV0n4hV8Me229bk7rE6AwTt9DDTNC3=w1830-h975" class="mt-4 object-cover w-full aspect-video" alt="">
                <a href="{{ route('land-freight') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>

            <div class="relative col-span-1">
                <div class="flex items-center gap-4">
                    <div class="h-0.5 grow bg-primary"></div>
                    <div class="text-3xl font-bold">{{ __('Warehouse') }}</div>
                    <div class="h-0.5 grow bg-primary"></div>
                </div>
                <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaC0ebRw1aI2w5N8GqwTMm3NmTLv-UOOXsdZMqWryCkrFMKpVkj1oR-VssEzj-zUCJVAq5hVewZHf3R1VDmRq0ZkuV-p=w1830-h975" class="mt-4 object-cover w-full aspect-video" alt="">
                <a href="{{ route('warehouse') }}" class="text-secondary bg-primary block px-4 py-1 absolute bottom-4 right-0">{{ __('Read more') }}</a>
            </div>
        </div>

        <div class="w-full container mx-auto pb-16 text-primary">
            <h1 class="text-3xl text-primary font-medium">{{ __('We are exceptionally experienced') }}</h1>
            <div class="grid lg:grid-cols-2 gap-16 mt-16">
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">
                        {{ __('South Korea and Hong Kong Freight Forwarding') }}
                    </h3>
                    <p class="text-center">
                        {{ __('We signed cooperation agreements with major international airlines, honored as the international airfreight forwarding for Hong Kong EK, EY, TK, ET, South Korea KE, OZ, CI, CX, and other renowned airlines.') }}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">
                        {{ __('Europe and American International Air Freight Services ') }}s</h3>
                    <p class="text-center">
                        {{ __('Providing air freight for import and export cargoes. Provided destination customs clearance, door-to-door delivery, rail, land, air freight, and delivery. Provide personal item freight and customs clearance.') }}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">
                        {{ __('International Sea Freight Services for Europe, America, England and Mexico') }}
                    </h3>
                    <p class="text-center">
                        {{ __('Providing services for container shipping import and export, general cargo transportation, and refrigerated container transportation. LCL (Less than Container Load), shipping, sea-air combined transportation, multi-modal transportation, destination port customs clearance, door-to-door delivery, and import customs clearance.') }}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">
                        {{ __('Special channel of Air Freight') }}
                    </h3>
                    <p class="text-center">
                        {{ __('We specializing air freight of dangerous cargoes, battery category cargos, and soon with integrated services of customs clearance and delivery.') }}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">
                        {{ __('Yantian / Hong Kong DG') }}
                    </h3>
                    <p class="text-center">
                        {{ __('Regular declaration of export for Class9 dangerous goods, self-operated overseas DG warehouse, with years of mature operation experience, stable customs clearance rate domestically and internationally, consistently leading in terms of safety and efficiency compared to competitors in the industry.') }}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-4 col-span-1">
                    <img class="w-20 h-20"  data-src="{{ asset('images/icons/Icon/Web icon-21.png') }}" alt="">
                    <h3 class="text-3xl font-semibold text-center line-clamp-2 h-[4.5rem]">
                        {{ __('American Overseas Warehouse') }}
                    </h3>
                    <p class="text-center">
                        {{ __('Providing one-stop services including one package freight, relabeling, returns and repairs, overseas warehousing, and end-to-end tracking for small packages. ') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

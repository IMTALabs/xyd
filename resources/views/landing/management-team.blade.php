@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-04.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4 py-16 text-primary">
        <ul class="container mx-auto flex items-center">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Management Team') }}</a>
        </ul>
    </div>

    <div class="container mx-auto max-lg:px-4 pb-16 text-primary">
        <h1 class="text-3xl">
            {{ __('Contribute to help embrace the future') }}
        </h1>

        <h2 class="mt-8 text-2xl">{{ __("President's Message") }}</h2>
        <div class="mt-4 flex max-lg:flex-col-reverse">
            <div class="max-lg:mt-4 w-2/3 max-lg:w-full text-justify text-xl lg:pr-8">
                {{ __('Shenzhen Xiangyuda International Freight Forwarding Co.,Ltd is a supply chain logistics company with over 15 years of experience in the field.') }}<br><br>
                {{ __('At Xiangyuda, we invest in people, with the objective of developing a skilled emergency team to improve the competence and efficiency of dealing with challenging situations. Constantly acquire new things, explore unexplored territory, actively pursue foreign trade, and endeavor to magnify and enliven the Xiangyuda trademark.') }}<br><br>
                {{ __('We characterized our aims in our Vision, Mission, and Values as developing a well-established distribution operating system and a comprehensive business distribution system. Continuously upgrade your original channel selection in tandem with your own development plan to create a noteworthy logistics service system.') }}<br><br>
                {{ __("As stated in our Mission, 'professionalism, quality, and innovation,' we will collaborate as crucial logistics partners for the growth of your company. Simultaneously, we will advocate tailoring our services to deal with each customer's unique difficulties, resulting in maximum efficiency.") }}
                <div class="mt-4 text-right">{{ __('Huang Qiaozhong, President') }}</div>
            </div>
            <div class="w-1/3 max-lg:w-full">
                <img  data-src="{{ asset('images/Official photograph/老板(boss）黄桥忠.png') }}"
                     class="w-full object-cover object-top aspect-[10/9]" alt="">
            </div>
        </div>

        <h2 class="mt-8 text-2xl">{{ __('Our Management Team') }}</h2>
        <div class="mt-2 text-xs">{{ __("Executive Officer's concurrent duties, responsibilities on GHQ are .*") }}</div>
        <div class="text-xs">{{ __('GHQ (Global Headquarters) organizations are. *') }}</div>

        <div class="mt-8 flex items-baseline gap-4 text-xl">
            {{ __('Audit & Supervisory Board Member') }}
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid gap-8 lg:grid-cols-2">
            <div class="flex gap-4">
                <div class="h-48 w-32 overflow-hidden shrink-0">
                    <img class="h-48 w-32 object-cover scale-[1.3]"
                      data-src="{{ asset('images/Official photograph/副总经理（deputy general manager）刘洪.jpg') }}" alt="">
                </div>
                <div>
                    <h3 class="text-xl">{{ __('Liu Hong') }}</h3>
                    <p>{{ __('Deputy General Manager') }}</p>
                    <p class="mt-2 text-sm line-clamp-4">
                        {{ __('Sharing responsibilities and providing backup in critical business situations (provide decision support, monitor employee performance). Help to effectively manage organisational strategy and operations, allowing the general manager to focus on high-level decision-making and priorities. Take business as the core, lead the business team to create more sales.') }}
                    </p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="h-48 w-32 overflow-hidden shrink-0">
                    <img class="h-48 w-32 object-cover scale-[1.3]"
                      data-src="{{ asset('images/Official photograph/客服主管（customer service supervisor）余雪霞.jpg') }}"
                     alt="">
                </div>
                <div>
                    <h3 class="text-xl">{{ __('Liu Yijiang') }}</h3>
                    <p>{{ __('Financial manager') }}</p>
                    <p class="mt-2 text-sm line-clamp-4">{{ __('Provide financial planning and analysis, formulate risk management and control strategies, manage taxes, and supervise group finances.') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="h-48 w-32 overflow-hidden shrink-0">
                    <img class="h-48 w-32 object-cover scale-[1.3]"
                      data-src="{{ asset('images/Official photograph/机场一组业务经理（Airport Group 1 Marketing Manager）马贤.jpg') }}"
                     alt="">
                </div>
                <div>
                    <h3 class="text-xl">{{ __('Yu Xuexia') }}</h3>
                    <p>{{ __('Customer service supervisor') }}</p>
                    <p class="mt-2 text-sm line-clamp-4">
                        {{ __('Ensure the team has the necessary skills and knowledge to provide excellent customer service, assist in resolving complex customer complaints and issues, and ensure customer satisfaction is maintained.') }}
                    </p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="h-48 w-32 overflow-hidden shrink-0">
                    <img class="h-48 w-32 object-cover scale-[1.3]"
                      data-src="{{ asset('images/Official photograph/机场二组业务经理（Airport Group 2 Marketing Manager）李爱军.jpg') }}"
                     alt="">
                </div>
                <div>
                    <h3 class="text-xl">{{ __('Xuan Sen') }}</h3>
                    <p>{{ __('Budgeting supervisor') }}</p>
                    <p class="mt-2 text-sm line-clamp-4">{{ __('Develop and manage operating budgets to ensure appropriate allocation of resources, analyze operational data to evaluate performance, identify trends and make decisions, and ensure collaboration and communication among various teams.') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="h-48 w-32 overflow-hidden shrink-0">
                    <img class="h-48 w-32 object-cover scale-[1.3]"
                      data-src="{{ asset('images/Official photograph/财务经理（financial manager）刘一江.jpg') }}" alt="">
                </div>
                <div>
                    <h3 class="text-xl">{{ __('Ma Xian') }}</h3>
                    <p>{{ __('Airport Group 1 Manager') }}</p>
                    <p class="mt-2 text-sm line-clamp-4">{{ __('Develop sales strategies, research markets, expand customer base, recruit, train and lead sales team members, collect and analyze customer feedback to improve products or services.') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div class="h-48 w-32 overflow-hidden shrink-0">
                    <img class="h-48 w-32 object-cover scale-[1.3]"
                      data-src="{{ asset('images/Official photograph/运营主管（operation supervisor）宣森.jpg') }}" alt="">
                </div>
                <div>
                    <h3 class="text-xl">{{ __('Li Aijun') }}</h3>
                    <p>{{ __('Airport Group 2 Manager') }}</p>
                    <p class="mt-2 text-sm line-clamp-4">{{ __('Develop sales strategies, develop markets, expand customer base, recruit, train and lead sales team members, collect and analyze customer feedback to improve products or services.') }}</p>
                </div>
            </div>
        </div>

        <div class="mt-16 flex items-baseline gap-4 text-xl">
            {{ __('Audit & Supervisory Board Member') }}
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Li Shuai') }}</h3>
                    <p>{{ __('Chair man') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Fuyong,Shenzhen (Headquarters)') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Huang Qiaozhong') }}</h3>
                    <p>{{ __('President') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Fuyong,Shenzhen (Headquarters)') }}</p>
                </div>
            </div>
        </div>

        <div class="mt-16 flex items-baseline gap-4 text-xl">
            {{ __('Executive Officer') }}
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Zhang Bo') }}</h3>
                    <p>{{ __('Operation manager') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Fuyong,Shenzhen (Headquarters)') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Li Aijun') }}</h3>
                    <p>{{ __('Marketing Manager') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Fuyong,Shenzhen (Headquarters)') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Dong Mingyan') }}</h3>
                    <p>{{ __('Marketing Manager') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Bantian,Shenzhen') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Li Dazheng') }}</h3>
                    <p>{{ __('Marketing Manager') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Guangzhou') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Zhang Junjun') }}</h3>
                    <p>{{ __('Marketing Manager') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Yiwu') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Do Tien Huy') }}</h3>
                    <p>{{ __('General Manager Assistant') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Tay Ho, Ha Noi, Viet Nam') }}</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">{{ __('Dinh Thi Thu Hien') }}</h3>
                    <p>{{ __('Marketing Manager') }}</p>
                    <p class="mt-2 text-xs line-clamp-4">{{ __('Tay Ho, Ha Noi, Viet Nam') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

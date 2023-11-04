@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-0.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4 py-16 text-primary">
        <ul class="mx-auto flex container items-center">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Management Team') }}</a>
        </ul>
    </div>

    <div class="mx-auto container max-lg:px-4 pb-16 text-primary">
        <h1 class="text-3xl">Heading of this message</h1>

        <h2 class="mt-8 text-2xl">{{ __('President\'s Message') }}</h2>
        <div class="mt-4 flex max-lg:flex-col-reverse">
            <div class="max-lg:mt-4 w-2/3 max-lg:w-full text-justify lg:pr-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, animi architecto at blanditiis
                commodi consectetur consequuntur dolore error ipsum laudantium minus mollitia nisi suscipit ullam. Optio
                soluta ut velit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad adipisci cupiditate,
                excepturi exercitationem necessitatibus nobis obcaecati odit pariatur provident quia reiciendis,
                reprehenderit repudiandae. Delectus distinctio dolores eum recusandae sed? Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Beatae consequatur dolor doloremque doloribus, eaque, eos error.
                <div class="mt-4 text-right">Full Name President</div>
            </div>
            <div class="w-1/3 max-lg:w-full">
                <img src="{{ asset('images/Official photograph/老板(boss）黄桥忠.png') }}"
                     class="aspect-[10/9] w-full object-cover object-top" alt="">
            </div>
        </div>

        <h2 class="mt-8 text-2xl">Our Management Team</h2>
        <div class="mt-2 text-xs">Executive Officer's concurrent duties, responsibilities on GHQ are .*</div>
        <div class="text-xs">GHQ (Global Headquarters) organizations are. *</div>

        <div class="mt-8 flex items-baseline gap-4 text-xl">
            Director
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid gap-8 lg:grid-cols-2">
            <div class="flex gap-4">
                <img class="h-32 w-24 object-cover"
                     src="{{ asset('images/Official photograph/副总经理（deputy general manager）刘洪.jpg') }}" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img class="h-32 w-24 object-cover"
                     src="{{ asset('images/Official photograph/客服主管（customer service supervisor）余雪霞.jpg') }}"
                     alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img class="h-32 w-24 object-cover"
                     src="{{ asset('images/Official photograph/机场一组业务经理（Airport Group 1 Marketing Manager）马贤.jpg') }}"
                     alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img class="h-32 w-24 object-cover"
                     src="{{ asset('images/Official photograph/机场二组业务经理（Airport Group 2 Marketing Manager）李爱军.jpg') }}"
                     alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img class="h-32 w-24 object-cover"
                     src="{{ asset('images/Official photograph/财务经理（financial manager）刘一江.jpg') }}" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img class="h-32 w-24 object-cover"
                     src="{{ asset('images/Official photograph/运营主管（operation supervisor）宣森.jpg') }}" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
        </div>

        <div class="mt-16 flex items-baseline gap-4 text-xl">
            Audit & Supervisory Board Member
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <h3 class="text-xl">Full Name</h3>
            <h3 class="text-xl">Full Name</h3>
            <h3 class="text-xl">Full Name</h3>
            <h3 class="text-xl">Full Name</h3>
        </div>

        <div class="mt-16 flex items-baseline gap-4 text-xl">
            Executive Officer
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="mt-2 text-xs">Detailed description</p>
                </div>
            </div>
        </div>
    </div>
@endsection

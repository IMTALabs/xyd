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
            <a href="#">Management Team</a>
        </ul>
    </div>

    <div class="w-1/2 mx-auto text-primary pb-16">
        <h1 class="text-3xl">Heading of this message</h1>

        <h2 class="text-2xl mt-8">President's Message</h2>
        <div class="mt-4 flex">
            <div class="w-2/3 text-justify pr-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, animi architecto at blanditiis
                commodi consectetur consequuntur dolore error ipsum laudantium minus mollitia nisi suscipit ullam. Optio
                soluta ut velit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad adipisci cupiditate,
                excepturi exercitationem necessitatibus nobis obcaecati odit pariatur provident quia reiciendis,
                reprehenderit repudiandae. Delectus distinctio dolores eum recusandae sed? Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Beatae consequatur dolor doloremque doloribus, eaque, eos error.
                <div class="text-right mt-4">Full Name President</div>
            </div>
            <div class="w-1/3">
                <img src="https://placehold.co/363x320" class="w-full max-h-80 object-cover" alt="">
            </div>
        </div>

        <h2 class="text-2xl mt-8">Our Management Team</h2>
        <div class="mt-2">Executive Officer's concurrent duties, responsibilities on GHQ are .*</div>
        <div>GHQ (Global Headquarters) organizations are. *</div>

        <div class="flex items-baseline gap-4 text-xl mt-8">
            Director
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="flex gap-4">
                <img src="https://placehold.co/80x120" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://placehold.co/80x120" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://placehold.co/80x120" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://placehold.co/80x120" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://placehold.co/80x120" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <img src="https://placehold.co/80x120" alt="">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
        </div>

        <div class="flex items-baseline gap-4 text-xl mt-16">
            Audit & Supervisory Board Member
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <h3 class="text-xl">Full Name</h3>
            <h3 class="text-xl">Full Name</h3>
            <h3 class="text-xl">Full Name</h3>
            <h3 class="text-xl">Full Name</h3>
        </div>

        <div class="flex items-baseline gap-4 text-xl mt-16">
            Executive Officer
            <div class="grow h-0.5 bg-primary"></div>
        </div>
        <div class="mt-8 grid grid-cols-2 gap-8">
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
            <div class="flex gap-4">
                <div>
                    <h3 class="text-xl">Full Name</h3>
                    <p>Position in the company</p>
                    <p class="text-xs mt-2">Detailed description</p>
                </div>
            </div>
        </div>
    </div>
@endsection

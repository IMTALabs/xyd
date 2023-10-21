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
            <a href="#">Company News</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Company News</h1>

    <div class="w-3/5 mx-auto pb-16 mt-16 space-y-8">
        <div class="border-b border-primary flex gap-8 pb-8">
            <img src="https://placehold.co/320x320" alt="">
            <div>
                <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">New release</span>
                <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">Head line of the article</h2>
                <span class="mt-4 block text-primary text-xs">2023/10/10</span>
                <p class="text-primary mt-2 text-sm line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. A architecto deserunt fuga minus, molestiae
                    nam nisi quidem saepe! Accusantium aliquid assumenda atque consectetur, nesciunt pariatur quae quam
                    quod saepe veniam.</p>
                <a href="#" class="block mt-8 text-primary text-xl">Read full story ...</a>
            </div>
        </div>

        <div class="border-b border-primary flex gap-8 pb-8">
            <img src="https://placehold.co/320x320" alt="">
            <div>
                <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">New release</span>
                <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">Head line of the article</h2>
                <span class="mt-4 block text-primary text-xs">2023/10/10</span>
                <p class="text-primary mt-2 text-sm line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. A architecto deserunt fuga minus, molestiae
                    nam nisi quidem saepe! Accusantium aliquid assumenda atque consectetur, nesciunt pariatur quae quam
                    quod saepe veniam.</p>
                <a href="#" class="block mt-8 text-primary text-xl">Read full story ...</a>
            </div>
        </div>

        <div class="border-b border-primary flex gap-8 pb-8">
            <img src="https://placehold.co/320x320" alt="">
            <div>
                <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">New release</span>
                <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">Head line of the article</h2>
                <span class="mt-4 block text-primary text-xs">2023/10/10</span>
                <p class="text-primary mt-2 text-sm line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. A architecto deserunt fuga minus, molestiae
                    nam nisi quidem saepe! Accusantium aliquid assumenda atque consectetur, nesciunt pariatur quae quam
                    quod saepe veniam.</p>
                <a href="#" class="block mt-8 text-primary text-xl">Read full story ...</a>
            </div>
        </div>

        <div class="border-b border-primary flex gap-8 pb-8">
            <img src="https://placehold.co/320x320" alt="">
            <div>
                <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">New release</span>
                <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">Head line of the article</h2>
                <span class="mt-4 block text-primary text-xs">2023/10/10</span>
                <p class="text-primary mt-2 text-sm line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. A architecto deserunt fuga minus, molestiae
                    nam nisi quidem saepe! Accusantium aliquid assumenda atque consectetur, nesciunt pariatur quae quam
                    quod saepe veniam.</p>
                <a href="#" class="block mt-8 text-primary text-xl">Read full story ...</a>
            </div>
        </div>

        <div class="border-b border-primary flex gap-8 pb-8">
            <img src="https://placehold.co/320x320" alt="">
            <div>
                <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">New release</span>
                <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">Head line of the article</h2>
                <span class="mt-4 block text-primary text-xs">2023/10/10</span>
                <p class="text-primary mt-2 text-sm line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. A architecto deserunt fuga minus, molestiae
                    nam nisi quidem saepe! Accusantium aliquid assumenda atque consectetur, nesciunt pariatur quae quam
                    quod saepe veniam.</p>
                <a href="#" class="block mt-8 text-primary text-xl">Read full story ...</a>
            </div>
        </div>

        <div class="border-b border-primary flex gap-8 pb-8">
            <img src="https://placehold.co/320x320" alt="">
            <div>
                <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">New release</span>
                <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">Head line of the article</h2>
                <span class="mt-4 block text-primary text-xs">2023/10/10</span>
                <p class="text-primary mt-2 text-sm line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. A architecto deserunt fuga minus, molestiae
                    nam nisi quidem saepe! Accusantium aliquid assumenda atque consectetur, nesciunt pariatur quae quam
                    quod saepe veniam.</p>
                <a href="#" class="block mt-8 text-primary text-xl">Read full story ...</a>
            </div>
        </div>

        <div class="flex items-center justify-center gap-4">
            <a href="#" class="text-primary text-xl">1</a>
            <a href="#" class="text-primary text-xl">2</a>
            <a href="#" class="text-primary text-xl">3</a>
            <a href="#" class="text-primary text-xl">4</a>
            <a href="#" class="text-primary text-xl">...</a>
            <a href="#" class="text-primary text-xl">10</a>
        </div>
    </div>

@endsection

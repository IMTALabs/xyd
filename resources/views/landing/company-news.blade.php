@extends('layouts.app')

@section('content')
    <img data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-17.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Insight & News') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Company News') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Company News') }}</h1>

        <div class="w-full container mx-auto pb-16 mt-16 space-y-8">
            {{--            @foreach($posts as $post)--}}
            {{--                <div class="border-b border-primary flex max-lg:flex-col gap-8 pb-8">--}}
            {{--                    <img  data-src="{{ Storage::url($post->image) }}" class="w-full lg:w-1/2 object-cover" alt="">--}}
            {{--                    <div>--}}
            {{--                        <span--}}
            {{--                            class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">{{ __('New Release') }}</span>--}}
            {{--                        <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">{{ $post->title }}</h2>--}}
            {{--                        <span--}}
            {{--                            class="mt-4 block text-primary text-xs">{{ $post->created_at->format('d/m/Y') }}</span>--}}
            {{--                        <p class="text-primary mt-2 text-sm line-clamp-4">{{ $post->description }}</p>--}}
            {{--                        <a href="#" class="block mt-8 text-primary text-xl">{{ __('Read full story') }} ...</a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            @endforeach--}}

            {{--            @if ($posts->count() > 0)--}}
            {{--                {{ $posts->links() }}--}}
            {{--            @endif--}}
            <div class="border-b border-primary flex max-lg:flex-col gap-8 pb-8">
                <img data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaBoJ-HMLSuYzsi0aHkYCDVYwSSzgTqIsSvMHDcLmY_TSvH_b-4NRL3lmVy1O15-mXNLTNDoYzhE9KFPhZXFBmUiCr6GQg=w1830-h975" class="w-full lg:w-1/2 object-cover" alt="">
                <div>
                    <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">
                        {{ __('New Release') }}
                    </span>
                    <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">
                        {{ __('Fire driven, cohesion UP! Xiangyuda international logistics business group construction') }}
                    </h2>
                    <span class="mt-4 block text-primary text-xs">09/07/2023</span>
                    <p class="text-primary mt-2 text-sm line-clamp-4">
                        {{ __('Fire driven, cohesion UP! - Xiangyuda International Logistics Business Department team construction - Nankunshan of Huizhou.') }}
                    </p>
                    <a href="#" class="block mt-8 text-primary text-xl">{{ __('Read full story') }} ...</a>
                </div>
            </div>

            <div class="border-b border-primary flex max-lg:flex-col gap-8 pb-8">
                <img data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaBEDE0Ol5J08OpG2Fy5WtYXm9k5bKirpX2m0ijD6rfTC9JrrBLSsAXPzk71Li-83OjKTrqSbmTFIxvPuJ-ieh21EM54xg=w1830-h975" class="w-full lg:w-1/2 object-cover" alt="">
                <div>
                    <span class="px-8 py-1 text-sm bg-primary rounded-full text-secondary">
                        {{ __('New Release') }}
                    </span>
                    <h2 class="mt-4 text-3xl font-semibold line-clamp-2 text-primary">
                        {{ __('Promote innovation and development, promote cooperation and win-win results, and Jitu International is invited to participate in the third "China Europe Cross border E-commerce Forum"') }}
                    </h2>
                    <span class="mt-4 block text-primary text-xs">01/07/2023</span>
                    <p class="text-primary mt-2 text-sm line-clamp-4">
                        {{ __('This sample shows how to automatically replace textarea elements with a CKEditor instance with an option to change the language of its user interface. It pulls the language list from CKEditor _languages.js file that contains the list of supported languages and creates a drop-down list that lets the user change the UI language.') }}
                    </p>
                    <a href="#" class="block mt-8 text-primary text-xl">{{ __('Read full story') }} ...</a>
                </div>
            </div>
        </div>
    </div>
@endsection

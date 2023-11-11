@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-07.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Careers') }}</a>
            </ul>
        </div>

        <h1 class="hidden">{{ __('Careers') }}</h1>

        <div class="w-full container mx-auto flex max-lg:flex-col pb-16">
            <div class="w-full lg:w-2/3 lg:pr-4 space-y-8">
                <div>
                    <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAdgzuUMBUy0a37LywR2tcfgj8o7HDJ8Rrf5xaBHymIXaErq0SAJwr2OXwsqWHyWjlcsBZ5Yva4zNUtMa6BOpNJSgwu9A=w1830-h581" class="w-full" alt="">
                    <div class="bg-secondary flex p-8 pb-0 pt-4 gap-16">
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z"/>
                            </svg>
                            <span class="text-xl mt-2">05</span>
                            <span class="text-xs">11</span>
                        </div>
                        <div>
                            <h2 class="text-xl font-medium line-clamp-4">
                                {{ __('Recruitment of Marketing Ligistics interns (Hanoi branch, Vietnam)') }}
                            </h2>
                            <p class="line-clamp-2 mt-4">
                                {{ __('Position: Marketing Logistics Intern (Marketing Logistics Intern)') }}<br>
                                {{ __('Working form: Full-time....') }}
                            </p>
                        </div>
                    </div>
                    <div class="bg-secondary p-8 py-4">
                        <a href="#" class="block text-secondary bg-primary text-sm w-fit ml-auto px-4 py-1"> Read more </a>
                    </div>
                </div>

                <div>
                    <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAdgzuUMBUy0a37LywR2tcfgj8o7HDJ8Rrf5xaBHymIXaErq0SAJwr2OXwsqWHyWjlcsBZ5Yva4zNUtMa6BOpNJSgwu9A=w1830-h581" class="w-full" alt="">
                    <div class="bg-secondary flex p-8 pb-0 pt-4 gap-16">
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10ZM5 8h14V6H5v2Zm0 0V6v2Zm7 6q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18Z"/>
                            </svg>
                            <span class="text-xl mt-2">05</span>
                            <span class="text-xs">11</span>
                        </div>
                        <div>
                            <h2 class="text-xl font-medium line-clamp-4">
                                {{ __('Recruiting Sales Logistics interns (Hanoi branch, Vietnam)') }}
                            </h2>
                            <p class="line-clamp-2 mt-4">
                                {{ __('Position: Sales Logistics Intern (Sale Logistics Intern)') }}<br>
                                {{ __('Working form: Full-time....') }}
                            </p>
                        </div>
                    </div>
                    <div class="bg-secondary p-8 py-4">
                        <a href="#" class="block text-secondary bg-primary text-sm w-fit ml-auto px-4 py-1">
                            {{ __('Read more') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 lg:pl-4 text-primary max-lg:mt-8">
                <h3 class="text-3xl font-bold">{{ __('Search') }}</h3>
                <div class="relative mt-2">
                    <input type="text"
                           class="placeholder:text-primary placeholder:font-medium bg-secondary px-4 pr-8 py-2 w-full"
                           placeholder="Enter search keyword">
                    <svg class="absolute right-2 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection

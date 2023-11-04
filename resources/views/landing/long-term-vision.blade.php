@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-05.png') }}" class="w-full" alt="">

    <div class="py-16 text-primary max-lg:px-4 container mx-auto">
        <ul class="flex items-center whitespace-nowrap overflow-auto">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="shrink-0">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Current Business Status & Long-term Vision') }}</a>
        </ul>
    </div>

    <div class="mx-auto container pb-16 text-primary max-lg:px-4">
        <h2 class="text-3xl">{{ __('Current Business Status') }}</h2>

        <div class="mx-auto mt-16 flex max-lg:flex-col">
            <div class="w-full lg:w-1/3 text-justify lg:pr-16 text-lg leading-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut deleniti dolore impedit
                incidunt ipsam laborum minima molestias obcaecati odio odit placeat, quis velit vero? Delectus ex modi
                possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolor ex expedita facilis
                illum in maxime nam nulla optio perferendis possimus praesentium, provident quisquam repellat sequi.
                Consectetur numquam quis quod.
            </div>

            <div class="w-full lg:w-2/3 flex flex-col gap-4 max-lg:mt-8 relative">
                <div
                    class="w-1 h-full bg-secondary absolute top-0 bottom-0 left-1/2 -translate-x-1/2 z-[-1] max-md:hidden"></div>

                <div class="flex gap-4 w-full md:w-1/2">
                    <div class="grow">
                        <div
                            class="whitespace-nowrap rounded-r-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                            600 million +
                        </div>
                        <div class="flex">
                            <div class="inline-block w-4 overflow-hidden">
                                <div class="h-16 origin-top-left -rotate-45 transform bg-orange-950"></div>
                            </div>
                            <div
                                class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl px-2 text-center">
                                Company annual revenue
                            </div>
                        </div>
                    </div>

                    <div
                        class="max-md:hidden w-8 h-8 bg-primary rounded-full flex items-center justify-center mt-2 shrink-0 translate-x-4">
                        <div class="w-6 h-6 bg-white rounded-full"></div>
                    </div>
                </div>

                <div class="flex gap-4 w-full md:w-1/2 ml-auto">
                    <div
                        class="max-md:hidden w-8 h-8 bg-primary rounded-full flex items-center justify-center mt-2 shrink-0 -translate-x-4">
                        <div class="w-6 h-6 bg-white rounded-full"></div>
                    </div>

                    <div class="grow">
                        <div
                            class="whitespace-nowrap rounded-l-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                            600 million +
                        </div>
                        <div class="flex justify-end">
                            <div
                                class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl px-2 text-center">
                                Company annual revenue
                            </div>
                            <div class="inline-block w-4 overflow-hidden">
                                <div class="h-16 origin-top-right rotate-45 transform bg-orange-950"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 w-full md:w-1/2">
                    <div class="grow">
                        <div
                            class="whitespace-nowrap rounded-r-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                            600 million +
                        </div>
                        <div class="flex">
                            <div class="inline-block w-4 overflow-hidden">
                                <div class="h-16 origin-top-left -rotate-45 transform bg-orange-950"></div>
                            </div>
                            <div
                                class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl px-2 text-center">
                                Company annual revenue
                            </div>
                        </div>
                    </div>

                    <div
                        class="max-md:hidden w-8 h-8 bg-primary rounded-full flex items-center justify-center mt-2 shrink-0 translate-x-4">
                        <div class="w-6 h-6 bg-white rounded-full"></div>
                    </div>
                </div>

                <div class="flex gap-4 w-full md:w-1/2 ml-auto">
                    <div
                        class="max-md:hidden w-8 h-8 bg-primary rounded-full flex items-center justify-center mt-2 shrink-0 -translate-x-4">
                        <div class="w-6 h-6 bg-white rounded-full"></div>
                    </div>

                    <div class="grow">
                        <div
                            class="whitespace-nowrap rounded-l-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                            600 million +
                        </div>
                        <div class="flex justify-end">
                            <div
                                class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl px-2 text-center">
                                Company annual revenue
                            </div>
                            <div class="inline-block w-4 overflow-hidden">
                                <div class="h-16 origin-top-right rotate-45 transform bg-orange-950"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 w-full md:w-1/2">
                    <div class="grow">
                        <div
                            class="whitespace-nowrap rounded-r-full px-8 py-1 text-center text-3xl font-bold shadow-xl bg-primary text-secondary">
                            600 million +
                        </div>
                        <div class="flex">
                            <div class="inline-block w-4 overflow-hidden">
                                <div class="h-16 origin-top-left -rotate-45 transform bg-orange-950"></div>
                            </div>
                            <div
                                class="bg-secondary w-[calc(100%-3rem)] shadow-2xl flex items-center justify-center rounded-b-2xl px-2 text-center">
                                Company annual revenue
                            </div>
                        </div>
                    </div>

                    <div
                        class="max-md:hidden w-8 h-8 bg-primary rounded-full flex items-center justify-center mt-2 shrink-0 translate-x-4">
                        <div class="w-6 h-6 bg-white rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-16 bg-secondary px-4">
        <div class="mx-auto container pb-16 text-primary">
            <h2 class="text-3xl">{{ __('Long-term Vision') }}</h2>

            <div class="mx-auto mt-16 w-full">
                <h3 class="text-center text-3xl">{{ __('What kind of business do we need to become') }}</h3>
                <h4 class="mt-4 text-center text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                <div class="grid grid-cols-3 gap-8 mt-16">
                    <div class="col-span-full lg:col-span-1 border border-primary p-4 pt-8 relative">
                        <div class="px-4 py-1 bg-primary absolute top-0 left-1/2 -translate-y-1/2 -translate-x-1/2 text-secondary">
                            Lorem ipsum dolor
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores autem consequuntur
                        deleniti eos expedita explicabo illo illum impedit magnam numquam odit officia reiciendis,
                        saepe, sed sint unde ut vero!
                    </div>

                    <div class="col-span-full lg:col-span-1 border border-primary p-4 pt-8 relative">
                        <div class="px-4 py-1 bg-primary absolute top-0 left-1/2 -translate-y-1/2 -translate-x-1/2 text-secondary">
                            Lorem ipsum dolor
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores autem consequuntur
                        deleniti eos expedita explicabo illo illum impedit magnam numquam odit officia reiciendis,
                        saepe, sed sint unde ut vero!
                    </div>

                    <div class="col-span-full lg:col-span-1 border border-primary p-4 pt-8 relative">
                        <div class="px-4 py-1 bg-primary absolute top-0 left-1/2 -translate-y-1/2 -translate-x-1/2 text-secondary">
                            Lorem ipsum dolor
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores autem consequuntur
                        deleniti eos expedita explicabo illo illum impedit magnam numquam odit officia reiciendis,
                        saepe, sed sint unde ut vero!
                    </div>

                    <div class="col-span-full border border-primary p-4 pt-8 relative">
                        <div class="px-4 py-1 bg-primary absolute top-0 left-1/2 -translate-y-1/2 -translate-x-1/2 text-secondary">
                            Lorem ipsum dolor
                        </div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores autem consequuntur
                        deleniti eos expedita explicabo illo illum impedit magnam numquam odit officia reiciendis,
                        saepe, sed sint unde ut vero!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

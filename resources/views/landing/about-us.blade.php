@extends('layouts.app')

@section('content')
    <main>
        <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-05.png') }}" class="object-cover w-full" alt="">

        <div class="py-16 text-primary px-4 lg:px-0">
            <ul class="w-full container mx-auto flex items-center">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('About Xiangyuda Express') }}</a>
            </ul>

            <div class="w-full container mx-auto mt-8 flex flex-col gap-y-8 lg:flex-row pb-16">
                <img data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaBpt0GysVz3LmtToC3DacmMhVmhmRpnlqKYn61Tp1U94dZu6iJceswmc49U06d-nliNrJn2WAI7dZsUz3Snrs4VXpRfgQ=w1830-h975" alt="" class="w-full container aspect-square object-cover">
                <div class="w-full container lg:pl-8">
                    <h1 class="text-5xl font-bold">{{ __('About us') }}</h1>
                    <p class="mt-2">
                        {{ __('Shenzhen Xiangyuda International Freight Forwarding Co., Ltd. was established in June 2009 and located in Convention and Exhibition Bay, Shenzhen. XYD Express specializes in air and sea freight forwarding services to the United States, the United Kingdom, Mexico, and Europe, and overseas warehouses in the West and Midwest of the United States.') }}
                    </p>
                    <p class="mt-2">
                        {{ __('Our business offers a one-stop shop for services such as consulting, pricing, opening customer accounts, customs declaration and clearance, cargo operations, full-process tracking, and dedicated delivery from door to door, inclusive of all duties and other expenses. Our business offers consumers top-notch logistics services with the objective of "delivering worldwide, as trusted by customers."') }}
                    </p>
                    <p class="mt-2">
                        {{ __('As of the end of 2022, Our company cooperated with over 200 businesses, that were committed to developing a pure battery, electronic cigarette, and FBA customer base for export.') }}
                    </p>
                </div>
            </div>

            <div>
                <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaCW1hGZO06XreQGvMvSkkA1M1lm4dwy803yjJSqW8fBr3Uiwofc1I6pNJg-74ucWPJKK95QLWDedbs5snEQQZzhezrbxQ=w1830-h975" alt="" class="w-full">
                <div class="w-full container bg-secondary mx-auto -translate-y-24 lg:px-32 lg:py-16 p-4">
                    <h2 class="text-5xl font-bold text-center">{{ __('Vision') }}</h2>
                    <p class="text-center mt-8">
                        {{ __('Beyond logistics, our purpose is to contribute to helping our customers, vendors, and our employees succeed.') }}
                    </p>
                </div>
            </div>

            <div class="w-full container mx-auto flex flex-col lg:flex-row pb-16">
                <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAGtdc7MGj00ksIwjkNK3ie4f4jfpxflPnEaO8cQC2LnUJZsSt7-l_5Tgzi_TwV0n4hV8Me229bk7rE6AwTt9DDTNC3=w1830-h581" alt="" class="w-full lg:max-w-[50%] container">
                <div class="w-full container lg:pl-8 mt-8 lg:mt-0">
                    <h1 class="text-5xl font-bold">{{ __('Mission') }}</h1>
                    <p class="mt-2 text-xl">
                        {{ __("We always bring our customer's needs first, and since then, we always work hard to bring value to customers. Our principle is to live up to your trust and deliver it all worldwide.") }}
                    </p>
                </div>
            </div>

            <div class="bg-secondary p-4 lg:px-32 lg:py-16">
                <h2 class="text-5xl font-bold text-center">{{ __('Core value') }}</h2>
                <p class="text-center mt-8 w-full container mx-auto">
                    {{ __('We invest in our employees in order to provide the best value to our customers, resulting in a win-win partnership.') }}
                </p>

                <div
                    class="flex mx-auto mt-16 w-full container border-y-2 border-solid border-black divide-x-2 divide-black font-semibold">
                    <div class="w-1/3 text-center py-4">{{ __('Precisely') }}</div>
                    <div class="w-1/3 text-center py-4">{{ __('Optimal') }}</div>
                    <div class="w-1/3 text-center py-4">{{ __('Belief') }}</div>
                </div>

                <div class="w-full container max-w-4xl flex flex-wrap justify-between mx-auto mt-16 gap-y-4">
                    <div class="flex items-center gap-2 max-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M3 21q-.425 0-.713-.288T2 20q0-.425.288-.713T3 19h18q.425 0 .713.288T22 20q0 .425-.288.713T21 21H3Zm1.5-3q-.625 0-1.063-.438T3 16.5v-4q0-.625.438-1.063T4.5 11q.625 0 1.063.438T6 12.5v4q0 .625-.438 1.063T4.5 18Zm5 0q-.625 0-1.063-.438T8 16.5v-9q0-.625.438-1.063T9.5 6q.625 0 1.063.438T11 7.5v9q0 .625-.438 1.063T9.5 18Zm5 0q-.625 0-1.063-.438T13 16.5v-6q0-.625.438-1.063T14.5 9q.625 0 1.063.438T16 10.5v6q0 .625-.438 1.063T14.5 18Zm5 0q-.625 0-1.063-.438T18 16.5v-12q0-.625.438-1.063T19.5 3q.625 0 1.063.438T21 4.5v12q0 .625-.438 1.063T19.5 18Z"/>
                        </svg>
                        <div>
                            <div class="font-bold text-xl">{{ __('14+ Years') }}</div>
                            <div class="">{{ __('Experiences') }}</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 max-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                            <g fill="currentColor">
                                <path
                                    d="M8.387 5.08a9.53 9.53 0 0 0-.5-.745A6.968 6.968 0 0 1 12 3c1.32 0 2.555.365 3.608 1a3.881 3.881 0 0 1-.48 1.305c-.048.077-.248.273-.612.544c-.162.12-.341.231-.556.36l-.074.043c-.188.112-.402.24-.609.382c-.488.334-.996.786-1.338 1.517a2.113 2.113 0 0 0-.12 1.456c.035.135.054.27.055.39c0 .037-.015.096-.097.165a.524.524 0 0 1-.327.118c-1.077-.012-1.927-.904-2.05-2.327c-.094-1.082-.536-2.084-1.013-2.874Zm8.265 9.429c.264-.003.512-.02.745-.05a7.006 7.006 0 0 1-3.418 2.257c-.046-.381-.016-.84.209-1.263c.192-.362.678-.633 1.334-.794a5.454 5.454 0 0 1 1.109-.15h.021Z"/>
                                <path
                                    d="M5 10c0-1.72.62-3.294 1.648-4.512c.102.143.203.297.301.46c.402.664.713 1.416.777 2.15c.17 1.97 1.481 3.837 3.705 3.862c.961.01 2.126-.712 2.123-1.968c0-.287-.046-.567-.112-.815a.436.436 0 0 1 .019-.315c.17-.364.422-.607.766-.842c.16-.11.326-.21.518-.324l.077-.046c.216-.129.461-.278.698-.454c.345-.257.79-.618 1.027-.99c.187-.294.36-.671.494-1.063A6.977 6.977 0 0 1 19 10c0 .532-.06 1.05-.172 1.55a1.891 1.891 0 0 1-.303.582c-.237.307-.712.685-1.89.697h-.037l-.096.003a7.134 7.134 0 0 0-1.382.195c-.759.186-1.871.61-2.417 1.639c-.43.811-.48 1.645-.382 2.327A7.003 7.003 0 0 1 5 10Z"/>
                                <path fill-rule="evenodd"
                                      d="M18.003 1.5a.75.75 0 0 1 1.06-.059a11.037 11.037 0 0 1 3.687 8.246c0 5.751-4.389 10.478-10 11.013v.55H14a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1 0-1.5h1.25v-.509a11.037 11.037 0 0 1-7.809-3.678a.75.75 0 1 1 1.118-1a9.537 9.537 0 0 0 7.128 3.187a9.563 9.563 0 0 0 9.563-9.563a9.537 9.537 0 0 0-3.188-7.128a.75.75 0 0 1-.059-1.06Z"
                                      clip-rule="evenodd"/>
                            </g>
                        </svg>
                        <div>
                            <div class="font-bold text-xl">4+</div>
                            <div class="">{{ __('Branches global') }}</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 max-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M11.8 20.025q-.825 0-1.413-.6T9.8 18q0-.825.588-1.413T11.8 16l.6-.575q.2-.2.463-.313T13.4 15q.575 0 .988.425t.412 1v.425q0 .5.325.825t.825.325q.375 0 .675-.225t.425-.575l.3-.825q.225-.6.725-.988t1.15-.387q.275-.7.438-1.45t.162-1.55q0-2.225-1.112-4.063T15.8 5.05V6q0 .825-.588 1.413T13.8 8h-1v2q0 .425-.288.713T11.8 11h-1v1.7q0 .55-.375.925T9.5 14q-.35 0-.638-.15t-.462-.425L6.8 11h-1v1q0 .775-.525 1.325t-1.25.65q.65 2.6 2.813 4.325t4.962 1.725Zm2-6.025q-.425 0-.713-.287T12.8 13q0-.425.288-.713T13.8 12h1q.425 0 .713.288T15.8 13q0 .425-.288.713T14.8 14h-1Zm2.325-3q-.5 0-.788-.387T15.2 9.75l.375-1.1q.1-.3.35-.475t.55-.175q.5 0 .788.388t.137.862l-.375 1.1q-.1.3-.35.475t-.55.175ZM11.8 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T1.8 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T11.8 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T21.8 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T11.8 22Z"/>
                        </svg>
                        <div>
                            <div class="font-bold text-xl">20+</div>
                            <div class="">{{ __('Countries') }}</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 max-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                  d="M123.64 218.91A12 12 0 0 1 112 228a12.28 12.28 0 0 1-2.92-.36l-32-8a11.79 11.79 0 0 1-3.74-1.64l-24-16a12 12 0 0 1 13.32-20l22.27 14.85l30 7.5a12 12 0 0 1 8.71 14.56ZM255 122.75a19.88 19.88 0 0 1-10 11.56l-22.87 11.44l-53.58 54.73a12 12 0 0 1-11.4 3.16l-64-16a12.16 12.16 0 0 1-4.17-1.95L35 146.28l-23.94-12a20 20 0 0 1-9-26.83L27 57.79a20 20 0 0 1 26.83-8.94l20.59 10.31l50.21-14.68a12.07 12.07 0 0 1 6.74 0l50.21 14.68l20.63-10.32A20 20 0 0 1 229 57.79l24.85 49.69a19.86 19.86 0 0 1 1.15 15.27ZM200.3 134l-25-50h-26.44l-38.2 37.05c15.76 7.26 31.16.19 40.82-9.55a12 12 0 0 1 16-.91l31.26 25ZM25.37 114.63l10.53 5.27l21.27-42.53l-10.54-5.27ZM182 153l-21.7-17.43c-20.49 15.29-45.85 16.79-67 3.25a20 20 0 0 1-3.4-31l.12-.12l39.8-38.7l-1.82-.5l-46.34 13.55l-25.12 50.24l44.65 32.64l55.13 13.78Zm48.59-38.36L209.37 72.1l-10.54 5.27l21.27 42.53Z"/>
                        </svg>
                        <div>
                            <div class="font-bold text-xl">50+</div>
                            <div class="">{{ __('Co-operations') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" py-16">
                <h2 class="text-3xl font-bold text-center">{{ __('Why you should choose our service') }}</h2>
                <p class="text-center mt-8 w-full container mx-auto">
                    {{ __('The reason why you should choose us to be your transportation partner') }}
                </p>

                <div class="w-full container max-w-xl grid grid-cols-2 mx-auto mt-16 gap-8">
                    <div class="col-span-1 flex max-lg:gap-4 max-lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M21.71 8.71c1.25-1.25.68-2.71 0-3.42l-3-3c-1.26-1.25-2.71-.68-3.42 0L13.59 4H11C9.1 4 8 5 7.44 6.15L3 10.59v4l-.71.7c-1.25 1.26-.68 2.71 0 3.42l3 3c.54.54 1.12.74 1.67.74c.71 0 1.36-.35 1.75-.74l2.7-2.71H15c1.7 0 2.56-1.06 2.87-2.1c1.13-.3 1.75-1.16 2-2C21.42 14.5 22 13.03 22 12V9h-.59l.3-.29M20 12c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-1v1c0 .45-.19 1-1 1h-4.41l-3.28 3.28c-.31.29-.49.12-.6.01l-2.99-2.98c-.29-.31-.12-.49-.01-.6L5 15.41v-4l2-2V11c0 1.21.8 3 3 3s3-1.79 3-3h7v1m.29-4.71L18.59 9H11v2c0 .45-.19 1-1 1s-1-.55-1-1V8c0-.46.17-2 2-2h3.41l2.28-2.28c.31-.29.49-.12.6-.01l2.99 2.98c.29.31.12.49.01.6Z"/>
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl">Responsibility</h3>
                        </div>
                    </div>

                    <div class="col-span-1 flex max-lg:gap-4 max-lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 16 16">
                            <path fill="currentColor"
                                  d="M9.5 1A1.5 1.5 0 0 0 8 2.5v2a1.5 1.5 0 0 0 1 1.414V7a.5.5 0 0 0 .82.384L11.48 6h2.02A1.5 1.5 0 0 0 15 4.5v-2A1.5 1.5 0 0 0 13.5 1h-4ZM9 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2.2a.5.5 0 0 0-.32.116l-.98.816V5.5a.5.5 0 0 0-.5-.5a.5.5 0 0 1-.5-.5v-2ZM3 6a2 2 0 1 1 4 0a2 2 0 0 1-4 0Zm2-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2ZM2.5 9h5A1.5 1.5 0 0 1 9 10.5c0 1.116-.459 2.01-1.212 2.615C7.047 13.71 6.053 14 5 14c-1.053 0-2.047-.29-2.788-.885C1.46 12.51 1 11.616 1 10.5A1.5 1.5 0 0 1 2.5 9Zm5 1h-5a.5.5 0 0 0-.5.5c0 .817.325 1.423.838 1.835C3.364 12.757 4.12 13 5 13c.88 0 1.636-.243 2.162-.665c.513-.412.838-1.018.838-1.835a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl">Quick feedback</h3>
                        </div>
                    </div>

                    <div class="col-span-1 flex max-lg:gap-4 max-lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M11.875 20q.1 0 .2-.05t.15-.1l8.2-8.2q.3-.3.438-.675t.137-.75q0-.4-.138-.763t-.437-.637l-4.25-4.25q-.275-.3-.638-.438T14.776 4q-.375 0-.75.138t-.675.437l-.275.275l1.85 1.875q.375.35.55.8t.175.95q0 1.05-.712 1.763t-1.763.712q-.5 0-.963-.175t-.812-.525L9.525 8.4L5.15 12.775q-.075.075-.113.163T5 13.124q0 .2.15.363t.35.162q.1 0 .2-.05t.15-.1l3.4-3.4l1.4 1.4l-3.375 3.4q-.075.075-.113.163t-.037.187q0 .2.15.35t.35.15q.1 0 .2-.05t.15-.1l3.4-3.375l1.4 1.4l-3.375 3.4q-.075.05-.113.15t-.037.2q0 .2.15.35t.35.15q.1 0 .188-.038t.162-.112l3.4-3.375l1.4 1.4l-3.4 3.4q-.075.075-.113.162t-.037.188q0 .2.163.35t.362.15Zm-.025 2q-.925 0-1.638-.613t-.837-1.537q-.85-.125-1.425-.7t-.7-1.425q-.85-.125-1.413-.713T5.15 15.6q-.95-.125-1.55-.825t-.6-1.65q0-.5.188-.962t.537-.813l5.8-5.775L12.8 8.85q.05.075.15.113t.2.037q.225 0 .375-.137t.15-.363q0-.1-.038-.2t-.112-.15L9.95 4.575q-.275-.3-.637-.438T8.55 4q-.375 0-.75.138t-.675.437L3.6 8.125q-.225.225-.375.525t-.2.6q-.05.3 0 .613t.2.587l-1.45 1.45q-.425-.575-.625-1.262T1 9.25q.05-.7.35-1.363T2.175 6.7L5.7 3.175Q6.3 2.6 7.038 2.3T8.55 2q.775 0 1.513.3t1.312.875l.275.275l.275-.275q.6-.575 1.338-.875t1.512-.3q.775 0 1.513.3t1.312.875L21.825 7.4q.575.575.875 1.325t.3 1.525q0 .775-.3 1.513t-.875 1.312l-8.2 8.175q-.35.35-.813.55t-.962.2ZM9.375 8Z"/>
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl">Professional</h3>
                        </div>
                    </div>

                    <div class="col-span-1 flex max-lg:gap-4 max-lg:flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                  d="M10.5 15.5h3V13H16v-3h-2.5V7.5h-3V10H8v3h2.5v2.5ZM12 22q-3.475-.875-5.738-3.988T4 11.1V5l8-3l8 3v6.1q0 3.8-2.263 6.913T12 22Zm0-2.1q2.6-.825 4.3-3.3t1.7-5.5V6.375l-6-2.25l-6 2.25V11.1q0 3.025 1.7 5.5t4.3 3.3Zm0-7.9Z"/>
                        </svg>
                        <div class="ml-4">
                            <h3 class="text-xl">Safe solution</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

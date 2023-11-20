@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-15.png') }}" class="w-full" alt="">

    <div class="py-16 text-primary bg-secondary px-4">
        <ul class="w-full container mx-auto flex items-center whitespace-nowrap overflow-auto [&_svg]:shrink-0">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Main Channels') }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Air Freight') }}</a>
        </ul>
        <h1 class="text-3xl mx-auto w-full container text-primary font-medium mt-16">{{ __('Advantages of Air transport') }}</h1>

        <div class="w-full container mx-auto mt-16 grid lg:grid-cols-3 gap-16">
            <div class="flex flex-col items-end rounded border-2 border-primary">
                <div
                    class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                    <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                         style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                    <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                    {{ __('Reliable partner') }}
                </div>
                <p class="p-4 text-center text-base">
                    {{ __('Road-rail intermodal freight. Delivery from door to door, including all duties and other fees.') }}
                </p>
            </div>
            <div class="flex flex-col items-end rounded border-2 border-primary">
                <div
                    class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                    <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                         style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                    <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                    {{ __('Team configuration') }}
                </div>
                <p class="p-4 text-center text-base">
                    {{ __('We have our own customs clearance team with legitimate declaration, professional operation, and a very high clearance rate.') }}
                </p>
            </div>
            <div class="flex flex-col items-end rounded border-2 border-primary">
                <div
                    class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                    <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                         style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                    <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                    {{ __('Complete facilities') }}
                </div>
                <p class="p-4 text-center text-base">
                    {{ __('We have our own DG overseas warehouse in the United States (with qualifications for mstoring dangerous goods and the ability to provide drop-shipping services).') }}
                </p>
            </div>
            <div class="flex flex-col items-end rounded border-2 border-primary">
                <div
                    class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                    <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                         style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                    <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                    {{ __('Rich in resources') }}
                </div>
                <p class="p-4 text-center text-base">
                    {{ __('Having multiple airline agency rights, a professional team operation, and a comprehensive air freight network service. Making full use of flight resources, fleet resources, port resources, and customs clearance resources, with an efficient intermodal network.') }}
                </p>
            </div>
            <div class="flex flex-col items-end rounded border-2 border-primary">
                <div
                    class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                    <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                         style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                    <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                    {{ __('Rich in experience') }}
                </div>
                <p class="p-4 text-center text-base">
                    {{ __('International air transport (flying from Hong Kong, with over a decade of experience in handling Class 9 dangerous goods).') }}
                </p>
            </div>
            <div class="flex flex-col items-end rounded border-2 border-primary">
                <div
                    class="relative rounded-bl-3xl border-b-2 border-l-2 py-2 pr-4 pl-14 text-center font-bold border-primary">
                    <div class="w-12 h-2 bg-primary absolute bottom-full -left-0.5"
                         style="clip-path: polygon(10% 0%, 90% 0%, 100% 100%, 0% 100%);"></div>
                    <div class="w-10 h-10 rounded-b-3xl bg-primary absolute top-0 left-0.5"></div>
                    {{ __('Professional') }}
                </div>
                <p class="p-4 text-center text-base">
                    {{ __('Professional service team, with detailed transportation plans.') }}
                </p>
            </div>
        </div>
    </div>

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <h1 class="text-3xl mx-auto w-full container text-primary font-medium">
                {{ __('We carry these main activities in Air Freight') }}
            </h1>

            <div class="w-full container mx-auto my-16 space-y-8">
                <div class="w-full bg-primary text-secondary flex max-md:flex-col gap-4 items-center lg:h-24 relative z-40">
                    <div class="text-4xl font-bold px-8 w-1/4 text-center max-md:hidden">
                        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 17l9 5l9-5v-3l-9 5l-9-5v-3l9 5l9-5V8l-9 5l-9-5l9-5l5.418 3.01"/></svg>
                    </div>
                    <div class="flex relative top-[22px] drop-shadow-2xl max-lg:hidden">
                        <div class="w-20 h-24 bg-[#4e290c] skew-y-[30deg]"></div>
                        <div class="w-20 h-24 bg-[#6a3c18] -skew-y-[30deg] flex items-center justify-center text-secondary text-4xl font-bold">1</div>
                        <div class="bg-[#9a5c1f] absolute -top-[4.5rem] left-0 h-full w-full" style="clip-path: polygon(50% 6%, 100% 52%, 50% 100%, 0% 52%);"></div>
                    </div>
                    <div
                        class="text-xlw-full md:w-1/4 max-md:pt-8 max-md:px-4 text-right">{{ __('America air Freight') }}</div>
                    <div class="w-0.5 h-10 bg-secondary max-md:hidden"></div>
                    <div class="text-base w-full md:w-1/2 border-8 border-primary line-clamp-3">
                        {{ __('We have collaborated with major international airlines to build a dedicated air freight service LAX - ORD. We also accept customized routes with door-to-door delivery (customs clearance and taxes, cargo safe insurance.') }}
                    </div>
                </div>

                <div class="w-full bg-primary text-secondary flex max-md:flex-col gap-4 items-center lg:h-24 relative z-30">
                    <div class="text-4xl font-bold px-8 w-1/4 text-center max-md:hidden">
                        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M3 3h9.382a1 1 0 0 1 .894.553L14 5h6a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1h-6.382a1 1 0 0 1-.894-.553L12 16H5v6H3V3Z"/></svg>
                    </div>
                    <div class="flex relative top-[22px] drop-shadow-2xl max-lg:hidden">
                        <div class="w-20 h-24 bg-[#4e290c] skew-y-[30deg]"></div>
                        <div class="w-20 h-24 bg-[#6a3c18] -skew-y-[30deg] flex items-center justify-center text-secondary text-4xl font-bold">2</div>
                        <div class="bg-[#9a5c1f] absolute -top-[4.5rem] left-0 h-full w-full" style="clip-path: polygon(50% 6%, 100% 52%, 50% 100%, 0% 52%);"></div>
                    </div>
                    <div
                        class="text-xlw-full md:w-1/4 max-md:pt-8 max-md:px-4 text-right">{{ __('Korean and Hong Kong Package Board agent') }}</div>
                    <div class="w-0.5 h-10 bg-secondary max-md:hidden"></div>
                    <div class="text-base w-full md:w-1/2 border-8 border-primary line-clamp-3">
                        {{ __('We have signed cooperation agreements with major international airlines and are proud to be the charter agent for international air freight for EK, EY, TK, ET, KE, OZ, CI, and CX in Hong Kong and Korea.') }}
                    </div>
                </div>

                <div class="w-full bg-primary text-secondary flex max-md:flex-col gap-4 items-center lg:h-24 relative z-20">
                    <div class="text-4xl font-bold px-8 w-1/4 text-center max-md:hidden">
                        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M11.5 1L2 6v2h19V6m-5 4v7h3v-7M2 22h19v-3H2m8-9v7h3v-7m-9 0v7h3v-7H4Z"/></svg>
                    </div>
                    <div class="flex relative top-[22px] drop-shadow-2xl max-lg:hidden">
                        <div class="w-20 h-24 bg-[#4e290c] skew-y-[30deg]"></div>
                        <div class="w-20 h-24 bg-[#6a3c18] -skew-y-[30deg] flex items-center justify-center text-secondary text-4xl font-bold">3</div>
                        <div class="bg-[#9a5c1f] absolute -top-[4.5rem] left-0 h-full w-full" style="clip-path: polygon(50% 6%, 100% 52%, 50% 100%, 0% 52%);"></div>
                    </div>
                    <div
                        class="text-xlw-full md:w-1/4 max-md:pt-8 max-md:px-4 text-right">{{ __('European and UK service') }}</div>
                    <div class="w-0.5 h-10 bg-secondary max-md:hidden"></div>
                    <div class="text-base w-full md:w-1/2 border-8 border-primary line-clamp-3">
                        {{ __('You can choose between customs clearance and taxes included, or VAT tax. We offer various transportation options such as air freight and sea-rail intermodal transport to meet the different time requirements of our customers.') }}
                    </div>
                </div>

                <div class="w-full bg-primary text-secondary flex max-md:flex-col gap-4 items-center lg:h-24 relative z-10">
                    <div class="text-4xl font-bold px-8 w-1/4 text-center max-md:hidden">
                        <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M4 21V9l8-6l8 6v12h-6v-7h-4v7H4Z"/></svg>
                    </div>
                    <div class="flex relative top-[22px] drop-shadow-2xl max-lg:hidden">
                        <div class="w-20 h-24 bg-[#4e290c] skew-y-[30deg]"></div>
                        <div class="w-20 h-24 bg-[#6a3c18] -skew-y-[30deg] flex items-center justify-center text-secondary text-4xl font-bold">4</div>
                        <div class="bg-[#9a5c1f] absolute -top-[4.5rem] left-0 h-full w-full" style="clip-path: polygon(50% 6%, 100% 52%, 50% 100%, 0% 52%);"></div>
                    </div>
                    <div
                        class="text-xlw-full md:w-1/4 max-md:pt-8 max-md:px-4 text-right">{{ __('Vietnam-America air freight') }}</div>
                    <div class="w-0.5 h-10 bg-secondary max-md:hidden"></div>
                    <div class="text-base w-full md:w-1/2 border-8 border-primary line-clamp-3">
                        {{ __('Air and ocean freight from Vietnam to America, covering DDP, the first leg, clearance, pick-up, and delivery.') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16 bg-secondary text-primary px-4">
            <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Service Guarantee') }}</h1>
            <div class="w-full container max-w-2xl mx-auto mt-16 grid lg:grid-cols-2 gap-x-16 gap-y-8">
                <div class="flex items-center gap-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                        <g fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M18.955 1.25c-.433 0-.83 0-1.152.043c-.356.048-.731.16-1.04.47c-.31.309-.422.684-.47 1.04c-.043.323-.043.72-.043 1.152v13.09c0 .433 0 .83.043 1.152c.048.356.16.731.47 1.04c.309.31.684.422 1.04.47c.323.043.72.043 1.152.043h.09c.433 0 .83 0 1.152-.043c.356-.048.731-.16 1.04-.47c.31-.309.422-.684.47-1.04c.043-.323.043-.72.043-1.152V3.955c0-.433 0-.83-.043-1.152c-.048-.356-.16-.731-.47-1.04c-.309-.31-.684-.422-1.04-.47c-.323-.043-.72-.043-1.152-.043h-.09Zm-1.13 1.572l-.002.001l-.001.003a.703.703 0 0 0-.042.177c-.028.21-.03.504-.03.997v13c0 .493.002.787.03.997a.702.702 0 0 0 .042.177l.001.003l.003.001l.003.002l.007.003c.022.009.07.024.167.037c.21.028.504.03.997.03s.787-.002.997-.03a.702.702 0 0 0 .177-.042l.003-.001l.001-.003a.702.702 0 0 0 .042-.177c.028-.21.03-.504.03-.997V4c0-.493-.002-.787-.03-.997a.703.703 0 0 0-.042-.177l-.001-.003l-.003-.001a.704.704 0 0 0-.177-.042c-.21-.028-.504-.03-.997-.03s-.787.002-.997.03a.705.705 0 0 0-.177.042Zm-5.87 1.428h.09c.433 0 .83 0 1.152.043c.356.048.731.16 1.04.47c.31.309.422.684.47 1.04c.043.323.043.72.043 1.152v10.09c0 .433 0 .83-.043 1.152c-.048.356-.16.731-.47 1.04c-.309.31-.684.422-1.04.47c-.323.043-.72.043-1.152.043h-.09c-.432 0-.83 0-1.152-.043c-.356-.048-.731-.16-1.04-.47c-.31-.309-.422-.684-.47-1.04c-.043-.323-.043-.72-.043-1.152V6.955c0-.433 0-.83.043-1.152c.048-.356.16-.731.47-1.04c.309-.31.684-.422 1.04-.47c.323-.043.72-.043 1.152-.043Zm-1.132 1.573l.003-.001l-.003 12.355l-.001-.003a.702.702 0 0 1-.042-.177c-.028-.21-.03-.504-.03-.997V7c0-.493.002-.787.03-.997a.703.703 0 0 1 .042-.177l.001-.003Zm0 12.354l.003-12.355l.003-.002l.007-.003a.705.705 0 0 1 .167-.037c.21-.028.504-.03.997-.03s.787.002.997.03a.704.704 0 0 1 .177.042l.003.001l.001.003a.703.703 0 0 1 .042.177c.028.21.03.504.03.997v10c0 .493-.002.787-.03.997a.702.702 0 0 1-.042.177l-.001.003l-.003.001a.077.077 0 0 1-.01.005a.702.702 0 0 1-.167.037c-.21.028-.504.03-.997.03s-.787-.002-.997-.03a.703.703 0 0 1-.177-.042l-.003-.001ZM4.955 8.25c-.433 0-.83 0-1.152.043c-.356.048-.731.16-1.04.47c-.31.309-.422.684-.47 1.04c-.043.323-.043.72-.043 1.152v6.09c0 .433 0 .83.043 1.152c.048.356.16.731.47 1.04c.309.31.684.422 1.04.47c.323.043.72.043 1.152.043h.09c.433 0 .83 0 1.152-.043c.356-.048.731-.16 1.04-.47c.31-.309.422-.684.47-1.04c.043-.323.043-.72.043-1.152v-6.09c0-.433 0-.83-.043-1.152c-.048-.356-.16-.731-.47-1.04c-.309-.31-.684-.422-1.04-.47c-.323-.043-.72-.043-1.152-.043h-.09Zm-1.13 1.572l-.002.001l-.001.003a.706.706 0 0 0-.042.177c-.028.21-.03.504-.03.997v6c0 .493.002.787.03.997a.704.704 0 0 0 .042.177v.002l.004.002a.703.703 0 0 0 .177.042c.21.028.504.03.997.03s.787-.002.997-.03a.703.703 0 0 0 .177-.042l.003-.001l.001-.003l.002-.004l.003-.006a.704.704 0 0 0 .037-.167c.028-.21.03-.504.03-.997v-6c0-.493-.002-.787-.03-.997a.706.706 0 0 0-.042-.177l-.001-.003l-.003-.001a.705.705 0 0 0-.177-.042c-.21-.028-.504-.03-.997-.03s-.787.002-.997.03a.705.705 0 0 0-.177.042Z"
                                  clip-rule="evenodd"/>
                            <path d="M3 21.25a.75.75 0 0 0 0 1.5h18a.75.75 0 0 0 0-1.5H3Z"/>
                        </g>
                    </svg>
                    <div>
                        <h3 class="text-xl font-bold">{{ __('High Professional') }}</h3>
                        <p class="text-base mt-1">
                            {{ __('Operationally compliant, having complete control over cargo throughout the process.') }}
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M12 21q-1.85 0-3.488-.713T5.65 18.35q-1.225-1.225-1.938-2.863T3 12q0-1.95.75-3.65t2.1-2.925q.3-.275.713-.263t.687.288l5.45 5.45q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275L6.6 7.6q-.75.9-1.175 2.013T5 12q0 2.9 2.05 4.95T12 19q2.9 0 4.95-2.05T19 12q0-2.675-1.713-4.612T13 5.1V6q0 .425-.288.713T12 7q-.425 0-.713-.288T11 6V4q0-.425.288-.713T12 3q1.85 0 3.488.713T18.35 5.65q1.225 1.225 1.938 2.863T21 12q0 1.85-.713 3.488T18.35 18.35q-1.225 1.225-2.863 1.938T12 21Zm0-3q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm5-5q-.425 0-.713-.288T16 12q0-.425.288-.713T17 11q.425 0 .713.288T18 12q0 .425-.288.713T17 13ZM7 13q-.425 0-.713-.288T6 12q0-.425.288-.713T7 11q.425 0 .713.288T8 12q0 .425-.288.713T7 13Z"/></svg>
                    <div>
                        <h3 class="text-xl font-bold">{{ __('Fast and timely') }}</h3>
                        <p class="text-base mt-1">
                            {{ __('Sufficient storage space, frequent shipments, and consistent timing.') }}
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12Zm.125 9.9q-.175 0-.325-.038t-.3-.087q-3.375-1.125-5.388-4.15T4 11.1V6.375q0-.625.363-1.125t.937-.725l6-2.25q.35-.125.7-.125t.7.125l6 2.25q.575.225.938.725T20 6.375V11.1q0 .25-.013.5t-.037.5q-.225-.05-.463-.075T19 12q-.275 0-.525.025t-.525.075q.025-.25.038-.487T18 11.1V6.375l-6-2.25l-6 2.25V11.1q0 3.025 1.7 5.5t4.3 3.3q.525-.175 1.025-.425T14 18.9v2.35q-.25.125-.513.225t-.712.3q-.15.05-.313.088t-.337.037Zm4.725.1q-.35 0-.6-.25t-.25-.6v-3.3q0-.35.25-.6t.6-.25H17v-1q0-.825.588-1.413T19 14q.825 0 1.413.588T21 16v1h.15q.35 0 .6.25t.25.6v3.3q0 .35-.25.6t-.6.25h-4.3ZM18 17h2v-1q0-.425-.288-.713T19 15q-.425 0-.713.288T18 16v1Z"/></svg>
                    <div>
                        <h3 class="text-xl font-bold">{{ __('High level of safety') }}</h3>
                        <p class="text-base mt-1">
                            {{ __('We assist customers in acquiring freight transportation insurance to boost protection in collaboration with well  known insurance firms.') }}
                        </p>
                    </div>
                </div>

                <div class="flex items-center gap-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 0 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0ZM3 10v4h1v-4H3Zm17 0v4h1v-4h-1ZM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.962 7.962 0 0 1-4.24-1.215Z"/></svg>
                    <div>
                        <h3 class="text-xl font-bold">{{ __('Good service') }}</h3>
                        <p class="text-base mt-1">
                            {{ __('We have our own fleet of vehicles and provide free city pickup.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16 text-primary">
            <h1 class="container mx-auto w-full text-3xl font-medium text-primary">{{ __('Maybe you will be interested') }}</h1>
            <div class="mx-auto mt-16 flex w-full max-lg:flex-col items-center gap-8 container">
                <div class="grow">
                    <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaD07LRfN0GeGjrNrvY0OuYnOm3ikvoAs7F-W_OZeW5htEdHuAnhO2C7uLXjSz9COATVaZfXnsm8OmhvP61houC9N4i4=w1830-h975" class="w-full object-cover" alt="">
                    <div class="relative p-4 bg-secondary">
                        <h3 class="text-xl font-semibold">{{ __('Air Freight') }}</h3>
                        <a href="{{ route('air-freight') }}" class="absolute top-0 right-0 block -translate-y-1/2 px-4 py-1 bg-primary text-secondary">{{ __('Read more') }}</a>
                    </div>
                </div>
                <div class="grow">
                    <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAGtdc7MGj00ksIwjkNK3ie4f4jfpxflPnEaO8cQC2LnUJZsSt7-l_5Tgzi_TwV0n4hV8Me229bk7rE6AwTt9DDTNC3=w1830-h975" class="w-full object-cover" alt="">
                    <div class="relative p-4 bg-secondary">
                        <h3 class="text-xl font-semibold">{{ __('Land Freight') }}</h3>
                        <a href="{{ route('land-freight') }}" class="absolute top-0 right-0 block -translate-y-1/2 px-4 py-1 bg-primary text-secondary">{{ __('Read more') }}</a>
                    </div>
                </div>
                <div class="grow">
                    <img  data-src="https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaDVll_CwOgoY-O5eLQpXMcusamfIKALdfHH1oUbRM9PxV6rpYNbq8CuE4jFpRC4ypuwygm5kfAsdKqVE_zEm-RNkUkNHw=w1830-h975" class="w-full object-cover" alt="">
                    <div class="relative p-4 bg-secondary">
                        <h3 class="text-xl font-semibold">{{ __('Sea Freight') }}</h3>
                        <a href="{{ route('sea-freight') }}" class="absolute top-0 right-0 block -translate-y-1/2 px-4 py-1 bg-primary text-secondary">{{ __('Read more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

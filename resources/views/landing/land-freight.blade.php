@extends('layouts.app')

@section('content')
    <img src="https://placehold.co/1600x320" class="w-full" alt="">

    <div class="py-16 text-primary bg-secondary">
        <ul class="w-3/4 mx-auto flex items-center">
            <a href="{{ route('home') }}">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">Main Channels</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">Land Freight</a>
        </ul>
        <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium mt-16">Advantages of Land transport</h1>
    </div>

    <div class="py-16 text-primary">
        <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">We carry these main activities in Land Freight</h1>
        <div class="w-3/5 mx-auto mt-16 flex items-center">
            <div class="w-1/2 pr-8 relative -mb-12">
                <div class="bg-[#47220f] text-secondary text-center font-bold text-xl px-8 pt-3 pb-6 rounded-t-xl">
                    Chongqing-Xinjiang-Europe train freight
                </div>
                <div
                    class="bg-[#6a3c18] text-secondary text-center -top-4 relative font-bold text-xl px-8 pt-3 pb-6 rounded-t-xl">
                    Yiwu-Xinjiang-Europe train freight
                </div>
                <div
                    class="bg-[#83481e] text-secondary text-center -top-8 relative font-bold text-xl px-8 pt-3 pb-6 rounded-t-xl">
                    Hunan-Europe train freight
                </div>
                <div
                    class="bg-[#9c7b4e] text-secondary text-center -top-12 relative font-bold text-xl px-8 py-3 rounded-xl">
                    China-Vietnam train freight
                </div>
            </div>
            <div class="w-1/2 pl-8 text-justify">
                As a first-level logistics agent for rail freight from China to Europe, our company has maintained a
                good strategic partnership with Guangzhou Railway and China Railway for a long time. With more and more
                trains being put into operation, we have been able to help more customers deliver their goods to various
                parts of Europe in a timely manner, thanks to our well-established service system, fully demonstrating
                the efficiency and scale advantages of logistics services.
            </div>
        </div>
    </div>

    <div class="py-16 bg-secondary text-primary">
        <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Service Guarantee</h1>
        <div class="w-3/5 mx-auto mt-16 grid grid-cols-2 gap-x-16 gap-y-8">
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
                    <h3 class="text-xl font-bold">High Professional</h3>
                    <p class="text-xs mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="flex items-center gap-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M12 21q-1.85 0-3.488-.713T5.65 18.35q-1.225-1.225-1.938-2.863T3 12q0-1.95.75-3.65t2.1-2.925q.3-.275.713-.263t.687.288l5.45 5.45q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275L6.6 7.6q-.75.9-1.175 2.013T5 12q0 2.9 2.05 4.95T12 19q2.9 0 4.95-2.05T19 12q0-2.675-1.713-4.612T13 5.1V6q0 .425-.288.713T12 7q-.425 0-.713-.288T11 6V4q0-.425.288-.713T12 3q1.85 0 3.488.713T18.35 5.65q1.225 1.225 1.938 2.863T21 12q0 1.85-.713 3.488T18.35 18.35q-1.225 1.225-2.863 1.938T12 21Zm0-3q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm5-5q-.425 0-.713-.288T16 12q0-.425.288-.713T17 11q.425 0 .713.288T18 12q0 .425-.288.713T17 13ZM7 13q-.425 0-.713-.288T6 12q0-.425.288-.713T7 11q.425 0 .713.288T8 12q0 .425-.288.713T7 13Z"/></svg>
                <div>
                    <h3 class="text-xl font-bold">Fast and timely</h3>
                    <p class="text-xs mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="flex items-center gap-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12Zm.125 9.9q-.175 0-.325-.038t-.3-.087q-3.375-1.125-5.388-4.15T4 11.1V6.375q0-.625.363-1.125t.937-.725l6-2.25q.35-.125.7-.125t.7.125l6 2.25q.575.225.938.725T20 6.375V11.1q0 .25-.013.5t-.037.5q-.225-.05-.463-.075T19 12q-.275 0-.525.025t-.525.075q.025-.25.038-.487T18 11.1V6.375l-6-2.25l-6 2.25V11.1q0 3.025 1.7 5.5t4.3 3.3q.525-.175 1.025-.425T14 18.9v2.35q-.25.125-.513.225t-.712.3q-.15.05-.313.088t-.337.037Zm4.725.1q-.35 0-.6-.25t-.25-.6v-3.3q0-.35.25-.6t.6-.25H17v-1q0-.825.588-1.413T19 14q.825 0 1.413.588T21 16v1h.15q.35 0 .6.25t.25.6v3.3q0 .35-.25.6t-.6.25h-4.3ZM18 17h2v-1q0-.425-.288-.713T19 15q-.425 0-.713.288T18 16v1Z"/></svg>
                <div>
                    <h3 class="text-xl font-bold">High level of safety</h3>
                    <p class="text-xs mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="flex items-center gap-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 0 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0ZM3 10v4h1v-4H3Zm17 0v4h1v-4h-1ZM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.962 7.962 0 0 1-4.24-1.215Z"/></svg>
                <div>
                    <h3 class="text-xl font-bold">Good service</h3>
                    <p class="text-xs mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 text-primary">
        <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Maybe you will be interested</h1>
        <div class="w-3/5 mx-auto mt-16 flex items-center gap-8">
            <div class="grow">
                <img src="https://placehold.co/240x320" class="w-full object-cover" alt="">
                <div class="bg-secondary p-4 relative">
                    <h3 class="font-semibold text-xl">Air Freight</h3>
                    <a href="#" class="block bg-primary text-secondary px-4 py-1 top-0 -translate-y-1/2 absolute right-0">Read more</a>
                </div>
            </div>
            <div class="grow">
                <img src="https://placehold.co/240x320" class="w-full object-cover" alt="">
                <div class="bg-secondary p-4 relative">
                    <h3 class="font-semibold text-xl">Land Freight</h3>
                    <a href="#" class="block bg-primary text-secondary px-4 py-1 top-0 -translate-y-1/2 absolute right-0">Read more</a>
                </div>
            </div>
            <div class="grow">
                <img src="https://placehold.co/240x320" class="w-full object-cover" alt="">
                <div class="bg-secondary p-4 relative">
                    <h3 class="font-semibold text-xl">Sea Freight</h3>
                    <a href="#" class="block bg-primary text-secondary px-4 py-1 top-0 -translate-y-1/2 absolute right-0">Read more</a>
                </div>
            </div>
        </div>
    </div>
@endsection

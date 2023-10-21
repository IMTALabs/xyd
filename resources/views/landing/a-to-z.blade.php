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
            <a href="#">Our service</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">A to Z Transportation Service</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">A to Z Transportation Service</h1>

    <div class="mx-auto w-3/5 text-justify text-primary py-16">
        Our main business is undertaking diversified international freight transportation services, including
        sea, land, air, and rail. We focuse on meeting customer needs and pursuing perfect service. We rely on
        a fast transportation network and a comprehensive management system to establish in the freight
        industry and provide all-round "pickup-transport-delivery" one-to-one service.
    </div>

    <div class="mx-auto w-3/4 text-primary pb-16">
        <div class="flex items-center gap-4 max-w-md">
            <div class="h-0.5 grow bg-primary"></div>
            <div class="text-3xl font-bold">Air Freight</div>
            <div class="h-0.5 grow bg-primary"></div>
        </div>
        <p class="my-4">Customized Professional Air Logistics Solutions</p>
        <div class="flex items-center mt-16">
            <div class="w-1/2 pr-8 text-justify">
                Long-term fixed cooperation contracts with airlines such as KE/OZ/PO/CZ, with guaranteed availability of
                fixed seats and sufficient timeliness.
                <br><br>
                Having multiple airline agency rights, a professional team operation, and a comprehensive air freight
                network service. Making full use of flight resources, fleet resources, port resources, and customs
                clearance resources, with an efficient intermodal network.
            </div>
            <div class="w-1/2 pl-8 grid grid-cols-2 gap-x-16 gap-y-8">
                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M180 216a12 12 0 0 1-12 12H24a12 12 0 1 1 0-24h144a12 12 0 0 1 12 12Zm71.79-126.12a12 12 0 0 1-5.64 8.1L98.75 186l-.13.07a43.74 43.74 0 0 1-52.2-5.94l-.19-.18l-36-35.25a20 20 0 0 1 5.55-32.7l2.94-1.44a12 12 0 0 1 9.12-.59l26.5 8.94l14.15-8.56l-18.07-17.57a20 20 0 0 1 5.7-33.05l.48-.2l7.15-2.7a12 12 0 0 1 8.4 0L124.29 76l49.93-29.8a43.8 43.8 0 0 1 56.43 10a1.84 1.84 0 0 1 .17.22l18.64 23.88a11.94 11.94 0 0 1 2.33 9.58Zm-29.61-5.54L212 71.29a19.89 19.89 0 0 0-25.54-4.48l-54.77 32.7a12 12 0 0 1-10.3 1l-46-16.94l21 20.4a12 12 0 0 1-2.15 18.87L62 142.29a12 12 0 0 1-10 1.1l-13.35-4.5l24.31 23.8a19.89 19.89 0 0 0 23.6 2.65Z"/>
                    </svg>
                    Delivering Promise
                </div>

                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M180 216a12 12 0 0 1-12 12H24a12 12 0 1 1 0-24h144a12 12 0 0 1 12 12Zm71.79-126.12a12 12 0 0 1-5.64 8.1L98.75 186l-.13.07a43.74 43.74 0 0 1-52.2-5.94l-.19-.18l-36-35.25a20 20 0 0 1 5.55-32.7l2.94-1.44a12 12 0 0 1 9.12-.59l26.5 8.94l14.15-8.56l-18.07-17.57a20 20 0 0 1 5.7-33.05l.48-.2l7.15-2.7a12 12 0 0 1 8.4 0L124.29 76l49.93-29.8a43.8 43.8 0 0 1 56.43 10a1.84 1.84 0 0 1 .17.22l18.64 23.88a11.94 11.94 0 0 1 2.33 9.58Zm-29.61-5.54L212 71.29a19.89 19.89 0 0 0-25.54-4.48l-54.77 32.7a12 12 0 0 1-10.3 1l-46-16.94l21 20.4a12 12 0 0 1-2.15 18.87L62 142.29a12 12 0 0 1-10 1.1l-13.35-4.5l24.31 23.8a19.89 19.89 0 0 0 23.6 2.65Z"/>
                    </svg>
                    Stable and Punctual
                </div>

                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M180 216a12 12 0 0 1-12 12H24a12 12 0 1 1 0-24h144a12 12 0 0 1 12 12Zm71.79-126.12a12 12 0 0 1-5.64 8.1L98.75 186l-.13.07a43.74 43.74 0 0 1-52.2-5.94l-.19-.18l-36-35.25a20 20 0 0 1 5.55-32.7l2.94-1.44a12 12 0 0 1 9.12-.59l26.5 8.94l14.15-8.56l-18.07-17.57a20 20 0 0 1 5.7-33.05l.48-.2l7.15-2.7a12 12 0 0 1 8.4 0L124.29 76l49.93-29.8a43.8 43.8 0 0 1 56.43 10a1.84 1.84 0 0 1 .17.22l18.64 23.88a11.94 11.94 0 0 1 2.33 9.58Zm-29.61-5.54L212 71.29a19.89 19.89 0 0 0-25.54-4.48l-54.77 32.7a12 12 0 0 1-10.3 1l-46-16.94l21 20.4a12 12 0 0 1-2.15 18.87L62 142.29a12 12 0 0 1-10 1.1l-13.35-4.5l24.31 23.8a19.89 19.89 0 0 0 23.6 2.65Z"/>
                    </svg>
                    Priority Delivery
                </div>

                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M180 216a12 12 0 0 1-12 12H24a12 12 0 1 1 0-24h144a12 12 0 0 1 12 12Zm71.79-126.12a12 12 0 0 1-5.64 8.1L98.75 186l-.13.07a43.74 43.74 0 0 1-52.2-5.94l-.19-.18l-36-35.25a20 20 0 0 1 5.55-32.7l2.94-1.44a12 12 0 0 1 9.12-.59l26.5 8.94l14.15-8.56l-18.07-17.57a20 20 0 0 1 5.7-33.05l.48-.2l7.15-2.7a12 12 0 0 1 8.4 0L124.29 76l49.93-29.8a43.8 43.8 0 0 1 56.43 10a1.84 1.84 0 0 1 .17.22l18.64 23.88a11.94 11.94 0 0 1 2.33 9.58Zm-29.61-5.54L212 71.29a19.89 19.89 0 0 0-25.54-4.48l-54.77 32.7a12 12 0 0 1-10.3 1l-46-16.94l21 20.4a12 12 0 0 1-2.15 18.87L62 142.29a12 12 0 0 1-10 1.1l-13.35-4.5l24.31 23.8a19.89 19.89 0 0 0 23.6 2.65Z"/>
                    </svg>
                    Secure and Exclusive
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4 max-w-md mt-16">
            <div class="h-0.5 grow bg-primary"></div>
            <div class="text-3xl font-bold">Sea Freight</div>
            <div class="h-0.5 grow bg-primary"></div>
        </div>
        <p class="my-4">Consistent Quality Assurance</p>
        <div class="flex items-center mt-16">
            <div class="w-1/2 pr-8 text-justify">
                Long-term fixed cooperation contracts with airlines such as KE/OZ/PO/CZ, with guaranteed availability of
                fixed seats and sufficient timeliness.
                <br><br>
                Having multiple airline agency rights, a professional team operation, and a comprehensive air freight
                network service. Making full use of flight resources, fleet resources, port resources, and customs
                clearance resources, with an efficient intermodal network.
            </div>
            <div class="w-1/2 pl-8 grid grid-cols-2 gap-x-16 gap-y-8">
                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M9 4h5.446a1 1 0 0 1 .848.47L18.75 10h4.408a.5.5 0 0 1 .439.74L19.637 18H19a6.01 6.01 0 0 1-1.535-.198L20.63 12H3.4l1.048 5.824A6.012 6.012 0 0 1 3 18h-.545l-1.24-6.821A1 1 0 0 1 2.197 10H3V5a1 1 0 0 1 1-1h1V1h4v3Zm-4 6h11.392l-2.5-4H5v4ZM3 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 11 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 19 20h2v2h-2a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 11 22a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 3 22H1v-2h2Z"/></svg>
                    Stable Shipping Space
                </div>

                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M9 4h5.446a1 1 0 0 1 .848.47L18.75 10h4.408a.5.5 0 0 1 .439.74L19.637 18H19a6.01 6.01 0 0 1-1.535-.198L20.63 12H3.4l1.048 5.824A6.012 6.012 0 0 1 3 18h-.545l-1.24-6.821A1 1 0 0 1 2.197 10H3V5a1 1 0 0 1 1-1h1V1h4v3Zm-4 6h11.392l-2.5-4H5v4ZM3 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 11 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 19 20h2v2h-2a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 11 22a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 3 22H1v-2h2Z"/></svg>
                    Stable Price
                </div>

                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M9 4h5.446a1 1 0 0 1 .848.47L18.75 10h4.408a.5.5 0 0 1 .439.74L19.637 18H19a6.01 6.01 0 0 1-1.535-.198L20.63 12H3.4l1.048 5.824A6.012 6.012 0 0 1 3 18h-.545l-1.24-6.821A1 1 0 0 1 2.197 10H3V5a1 1 0 0 1 1-1h1V1h4v3Zm-4 6h11.392l-2.5-4H5v4ZM3 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 11 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 19 20h2v2h-2a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 11 22a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 3 22H1v-2h2Z"/></svg>
                    Stable Service
                </div>

                <div class="flex items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M9 4h5.446a1 1 0 0 1 .848.47L18.75 10h4.408a.5.5 0 0 1 .439.74L19.637 18H19a6.01 6.01 0 0 1-1.535-.198L20.63 12H3.4l1.048 5.824A6.012 6.012 0 0 1 3 18h-.545l-1.24-6.821A1 1 0 0 1 2.197 10H3V5a1 1 0 0 1 1-1h1V1h4v3Zm-4 6h11.392l-2.5-4H5v4ZM3 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 11 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 19 20h2v2h-2a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 11 22a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 3 22H1v-2h2Z"/></svg>
                    Stable DG Channel
                </div>

                <div class="flex items-center text-xl gap-4 col-span-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M9 4h5.446a1 1 0 0 1 .848.47L18.75 10h4.408a.5.5 0 0 1 .439.74L19.637 18H19a6.01 6.01 0 0 1-1.535-.198L20.63 12H3.4l1.048 5.824A6.012 6.012 0 0 1 3 18h-.545l-1.24-6.821A1 1 0 0 1 2.197 10H3V5a1 1 0 0 1 1-1h1V1h4v3Zm-4 6h11.392l-2.5-4H5v4ZM3 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 11 20a5.978 5.978 0 0 0 4-1.528A5.978 5.978 0 0 0 19 20h2v2h-2a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 11 22a7.963 7.963 0 0 1-4-1.07A7.963 7.963 0 0 1 3 22H1v-2h2Z"/></svg>
                    Formally declared of category 9 dangerous for export
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4 max-w-md mt-16">
            <div class="h-0.5 grow bg-primary"></div>
            <div class="text-3xl font-bold">Train Freight</div>
            <div class="h-0.5 grow bg-primary"></div>
        </div>
        <p class="my-4">Consistent Quality Assurance</p>
        <div class="flex items-center mt-16">
            <div class="w-1/2 pr-8 text-justify">
                Long-term fixed cooperation contracts with airlines such as KE/OZ/PO/CZ, with guaranteed availability of
                fixed seats and sufficient timeliness.
                <br><br>
                Having multiple airline agency rights, a professional team operation, and a comprehensive air freight
                network service. Making full use of flight resources, fleet resources, port resources, and customs
                clearance resources, with an efficient intermodal network.
            </div>
            <div class="w-1/2 pl-8 grid grid-cols-2 gap-x-16 gap-y-8">
                <div class="flex flex-col items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><path fill="currentColor" d="M184 24H72a32 32 0 0 0-32 32v128a32 32 0 0 0 32 32h8l-14.4 19.2a8 8 0 1 0 12.8 9.6L100 216h56l21.6 28.8a8 8 0 1 0 12.8-9.6L176 216h8a32 32 0 0 0 32-32V56a32 32 0 0 0-32-32ZM56 120V80h64v40Zm80-40h64v40h-64ZM72 40h112a16 16 0 0 1 16 16v8H56v-8a16 16 0 0 1 16-16Zm112 160H72a16 16 0 0 1-16-16v-48h144v48a16 16 0 0 1-16 16Zm-88-28a12 12 0 1 1-12-12a12 12 0 0 1 12 12Zm88 0a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z"/></svg>
                    Chongqing-Xinjiang Europe mFreight Train
                </div>

                <div class="flex flex-col items-center text-xl gap-4 col-span-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><path fill="currentColor" d="M184 24H72a32 32 0 0 0-32 32v128a32 32 0 0 0 32 32h8l-14.4 19.2a8 8 0 1 0 12.8 9.6L100 216h56l21.6 28.8a8 8 0 1 0 12.8-9.6L176 216h8a32 32 0 0 0 32-32V56a32 32 0 0 0-32-32ZM56 120V80h64v40Zm80-40h64v40h-64ZM72 40h112a16 16 0 0 1 16 16v8H56v-8a16 16 0 0 1 16-16Zm112 160H72a16 16 0 0 1-16-16v-48h144v48a16 16 0 0 1-16 16Zm-88-28a12 12 0 1 1-12-12a12 12 0 0 1 12 12Zm88 0a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z"/></svg>
                    Chongqing-Xinjiang Europe Freight Train
                </div>

                <div class="flex flex-col items-center text-xl gap-4 col-span-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><path fill="currentColor" d="M184 24H72a32 32 0 0 0-32 32v128a32 32 0 0 0 32 32h8l-14.4 19.2a8 8 0 1 0 12.8 9.6L100 216h56l21.6 28.8a8 8 0 1 0 12.8-9.6L176 216h8a32 32 0 0 0 32-32V56a32 32 0 0 0-32-32ZM56 120V80h64v40Zm80-40h64v40h-64ZM72 40h112a16 16 0 0 1 16 16v8H56v-8a16 16 0 0 1 16-16Zm112 160H72a16 16 0 0 1-16-16v-48h144v48a16 16 0 0 1-16 16Zm-88-28a12 12 0 1 1-12-12a12 12 0 0 1 12 12Zm88 0a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z"/></svg>
                    Yiwu-Xinjiang Europe Freight Train
                </div>
            </div>
        </div>
    </div>
@endsection

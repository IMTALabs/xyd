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
            <a href="#">Main Business Summary</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Main Business Summary</h1>

    <div class="mx-auto w-3/5 text-justify text-primary py-16">
        Our main business is undertaking diversified international freight transportation services, including
        sea, land, air, and rail. We focuse on meeting customer needs and pursuing perfect service. We rely on
        a fast transportation network and a comprehensive management system to establish in the freight
        industry and provide all-round "pickup-transport-delivery" one-to-one service.
    </div>

    <div class="bg-secondary py-16 text-primary">
        <h3 class="text-center text-3xl font-semibold">
            We has gained the recognition and trust<br>of a wide range of customers
        </h3>
        <p class="text-center mt-4">Stable timeliness and high-quality service are ahead of peers.</p>
        <div class="w-3/5 mx-auto mt-12 flex gap-16 justify-center">
            <div class="flex flex-col items-center text-xl gap-2 text-center w-1/5">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 36 36">
                    <path fill="currentColor"
                          d="M15 19.2c-3.2 0-5.8 2.6-5.8 5.8s2.6 5.8 5.8 5.8s5.8-2.6 5.8-5.8s-2.6-5.8-5.8-5.8zm0 10c-2.3 0-4.2-1.9-4.2-4.2s1.9-4.2 4.2-4.2s4.2 1.9 4.2 4.2s-1.9 4.2-4.2 4.2z"
                          class="clr-i-outline clr-i-outline-path-1"/>
                    <path fill="currentColor" d="M14 24h2v2h-2z" class="clr-i-outline clr-i-outline-path-2"/>
                    <path fill="currentColor"
                          d="M33 9H2v13.1C2 24.3 3.7 26 5.9 26H7v-2H5.9c-1 0-1.8-.8-1.9-1.9V15h22v7.1c0 1-.8 1.8-1.9 1.9H23v2h1.1c2.1 0 3.8-1.7 3.8-3.9V11h5c.6 0 1-.4 1-1s-.3-1-.9-1zm-7 4H4v-2h22v2z"
                          class="clr-i-outline clr-i-outline-path-3"/>
                    <path fill="none" d="M0 0h36v36H0z"/>
                </svg>
                Trailers
            </div>
            <div class="flex flex-col items-center text-xl gap-2 text-center w-1/5">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                          d="M15 18H9m12.636-5.042l-.279 1.937c-.487 3.388-.731 5.081-1.906 6.093C18.276 22 16.553 22 13.106 22h-2.212c-3.447 0-5.17 0-6.345-1.012c-1.175-1.012-1.419-2.705-1.906-6.093l-.279-1.937c-.38-2.637-.57-3.956-.029-5.083c.54-1.127 1.691-1.813 3.992-3.183l1.385-.825C9.8 2.622 10.846 2 12 2c1.154 0 2.199.622 4.288 1.867l1.385.825c2.3 1.37 3.451 2.056 3.992 3.183"/>
                </svg>
                Storage
            </div>
            <div class="flex flex-col items-center text-xl gap-2 text-center w-1/5">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M4 21q-.425 0-.713-.288T3 20q0-.425.288-.713T4 19h1V5q0-.825.588-1.413T7 3h10q.825 0 1.413.588T19 5v14h1q.425 0 .713.288T21 20q0 .425-.288.713T20 21H4Zm3-2h10V5H7v14Zm3-6q.425 0 .713-.288T11 12q0-.425-.288-.713T10 11q-.425 0-.713.288T9 12q0 .425.288.713T10 13ZM7 5v14V5Z"/>
                </svg>
                Door-to-door Delivery
            </div>
            <div class="flex flex-col items-center text-xl gap-2 text-center w-1/5">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h7.175q.4 0 .763.15t.637.425l4.85 4.85q.275.275.425.638t.15.762V12h-2V9h-4q-.425 0-.713-.288T13 8V4H6v16h6v2H6Zm0-2V4v16Zm12.3-5.475l1.075 1.075l-3.875 3.85v1.05h1.05l3.875-3.85l1.05 1.05l-4 4q-.15.15-.338.225T16.75 22H14.5q-.2 0-.35-.15T14 21.5v-2.25q0-.2.075-.388t.225-.337l4-4Zm3.175 3.175L18.3 14.525l1.45-1.45q.275-.275.7-.275t.7.275l1.775 1.775q.275.275.275.7t-.275.7l-1.45 1.45Z"/>
                </svg>
                Agent Customs Declaration And Inspection
            </div>
            <div class="flex flex-col items-center text-xl gap-2 text-center w-1/5">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 16 16">
                    <path fill="currentColor"
                          d="M8.205 2.006a.499.499 0 0 0-.38.175l-.05.036c-1.505-.442-3.212-.1-4.403 1.027c-1.057.999-1.461 2.381-1.213 3.674l-.015.014l-.671.635a1.347 1.347 0 0 0 0 1.98c.342.325.812.457 1.257.396c.064.233.193.454.386.637c.261.247.596.382.938.406c.025.323.168.64.43.887c.26.247.595.382.937.406c.025.323.168.64.43.887a1.545 1.545 0 0 0 1.946.123l.33.312c.58.55 1.523.55 2.104 0c.26-.247.404-.561.43-.883c.34-.025.672-.16.932-.406c.26-.246.404-.561.43-.883c.335-.027.662-.162.92-.405c.201-.191.333-.424.393-.669c.44.053.899-.08 1.236-.398a1.347 1.347 0 0 0 0-1.98l-.594-.562l.113-.42a3.824 3.824 0 0 0-.369-2.886c-.735-1.302-2.158-2.1-3.69-2.1H9.013a2.839 2.839 0 0 0-.138-.003h-.671Zm4.372 5.457l.486.48a.5.5 0 0 0 .101.076l.681.644a.412.412 0 0 1 0 .606a.472.472 0 0 1-.64 0l-1.14-1.077a.535.535 0 0 0-.726 0l-.012.01a.47.47 0 0 0 0 .688l.889.84a.413.413 0 0 1 0 .606a.473.473 0 0 1-.593.04a.536.536 0 0 0-.675.046a.467.467 0 0 0-.042.639a.412.412 0 0 1-.04.564a.473.473 0 0 1-.6.035a.536.536 0 0 0-.679.037a.467.467 0 0 0-.044.643c.14.17.127.417-.039.574a.48.48 0 0 1-.65 0l-.322-.304l.084-.079a1.347 1.347 0 0 0 0-1.98a1.513 1.513 0 0 0-.938-.406a1.363 1.363 0 0 0-.43-.887a1.514 1.514 0 0 0-.937-.407a1.363 1.363 0 0 0-.43-.887a1.532 1.532 0 0 0-1.257-.396a1.377 1.377 0 0 0-.386-.636a1.524 1.524 0 0 0-1.102-.41a3.065 3.065 0 0 1 .962-2.591a3.456 3.456 0 0 1 2.58-.923l-1.095.79a1.504 1.504 0 0 0-.294 2.178a1.64 1.64 0 0 0 2.22.3l1.347-.97h1.44l2.281 2.157ZM6.168 4.608l2.223-1.602h.485a1.836 1.836 0 0 1 .125.003h1.03c1.192 0 2.272.62 2.82 1.592c.353.623.458 1.34.302 2.026L10.94 4.449a.5.5 0 0 0-.35-.143H8.693a.5.5 0 0 0-.292.094L6.925 5.465a.64.64 0 0 1-.857-.116a.505.505 0 0 1 .1-.74Zm1.082 6.628a.472.472 0 0 1 .64.002a.412.412 0 0 1 0 .606l-.672.635a.472.472 0 0 1-.64 0a.412.412 0 0 1 0-.606l.672-.636Zm-.726-.687l-.673.637a.472.472 0 0 1-.641 0a.412.412 0 0 1-.01-.596l.01-.01l.671-.635l.01-.01a.472.472 0 0 1 .631.01a.412.412 0 0 1 .002.604Zm-1.37-1.291l-.67.634l-.011.01a.472.472 0 0 1-.63-.01a.412.412 0 0 1 0-.606l.67-.634a.472.472 0 0 1 .642 0a.412.412 0 0 1 .01.596l-.01.01ZM3.512 8.225l-.671.635a.472.472 0 0 1-.64 0a.412.412 0 0 1 0-.606l.67-.635a.472.472 0 0 1 .641 0a.412.412 0 0 1 0 .606Z"/>
                </svg>
                Agent Cargo Transportation Insurance
            </div>
        </div>
    </div>

    <div class="py-16 text-primary">
        <h3 class="text-center text-3xl font-semibold">
            Diversified international freight transportation business
        </h3>
        <p class="text-center mt-4">Attracted a growing user base both domestically and globally.</p>
        <div class="w-3/5 mx-auto mt-12 flex flex-wrap gap-y-16 justify-center">
            <div class="flex justify-center items-center text-xl gap-2 text-center w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 256 256"><path fill="currentColor" d="M180 216a12 12 0 0 1-12 12H24a12 12 0 1 1 0-24h144a12 12 0 0 1 12 12Zm71.79-126.12a12 12 0 0 1-5.64 8.1L98.75 186l-.13.07a43.74 43.74 0 0 1-52.2-5.94l-.19-.18l-36-35.25a20 20 0 0 1 5.55-32.7l2.94-1.44a12 12 0 0 1 9.12-.59l26.5 8.94l14.15-8.56l-18.07-17.57a20 20 0 0 1 5.7-33.05l.48-.2l7.15-2.7a12 12 0 0 1 8.4 0L124.29 76l49.93-29.8a43.8 43.8 0 0 1 56.43 10a1.84 1.84 0 0 1 .17.22l18.64 23.88a11.94 11.94 0 0 1 2.33 9.58Zm-29.61-5.54L212 71.29a19.89 19.89 0 0 0-25.54-4.48l-54.77 32.7a12 12 0 0 1-10.3 1l-46-16.94l21 20.4a12 12 0 0 1-2.15 18.87L62 142.29a12 12 0 0 1-10 1.1l-13.35-4.5l24.31 23.8a19.89 19.89 0 0 0 23.6 2.65Z"/></svg>
                Air Freight
            </div>
            <div class="flex justify-center items-center text-xl gap-2 text-center w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M2 21c.6.5 1.2 1 2.5 1c2.5 0 2.5-2 5-2c1.3 0 1.9.5 2.5 1c.6.5 1.2 1 2.5 1c2.5 0 2.5-2 5-2c1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4l-9 4c0 2.9.94 5.34 2.81 7.76"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6m7-3v4m0-12v3"/></g></svg>
                Sea Freight
            </div>
            <div class="flex justify-center items-center text-xl gap-2 text-center w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-1.25 0-2.125-.875T4 18H3q-.825 0-1.413-.588T1 16v-3q0-.825.588-1.413T3 11h9V7q0-.825.588-1.413T14 5h2V4q0-.425.288-.713T17 3h1q.425 0 .713.288T19 4v1h.55q.65 0 1.175.375t.725 1l1.45 4.3q.05.15.075.313t.025.337V16q0 .825-.588 1.413T21 18h-1q0 1.25-.875 2.125T17 21q-1.25 0-2.125-.875T14 18h-4q0 1.25-.875 2.125T7 21Zm0-2q.425 0 .713-.288T8 18q0-.425-.288-.713T7 17q-.425 0-.713.288T6 18q0 .425.288.713T7 19Zm10 0q.425 0 .713-.288T18 18q0-.425-.288-.713T17 17q-.425 0-.713.288T16 18q0 .425.288.713T17 19ZM3 13v3h1.775q.425-.475 1-.738T7 15q.65 0 1.225.263t1 .737H12v-3H3Zm11 3h.775q.425-.475 1-.738T17 15q.65 0 1.225.263t1 .737H21v-3h-7v3Zm0-5h6.9l-1.35-4H14v4ZM2 8.5v-2h-.25q-.325 0-.537-.213T1 5.75q0-.325.213-.537T1.75 5h8.5q.325 0 .537.213T11 5.75q0 .325-.213.537t-.537.213H10v2h.25q.325 0 .537.213T11 9.25q0 .325-.213.537T10.25 10h-8.5q-.325 0-.537-.213T1 9.25q0-.325.213-.537T1.75 8.5H2Zm1.5 0h1.75v-2H3.5v2Zm3.25 0H8.5v-2H6.75v2ZM3 13h9h-9Zm11 0h7h-7Z"/></svg>
                Land Freight
            </div>
            <div class="flex justify-center items-center text-xl gap-2 text-center w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M15 18H9m12.636-5.042l-.279 1.937c-.487 3.388-.731 5.081-1.906 6.093C18.276 22 16.553 22 13.106 22h-2.212c-3.447 0-5.17 0-6.345-1.012c-1.175-1.012-1.419-2.705-1.906-6.093l-.279-1.937c-.38-2.637-.57-3.956-.029-5.083c.54-1.127 1.691-1.813 3.992-3.183l1.385-.825C9.8 2.622 10.846 2 12 2c1.154 0 2.199.622 4.288 1.867l1.385.825c2.3 1.37 3.451 2.056 3.992 3.183"/></svg>
                Warehouse
            </div>
        </div>
    </div>
@endsection

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
            <a href="#">Consulting and Quotation</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Consulting and Quotation</h1>

    <div class="mx-auto w-3/4 text-primary py-16">
        <div class="flex items-center gap-4 max-w-lg">
            <div class="h-0.5 grow bg-primary"></div>
            <div class="text-3xl font-bold">Efficient working conditions</div>
            <div class="h-0.5 grow bg-primary"></div>
        </div>
        <div class="mx-auto w-3/5 text-justify text-primary py-16">
            Our company has its own customs clearance agency and is equipped with an EDI system that directly connects
            to the customs network. We have our own warehouse and strictly follow customer requirements for unloading
            and packing, with dedicated personnel responsible for monitoring the loading process and taking photos. We
            have established good relationships with the port area and have signed contracts for cooperation with major
            internation- al airlines, possessing strong partnership relations.
        </div>

        <div class="flex items-center gap-4 max-w-lg mt-16">
            <div class="h-0.5 grow bg-primary"></div>
            <div class="text-3xl font-bold">Perfect service plan</div>
            <div class="h-0.5 grow bg-primary"></div>
        </div>
        <div class="flex items-center mt-16">
            <div class="w-1/2 pr-8 text-justify flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="136" height="136" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 0 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0ZM3 10v4h1v-4H3Zm17 0v4h1v-4h-1ZM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.962 7.962 0 0 1-4.24-1.215Z"/>
                </svg>
            </div>
            <div class="w-1/2 pl-8">
                Through unified scheduling and coordination, timely cargo inquiries, and tracking, customers can easily
                enjoy the advantages of networked services. A well-established transportation network can effectively
                avoid the following situations:
                <br><br>
                - Higher charging standards of designated freight forwarders.
                <br>
                - Lack of systematic services, resulting in  poor user experience.
                <br><br>
                This can effectively reduce unnecessary troubles for domestic customers and improve customer
                satisfaction.
            </div>
        </div>
    </div>
@endsection

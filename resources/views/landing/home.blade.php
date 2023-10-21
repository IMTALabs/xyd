@extends('layouts.app')

@section('content')
    <div class="h-80 bg-secondary flex justify-center items-end">
        <div class="bg-primary text-center w-1/2 py-2 mb-1 text-secondary uppercase font-bold">
            Here is quick access to
        </div>
    </div>

    <div class="bg-primary text-secondary w-1/2 mx-auto px-16 py-4 flex items-center justify-between gap-4">
        <div class="flex flex-col gap-1">
            Tracking
            <form class="flex items-center gap-2">
                <input type="text" class="bg-secondary max-w-[10rem] text-primary px-2">
                <button class="bg-secondary w-6 h-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                         class="text-primary mx-auto">
                        <path fill="currentColor"
                              d="M16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.313t.712.288L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7L16.15 13Z"/>
                    </svg>
                </button>
            </form>
        </div>

        <div class="flex flex-col gap-1">
            Find an office
            <form class="flex items-center gap-2">
                <input type="text" class="bg-secondary max-w-[10rem] text-primary px-2">
                <button class="bg-secondary w-6 h-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                         class="text-primary mx-auto">
                        <path fill="currentColor"
                              d="M16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.313t.712.288L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7L16.15 13Z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="bg-secondary pt-28">
        <div class="h-0.5 bg-primary mt-8"></div>
        <div class="w-3/4 mx-auto text-primary bg-secondary -translate-y-14 px-4">
            <h2 class="font text-3xl w-fit">We strive to improve our services every
                day<br>to always have the most optimal solution for our customers</h2>
            <p class="mt-6">
                Our objective is to constantly develop our services in order to deliver effective logistical solutions
                while providing
                the most value to our customers. Our distinct value rests in the following services:
            </p>
            <div class="mt-16 flex justify-center gap-16">
                <div class="flex flex-col items-center gap-4 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12 1.998c5.524 0 10.002 4.478 10.002 10.002c0 .391-.023.777-.067 1.157a5.518 5.518 0 0 0-1.434-1.058V12c0-.689-.081-1.359-.236-2h-3.358c.05.518.08 1.05.09 1.591a5.461 5.461 0 0 0-1.496.508V12c0-.691-.036-1.36-.104-2.001H8.603a18.968 18.968 0 0 0 .135 5h4.137a5.464 5.464 0 0 0-.352 1.5H9.06c.652 2.415 1.786 4.002 2.94 4.002c.454 0 .906-.247 1.326-.694c.361.616.832 1.222 1.399 1.818c-.867.245-1.781.376-2.726.376C6.476 22.001 2 17.523 2 12C1.999 6.476 6.476 1.998 12 1.998ZM7.508 16.5H4.786a8.532 8.532 0 0 0 4.094 3.41c-.522-.82-.953-1.846-1.27-3.015l-.102-.395Zm-.414-6.501H3.736l-.005.017A8.523 8.523 0 0 0 3.5 12a8.48 8.48 0 0 0 .544 3h3.173A20.3 20.3 0 0 1 7 12c0-.684.032-1.354.095-2.001Zm1.787-5.91l-.023.008A8.531 8.531 0 0 0 4.25 8.5h3.048c.314-1.752.86-3.278 1.583-4.41Zm3.12-.591l-.117.005C10.62 3.62 9.397 5.621 8.83 8.5h6.342c-.566-2.87-1.783-4.869-3.045-4.995L12 3.498Zm3.12.59l.106.175c.67 1.112 1.177 2.572 1.475 4.237h3.048a8.533 8.533 0 0 0-4.339-4.29l-.29-.121ZM22.5 17a4.5 4.5 0 0 0-9 0c0 1.863 1.419 3.815 4.2 5.9a.5.5 0 0 0 .6 0c2.78-2.085 4.2-4.037 4.2-5.9Zm-6 0a1.5 1.5 0 1 1 2.999 0a1.5 1.5 0 0 1-3 0Z"/>
                    </svg>
                    Supply Chain Solutions
                </div>

                <div class="flex flex-col items-center gap-4 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M6 20q-1.25 0-2.125-.875T3 17H2q-.425 0-.713-.288T1 16V6q0-.825.588-1.413T3 4h12q.825 0 1.413.588T17 6v2h2q.475 0 .9.213t.7.587l2.2 2.925q.1.125.15.275t.05.325V16q0 .425-.288.713T22 17h-1q0 1.25-.875 2.125T18 20q-1.25 0-2.125-.875T15 17H9q0 1.25-.875 2.125T6 20Zm0-2q.425 0 .713-.288T7 17q0-.425-.288-.713T6 16q-.425 0-.713.288T5 17q0 .425.288.713T6 18Zm-3-3h.8q.425-.45.975-.725T6 14q.675 0 1.225.275T8.2 15H15V6H3v9Zm15 3q.425 0 .713-.288T19 17q0-.425-.288-.713T18 16q-.425 0-.713.288T17 17q0 .425.288.713T18 18Zm-1-5h4.25L19 10h-2v3Zm-8-2.5Z"/>
                    </svg>
                    A to Z Transportation Service
                </div>

                <div class="flex flex-col items-center gap-4 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M19.938 8H21a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-1.062A8.001 8.001 0 0 1 12 23v-2a6 6 0 0 0 6-6V9A6 6 0 0 0 6 9v7H3a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h1.062a8.001 8.001 0 0 1 15.876 0ZM3 10v4h1v-4H3Zm17 0v4h1v-4h-1ZM7.76 15.785l1.06-1.696A5.972 5.972 0 0 0 12 15a5.972 5.972 0 0 0 3.18-.911l1.06 1.696A7.963 7.963 0 0 1 12 17a7.962 7.962 0 0 1-4.24-1.215Z"/>
                    </svg>
                    Consulting and Quotation
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary pt-28">
        <div class="h-0.5 bg-secondary mt-8"></div>
        <div class="w-3/4 mx-auto text-secondary bg-primary -translate-y-5 px-4">
            <h2 class="font-semibold text-3xl w-fit">Our main channels</h2>
            <p class="mt-6">
                Our objective is to constantly develop our services in order to deliver effective logistical solutions
                while providing
                the most value to our customers. Our distinct value rests in the following services:
            </p>
            <div class="mt-16 flex justify-center gap-20 pb-16">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M.75 7.5h9.75l.75 1.5H1.5L.75 7.5m1 3h9.75l.75 1.5H2.5l-.75-1.5m16.25 8c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5s.67 1.5 1.5 1.5m1.5-9H17V12h4.46L19.5 9.5M8 18.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5s.67 1.5 1.5 1.5M20 8l3 4v5h-2c0 1.66-1.34 3-3 3s-3-1.34-3-3h-4c0 1.66-1.35 3-3 3c-1.66 0-3-1.34-3-3H3v-3.5h2V15h.76c.55-.61 1.35-1 2.24-1c.89 0 1.69.39 2.24 1H15V6H3c0-1.11.89-2 2-2h12v4h3Z"/>
                    </svg>
                    <span class="text-3xl mt-2">Land Freight</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="#" class="mt-4 text-sm">Read more</a>
                </div>

                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M228 216a12 12 0 0 1-12 12H72a12 12 0 0 1 0-24h144a12 12 0 0 1 12 12Zm24-80v24a12 12 0 0 1-12 12H61.07a43.72 43.72 0 0 1-42.14-31.36L4.86 93.75A20 20 0 0 1 24 68h8a12 12 0 0 1 8.48 3.51L61 92h15.27L69 70.32A20 20 0 0 1 88 44h8a12 12 0 0 1 8.48 3.51L149 92h59a44.05 44.05 0 0 1 44 44Zm-24 0a20 20 0 0 0-20-20h-64a12 12 0 0 1-8.48-3.51l-40.69-40.7l9.47 28.42A12 12 0 0 1 92.91 116H56a12 12 0 0 1-8.49-3.51L30.4 95.36l11.51 38.39A19.89 19.89 0 0 0 61.07 148H228Z"/>
                    </svg>
                    <span class="text-3xl mt-2">Air Freight</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="#" class="mt-4 text-sm">Read more</a>
                </div>

                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2-1a2.4 2.4 0 0 1 2-1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2-1a2.4 2.4 0 0 1 2-1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2-1M4 18l-1-5h18l-2 4M5 13V7h8l4 6M7 7V3H6"/>
                    </svg>
                    <span class="text-3xl mt-2">Sea Freight</span>
                    <span class="mt-1">— 10 business days —</span>
                    <a href="#" class="mt-4 text-sm">Read more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary h-80">

    </div>

    <div class="bg-primary pt-28 pb-20">
        <div class="h-0.5 bg-secondary mt-8"></div>
        <div class="w-3/4 mx-auto text-secondary bg-primary -translate-y-5 px-4">
            <h2 class="font-semibold text-3xl w-fit">Our latest news</h2>
            <div class="grid grid-cols-2 grid-rows-3 mt-16 gap-4">
                <div class="col-span-1 row-span-3 flex">
                    <img src="https://placehold.co/600x400" class="w-80 h-80 object-cover" alt="">
                    <div class="bg-black p-2">
                        <h3 class="text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            aliquam architecto
                            delectus</h3>
                        <a href="#" class="text-xs mt-2 block">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-1 flex">
                    <img src="https://placehold.co/600x400" class="w-24 aspect-square object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="bg-black px-8 py-1 rounded-full">New release</span>
                        10/10/2023
                        <h3 class="text-3xl mt-2 font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 text-sm block">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-1 flex">
                    <img src="https://placehold.co/600x400" class="w-24 aspect-square object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="bg-black px-8 py-1 rounded-full">New release</span>
                        10/10/2023
                        <h3 class="text-3xl mt-2 font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 text-sm block">Read more ...</a>
                    </div>
                </div>
                <div class="col-span-1 flex">
                    <img src="https://placehold.co/600x400" class="w-24 aspect-square object-cover" alt="">
                    <div class="ml-4 text-sm">
                        <span class="bg-black px-8 py-1 rounded-full">New release</span>
                        10/10/2023
                        <h3 class="text-3xl mt-2 font-medium">Headline of the article</h3>
                        <a href="#" class="mt-2 text-sm block">Read more ...</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="block mx-auto bg-secondary text-primary px-8 py-2 mt-8 w-fit">View all news</a>
    </div>

    <div class="bg-secondary pt-28">
        <h2 class="font-bold text-7xl mx-auto w-fit text-primary mb-10">IF YOU NEED HELP</h2>
        <div class="h-0.5 bg-primary mt-8"></div>
        <div class="w-1/2 mx-auto text-primary bg-secondary -translate-y-4 px-4">
            <h3 class="font-semibold text-3xl w-fit uppercase text-center">Please leave your information so we can
                assist you</h3>
            <p class="mt-6 text-center">Required fields *</p>
            <form action="" class="grid grid-cols-2 grid-rows-6 gap-4 mt-4">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Please enter your full name *">
                <div class="col-span-1 row-span-6 bg-primary"></div>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Where are you currently staying *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="What is your phone number *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="What is your email address *">
                <textarea
                    class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-2 bg-[#f5eccb] resize-none"
                    placeholder="Please enter your problem so that we can assist you *"></textarea>
            </form>
            <a href="#" class="block mx-auto bg-white text-primary px-8 py-2 mt-8 w-fit">Next</a>
        </div>

        <div class="h-0.5 bg-primary mt-8"></div>
        <div class="w-3/4 mx-auto text-primary -translate-y-4 px-4">
            <h3 class="font-semibold text-3xl w-fit uppercase text-center mx-auto bg-secondary px-4">Our
                cooperation</h3>
            <div class="grid grid-cols-6 mt-8 pb-4 gap-y-4 gap-x-8">
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
                <div class="bg-white col-span-1 p-4">
                    <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                         alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

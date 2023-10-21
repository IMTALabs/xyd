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
            <a href="#">Current Business Status & Long-term Vision</a>
        </ul>
    </div>

    <div class="w-3/4 mx-auto text-primary pb-16">
        <h2 class="text-3xl">Current Business Status</h2>

        <div class="flex mt-16 w-3/5 mx-auto">
            <div class="w-1/3 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aut deleniti dolore impedit
                incidunt ipsam laborum minima molestias obcaecati odio odit placeat, quis velit vero? Delectus ex modi
                possimus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolor ex expedita facilis
                illum in maxime nam nulla optio perferendis possimus praesentium, provident quisquam repellat sequi.
                Consectetur numquam quis quod.
            </div>
        </div>
    </div>

    <div class="bg-secondary pt-16">
        <div class="w-3/4 mx-auto text-primary pb-16">
            <h2 class="text-3xl">Long-term Vision</h2>

            <div class="mt-16 w-3/5 mx-auto">
                <h3 class="text-3xl text-center">Lorem ipsum</h3>
                <h4 class="text-xl text-center mt-4">Lorem ipsum Lorem ipsum</h4>
                <p class="text-sm mt-8 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, excepturi harum inventore iusto nam
                    nostrum quae quisquam reiciendis sapiente, sed sit soluta veniam voluptate. Beatae commodi eius
                    explicabo magnam nam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda
                    esse facere ipsum laborum, nesciunt non placeat tempora. Nostrum perferendis ratione tenetur. Culpa
                    ex hic iusto minus quo rem veniam?</p>
                <p class="text-sm mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, excepturi harum inventore iusto nam
                    nostrum quae quisquam reiciendis sapiente, sed sit soluta veniam voluptate. Beatae commodi eius
                    explicabo magnam nam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda
                    esse facere ipsum laborum, nesciunt non placeat tempora. Nostrum perferendis ratione tenetur. Culpa
                    ex hic iusto minus quo rem veniam?</p>
            </div>
        </div>
    </div>
@endsection

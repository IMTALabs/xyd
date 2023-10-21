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
            <a href="#">Business Enterprise</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Business Enterprise</h1>

    <div class="mx-auto w-3/5 text-justify text-primary py-16">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deserunt doloribus facilis modi ratione
        sapiente voluptate. Eaque, eos porro? Amet dolor dolore explicabo quibusdam quos reiciendis vel voluptates?
        Doloremque, provident? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at blanditiis cum ex
        expedita facilis, harum illo in incidunt iure, laboriosam laborum molestias, necessitatibus nobis quo ratione
        reiciendis rem voluptas!
    </div>
@endsection

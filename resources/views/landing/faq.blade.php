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
            <a href="#">Help Center</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">FAQ</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-3/4 text-primary font-medium">Frequently Asked Question</h1>

    <div class="mt-8 w-3/4 mx-auto pb-16 space-y-8">
        <div x-data="{
            collapse: true,
            toggle() {
                this.collapse = !this.collapse
            }
        }">
            <h2 class="flex items-center gap-2 text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                <svg class="transition-all" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
            </h2>
            <p class="mt-4" :class="{'hidden': collapse}">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam architecto culpa dolor
                doloremque dolores, excepturi expedita magni minus nam natus nisi nostrum praesentium quisquam
                recusandae voluptatibus. Fugit, iusto!
            </p>
        </div>
        <div x-data="{
            collapse: true,
            toggle() {
                this.collapse = !this.collapse
            }
        }">
            <h2 class="flex items-center gap-2 text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                <svg class="transition-all" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
            </h2>
            <p class="mt-4" :class="{'hidden': collapse}">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam architecto culpa dolor
                doloremque dolores, excepturi expedita magni minus nam natus nisi nostrum praesentium quisquam
                recusandae voluptatibus. Fugit, iusto!
            </p>
        </div>
        <div x-data="{
            collapse: true,
            toggle() {
                this.collapse = !this.collapse
            }
        }">
            <h2 class="flex items-center gap-2 text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                <svg class="transition-all" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
            </h2>
            <p class="mt-4" :class="{'hidden': collapse}">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam architecto culpa dolor
                doloremque dolores, excepturi expedita magni minus nam natus nisi nostrum praesentium quisquam
                recusandae voluptatibus. Fugit, iusto!
            </p>
        </div>
        <div x-data="{
            collapse: true,
            toggle() {
                this.collapse = !this.collapse
            }
        }">
            <h2 class="flex items-center gap-2 text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                <svg class="transition-all" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
            </h2>
            <p class="mt-4" :class="{'hidden': collapse}">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam architecto culpa dolor
                doloremque dolores, excepturi expedita magni minus nam natus nisi nostrum praesentium quisquam
                recusandae voluptatibus. Fugit, iusto!
            </p>
        </div>
        <div x-data="{
            collapse: true,
            toggle() {
                this.collapse = !this.collapse
            }
        }">
            <h2 class="flex items-center gap-2 text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                <svg class="transition-all" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
            </h2>
            <p class="mt-4" :class="{'hidden': collapse}">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam architecto culpa dolor
                doloremque dolores, excepturi expedita magni minus nam natus nisi nostrum praesentium quisquam
                recusandae voluptatibus. Fugit, iusto!
            </p>
        </div>
        <div x-data="{
            collapse: true,
            toggle() {
                this.collapse = !this.collapse
            }
        }">
            <h2 class="flex items-center gap-2 text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                <svg class="transition-all" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
                     width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
            </h2>
            <p class="mt-4" :class="{'hidden': collapse}">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam architecto culpa dolor
                doloremque dolores, excepturi expedita magni minus nam natus nisi nostrum praesentium quisquam
                recusandae voluptatibus. Fugit, iusto!
            </p>
        </div>

        <h3 class="text-3xl !mt-16 text-primary">If you have questions, please leave it here so we could help you understand</h3>
    </div>

    <div class="bg-[#4f2912] flex items-center justify-between px-32 text-secondary gap-16 py-3">
        <h2 class="grow text-3xl">Get the latest information from XYD Express</h2>

        <div class="relative w-1/2 max-w-2xl">
            <input type="text"
                   class="placeholder:text-primary placeholder:font-medium bg-secondary px-4 pr-8 py-2 w-full"
                   placeholder="Enter search keyword">
            <svg class="absolute right-2 top-1/2 -translate-y-1/2 text-primary" xmlns="http://www.w3.org/2000/svg"
                 width="20"
                 height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/>
            </svg>
        </div>
    </div>
@endsection

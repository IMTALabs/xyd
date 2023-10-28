@extends('layouts.app')

@section('content')
    <img src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-20.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full lg:w-3/4 mx-auto flex items-center">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Help Center') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('FAQ') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full lg:w-3/4 text-primary font-medium">{{ __('Frequently Asked Question') }}</h1>

        <div class="mt-8 w-full lg:w-3/4 mx-auto pb-16 space-y-8">
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
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
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
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
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
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
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
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
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
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
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none" @click="toggle()">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cumque?
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}" xmlns="http://www.w3.org/2000/svg"
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
        </div>
    </div>
@endsection

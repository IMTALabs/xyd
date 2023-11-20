@extends('layouts.app')

@section('content')
    <img  data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-03.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="container mx-auto flex items-center">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Business Enterprise') }}</a>
            </ul>
        </div>

        <h1 class="container mx-auto text-3xl font-medium text-primary">{{ __('Business Enterprise') }}</h1>

        <div class="container mx-auto py-16 text-justify text-primary">
            {{ __("We always work to prioritize client benefit and satisfaction in our business approach. The enthusiastic team at YDX Express works hard to provide partners with the greatest international freight forwarding service possible. We aim to provide the best solutions possible that are dependable, affordable, and specially tailored to meet the various requirements of each specific audience. ") }}
        </div>

        <div class="container mx-auto mb-16 overflow-hidden max-lg:hidden">
            <div class="relative mx-auto flex aspect-square w-2/5 translate-y-1/3 items-center justify-center rounded-full bg-primary">
                <div class="w-[calc(100%-1rem)] aspect-square bg-white rounded-full">
                    <div class="relative top-1/3 mx-auto w-64 text-center text-5xl font-bold text-primary">{{ __('Win - Win Relationship') }}</div>
                </div>

                <div class="flex items-center gap-4 absolute right-[calc(100%+3rem)]">
                    <div class="flex flex-col min-w-fit items-end text-primary">
                        <span class="text-xl font-medium">{{ __('Business Philosophy') }}</span>
                        <span class="text-sm">{{ __('Building a career with integrity, developing by brand.') }}</span>
                    </div>
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full shadow-xl bg-secondary">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                      d="M172 232a4 4 0 0 1-4 4H88a4 4 0 0 1 0-8h80a4 4 0 0 1 4 4Zm40-128a83.59 83.59 0 0 1-32.11 66.06A20.2 20.2 0 0 0 172 186v6a12 12 0 0 1-12 12H96a12 12 0 0 1-12-12v-6a20 20 0 0 0-7.76-15.81A83.58 83.58 0 0 1 44 104.47C43.75 59 80.52 21.09 126 20a84 84 0 0 1 86 84Zm-8 0a76 76 0 0 0-77.83-76C85 29 51.77 63.27 52 104.43a75.62 75.62 0 0 0 29.17 59.43A28 28 0 0 1 92 186v6a4 4 0 0 0 4 4h64a4 4 0 0 0 4-4v-6a28.14 28.14 0 0 1 10.94-22.2A75.62 75.62 0 0 0 204 104Zm-67.34-51.94a4 4 0 0 0-1.32 7.88C153.53 63 169 78.45 172.06 96.67A4 4 0 0 0 176 100a3.88 3.88 0 0 0 .67-.06a4 4 0 0 0 3.27-4.61a53.51 53.51 0 0 0-43.28-43.27Z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-4 absolute lg:right-[calc(100%)] top-8">
                    <div class="flex flex-col min-w-fit items-end text-primary">
                        <span class="text-xl font-medium">{{ __('Service Philosophy') }}</span>
                        <span class="text-sm">{{ __("Beginning with user's demand and ending with user's satisfaction.") }}</span>
                    </div>
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full shadow-xl bg-secondary">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><path fill="currentColor" d="M237 147.44a4 4 0 0 1-5.48-1.4c-8.33-14-20.93-22-34.56-22a4 4 0 0 1-1.2-.2a36.76 36.76 0 0 1-3.8.2a4 4 0 0 1 0-8a28 28 0 1 0-27.12-35a4 4 0 0 1-7.75-2a36 36 0 1 1 54 39.48c10.81 3.85 20.51 12 27.31 23.48a4 4 0 0 1-1.4 5.44ZM187.46 214a4 4 0 0 1-1.46 5.46a3.93 3.93 0 0 1-2 .54a4 4 0 0 1-3.46-2a61 61 0 0 0-105.08 0a4 4 0 0 1-6.92-4a68.35 68.35 0 0 1 39.19-31a44 44 0 1 1 40.54 0a68.35 68.35 0 0 1 39.19 31ZM128 180a36 36 0 1 0-36-36a36 36 0 0 0 36 36Zm-64-64a28 28 0 1 1 27.12-35a4 4 0 0 0 7.75-2a36 36 0 1 0-53.57 39.75a63.55 63.55 0 0 0-32.5 22.85a4 4 0 0 0 6.4 4.8A55.55 55.55 0 0 1 64 124a4 4 0 0 0 0-8Z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col-reverse items-center gap-4 absolute left-1/2 -top-32 -translate-x-1/2">
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full shadow-xl bg-secondary">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><path fill="currentColor" d="M107.19 159a56 56 0 1 0-46.38 0a91.83 91.83 0 0 0-53.93 38.81a4 4 0 1 0 6.7 4.37a84 84 0 0 1 140.84 0a4 4 0 1 0 6.7-4.37A91.83 91.83 0 0 0 107.19 159ZM36 108a48 48 0 1 1 48 48a48.05 48.05 0 0 1-48-48Zm212 95.35a4 4 0 0 1-5.53-1.17A83.81 83.81 0 0 0 172 164a4 4 0 0 1 0-8a48 48 0 1 0-17.82-92.58a4 4 0 1 1-3-7.43a56 56 0 0 1 44 103a91.83 91.83 0 0 1 53.93 38.86a4 4 0 0 1-1.11 5.5Z"/></svg>
                        </div>
                    </div>
                    <div class="flex flex-col min-w-fit text-primary text-center">
                        <span class="text-xl font-medium">{{ __('Manage Philosophy') }}</span>
                        <span class="text-sm">{{ __('Details determine success or failure, responsibility builds a career.') }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-4 absolute lg:left-[calc(100%-6rem)] top-8">
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full shadow-xl bg-secondary">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 3.5v11a2 2 0 0 0 2 2h11"/><path d="m6.5 12.5l3-3l2 2l5-5"/><path d="M16.5 9.5v-3h-3"/></g></svg>
                        </div>
                    </div>
                    <div class="flex flex-col min-w-fit text-primary">
                        <span class="text-xl font-medium">{{ __('Working Philosophy') }}</span>
                        <span class="text-sm">{{ __('We rely on the company for the survival, the company relies on me for development.') }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-4 absolute left-[calc(100%-3rem)]">
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full shadow-xl bg-secondary">
                        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-primary text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><path fill="currentColor" d="M128 84a44 44 0 1 0 44 44a44.05 44.05 0 0 0-44-44Zm0 80a36 36 0 1 1 36-36a36 36 0 0 1-36 36Zm83.93-32.49q.13-3.51 0-7l15.83-19.79a4 4 0 0 0 .75-3.53A103.64 103.64 0 0 0 218 75.9a4 4 0 0 0-3-2l-25.19-2.8a88.885 88.885 0 0 0-4.95-4.95L182.07 41a4 4 0 0 0-2-3a104 104 0 0 0-25.25-10.5a4 4 0 0 0-3.53.74l-19.78 15.83q-3.51-.14-7 0L104.7 28.24a4 4 0 0 0-3.53-.75A103.64 103.64 0 0 0 75.9 38a4 4 0 0 0-2 3l-2.8 25.19a88.885 88.885 0 0 0-4.95 4.95L41 73.93a4 4 0 0 0-3 2a104 104 0 0 0-10.5 25.25a4 4 0 0 0 .74 3.53l15.83 19.78q-.14 3.51 0 7L28.24 151.3a4 4 0 0 0-.75 3.53A103.64 103.64 0 0 0 38 180.1a4 4 0 0 0 3 2l25.19 2.8c1.58 1.71 3.24 3.37 4.95 4.95l2.8 25.2a4 4 0 0 0 2 3a104 104 0 0 0 25.28 10.46a4 4 0 0 0 3.53-.74l19.78-15.83q3.51.13 7 0l19.79 15.83a4 4 0 0 0 2.5.88a4 4 0 0 0 1-.13A103.64 103.64 0 0 0 180.1 218a4 4 0 0 0 2-3l2.8-25.19c1.71-1.58 3.37-3.24 4.95-4.95l25.2-2.8a4 4 0 0 0 3-2a104 104 0 0 0 10.46-25.28a4 4 0 0 0-.74-3.53Zm.17 42.83l-24.67 2.74a4 4 0 0 0-2.55 1.32a76.2 76.2 0 0 1-6.48 6.48a4 4 0 0 0-1.32 2.55l-2.74 24.66a95.45 95.45 0 0 1-19.64 8.15l-19.38-15.51a4 4 0 0 0-2.5-.87h-.24a73.67 73.67 0 0 1-9.16 0a4 4 0 0 0-2.74.87l-19.37 15.5a95.33 95.33 0 0 1-19.65-8.13l-2.74-24.67a4 4 0 0 0-1.32-2.55a76.2 76.2 0 0 1-6.48-6.48a4 4 0 0 0-2.55-1.32l-24.66-2.74a95.45 95.45 0 0 1-8.15-19.64l15.51-19.38a4 4 0 0 0 .87-2.74a77.76 77.76 0 0 1 0-9.16a4 4 0 0 0-.87-2.74l-15.5-19.37a95.33 95.33 0 0 1 8.13-19.65l24.67-2.74a4 4 0 0 0 2.55-1.32a76.2 76.2 0 0 1 6.48-6.48a4 4 0 0 0 1.32-2.55l2.74-24.66a95.45 95.45 0 0 1 19.64-8.15l19.38 15.51a4 4 0 0 0 2.74.87a73.67 73.67 0 0 1 9.16 0a4 4 0 0 0 2.74-.87l19.37-15.5a95.33 95.33 0 0 1 19.65 8.13l2.74 24.67a4 4 0 0 0 1.32 2.55a76.2 76.2 0 0 1 6.48 6.48a4 4 0 0 0 2.55 1.32l24.66 2.74a95.45 95.45 0 0 1 8.15 19.64l-15.51 19.38a4 4 0 0 0-.87 2.74a77.76 77.76 0 0 1 0 9.16a4 4 0 0 0 .87 2.74l15.5 19.37a95.33 95.33 0 0 1-8.13 19.65Z"/></svg>
                        </div>
                    </div>
                    <div class="flex flex-col min-w-fit text-primary">
                        <span class="text-xl font-medium">{{ __('Marketing Philosophy') }}</span>
                        <span class="text-sm">{{ __('Creating value for users and increasing profit for Enterprise.') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:hidden flex flex-col gap-8 container mx-auto pb-16">
            <div class="flex gap-4 items-center">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                  d="M172 232a4 4 0 0 1-4 4H88a4 4 0 0 1 0-8h80a4 4 0 0 1 4 4Zm40-128a83.59 83.59 0 0 1-32.11 66.06A20.2 20.2 0 0 0 172 186v6a12 12 0 0 1-12 12H96a12 12 0 0 1-12-12v-6a20 20 0 0 0-7.76-15.81A83.58 83.58 0 0 1 44 104.47C43.75 59 80.52 21.09 126 20a84 84 0 0 1 86 84Zm-8 0a76 76 0 0 0-77.83-76C85 29 51.77 63.27 52 104.43a75.62 75.62 0 0 0 29.17 59.43A28 28 0 0 1 92 186v6a4 4 0 0 0 4 4h64a4 4 0 0 0 4-4v-6a28.14 28.14 0 0 1 10.94-22.2A75.62 75.62 0 0 0 204 104Zm-67.34-51.94a4 4 0 0 0-1.32 7.88C153.53 63 169 78.45 172.06 96.67A4 4 0 0 0 176 100a3.88 3.88 0 0 0 .67-.06a4 4 0 0 0 3.27-4.61a53.51 53.51 0 0 0-43.28-43.27Z"/>
                        </svg>
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Business Philosophy') }}</span>
                    <span class="text-sm">{{ __('Building a career with integrity, developing by brand.') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><path fill="currentColor" d="M237 147.44a4 4 0 0 1-5.48-1.4c-8.33-14-20.93-22-34.56-22a4 4 0 0 1-1.2-.2a36.76 36.76 0 0 1-3.8.2a4 4 0 0 1 0-8a28 28 0 1 0-27.12-35a4 4 0 0 1-7.75-2a36 36 0 1 1 54 39.48c10.81 3.85 20.51 12 27.31 23.48a4 4 0 0 1-1.4 5.44ZM187.46 214a4 4 0 0 1-1.46 5.46a3.93 3.93 0 0 1-2 .54a4 4 0 0 1-3.46-2a61 61 0 0 0-105.08 0a4 4 0 0 1-6.92-4a68.35 68.35 0 0 1 39.19-31a44 44 0 1 1 40.54 0a68.35 68.35 0 0 1 39.19 31ZM128 180a36 36 0 1 0-36-36a36 36 0 0 0 36 36Zm-64-64a28 28 0 1 1 27.12-35a4 4 0 0 0 7.75-2a36 36 0 1 0-53.57 39.75a63.55 63.55 0 0 0-32.5 22.85a4 4 0 0 0 6.4 4.8A55.55 55.55 0 0 1 64 124a4 4 0 0 0 0-8Z"/></svg>
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Service Philosophy') }}</span>
                    <span class="text-sm">{{ __("Beginning with user's demand and ending with user's satisfaction.") }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><path fill="currentColor" d="M107.19 159a56 56 0 1 0-46.38 0a91.83 91.83 0 0 0-53.93 38.81a4 4 0 1 0 6.7 4.37a84 84 0 0 1 140.84 0a4 4 0 1 0 6.7-4.37A91.83 91.83 0 0 0 107.19 159ZM36 108a48 48 0 1 1 48 48a48.05 48.05 0 0 1-48-48Zm212 95.35a4 4 0 0 1-5.53-1.17A83.81 83.81 0 0 0 172 164a4 4 0 0 1 0-8a48 48 0 1 0-17.82-92.58a4 4 0 1 1-3-7.43a56 56 0 0 1 44 103a91.83 91.83 0 0 1 53.93 38.86a4 4 0 0 1-1.11 5.5Z"/></svg>
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Manage Philosophy') }}</span>
                    <span class="text-sm">{{ __('Details determine success or failure, responsibility builds a career.') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 3.5v11a2 2 0 0 0 2 2h11"/><path d="m6.5 12.5l3-3l2 2l5-5"/><path d="M16.5 9.5v-3h-3"/></g></svg>
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Working Philosophy') }}</span>
                    <span class="text-sm">{{ __('We rely on the company for the survival, the company relies on me for development.') }}</span>
                </div>
            </div>

            <div class="flex gap-4 items-center">
                <div class="w-20 h-20 shrink-0 rounded-full shadow-xl bg-secondary flex items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256"><path fill="currentColor" d="M128 84a44 44 0 1 0 44 44a44.05 44.05 0 0 0-44-44Zm0 80a36 36 0 1 1 36-36a36 36 0 0 1-36 36Zm83.93-32.49q.13-3.51 0-7l15.83-19.79a4 4 0 0 0 .75-3.53A103.64 103.64 0 0 0 218 75.9a4 4 0 0 0-3-2l-25.19-2.8a88.885 88.885 0 0 0-4.95-4.95L182.07 41a4 4 0 0 0-2-3a104 104 0 0 0-25.25-10.5a4 4 0 0 0-3.53.74l-19.78 15.83q-3.51-.14-7 0L104.7 28.24a4 4 0 0 0-3.53-.75A103.64 103.64 0 0 0 75.9 38a4 4 0 0 0-2 3l-2.8 25.19a88.885 88.885 0 0 0-4.95 4.95L41 73.93a4 4 0 0 0-3 2a104 104 0 0 0-10.5 25.25a4 4 0 0 0 .74 3.53l15.83 19.78q-.14 3.51 0 7L28.24 151.3a4 4 0 0 0-.75 3.53A103.64 103.64 0 0 0 38 180.1a4 4 0 0 0 3 2l25.19 2.8c1.58 1.71 3.24 3.37 4.95 4.95l2.8 25.2a4 4 0 0 0 2 3a104 104 0 0 0 25.28 10.46a4 4 0 0 0 3.53-.74l19.78-15.83q3.51.13 7 0l19.79 15.83a4 4 0 0 0 2.5.88a4 4 0 0 0 1-.13A103.64 103.64 0 0 0 180.1 218a4 4 0 0 0 2-3l2.8-25.19c1.71-1.58 3.37-3.24 4.95-4.95l25.2-2.8a4 4 0 0 0 3-2a104 104 0 0 0 10.46-25.28a4 4 0 0 0-.74-3.53Zm.17 42.83l-24.67 2.74a4 4 0 0 0-2.55 1.32a76.2 76.2 0 0 1-6.48 6.48a4 4 0 0 0-1.32 2.55l-2.74 24.66a95.45 95.45 0 0 1-19.64 8.15l-19.38-15.51a4 4 0 0 0-2.5-.87h-.24a73.67 73.67 0 0 1-9.16 0a4 4 0 0 0-2.74.87l-19.37 15.5a95.33 95.33 0 0 1-19.65-8.13l-2.74-24.67a4 4 0 0 0-1.32-2.55a76.2 76.2 0 0 1-6.48-6.48a4 4 0 0 0-2.55-1.32l-24.66-2.74a95.45 95.45 0 0 1-8.15-19.64l15.51-19.38a4 4 0 0 0 .87-2.74a77.76 77.76 0 0 1 0-9.16a4 4 0 0 0-.87-2.74l-15.5-19.37a95.33 95.33 0 0 1 8.13-19.65l24.67-2.74a4 4 0 0 0 2.55-1.32a76.2 76.2 0 0 1 6.48-6.48a4 4 0 0 0 1.32-2.55l2.74-24.66a95.45 95.45 0 0 1 19.64-8.15l19.38 15.51a4 4 0 0 0 2.74.87a73.67 73.67 0 0 1 9.16 0a4 4 0 0 0 2.74-.87l19.37-15.5a95.33 95.33 0 0 1 19.65 8.13l2.74 24.67a4 4 0 0 0 1.32 2.55a76.2 76.2 0 0 1 6.48 6.48a4 4 0 0 0 2.55 1.32l24.66 2.74a95.45 95.45 0 0 1 8.15 19.64l-15.51 19.38a4 4 0 0 0-.87 2.74a77.76 77.76 0 0 1 0 9.16a4 4 0 0 0 .87 2.74l15.5 19.37a95.33 95.33 0 0 1-8.13 19.65Z"/></svg>
                    </div>
                </div>
                <div class="text-primary flex flex-col">
                    <span class="text-xl font-medium">{{ __('Marketing Philosophy') }}</span>
                    <span class="text-sm">{{ __('Creating value for users and increasing profit for Enterprise.') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <img data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-06.png') }}" class="w-full" alt="">

    <div class="py-16 text-primary">
        <ul class="w-full container mx-auto flex items-center max-lg:px-4">
            <a href="{{ route('home') }}">{{ __("Home") }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor"
                      d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
            </svg>
            <a href="#">{{ __('Our Quality') }}</a>
        </ul>
    </div>

    <h1 class="text-3xl mx-auto w-full container text-primary font-medium max-lg:px-4 truncate">
        {{ __('Bring the best quality') }}
    </h1>
    <div class="mx-auto w-full container text-justify text-primary pb-16 mt-12 max-lg:px-4">
        {{ __('After nearly 2 decades of establishment and development, we have had to strive tirelessly every day. We are honored to have those efforts recognized with the following certificates:') }}
    </div>

    <div class="flex max-lg:flex-col-reverse w-full container mx-auto max-lg:px-4" x-data="{
        tab: 0,
        images: [
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaANGr3JruUhaNCQcJqGvDeNSppFlDt62jsGpVAU9s5jXKzH6TLL9UCXJQiIzrbnbU6orlDq6M5baNiTBm7-DaBYJTVkJQ=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaAY7jZP_K5B21RnzvFXor1TktjBx0nH1N_85jta5ZIDisX8L9GhLZMDlg2NtCn6CSzQFJn7WVhCTX7OXzOAv0nZeEU1=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaB3ZI3ym8XKNPVYOFOOZuifubnyklalV-uveNZYX8k6hN24GBBOt70Y-5WTpS4cVpT7cxUJQMqsgks93u64pDuEi2Ai=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaCYP0O46Tp_XDKPxWi9Ij5zvo4zxh-7khaQY9vIHF3sMHCU50ZHpBnsSaqMvEIVCENJF9-kxgkoLN9Vhv4-MNM-zVWT=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaCtbTYu-kM6yEYOAReqsPKRvjA2lQBzA8KSbDJbmBwtWzjNzYgz0wjA-JRPzdQsyWHs0o1FJlTinIq-mdQBqnfiqMMuTw=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaDw1nM6IaeZbOvW8VMVBWCpeue2YITA5xWunwWh1z5TtO5EnvJnSx672v_uIj9Yo_5KvybAeykpWtCDMFg3kSUH75qx=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaD4cJoF-Qjzmu7JMxII7qoE6NC7guGh80M0CF8Prn4ATNnnw-kIaELl2YTbpvH5rx7ShGO5hbA_lFt-B4TbOxSFOSyi3A=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaD1yjDlLeail9VVQRwnAiHM51kx7PAeSiYrZBsTCnEHT8tzGKI-4AwIk8KMCuhjKddeJ0yG2-ZWvacUB--GyH7d1E5wdw=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaClaJkP_AQkDN8wvUdUGa_MTF1Vv5DrDAJUlYPHEeSucz9LBo5CGqQG6uEcsSVI3fg0ppakTNBKz2uys3YuWNvi3cfn=w1830-h975',
            'https://lh3.googleusercontent.com/u/0/drive-viewer/AK7aPaCsfTZEhDNirCCggTwmRVwzjq9XeYo79SwmJLbuFWak4vdAchzunYi97rJblHP65ZzB8Bw8uFQa-Hhc-F7rGtkTNCaIOQ=w1830-h975'
        ]
    }">
        <div class="mb-4 border-l-2 py-8 border-primary text-primary w-full lg:w-2/3 mt-4 shrink-0">
            <div @click="tab = 0" @mouseenter="tab = 0" class="flex items-center gap-4 text-xl font-medium cursor-pointer">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Member unit of Shenzhen Battery Industry Association') }}
            </div>
            <div @click="tab = 1" @mouseenter="tab = 1" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Executive Vice President Unit of Fuhai Street Express Logistics Association, Baoan Distric') }}
            </div>
            <div @click="tab = 2" @mouseenter="tab = 2" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Vice president unit of Bantian Cross-border E-commerce Logistics Association') }}
            </div>
            <div @click="tab = 3" @mouseenter="tab = 3" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Member unit of Shenzhen Toy Industry Association') }}
            </div>
            <div @click="tab = 4" @mouseenter="tab = 4" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Outstanding Contribution Unit of Shenzhen Aviation Industry Association') }}
            </div>
            <div @click="tab = 5" @mouseenter="tab = 5" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Outstanding exhibitors at the 3rd Shenzhen Airlines Association International Logistics') }}
            </div>
            <div @click="tab = 6" @mouseenter="tab = 6" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Member unit of Chengdu Cross-border E-Commerce Association') }}
            </div>
            <div @click="tab = 7" @mouseenter="tab = 7" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Excellent Logistics and Supply Chain Service Provider of China Shenzhen Expo') }}
            </div>
            <div @click="tab = 8" @mouseenter="tab = 8" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Top 20 FBA service providers at China Shenzhen Expo') }}
            </div>
            <div @click="tab = 9" @mouseenter="tab = 9" class="flex items-center gap-4 text-xl font-medium cursor-pointer mt-8">
                <div class="w-5 h-5 bg-primary rounded-full -translate-x-2.5 shrink-0"></div>
                {{ __('Guangdong Province Water Transport Business Registration Certificate') }}
            </div>
        </div>
        <img :src="images[tab]" class="w-full lg:w-1/3 object-contain my-4" alt="">
    </div>
@endsection

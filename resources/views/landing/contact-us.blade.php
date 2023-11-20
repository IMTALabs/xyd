@extends('layouts.app')

@section('content')
    <div class="pt-16 pb-20 bg-secondary">
        <div class="container mx-auto text-primary">
            <h1 class="text-4xl font-bold uppercase">{{ __('Contact us') }}</h1>

            <form action="" class="mx-auto mt-8 grid w-1/2 grid-cols-2 gap-x-8 gap-y-4">
                <p class="col-span-full text-right text-xs">{{ __('Required fields') }} *</p>

                <h3 class="col-span-full text-xl">{{ __('Personal Information') }}</h3>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('First Name') }} *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Last Name') }} *">
                <input type="email"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Email Address') }} *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Phone Number') }} *">

                <h3 class="col-span-full mt-4 text-xl">{{ __('Company Information') }}</h3>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Company Name') }} *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Website URL') }} *">
                <input type="text"
                       class="col-span-2 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Company Address') }} *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('Country') }} *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="{{ __('City') }} *">
                <div class="col-span-1 text-sm">{{ __('Are you an existing XYD Express customer?') }}*</div>
                <div class="col-span-1 flex gap-16">
                    <div class="flex items-center gap-2 text-sm">
                        <input type="radio" name="old-customer" id="">
                        <label for="">{{ __('Yes') }}</label>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <input type="radio" name="old-customer" id="">
                        <label for="">{{ __('No') }}</label>
                    </div>
                </div>

                <h3 class="col-span-full mt-4 text-xl">{{ __('Inquiry') }}</h3>
                <textarea type="text"
                          class="col-span-2 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                          placeholder="{{ __('Please enter your problem so that we can assist you') }} *"></textarea>

                <div class="w-full container p-4 col-span-2 bg-[#f5eccb] mx-auto flex items-center gap-4 text-sm mt-2">
                    <input type="checkbox">
                    {{ __('Our privacy policy contains detailed information about our handling of personal information.') }}
                </div>

                <div class="col-span-2">
                    <button class="mx-auto mt-8 block w-fit px-8 py-2 bg-primary text-secondary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

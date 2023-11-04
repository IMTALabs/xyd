@extends('layouts.app')

@section('content')
    <div class="bg-secondary pt-8 pb-20">
        <div class="container mx-auto text-primary">
            <h1 class="text-4xl font-bold uppercase">Contact us</h1>

            <form action="" class="mt-8 w-1/2 mx-auto grid grid-cols-2 gap-x-8 gap-y-4">
                <p class="text-right text-xs col-span-full">Required fields *</p>

                <h3 class="text-xl col-span-full">Personal Information</h3>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="First Name *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Last Name *">
                <input type="email"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Email Address *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Phone Number *">

                <h3 class="text-xl col-span-full mt-4">Company Information</h3>
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Company Name *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Website URL *">
                <input type="text"
                       class="col-span-2 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Company Address *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="Country *">
                <input type="text"
                       class="col-span-1 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                       placeholder="City *">
                <div class="col-span-1 text-sm">Are you an existing XYD Express customer?*</div>
                <div class="col-span-1 flex gap-16">
                    <div class="flex items-center gap-2 text-sm">
                        <input type="radio" name="old-customer" id="">
                        <label for="">Yes</label>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <input type="radio" name="old-customer" id="">
                        <label for="">No</label>
                    </div>
                </div>

                <h3 class="text-xl col-span-full mt-4">Inquiry</h3>
                <textarea type="text"
                          class="col-span-2 px-2 py-1 placeholder:text-xs placeholder:text-primary row-span-1 bg-[#f5eccb]"
                          placeholder="Please enter your problem so that we can assist you *"></textarea>

                <div class="w-full container p-4 col-span-2 bg-[#f5eccb] mx-auto flex items-center gap-4 text-sm mt-2">
                    <input type="checkbox">
                    Our privacy policy contains detailed information about our handling of personal information.
                </div>

                <div class="col-span-2">
                    <button class="block mx-auto bg-primary text-secondary px-8 py-2 mt-8 w-fit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('front.layouts.default')

@section('content')
    <div class="relative w-full h-[16rem] sm:h-2/6 lg:h-[30rem] py-8">

        <img src="{{ asset('images/home.jpeg') }}"
            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="absolute top-2/4 pl-7 sm:pl-0 sm:left-1/4  sm:-translate-x-1/4 -translate-y-2/4">
            <div class="font-semibold text-2xl sm:text-3xl font-sans">
                Logo Design By Experts
            </div>
            <div class=" sm:py-10 py-5 grid sm:grid-cols-2 grid-cols-1 sm:gap-4 gap-2">
                <div class="">
                    <input class="text-green-500 rounded-md sm:w-5 sm:h-5 mb-[0.4rem]" type="checkbox" checked disabled>
                    <label class="sm:text-2xl">Individual design</label>
                </div>
                <div class="">
                    <input class="text-green-500 rounded-md sm:w-5 sm:h-5 mb-[0.4rem]" type="checkbox" checked disabled>
                    <label class="sm:text-2xl">Individual design</label>
                </div>
                <div class="">
                    <input class="text-green-500 rounded-md sm:w-5 sm:h-5 mb-[0.4rem]" type="checkbox" checked disabled>
                    <label class="sm:text-2xl">Individual design</label>
                </div>
                <div class="">
                    <input class="text-green-500 rounded-md sm:w-5 sm:h-5 mb-[0.4rem]" type="checkbox" checked disabled>
                    <label class="sm:text-2xl">Individual design</label>
                </div>
                
            </div>
            <div>
                <button href="" class="btn bg-green-500 sm:rounded-3xl rounded-2xl font-bold sm:text-2xl text-1xl sm:px-3 sm:py-1 px-1 py-1 text-white">Order
                    Now</button>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container">
            <div class="flex items-center justify-center py-5">
                <div>
                    <div class="flex ">
                        <div class="text-2xl uppercase">
                            We Develop Your
                        </div>
                        <div class="bg-black w-20 h-[0.10rem] ml-1 mt-[1.1rem]">

                        </div>
                        <div class="bg-black w-2 h-2 mt-[0.90rem] rounded-full">

                        </div>
                    </div>
                    <div class="flex ">
                        <div class="bg-black w-2 h-2 mt-[0.90rem] rounded-full">

                        </div>
                        <div class="bg-black w-20 h-[0.10rem] mr-1 mt-[1.1rem]">

                        </div>
                        <div class="text-2xl uppercase">
                            Professional Logo
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid sm:grid-cols-5 grid-cols-1 gap-3 py-5">
                <div class="flex items-center justify-center">
                    <img class="shadow-2xl rounded-lg h-[16rem] w-[18rem] sm:h-[13rem] sm:w-[13rem]" src="{{asset('images/brand/brand (1).jpeg')}}" alt="">
                </div>
                <div class="flex items-center justify-center">
                    <img class="shadow-2xl rounded-lg h-[16rem] w-[18rem] sm:h-[13rem] sm:w-[13rem]" src="{{asset('images/brand/brand (1).jpeg')}}" alt="">
                </div>
                <div class="flex items-center justify-center">
                    <img class="shadow-2xl rounded-lg h-[16rem] w-[18rem] sm:h-[13rem] sm:w-[13rem]" src="{{asset('images/brand/brand (1).jpeg')}}" alt="">
                </div>
                <div class="flex items-center justify-center">
                    <img class="shadow-2xl rounded-lg h-[16rem] w-[18rem] sm:h-[13rem] sm:w-[13rem]" src="{{asset('images/brand/brand (1).jpeg')}}" alt="">
                </div>
                <div class="flex items-center justify-center">
                    
                        <a type="button" href="" class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-3xl text-lg px-6 py-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Next</a>
                   
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container flex justify-center items-center py-5">
            <div>
                <div class="text-2xl uppercase">
                    Our packages
                </div>
                <div class="flex">
                    <div class="bg-black w-2 h-2 mt-[0.90rem] rounded-full">
    
                    </div>
                    <div class="bg-black w-full h-[0.10rem] mt-[1.1rem]">
    
                    </div>
                    <div class="bg-black w-2 h-2 mt-[0.90rem] rounded-full">
    
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4  container">
            <div class="">
                <div class="flex items-center justify-center">
                    <div class=" max-w-sm rounded-3xl overflow-hidden shadow-2xl">
                        <div class=" pt-5 text-center text-3xl font-bold text-green-900">
                            Logo design
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-3xl flex items-center justify-center">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M64 240C46.33 240 32 225.7 32 208C32 190.3 46.33 176 64 176H92.29C121.9 92.11 201.1 32 296 32H320C337.7 32 352 46.33 352 64C352 81.67 337.7 96 320 96H296C238.1 96 187.8 128.4 162.1 176H288C305.7 176 320 190.3 320 208C320 225.7 305.7 240 288 240H144.2C144.1 242.6 144 245.3 144 248V264C144 266.7 144.1 269.4 144.2 272H288C305.7 272 320 286.3 320 304C320 321.7 305.7 336 288 336H162.1C187.8 383.6 238.1 416 296 416H320C337.7 416 352 430.3 352 448C352 465.7 337.7 480 320 480H296C201.1 480 121.9 419.9 92.29 336H64C46.33 336 32 321.7 32 304C32 286.3 46.33 272 64 272H80.15C80.05 269.3 80 266.7 80 264V248C80 245.3 80.05 242.7 80.15 240H64z" />
                                </svg>
                                144
                            </div>
                            <div class="font-semibold text-gray-500 mb-2 text-center">plus VAT</div>
                        </div>
                        <div class="px-10 pt-4 pb-8">
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    6 logo designs
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Individal design
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Design by 2 experienced designs
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Logo for web & print
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Vactor & raster formats
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    AI, EPS, PDF, PNG, JPG, PSD
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Unrestricted Use Rights
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Free backup service
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Satisfaction Guarantee
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center py-5 ">
                    <a type="buttton"
                        class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-3xl text-sm px-6 py-3 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        href="">Order Now</a>
                </div>
            </div>
            <div class="">
                <div class="flex items-center justify-center">
                    <div class=" max-w-sm rounded-3xl overflow-hidden shadow-2xl">
                        <div class=" pt-5 text-center text-3xl font-bold text-green-900">
                            Logo design
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-3xl flex items-center justify-center">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M64 240C46.33 240 32 225.7 32 208C32 190.3 46.33 176 64 176H92.29C121.9 92.11 201.1 32 296 32H320C337.7 32 352 46.33 352 64C352 81.67 337.7 96 320 96H296C238.1 96 187.8 128.4 162.1 176H288C305.7 176 320 190.3 320 208C320 225.7 305.7 240 288 240H144.2C144.1 242.6 144 245.3 144 248V264C144 266.7 144.1 269.4 144.2 272H288C305.7 272 320 286.3 320 304C320 321.7 305.7 336 288 336H162.1C187.8 383.6 238.1 416 296 416H320C337.7 416 352 430.3 352 448C352 465.7 337.7 480 320 480H296C201.1 480 121.9 419.9 92.29 336H64C46.33 336 32 321.7 32 304C32 286.3 46.33 272 64 272H80.15C80.05 269.3 80 266.7 80 264V248C80 245.3 80.05 242.7 80.15 240H64z" />
                                </svg>
                                144
                            </div>
                            <div class="font-semibold text-gray-500 mb-2 text-center">plus VAT</div>
                        </div>
                        <div class="px-10 pt-4 pb-8">
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    6 logo designs
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Individal design
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Design by 2 experienced designs
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Logo for web & print
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Vactor & raster formats
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    AI, EPS, PDF, PNG, JPG, PSD
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Unrestricted Use Rights
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Free backup service
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Satisfaction Guarantee
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center py-5">
                    <a type="buttton"
                        class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-3xl text-sm px-6 py-3 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        href="">Order Now</a>
                </div>
            </div>
            <div class="">
                <div class="flex items-center justify-center">
                    <div class=" max-w-sm rounded-3xl overflow-hidden shadow-2xl">
                        <div class=" pt-5 text-center text-3xl font-bold text-green-900">
                            Logo design
                        </div>
                        <div class="px-6 py-4">
                            <div class="font-bold text-3xl flex items-center justify-center">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M64 240C46.33 240 32 225.7 32 208C32 190.3 46.33 176 64 176H92.29C121.9 92.11 201.1 32 296 32H320C337.7 32 352 46.33 352 64C352 81.67 337.7 96 320 96H296C238.1 96 187.8 128.4 162.1 176H288C305.7 176 320 190.3 320 208C320 225.7 305.7 240 288 240H144.2C144.1 242.6 144 245.3 144 248V264C144 266.7 144.1 269.4 144.2 272H288C305.7 272 320 286.3 320 304C320 321.7 305.7 336 288 336H162.1C187.8 383.6 238.1 416 296 416H320C337.7 416 352 430.3 352 448C352 465.7 337.7 480 320 480H296C201.1 480 121.9 419.9 92.29 336H64C46.33 336 32 321.7 32 304C32 286.3 46.33 272 64 272H80.15C80.05 269.3 80 266.7 80 264V248C80 245.3 80.05 242.7 80.15 240H64z" />
                                </svg>
                                144
                            </div>
                            <div class="font-semibold text-gray-500 mb-2 text-center">plus VAT</div>
                        </div>
                        <div class="px-10 pt-4 pb-8">
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    6 logo designs
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Individal design
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Design by 2 experienced designs
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Logo for web & print
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Vactor & raster formats
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    AI, EPS, PDF, PNG, JPG, PSD
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Unrestricted Use Rights
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Free backup service
                                </div>
                            </div>
                            <div class="py-2 flex space-x-1">
                                <div class="flex items-center justify-center">
                                    <img class="h-5 w-5" src="{{ asset('images/icons/icons8-checkmark-30.svg') }}"
                                        alt="">
                                </div>
                                <div class="text-1xl">
                                    Satisfaction Guarantee
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center py-5">
                    <a type="buttton"
                        class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-3xl text-sm px-6 py-3 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        href="">Order Now</a>
                </div>
            </div>


        </div>
    </section>
@endsection

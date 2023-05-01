@extends('front.layouts.default')

@section('content')
    <div class="relative w-full h-[16rem] sm:h-2/6 lg:h-[30rem] py-8">

        <img src="{{ asset('images/home.jpeg') }}"
            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        <div class="absolute top-2/4 pl-7 sm:pl-0 sm:left-1/4  sm:-translate-x-1/4 -translate-y-2/4">
            <div class="font-semibold text-base sm:text-3xl font-sans">
                {{ $data['sliderHeading']->name }}
            </div>
            <div class=" sm:py-10 py-5 grid sm:grid-cols-2 grid-cols-1 sm:gap-4 gap-2">
                @foreach ($data['sliderHeading']->sliderHeadingsMenu->take(4) as $key => $value)
                    <div class="flex">
                        <img class=" w-4 h-4 sm:w-5 sm:h-5 sm:mt-2 mt-[0.33rem] mb-[0.4rem] mr-2"
                            src="{{ $value->getFirstMediaUrl('images/icon', 'thumb') }}" alt="">

                        <label class="text-base sm:text-2xl">{!! $value->details !!}</label>
                    </div>
                @endforeach
            </div>
            <div>
                <a href="#order"
                    class="btn bg-green-500 sm:rounded-3xl rounded-2xl font-bold sm:text-2xl text-1xl sm:px-3 sm:py-1 px-1 py-1 text-white">Order
                    Now</a>
            </div>
        </div>
    </div>

    <section class=" container">
        
            <div class="flex items-center justify-center py-5 ">
                <div>
                    <div class="flex ">
                        <div class=" text-base sm:text-2xl uppercase">
                            We Develop Your
                        </div>
                        <div class="bg-black w-20 h-[0.10rem] ml-1 mt-[0.9rem] sm:mt-[1.1rem]">

                        </div>
                        <div class="bg-black w-2 h-2 mt-[0.7rem] sm:mt-[0.9rem] rounded-full">

                        </div>
                    </div>
                    <div class="flex ">
                        <div class="bg-black w-2 h-2 mt-[0.7rem] sm:mt-[0.90rem] rounded-full">

                        </div>
                        <div class="bg-black w-20 h-[0.10rem] mr-1 mt-[0.9rem] sm:mt-[1.1rem]">

                        </div>
                        <div class="text-base sm:text-2xl uppercase">
                            Professional Logo
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid sm:grid-cols-5 grid-cols-1 gap-3 py-5 px-[1.25rem] lg:px-[3rem]">
                @foreach ($data['products'] as $key => $value)
                    <div class="">
                        <img class="shadow-2xl rounded-lg h-full w-full"
                            src="{{ $value->getFirstMediaUrl('images', 'thumb') }}" alt="">
                    </div>
                @endforeach
                <div class="flex items-center justify-center">

                    <a type="button" href=""
                        class=" focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-3xl text-lg px-6 py-3 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Next</a>

                </div>
            </div>
      
    </section>

    <section id="order" class="container">
        
            <div class=" flex justify-center items-center py-5">
                <div>
                    <div class="text-base sm:text-2xl uppercase">
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
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 px-[1.25rem] lg:px-0">
                @foreach ($data['orders'] as $key => $value)
                    <div class="">
                        <div class="flex items-center justify-center">
                            <div class="w-[21.4rem] h-[37rem] max-w-sm rounded-3xl overflow-auto shadow-2xl">
                                <div class=" pt-5 text-center text-3xl font-bold text-green-900">
                                    {{ $value->name }}
                                </div>
                                <div class="px-6 py-4">
                                    <div class="font-bold text-3xl flex items-center justify-center">
    
                                        <img class="h-6 w-6" src="{{ $value->getFirstMediaUrl('images/icon', 'thumb') }}"
                                            alt="">
                                        {{ $value->price }}
                                    </div>
                                    <div class="font-semibold text-gray-500 mb-2 text-center">{!! $value->info !!}</div>
                                </div>
                                <div class="px-10 pt-4 pb-8">
                                    @foreach ($value->orderCategoryAmenities as $keyPath => $q)
                                        <div class="py-2 flex space-x-1">
                                            <div class="flex items-center justify-center">
                                                <img class="h-5 w-5" src="{{ $q->getFirstMediaUrl('images/icon', 'thumb') }}"
                                                    alt="">
                                            </div>
                                            <div class="text-1xl">
                                                {!! $q->info !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center py-5 ">
                            <button data-id="{{ $value->id }}" data-modal-target="extralarge-modal"
                                data-modal-toggle="extralarge-modal" type="buttton"
                                class="openModal focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-3xl text-sm px-6 py-3 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Order
                                Now</button>
                        </div>
                    </div>
                @endforeach
    
            </div>
        
    </section>

    {{-- modal --}}
    @include('front.layouts.includes.modals.orderModal')
    {{-- modal --}}
    
@endsection

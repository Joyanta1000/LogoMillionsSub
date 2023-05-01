@extends('mailable.includes.default')

@section('content')

<div class="sm:container px-3 sm:py-10 grid sm:grid-cols-2 grid-cols-1 gap-3">
    <div>
         <div class="flex items-center justify-center">
        <div class="w-[15.4rem] min-h-[26rem] max-w-sm rounded-3xl overflow-auto shadow-2xl">
            <div class=" pt-5 text-center text-2xl font-bold text-green-900">
                {{ $data['orders']->name }}
            </div>
            <div class="px-7 py-1">
                <div class="font-bold text-sm flex items-center justify-center">

                    <img class="h-3 w-3" src="{{ $data['orders']->getFirstMediaUrl('images/icon', 'thumb') }}"
                        alt="">
                    {{ $data['orders']->price }}
                </div>
                <div class="font-semibold text-gray-500 mb-2 text-center">{!! $data['orders']->info !!}</div>
            </div>
            <div class="px-7 pt-1 pb-2">
                @foreach ($data['orders']->orderCategoryAmenities as $keyPath => $q)
                    <div class=" py-1 flex space-x-1">
                        <div class="flex items-center justify-center">
                            <img class="h-3 w-3" src="{{ $q->getFirstMediaUrl('images/icon', 'thumb') }}"
                                alt="">
                        </div>
                        <div class="text-sm">
                            {!! $q->info !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <div class="container space-y-3">
       
        <div>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Name</label>
        
            <span class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" > {{$senderInfo['name']}} </span>
            
        </div>
        <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Email</label>
           
            <span class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" > {{$senderInfo['email']}} </span>
            
        </div>
        <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Phone Number</label>
            
            <span class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" > {{$senderInfo['phone']}} </span>
        
        </div>
        <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Message</label>

            <span class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" >
            {!! $senderInfo['msg'] !!}
            </span>
        </div>
       

    </div>
   
</div>
@endsection
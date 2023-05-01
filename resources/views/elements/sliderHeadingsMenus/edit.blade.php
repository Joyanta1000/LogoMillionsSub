<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Slider Heading Menus Info') }}
        </h2>
    </x-slot>

    <div class=" sm:container py-6 px-5 sm:px-0 flex justify-center items-center">


        <div class="w-full sm:w-[50rem] mx-3 sm:mx-12">
            @if (session()->has('success'))
                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 my-5" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p>{{ session('success') }}</p>
                </div>
            @elseif(session()->has('fail'))
                <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 my-5" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                    </svg>
                    <p>{{ session('fail') }}</p>
                </div>
            @endif
            <form action="{{ route('slider_heading_menus.update', $obj->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name">
                            Slider heading
                        </label>
                        
                        <select name="heading_id"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-name" type="text" placeholder="Logo Ex..." value="">
                        <option value="">Select</option>
                        @foreach($sliderHeading as $q)
                        <option value="{{$q->id}}" {{$obj->heading_id == $q->id ? "selected" : ""}}>{{$q->name}}</option>
                        @endforeach
                        </select>
                        @error('heading_id')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Image
                        </label>
                        <div class="sm:flex sm:space-x-3 space-y-5 sm:space-y-0">
                            <div class="flex justify-center items-center sm:block sm:justify-start sm:items-start ">
                                <img src="{{ $obj->getFirstMediaUrl('images/icon', 'thumb') }}"
                                    class="sm:w-[15rem] w-[17rem] border-gray-200 rounded">
                            </div>
                            <input name="icon"
                                class="h-10 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-file" type="file">
                        </div>
                        @error('icon')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password">
                            Info
                        </label>
                        <textarea name="details"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="editor" type="text" placeholder="">{{ $obj->details }}
                    </textarea>
                        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                        @error('details')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-0 md:mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <button class="block w-full bg-blue-500 text-white border border-gray-200 rounded py-3 px-4 "
                            type="submit">
                            Update
                        </button>
                    </div>
                </div>
            </form>
            <hr class="h-px my-8 bg-gray-200 border-2 dark:bg-gray-700">
            <div class="flex flex-wrap -mx-3 mb-2 mt-2">

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    @if (empty($obj->deleted_at))
                        <form action="{{ route('slider_heading_menus.destroy', $obj->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="block w-full bg-red-500 text-white border border-gray-200 rounded py-3 px-4 "
                                type="submit">
                                Deactivate
                            </button>
                        </form>
                    @else
                        <form action="{{ route('slider_heading_menus.restore', $obj->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <button
                                class="block w-full bg-blue-500 text-white border border-gray-200 rounded py-3 px-4 "
                                type="submit">
                                Activate
                            </button>
                        </form>
                </div>
                @endif
            </div>
        </div>


    </div>
</x-app-layout>

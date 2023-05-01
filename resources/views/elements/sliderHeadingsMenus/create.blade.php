<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Slider Heading Menu') }}
        </h2>
    </x-slot>

    <div class="container py-6 flex justify-center items-center">
        <form class="w-full sm:w-[50rem] mx-5 sm:mx-0" action="{{ route('slider_heading_menus.store') }}" method="post"
            enctype="multipart/form-data">
            @method('post')
            @csrf
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
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Slider Heading
                    </label>
                    
                    <select name="heading_id"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-name" type="text" placeholder="Logo Ex..." value="">
                    <option value="">Select</option>
                    @foreach($sliderHeading as $q)
                    <option value="{{$q->id}}" {{old('heading_id') == $q->id ? "selected" : ""}}>{{$q->name}}</option>
                    @endforeach
                    </select>
                    @error('heading_id')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
             
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Image/Icon
                    </label>
                    <input name="icon"
                        class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-file" type="file">
                    @error('icon')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Details
                    </label>
                    <textarea name="details"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="editor" type="text" placeholder="">{{ old('details') }}
                </textarea>
                    <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                    @error('details')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <button class="block w-full bg-blue-500 text-white border border-gray-200 rounded py-3 px-4 "
                        type="submit">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

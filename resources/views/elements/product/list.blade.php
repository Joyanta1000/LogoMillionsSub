<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>


    <div class="container mx-auto pt-6">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-8 border-b border-gray-200 shadow grid grid-cols-1 gap-5">
                    <a class=" h-8 w-[11rem] text-center " href="{{ route('product.create') }}">
                        <div
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Create New
                        </div>
                    </a>

                    @if (session()->has('success'))
                        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 my-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>{{ session('success') }}</p>
                        </div>
                    @elseif(session()->has('fail'))
                        <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 my-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>{{ session('fail') }}</p>
                        </div>
                    @endif

                    <div class="overflow-y-auto ">
                        <table class="divide-y divide-gray-300" id="dataTable">
                            <thead class="bg-black ">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Name
                                    </th>

                                    <th class="px-6 py-2 text-xs text-white">
                                        Active/Inactive
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        View
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Edit
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300 ">
                                @foreach ($data as $q)
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $q->name }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            @if (!$q->deleted_at)
                                                <form action="{{ route('product.destroy', $q->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="inline-block text-center">
                                                        <svg class="w-6 h-6" version="1.1" id="Capa_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 310.277 310.277" xml:space="preserve"
                                                            fill="#cf3a3a" stroke="#cf3a3a">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <g>
                                                                    <path style="fill:#15b800;"
                                                                        d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139 c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437 l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('product.restore', $q->id) }}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <button type="submit" class="inline-block text-center">
                                                        <svg class="w-6 h-6" version="1.1" id="Capa_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 310.277 310.277" xml:space="preserve"
                                                            fill="#cf3a3a" stroke="#cf3a3a">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <g>
                                                                    <path style="fill:#d90202;"
                                                                        d="M155.139,0C69.598,0,0,69.598,0,155.139c0,85.547,69.598,155.139,155.139,155.139 c85.547,0,155.139-69.592,155.139-155.139C310.277,69.598,240.686,0,155.139,0z M144.177,196.567L90.571,142.96l8.437-8.437 l45.169,45.169l81.34-81.34l8.437,8.437L144.177,196.567z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </form>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <a href="#" class="inline-block text-center">
                                                <svg fill="#18af3e" class="w-6 h-6" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 511.999 511.999" xml:space="preserve" stroke="#18af3e">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M509.361,249.401c-0.771-1.927-19.335-47.719-59.326-93.862C396.198,93.42,329.101,60.585,255.999,60.585 S115.802,93.42,61.964,155.54c-39.99,46.143-58.555,91.935-59.326,93.862L0,255.999l2.639,6.598 c0.771,1.927,19.335,47.719,59.326,93.862c53.837,62.119,120.933,94.955,194.035,94.955s140.198-32.836,194.035-94.955 c39.99-46.143,58.555-91.935,59.326-93.862l2.639-6.598L509.361,249.401z M255.999,380.354 c-68.569,0-124.355-55.786-124.355-124.355s55.786-124.355,124.355-124.355s124.355,55.786,124.355,124.355 S324.569,380.354,255.999,380.354z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M255.999,167.174c-48.978,0-88.825,39.847-88.825,88.825c0,48.978,39.847,88.825,88.825,88.825 c48.978,0,88.825-39.847,88.825-88.825S304.977,167.174,255.999,167.174z M255.999,238.234c-9.796,0-17.765,7.969-17.765,17.765 h-35.53c0-29.387,23.908-53.295,53.295-53.295V238.234z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="inline-block text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="inline-block text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>

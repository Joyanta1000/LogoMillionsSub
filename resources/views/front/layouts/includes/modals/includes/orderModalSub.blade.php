<div class="">
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
    <form action="{{route('order.store', $data['orders']->id)}}" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
    <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Name</label>
        <input type="text" name="name" class="name block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required>
        <div class="nameError">

        </div>
    </div>
    <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Email</label>
        <input type="email" name="email" class="email block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required>
        <div class="emailError">

        </div>
    </div>
    <div>
        <label class=" block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Contact No</label>
        <input type="number" name="phone" class="phone appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required>
    </div>
    <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">Message</label>
        <textarea name="msg" class="msg" id="editor" cols="30" rows="10"></textarea>
    </div>
    <div class="py-4">
        <button type="submit" class="order text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Order</button>
    </div>
</form>
</div>


<script>
    ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
</script>
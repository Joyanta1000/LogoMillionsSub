<div id="extralarge-modal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Order Confirmation
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="extralarge-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="orderModalSub sm:container px-3 sm:py-10 grid sm:grid-cols-2 grid-cols-1 gap-3">

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="extralarge-modal" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>
{{-- <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script> --}}

<script>
    function existance(val) {
        if (val == null || val == '' || val == undefined || val == 'undefined') {
            return false;
        } else {
            return true;
        }
    }

    $('.openModal').on('click', function() {

        var order_category_id = $(this).data('id');

        var url = "{{ route('order.create', ':order_category_id') }}";
        url = url.replace(':order_category_id', order_category_id);


        $.ajax({
            url: url,
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}"
            },

            success: function(response) {

                $('.orderModalSub').html(response);
            },
            error: function(response) {
                alert('Something went wrong! Try again please.');
            }
        });

    });


//     $(document).on('click', '.order', function(evt) {
//         var order_category_id = $(this).data('id');

//         var url = "{{ route('order.store', ':order_category_id') }}";
//         url = url.replace(':order_category_id', order_category_id);

//         if (existance($('.name').val()) && existance($('.email').val())) {

//             $('.nameError').html('');
//             $('.emailError').html('');

//             var editor = CKEDITOR.replace('editor');
//             var editor_data = editor.getData();
// console.log(editor_data);
// return false;
//             $('.msg').text(editor_data);
//             // console.log($('.msg').text());

//             $.ajax({
//                 url: url,
//                 method: 'POST',
//                 data: {
//                     "_token": "{{ csrf_token() }}",
//                     'name': $('.name').val(),
//                     'email': $('.email').val(),
//                     'phone': $('.phone').val(),
//                     'msg': $('.msg').val(),
//                 },

//                 success: function(response) {

//                     $('.orderConfirmation').html('');
//                     $('.orderConfirmation').html(response);
//                 },
//                 error: function(response) {
//                     $('.orderConfirmation').html('');
//                     alert('Something went wrong! Try again please.');
//                 }
//             });
//         } else {
//             if (!existance($('.name').val())) {
//                 $('.emailError').html('');
//                 $('.nameError').html('');
//                 $('.nameError').html('<span class="text-red-500 font-italic">Name Required</span>');
//             } else if (!existance($('.email').val())) {
//                 $('.nameError').html('');
//                 $('.emailError').html('');
//                 $('.emailError').html('<span class="text-red-500 font-italic">Email Required</span>');
//             }
//         }

//     });
</script>

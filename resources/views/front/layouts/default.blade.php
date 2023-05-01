<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    @toastScripts
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> --}}
    <style>
        .menuBar {
            color: blueviolet;
        }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);



        #mySlider {
            overflow: hidden;
            width: 100vw !important;
        }

        #mySlider ul {
            width: unset !important;
            list-style: none;
        }

        #mySlider ul li {
            height: 100px;
            width: 20vw;
            float: left;
        }

        #mySlider ul li img {
            height: 100px;
            width: 25vw;
        }

        a.control_prev,
        a.control_next {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            top: 40%;
        }

        a.control_prev:hover,
        a.control_next:hover {
            -webkit-transition: all 0.2s ease;
        }

        a.control_next {
            right: 0;
        }

        /* Dot Indicators */
        #s1 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: -36px;
            border-radius: 20px;
            z-index: 999;
        }

        #s2 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: -12px;
            border-radius: 20px;
            z-index: 999;
        }

        #s3 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: 12px;
            border-radius: 20px;
            z-index: 999;
        }

        #s4 {
            padding: 6px;
            left: 50%;
            bottom: 25px;
            margin-left: 36px;
            border-radius: 20px;
            z-index: 999;
        }

        .active {
            background-color: #48BB78;
            opacity: 1;
        }

        #Slide1:checked+#s1 {
            background-color: #48BB78;
            opacity: 1;
        }

        #Slide2:checked+#s2 {
            background-color: #48BB78;
            opacity: 1;
        }

        #Slide3:checked+#s3 {
            background-color: #48BB78;
            opacity: 1;
        }

        #Slide4:checked+#s4 {
            background-color: #48BB78;
            opacity: 1;
        }

        @layer base {

            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        }
    </style>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
   
</head>

<body>
    
    <div class="container-fluid sm:container-fluid">
        
        @include('front.layouts.includes.navbar')
        @include('toastr.index')
        @yield('content')
        @include('front.layouts.includes.footer')
    </div>

    <script>
        $(document).ready(function($) {

            var interval = setInterval(function() {
                moveRight();
            }, 3000);

            var slideCount = $('#mySlider ul li').length / 5;
            var slideWidth = $('#mySlider ul li').width() / 5;
            var slideHeight = $('#mySlider ul li').height() / 5;
            var sliderUlWidth = slideCount * slideWidth;

            $('#mySlider').css({
                width: slideWidth,
                height: slideHeight
            });

            $('#mySlider ul').css({
                width: sliderUlWidth,
                marginLeft: -slideWidth
            });

            $('#mySlider ul li:last-child').prependTo('#mySlider ul');

            function moveLeft() {
                $('#mySlider ul').animate({
                    left: +slideWidth
                }, 200, function() {
                    $('#mySlider ul li:last-child').prependTo('#mySlider ul');
                    $('#mySlider ul').css({
                        'left': '',
                        'transition': 'all 0.3s ease-in-out',
                        'transform': 'rotate3d(0,0,0,0deg)'
                    });
                });
            };

            function moveRight() {
                $('#mySlider ul').animate({
                    left: -slideWidth
                }, 200, function() {
                    $('#mySlider ul li:first-child').appendTo('#mySlider ul');
                    $('#mySlider ul').css({
                        'left': '',
                        'transition': 'all 0.3s ease-in-out',
                        'transform': 'rotate3d(0,0,0,0deg)'
                    });

                });
            };

            $('a.control_prev').click(function() {
                moveLeft();
            });

            $('a.control_next').click(function() {
                moveRight();
            });


            // Doesn't work quite yet (toggles random slide and only onClick) -->

            // $('input').click(function() {
            //  $('label').toggleClass('checked');
            //  moveRight();
            // });

            $("#slider ul").click(function() {
                //Stop the carousel on click
                clearInterval(interval);
            });


        });
    </script>
</body>

</html>

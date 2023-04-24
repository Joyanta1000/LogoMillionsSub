<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
</head>

<body>
    <div class="container-fluid sm:container-fluid">
        @include('front.layouts.includes.navbar')
        @yield('content')
        @include('front.layouts.includes.footer')
    </div>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
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
                    $('#mySlider ul').css({'left': '', 'transition': 'all 0.3s ease-in-out', 'transform': 'rotate3d(0,0,0,0deg)'});
                });
            };

            function moveRight() {
                $('#mySlider ul').animate({
                    left: -slideWidth
                }, 200, function() {
                    $('#mySlider ul li:first-child').appendTo('#mySlider ul');
                    $('#mySlider ul').css({'left': '', 'transition': 'all 0.3s ease-in-out', 'transform': 'rotate3d(0,0,0,0deg)'});

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

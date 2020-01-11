<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #F7F9FB;
            color: #636b6f;
            font-family: 'Open Sans', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
@include('include.loading-screen')

@yield('content')

<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    document.onreadystatechange = function () {
        if (document.readyState !== "complete") {
            document.querySelector(
                ".loader").style.visibility = "visible";
        }
        else {
            document.querySelector(
                ".loader").style.display = "none";
        }
    };
    // ===== Scroll to Top ====
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        }
        else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function () {      // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0                       // Scroll to top of body
        }, 1500);
    });

    $(document).ready(function () {
        $('.icon-open-menu-response').click(function () {
            $('.nav-bar-q').css('display', 'block');
            $('body').css('overflow', 'hidden');
        })
        $('.icon-close-menu-response').click(function () {
            $('.nav-bar-q').css('display', 'none');
            $('body').css('overflow', 'unset');
        })
        var count = 0;
        setInterval(function () {
            if ($(document).width() > 768) {
                $('.nav-bar-q').css('display', 'block');
                $('body').css('overflow', 'unset');
                count = 0;
            }
            else {
                count++;
                if (count == 1) {
                    $('.nav-bar-q').css('display', 'none');
                }
            }
        }, 1000)
    })
</script>
</body>
</html>

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
        <span class="icon-open-menu-response">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </span>
        <div class="header">
            <div class="logo-img">
                <img src="https://evondev.com/wp-content/uploads/2019/12/evondev-logo.png">
            </div>
            <div class="title">
                <h3>Chia sẻ kiến thức chuyên sâu về Frontend</h3>
            </div>
            <div class="nav-bar-q">
                <span class="icon-close-menu-response">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </span>
                <ul>
                    <li>
                        <a class="active">psd2html</a>
                    </li>
                    <li>
                        <a>flexbox</a>
                    </li>
                    <li>
                        <a>gird</a>
                    </li>
                    <li>
                        <a>useful</a>
                    </li>
                    <li>
                        <a>tuhocontent</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="container my-5">
                <div class="row">
                    @for($i=0;$i < 12;$i++)
                    <div class="col-sm-12 col-md-6 item">
                        <div class="card">
                                <div class="card-body">
                                    <img src="https://evondev.com/wp-content/uploads/2018/08/hoc-css-flexbox-1-800x403.jpg" class="w-100">
                                    <div class="content">
                                        <div class="title">
                                            <a>Học CSS Flexbox toàn tập phần 3</a>
                                        </div>
                                        <p>16/08/2018</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <p>BÀI VIẾT MỚI NHẤT</p>
                        <ul>
                            @for($i=0;$i <6;$i++)
                            <li>
                                <a>Hướng dẫn cắt PSD toàn tập với Leospa design phần 3</a>
                            </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <p>DANH MỤC</p>
                        <ul>
                            @for($i=0;$i <6;$i++)
                                <li>
                                    <a>CSS Flexbox</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <p>FANPAGE</p>
                        <div class="frame-facebook">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
            // ===== Scroll to Top ====
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 1500);
            });

            $(document).ready(function () {
                $('.icon-open-menu-response').click(function () {
                    $('.nav-bar-q').css('display','block');
                    $('body').css('overflow','hidden');
                })
                $('.icon-close-menu-response').click(function () {
                    $('.nav-bar-q').css('display','none');
                    $('body').css('overflow','unset');
                })
                var count = 0;
                setInterval(function () {
                    if($(document).width() > 768){
                        $('.nav-bar-q').css('display','block');
                        $('body').css('overflow','unset');
                        count = 0;
                    }else{
                        count++;
                        if(count == 1 ){
                            $('.nav-bar-q').css('display','none');
                        }
                    }
                },1000)
            })
        </script>
    </body>
</html>

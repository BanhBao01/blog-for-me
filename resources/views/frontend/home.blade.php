@extends('layouts.app-frontend')

@section('content')
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
@stop

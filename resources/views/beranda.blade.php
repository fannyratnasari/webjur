@extends('layout.app')
@section('content')

    <nav role="navigation" style="background-color: #122b40">
        <div class="nav-wrapper container">
            <img src="{{('image/logo.png')}}" height="60px" width="160px" class="brand-logo">
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="#">Sarana dan Prasarana</a></li>
                <li><a href="#">Tentang Jurusan</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="#">Sarana dan Prasarana</a></li>
                <li><a href="#">Tentang Jurusan</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center" style="color: #ffffff;">JURUSAN TEKNIK INFORMATIKA</h1>
                <div class="row center">
                    <h5 class="header col s10 light" style="color: #ffffff">Universitas Negeri Surabaya</h5>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{('image/d.jpg')}}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 234px, 0px);"></div>
    </div>
    {{--<div class="section no-pad-bot" id="index-banner">--}}
        {{--<div class="container">--}}
            {{--<br><br>--}}
            {{--<h1 class="header center orange-text">Starter Template</h1>--}}
            {{--<div class="row center">--}}
                {{--<h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>--}}
            {{--</div>--}}
            {{--<div class="row center">--}}
                {{--<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>--}}
            {{--</div>--}}
            {{--<br><br>--}}

        {{--</div>--}}
        {{--<div class="parallax"><img src="{{('image/komatik.png')}}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 234px, 0px);"></div>--}}
    {{--</div>--}}


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons medium">school</i></h2>
                        <h5 class="center">Info</h5>

                        <p class="light">Temukan berbagai info mengenai akademik dan non akademik. Segala bentuk kerjasama mengenai Beasiswa serta kegiatan jurusan terdapat disini.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons medium">location_city</i></h2>
                        <h5 class="center">Sarana dan Prasana</h5>

                        <p class="light">Jurusan Teknik Informatika memiliki berbagai saran dan prasarana yang memadai. Lihat segala fasilitas yang dapat anda nikmati di Jurusan Teknik Informatika Unesa</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons medium">assignment</i></h2>
                        <h5 class="center">Tentang Jurusan</h5>

                        <p class="light">Temukan segala hal yang berkaitan mengenai jurusan maupun birokrasinya disini.</p>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
    </div>

    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>
@endsection



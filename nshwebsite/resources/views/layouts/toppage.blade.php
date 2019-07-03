<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        {{-- 後の章で説明します -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ asset('css/toppage.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/newstylehustlejapan-logo.png') }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                             <li><a href="#">ニュースタイルハッスルとは</a></li>
                             <li><a href="#">全国のコミュニティ</a></li>
                             <li><a href="#">お問い合わせ</a></li>
                            {{-- 以上までを追記 --}}
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            <div class="container">
                <div class="row">
                   <div class="col-md-12 mx-auto">
                      <hr color="#c0c0c0">
                   </div>
                </div>
            </div>
            <footer>
                <div class="container">
                    <div class="footer-share">
                        <div class="row no-gutters">
                           <div class="share-text col-md-3 mx-auto">
                               <p　class="text-center">SHARE!</p>
                           </div>
                        </div>
                        <div class="row no-gutters">
                           <div class="share-button col-md-12 mx-auto">
                      　        <!--twitter-->
                               <ul class="snsbtniti col-md-2 mx-auto">
                                   <li><a href="TwitterのプロフィールURL" class="flowbtn10"><i class="fab fa-twitter"></i></a></li>
                                <!--facebook-->
                                   <li><a href="FacebookページのURL" class="flowbtn10"><i class="fab fa-facebook-f"></i></a>
                               </ul>
                           </div>
                        </div>
                    </div>
                    <div class="footer-main">
                        <div class="row no-gutters">
                            <div class="footer-menu col-md-12 mx-auto">
                                <ul>
                                    <li><a href="#">トップページ</a></li>
                                    <li><a href="#">ニュースタイルハッスルとは</a></li>
                                    <li><a href="#">全国のコミュニティ</a></li>
                                    <li><a href="#">お問い合わせ</a></li>
                                    <li><a href="#">サイトマップ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <div class="copyright">
                        <address>© 2019 NEW STYLE HUSTLE JAPAN</address>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>

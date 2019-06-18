@extends('layouts.front')

@section('content')
    <div class="container">

        <div class="row">
            <div class="wrapper">
                <img src="{{ asset('img/zabueri_example.jpg')}}" class="img-fluid">
                <video src="{{ asset('movies/nsh-miyagi201810.mp4')}}" muted autoplay class="img-fluid"></video>
            </div>
        </div>

        <br>
        <div class="about">
            <h2>ニュースタイルハッスルとは</h2>
            <div class="row">
                <div class="text col-md-6">
                    <p>世界中で踊られている最新のペアダンス、それがニュースタイルハッスル。<br>自由な発想で、自分たちの好きな音楽をパートナーと表現します。<br><br>1970年代に誕生したディスコダンス「ハッスル」を元に、2009年ごろにニューヨークでジェフ・セルビーらダンサーたちによって考案されました。<br><br>DREAMS COME TRUEのライブや嵐の楽曲（「未完」）PV、NHKの番組「Eダンスアカデミー」などでも踊られ、エンターテイメントの世界でも活躍しています。</p>
                </div>
                <div class="image col-md-6">
                    <img src="{{ asset('img/zabueri_example.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->body, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection

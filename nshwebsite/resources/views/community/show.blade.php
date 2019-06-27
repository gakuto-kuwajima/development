@extends('layouts.community')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="form-group row">
                <div class="eyecatch col-md-12 mx-auto">
                    @if (!is_null($page->eyecatch_path))
                        <img src="{{ asset('storage/image/' . $page->eyecatch_path) }}" id='eyecatch' class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="community_name col-md-12 mx-auto">
                    <h1　class="text-center">{{ $page->name }}</h1>
                </div>
            </div>
            <div class="form-group row">
                <div class="information col-md-12 mx-auto">
                    <h2 class="pagemidashi2">コミュニティ情報</h2>
                    <p>{{ nl2br(e($page->information)) }}</p>
                </div>
            </div>
            <div class="form-group row">
                @if (!is_null($page->image1_path))
                <div class="image1 col-md-4">
                    <img src="{{ asset('storage/image/' . $page->image1_path) }}" class="img-fluid">
                </div>
                @endif
                @if (!is_null($page->image2_path))
                <div class="image2 col-md-4">
                    <img src="{{ asset('storage/image/' . $page->image2_path) }}" class="img-fluid">
                </div>
                @endif
                @if (!is_null($page->image3_path))
                <div class="image3 col-md-4">
                    <img src="{{ asset('storage/image/' . $page->image3_path) }}" class="img-fluid">
                </div>
                @endif
            </div>
            <div class="form-group row">
                <div class="video_link col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $page->video_link }}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="message col-md-12 mx-auto">
                    <h2 class="pagemidashi2">メッセージ</h2>
                    <div class="balloon">
                        @if (!is_null($page->message_image_path))
                            <figure class="balloon-image-left">
                                <img src="{{ asset('storage/image/' . $page->message_image_path) }}" class="img-fluid  ">
                            </figure>
                        @endif
                        @if (!is_null($page->message))
                            <div class="balloon-text-right">
                                <p>{{ nl2br(e($page->message)) }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="contact col-md-12 mx-auto">
                    <h2 class="pagemidashi2">お問い合わせ</h2>
                    <div class="text col-md-12">
                        <p>{{ $page->contact }}</p>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="facebook_link col-md-12 mx-auto">
                  <h2 class="pagemidashi2">詳細ページ</h2>
                  <p>NEW STYLE HUSTLE MIYAGIのFacebookページ</p>
                    <a href="{{ $page->facebook_link }}" class="btn-square mx-auto">詳細ページへ</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

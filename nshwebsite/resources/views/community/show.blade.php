@extends('layouts.front')

@section('content')

<div class="container">
    <div class="eyecatch">
        <div class="row">
            <div class="col-md-12 mx-auto">
              @if (!is_null($page->eyecatch_path))
                <img src="{{ asset('storage/image/' . $page->eyecatch_path) }}">
              @endif
            </div>
        </div>
    </div>
    <div class="community_name">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1 class="inner">{{ $page->name }}</h1>
            </div>
        </div>
    </div>
    <div class="information">
        <h2>活動情報</h2>
        <div class="row">
            <div class="text col-md-12">
                <p>{{ $page->information }}</p>
            </div>
        </div>
    </div>
    <div class="message">
        <h2>メッセージ</h2>
        <div class="row">
           @if (!is_null($page->message_image_path))
            <div class="col-md-3">
                <img src="{{ asset('storage/image/' . $page->message_image_path) }}">
            </div>
           @endif
            <div class="col-md-9">
                <p>{{ $page->message }}</p>
            </div>
        </div>
    </div>
    <div class="facebook_link">
        <a href="{{ $page->facebook_link }}" class="btn-square">BUTTON</a>
    </div>
    <div class="contact">
        <h2>お問い合わせ</h2>
        <div class="row">
            <div class="text col-md-12">
                <p>{{ $page->contact }}</p>
            </div>
        </div>
    </div>
    <div class="video_link">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $page->video_link }}" allowfullscreen></iframe>
        </div>
      </div>
    </div>
@endsection

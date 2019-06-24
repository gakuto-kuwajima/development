{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'コミュニティの新規作成'を埋め込む --}}
@section('title', 'コミュニティの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コミュニティ新規作成</h2>
                <form action="{{ action('CommunityController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-2" for="eyecatch">アイキャッチ画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="eyecatch">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name">コミュニティ名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">活動情報</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="inforimation" rows="10">{{ old('body')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message_image">メッセージの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="message_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">メッセージ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="inforimation" rows="10">{{ old('body')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="facebook_link">facebookページのリンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="facebook_link" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="contact">お問い合わせ先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video_link">動画のリンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video_link" value="{{ old('title') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

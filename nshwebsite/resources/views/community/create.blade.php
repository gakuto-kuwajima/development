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
                <form action="{{ action('Admin\CommunityController@create') }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="例）NEW STYLE HUSTLE ○○（都道府県）">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">コミュニティ情報</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="information" rows="10" placeholder="例）主に○○で活動しています。練習会は隔週○○日○○時からおこなっています。未経験の方も大歓迎です。">{{ old('information')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image1">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image2">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image3">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video_link">動画のリンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video_link" value="{{ old('video_link') }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例えば、「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message_image">メッセージの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="message_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message">メッセージ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="message" rows="10" placeholder="例）NEW STYLE HUSTLE ○○です！だいたい平均5~10人くらい集まって練習会を開いています。もちろん県内外の方問わず参加可能なので、興味ある方はFacebookページをご覧になるか、お問い合わせ先にご連絡ください。">{{ old('message')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="facebook_link">facebookページのリンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="facebook_link" value="{{ old('facebook_link') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="contact">お問い合わせ先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact" value="{{ old('contact') }}" placeholder="例）○○@gmail.com、またはFacebookにてご連絡ください。">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

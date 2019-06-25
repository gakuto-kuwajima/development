@extends('layouts.admin')
@section('title', 'コミュニティページ編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コミュニティページ編集</h2>
                <form action="{{ action('Admin\CommunityController@update') }}" method="post" enctype="multipart/form-data">
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
                            <div class="form-text text-info">
                                設定中: {{ $community_form->eyecatch_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name">コミュニティ名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $community_form->name }}" placeholder="例）NEW STYLE HUSTLE ○○（都道府県）">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="information">活動情報</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="information" rows="10" placeholder="例）主に○○で活動しています。練習会は隔週○○日○○時からおこなっています。未経験の方も大歓迎です。">{{ $community_form->information }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message_image">メッセージの画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="message_image">
                            <div class="form-text text-info">
                                設定中: {{ $community_form->message_image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="message">メッセージ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="message" rows="10" placeholder="例）NEW STYLE HUSTLE ○○です！だいたい平均5~10人くらい集まって練習会を開いています。もちろん県内外の方問わず参加可能なので、興味ある方はFacebookページをご覧になるか、お問い合わせ先にご連絡ください。">{{ $community_form->message }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="facebook_link">facebookページのリンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="facebook_link" value="{{ $community_form->facebook_link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="contact">お問い合わせ先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="contact" value="{{ $community_form->contact }}" placeholder="例）○○@gmail.com、またはFacebookにてご連絡ください。">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="video_link">動画のリンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="video_link" value="{{ $community_form->video_link }}">
                            <p>※動画のリンクはyoutubeのみ可。「https://www.youtube.com/watch?v=○○○○○」の○○○○○の部分のみ記入してください。<br>例えば、「https://www.youtube.com/watch?v=iGFKTiqBOBs」の場合、「iGFKTiqBOBs」のみ記入。</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $community_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

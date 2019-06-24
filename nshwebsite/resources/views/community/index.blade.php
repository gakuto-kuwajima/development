@extends('layouts.admin')
@section('title', '登録済みニュースの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ニュース一覧</h2>
        </div>
        <div class="row py-4">
            <div class="col-md-4">
                <a href="{{ action('CommunityController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="admin-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="60%">名前</th>
                                <th width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $community)
                                <tr>
                                    <th>{{ $community->id }}</th>
                                    <td>{{ str_limit($community->name, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('CommunityController@edit', ['id'=> $community->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('CommunityController@delete', ['id'=> $community->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

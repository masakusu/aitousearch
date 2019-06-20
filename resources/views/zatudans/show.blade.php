@extends('layouts.app')

@section('content')

    <h1>雑談の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>投稿ユーザー</th>
            <td>{{ $zatudan->user_id }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $zatudan->content }}</td>
        </tr>
    </table>

@endsection
@extends('layouts.app')

@section('content')

    <h1>雑談の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>投稿ユーザー</th>
            <td>{{ $zatudan->user->name }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $zatudan->content }}</td>
        </tr>
    </table>
    @if (Auth::id() == $zatudan->user_id)
        {!! link_to_route('zatudans.edit', 'この雑談を編集', ['id' => $zatudan->id], ['class' => 'btn btn-light']) !!}
        {!! Form::model($zatudan, ['route' => ['zatudans.destroy', $zatudan->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif

@endsection
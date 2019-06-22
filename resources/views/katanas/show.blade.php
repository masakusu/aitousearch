@extends('layouts.app')

@section('content')

    <h1>{{ $katana->name }} の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>日本刀名</th>
            <td>{{ $katana->name }}</td>
        </tr>
        <tr>
            <th>特徴</th>
            <td>{{ $katana->feature }}</td>
        </tr>
        <tr>
            <th>エピソード</th>
            <td>{{ $katana->content }}</td>
        </tr>
        <tr>
            <th>愛刀判定</th>
            <td>@include('favorites.favorites_button')</td>
        </tr>
    </table>
    @if (Auth::id() == $katana->user_id)
        {!! link_to_route('katanas.edit', 'この日本刀を編集', ['id' => $katana->id], ['class' => 'btn btn-light']) !!}
        {!! Form::model($katana, ['route' => ['katanas.destroy', $katana->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif
    
@endsection
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
    
@endsection
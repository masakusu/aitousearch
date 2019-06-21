@extends('layouts.app')

@section('content')
    @if (Auth::id())
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
    </table>
    @endif
@endsection
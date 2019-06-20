@extends('layouts.app')

@section('content')

    <h1>日本刀一覧</h1>

    @if (count($katanas) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>投稿ユーザー</th>
                    <th>日本刀名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($katanas as $katana)
                <tr>
                    <td>{{ $katana->user }}</td>
                    <td>{!! link_to_route('katanas.show', $katana->name, ['日本刀名' => $katana->name]) !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('katanas.create', '日本刀の投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
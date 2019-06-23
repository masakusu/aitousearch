@extends('layouts.app')

@section('content')

    <h1>日本刀一覧</h1>
    
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
                    <td>{{ $katana->user->name }}</td>
                    <td>{!! link_to_route('katanas.show', $katana->name, ['id' => $katana->id]) !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
  
        {!! link_to_route('katanas.create', '日本刀の投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
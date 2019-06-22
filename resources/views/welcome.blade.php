@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="center jumbotron">
        <div class="text-center">
            <h1>愛刀サーチとは</h1>
            <p>愛刀サーチは日本刀の情報を共有し、自分のお気に入りの日本刀(愛刀)を見つける為のサイトです。</p>
        </div>
        <div class="col-sm-8">
            {!! link_to_route('katanas.history', '日本刀の歴史', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('katanas.index', '日本刀一覧', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('zatudans.index', '雑談所', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('users.index', 'ユーザー', null, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>愛刀サーチ</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>愛刀リサーチとは</h1>
            <p>愛刀リサーチは日本刀の情報を共有し、自分のお気に入りの日本刀(愛刀)を見つける為のサイトです。</p>
        </div>
        <div class="col-sm-8">
            {!! link_to_route('commons.history', '日本刀の魅力', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('katanas.index', '日本刀一覧', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('zatudans.index', '雑談所', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('users.index', 'マイプロフィール', null, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection
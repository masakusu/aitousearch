@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            {!! link_to_route('users.favorites', '愛刀一覧', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('users.goods', 'いいねした雑談一覧', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('zatudans.zatudans', '投稿した雑談の一覧', null, ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('katanas.katanas', '投稿した日本刀の一覧', null, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection
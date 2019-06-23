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
            {!! link_to_route('users.favorites', '愛刀一覧', ['id' => $user->id], ['class' => 'btn btn-primary']) !!}
            {!! link_to_route('users.goods', 'いいねした雑談一覧', ['id' => $user->id], ['class' => 'btn btn-dark']) !!}
            @if (Auth::id() == $user->id)
                {!! Form::model($user, ['route' => ['users.delete', $user->id], 'method' => 'delete']) !!}
                    {!! Form::submit('退会する', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endif
        </div>
    </div>
@endsection
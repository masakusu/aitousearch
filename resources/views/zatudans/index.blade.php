@extends('layouts.app')

@section('content')

    <h1>雑談一覧</h1>

    @if (count($zatudans) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>投稿ユーザー</th>
                    <th>内容</th>
                    <th>評価</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zatudans as $zatudan)
                <tr>
                    <td>{{ $zatudan->user->name }}</td>
                    <td>{!! link_to_route('zatudans.show', $zatudan->content,['id' => $zatudan->id]) !!}</td>
                    <td>@include('goods.goods_button', ['user' => $user])</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('zatudans.create', '雑談の投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
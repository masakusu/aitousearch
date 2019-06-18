@extends('layouts.app')

@section('content')

    <h1>日本刀一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($katanas as $katana)
                <tr>
                    <td>{!! link_to_route('katanas.show', $katana->id, ['id' => $katana->id]) !!}</td>
                    <td>{{ $katana->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '日本刀の投稿', null, ['class' => 'btn btn-primary']) !!}

@endsection
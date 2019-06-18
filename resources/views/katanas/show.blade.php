@extends('layouts.app')

@section('content')

    <h1>id = {{ $katana->id }} の詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
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
    {!! link_to_route('katanas.edit', 'この日本刀を編集', ['id' => $katana->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($task, ['route' => ['katanas.destroy', $katana->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
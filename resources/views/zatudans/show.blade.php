@extends('layouts.app')

@section('content')

    <h1>雑談詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $zatudan->id }}</td>
        </tr>
        <tr>
            <th>雑談</th>
            <td>{{ $zatudan->content }}</td>
        </tr>
    </table>
    {!! link_to_route('zatudans.edit', 'この雑談を編集', ['id' => $zatudan->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($zatudan, ['route' => ['zatudans.destroy', $zatudan->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
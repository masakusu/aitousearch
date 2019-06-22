@extends('layouts.app')

@section('content')

    <h1>{{ $katana->name }} の編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($katana, ['route' => ['katanas.update', $katana->id], 'method' => 'put']) !!}
                
                
                <div class="form-group">
                    {!! Form::label('name', '日本刀名:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('feature', '特徴:') !!}
                    {!! Form::text('feature', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'エピソード:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection
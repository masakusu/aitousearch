@extends('layouts.app')

@section('content')

    <h1>日本刀投稿ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($katana, ['route' => 'katanas.store']) !!}
                
                
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
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection
@extends('layouts.app')

@section('content')

    <h1>雑談編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($zatudan, ['route' => ['zatudans.update', $zatudan->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('content', '雑談:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection
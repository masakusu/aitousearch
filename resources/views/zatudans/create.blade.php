@extends('layouts.app')

@section('content')

    <h1>雑談投稿ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($zatudan, ['route' => 'zatudans.store']) !!}
                
        
                <div class="form-group">
                    {!! Form::label('content', '雑談:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection
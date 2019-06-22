@if (Auth::user()->is_goods($zatudan->id))
    {!! Form::open(['route' => ['goods.ungood', $zatudan->id], 'method' => 'delete']) !!}
        {!! Form::submit('いいね取り消し', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['goods.good', $zatudan->id]]) !!}
        {!! Form::submit('いいね！', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif
    


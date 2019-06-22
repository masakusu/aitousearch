@if (Auth::user()->is_favorites($katana->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $katana->id], 'method' => 'delete']) !!}
        {!! Form::submit('愛刀認定取り消し', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $katana->id]]) !!}
        {!! Form::submit('愛刀に認定', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif
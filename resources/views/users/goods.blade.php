@extends('layouts.app')

@section('content')
<h1>いいねした雑談</h1>
    <ul class="list-unstyled">
        @foreach ($zatudans as $zatudan)
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    {!! link_to_route('zatudans.show', $zatudan->content, ['id' => $zatudan->id]) !!} <span class="text-muted">posted at {{ $zatudan->created_at }}</span>
                </div>
                <div class="col-sm-4">
                    @if (Auth::id() == $zatudan->user_id)
                        {!! Form::open(['route' => ['zatudans.destroy', $zatudan->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                    @include('goods.goods_button')
                </div>
            </div>
        </li>
        @endforeach
    </ul>
{{ $zatudans->render('pagination::bootstrap-4') }}
@endsection
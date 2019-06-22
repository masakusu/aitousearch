@extends('layouts.app')

@section('content')
<h1>愛刀一覧</h1>
    <ul class="list-unstyled">
        @foreach ($katanas as $katana)
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    {!! link_to_route('katanas.show', $katana->name, ['id' => $katana->id]) !!} <span class="text-muted">posted at {{ $katana->created_at }}</span>
                </div>
                <div>
                    @if (Auth::id() == $katana->user_id)
                        {!! Form::open(['route' => ['katanas.destroy', $katana->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
                @include('favorites.favorites_button')
            </div>
        </li>
        @endforeach
    </ul>
{{ $katanas->render('pagination::bootstrap-4') }}
@endsection
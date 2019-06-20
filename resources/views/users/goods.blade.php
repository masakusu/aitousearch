@extends('layouts.app')

@section('content')
<ul class="list-unstyled">
    @foreach ($katanas as $katana)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($katana->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('zatudans.show', $zatudan->user->name, ['id' => $zatudan->user->id]) !!} <span class="text-muted">posted at {{ $zatudan->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($zatudan->content)) !!}</p>
                </div>
                @include('goods.goods_button', ['user' => $user])
            </div>
        </li>
    @endforeach
</ul>
{{ $zatudans->render('pagination::bootstrap-4') }}
@endsection
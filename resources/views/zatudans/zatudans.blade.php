<ul class="list-unstyled">
    @foreach ($zatudans as $zatudan)
        @if (Auth::id() == $zatudan->user_id) 
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    <p class="mb-0">{!! nl2br(e($zatudan->content)) !!}</p>
                </div>
                @include('goods.goods_button', ['user' => $user])
            </div>
        </li>
        @endif
    @endforeach
</ul>
{{ $zatudans->render('pagination::bootstrap-4') }}
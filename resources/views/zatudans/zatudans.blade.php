<ul class="list-unstyled">
    @foreach ($zatudans as $zatudan)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($micropost->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $zatudans->user->name, ['id' => $zatudan->user->id]) !!} <span class="text-muted">posted at {{ $zatudan->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($zatudan->content)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $zatudans->render('pagination::bootstrap-4') }}
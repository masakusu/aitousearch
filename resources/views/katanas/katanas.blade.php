<ul class="list-unstyled">
    @foreach ($katanas as $katana)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($katana->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $katana->user->name, ['id' => $katana->user->id]) !!} <span class="text-muted">posted at {{ $katana->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($katana->name)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $katanas->render('pagination::bootstrap-4') }}
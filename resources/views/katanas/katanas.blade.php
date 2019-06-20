<ul class="list-unstyled">
    @foreach ($katanas as $katana)
       @if (Auth::id() == $katana->user_id) 
        <li class="media mb-3">
            
            <div class="media-body">
                <div>
                    <p class="mb-0">{!! nl2br(e($katana->name)) !!}</p>
                </div>
                @include('favorites.favorites_button', ['user' => $user])
            </div>
            
        </li>
        @endif 
    @endforeach
</ul>
{{ $katanas->render('pagination::bootstrap-4') }}
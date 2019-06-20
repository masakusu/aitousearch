<h1>投稿した日本刀一覧</h1>

@if (Auth::id() == $katana->user_id) 
    <ul class="list-unstyled">
        @foreach ($katanas as $katana)
       
        <li class="media mb-3">
            
            <div class="media-body">
                <div>
                    <p class="mb-0">{!! nl2br(e($katana->name)) !!}</p>
                </div>
            @include('favorites.favorites_button', ['user' => $user])
            </div>
            
        </li>
        
        @endforeach
    </ul>
    {!! link_to_route('katanas.edit', 'この日本刀を編集', ['name' => $katana->name], ['class' => 'btn btn-light']) !!}
@endif 
{{ $katanas->render('pagination::bootstrap-4') }}
<h1>投稿した雑談一覧</h1>

@if (Auth::id() == $zatudan->user_id) 
    <ul class="list-unstyled">
        @foreach ($zatudans as $zatudan)
       
        <li class="media mb-3">
            
            <div class="media-body">
                <div>
                    <p class="mb-0">{!! nl2br(e($zatudan->content)) !!}</p>
                </div>
            @include('goods.goods_button', ['user' => $user])
            </div>
            {!! link_to_route('zatudans.edit', 'この雑談の編集', ['content' => $zatudan->content], ['class' => 'btn btn-light']) !!}
        </li>
        
        @endforeach
    </ul>
    
@endif 
{{ $zatudans->render('pagination::bootstrap-4') }}
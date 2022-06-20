@if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite_post', $micropost->id], 'method' => 'delete']) !!}
        <button id="fav_btn"><i class='fas fa-star'></i></button>
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite_post', $micropost->id]]) !!}
        <button id="fav_btn"><i class='far fa-star'></i></button>
    {!! Form::close() !!}
@endif

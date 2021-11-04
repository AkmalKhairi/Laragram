@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height: 120px;" src="/svg/laragram.svg">
        </div>
        <div class="col-9 pt-5">

                <div class="d-flex justify-content-between align-items-baseline">
                    <h1> {{$user->username}} </h1>
                    <a href="\p\create">Add New Posts</a>
                </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{$user -> posts -> count() }}</strong> posts </div>
            <div class="pr-5"><strong>1.0M</strong> followers</div>
            <div class="pr-5"><strong>1</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user -> profile -> title}}</div>
            <div>{{$user -> profile -> description}}</div>
            <div><a href="https://www.instagram.com/instagram/">{{$user -> profile -> url}}</a></div>
        </div>
    </div>
    <div class="row pt-5" >
        @foreach($user -> posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post -> id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
                </a>
            </div>
        @endforeach

       {{--
       <div class="col-4">
                <img src="https://i.pinimg.com/originals/9f/94/93/9f9493c87135b392ccf0ad97dcc4dd05.jpg" class="w-100">
            </div>

       <div class="col-4">
            <img src="https://i.pinimg.com/736x/2c/c6/df/2cc6dff6dfbc7a0cc82a6204d2959101--lucky-blue-smith-beautiful-models.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://media.fashionnetwork.com/m/7864/e17f/94a2/ca88/5b7e/945a/e841/314b/e5f2/58af/58af.jpg" class="w-100">

        </div>--}}

    </div>
</div>
@endsection

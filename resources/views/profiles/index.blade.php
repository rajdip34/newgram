@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="img/img.jpg" class="rounded-circle">

        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }} </h1>
                <a href="/p/create">Add new Post</a>

            </div>
            <a href="/profile/{{$user->id}}/edit"> Edit Profile</a>

            <div class="d-flex">

                <div class="pr-4">
                    <strong>{{ $user->posts->count() }} </strong> Posts
                </div>
                <div class="pr-4"> <strong>26k</strong> followers</div>
                <div class="pr-4"><strong>223</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div><p>{{ $user->profile->description }}</p></div>
            <div><a href="www.freeCodeCamp.org"><h5>{{ $user->profile->url ?? 'N/A'}}</h5></a></div>

                

                
            
        </div>

    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
              <a href="/p/{{ $post->id }}"> <img src="/storage/{{ $post->image }}" class="w-100 "></a>
            </div>

            
        @endforeach
       
    </div>
</div>
@endsection

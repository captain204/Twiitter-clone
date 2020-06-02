@extends('layouts.app')

@section('content')

    <header>

        <img
            src="/images/blank-profile-picture-973460_1280.png"
            alt=""
         class="mb-2">
    </header>

    <div class="flex justify-between"> 
        <h2 class="font-bold text-2xl mb-0"> {{$user->name}} </h2>

        <p class="text-sm"> Joined {{$user->created_at->diffForHumans()}}</p>

    </div>

    <div>

        <a href="" class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white"> Edit Profile </a>
        <a href="" class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white"> Follow me</a>

    </div>

    <hr>

    @include('_timeline',[
        'tweets'=> $user->tweets
    ])
    
@endsection

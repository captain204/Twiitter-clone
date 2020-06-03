@extends('layouts.app')

@section('content')

    <header class="mb-6 relative">

        <img
            src="/images/blank-profile-picture-973460_1280.png"
            alt=""
         class="mb-2">
    </header>

    <div class="flex justify-between items-center mb-4"> 
            <div>
                <h2 class="font-bold text-2xl mb-0"> {{$user->name}} </h2>

                <p class="text-sm"> Joined {{$user->created_at->diffForHumans()}}</p>

            </div>

            <div>
                <a href="" class="rounded-full border-gray-300 py-2 px-2 text-black text-cs mr-2"> Edit Profile </a>

                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-cs"> Follow me</a>
            </div>

            <p class="text-sm"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris erat quam, molestie ut semper non, suscipit sit amet arcu. Phasellus aliquam sollicitudin finibus. Suspendisse potenti. Ut eleifend, libero vel vulputate bibendum, quam enim maximus ipsum, eget elementum nunc leo tristique ipsum. Nam dignissim, ante vel commodo lobortis, dolor augue rutrum dolor, gravida volutpat dui augue facilisis massa. Sed cursus nunc ut placerat vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

            </p>
                    
            <img    
            src="{{ auth()->user()->avatar}}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left:calc(50%-75px); top:47%">

            

    </div>



    <hr>

    @include('_timeline',[
        'tweets'=> $user->tweets
    ])
    
@endsection

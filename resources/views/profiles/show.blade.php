<x-app>
    <header class="mb-6 relative">

        <div class="relative">

            <img
                src="/images/blank-profile-picture-973460_1280.png"
                alt=""
                class="mb-2">
            <img    
                src="{{ auth()->user()->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
                width="150"
                >
         </div>
    
        <div class="flex justify-between items-center mb-6"> 
                <div>
                    <h2 class="font-bold text-2xl mb-0"> {{$user->name}} </h2>

                    <p class="text-sm"> Joined {{$user->created_at->diffForHumans()}}</p>

                </div>

                <div class="flex">
                    @if (current_user()->is($user))
                    
                    <a href="{{$user->path('edit')}}"

                    class="rounded-full border-gray-300 py-2 px-4 text-black text-xs mr-2">

                        Edit Profile
                    </a>
                    @endif
                    <x-follow-button :user="$user"> </x-follow-button>
                </div>
        </div>
        <p class="text-sm"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris erat quam, molestie  ut semper non, suscipit sit amet arcu. Phasellus aliquam sollicitudin finibus. Suspendisse potenti. Ut eleifend, libero vel vulputate bibendum, quam enim maximus ipsum, eget elementum nunc leo tristique ipsum. Nam dignissim, ante vel commodo lobortis, dolor augue rutrum dolor, gravida volutpat dui augue facilisis massa. Sed cursus nunc ut placerat vehicula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 

        </p>
       
        
    </header>

    <hr>

    @include('_timeline',[
        'tweets'=> $user->tweets
    ])
    


</x-app>
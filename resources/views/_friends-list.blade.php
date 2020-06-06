<div class="bg-gray-200 rounded-lg py-4 px-6">

    <h3 class="font-bold text-xl mb-4"> Following </h3>

    <ul>

        @forelse(auth()->user()->follows as $user)
            
        <li class="mb-4">
            <div>
                <a href="{{route('profile', $user)}}" class="flex-items-center text-sm">

                <img class="mb-4"

                    src="{{$user->avatar}}"

                    alt="" class="rounded-full mr-2"
                    width="40"
                    height = "40"
                >

                {{$user->name}}

            </div>

        </li>
        @empty

        <li> You are not following anybody yet </li>

        @endforelse

    </ul>

</div>
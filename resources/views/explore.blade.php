<x-app>

   <div>
        @foreach ($users as $user)
        <a href="{{$user->path()}}">
            <div class="flex items-center mb-5">
                
                <img src="{{$user->avatar}}"
            
                alt=""
            
                width="60" 
                class="mr-4 rounded">
                <div>
                    <h4 class="bold"> {{'@'.$user->username}} </h4>
                </div>

            </div>
        </a>
        @endforeach
        {{$users->links()}}
   </div>


</x-app>
<ul>
    <li>
        <a 
        class="font-bold text-lg mb-4 block"

        href="{{route('home')}}">

        Home</a></li>
    <li><a 
        class="font-bold text-lg mb-4 block"

        href="/explore">

        Explore</a></li>
    <li><a 
        class="font-bold text-lg mb-4 block"

        href="#">

        Notifications</a></li>

    <li><a 
        class="font-bold text-lg mb-4 block"

        href="/messages">

        Messages</a></li>

    <li><a 
        class="font-bold text-lg mb-4 block"
        href="/bookmarks">
        Messages</a></li>
    
    <li><a 
        class="font-bold text-lg mb-4 block"
        href="/lists">
        Lists</a></li>
    <li><a 
        class="font-bold text-lg mb-4 block"
        href="{{route('profile',auth()->user())}}">
        Profile</a></li>
    <li>
        <form method="POST" action="/logout">
            @csrf

            <button class="font-bold text-lg">Logout </button>

        </form>    
</ul>
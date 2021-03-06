
<div class="flex">
    <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
        <div class="flex items-center mr-4">
            
            <svg xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 20 20"class="text-gray-500 w-3 mr-1">
            <path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/>
            </svg>
            <button type="submit" class="text-xs text-gray-500">
                {{$tweet->likes ?: 0}}    
            </button>
        </div>
    </form>
    <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
        @method('DELETE')
        <div class="flex items-center'text-gray-500'}}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            class="text-gray-500 mr-1 w-3 ">
            <path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/></svg>
            <button type="submit" class="text-xs text-gray-500">
                {{$tweet->dislikes ?: 0}}
            </button>
        </div>
    </form>
</div>
<form method="POST"  action="/tweets">
    @csrf
    <textarea
        name="body"

        class="w-full"
        placeholder="Whats up doc?"
        required
    ></textarea>

    <hr class="my-4">

        <footer class="flex justify-between">
            
            <img 
                src="{{ auth()->user()->avatar}}"

                alt="Your Avatar"

                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <button type="submit" 
                class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white"
                >
                publish
            </button>        

        </footer>
        
</form>

@error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}} </p>
@enderror




<h3 class="font-bold text-xl mb-4"> Friends </h3>
<ul>
    @foreach (range(1,8) as $index)
        
    <li>
        <div class="flex items-center text-sm">
            <img class="mb-4"
                src="https://i.pravatar.cc/40"

                alt="" class="rounded-full mr-2"
            >
            John Doe
        </div>

    </li>

    @endforeach

</ul>
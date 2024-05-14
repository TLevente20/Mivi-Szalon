<div>
    <div class="flex">
        {{-- Button --}}
        <div class="flex items-center text-[50px] ml-2 mr-10">
            <a href="" id="moveLeft">
                <img src="{{asset('icon/arrow-left.png')}}" alt="arrow icon" class="min-h-[60px] min-w-[60px]">
            </a>
        </div>
        {{-- Post Grid --}}
        <div class="flex overflow-x-hidden scroll-smooth" id="postGrid">
            @foreach ($posts as $post)
                <livewire:home.post-card :post="$post"/>
            @endforeach
        </div>
        {{-- Button --}}
        <div class="flex items-center text-[50px] ml-10 mr-2">
            <a href="" id="moveRight">
                <img src="{{asset('icon/arrow-right.png')}}" alt="arrow icon" class="min-h-[60px] min-w-[60px]">
            </a>
        </div>
    </div>
</div>

<script>
    document.getElementById('moveLeft').addEventListener('click', function(event) {
        event.preventDefault();
        const postGrid = document.getElementById('postGrid');
        postGrid.scrollLeft -= postGrid.offsetWidth / 3; // Move by one-third of the container width
    });

    document.getElementById('moveRight').addEventListener('click', function(event) {
        event.preventDefault();
        const postGrid = document.getElementById('postGrid');
        postGrid.scrollLeft += postGrid.offsetWidth / 3; // Move by one-third of the container width
    });
</script>

<div>
    <div class="flex">
        {{-- Button --}}
        <div class="flex items-center text-[50px] ml-2 mr-10">
            <a href="#">
                <img src="{{asset('icon/arrow-left.png')}}" alt="arrow icon" class="min-h-[60px] min-w-[60px]">
            </a>
        </div>
        {{-- Post Grid --}}
        <div class="inline-grid grid-cols-3 gap-5 ">
            @for ($i = 0; $i < 3; $i++)
                <livewire:home.post-card/>
            @endfor
        </div>
        {{-- Button --}}
        <div class="flex items-center text-[50px] ml-10 mr-2">
            <a href="#">
                <img src="{{asset('icon/arrow-right.png')}}" alt="arrow icon" class="min-h-[60px] min-w-[60px]">
            </a>
        </div>
    </div>
</div>


<div class="w-1/3 flex-shrink-0 ">
    <div class="mx-3 bg-my-white-100 p-8 rounded-3xl min-h-80 flex flex-col justify-between">
        <h1 class="text-[23px] font-medium mb-6">{{$post->title}}</h1>
        <div class="mb-8 flex justify-between">
            <p class="text-[17px] pr-6 overflow-hidden">{!! trim($post->body, '<p>&nbsp;</p>') !!}</p>
            @if (!is_null($post->img))
                <img src="{{ asset('storage/' . $post->img) }}" class="max-h-48 max-w-32">
            @endif
        </div>
        <p class="text-right text-my-black-100 text-[18px]">{{$post->created_at->format('Y-m-d')}}</p>
    </div>
</div>

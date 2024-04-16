<div>
    @php
        $currentPage = $path = request()->path();
    @endphp
    <div class="flex justify-between  pr-24 pl-8">
        <a href="{{ route('home') }}"><img src="{{ asset('img/mivi.logo.png') }}" alt="Mivi logo" class=" h-[76px]"></a>
        <div class="flex text-[15px] my-auto font-medium">
            <a href="{{ route('home') }}" class="{{ $currentPage === '/' ? 'font-semibold': ''}} ml-14">Főoldal</a>
            <a href="#" class="ml-14">Rólunk</a>
            <a href="{{ route('hazirend') }}" class="{{ $currentPage === 'hazirend' ? 'font-semibold': ''}} ml-14">Házirend</a>
            <a href="#" class="ml-14">Kapcsolat</a>
            <a href="#" class="ml-14">Kutyasuli</a>
            <a href="#" class="ml-14">Galéria</a>
        </div>
    </div>
</div>

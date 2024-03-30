<div>
    {{-- Service Grid --}}
    <div class=" inline-grid grid-cols-2 px-20">
        @for ($i = 0; $i < 4; $i++)
            
        
        <div class=" w-3/5 m-auto mt-20">
            <img src="{{asset('icon/placeholder-icon.png')}}" alt="service icon" class="h-[50px]">
            <h2 class="text-[26px] mt-5 mb-4 font-medium text-my-black-100">Frisírozás és Szőrzetápolás:</h2>
            <p class="text-[18px]">
                Frissítse fel kutyusát a frisírozás és szőrzetápolás szolgáltatásainkkal! Fürdetésünk és szárításunk segít a kutyusnak frissen és tisztán érezni magát, míg szőrzetvágásunk és formázásunk az ideális megjelenést biztosítja.
            </p>
        </div>
        @endfor
    </div>
    {{-- See more.. --}}
    <div class="text-center my-16">
        <a href="#" class="uppercase text-[28px] bg-my-pink-100 px-16 py-4 font-medium rounded-xl">Láss Többet</a>
    </div>

    
</div>

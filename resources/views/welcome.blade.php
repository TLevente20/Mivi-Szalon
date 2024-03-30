<x-layout>
    {{-- whole page --}}
    <div> 
        {{-- Hero --}}
        <div class="mx-28 flex mt-12"> 
            <div class="w-1/2 pt-8 mr-10">
                <img src="{{ asset('img/mivi.logo.png') }}" class=" absolute h-[344px] ml-24 opacity-10">
                <h1 class=" text-4xl font-semibold">Mivi Salon</h1>
                <p class="mt-5 text-lg font-normal mb-10">
                    Nálunk nem csak egy helyet talál, ahol kutyája tündöklővé válhat, hanem egy közösséget is, ahol a kedvencét szeretettel fogadják, és minden igényét figyelembe veszik. Különlegesek vagyunk abban, hogy nem csak a kutyák külső szépségére, hanem egészségükre is odafigyelünk
                </p>
                <a href="#" class=" uppercase text-lg font-medium bg-my-pink-100 py-2 px-8 rounded-ss-[20px] rounded-ee-[20px] rounded-se-[4px] rounded-es-[4px]">Kapcsolatfelvétel ></a>
                
            </div>
            <div class="w-1/2 ml-10">
                <img src="{{ asset('img/home1.png') }}" alt="Mivi" class="h-[322px] float-start">
                <div class=" bg-my-white-300 w-[520px] h-[280px] mt-20 ml-20">

                </div>
            </div>
        </div>

        {{-- Line and Title --}}
        <div class=" bg-my-black-100 h-[73px] mt-20"></div>
        <div class=" text-my-black-100 text-[33px] font-medium bg-my-white-300 mx-auto text-center max-w-[604px] py-8 mt-[-94px]">Szolgáltatásaink</div>

        {{-- Services --}}
        <livewire:home.services/>
    </div>
</x-layout>

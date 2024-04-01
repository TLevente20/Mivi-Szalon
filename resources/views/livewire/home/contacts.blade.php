<div>
    <div class="grid grid-cols-2 gap-x-8 mx-52">
        {{-- Contacts --}}
        <div>
            @for ($i = 0; $i < 2; $i++)
                <div class="flex mb-8">
                    <div class="flex flex-col mr-8">
                        <p class="text-[23px] font-semibold ">
                            Horváth Vivien:
                        </p>
                    </div>
                    <div class="flex flex-col text-[20px] pl-4">
                        <p class=" font-medium">
                            email1@gmail.com
                        </p>
                        <p class="font-medium">
                            06701234567
                        </p>
                    </div>
                </div>
            @endfor
        </div>
        
        {{-- Opening --}}
        <div class="col-span-1 pl-12">
            <p class="text-[20px] font-medium text-right">
                Az időpont egyeztetése telefonon hétfőtől szombatig, 8:00 és 18:00 között lehetséges!
            </p>
        </div>
    </div>
</div>

<div>
    <div class="">
        <div class="flex justify-between">
            <div class="fi-header-heading text-xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-2xl">
                Payments Details
            </div>
            <div>

            </div>
        </div>
        <div class="description">
            <p class="text-gray-500 text-sm">Payments are made monthly! make sure to keep your credit card info updated.</p>
        </div>
    </div>
    <div class="mt-4">
        <div class="relative w-fit z-10">
            <!-- Credit card -->
            <div class="h-52 w-96 bg-primary-50/30 rounded-md relative flex flex-col justify-between p-5 shadow-md overflow-hidden z-40" style="backdrop-filter: blur(8px)">
                <div class="flex justify-between">
                    <div class="header">
                        <span>Mastercard</span>
                    </div>

                    <div class="h-10 w-10">
                        <img src="{{ asset("images/icons/mastercard-logo.svg") }}" alt="">
                    </div>
                </div>

                <div class="number flex justify-between items-center">
                    <div class="flex flex-col">
                        <span class="font-mono text-xl">NNNN-NNNN-NNNN-NNNN</span>
                        <span>12/28</span>
                    </div>

                    <div class="h-10 w-10">
                        <img src="{{ asset("images/icons/cc-chip.svg") }}" alt="">
                    </div>
                </div>

                <div class="name">
                    <span>Fathi Helmi</span>
                </div>
            </div>
            <div class="w-28 h-28 rounded-full bg-primary-500/40 right-[0%] bottom-[20%] absolute"></div>
            <div class="w-20 h-20 rounded-full bg-primary-500/30 right-[27%] bottom-[20%] absolute"></div>
            <div class="w-16 h-16 rounded-full bg-primary-500/20 right-[45%] bottom-[20%] absolute"></div>
        </div>
        <div class="mt-2">
            <x-filament::button>Edit payment method</x-filament::button>
        </div>
    </div>
</div>
<x-filament::modal id="show-api-key" sticky-header sticky-footer>
    <x-slot name="heading">
        <div class="text-center w-full">
            Please save your key
        </div>
    </x-slot>

    <x-filament::input.wrapper disabled="false" x-data="{
     copied: false,
     shouldShowError: false,
     confirmed: false,
     copy(text) {
        this.copied = true
        navigator.clipboard.writeText(text);
      }
    }">
        <x-filament::input
                type="text"
                disabled="true"
                x-model="$wire.last_key"
        />

        <x-slot name="suffix">
            <div :class="'flex cursor-pointer'" @click="copy($wire.last_key)">
                <x-heroicon-o-clipboard class="cursor-pointer h-4"></x-heroicon-o-clipboard>
                <span x-show="!copied">copy</span>
                <span x-show="copied">copied!</span>
            </div>
        </x-slot>
    </x-filament::input.wrapper>


    <div class="text-sm">
        <span>Copy the above key and save it in a safe place, this won't be displayed again.</span>
    </div>


    <x-slot name="footer">
        <div>
            <x-filament::button color="gray">Close</x-filament::button>
        </div>
    </x-slot>
</x-filament::modal>
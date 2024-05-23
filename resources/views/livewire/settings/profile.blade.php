<div>
    <div class="">
        <div class="flex justify-between">
            <div class="fi-header-heading text-xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-2xl">
                Profile Details
            </div>
            <div>

            </div>
        </div>
        <div class="description">
            <p class="text-gray-500 text-sm">view or update your profile details.</p>
        </div>
    </div>
    <div class="mt-2">
        <div>
            <form wire:submit="save">
                <div class="pb-3">
                    {{ $this->form }}
                </div>
                <div class="flex justify-end">
                    <x-filament::button type="submit">
                        Save
                    </x-filament::button>
                </div>
            </form>
        </div>
    </div>
</div>
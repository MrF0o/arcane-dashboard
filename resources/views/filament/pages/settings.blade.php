<x-filament-panels::page>
    <div x-data="{ tab: 'tab1' }" class="lg:flex w-full">
        <x-filament::tabs label="Content tabs" class="lg:flex lg:flex-col mx-0 shrink-0 lg:w-3/12 sm:w-full h-fit">
            <x-filament::tabs.item @click="tab = 'tab1'" :alpine-active="'tab === \'tab1\''">
                <div class="flex gap-2 items-center">
                    <x-heroicon-o-user class="h-4"></x-heroicon-o-user>
                    <span>Profile</span>
                </div>
            </x-filament::tabs.item>

            @if(Auth::user()->isSuperAdmin() || Auth::user()->hasRole('Admin'))
                <x-filament::tabs.item @click="tab = 'tab2'" :alpine-active="'tab === \'tab2\''">
                    <div class="flex gap-2 items-center">
                        <x-heroicon-o-credit-card class="h-4"></x-heroicon-o-credit-card>
                        <span>Payments</span>
                    </div>
                </x-filament::tabs.item>
                <x-filament::tabs.item @click="tab = 'tab3'" :alpine-active="'tab === \'tab3\''">
                    <div class="flex gap-2 items-center">
                        <x-heroicon-o-key class="h-4"></x-heroicon-o-key>
                        <span>API Keys</span>
                    </div>
                </x-filament::tabs.item>
            @endif
        </x-filament::tabs>

        <div class="max-w-full w-full lg:mx-10 mt-5 lg:mt-0">
            <div x-show="tab === 'tab1'">
                <div>
                    <livewire:settings.profile/>
                </div>
            </div>
            @if(Auth::user()->isSuperAdmin() || Auth::user()->hasRole('Admin'))
                <div x-show="tab === 'tab2'" class="z-10 relative">
                    <div>
                        <livewire:settings.payment-info/>
                    </div>
                </div>
                <div x-show="tab === 'tab3'">
                    <livewire:settings.api-keys/>
                </div>
            @endif
        </div>
    </div>
    {{-- Display Events Role Resource Table --}}
</x-filament-panels::page>

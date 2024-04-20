<div>
    <div class="">
        <div class="flex justify-between">
            <div class="fi-header-heading text-xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-2xl">API Keys</div>
            <div>
                {{ $this->createAction }}
            </div>
        </div>
        <div class="description">
            <p class="text-gray-500 text-sm">Here you can create and revoke api keys for the Agent, the agent need these to connect to us.</p>
        </div>
    </div>
    <div class="mt-2">
        <livewire:settings.show-api-key-modal :last_key="$last_key"></livewire:settings.show-api-key-modal>
        {{ $this->table }}
    </div>
</div>
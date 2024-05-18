<x-filament-panels::page class="h-full">
    <div class="w-full min-h-full flex">
        <div class="bg-gray-100 dark:bg-gray-900 rounded h-fit p-3 w-3/12">
            <div>
                <span class="capitalize font-black text-sm tracking-wide">Scan history</span>
            </div>

            <div class="mt-2"></div>
            <div>
                <div>
                    <span class="text-xs text-gray-700 font-medium p-2 dark:text-white">Today</span>
                </div>

                <div class="flex flex-col gap-1" wire:>
                    @foreach($this->scans->take($showMax) as $scan)
                        <div wire:key="{{ $scan->id }}" wire:click.stop="selectScan({{ $scan->id }})" class="hover:bg-gray-50  dark:hover:bg-white/5 transition duration-300 rounded-md p-2 cursor-pointer flex justify-between items-center side-scan {{ $selected_scan && $selected_scan->id === $scan->id ? "bg-gray-50 dark:bg-white/5" : "" }}">
                            <div class="flex items-center">
                                <h5 class="font-medium dark:text-gray-50 text-gray-700 text-sm {{ $selected_scan && $selected_scan->id === $scan->id ? "text-primary-600 dark:text-primary-400" : "" }}">Scan {{ \Illuminate\Support\Carbon::make($scan->created_at)->diffForHumans() }}</h5>
                                <x-filament::badge class="ms-1" size="sm" color="{{ ($scan->status === 'finished' ? 'info' : 'warning') }}">{{$scan->status}}</x-filament::badge>
                            </div>
                            <div class="side-scan-action {{ $selected_scan && $selected_scan->id === $scan->id ? 'flex' : 'hidden' }} items-center gap-1 dark:text-gray-50 text-gray-700">
                                <x-heroicon-c-ellipsis-vertical class="h-5 w-5"></x-heroicon-c-ellipsis-vertical>
                                <x-heroicon-c-trash wire:click.stop="trashScan({{ $scan->id }})" class="h-4 w-4"></x-heroicon-c-trash>
                            </div>
                        </div>
                        @if($this->scans->take(self::$INITIAL_SCANS_SHOWN)->last()->id == $scan->id)
                            <div>
                                <button wire:click="increaseLoadMax()" class="flex relative p-2 text-sm items-center w-full hover:bg-gray-50  dark:hover:bg-white/5 rounded-full transition duration-300">
                                    <span><x-heroicon-o-chevron-down class="h-5 w-5"></x-heroicon-o-chevron-down></span>
                                    <span class="ps-5">Show more</span>
                                    <span wire:loading class="ms-5">
                                      <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                      </svg>
                                    </span>
                                </button>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
        <div class="flex-1 min-h-full ms-4 ">

            <div class="scans">
                <div class="p-3 flex justify-between items-center">
                    <span class="text-lg font-semibold"> Scan Results </span>
                    <span>
                       {{ $this->scanAction }}
                   </span>
                </div>

                @if($selected_scan)
                    @if($selected_scan->results()->get()->count() > 0)
                        @foreach($selected_scan->results()->get() as $result)
                            <div class="scan w-full mt-2" x-data="{
                    expanded: false,
                    get rotation() {
                        return [this.expanded ? 'rotate-180' : '']
                    }
                }">
                                <div :class="'bg-white dark:border-gray-700 dark:bg-gray-800 border relative expandable w-full rounded-xl ' + (expanded ? 'expanded' : 'collapsed') ">
                                    <div>
                                        <div class="p-4">
                                            <div class="flex items-center justify-between pb-2">
                                                <h4 class="font-semibold">{{ $result->title }}</h4>
                                                <div class="flex items-center gap-2 justify-between">
                                    <span>
                                        <x-filament::button color="info" size="xs">Assign to</x-filament::button>
                                    </span>
                                                    <button :class="'transition duration-300 font-black cursor-pointer ' + rotation">
                                                        <x-heroicon-o-chevron-down @click="expanded = !expanded" class="h-5 w-5"></x-heroicon-o-chevron-down>
                                                    </button>
                                                </div>
                                            </div>
                                            <div :class="(expanded ? '' : 'line-clamp-3')">
                                                <p :class="'text-sm vulnr-description'">{{ $result->ai_note }}</p>
                                                <div>
                                                    <div>
                                                        <h6 class="text-xs font-medium mt-2">Vulnerable snippets</h6>
                                                    </div>
                                                    <pre x-data=""><code x-html="hljs.highlight(`{{ $result->vulnerable_snippets }}`, {language: 'php', ignoreIllegals: true}).value"></code></pre>
                                                </div>

                                                <div class="text-xs">
                                                    <span class="p-2">start offset: {{ $result->start_offset }}</span>
                                                    <span class="p-2">end offset: {{ $result->end_offset }}</span>
                                                    <span class="p-2">file: {{ $selected_scan->site->document_root . '/' . $result->file_path }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="scan">
                            <div class="bg-gray-50/50 dark:bg-gray-950 m-2 rounded-xl p-4 bg-white border">
                                <div class="font-black text-center pb-2">
                                    Oops!
                                </div>
                                <p class="text-center dark:text-gray-50 text-sm text-gray-700">Nothing here please select a Scan from the left menu or start a new one</p>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="scan">
                        <div class="bg-gray-50/50 dark:bg-gray-800 dark:border-gray-700 m-2 rounded-xl p-4 bg-white border">
                            <div class="font-black text-center pb-2">
                                Good to go!
                            </div>
                            <p class="text-center dark:text-gray-50 text-sm text-gray-700">Nothing here please select a Scan from the left menu or start a new one</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-filament-panels::page>

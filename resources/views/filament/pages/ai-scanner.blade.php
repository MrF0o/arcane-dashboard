<x-filament-panels::page class="h-full">
    <div class="w-full min-h-full flex">
        <div class="bg-gray-100 rounded h-fit p-3 w-3/12">
            <div>
                <span class="capitalize font-black text-sm tracking-wide">Scan history</span>
            </div>

            <div class="mt-2"></div>
            <div>
                <div>
                    <span class="text-xs text-gray-700 font-medium p-2">Today</span>
                </div>

                <div>
                    @foreach($this->scans()->get() as $scan)
                        <div wire:key="{{ $scan->id }}" wire:click="selectScan({{ $scan->id }})" class="hover:bg-gray-50 transition duration-300 rounded p-2 cursor-pointer flex justify-between items-center side-scan">
                            <div class="flex items-center">
                                <h5 class="font-medium text-gray-700 text-sm">Scan {{ \Illuminate\Support\Carbon::make($scan->created_at)->diffForHumans() }}</h5>
                                <x-filament::badge class="ms-1" size="sm" color="{{ ($scan->status === 'finished' ? 'info' : 'warning') }}">{{$scan->status}}</x-filament::badge>
                            </div>
                            <div class="side-scan-action hidden">
                                <x-heroicon-c-ellipsis-vertical class="h-5 w-5"></x-heroicon-c-ellipsis-vertical>
                                <x-heroicon-c-trash class="h-4 w-4"></x-heroicon-c-trash>
                            </div>
                        </div>
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
                                <div :class="'bg-white relative expandable w-full rounded-xl ' + (expanded ? 'expanded' : 'collapsed') ">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between pb-2">
                                            <h4 class="font-semibold">SQL Injection</h4>
                                            <div class="flex items-center gap-2 justify-between">
                                    <span>
                                        <x-filament::button color="info" size="xs">Assign to</x-filament::button>
                                    </span>
                                                <span :class="'transition duration-300 font-black cursor-pointer ' + rotation">
                                        <x-heroicon-o-chevron-down @click="expanded = !expanded" class="h-5 w-5"></x-heroicon-o-chevron-down>
                                    </span>
                                            </div>
                                        </div>
                                        <div :class="(expanded ? '' : 'line-clamp-3')">
                                            <p :class="'text-sm vulnr-description'">{{ $result->ai_note }}</p>
                                            <div>
                                                <div>
                                                    <h6 class="text-xs font-medium mt-2">Vulnerable snippets</h6>
                                                </div>
                                                <pre x-data=""><code x-html="hljs.highlight(`$test = true`, {language: 'php', ignoreIllegals: true}).value" ></code></pre>
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
                        @endforeach
                    @else
                        <div class="scan">
                            <div class="bg-gray-50/50 m-2 rounded-xl p-4 bg-white border">
                                <div class="font-black text-center pb-2">
                                    Oops!
                                </div>
                                <p class="text-center text-sm text-gray-700">Nothing here please select a Scan from the left menu or start a new one</p>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="scan">
                        <div class="bg-gray-50/50 m-2 rounded-xl p-4 bg-white border">
                            <div class="font-black text-center pb-2">
                                Good to go!
                            </div>
                            <p class="text-center text-sm text-gray-700">Nothing here please select a Scan from the left menu or start a new one</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-filament-panels::page>

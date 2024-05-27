@php
    $record = $this->getMountedTableActionRecord();
    $matches = json_decode($record->match, true);
    $kind = explode(':', array_keys($matches)[0]);
@endphp
<div>
    <div>
        <div class="my-2 ">
            <div class="flex flex-col gap-1 justify-center -py-2">
                <h6 class="font-semibold text-lg">Agent Message:</h6>
                <p class="font-medium font-mono">
                    {{ $record->message }}
                </p>
            </div>
            <div class="flex gap-2 items-center pt-6 text-sm">
                <h6 class="font-semibold">At:</h6>
                <p> {{ $record->created_at }} </p>
            </div>
        </div>
        <div>
            <table class="table w-full overflow-hidden rounded-t-lg">
                <thead class="bg-gray-100 p-2 border">
                    <tr>
                        <th>Argument Name</th>
                        <th>Argument Kind</th>
                        <th>Blocked Value</th>
                        <th>IP Address</th>
                    </tr>
                </thead>
                <tbody class="w-full p-2">
                    <tr class="text-center border">
                        <td class="p-2 text-lg font-mono">{{ $kind[1] }}</td>
                        <td class="p-2 text-lg font-mono">{{ $kind[0] }}</td>
                        <td class="p-2 text-lg font-mono">{{ $matches[$kind[0] . ':' . $kind[1]] }}</td>
                        <td class="p-2 text-lg font-mono">{{ $record->related_ip }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

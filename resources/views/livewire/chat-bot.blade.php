<div class="h-full w-full">
    <div class="h-full overflow-y-scroll space-y-4">
        @foreach ($chats as $chat)
            @if ($chat['user'] === "ai")
                <div class="flex justify-start">
                    <p class="max-w-xs bg-orange-200 rounded-tl-3xl rounded-tr-3xl rounded-br-3xl p-3">
                        {!! $chat['response'] !!}
                    </p>
                </div>
            @else
                <div class="flex justify-end">
                    <p class="max-w-xs bg-indigo-100 rounded-tr-3xl rounded-tl-3xl rounded-bl-3xl p-3">
                        {{ $chat['request'] }}
                    </p>
                </div>
            @endif
        @endforeach
    </div>

    <div class="flex items-center bg-white overflow-hidden p-1 rounded-2xl">
        <label class="flex-1">
            <input wire:model="input" class="bg-white p-3 w-full rounded-l-2xl" type="text"
                   placeholder="Type something..."/>
        </label>
        <button wire:click="submit" class="bg-indigo-900 text-white px-4 py-2 rounded-2xl h-full">
            Submit
        </button>
    </div>

</div>
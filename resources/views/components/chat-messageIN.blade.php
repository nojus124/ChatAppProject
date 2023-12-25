<div class="getMessage flex items-start justify-end pb-1">
    <div class="mr-1 p-2 bg-gray-200 rounded-lg h-auto max-w-sm">
        <div class="text-sm text-wrap whitespace-normal overflow-hidden">{{$message}}</div>
    </div>

    <div class="flex flex-col items-center">
        @if($userPhoto !== null)
            <img class="w-10 h-10 rounded-full" src="{{ asset($userPhoto) }}" alt="User Photo">
        @endif
        <div class="px-2 py-1 my-1 w-fit bg-gray-200 text-xs rounded-lg">{{$user}}</div>
    </div>
</div>

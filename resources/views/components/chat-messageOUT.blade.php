<div class="getMessage space-y-4 pb-1">
    <!-- Sender Message -->
    <div class="flex items-start select-none w-full">
        <div class="flex items-center">
            <div class="flex-row items-center align-middle">
                @if($userPhoto !== null)
                    <img class="w-10 h-10 rounded-full" src="{{ asset($userPhoto) }}" alt="User Photo">
                @endif
                <div class="px-2 py-1 mt-1 text-xs rounded-lg w-fit bg-blue-300">
                    <div class=" whitespace-nowrap overflow-hidden">{{$user}}</div>
                </div>
            </div>
        </div>
        <div class="ml-1 p-2 bg-blue-100 rounded-lg max-w-[80%]">
            <p class="text-sm whitespace-normal overflow-hidden">{{$message}}</p>
        </div>
    </div>
</div>

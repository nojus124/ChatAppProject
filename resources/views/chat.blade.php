<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto px-4">
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <div class="flex items-center justify-between px-6 py-4 bg-gray-200">
                    <h1 class="text-lg font-semibold">Chatting App</h1>
                    <span class="text-gray-600 flex items-center">Online<div class="w-4 h-4 bg-green-500 rounded-full ml-2"></div></span>
                </div>

                <div id="messages" class="px-6 py-4 min-h-[150px] max-h-[450px] overflow-auto">
                    <div class="getMessage flex items-start justify-center pb-1">
                        <div class="mr-3 p-3 bg-gray-100 rounded-lg">
                            <p class="text-sm">Hey! What's up!  👋</p>
                            <p class="text-sm">Ask a friend to open this link and you can chat with them!</p>
                        </div>
                    </div>
                </div>
                <form>
                <div class="border-t border-gray-300 px-6 py-3 flex items-center">
                    <input id="message" type="text" class="flex-1 border rounded-l-md p-2 focus:outline-none focus:ring focus:border-blue-500" placeholder="Type your message...">
                    <button class="bg-blue-500 text-white rounded-r-md p-2 ml-2">Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('80d90d4c8660f2eb6f62', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('public');
        channel.bind('SendEvent', function(data) {
            alert(JSON.stringify(data));
        });
        channel.bind('chat', function (data) {
            $.post("/receive", {
                _token:  '{{csrf_token()}}',
                message: data.message,
                user: data.user,
                userPhoto: data.userPhoto,
            })
                .done(function (res) {
                    $("#messages > .getMessage").last().after(res);
                    $(document).scrollTop($(document).height());
                    console.log(data);
                });
        });

        //Broadcast messages
        $("form").submit(function (event) {
            event.preventDefault();

            $.ajax({
                url:     "/broadcast",
                method:  'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data:    {
                    _token:  '{{csrf_token()}}',
                    message: $("form #message").val(),
                }
            }).done(function (res) {
                $("#messages > .getMessage").last().after(res);
                $(document).scrollTop($(document).height());
                $("form #message").val('');
            });
        });
    </script>
</x-app-layout>

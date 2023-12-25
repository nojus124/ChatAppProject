<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PusherController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function broadcast(Request $request)
    {
        $user = Auth::user(); // Use the authenticated user's ID
        if ($user) {
            $name = $user->name; // Access the 'name' attribute of the user
            if(isset($user->profile_photo_path)){
                $userPhoto ="storage/". $user->profile_photo_path;
            }
            else{
                $userPhoto = null;
            }
            // Now, $name contains the name of the authenticated user
        } else {
            // Handle the case where the user is not authenticated
            $name = null;
        }
        $message = $request->get('message');

        // Broadcast the event with user data and message
        broadcast(new PusherBroadcast($name, $message, $userPhoto))->toOthers();

        // Return a response if needed
        return view('components.chat-messageIN', ['message' => $message, 'user' => $name, 'userPhoto'=> $userPhoto]);
    }

    public function receive(Request $request)
    {
        // You may want to store the received message in the database or perform other actions
        $user = $request->get('user');
        $message = $request->get('message');
        $userPhoto = $request->get('userPhoto');

        return view('components.chat-messageOUT', ['user' => $user, 'message' => $message, 'userPhoto'=> $userPhoto]);
    }
}

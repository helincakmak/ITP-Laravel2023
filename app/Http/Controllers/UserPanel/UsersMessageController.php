<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
use App\Models\Admin;


class UsersMessageController extends Controller
{
    public function createMessage()
    {
        $admins = User::where('is_admin', true)->get();
        return view('home.message.create_message', compact('admins'));
    }

    public function showMessages()
    {
        $user = auth()->user();
        $messages = Message::where('sender_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home.message.show_messages', compact('messages'));
    }

    public function storeMessage(Request $request)
    {
        $message = new Message();
        $message->sender_id = auth()->id();
        $message->receiver_id = 1;
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('users.messages');
    }
}

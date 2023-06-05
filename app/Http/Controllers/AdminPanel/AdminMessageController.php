<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('sender')->orderBy('created_at', 'desc')->get();
        return view('admin.message.index', compact('messages'));
    }


    public function show(Message $message)
    {
        return view('admin.message.show_messages', compact('message'));
    }


    public function reply(Request $request, Message $message)
    {
        $reply = new Message();
        $reply->sender_id = auth()->id();
        $reply->receiver_id = $message->sender_id;
        $reply->message = $request->input('message');
        $reply->save();

        return redirect()->route('admin.message.index', $message);
    }
    public function replyForm(Message $message)
    {
        $message->load('sender');

        return view('admin.message.reply_form', compact('message'));
    }

}



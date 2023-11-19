<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function SendMessage(Request $request)
    {
        $message = $request->input('message');
        $user_id = $request->input('user_id');

        DB::table('messages')->insert([
            'message' => $message,
            'user_id' => $user_id,
            'created_at' => now(),
            'updated_at' => now(),
            'is_read' => 0
        ]);

        return response()->json(['status' => 'Message sent successfully']);
    }

    public function getMessages()
    {
    $messages = DB::table('messages')->orderBy('created_at', 'desc')->get();

    return response()->json($messages);
    }
}

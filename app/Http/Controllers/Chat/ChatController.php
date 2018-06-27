<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Message;

class ChatController extends Controller
{
    public function __construct() { $this->middleware('auth')->except('store', 'get_user_msg'); }

    public function index()
    {
        return view('pages/chat/list_chats', 
        [
            'name' => 'Chat',
            'messages' => DB::table('messages')
                ->select('users.*', 'messages.from')
                ->join('users', 'users.id', '=', 'messages.from')
                ->groupBy('from')
                ->having('from', '>', 1)
                ->get()
        ]);
    }

    public function get_user_msg($id){
        return DB::table('messages')
            ->orderBy('created_at')
            ->where('to', $id)
            ->orWhere('from', $id)
            ->take(100)
            ->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'to' => 'required|max:10',
            'from' => 'required|max:10',
            'message' => 'required',
        ]);

        tap(new Message($data))->save();
        return "sended";
    }

    public function show($id)
    {
        return view('pages/chat/chat', 
        [
            'name' => 'Chat',
            'user_id' => $id,
            'messages' => DB::table('messages')
                ->orderBy('created_at', 'desc')
                ->where('to', $id)
                ->orWhere('from', $id)
                ->take(100)
                ->get()
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

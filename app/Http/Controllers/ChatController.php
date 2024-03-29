<?php

namespace App\Http\Controllers;

use App\Chat;
use App\chatId;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show($id)
    {
       $chat_id= chatId::where("key",$id)->firstOrFail();

       if ( $chat_id->first_user_id!=Auth::id() &&  $chat_id->second_user_id!=Auth::id() ) return abort(403);


        return view('chat-room',compact("id"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
            'name' => 'required',
            'chat_id'=>'required'
        ]);

        $input = $request->all();
        $input['ip'] = request()->ip();
        $input['name'] = Auth::user()->name;
        $chat = Chat::create($input);
        return response(['data' => $chat], 200);
    }

    public function join(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $input = $request->all();
        $input['content'] = 'join';
        $input['ip'] = request()->ip();
        $input['type'] = 'info';

        $chat = Chat::create($input);
        return response(['data' => $chat], 200);
    }
}

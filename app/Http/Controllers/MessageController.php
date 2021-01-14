<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all();

        return view ('admin.message.index', compact('message'));
    }
}

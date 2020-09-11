<?php

namespace App\Http\Controllers;

use App\Events\NewMessageNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Message;

class BroadcastController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function pushTest()
    {
        $user_id = Auth::user()->id;
        $data = array('user_id' => $user_id);
 
        return view('pushertest', $data);
    }
}

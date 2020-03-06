<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

*/

    public function board()
    {
        $pages = Pages::paginate(5);
        return view('notice_board.notice_board',compact('pages'));
    }
}

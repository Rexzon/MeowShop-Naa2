<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HistoryController extends Controller
{
    public function index(){
        $user = auth()->user();
        $Users = User::all();
        $History = History::all();
        return view('History',compact('user','History','Users'));
    }

    public function admin(){
        $user = auth()->user();
        $Users = User::all();
        $History = History::all();
        return view('adminhistory',compact('user','History','Users'));
    }

    public function historydelete($id){
        $user = auth()->user();
        $Users = User::all();
        $History = History::all();
        History::find($id)->Delete();
        return redirect('adminhistory')->with('success','delete compleate');
    }

}

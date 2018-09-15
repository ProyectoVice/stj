<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\RolUser;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$roles=RolUser::where('user_id',Auth::user()->id)->get();
    	return view('dashboard',compact('roles'));
    }
}

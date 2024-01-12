<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype == 'admin'){
                return view('dashboard');
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function post(){
        return view('pages.post');
    }
    public function add(){
        return view('pages.add');
    }


    

}
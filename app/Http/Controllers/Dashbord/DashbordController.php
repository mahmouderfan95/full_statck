<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Contact;

class DashbordController extends Controller
{
    /* function index */
    public function index(){
        $userCount = User::where('is_admin','default')->count();
        $messageCount = Contact::count();
        return view('BackEnd.dashbord',['userCount'=>$userCount,'messageCount'=>$messageCount]);
    }
    /* end of function index */
    /* function get login page */
    public function getLogin(){
        return view('BackEnd.login');
    }
    /* end of function get login page */
    /* function post login */
    public function postLogin(REQUESt $request){
        $arr = [
            'email' => 'required|email',
            'password'  => 'required'
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return back()->withErrors([
                'message'   => 'email or passworn is not correct !'
            ]);
        }
        $attmp = $request->only('email','password');

        if(! auth()->attempt($attmp)){
            return back()->withErrors([
                'message'   => 'email or passworn is not correct !'
            ]);
        }
        return redirect()->route('dashbord.index');
    }
    /* end of function post login */
    /* function logout */
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    /* end of function logout */
    // public function usersCount(){
    //     $userCount = User::where('is_admin','default')->count();
    //     return $userCount;
    // }
}

<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FrontEnd\users\Store;
use App\Http\Requests\FrontEnd\users\Update;
use App\User;
use Image;
use Auth;
use Validator;
use Storage;

class userController extends Controller
{
    /* function get register */
    public function getRegister(){
        return view('frontEnd.users.register');
    }
    /* end of function */
    /* function post register */
    public function postRegister(Store $request){
        $data = $request->all();
        if($request->image){
            if($request->image){
                $img = Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/front/users/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }
        }
        $data['password'] = bcrypt($request->password);
        $register = User::Create($data);
        $register->is_admin = 'default';
        Auth::login($register);
        return redirect()->route('profile',$register->id);
    }
    /* end of function */
    /* function message register */
    public function msgRegister($id){
        $user = User::find($id);
        return view('frontEnd.users.msgRegister',['user'=>$user]);
    }
    /* end of function */
    /* function get login */
    public function getLogin(){
        return view('frontEnd.users.login');
    }
    /* end of function get login */
    /* function post login */
    public function postLogin(){
        if(! auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message'   => 'email or passworn is not correct !'
            ]);
        }
        return redirect()->route('profile',auth()->user()->id);


        // if(! auth()->attempt(['email'=>$request->email,'password'=>bcrypt($request->password)])){
        //     return back();
        // }
        // return redirect()->route('website');




    }


    /* end of function post login */
    /* function profile */
    public function profile($id){
        $user = User::find($id);
        return view('frontEnd.users.def',['user'=>$user]);
    }
    /* end of function profile */
    /* function edit profile */
    public function edit_profile($id,Update $request){
        $user = User::findOrFail($id);
        $user_data = $request->all();
        if($request->image){
            if($user->image != 'user.png'){
                Storage::disk('front_path')->delete($user->image);
            }
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/front/users/' . $request->image->hashName()));
            $user_data['image'] = $request->image->hashName();
        }
        $user->update($user_data);
        return redirect()->route('profile',auth()->user()->id);
    }
    /* end of function edit profile */
    /* function logout */
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    /* end of function logout */
}

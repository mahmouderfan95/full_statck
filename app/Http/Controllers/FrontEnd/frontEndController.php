<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class frontEndController extends Controller
{
    public function index(){
        return view('frontEnd.index');
    }
}

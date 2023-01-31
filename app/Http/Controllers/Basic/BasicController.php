<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function about(){
        return view('about');
    } //end method

    public function contact(){
        return view('contact');
    } //end method

}

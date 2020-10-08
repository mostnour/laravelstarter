<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('showString4');
    }
    /**
     * @return string
     */
    public function showString(){
        return '1-My name is Mostafa, what is your name?';
    }
    public function showString2(){
        return '2- My name is Mostafa, what is your name?';
    }
    public function showString3(){
        return '3- My name is Mostafa, what is your name?';
    }
    public function showString4(){
        return '4- My name is Mostafa, what is your name?';
    }
    public function showString5(){
        return '5- My name is Mostafa, what is your name?';
    }
}

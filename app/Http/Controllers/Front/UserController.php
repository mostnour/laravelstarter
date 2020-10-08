<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function showUserName() {
        return 'Ahmed Emam';
    }

    public function getIndex(){
        // http://localhost:8001/index
        //return view('welcome');

        // the correct way to pass data to view
/*
        $data=[];
        $data['data'] = 100;
        $data['string'] = 'Mostafa Abuelnour M. Gaber';
        $data['age'] = 46;
        return view('welcome', $data);
        */

        $obj = new \stdClass();

        $obj -> name = 'mostafa';
        $obj -> id = 69;
        $obj -> gender = 'male';

        //return view('welcome',compact('obj'));
        //
        $arrData = [];  //['Mostafa', 'Abuelnour', 'Gaber'];

        //
        return view('welcome',compact('arrData'));
    }

    public function getLanding(){
        return view('landing');
    }
}

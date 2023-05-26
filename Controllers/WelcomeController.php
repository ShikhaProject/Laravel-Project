<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function homePage()
    {
        $data=['name'=>'Darwin'];
        return view('welcome', ['mydata' => $data]);
       
    }
}

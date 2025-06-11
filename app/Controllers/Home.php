<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return view('home');
    }
     public function login()
    {
        return view('login');
    }
     public function register()
    {
        return view('register');
    }
     public function xl()
    {
        return view('xl');
    }
      public function axis()
    {
        return view('axis');
    }
      public function indosat()
    {
        return view('indosat');
    }
      public function smartfren()
    {
        return view('smartfren');
    }
      public function tri()
    {
        return view('tri');
    }
      public function telkomsel()
    {
        return view('telkomsel');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webcontroller extends Controller
{
    public function home()
    {
        return view ('home');
    }

    public function profile()
    {
        return view ('profile');
    }
    
    public function kontak()
    {
        return view ('kontak');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home()
    {
        return 'Welcome';
    }
    public function greeting()
    {
        return view('blog.hello')
            ->with('name', 'Davis')
            ->with('occupation', 'Astronout');
    }
}

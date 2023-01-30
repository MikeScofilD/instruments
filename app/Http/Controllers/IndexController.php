<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function __invoke()
    {

        return Hash::make(123456789);
        return view('main.index');
    }
}

<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        Debugbar::info('あいうえお');
        Debugbar::error('テストだよ');
        return view('tests/test');
    }

    public function index2()
    {
        return view('test2');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
      $data['show'] = 'Hello ';
      $data['var'] = "Welcome";

      return view('hello', $data);
    }

    public function test2()
    {
      return view('test2');
    }

    public function test3()
    {
      return view('test3');
    }
}

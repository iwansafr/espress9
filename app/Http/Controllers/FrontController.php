<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $front_template = 'esoftgreat';
    public function index()
    {
        return view('front.'.$this->front_template.'.index');
    }
}

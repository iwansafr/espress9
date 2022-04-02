<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $front_template = 'esoftgreat';
    public function index()
    {
        // return view('public.'.$this->front_template.'.index');
        return view('public.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $front_template = 'esoftgreat';
    public $template_link = '';
    public function __construct()
    {
        $this->template_link = url('es-template/'.$this->front_template);
    }
    public function index()
    {
        // return view('public.'.$this->front_template.'.index');
        return view('public.index');
    }
}

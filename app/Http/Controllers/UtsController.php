<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtsController extends Controller
{

	public function hello(){
		return view('landing.hello');
	}

	public function terimakasih(){
		return view('landing.terimakasih');
	}

	public function style(){
		return view('landing.style');
	}
    public function style2(){
		return view('landing.style2');
	}
    public function responsive(){
		return view('landing.responsive');
	}
    public function form(){
		return view('landing.form');
	}
    public function linktree(){
		return view('landing.linktree');
	}
    public function testimoni(){
		return view('landing.testimoni');
	}

}

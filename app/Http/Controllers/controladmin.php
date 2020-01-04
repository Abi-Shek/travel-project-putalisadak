<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class controladmin extends Controller
{
	function myadmin(){
		$cart=DB::table('testingjs')->where('status','0')->get();
		$booked=DB::table('testingjs')->where('status','1')->get();
	}
}
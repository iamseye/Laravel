<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
	public function about()
	{
		
		$data=[];
		$data['first']='test1';
		$data['second']='test2';

		return view('page.about',$data);

		$name='testname';
		

		//return view('page.about')->with('name',$name);

	}

	public function contact()
	{
		return view('page.contact');
	}

}

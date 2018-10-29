<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    function actionIndex(){
	    return view('welcome');
    }

    function myPage(){
	    return view('mypage');
    }

    function testValue1(Request $request){
	    $all = $request->all();

	    print_r($all);
    }

    function testValue($a = '1'){
	    // return view('mypage')->with('a',$a);
	    // return view('mypage')->with(array('a' => $a));
	    // return view('mypage',['a' => $a]);
	    return view('mypage',array(
	    	'a' => $a
	    ));
	    // return "ID:".$a;
    }

    function multipleValues(){
    	$employees = ['john','Jane','Sam'];
    	return view('employees',array('employees' => $employees));
    }

    function redirectTest(){
    	return redirect()->route('get_testAPI');
    	// return $this->testValue();
    }

    function showTestForm(){
    	return view('form');
    }

    function postTestForm(Request $request){
    	// print_r($request);
    	return view('form',array('request' => $request));
    	// return response('Hello World',200)->header('content-Type','text/plain');
    }

    function jsonResponse(){
    	return response()->json([
    		'name' 		=> 'john',
    		'country' 	=> 'US',
    		'gender' 	=> 'male',
    		'age' 		=> 18
    	]);
    }

    // response type is file , will download if accessed
    function fileResponse(){
    	// return response()->download('path_to_file','file_name','header');  
    	// return response()->file('path_to_file','file_name','header');  
    }
}

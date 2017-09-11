<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
  public function home(){
  	$name ="Ping";
  	return view('home')->with('name',$name);
  }
  public function index(){
  	return view('index')->with('name','Hello.');
  }
  public function report(Request $request){

  	$validator = Validator::make($request->all(), $this->rules(), $this->messages());

  	if ($validator->passes()) {
  		return view('index')->with('name',$request->name)->with('age',$request->age);
  	}
  	else{
  		return back()->withErrors($validator)->withInput();
  	}
  }

  public function rules() {
  	return [
  		'name' => 'required|alpha',
  		'age'  => 'required|numeric',
  	];
  }

  public function messages() {
  	return [
  		'name.required' => 'กรุณาป้อนข้อมูลด้วยค่ะ',
  		'name.alpha' => 'กรุณาป้อนตัวอักษรเท่านั้น',
  		'age.required' => 'กรุณาป้อนอายุของคุณด้วยค่ะ',
  		'age.alpha' => 'กรุณาป้อนตัวเลขเท่านั้นค่ะ',
  	];
  }
}
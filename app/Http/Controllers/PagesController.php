<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class PagesController extends Controller
{
public function test()
{
	$data= array('title'=>'services','services'=>['programming','web design','seo','content creation']);
	return view('test')->with($data);
}
public function index()
{
	$title= "Welcome To my Homepage!!";
	return view('welcome')->with('title',$title);
}
public function service(){
	$service="Welcome to services page";
	return view('service')->with('service',$service);
}
public function contact(){
	$contact="Welcome to services page";
	return view('contact')->with('contact',$contact);
}
public function portfolio(){
	$portfolio="Welcome to services page";
	return view('portfolio')->with('portfolio',$portfolio);
}
public function form(Request $request){
	//validate form
	$valid=$this->validate($request,[
		'firstname'=>'required',
		'lastname'=>'required',
		'email'=>'required',
		'message'=>'required'
	]);
	$form=new Form;
	$form->firstname=$request->input('firstname');
	$form->lastname=$request->input('lastname');
	$form->email=$request->input('email');
	$form->message=$request->input('message');
	$form->save();
		return redirect('/contact')->with('success','Message Submitted We will get back to you!!');
}

}

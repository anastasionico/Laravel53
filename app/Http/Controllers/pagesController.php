<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    public function getAbout(){
    	$name = "Nico";
    	$surname = "Anastasio";
    	$fullname = $name . " " . $surname;
    	$email = "nico@anastasionico.uk";
    	$data = array('fullname' => $fullname, 'email'=>$email);
    	return view('pages.about')->withData($data);
    }
    public function getContact(){
    	return view('pages.contact');
    }
    public function getIndex(){
    	return view('pages.index');
    }
    public function getWelcome(){
    	return view('pages.welcome');
    }
}

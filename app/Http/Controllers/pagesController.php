<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    public function getAbout(){
    	return view('pages.about');
    }
    public function getContact(){
    	return view('pages.contact');
    }
    public function getIndex(){
    	return view('pages.welcome');
    }
}
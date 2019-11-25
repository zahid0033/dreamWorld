<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function ourCompany(){
        return view('pages.ourCompany');
    }
    public function ourProducts(){
        return view('pages.ourProducts');
    }
    public function gallery(){
        return view('pages.gallery');
    }
}

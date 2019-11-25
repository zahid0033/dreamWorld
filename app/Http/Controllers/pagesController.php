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
    public function career(){
        return view('pages.career');
    }
    public function contact(){
        return view('pages.contact');
    }


    public function dreamConversion(){
        return view('pages.companies.dreamConversion');
    }
    public function dreamEnergy(){
        return view('pages.companies.dreamEnergy');
    }
    public function dreamMultiFabs(){
        return view('pages.companies.dreamMultiFabs');
    }
    public function dreamSteel(){
        return view('pages.companies.dreamSteel');
    }
    public function pixelEngineering(){
        return view('pages.companies.pixelEngineering');
    }
}

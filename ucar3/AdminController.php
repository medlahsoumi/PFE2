<?php

namespace App\Http\Controllers;
use App\contacter;
use App\form;
use App\guest;
use Illuminate\Http\Request;




class AdminController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }
    public function login()
    {   
        $contacter=Contacter::all();
        $form=form::orderBy('score','desc')->take(7)->get();
        $guest=guest::all();
        return view('admin.admin_login')->with('contacter',$contacter)->with('form',$form)->with('guest',$guest);
    }
}

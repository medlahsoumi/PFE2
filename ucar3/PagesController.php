<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        return view('pages.indexx');
       
    }
    public function contacter (){
        $title="Nous Contacter";
        
        return view('pages.contacter',compact('title'));
    }
    public function create (){
        
        return view('pages.create');
    }
    public function success (){
        
        return view('pages.success');
    }
 
    public function depose (){
    
        return view('pages.depose');
    }
 

}

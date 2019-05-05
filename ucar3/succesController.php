<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use app\guest;
use app\contacter;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing;
use Symfony\Component\Console\Helper\Table;

class succesController extends Controller
{
    public function index(){
        return view ('pages.success');
    }
    public function store(Request $req)
    {      
       $mail=$req->input('mail');
       $specialite=$req->input('specialite');
       $prenom=$req->input('prenom');
       $nom=$req->input('nom');
       $cin=$req->input('cin');
       $addresse=$req->input('addresse');
        $data = array('mail'=>$mail,'specialite'=>$specialite,'prenom'=>$prenom,
        'nom'=>$nom,'cin'=>$cin,'addresse'=>$addresse);
        DB::table('guests')->insert($data);
        return redirect('/')->with('success', 'Data has been added');
    

    }
    
    public function contact(Request $req)
    {      
       $mail=$req->input('mail');
       $specialite=$req->input('specialite');
       $prenom=$req->input('prenom');
       $nom=$req->input('nom');
       $cin=$req->input('cin');
       $addresse=$req->input('addresse');
        $data = array('mail'=>$mail,'specialite'=>$specialite,'prenom'=>$prenom,
        'nom'=>$nom,'cin'=>$cin,'addresse'=>$addresse);
        DB::table('guests')->insert($data);

    }
}

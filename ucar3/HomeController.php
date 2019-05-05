<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concour;
use Symfony\Component\Finder\Finder;
use App\guest;
class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
     
    *   public function __construct()
    *   {
    *   $this->middleware('auth');
    *   }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $concour=Concour::orderBy('id','desc')->take(7)->get();
        
        $data=array(     
            'Specialité'=>['commerce et comptabilité','Architecture',
            'statistique et analyse de l inguestation','Industries Alimentaires',
            'sciences de gestion','sciences de l ingénieur','Pêche et Aquaculture',
            'Génie Rural eaux et forêts','Hydraulique et aménagement rural','Statistique',
            'Droit public','Télécommnication','Inguestatique industriel et automatique',
            'Instrumentation et mesures industrielles','Génie logiciels','Chimie et Biologie'],
            'communication'=>['1','2','3','4','5'] ,
            'publication'=>['1','2','3','4']     
        );
        return view('pages.indexx')->with('concour',$concour,$data); 
   
    }
    public function insert(Request $req)
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
        return view('pages.indexx');

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
        return view('pages.indexx');
    }
}

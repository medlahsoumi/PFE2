<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;
use Illuminate\Support\Facades\DB;
use App\Mail\Depot;
use App\inscription;
use Illuminate\Support\Facades\Hash; 

class inscriController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=array(
            'title'=>'Deposer votre candidature',
            'Specialité'=>['commerce et comptabilité',
            'statistique et analyse de l information',
            'Industries Alimentaires','sciences de gestion',
            'sciences de l ingénieur','Pêche et Aquaculture',
            'Génie Rural eaux et forêts','Hydraulique et aménagement rural',
            'Droit public','Télécommnications','Informatique industriel et automatique',
            'Instrumentation et mesures industrielles','Génie logiciels','Chimie et Biologie',
            'Architecture','Statistique'],
            'communication'=>['1','2','3','4','5'] ,
            'publication'=>['1','2','3','4'] 
        );
       
        return view('pages.Inscription')->with($data);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cin = $request->input('cin');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $specialite = $request->input('specialite');
        $typedediplome = $request->input('typedediplome');
        $mentiondiplome = $request->input('mentiondiplome');
        $redoublement = $request->input('redoublement');
        $communication = $request->input('communication');
        $publication = $request->input('publication');
        $experiencePedagogiqueSecondaire = $request->input('experiencePedagogiqueSecondaire');
        $experiencePedagogiqueSupérieur = $request->input('experiencePedagogiqueSupérieur');
        $Score = $request->input('score');

        $data = array(['cin'=>$cin,
        'nom'=>$nom,
        'prenom'=>$prenom,
        'email'=>$email,
        'telephone'=>$telephone,
        'specialite'=>$specialite,
        'typedediplome'=>$typedediplome,
        'mentiondiplome'=>$mentiondiplome,
        'redoublement'=>$redoublement,
        'communication'=>$communication,
        'publication'=>$publication,
        'experiencePedagogiqueSecondaire'=>$experiencePedagogiqueSecondaire,
        'experiencePedagogiqueSupérieur'=>$experiencePedagogiqueSupérieur,
        'score'=>$Score ]);
        DB::table('form')->insert($data);
        
      return redirect('/')->with('success','Depot success');
//            \Mail::to($users)->send(new Depot);
 /* DB::table('users')->insert([
           'Cin' => 01225456 
       ]);*/
    // add other fields
   // return view('pages.success');  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
       // hédi bch tchouf session ama reqiest undefined
       // $value = $request->session()->get('key');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function insert(Request $request)
    {
             $Cin = $request->input('Cin');
             $nom = $request->input('nom');
             $prenom = $request->input('prenom');
             $email = $request->input('email');
             $telephone = $request->input('telephone');
             $specialite = $request->input('specialite');
             $typedediplome = $request->input('typedediplome');
             $mentiondiplome = $request->input('mentiondiplome');
             $redoublement = $request->input('redoublement');
             $communication = $request->input('communication');
             $publication = $request->input('publication');
             $experiencePedagogiqueSecondaire = $request->input('experiencePedagogiqueSecondaire');
             $experiencePedagogiqueSupérieur = $request->input('experiencePedagogiqueSupérieur');

             $data = array(['Cin'=>$Cin,
             'nom'=>$nom,
             'prenom'=>$prenom,
             'email'=>$email,
             'telephone'=>$telephone,
             'specialite'=>$specialite,
             'typedediplome'=>$typedediplome,
             'mentiondiplome'=>$mentiondiplome,
             'redoublement'=>$redoublement,
             'communication'=>$communication,
             'publication'=>$publication,
             'experiencePedagogiqueSecondaire'=>$experiencePedagogiqueSecondaire,
             'experiencePedagogiqueSupérieur'=>$experiencePedagogiqueSupérieur]);
             DB::table('users')->insert($data);
             return view('pages.success');  
    }

    /**
     * Calcule score.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}

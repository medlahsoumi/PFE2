<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use Symfony\Component\Finder\Finder;
use App\guest;

class indexControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutes=Institute::orderBy('id','desc')->take(7)->get();
        
        $data=array(     
            'specialite'=>['commerce et comptabilité','Architecture',
            'statistique et analyse de l inguestation','Industries Alimentaires',
            'sciences de gestion','sciences de l ingénieur','Pêche et Aquaculture',
            'Génie Rural eaux et forêts','Hydraulique et aménagement rural','Statistique',
            'Droit public','Télécommnication','Inguestatique industriel et automatique',
            'Instrumentation et mesures industrielles','Génie logiciels','Chimie et Biologie']
        );
        return view('pages.indexx')->with('institutes',$institutes)->with('data',$data); 
    }

    /**
     * Show the guest for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'prenom'=> 'required',
            'nom'=> 'required',
            'adresse'=> 'required',
            'cin'=> 'required'
           ]);
           $guests = new Guest();
           $guests->name=$request->get('email');
           $guests->email=$request->get('prenom');
           $guests->number=$request->get('nom');
           $guests->number=$request->get('adresse');
           $guests->number=$request->get('cin');
           $guests->save();
           return view('pages.indexx')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return concours::find('$id');
    }

    /**
     * Show the guest for editing the specified resource.
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
}

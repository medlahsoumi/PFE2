<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\guest;
use app\contacter;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing;
use Symfony\Component\Console\Helper\Table;

class guestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
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
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}

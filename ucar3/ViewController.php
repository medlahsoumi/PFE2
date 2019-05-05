<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function generatePDF(){
        $details=['title test'];
        $data=['somedata','other data'];
        $pdf= PDF::loadView('pdf',$data);
        return $pdf->download('Candidature.pdf');
    }
}

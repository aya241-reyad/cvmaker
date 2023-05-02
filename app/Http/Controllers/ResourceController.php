<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResourceController extends Controller
{
    public function index(){

$user=auth()->user();
return view('resume',compact('user'));


    }


    public function download(){
    $user=auth()->user();
    $pdf = Pdf::loadView('resume',compact('user'));
    return $pdf->download('resume.pdf');
}

}
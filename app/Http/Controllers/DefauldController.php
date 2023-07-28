<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefauldController extends Controller
{
    public function afficher(){
        return view('formulaire');
    }
    public function recup( Request $request){
        dd($request);
        return redirect()->route('/recup');
    }
}

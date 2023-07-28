<?php

// namespace App\Http\Controllers;

// use App\Models\Nouveau;
// use Illuminate\Http\Request;

// class NouveauController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Nouveau  $nouveau
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Nouveau $nouveau)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Nouveau  $nouveau
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Nouveau $nouveau)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Nouveau  $nouveau
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Nouveau $nouveau)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Nouveau  $nouveau
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Nouveau $nouveau)
//     {
//         //
//     }
// }

namespace App\Http\Controllers;

use App\Models\Form1;
use Illuminate\Http\Request;

class NouveauController extends Controller
{
    public function afficher(){
        return view('formulaire');
    }
    public function recup( Request $request){
        dd($request);
        return redirect()->route('/recup');
    }
    public function afficherf1(){
        return view('form1');
    }

    public function afficherf2(){
        return view('form2');
    }

    public function afficherf3(){
        return view('form3');
    }
    public function store(Request $request)
    {
        Form1::form1($request->all());
        
    }

}

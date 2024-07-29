<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function mi_edad($birthdate)
    {
        if (empty($birthdate)) {
            return 'Sin info';
        }
    
        $dob = Carbon::parse($birthdate);
        return $dob->age;
    }



    public function index()
    {
        //return("Hola mundo");
       
        $estudiante = Estudiante::all();
       
        return view('estudiante.index',['estudiante'=> $estudiante]);        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eset = new Estudiante();
        $eset->ci =$request->ci;
        $eset->exp =$request->exp;
        $eset->paterno =$request->paterno;
        $eset->materno =$request->materno;
        $eset->nombres =$request->nombres;
        $eset->rude =$request->rude;
        $eset->f_nac =$request->f_nac;
        $eset->edad = 5;
        $eset->est_inscripcion='EFECTIVO';//EFECTIVO, NO INCORPORADO, TRANSFERIDO, RETIRADO     
        $eset->usuario_id = auth()->user()->id;
        $eset->save();
        return redirect()->route('estudiante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    




}

<?php

namespace App\Http\Controllers;

use App\Models\Asignacione;
use App\Models\Docente;
use App\Models\Periodo;
use App\Models\Curso;
use App\Http\Requests\StoreAsignacioneRequest;
use App\Http\Requests\UpdateAsignacioneRequest;
use Illuminate\Http\Request;


class AsignacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $asignacione = Asignacione::all();
        

        return view('asignacione.index',['asignacione'=> $asignacione]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docente = Docente::All();
        $periodo = Periodo::all();
        $micurso = Curso::all();
        //$curso = Curso::All();      
        

        return view('asignacione.create', ['docente'=>$docente], ['periodo'=>$periodo], ['curso'=>$micurso]); 
        //return view('asignacione.create', compact('docente')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    //public function store(StoreAsignacioneRequest $request)
    public function store(Request $request)
    {
         $asig = new Asignacione();
         $asig->fecha = $request->fecha;
         $asig->periodo_id=$request->periodo_id;
         $asig->docente_id=$request->docente_id;
         $asig->curso_id=$request->curso_id;
         $asig->usuario_id = auth()->user()->id;
         $asig->save();
         return redirect()->route('asignacione.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignacione $asignacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignacione $asignacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAsignacioneRequest $request, Asignacione $asignacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignacione $asignacione)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Sigi\Cinterno;
use Illuminate\Http\Request;

class CinternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinternos = Cinterno::all();
        return view('Sigi.Cinterno.index', compact('cinternos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sigi.Cinterno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cinterno = new Cinterno();
        $cinterno->ci_01=$request->input('quiz01');
        $cinterno->ci_02=$request->input('quiz02');
        $cinterno->ci_03=$request->input('quiz03');
        $cinterno->ci_04=$request->input('quiz04');
        $cinterno->ci_05=$request->input('quiz05');
        $cinterno->ci_06=$request->input('quiz06');
        $cinterno->kami_id	=$request->input('kami');
        $cinterno->save();

        if($cinterno->save())
        {
            return back()->with('info','Elemento registrado correctamente');
        }else{
            return back()->with('error','Elemento no registrado')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sigi\Cinterno  $cinterno
     * @return \Illuminate\Http\Response
     */
    public function show(Cinterno $cinterno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sigi\Cinterno  $cinterno
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinterno $cinterno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sigi\Cinterno  $cinterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinterno $cinterno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sigi\Cinterno  $cinterno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinterno $cinterno)
    {
        //
    }
}

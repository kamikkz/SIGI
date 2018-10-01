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
        return $request;
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

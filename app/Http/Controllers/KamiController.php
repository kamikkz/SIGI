<?php

namespace App\Http\Controllers;

use App\Sigi\Kami;
use Illuminate\Http\Request;

class KamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'miaw';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sigi.Kami.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sigi\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function show(Kami $kami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sigi\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function edit(Kami $kami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sigi\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kami $kami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sigi\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kami $kami)
    {
        //
    }
}

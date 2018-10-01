<?php

namespace App\Http\Controllers;

use App\Sigi\Kami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//Llamar datos de auth
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
        //$user = Auth::user();//Para llamar los datos del usuario auth
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
        $user = Auth::user();
        $filtrar = Kami::where('user_id',$user->id)->where('dependencia',$user->name)->count();
        if ($filtrar==0){
            $kami = new Kami();
            $kami->user_id = $user->id;
            $kami->dependencia =$user->name;
            $kami->save();
            return 'Debo de mandar al dash board de nuevo';
        }elseif ($filtrar>0){
            return 'Debo de mandar al dash board para seleccion de encuesta';
        }
    }
    public function mejora(Kami $kami)
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

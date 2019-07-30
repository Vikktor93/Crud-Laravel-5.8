<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Predio;
use App\Potrero;
use Illuminate\Http\Request;



class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Utilizando ORM
        return view('index');
    }

    public function usuarios()
    {
        //Utilizando ORM
        $users = User::with('subusers')->get();
        return view('tabla1', compact('users'));
    }

    public function prediosview()
    {
        //Utilizando ORM
        $predios = Predio::with(['users', 'subusers'])->get();
        return view('tabla2', compact('predios'));
    }

    public function potrerosview()
    {
        //Utilizando ORM
        $user = User::find('17654123-3');
        $potreros = Potrero::join('predios','predios.ID_Predio', '=', 'potreros.ID_Predio')
        ->join('disponibilidads', 'disponibilidads.ID_potrero', '=', 'potreros.ID_potrero')
        ->select('disponibilidads.fecha','disponibilidads.ndvi','potreros.ID_potrero', 'potreros.superficie', 'predios.RUT_usuario')
        ->where('predios.RUT_usuario', '=', $user->RUT_usuario)
        ->orderBy('disponibilidads.fecha', 'desc')
        ->with('disponibilidades')
        ->get('potreros.*');
        return view('tabla3', compact('user','potreros'));
    }

    public function ndviview()
    {
        //Utilizando ORM
        $ndvis = Potrero::all();
        return view('tabla4', compact('ndvis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

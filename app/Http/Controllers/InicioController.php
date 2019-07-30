<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Predio;
use App\Potreros;
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
        $potreros = Potreros::all();
        return view('tabla3', compact('potreros'));
    }

    public function ndviview()
    {
        //Utilizando ORM
        $ndvis = Potreros::all();
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

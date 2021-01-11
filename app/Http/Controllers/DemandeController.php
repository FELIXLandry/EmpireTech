<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demande;
use Illuminate\Support\Facades\Auth;


class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function demande(Request $request)
    {
        $demande = new Demande();
        $demande->name = $request->name;
        $demande->email = $request->email;
        $demande->message = $request->message;
        //dd($demande);
        $demande->save();
        return view('Demandes/show')->with(compact('demande'));
    }

  public function deconnexion()
    {
        Auth::logout();
        return view('welcome');
    }

    public function dashboard(){
        return view('Admin/dashboard');
    }

    public function user(){
        return view('Admin/user');
    }

    public function icons(){
        return view('Admin/icons');
    }

    public function maps(){
        return view('Admin/maps');
    }

    public function notifications(){
        return view('Admin/notifications');
    }

    public function table(){
        return view('Admin/table');
    }

    public function template(){
        return view('Admin/template');
    }

    public function typography(){
        return view('Admin/typography');
    }

    public function index()
    {
        //
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

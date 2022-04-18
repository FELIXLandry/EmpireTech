<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Docteur;
use Illuminate\Http\Request;

class DocteurController extends Controller
{

    public function index()
    {
        $docteurs = Docteur::orderBy('id','desc')->paginate(10);
        return view('admin.docteur.index')->with(compact('docteurs'));
    }

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
        $docteur = new Docteur();
        $docteur->label = $request->label;
        $docteur->description = $request->description;
        $docteur->poste = $request->poste;
        $docteur->token = 'token§/'.date('dmY').'§'.$docteur->id.'/'.date('dmY').'/'.$docteur->id;
        if ($request->image_uri) {
            $fichier = $request->image_uri;
            $ext_array = ['PNG', 'JPG', 'JPEG', 'GIF', 'jpg', 'png', 'jpeg', 'gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext, $ext_array)) {
                if (!file_exists(public_path() . '/images')) {
                    mkdir(public_path() . '/images');
                }
                if (!file_exists(public_path() . '/images/docteurs')) {
                    mkdir(public_path() . '/images/docteurs');
                }

                $name = date('dmYhis') . '.' . $ext;
                $path = 'images/docteurs/' . $name;
                $fichier->move(public_path('images/docteurs'), $name);
                $docteur->image_uri = $path;
            }
            //dd($docteur);
            $docteur->save();
        }
        return redirect()->back();
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

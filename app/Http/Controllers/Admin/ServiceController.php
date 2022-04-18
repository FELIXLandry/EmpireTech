<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::orderBy('id','desc')->paginate(10);
        return view('admin.service.index')->with(compact('services'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->label = $request->label;
        $service->description = $request->description;
        $service->token = 'token§/'.date('dmY').'§'.$service->id.'/'.date('dmY').'/'.$service->id;
        if ($request->image_uri) {
            $fichier = $request->image_uri;
            $ext_array = ['PNG', 'JPG', 'JPEG', 'GIF', 'jpg', 'png', 'jpeg', 'gif'];
            $ext = $fichier->getClientOriginalExtension();
            if (in_array($ext, $ext_array)) {
                if (!file_exists(public_path() . '/images')) {
                    mkdir(public_path() . '/images');
                }
                if (!file_exists(public_path() . '/images/services')) {
                    mkdir(public_path() . '/images/services');
                }

                $name = date('dmYhis') . '.' . $ext;
                $path = 'images/services/' . $name;
                $fichier->move(public_path('images/services'), $name);
                $service->image_uri = $path;
            }
            //dd($service);
            $service->save();
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

<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if($file = $request->file('photo_id')){


            $name =  $file->getClientOriginalName();
            $file->move('uploads', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;


        }

        Service::create($input);
        return redirect('/admin/services');
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
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
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
        $input = $request->all();
        $service = Service::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name =   $file->getClientOriginalName();
            $file->move('uploads', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $service->update($input);
        return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        unlink(public_path() . $service->photo->file);
        $service->delete();

        return redirect('/admin/services');
    }

public function services(){

        $services = Service::all();
        return view('host_services', compact('services'));
}

    public function budget(){

        $services = Service::all();
        return view('budget_plan', compact('services'));
    }
    public function reseller(){

        $services = Service::all();
        return view('reseller_plan', compact('services'));
    }

}

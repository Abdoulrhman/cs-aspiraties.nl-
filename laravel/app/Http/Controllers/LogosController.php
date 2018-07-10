<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;

class LogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        return view('admin.logo_achive.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logo_achive.create');

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

        Logo::create($input);
        return redirect('/admin/logo_achive');
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
        $logo = Logo::findOrFail($id);
        return view('admin.logo_achive.edit', compact('logo'));
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
        $logo = Logo::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name =   $file->getClientOriginalName();
            $file->move('uploads', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $logo->update($input);
        return redirect('/admin/logo_achive');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        unlink(public_path() . $logo->photo->file);
        $logo->delete();

        return redirect('/admin/logo_achive');
    }
}

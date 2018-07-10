<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Seo;
use Illuminate\Http\Request;

use App\Http\Requests;

class SeosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seos = Seo::all();
        return view('admin.seo_achive.index', compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seo_achive.create');

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

        Seo::create($input);
        return redirect('/admin/seo_achive');
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
        $seo = Seo::findOrFail($id);
        return view('admin.seo_achive.edit', compact('seo'));
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
        $seo = Seo::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name =   $file->getClientOriginalName();
            $file->move('uploads', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $seo->update($input);
        return redirect('/admin/seo_achive');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seo = Seo::findOrFail($id);
        unlink(public_path() . $seo->photo->file);
        $seo->delete();

        return redirect('/admin/seo_achive');
    }
}

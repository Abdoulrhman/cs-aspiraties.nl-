<?php

namespace App\Http\Controllers;

use App\Achivment;
use App\Logo;
use App\Mobile;
use App\Photo;
use App\Seo;
use App\Social;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class AchivmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achievements = Achivment::all();
        return view('admin.achivments.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achivments.create');
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

        Achivment::create($input);
        return redirect('/admin/achivments');
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
        $achievement = Achivment::findOrFail($id);
        return view('admin.achivments.edit', compact('achievement'));
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
        $achievement = Achivment::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name =   $file->getClientOriginalName();
            $file->move('uploads', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $achievement->update($input);
        return redirect('/admin/achivments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $achievement = Achivment::findOrFail($id);
        unlink(public_path() . $achievement->photo->file);
        $achievement->delete();

        return redirect('/admin/achivments');
    }

    public function all(){

        $achievements = Achivment::all();
        $logos = Logo::all();
        $seos = Seo::all();
        $socials = Social::all();
        $mobiles = Mobile::all();
        $apps = \App\App::all();
        return view('port_all', compact('achievements','logos','seos','socials','mobiles','apps'));
    }

}

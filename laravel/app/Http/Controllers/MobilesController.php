<?php

namespace App\Http\Controllers;

use App\Mobile;
use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;

class MobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiles = Mobile::all();
        return view('admin.mobile_achive.index', compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobile_achive.create');

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

        Mobile::create($input);
        return redirect('/admin/mobile_achive');
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
        $mobile = Mobile::findOrFail($id);
        return view('admin.mobile_achive.edit', compact('mobile'));
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
        $mobile = Mobile::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name =   $file->getClientOriginalName();
            $file->move('uploads', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $mobile->update($input);
        return redirect('/admin/mobile_achive');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobile = Mobile::findOrFail($id);
        unlink(public_path() . $mobile->photo->file);
        $mobile->delete();

        return redirect('/admin/mobile_achive');
    }
}

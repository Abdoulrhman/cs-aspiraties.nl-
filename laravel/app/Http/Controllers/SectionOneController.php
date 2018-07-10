<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Product;
use App\SectionFive;
use App\SectionFour;
use App\SectionOne;
use App\SectionThree;
use App\SectionTwo;
use Illuminate\Http\Request;

use App\Http\Requests;

class SectionOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_1s = SectionOne::all();
        return view('admin.about_us_sections.section1.index', compact('title_1s'));
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
        $title_1 = SectionOne::findOrFail($id);
        return view('admin.about_us_sections.section1.edit', compact('title_1'));
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
        $title_1 = SectionOne::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name =   $file->getClientOriginalName();
            $file->move('uploads', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $title_1->update($input);
        return redirect('/admin/about_us_sections/section1');
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

    public function data(){
        $title_1s = SectionOne::all();
        $title_2s = SectionTwo::all();
        $title_3s = SectionThree::all();
        $title_4s = SectionFour::all();
        $title_5s = SectionFive::all();
        $products = Product::all();
        return view('about_us', compact('title_1s','products','title_2s','title_3s','title_4s','title_5s'));
    }
}

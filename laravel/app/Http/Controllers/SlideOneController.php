<?php

namespace App\Http\Controllers;

use App\Achivment;
use App\Blog;
use App\Logo;
use App\Offer;
use App\Photo;
use App\Product;
use App\SectionOne;
use App\Seo;
use App\Service;
use App\SlideOne;
use App\SlideOneTitles;
use App\SlideThree;
use App\SlideTwo;
use App\Stat;
use App\Testi;
use Illuminate\Http\Request;

use App\Http\Requests;

class SlideOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = SlideOne::all();
        $slideOneTitles = SlideOneTitles::all();

        return view('admin.slider.slideOne.index', compact('images','slideOneTitles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.slideOne.create');
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
        SlideOne::create($input);
        return redirect('/admin/slider/slideOne');
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
        $image = SlideOne::findOrFail($id);
        return view('admin.slider.slideOne.edit', compact('image'));
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
        $image = SlideOne::findOrFail($id);

        $image->update($input);

        return redirect('/admin/slider/slideOne');
    }


    public function update2(Request $request, $id)
    {
        $input = $request->all();
        $slideOneTitle = SlideOneTitles::findOrFail($id);

        $slideOneTitle->update($input);

        return redirect('/admin/slider/slideOne');
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

        $images = SlideOne::all();
        $titles = SlideTwo::all();
        $pics   = SlideThree::all();
        $slideOneTitles = SlideOneTitles::all();
        $products = Product::all();
        $stats = Stat::all();
        $achievements = Achivment::all();
        $logos = Logo::all();
        $seos = Seo::all();
        $testis=Testi::all();
        $offers=Offer::all();
        $posts = Blog::all();
        $title_1s = SectionOne::all();
        $services = Service::all();
        return view('index', compact('images','titles','pics','slideOneTitles','products','stats','achievements','logos','seos','testis','offers','posts','title_1s','services'));
    }




}

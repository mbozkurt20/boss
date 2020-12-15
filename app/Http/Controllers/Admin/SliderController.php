<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Imports\UsersImport;
use App\Katalog;
use App\MainYonetim;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $slider = Slider::all();
        $mainyonetim = MainYonetim::all();
        return view('admin.slider', compact('mainyonetim','slider','categoryMenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        return view('admin.slider_edit',compact('categoryMenu','mainyonetim'));
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
        if ($request->hasFile('cover')) {

            $file =$request->cover;
            $rand = rand(1, 999999);
            $image_name = $rand.'.'.$file->extension();
            //Storage::disk('local')->put('public/sliders/'.$image_name,$image,'public');
            //Storage::put('books/'.time(),$request->file('cover'));
            $new=$request->file('cover')->store('public/sliders');
            $pdf = new Slider();
            $pdf->title = $request->title;
            $pdf->image_name = $image_name;
            $pdf->aciklama = $request->aciklama;
            $pdf->cover =$new;
            $pdf->uuid = $rand;
            $pdf->save();
        }
        session()->flash('success','Slider Başarıyla Eklendi');
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        $slider = Slider::find($id);
        return view("admin.slider_guncel", compact( 'categoryMenu','slider','mainyonetim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slider $slider)
    {
        $slider->title = $request->title;
        $slider->aciklama = $request->aciklama;
        if ($request->hasFile('cover')) {
            $file =$request->cover;
            $rand = rand(1, 999999);
            $image_name = $rand.'.'.$file->extension();
            Storage::delete($slider->cover);
            $new=$request->file('cover')->store('public/sliders');
            $slider->image_name = $image_name;
            $slider->cover =$new;
            $slider->uuid = $rand;
        }
        $slider->save();
        session()->flash('success','Slider Başarıyla Güncellendi');
        return redirect()->route('slider.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider=Slider::find($id);
        $slider->delete();
        session()->flash('success','Slider Görüntüsü Başarıyla Silindi');
        return back();
    }



}

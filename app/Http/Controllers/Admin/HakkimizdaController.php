<?php

namespace App\Http\Controllers\Admin;

use App\Hakkimizda;
use App\Category;
use App\MainYonetim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HakkimizdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $hakkimizda = Hakkimizda::all();
        $mainyonetim = MainYonetim::all();
        $hakkimizdacount = Hakkimizda::all()->count();
        return view('admin.hakkimizda', compact('mainyonetim','hakkimizda', 'categoryMenu','hakkimizdacount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        return view("admin.hakkimizda_ekle",compact('categoryMenu','mainyonetim'));
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
        $rules=[
            "hakkimizda" => "required",

        ];
        $messages=[
            'hakkimizda.required' => 'Bu alan gereklidir. ',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'hakkimizda');
        if($hakkimizda=Hakkimizda::create($input))
        {
            Session()->flash('success',' Kayıt Oluşturuldu.');
            return redirect(route('hakkimizda.index'));
        }
        else{
            Session()->flash('error',' Kayıt Oluşturulamadı.');
            return redirect(route('hakkimizda.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hakkimizda  $hakkimizda
     * @return \Illuminate\Http\Response
     */
    public function show(Hakkimizda $hakkimizda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hakkimizda  $hakkimizda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $hakkimizda=Hakkimizda::find($id);
        $mainyonetim = MainYonetim::all();
        return view('admin.hakkimizda_update',compact('categoryMenu','hakkimizda','mainyonetim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hakkimizda  $hakkimizda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules=[
            "hakkimizda" => "required",

        ];
        $messages=[
            'hakkimizda.required' => 'Bu alan gereklidir. ',

        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only(  'hakkimizda');
        $hakkimizda= Hakkimizda::find($id);
        $hakkimizda->update($input);
        session()->flash('success','Güncelleme Başarılı');
        return redirect()->route('hakkimizda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hakkimizda  $hakkimizda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hakkimizda $hakkimizda)
    {
        //
    }
}

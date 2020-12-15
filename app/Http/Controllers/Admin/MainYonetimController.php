<?php

namespace App\Http\Controllers\Admin;

use App\MainTitle;
use App\MainYonetim;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainYonetimController extends Controller
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
        $mainyonetim = MainYonetim::all();
        $title = MainTitle::count();
        $titleFirst = MainTitle::first();
        return view('admin.maincontrol', compact('title','titleFirst','mainyonetim', 'categoryMenu'));
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
        $title = MainTitle::first();
        return view("admin.main_add",compact('categoryMenu','title','mainyonetim'));
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
        $rules = [
            'ustbaslik' => 'required',
            'baslik' => 'required',
        ];
        $messages = [
            'ustbaslik' => 'Bu Alan Zorunludur',
            'baslik' => 'Bu Alan Zorunludur',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only('baslik','icerik','ustbaslik');
        if ($mainyonetim= MainYonetim::create($input))
        {
            Session()->flash('success','Kayıt Oluşturuldu.');
            return redirect(route('mainyonetim.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainYonetim  $mainYonetim
     * @return \Illuminate\Http\Response
     */
    public function show(MainYonetim $mainYonetim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainYonetim  $mainYonetim
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim1=MainYonetim::find($id);
        $mainyonetim = MainYonetim::all();
        $title = MainTitle::first();
        return view('admin.mainupdate',compact('categoryMenu','title','mainyonetim1','mainyonetim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainYonetim  $mainYonetim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $rules = [
            'ustbaslik' => 'required',
            'baslik' => 'required',
        ];
        $messages = [
            'ustbaslik' => 'Bu Alan Zorunludur',
            'baslik' => 'Bu Alan Zorunludur',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only('baslik','icerik','ustbaslik');
        $mainyonetim = MainYonetim::find($id);
        $mainyonetim->update($input);
            Session()->flash('success','Güncelleme Başarılı.');
            return redirect(route('mainyonetim.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainYonetim  $mainYonetim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        //
        $mainYonetim = MainYonetim::find($id);
        $mainYonetim->delete();
        session()->flash('success','Silme Başarılı');
        return back();
    }
}

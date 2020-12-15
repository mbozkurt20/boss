<?php

namespace App\Http\Controllers;

use App\GelenMesajlar;
use App\Category;
use App\MainYonetim;
use Illuminate\Http\Request;

class GelenMesajlarController extends Controller
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
        $mainyonetim = MainYonetim::all();
        $mesaj = GelenMesajlar::where('silme',true)->get();
        return view('admin.gelenmesaj' ,compact('categoryMenu','mesaj','mainyonetim'));
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
        $rules=[
            "name" => "required",
            "surname" => "required",
            "email" => "required",
            "message" => "required",
        ];
        $messages=[
            'name.required' => 'Bu alan gereklidir. ',
            'surname.required' => 'Bu alan gereklidir.',
            'email.required' => 'Bu alan gereklidir.',
            'message.required' => 'Bu alan gereklidir.',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'name','surname', 'email','message');
        $input['user_id']=auth()->user()->id;
        if($Message=GelenMesajlar::create($input))
        {
            Session()->flash('success','Temsilcimiz kısa bir süre içerisinde sizinle iletişime geçecektir.');
            return redirect(route('contact'));
        }
        else{
            Session()->flash('error','Mesajınız Alınamadı !!.');
            return redirect(route('contact'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\GelenMesajlar  $gelenMesajlar
     * @return \Illuminate\Http\Response
     */
    public function show(GelenMesajlar $gelenMesajlar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GelenMesajlar  $gelenMesajlar
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        return view('layouts.maindetay',compact('categoryMenu','mainyonetim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GelenMesajlar  $gelenMesajlar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GelenMesajlar $gelenMesajlar)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GelenMesajlar  $gelenMesajlar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gelenMesajlar = GelenMesajlar::find($id);
        $gelenMesajlar['silme'] = 0;
        $gelenMesajlar->update();
        session()->flash('success','Silme Başarılı');
        return back();
    }
    public function userMesaj(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $mesaj = GelenMesajlar::where('user_id',auth()->user()->id)->get();
        return view('mesaj',compact('mesaj','categoryMenu','mainyonetim'));
    }
}

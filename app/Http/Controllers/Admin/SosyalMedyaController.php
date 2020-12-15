<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Iletisim;
use App\MainYonetim;
use App\Message;
use App\SosyalMedya;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SosyalMedyaController extends Controller
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
        $sosyalMedya = SosyalMedya::all();
        return view('admin.adminmedya', compact('sosyalMedya', 'categoryMenu','mainyonetim'));
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
        return view("admin.adminmedya_ekle",compact('categoryMenu','mainyonetim'));
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
            "instagram" => "required",
            "facebook" => "required",
            "twitter" => "required",
            "ln" => "required",

        ];
        $messages=[
            'instagram.required' => 'Bu alan gereklidir. ',
            'facebook.required' => 'Bu alan gereklidir.',
            'twitter.required' => 'Bu alan gereklidir.',
            'ln.required' => 'Bu alan gereklidir.',

        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'ln','instagram', 'facebook','twitter');
        if($sosyalMedya = SosyalMedya::create($input))

        {
            Session()->flash('success','Bilgiler Oluşturuldu.');
            return redirect(route('sosyalmedya.index'));
        }
        else
        {
            Session()->flash('error','Bilgiler Oluşturulamadı.');
            return redirect(route('sosyalmedya.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SosyalMedya  $sosyalMedya
     * @return \Illuminate\Http\Response
     */
    public function show(SosyalMedya $sosyalMedya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SosyalMedya  $sosyalMedya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        $sosyalMedya= SosyalMedya::find($id);
        return view('admin.adminmedya_edit',compact('categoryMenu','sosyalMedya','mainyonetim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SosyalMedya  $sosyalMedya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //
        //
        $rules=[
            "instagram" => "required",
            "facebook" => "required",
            "twitter" => "required",
            "ln" => "required",

        ];
        $messages=[
            'instagram.required' => 'Bu alan gereklidir. ',
            'facebook.required' => 'Bu alan gereklidir.',
            'twitter.required' => 'Bu alan gereklidir.',
            'ln.required' => 'Bu alan gereklidir.',

        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'ln','instagram', 'facebook','twitter');
        $medya=SosyalMedya::find($id);
        $medya->update($input);
        session()->flash('success','Güncelleme Başarılı');
        return redirect()->route('sosyalmedya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SosyalMedya  $sosyalMedya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sosyalMedya=SosyalMedya::find($id);
        $sosyalMedya->delete();
        session()->flash('success','İşlem Başarıyla Silindi');
        return back();
    }


}

<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ContactAdmin;
use App\MainYonetim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactAdminController extends Controller
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
        $iletisim = ContactAdmin::all();
        return view('admin.adminiletisim', compact('iletisim', 'categoryMenu','mainyonetim'));
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
        return view("admin.adminiletisim_ekle",compact('categoryMenu','mainyonetim'));
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
            "merkez_adresi" => "required",
            "fabrika_adresi" => "required",
            "musteri_hatti" => "required",
            "telefon_hatti" => "required",
            "whatsapp" => "required",
            "email" => "required",
            "acilis" => "required",
            "kapanis" => "required",
        ];
        $messages=[
            'merkez_adresi.required' => 'Bu alan gereklidir. ',
            'fabrika_adresi.required' => 'Bu alan gereklidir.',
            'musteri_hatti.required' => 'Bu alan gereklidir.',
            'telefon_hatti.required' => 'Bu alan gereklidir.',
            'whatsapp.required' => 'Bu alan gereklidir.',
            'email.required' => 'Bu alan gereklidir.',
            'acilis.required' => 'Bu alan gereklidir.',
            'kapanis.required' => 'Bu alan gereklidir.',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'merkez_adresi','fabrika_adresi', 'musteri_hatti','telefon_hatti','whatsapp','email','acilis','kapanis');
        if($iletisim=ContactAdmin::create($input))

        {
            Session()->flash('success','Bilgiler Oluşturuldu.');
            return redirect(route('contactadmin.index'));
        }
        else
        {
            Session()->flash('error','Bilgiler Oluşturulamadı.');
            return redirect(route('contactadmin.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(ContactAdmin $contactAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactAdmin $contactAdmin)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        return view('admin.iletisim_edit',compact('categoryMenu','iletisim','mainyonetim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $rules=[
            "merkez_adresi" => "required",
            "fabrika_adresi" => "required",
            "musteri_hatti" => "required",
            "telefon_hatti" => "required",
            "whatsapp" => "required",
            "email" => "required",
            "acilis" => "required",
            "kapanis" => "required",
        ];
        $messages=[
            'merkez_adresi.required' => 'Bu alan gereklidir. ',
            'fabrika_adresi.required' => 'Bu alan gereklidir.',
            'musteri_hatti.required' => 'Bu alan gereklidir.',
            'telefon_hatti.required' => 'Bu alan gereklidir.',
            'whatsapp.required' => 'Bu alan gereklidir.',
            'email.required' => 'Bu alan gereklidir.',
            'acilis.required' => 'Bu alan gereklidir.',
            'kapanis.required' => 'Bu alan gereklidir.',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'merkez_adresi','fabrika_adresi', 'musteri_hatti','telefon_hatti','whatsapp','email','acilis','kapanis');
        $iletisim = ContactAdmin::find($id);
        $iletisim->update($input);
        session()->flash('success','Güncelleme Başarılı');
        return redirect()->route('iletisim.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactAdmin $contactAdmin)
    {
        //
        $contactAdmin->delete();
        session()->flash('success','İletişim Bilgisi Silindi');
        return back();
    }
}

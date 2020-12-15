<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Duyurular;
use App\GelenMesajlar;
use App\Iletisim;
use App\MainTitle;
use App\MainYonetim;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DuyurularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $duyuru = Duyurular::all();
        $mainyonetim = MainYonetim::all();
        return view('admin.adminduyuru', compact('duyuru', 'categoryMenu','mainyonetim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        return view("admin.adminduyuru_ekle",compact('categoryMenu','mainyonetim'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            "duyuru_basligi" => "required",
            "duyuru_icerigi" => "required",

        ];
        $messages=[
            'duyuru_basligi.required' => 'Bu alan gereklidir. ',
            'duyuru_icerigi.required' => 'Bu alan gereklidir.',

        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'duyuru_basligi','duyuru_icerigi');
        if($duyuru=Duyurular::create($input))

        {
            Session()->flash('success','Duyurular Oluşturuldu.');
            return redirect(route('duyurular.index'));
        }
        else
        {
            Session()->flash('error','Duyurular Oluşturulamadı.');
            return redirect(route('duyurular.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Duyurular  $duyurular
     * @return \Illuminate\Http\Response
     */
    public function show(Duyurular $duyurular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Duyurular  $duyurular
     * @return \Illuminate\Http\Response
     */
    public function edit(Duyurular $duyurular)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        return view('admin.duyuru_edit',compact('categoryMenu','duyurular','mainyonetim'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Duyurular  $duyurular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $rules=[
            "duyuru_basligi" => "required",
            "duyuru_icerigi" => "required",

        ];
        $messages=[
            'duyuru_basligi.required' => 'Bu alan gereklidir. ',
            'duyuru_icerigi.required' => 'Bu alan gereklidir.',

        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only( 'duyuru_basligi','duyuru_icerigi');
        $duyuru =Duyurular::find($id);
        $duyuru->update($input);
        session()->flash('success','Güncelleme Başarılı');
        return redirect()->route('duyurular.index');
    }
    public function silinenMesajlar()
{
    $silinen = GelenMesajlar::where('silme',0)->paginate(20);
    $categoryMenu = Category::orderBy('category_name', 'asc')->get();
    $mainyonetim = MainYonetim::all();
    return view('admin.silinenmesajlar',compact('silinen','categoryMenu','mainyonetim'));
}
public function silinenSearch(Request $request)
{
    $q = $request->search;
    $search = GelenMesajlar::where('name', 'like', '%' . $q.'%')->where('silme',false)->get();
    $silinen = GelenMesajlar::where('silme',0)->paginate(20);
    $categoryMenu = Category::orderBy('category_name', 'asc')->get();
    $mainyonetim = MainYonetim::all();
    return view('admin.silinenmesajlar',compact('silinen','categoryMenu','mainyonetim','search'));
}
    public function mesajCevap(Request $request,$id)
    {
        $cevap = GelenMesajlar::find($id);
        $cevap['cevap'] = $request->cevap;
        $cevap['silme'] = 0;
        $cevap->update();
        session()->flash('success','Cevap Gönderildi');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Duyurular  $duyurular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duyurular $duyurular)
    {
        $duyurular->delete();
        session()->flash('success','Kayıt Başarıyla Silindi');
        return back();
    }
    public function dashboard()
    {
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        $message = GelenMesajlar::where('silme',true)->count();
        $user = User::all()->count();
        $order = Order::all()->count();
        $product = Product::count();
        $silinenCount = GelenMesajlar::where('silme',0)->count();

        return view('admin.dashboard', compact('mainyonetim','silinenCount','product','categoryMenu','message','user','order','price'));
    }
}

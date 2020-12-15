<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Images;
use App\MainYonetim;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
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
        $products = Product::orderBy('id', 'asc')->paginate(5);
        return view('admin.products', compact('products', 'categoryMenu','mainyonetim'));
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
        $categoriess = Category::pluck("category_name", "id")->all();
        $products = Product::pluck("product_name", "id")->all();
        return view("admin.products-create", compact('mainyonetim','products', 'categoriess', 'categoryMenu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules=[
            "category_id" => "required",
            "product_name" => "required",
            "product_detail" => "required",
            "miktar" => "required|numeric",

        ];
        $messages=[
            'category_id.required' => 'Bu alan gereklidir. ',
            'product_price.numeric' => 'Bu alan sayısal değer içermektedir. ',
            'miktar.numeric' => 'Bu alan sayısal değer içermektedir. ',
            'product_name.required' => 'Bu alan gereklidir.',
            'product_detail.required' => 'Bu alan gereklidir.',
            'miktar.required' => 'Bu alan gereklidir.',
        ];
        $this->validate($request,$rules,$messages);


        $input = $request->only('category_id', 'product_name', 'product_detail', 'color','coil_length','total_length','unit_price','unitWeight' ,'miktar','product_price','totalWeight','copperWeight','image');
        Product::create($input);

        Session::flash("success", 'Kayıt Başarılı');
        return redirect()->route('admin-products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categoryMenu = Category::orderBy('category_name', 'asc')->get();
        $mainyonetim = MainYonetim::all();
        $categoriess = Category::pluck("category_name", "id")->all();
        $products = Product::find($id);
        return view("admin.products-edit", compact('mainyonetim','categoriess', 'products', 'categoryMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules=[
            "category_id" => "required",
            "product_name" => "required",
            "product_detail" => "required",
            "miktar" => "required|numeric",
        ];
        $messages=[
            'category_id.required' => 'Bu alan gereklidir. ',
            'miktar.numeric' => 'Bu alan sayısal değer içermektedir. ',
            'product_name.required' => 'Bu alan gereklidir.',
            'product_detail.required' => 'Bu alan gereklidir.',
            'miktar.required' => 'Bu alan gereklidir.',
        ];
        $this->validate($request,$rules,$messages);
        $input = $request->only('category_id', 'product_name', 'product_detail','unit_price', 'color','coil_length','total_length','unitWeight' ,'miktar','product_price','totalWeight','copperWeight','image');
        $products = Product::find($id);
        $products->update($input);
        Session::flash("success",'Güncelleme Başarılı');
        return redirect()->route('admin-products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);

        Session::flash("success",'Silme Başarılı');

        return redirect()->route('admin-products.index');


    }
    public function gelince_haber_ver(Request $request){
        $user=User::find($request->user_id);
        $product=Product::find($request->product_id);
        $haber_ver = new \App\GelinceHaberVer();
        $haber_ver->product_id = $product->id;
        $haber_ver->user_id = $user->id;
        $haber_ver->save();
        \session()->flash('success','Ürün stokta mevcut hale geldiğinde e-mail ile iletişime geçilecektir.');
        return back();
    }

}

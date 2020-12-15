<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\Contact;
use Illuminate\Http\Request;
use App\ContactAdmin;
use App\Duyurular;
use App\Firsat;
use App\Hakkimizda;
use App\MainYonetim;
use App\Product;
use Illuminate\Support\Facades\Mail;
use SearchableTrait;
use App\Slider;
use App\SosyalMedya;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $products = Product::orderBy('created_at','desc')->where('status',1)->get();
        $duyuru = Duyurular::all();

        $slider = Slider::all();
        $mainyonetim = MainYonetim::all();
        return view('index', compact( 'products','categoryMenu','duyuru','mainyonetim','slider'));
    }
    public function edit($id)
    {
        //
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $mainyonetim1=MainYonetim::find($id);
        return view('layouts.maindetay',compact('categoryMenu','mainyonetim','mainyonetim1'));
    }
    public function bayi()
    {
        $mainyonetim = MainYonetim::all();
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        return view('layouts.bayi' ,compact('categoryMenu','mainyonetim'));
    }
    public function product_search(Request $request)
    {
        $q = $request->search;
        $products = Product::where('id', 'like', '%' . $q . '%')->orWhere('product_name', 'like', '%' . $q . '%')->get();
        if (count($products) > 0) {
            $categoryMenu = Category::orderBy('category_name', 'asc')->get();
            $mainyonetim = MainYonetim::all();
            return view('layouts.product_search', compact('categoryMenu','mainyonetim'))->withDetails($products)->withQuery($q);
        } else {
            $mainyonetim = MainYonetim::all();
            $categoryMenu = Category::orderBy('category_name', 'asc')->get();
            return view('layouts.product_search', compact('categoryMenu','mainyonetim'))->withMessage('Hiç bir sonuç bulunamadı !');
        }
    }
    public function category($slug){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $category = Category::where("slug",$slug)->first();
        $mainyonetim = MainYonetim::all();
        $products = Product::with('categories')->where('category_id',$category->id)->get();
        return view('category-details', compact('category','products','categoryMenu','mainyonetim'));
    }

    public function product($slug){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $product = Product::where("slug",$slug)->first();
        $bcrumb = $product->categories()->distinct()->get();
        return view('product-detail', compact('product','bcrumb','categoryMenu','mainyonetim'));
    }

    public function contact(){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $iletisim =ContactAdmin::all();
        $medya=SosyalMedya::all();
        $user = auth()->user();
        //Mail::queue(new Contact());
        return view('contact', compact('categoryMenu','iletisim','user','medya','mainyonetim'));
    }
    public function oturum()
    {
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        return view('layouts.pmenu' ,compact('categoryMenu','mainyonetim'));
    }
    public function hakkimizda()
    {
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $hakkimizda = Hakkimizda::all();
        return view('layouts.hakkimizda' ,compact('categoryMenu','hakkimizda','mainyonetim'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\MainYonetim;
use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class OrderController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $orders = Order::where('user_id',Auth::id())->get();
        return view('orders', compact('orders','categoryMenu','mainyonetim'));
    }
    public function teklifSearch(Request $request){
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $orders = Order::where('user_id',Auth::id())->get();
        $order = Order::where('user_id',Auth::id())->where('created_at',$request->created_at)->get();

        $amount = 0;
        foreach ($order as $data)
        {
            $amount += Product::find($data->id)->product_price;
        }
            if ($request->created_at != null)
            {
                session()->flash('success','Tarihe Göre Teklif Listelendi');
                return view('orders',compact('order','orders','amount','categoryMenu','mainyonetim'));
            }else{
                session()->flash('success','Tüm Teklifler Listelendi');
                return view('orders',compact('order','orders','amount','categoryMenu','mainyonetim'));
            }




              // share data to view


    }
    public function teklifPDF($id) {


        // retreive all records from db
        $order = Order::where('user_id',Auth::id())->where('created_at',Order::find($id)->created_at)->get();
        $amount = 0;
        foreach ($order as $data)
        {
          $amount += Product::find($data->id)->product_price;
        }

        // share data to view
        view()->share('basket',$order);
        $pdf = PDF::loadView('teklifPdf',compact('order','amount'))->setPaper('a4', 'landscape');

        // download PDF file with download method
        \session()->flash('success','Pdf Dosyanız Yüklendi');

        return  $pdf->download('boss/eskiteklif.pdf');


    }

    public function detail($id)
    {
        $categoryMenu = Category::orderBy('category_name','asc')->get();
        $mainyonetim = MainYonetim::all();
        $order = Order::with('baskets.basket_products.product')->where('orders.id', $id)->firstOrFail();
        return view('order-detail', compact('order','categoryMenu','mainyonetim'));
    }
}

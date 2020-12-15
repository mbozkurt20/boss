<?php

namespace App\Http\Controllers;

use App\Basket;
use App\BasketProduct;
use App\Category;
use App\Images;
use App\MainYonetim;
use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Session;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\Location;

class BasketController extends Controller
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
        $categories = Category::orderBy('category_name','asc')->get();
        return view('basket', compact('categories','categoryMenu','mainyonetim'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quantity = request('quantity');
        if ($quantity<1){
            abort(400);
        }
        $product = Product::find(request('id'));
        $cartItem = Cart::add($product->id, $product->product_name, $quantity, $product->product_price, ['slug' => $product->slug]);

        if (Auth::check()) {
            $active_basket_id = session('active_basket_id');
            if (!isset($active_basket_id)) {
                $active_basket = Basket::create([
                    'user_id' => Auth::id()
                ]);
                $active_basket_id = $active_basket->id;
                session()->put('active_basket_id', $active_basket_id);
            }
            BasketProduct::updateOrCreate(
                ['basket_id' => $active_basket_id, 'product_id' => $product->id],
                ['quantity' => $cartItem->qty, 'price' => $product->product_price, 'status' => 'Siparişleriniz alındı.']
            );
        }
        return response()->json(['cartCount' => Cart::count()]);
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($rowid)
    {
        //
        if (Auth::check()) {
            $active_basket_id = session('active_basket_id');
            $cartItem = Cart::get($rowid);

            if (request('quantity') == 0)
                BasketProduct::where('basket_id', $active_basket_id)->where('product_id', $cartItem->id)
                    ->delete();
            else
                BasketProduct::where('basket_id', $active_basket_id)->where('product_id', $cartItem->id)
                    ->update(['quantity' => request('quantity')]);
        }

        Cart::update($rowid, request('quantity'));


        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        if (Auth::check()) {
            $active_basket_id = session('active_basket_id');
            BasketProduct::where('basket_id', $active_basket_id)->delete();
        }

        Cart::destroy();

        return redirect()->route('basket');
    }
    public function createPDF() {


        // retreive all records from db
        $data =  Cart::content();

        // share data to view
        view()->share('basket',$data);
        $pdf = PDF::loadView('pdf_view',compact('data'))->setPaper('a4', 'landscape');


       foreach ($data as $datas)
       {

           $order = new Order();
           $order['user_id'] = \auth()->id();
           $order['product_name'] = Product::find($datas->id)->product_name;
           $order['color']  = Product::find($datas->id)->color;
           $order['coil_length'] = Product::find($datas->id)->coil_length;
           $order['total_length'] = Product::find($datas->id)->total_length;
           $order['unit_price'] = Product::find($datas->id)->unit_price;
           $order['product_price'] = Product::find($datas->id)->product_price;
           $order['unitWeight'] = Product::find($datas->id)->unitWeight;
           $order['totalWeight'] = Product::find($datas->id)->totalWeight;
           $order['copperWeight'] = Product::find($datas->id)->copperWeight;
           $order['miktar'] = Product::find($datas->id)->miktar;
           $order['product_detail'] = Product::find($datas->id)->product_detail;
           $order['qty'] = $datas->qty;

           $order->save();
       }


        // download PDF file with download method
        Cart::destroy();
        \session()->flash('success','Pdf Dosyanız Yüklendi');

        return  $pdf->download('boss.pdf');


    }

}

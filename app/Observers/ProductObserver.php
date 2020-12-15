<?php

namespace App\Observers;

use App\GelinceHaberVer;
use App\Product;

class ProductObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        if ($product->isDirty('miktar')){
            if ($product->miktar <= 0){
                $product->status=0;
                $product->unsetEventDispatcher();
                $product->save();
            }else{
                $product->status=1;
                $eski_status= $product->getOriginal('status');
                if ($eski_status == 0){
                    if ($product->status !=$eski_status){
                        $bekleyenler = GelinceHaberVer::where('product_id',$product->id)->where('status',1)->get();
                        foreach ($bekleyenler as $bekleyen){
                            //Mail::to($bekleyen->user)->send(new \App\Mail\GelinceHaberVer($bekleyen->user,$product));
                            $bekleyen->status=0;
                            $bekleyen->save();
                        }
                    }
                }
                $product->unsetEventDispatcher();
                $product->save();
            }
        }
    }



    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}

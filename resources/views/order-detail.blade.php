@extends('layouts/main')

@section('content')


    @if($order->user_id === Auth::id())
        <!-- Checkout Content -->
        <div class="container-fluid no-padding checkout-content" style="margin-top: 5px;">
            <a href="{{ route('orders') }}" class="text-secondary">
                <i class="glyphicon glyphicon-arrow-left"></i> < Siparişlerime Geri Dön
            </a>
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Order Summary -->
                    <div class="col-sm-12 locations text-left">
                        <div class="section-padding"></div>
                        <br><br>
                        <h2>Sipariş (S-{{ $order->id }}) <br><br></h2>
                        <table class="table table-bordererd table-hover">
                            <tr>
                                <th>Ürün Görüntüleri</th>
                                <th>Ürün İsmi</th>
                                <th>Adet Fiyatı</th>
                                <th>Adet</th>
                                <th>Toplam Tutar</th>
                            </tr>
                            @foreach($order->baskets->basket_products as $basket_product)
                                <tr>
                                    <td>
                                        <a href="{{ route('product', $basket_product->product->slug) }}">
                                            @foreach($basket_product->product->images as $image)
                                                <img class="img-responsive" style="width: 50px;"
                                                     src="/uploads/{{ $image->name }}">
                                            @endforeach
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('product', $basket_product->product->slug) }}">
                                            {{ $basket_product->product->product_name }}
                                        </a>
                                    </td>
                                    <td>{{ number_format($basket_product->price,2) }} ₺</td>
                                    <td>{{ $basket_product->quantity }}</td>
                                    <td>{{ $basket_product->price * $basket_product->quantity }} ₺</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="4" class="text-right">Toplam(Kdv Dahil)</th>
                                <td colspan="2">{{ $order->order_price }} ₺</td>
                            </tr>

                            <tr>
                                <th colspan="4" class="text-right">Durum</th>
                                <td colspan="2">{{ $order->status }}</td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Checkout Content /- -->

    @else

        <div class="container-fluid no-padding checkout-content" style="margin-top: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 order-summary">
                        <div class="alert alert-danger text-center">
                            <h2>No records found!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif


@endsection

@extends('layouts/main')

@section('content')

    <!-- Checkout Content -->
    <div class="container-fluid no-padding checkout-content" style="margin-top: 40px;">
        <!-- Container -->
        <div class="">
            <div class="row">
                <!-- Order Summary -->
                <div class="col-md-12 order-summary">
                    <div class="section-padding"></div>
                    <!-- Section Header -->
                    <div class="section-header">
                        <h3>SEPETİM</h3>
                    </div><!-- Section Header /- -->

                    <div class="order-summary-content">
                        @if(count(Cart::content())>0)
                            <table class="shop_cart">
                                <thead>
                                <tr>
                                    <th class="product-name">Görüntü</th>
                                    <th class="product-name">Ürün İsmi</th>
                                    <th class="product-name"> Color</th>
                                    <th class="product-name">coil length</th>
                                    <th class="product-name">total length</th>
                                    <th class="product-name">unit price</th>
                                    <th class="product-name">product price</th>
                                    <th class="product-name">unitWeight</th>
                                    <th class="product-name">totalWeight</th>
                                    <th class="product-name">copperWeight</th>
                                    <th class="product-name">product detail</th>
                                    <th class="product-quantity">quantity</th>
                                    <th class="product-remove">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $productCartItem)

                                    <tr class="cart_item">
                                        <td> @if(isset(\App\Product::find($productCartItem->id)->image))
                                                <img style="height: 20%" src="{{\App\Product::find($productCartItem->id)->image}}" alt="">
                                            @else
                                                <img style="height: 10%" src="{{asset('assets/new images/WebsiteBOSS.png')}}" alt="">
                                            @endif</td>
                                        <td data-title="{{$productCartItem->name}}" class="product-name">
                                            <a title="{{$productCartItem->name}}" href="{{ route('product', $productCartItem->options->slug) }}">
                                                {{$productCartItem->name}}
                                            </a>
                                        </td>
                                        <td>{{\App\Product::find($productCartItem->id)->color}}</td>
                                        <td>{{\App\Product::find($productCartItem->id)->coil_length}} mt</td>
                                        <td>{{\App\Product::find($productCartItem->id)->total_length}}</td>
                                       @if(Auth::guest())
                                           <td class="text-danger">Gizli</td>
                                        @else
                                            <td>{{\App\Product::find($productCartItem->id)->unit_price}}</td>
                                           @endif
                                        @if(Auth::guest())
                                            <td class="text-danger">Gizli</td>
                                        @else
                                        <td>{{\App\Product::find($productCartItem->id)->product_price}} $</td>
                                        @endif
                                        <td>{{\App\Product::find($productCartItem->id)->unitWeight}} kg/km</td>
                                        <td>{{\App\Product::find($productCartItem->id)->totalWeight}} kg</td>
                                        <td>{{\App\Product::find($productCartItem->id)->copperWeight}} kg/km</td>
                                        <td>{{\App\Product::find($productCartItem->id)->product_detail}}</td>

                                        <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity">
                                                <input type="number" class="quantityf" data-id="{{$productCartItem->rowId}}" value="{{$productCartItem->qty}}" min="0" max="" >
                                             </div>
                                        </td>
                                        @if(Auth::guest())
                                            <td class="text-danger">Gizli</td>
                                        @else

                                        <td data-title="Total" class="product-remove">
                                            <span>{{($productCartItem->price) * ($productCartItem->qty) }} $</span>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td class="bg-white">
                                        <form action="{{route('basket.destroy')}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input  type="submit" class="btn-warning btn pull-left" value="Tümünü Temizle">
                                        </form>

                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                            <!-- Proceed To Checkout -->
                            @if(Auth::guest())
                                <a  class="btn btn-danger btn-sm float-right" href="#">Teklif Almak İçin Oturum Açınız</a>
                            @else
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="wc-proceed-to-checkout">
                                        <p class="text-dark"> TOPLAM: <strong>&nbsp; {{ number_format(Cart::subtotal(),2,',', '.') }} $ </strong></p>
                                        <a href="{{route('createPDF')}}" class="btn btn-info btn-sm" onClick="window.location.reload()">PDF OLARAK İNDİR</a>
                                    </div>
                                </div><!-- Proceed To Checkout /- -->
                                @endif

                        @else
                            <div class="container-fluid no-padding checkout-content">
                                <div class="container">
                                    <br>
                                    <div class="row">
                                        <br>
                                        <div class="col-md-12 order-summary">
                                            <div class="alert alert-danger text-center">
                                                <h4>Sepetinizde Ürün Bulunmamaktadır!</h4>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div><!-- Order Summary /- -->
            </div>
        </div><!-- Container /- -->
        <div class="section-padding"></div>
    </div><!-- Checkout Content /- -->
@endsection
@section('js')
    <script type="text/javascript">
        $(function(){
            $('.quantityf').on('change', function() {
                var id = $(this).attr('data-id');
                var max = $(this).attr('max');
                var quantity = $(this).val();
                max = parseInt(max);
                quantity = parseInt(quantity);
                if(quantity > max) {
                    document.getElementsByClassName('quantityf').value=max;
                    Swal.fire({
                        icon: 'error',
                        title: 'Uyarı',
                        text: 'Girdiğiniz ürün miktarı ürün stoğunu aşmaktadır.',
                        footer: '<span class="alert alert-primary w-auto font-weight-bold"> Ürün stok durumu :'+ max +' ürün mevcut</span>'
                    }).then(function () {
                        window.location.href = '{{ route('basket') }}';
                    })
                }else{
                    toastr.options.timeOut = 4500;
                    $.ajax({
                        type: "PATCH",
                        url: '{{ url('basket/update') }}' + '/' + id,
                        data: {
                            'quantity': this.value,
                        },
                        success: function(data) {
                            console.log(data);
                            toastr.success('Güncelleme Başarılı!!');
                            window.location.href = '{{ route('basket') }}';
                        }
                    });
                }
            });
        });
    </script>
@endsection


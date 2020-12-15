@extends('layouts.main')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/categories_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/categories_responsive.css')}}">
@endsection
@section('meta')
    <meta type="keywords" content="Ürünler,Arama">
@endsection
@section('title','VeosNet Kategori Ürün Sayfası || VeosNet Network&Marketing')
@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">
                <!-- Breadcrumbs -->

                <!-- Sidebar -->
                <!-- Main Content -->
                <div class="main_content">
                    <!-- Products -->
                    <div class="products_iso">
                        <div class="row">
                            <div class="col">
                                @if(isset($details))
                                    <p class="mt-3" style="font-size: 16px"><b> {{ $query }} </b><small class="text-secondary">araması için bulunan ürünler</small></p>
                                    <h4 style="font-family: 'Harlow Solid Italic'" class="text-center" >ÜRÜN DETAYLARI</h4>
                                    <div class="product-grid"
                                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                                        @foreach($details as $product)
                                            <a href="/product/{{$product->slug}}">
                                                <div class="product-item {{$product->id}} ">
                                                    <div class="product discount product_filter">
                                                        <div class="product_image"style="margin-top: -22px">
                                                            {!! $product->thumbs !!}
                                                        </div>
                                                    </div>
                                                    <div class="product_info" style="margin-top: -35px">
                                                        <small class="product_name"><a class="text-secondary" href="/product/{{$product->slug}}">{{ $product->product_name }}</a></small>
                                                        <div class="product_price text-center" style="font-size: 11px;margin-top: -3px">{{ number_format($product->product_price) }} <small>₺</small></div>
                                                        <div class="add_to_cart_button red_button"><a href="{{ route('basket.create', ['id' => $product->id]) }}">Sepete Ekle</a></div>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            var max= $(this).parent().prev().find('input').attr('max');
            max = parseInt(max);
            quantity = parseInt(quantity);
            if(quantity > max) {
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: 'Girdiğiniz ürün miktarı ürün stoğunu aşmaktadır.',
                    footer: '<span class="alert alert-primary w-auto font-weight-bold"> Ürün stok durumu :'+ max +' ürün mevcut</span>'
                })
            }else{
                $.ajax({
                    type: "POST",
                    url: $(this).attr('href'),
                    data: {quantity: quantity}
                    , success: function (data) {
                        console.log(data);
                        $('#checkout_items').html(data.cartCount);
                    }
                });
                return false; //for good measure
            }
        });
    </script>
    <script src="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/categories_custom.js')}}"></script>
@endsection


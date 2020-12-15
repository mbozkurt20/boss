@extends('layouts.main')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/categories_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/categories_responsive.css')}}">

@endsection

@section('content')


    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"><a href="{{route('category', $category->slug)}}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{ $category->category_name }}</a></li>
                    </ul>
                </div>

                <!-- Sidebar -->



                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">
                                <div class="product-grid"
                                     data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>


                                    @foreach($products as $product)
                                        <a href="/product/{{$product->slug}}">
                                            <div class="product-item {{$product->id}} my-2">
                                            <div class="product discount product_filter">
                                                <div class="product_image " >
                                                    {!! $product->thumbs !!}
                                                </div>

                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                                href="/product/{{$product->slug}}">{{ $product->product_name }}</a>
                                                    </h6>

                                                    <div class="product_price my-1">{{ number_format($product->product_price) }} ₺<span>{{ number_format($product->original_price ) }}
                                                            ₺</span>
                                                    </div>
                                                    @if($product->status==1)
                                                        <span>Miktar:</span>
                                                        <input type="number" class="quantity" id="quantity" name="quantity" value="1" min="0" max="{{$product->miktar}}"
                                                               style="width: 50px; margin-right: 10px;">
                                                    @else
                                                        <span style="border-radius: 5px" class="alert-info p-2 font-weight-bolder">Stokda ürün mevcut değil !</span>
                                                    @endif
                                                </div>
                                                @if($product->status==1)
                                                    <div class="add_to_cart_button red_button"><a href="{{ route('basket.create', ['id' => $product->id]) }}">Ürünü Ekle</a></div>
                                                @else
                                                    <form action="{{route('gelince_haber_ver')}}" method="post" class="text-center mt-2">
                                                        @csrf
                                                        <input type="hidden" value="{{auth()->id()}}" name="user_id">
                                                        <input type="hidden" value="{{$product->id}}" name="product_id">
                                                        <button type="submit" class="btn btn btn-warning "><i class="fa fa-bullhorn"></i> Gelince Haber Ver</button>
                                                    </form>
                                                @endif
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefit -->
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

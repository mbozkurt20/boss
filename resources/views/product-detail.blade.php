@extends('layouts.main')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/single_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/single_responsive.css') }}">
@endsection


@section('content')

    <div class="container single_product_container">
        <div class="row">
            <div class="col">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/">Anasayfa</a></li>
                        @foreach($bcrumb as $bc)
                            <li><a href="/category/{{$bc->slug}}"><i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i>{{ $bc->category_name }}</a>
                            </li>
                        @endforeach
                        <li class="active"><a href="{{route('product', $product->slug)}}"><i class="fa fa-angle-right"
                                                                                             aria-hidden="true"></i>{{ $product->product_name }}
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>
                                   @if(isset($product->imag))
                                        <img src="{{$product->image}}" alt="">
                                    @else
                                        <img src="{{asset('assets/new images/WebsiteBOSS.png')}}" alt="">
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title text-center">
                        <h5> {{ $product->product_name }}</h5>
                        <p>{!! $product->product_detail !!}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="product_price col-md-4 col-sm-4">{{ number_format($product->product_price) }} <small>₺</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="product_details_title">
                        @if($product->status==1)
                            <input type="number" class="quantity" id="quantity" name="quantity" value="1" min="0" max="{{$product->miktar}}"
                                   style="width: 50px; margin-right: 10px;height: 18px;border: 1px solid #FE7C7F;margin-bottom: 5px">
                        @else
                          <div>  <span style="border-radius: 5px" class="alert-light text-danger p-2 font-weight-bolder mt-2">Stokda ürün mevcut değil !</span></div>
                        @endif

                    </div>
                    @if($product->status ==1)

                        <div class="red_button" style="margin-top: 30px;">
                            <a href="{{ route('basket.create', ['id' => $product->id]) }}">Sepete ekle</a>
                        </div>
                    @else
                        <form action="{{route('gelince_haber_ver')}}" method="post" class="text-center">
                            @csrf
                            <input type="hidden" value="{{auth()->id()}}" name="user_id">
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                            <button type="submit" class="btn btn btn-warning mt-1 "><i class="fa fa-bullhorn"></i> Gelince Haber Ver</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
    <script>
        $('.red_button').find('a').click(function (event) {
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
    <script src="{{ asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/single_custom.js') }}"></script>
@endsection

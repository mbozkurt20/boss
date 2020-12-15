@extends('layouts.main')

@section('content')

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                {!!Form::model($orders, ['route' => ['admin-orders.update', $orders->id], "method" =>  "put","files" => true])!!}
                {!! Form::bsSelect("status","Durum",null,$status,"Lütfen Bir Durum Seçiniz") !!}
                {!! Form::bsSubmit("Update") !!}
                {!! Form::close() !!}

                <h3>Kullanıcı Bilgileri</h3>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Iyzico Conversation ID</th>
                        <th>İsim Soyisim</th>
                        <th>E-posta</th>
                        <th>Cep Telefonu</th>
                        <th>Adres</th>
                        <th>Durum</th>
                    </tr>
                    @foreach($orders->baskets->basket_products as $basket_product)
                        <tr>
                            <td>{{ $orders->order_no }}</td>
                            <td>{{ $orders->name }}</td>
                            <td>{{ $orders->baskets->user->email }}</td>
                            <td>{{ $orders->m_phone }}</td>
                            <td>{{ $orders->address }}</td>
                            <td>{{ $orders->status }}</td>
                        </tr>
                    @endforeach


                </table>

                <h3>Sipariş(s) - (SC-{{$orders->id}})</h3>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Görüntü</th>
                        <th>Ürün İsmi</th>
                        <th>Tutar</th>
                        <th>Adet</th>
                        <th>Toplam Tutar</th>
                        <th>Durum</th>
                    </tr>
                    @foreach($orders->baskets->basket_products as $basket_product)
                        <tr>
                            <td style="width: 120px;">
                                <a href="{{ route('product', $basket_product->product->slug) }}">
                                    @foreach($basket_product->product->images as $image)
                                        <img src="/uploads/{{ $image->name }}" width="100">
                                    @endforeach
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('product', $basket_product->product->slug) }}">
                                    {{$basket_product->product->product_name}}
                                </a>
                            </td>
                            <td>{{number_format($basket_product->price,2)}} ₺</td>
                            <td>{{ $basket_product->quantity }}</td>
                            <td>{{number_format($basket_product->price * $basket_product->quantity,2)}} ₺</td>
                            <td>{{ $orders->status }}</td>
                        </tr>
                    @endforeach

                    <tr>
                        <th colspan="4" class="text-right">Toplam Ücret (VAT included)</th>
                        <td colspan="2">{{$orders->order_price}} ₺</td>
                    </tr>

                    <tr>
                        <th colspan="4" class="text-right">Durum</th>
                        <td colspan="2">{{$orders->status}}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
@endsection

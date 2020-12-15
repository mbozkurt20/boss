@extends('layouts.main')

@section('content')
    <div class="container-fluid" style="margin-top: 20px;">
        <span>Gelen Siparişler</span>&nbsp; >  <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <div class="col-md-12 mt-5">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="thead-secondary">
                    <tr>
                        <th>Sipariş Nu</th>
                        <th>Iyzico C. ID</th>
                        <th>İsim Soyisim</th>
                        <th>Cep Numarası</th>
                        <th>Ödeme Seçeneği</th>
                        <th>Tutar</th>
                        <th>Durum</th>
                        <th>Sipariş Tarihi</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($orders) == 0)
                        <tr><td colspan="7">Kayıt bulunamadı</td></tr>
                    @endif
                    @foreach($orders as $order)
                        <tr>
                            <td>PN-{{ $order->id }}</td>
                            <td>{{ $order->order_no }}</td>
                            <td>{{ $order->baskets->user->name }} {{ $order->baskets->user->surname }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->payment_method}}</td>
                            <td>{{ $order->order_price}} ₺</td>
                            <td>{{ $order->status }} </td>
                            <td>{{ $order->created_at }}</td>
                            <td><a href="/admin-orders/{{$order->id}}/edit" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$orders->links()}}
            </div>
        </div>
    </div>
@endsection


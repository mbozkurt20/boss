@extends('layouts.main')
@section('content')

    <div class=" product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="/admin-products/create" class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Yeni Ürün Ekle
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Görüntü</th>
                        <th>Kategori</th>
                        <th>Product Name</th>
                        <th>colour</th>
                        <th>Coil Length</th>
                        <th>Total Length</th>
                        <th>Unit Price</th>
                        <th>Price USD</th>

                        <th>Unit Weight</th>
                        <th>Total Weight</th>
                        <th>Copper Weight</th>
                        <th>Detail</th>
                        <th>Stok Miktarı</th>
                        <th>Created At </th>
                        <th>Düzenle</th>
                        <th>Sil</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td> {{ $product->id }}</td>
                            <td><img style="height: 20%" src="{{$product->image}}" alt=""></td>
                            <td> {{ $product->categories->category_name }}  </td>
                            <td> {{ $product->product_name }}  </td>
                            <td> {{ $product->color}}  </td>
                            <td> {{ $product->coil_length}}  </td>
                            <td> {{ $product->total_length}}  </td>
                            <td> {{ $product->unit_price}}  </td>
                            <td> {{ $product->product_price}}  </td>
                            <td> {{ $product->unitWeight}}  </td>
                            <td> {{ $product->totalWeight}}  </td>
                            <td> {{ $product->copperWeight}}  </td>
                            <td> {!! $product->product_detail !!}  </td>
                            <td> {{ $product->miktar}}  </td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="/admin-products/{{$product->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                            </td>
                            <td> <a href="/admin-products/{{$product->id}}" class="btn btn-danger" data-method="delete"
                                    data-confirm="Emin misiniz?"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset("js/laravel-delete.js")}}"></script>
@endsection


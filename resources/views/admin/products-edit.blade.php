@extends('layouts.main')

@section('content')
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">

                {!!Form::model($products, ['route' => ['admin-products.update', $products->id], "method" =>  "put","files" => true])!!}
                {!! Form::bsSelect("category_id","Kategori Seçiniz",null,$categoriess,"Lütfen Bir Kategori Seçiniz") !!}
                {!! Form::bsText("image","Image Text"),'<a class="btn btn-info btn-sm mb-4" href="https://www.base64-image.de/">Upload</a>' !!}
                {!! Form::bsText("product_name","Product Name") !!}
                {!! Form::bsText("color","Color") !!}
                {!! Form::bsText("miktar","Quantity") !!}
                {!! Form::bsText("product_price","") !!}
                {!! Form::bsText("copperWeight","") !!}
                {!! Form::bsText("totalWeight","") !!}
                {!! Form::bsTextArea("product_detail","",null,["class" => "summernote"]) !!}
                {!! Form::bsSubmit("Güncelle") !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 100
        });
    </script>
@endsection

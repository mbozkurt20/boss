@extends('layouts.main')
@section('content')

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                {!!Form::open(["url" => "/admin-products",'files' => 'true', "method" => "post"]) !!}
                {!! Form::bsText("image","Image"),'<a class="btn btn-info btn-sm mb-4" href="https://www.base64-image.de/">Upload</a>' !!}
                {!! Form::bsSelect("category_id","Kategori",null,$categoriess,"Lütfen Bir Kategori Seçiniz") !!}
                {!! Form::bsText("product_name","Product Name") !!}
                {!! Form::bsText("color","Color") !!}
                {!! Form::bsText("coil_length","") !!}
                {!! Form::bsText("total_length","") !!}
                {!! Form::bsText("unit_price","") !!}
                {!! Form::bsText("product_price","") !!}
                {!! Form::bsText("unitWeight","") !!}
                {!! Form::bsText("totalWeight","") !!}
                {!! Form::bsText("copperWeight","") !!}
                {!! Form::bsText("miktar","Quantity") !!}
                {!! Form::bsTextArea("product_detail","",null,["class" => "summernote"]) !!}

                {!! Form::bsSubmit("Kaydet") !!}
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

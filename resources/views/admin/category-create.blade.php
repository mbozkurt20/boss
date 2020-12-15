@extends('layouts.main')
@section('content')
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12 mb-2 mt-3 ">
                {!!Form::open(["url" => "/admin-category", "method" => "post"]) !!}
                {!! Form::bsText("category_name","Kategori İsmi") !!}
                {!! Form::bsSubmit("Kategoriyi Oluştur") !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


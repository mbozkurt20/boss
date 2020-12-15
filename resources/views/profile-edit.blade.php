@extends('layouts.main')
@section('content')
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                {!!Form::model($userDetails, ['route' => ['profile.update', $userDetails->id], "method" =>  "put","files" => true])!!}
                {!! Form::bsText("phone","Sabit Telefon") !!}
                {!! Form::bsText("m_phone","Cep Telefonu") !!}
                {!! Form::bsText("address","Adres") !!}
                {!! Form::bsText("city","Şehir") !!}
                {!! Form::bsText("country","Üke") !!}
                {!! Form::bsText("zipcode","Posta Kodu") !!}
                {!! Form::bsSubmit("Güncelle") !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

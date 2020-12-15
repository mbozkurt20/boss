@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 170px">
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">Sosyal Medya Bilgisi Güncelleme Ekranı</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!!Form::model($sosyalMedya, ['route' => ['sosyalmedya.update', $sosyalMedya->id], "method" =>  "put","files" => true])!!}
                    {!! Form::bsText("instagram","") !!}
                    {!! Form::bsText("twitter","") !!}
                    {!! Form::bsText("ln","") !!}
                    {!! Form::bsText("facebook","") !!}
                    {!! Form::bsSubmit("Güncelle") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
@endsection
@section("css")

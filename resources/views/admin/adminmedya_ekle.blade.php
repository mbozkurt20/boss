@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 140px">
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray">Sosyal Medya Ekleme</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!!Form::open(["url" => "/sosyalmedya",'files' => 'true', "method" => "post"]) !!}
                    {!! Form::bsText("instagram","") !!}
                    {!! Form::bsText("twitter","") !!}
                    {!! Form::bsText("ln","") !!}
                    {!! Form::bsText("facebook","") !!}
                    {!! Form::bsSubmit("Kaydet") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
@endsection
@section("css")
@endsection

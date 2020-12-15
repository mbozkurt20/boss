@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 170px">
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">Duyuru Güncelleme Ekranı</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!!Form::model($duyurular, ['route' => ['duyurular.update', $duyurular->id], "method" =>  "put","files" => true])!!}
                    {!! Form::bsText("duyuru_basligi","Duyuru Başlığı",null,[]) !!}
                    {!! Form::bsTextArea("duyuru_icerigi","Duyuru İçeriği",null,["class" => "form-control",'rows'=>'5','cols'=>'20']) !!}
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
@endsection

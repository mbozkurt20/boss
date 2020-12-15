@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 2px">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">Hakkımzıda Yazısı Güncelleme</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!!Form::model($hakkimizda, ['route' => ['hakkimizda.update', $hakkimizda->id], "method" =>  "put","files" => true])!!}
                    {!! Form::bsTextArea("hakkimizda","") !!}
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

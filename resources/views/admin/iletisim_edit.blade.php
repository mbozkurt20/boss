@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 140px">
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">İletişim Bilgisi Güncelleme Ekranı</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!!Form::model($iletisim, ['route' => ['iletisim.update', $iletisim->id], "method" =>  "put","files" => true])!!}
                    {!! Form::bsText("musteri_hatti","") !!}
                    {!! Form::bsText("telefon_hatti","") !!}
                    {!! Form::bsText("whatsapp","") !!}
                    {!! Form::bsText("email","") !!}
                    {!! Form::bsText("acilis","Açılış Saati") !!}
                    {!! Form::bsText("kapanis","Kapanış Saati") !!}
                    {!! Form::bsTextArea("merkez_adresi","Merkez Adresi",null,["class" => "form-control",'rows'=>'5','cols'=>'20']) !!}
                    {!! Form::bsTextArea("fabrika_adresi",'Fabrika Adresi',null,["class" => "form-control",'rows'=>'5','cols'=>'20']) !!}
                    {!! Form::bsSubmit("Güncelle") !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function() {
            $(".number").keydown(function (e) {
                //  backspace, delete, tab, escape, enter and vb tuşlara izin vermek için.
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    //  Ctrl+A Tuş kobinasyonuna izin vermek için.
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    //  Ctrl+C Tuş kobinasyonuna izin vermek için.
                    (e.keyCode == 67 && e.ctrlKey === true) ||
                    //  Ctrl+X Tuş kobinasyonuna izin vermek için.
                    (e.keyCode == 88 && e.ctrlKey === true) ||
                    // home, end, left, right gibi tuşlara izin vermek için.
                    (e.keyCode >= 35 && e.keyCode <= 39)) {

                    return;
                }
                // Basılan Tuş takımının Sayısal bir değer taşıdığından emin olmak için.
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection
@section("css")
@endsection

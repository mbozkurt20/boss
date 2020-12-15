@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 1px">
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">İletişim Bilgisi Ekleme Ekranı</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form method="POST" action="{{route('contactadmin.store')}}" >
                        @csrf
                        <div class="form-group">
                            <label class="mx-2">Müşteri Hattı :</label>
                            <input class="w-25 form-control{{ $errors->has('musteri_hatti') ? ' is-invalid' : '' }}" name="musteri_hatti" type="tel" value="{{old('musteri_hatti')}}" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57'>
                        </div>
                        <div class="form-group">
                            <label class="mx-2">İrtibat Numarası :</label>
                            <input class="w-25 form-control{{ $errors->has('telefon_hatti') ? ' is-invalid' : '' }}" name="telefon_hatti" type="tel" value="{{old('telefon_hatti')}}" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57'>
                        </div>
                        <div class="form-group">
                            <label class="mx-2">Whatsapp Hattı :</label>
                            <input class="w-25 form-control{{ $errors->has('whatsapp') ? ' is-invalid' : '' }}" name="whatsapp" type="tel" value="{{old('whatsapp')}}" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57'>
                        </div>
                        <div class="form-group">
                            <label class="mx-2">e-Mail Adresimiz :</label>
                            <input class="w-25 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{old('email')}}" >
                        </div>
                        <div class="form-group">
                            <label class="mx-2">Açılış Saati :</label>
                            <input class="w-25 form-control{{ $errors->has('acilis') ? ' is-invalid' : '' }}" name="acilis" type="tel" value="{{old('acilis')}}">
                        </div>
                        <div class="form-group">
                            <label class="mx-2">Kapanış Saati :</label>
                            <input class="w-25 form-control{{ $errors->has('kapanis') ? ' is-invalid' : '' }}" name="kapanis" type="tel" value="{{old('kapanis')}}">
                        </div>
                        <label class="mx-2">Merkez Adres :</label>
                        <div class="form-group">
                            <textarea value="{{old('merkez_adresi')}}" name="merkez_adresi" id="" cols="80" rows="5"></textarea>
                        </div>
                        <label class="mx-2">Fabrika Adresi :</label>
                        <div class="form-group">
                            <textarea value="{{old('fabrika_adresi')}}" name="fabrika_adresi" id="" cols="80" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success mx-2" type="submit">Kaydet</button>
                            <a class="btn btn-danger" href="{{route('contactadmin.index')}}">Geri</a>
                        </div>
                    </form>
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

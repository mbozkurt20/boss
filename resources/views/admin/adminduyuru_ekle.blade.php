@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 170px">
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">Duyuru Ekleme Ekranı</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form method="POST" action="{{route('duyurular.store')}}" >
                        @csrf
                        <div class="form-group">
                            <label class="mx-2">Duyuru Başlığı :</label>
                            <input class="w-50 form-control{{ $errors->has('duyuru_basligi') ? ' is-invalid' : '' }}" name="duyuru_basligi" type="tel" value="{{old('duyuru_basligi')}}">
                        </div>
                        <label class="mx-2">Duyuru İçeriği :</label>
                        <div class="form-group">
                            <textarea value="{{old('duyuru_icerigi')}}" name="duyuru_icerigi" id="" cols="80" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success mx-2" type="submit">Kaydet</button>
                            <a class="btn btn-danger" href="{{route('duyurular.index')}}">Geri</a>
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

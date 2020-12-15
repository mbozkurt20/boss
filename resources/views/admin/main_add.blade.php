@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 1px">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">Main Ekleme</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form method="POST" action="{{route('mainyonetim.store')}}" >
                        @csrf
                        <div class="form-group">
                            <label class="mx-2">Üst Başlık</label>
                            <select class="form-control" name="ustbaslik" >
                                <option value="{{$title->title1}}">{{$title->title1}}</option>
                                <option value="{{$title->title3}}">{{$title->title2}}</option>
                                <option value="{{$title->title2}}">{{$title->title3}}</option>
                                <option value="{{$title->title4}}">{{$title->title4}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="mx-2">Main Başlığı</label>
                            <input class="w-25 form-control{{ $errors->has('baslik') ? ' is-invalid' : '' }}" name="baslik" type="text" value="{{old('baslik')}}">
                        </div>
                        <label class="mx-2">Sayfa İçeriği</label>
                        <div class="form-group">
                            <textarea type="text" name="icerik" id="" cols="80" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success mx-2" type="submit">Kaydet</button>
                            <a class="btn btn-danger" href="{{route('mainyonetim.index')}}">Geri</a>
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

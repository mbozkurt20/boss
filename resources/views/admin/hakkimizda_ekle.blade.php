@extends('layouts.main')
@section("content")
    <div class="container " style="padding: 30px;margin-top: 2px">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <h3 class="text-center" style="font-family: 'Harlow Solid Italic'">Hakkımzıda Yazısı Ekleme</h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form method="POST" action="{{route('hakkimizda.store')}}" >
                        @csrf
                        <div class="form-group">
                        <textarea name="hakkimizda" id="" cols="90" rows="12"></textarea>
                        </div>
                        <div class="form-group">
                            <button class=" w-50 btn btn-success mx-2" type="submit">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("js")
@endsection

@section("css")
@endsection

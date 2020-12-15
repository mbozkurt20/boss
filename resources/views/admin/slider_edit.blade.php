@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-8">
                <div class="card mt-5 mb-5">
                    <div class="card-header"><strong>Yeni Slider Ekle</strong></div>
                    <div class="card-body">

                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            Slider İsmi
                            <br>
                            <input type="text" name="title" class="form-control" required>
                            <br>
                            Slider Açıklama
                            <br>
                            <input type="text" name="aciklama" class="form-control" required>
                            <br>
                            Slider Fotoğraf
                            <br>
                            <input type="file" name="cover">
                            <br><br>
                            <button class="btn btn-primary" type="submit"> Kaydet</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-8">
                <div class="card mt-5 mb-5">
                    <div class="card-header"><strong>Slider Güncelle</strong></div>
                    <div class="card-body">

                        <form class="form-check" action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            Slider İsmi
                            <br>
                            <input type="text" name="title" value="{{$slider->title}}" class="form-control" required>
                            <br>
                            Slider Açıklama
                            <br>
                            <input type="text" name="aciklama" value="{{$slider->aciklama}}" class="form-control" required>
                            <br>
                            Slider Fotoğraf
                            <br>
                            <input type="file" value="" class="form-control-file" name="cover">
                            <br><br>
                            <button class="btn btn-primary" type="submit"> Kaydet</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

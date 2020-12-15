@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5 mt-5">
                    <div class="card-header "><strong>SLİDER EKLE</strong></div>
                    <div class="card-body">
                        <a href="{{ route('slider.create') }}" class="btn btn-primary">Yeni Slider Ekle</a>
                        <br /><br />
                        <table class="table">
                            <tr>
                                <th>Slider İsmi</th>
                                <th>Slider Açıklama</th>
                                <th>Yüklenen Slider</th>
                                <th>Düzenle</th>
                                <th>Silme</th>
                            </tr>
                            @forelse ($slider as $k)
                                <tr>
                                    <td>{{ $k->title }}</td>
                                    <td>{{ $k->aciklama }}</td>
                                    <td class="text-center">
                                        <a href="{{route('slider.edit',$k->id)}}" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td> <a href="{{route('slidersil',$k->id)}}" class="btn btn-danger" data-method="delete"
                                            data-confirm="Emin Misiniz?"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Yüklenmiş Herhangi Bir Slider Bulunmuyor...</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

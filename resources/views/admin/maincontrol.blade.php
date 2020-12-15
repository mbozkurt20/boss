@extends('layouts.main')
@section('content')
    <div class="container-fluid" style="margin-top: 4px">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Footer Başlıklar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       @if($title == 0)
                            <form method="post" action="{{route('baslikekleme.store')}}">
                                @csrf
                                <input class="form-control mb-2 " name="title1" type="text">
                                <input class="form-control mb-2" name="title2" type="text">
                                <input class="form-control mb-2" name="title3" type="text">
                                <input class="form-control mb-2"  name="title4" type="text">
                                <button type="submit" class="btn btn-dark float-right">Ekle</button>
                            </form>
                        @else
                            <form method="post" action="{{route('baslikekleme.update',$titleFirst->id)}}">
                                @method('PUT')
                                @csrf
                                <input value="{{$titleFirst->title1}}" class="form-control mb-2 " name="title1" type="text">
                                <input value="{{$titleFirst->title2}}" class="form-control mb-2" name="title2" type="text">
                                <input value="{{$titleFirst->title3}}" class="form-control mb-2" name="title3" type="text">
                                <input value="{{$titleFirst->title4}}" class="form-control mb-2"  name="title4" type="text">
                                <button type="submit" class="btn btn-dark float-right">Güncelle</button>
                            </form>
                           @endif
                    </div>
                </div>
            </div>
        </div>
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>  <h4 class="text-center" style="font-family: 'Harlow Solid Italic'">MAİN YÖNETİM </h4>
        <!-- Modal -->
        <hr>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Bize Ulaşın Bilgisi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <p>"Bize Ulaşın" alanına başlık ekleme yaparken içerik girmenize gerek yoktur, bu alanda sadece başlık yer alacaktır!!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
           @if($title == 0)
            <button type="button" class="btn btn-info mb-5 mx-3" data-toggle="modal" data-target="#exampleModal">
              Başlık Ekle
            </button>
            @else
                <a href="{{route('mainyonetim.create')}}" class="btn btn-danger mb-5 mx-1">
                    <i class="fa fa-plus"></i>
                    Footer Bilgilerini Ekle
                </a>
                <button type="button" class="btn btn-info mb-5 mx-1" data-toggle="modal" data-target="#exampleModal">
                    Başlık Güncelle
                </button>
            @endif
            <button type="button" class="btn btn-outline-warning h-25" data-toggle="modal" data-target="#exampleModalCenter">
                ?
            </button>

            <div class="col-md-12 mb-5">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Üst Başlık</th>
                            <th>Başlık</th>
                            <th>Sayfa İçeriği</th>
                            <th>Eklenme Tarihi</th>
                            <th class="text-center" >Düzenle</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mainyonetim as $m)
                            <tr>
                                            <td>@if($m->ustbaslik == 1)
                                                    <p>Kurumsal</p>
                                                    @elseif($m->ustbaslik == 2 )
                                                    <p>Güvenli Alışveriş</p>
                                                    @elseif($m->ustbaslik == 3 )
                                                    {{config('app.name')}}
                                                    @endif
                                            </td>
                                            <td>{{$m->baslik}}</td>
                                            <td>{!! $m->icerik !!}</td>
                                             <td>{{$m->created_at}}</td>
              <td class="text-center"><a href="{{route('mainyonetim.edit',$m->id)}}" class="btn btn-primary "><i class="fa fa-edit"></i></a></td>
                    <td> <a href="{{route('mainyonetim.destroy',$m->id)}}" class="btn btn-danger" data-method="delete"
                            data-confirm="Emin Misiniz?"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset("js/laravel-delete.js")}}"></script>
@endsection

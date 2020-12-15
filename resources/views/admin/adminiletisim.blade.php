@extends('layouts.main')
@section('content')
    <div class="container" style="padding: 30px;margin-top:2px">
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bilgilendirme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> İletişim bilgisi sadece 1 defa eklenir. Eklenme butonu 'İletişim' bilgisi anlık boş olması ve silinmesi durumu gözetilerek konulmuştur.</p>
                        <p> Sadece Edit'in kullanılması önerilir.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
            <!-- Button trigger modal -->

            <!-- Modal -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">İLETİŞİM EDİT</h4>
                <div class="col-md-12">
                    <a href="{{route('contactadmin.create')}}" class="btn btn-danger mb-5">
                        <i class="fa fa-plus"></i>
                        İletişim Bilgisi Ekle
                    </a>
                    <button type="button" class="btn btn-outline-warning mb-5 mx-3" data-toggle="modal" data-target="#exampleModal">
                        Bilgilendirme
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Merkez Adresi</th>
                            <th>Fabrika Adresi</th>
                            <th>Müşteri Hattı</th>
                            <th>Telefon Hattı</th>
                            <th>Whatsapp</th>
                            <th>E-Mail Adresi</th>
                            <th>Açılış Saati</th>
                            <th>Kapanış Saati</th>
                            <th class="text-center" >Edit</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($iletisim as $b)
                            <tr>
                                <td>{{$b->merkez_adresi}}</td>
                                <td>{{$b->fabrika_adresi}}</td>
                                <td>{{$b->musteri_hatti}}</td>
                                <td>{{$b->telefon_hatti}}</td>
                                <td>{{$b->whatsapp}}</td>
                                <td>{{$b->email}}</td>
                                <td>{{$b->acilis}}</td>
                                <td>{{$b->kapanis}}</td>
                                <td class="text-center">
                                    <a href="{{route('contactadmin.edit',$b->id)}}" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
                                <td> <a href="iletisim/{{$b->id}}" class="btn btn-danger" data-method="delete"
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


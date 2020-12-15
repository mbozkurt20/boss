@extends('layouts.main')
@section('content')
    <div class="container" style="padding: 30px;margin-top: 130px">
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
                        Kullanıcının Menü Bölümünde ' Duyurular ' kısmındaki butonu içerir. Kullanıcılara duyurularınızı buradan iletebilirsiniz.
                        <p class="text-success">TAVSİYE: Duyuruların aralıklı zamanlarda, kısa metin halinde verilmesiyle daha etkili hale geldiği söylenmektedir.</p>

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
            <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">
                <h4 class="text-center" style="font-family: 'Harlow Solid Italic'"> DUYURU EDİT </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('duyurular.create')}}" class="btn btn-danger mb-5">
                    <i class="fa fa-plus"></i>
                    Yeni Duyuru Ekle
                </a>    <button type="button" class="btn btn-outline-warning mb-5 mx-3" data-toggle="modal" data-target="#exampleModal">
                    Bilgilendirme
                </button>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Duyuru Başlığı</th>
                            <th>Duyuru İçeriği</th>
                            <th>Oluşturulma Tarihi</th>
                            <th class="text-center" >Edit</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($duyuru as $b)
                            <tr>
                                <td>{{$b->duyuru_basligi}}</td>
                                <td>{{$b->duyuru_icerigi}}</td>
                                <td>{{$b->created_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('duyurular.edit',$b->id)}}" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
                                <td> <a href="duyurular/{{$b->id}}" class="btn btn-danger" data-method="delete"
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


@extends('layouts.main')
@section('content')

    <div class="container-fluid" style="margin-top: 2px">
        <div class="row" style="margin-bottom: 30px;">
            <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">
                <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray"> GELEN MESAJLAR </h3>
                <hr>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover text-secondary">
                        <thead>
                        <tr>
                            <th>İsim Soyisim</th>
                            <th>e-posta</th>
                            <th>Mesajı</th>
                            <th>Cevapla</th>
                            <th>Cevaplamadan Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($mesaj as $b)
                            <tr>
                                <td>{{$b->name}} {{$b->surname}}</td>
                                <td>{{$b->email}}</td>
                                <td>{{$b->message}}</td>
                                <td><button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#exampleModal">
                                    </button></td>
                                <td> <a href="{{route('gelenmesajlar.destroy',$b->id)}}" class="btn btn-danger" data-method="delete"
                                        data-confirm="Emin Misiniz?"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mesajı Cevapla</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{route('mesajCevap',$b->id)}}">
                                                @csrf
                                               @if(isset($b->cevap))
                                                    <textarea type="text" rows="8" cols="70" name="cevap">{{$b->cevap}}</textarea>
                                                @else
                                                    <textarea type="text" rows="8" cols="70" name="cevap"></textarea>
                                                @endif
                                                <hr>
                                                <button type="submit" class="btn btn-info w-50 float-right "><i class="fa fa-send-o"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <marquee behavior="" direction=""><p>Gelen Mesaj Bulunmamaktadır.</p></marquee>
                        @endforelse
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

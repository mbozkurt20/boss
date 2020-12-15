@extends('layouts.main')
@section('content')
    <div class="container" style="padding: 30px;margin-top: 2px">
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>  <h4 class="text-center" style="font-family: 'Harlow Solid Italic'">HAKKIMIZDA YAZISI</h4>
        <div class="row" style="margin-bottom: 30px;">
        </div>
        <div class="row">
            @if($hakkimizdacount == 0)
                <a href="{{route('hakkimizda.create')}}" class="btn btn-danger mb-5 mx-3">
                    <i class="fa fa-plus"></i>
                    Yeni Hakkımızda Ekle
                </a>
            @endif
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Hakkımızda</th>
                            <th>Kayıt Tarihi</th>
                            <th class="text-center" >Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hakkimizda as $b)
                            <tr>
                                <td>{!!$b->hakkimizda!!}</td>
                                <td>{{$b->created_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('hakkimizda.edit',$b->id)}}" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
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

@extends('layouts.main')
@section('content')

    <div class="container" style="margin-top: 2px">
        <div class="row" style="margin-bottom: 30px;">
            <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">

                <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray"> SOSYAL MEDYA EDİT</h3>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <a href="{{route('sosyalmedya.create')}}" class="btn btn-danger mb-5">
                    <i class="fa fa-plus"></i>
                    Yeni Url Ekle
                </a>
                <div class="table-responsive">
                    <table class="table table-hover text-secondary">
                        <thead>
                        <tr>
                            <th>İnstagram</th>
                            <th>Twitter</th>
                            <th>ln</th>
                            <th>Facebook</th>
                            <th class="text-center" >Edit</th>
                            <th>Silme</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sosyalMedya as $b)
                            <tr>
                                <td>{{$b->instagram}}</td>
                                <td>{{$b->twitter}}</td>
                                <td>{{$b->ln}}</td>
                                <td>{{$b->facebook}}</td>
                                <td class="text-center">
                                    <a href="{{route('sosyalmedya.edit',$b->id)}}" class="btn btn-primary "><i class="fa fa-edit"></i></a>
                                </td>
                                <td> <a href="{{route('sosyalmedya.destroy',$b->id)}}" class="btn btn-danger" data-method="delete"
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

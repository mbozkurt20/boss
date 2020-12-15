@extends('layouts.main')
@section('content')

    <div class="container-fluid" style="margin-top: 2px">
        <div class="row" style="margin-bottom: 30px;">
            <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            <div class="col-md-12">
                <h3 class="text-center" style="font-family: 'Harlow Solid Italic';color: darkslategray"> SİLİNEN VE CEVAPLANAN MESAJLAR </h3>
                <hr>
            </div>
            <form class="float-right" method="get" action="{{route('silinenSearch')}}">
                @csrf
                <input class="form-control" placeholder="İsim Giriniz" name="search" type="text">
                <button type="submit" class="btn btn-info">Ara</button>
            </form>
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
                            <th>Cevap</th>
                        </tr>
                        </thead>
                        <tbody>
                       @if(isset($search))
                           @forelse($search as $b)
                               <tr>
                                   <td>{{$b->name}} {{$b->surname}}</td>
                                   <td>{{$b->email}}</td>
                                   <td>{{$b->message}}</td>
                                   <td>{{$b->cevap}}</td>
                               </tr>
                           @empty
                               <marquee behavior="" direction=""><p>Sonuç Bulunamadı</p></marquee>
                           @endforelse
                       @else
                           @forelse($silinen as $b)
                               <tr>
                                   <td>{{$b->name}} {{$b->surname}}</td>
                                   <td>{{$b->email}}</td>
                                   <td>{{$b->message}}</td>
                                   <td>{{$b->cevap}}</td>
                               </tr>
                           @empty
                               <marquee behavior="" direction=""><p>Silinmiş ve Cevaplanmış Mesaj Bulunmamaktadır.</p></marquee>
                           @endforelse
                       @endif
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

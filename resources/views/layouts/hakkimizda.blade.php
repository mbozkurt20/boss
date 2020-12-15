@extends('layouts.main')
@section("content")
    <div class="container-fluid"style="margin-top: 4px">
        <a class="mx-3 mt-2" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
            @forelse($hakkimizda as $h)
            <div class="card mb-5 mt-4">
                <div class="card-header" style="background-color: ghostwhite">
                    <h4 style="font-family: 'Harlow Solid Italic';margin-top: 15px   " class="text-center"> HAKKIMIZDA </h4>
                </div>
                <div class="card-body">
                    <p class="card-text"> {!! $h->hakkimizda !!}</p>
                </div>
            </div>
                @empty
            <marquee behavior="" direction=""><p>Boş Görünüyor ...</p></marquee>
                @endforelse

    </div>
@endsection

@section("customJs")
@endsection

@section("customCss")
@endsection

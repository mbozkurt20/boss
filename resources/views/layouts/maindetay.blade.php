@extends('layouts.main')
@section("content")
    <div class="table-responsive" style="margin-top: 3px;background-color: ghostwhite">
        <a class="container-fluid" style="color: black " href="{{route('home')}}">{{config('app.name')}}</a>><a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>

        <div class="col-md-12">
            <div class="row justify-content-center" >
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center" style="">{{$mainyonetim1->baslik}}</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-dark mt-5 mb-5"> {!! $mainyonetim1->icerik  !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection

@section("customJs")
@endsection

@section("customCss")
@endsection

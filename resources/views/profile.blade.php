@extends('layouts.main')
@section('content')
    <div class="container-fluid product_section_container" style="padding: 3px;">
        <a class="mx-3" style="color: black " href="{{route('home')}}">Anasayfa</a> > <a class="mx-3" style="color: gray" title="Geri" onclick="window.history.back()">Geri Git</a>
       <h4 class="text-center mb-5" style="font-family: 'Harlow Solid Italic'">PROFİL BİLGİLERİM</h4>
        <div class="row mb-3">
            <div class="col-md-12 mb-5">
                <table class="table table-hover mb-3">
                    <thead>
                    <tr>
                        <th>İsim Soyisim</th>
                        <th>E-Mail</th>
                        <th>Adres</th>
                        <th>Sabit Telefon</th>
                        <th>Cep Telefonu</th>
                        <th>Şehir</th>
                        <th>Ülke</th>
                        <th>Posta Kodu</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($userDetails as $userDetail)
                        <tr>
                            <td>{{ $userDetail->user->name }} {{ $userDetail->user->surname }}</td>
                            <td>{{ $userDetail->user->email }}</td>
                            <td>{{ $userDetail->address }} </td>
                            <td>{{ $userDetail->phone }}</td>
                            <td>{{ $userDetail->m_phone }}</td>
                            <td>{{ $userDetail->city }}</td>
                            <td>{{ $userDetail->country }}</td>
                            <td>{{ $userDetail->zipcode }}</td>
                            <td>
                                <a href="/profile/{{$userDetail->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

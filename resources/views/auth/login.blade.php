@extends('layouts.app')
@section('content')
        <div class=" justify-content-center mt-4">
            <div class="col-md-4 col-sm-12">
                <div class="box">
                    <h2>{{config('app.name')}}</h2>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group row inputBox">
                            <input id="id" type="text"   class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="email" value="{{ old('emailx') }}" required autofocus>
                            <label for="id" >E-Posta Adresiniz...</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group row inputBox">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password" >Şifreniz...</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg w-50 btn-outline-light text-secondary font-weight-bold"style="float:right">Giriş Yap
                            </button>
                            <div class="form-group row">
                                <div class="checkbox">
                                    <label class="text-white">
                                        <input class="" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Beni Hatırla') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                    <p>Şifremi Hatırlamıyorum?</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
@section('js')
@endsection

    @extends('layouts.app')
@section('content')
   <div class=" justify-content-center" style="margin-top: -35px">
       <div class="col-md-9 col-sm-12">
           <div class="box">
               <div class="card-header text-white text-center mb-1">{{config('app.name')}} ÜYELİK BİLGİLERİ</div>
               <div class="card-body">
                   <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                       @csrf
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-6 form-group">
                                   <div class="form-group inputBox row">
                                       <input id="name" type="text"
                                              class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                              name="name" value="{{ old('name') }}" required autofocus>

                                       @if ($errors->has('name'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                       @endif
                                       <label for="surname" class="col-form-label text-md-right">İsim</label>
                                   </div>
                                   <div class="form-group inputBox row">
                                       <input id="surname" type="text"
                                              class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                              name="surname" value="{{ old('surname') }}" required autofocus>

                                       @if ($errors->has('surname'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                       @endif
                                       <label for="surname" class="col-form-label text-md-right">Soyisim</label>
                                   </div>
                                   <div class="form-group inputBox row">
                                       <input id="kimlik" type="text" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57' maxlength="11"
                                              class="form-control{{ $errors->has('kimlik') ? ' is-invalid' : '' }}"
                                              name="kimlik" value="{{ old('kimlik') }}" required autofocus>

                                       @if ($errors->has('kimlik'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kimlik') }}</strong>
                                    </span>
                                       @endif
                                       <label for="surname" class="col-form-label text-md-right">Kimlik Numaranız</label>
                                   </div>
                                   <div class="form-group inputBox row">
                                       <input id="telefon" type="text" onkeypress='return event.keyCode >= 48 && event.keyCode <= 57' maxlength="11"
                                              class="form-control{{ $errors->has('telefon') ? ' is-invalid' : '' }}"
                                              name="telefon" value="{{ old('telefon') }}" required autofocus>
                                       @if ($errors->has('telefon'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                                       @endif
                                       <label for="surname" class="col-form-label text-md-right">Telefon Numaranız</label>
                                   </div>
                               </div>
                               <div class="col-md-6 form-group">
                                   <div class="form-group inputBox row">

                                       <input id="email" type="email"
                                              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                              name="email" value="{{ old('email') }}" required>

                                       @if ($errors->has('email'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                       @endif
                                       <label for="surname" class="col-form-label text-md-right">E-posta Adresiniz</label>
                                   </div>
                                   <div class="form-group row inputBox">
                                       <input id="password" type="password"
                                              class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                              name="password" required>

                                       @if ($errors->has('password'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                       @endif
                                       <label for="surname" class="col-form-label text-md-right">Şifeniz</label>
                                   </div>
                                   <div class="form-group row inputBox">
                                       <input id="password-confirm" type="password" class="form-control"
                                              name="password_confirmation" required>
                                       <label for="password-confirm" class=" col-form-label text-md-right">Şifre Tekrarı*</label>
                                   </div>
                                   <div class="form-group">

                                           <input required  id="sozlesme" type="checkbox"> <a  style="color: white; font-weight: bold" href="{{route("bayi")}}">Üyelik Sözleşmesi</a><label for="sozlesme"><strong class="text-white">'ni okudum ve kabul ediyorum.</strong></label>

                                   </div>
                                   <div class="form-group row mb-0 ">
                                       <div class="col-md-6 offset-md-4">
                                           <button type="submit" class="btn btn-lg w-100 btn-outline-light text-secondary font-weight-bold">
                                               {{ __('Kaydol') }}
                                           </button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                   </form>
               </div>
           </div>
       </div>
   </div>
@endsection
    @section('js')
        <script>
            $(document).ready(function() {
                $(".number").keydown(function (e) {
                    //  backspace, delete, tab, escape, enter and vb tuşlara izin vermek için.
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                        //  Ctrl+A Tuş kobinasyonuna izin vermek için.
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        //  Ctrl+C Tuş kobinasyonuna izin vermek için.
                        (e.keyCode == 67 && e.ctrlKey === true) ||
                        //  Ctrl+X Tuş kobinasyonuna izin vermek için.
                        (e.keyCode == 88 && e.ctrlKey === true) ||
                        // home, end, left, right gibi tuşlara izin vermek için.
                        (e.keyCode >= 35 && e.keyCode <= 39)) {

                        return;
                    }
                    // Basılan Tuş takımının Sayısal bir değer taşıdığından emin olmak için.
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
            });
        </script>
@endsection

@extends('template')

@section('main')
<section id="section-about" class="section pad-bot30 bg-green-amoeba">
  <div class="container">
    <div class="row" style="margin-top:15px;margin-bottom:15px;">
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-2"></div>
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-8" style="margin-left: auto; margin-right: auto; background: #fff; padding: 15px; border-radius: 12px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="login-register-form-section col-sm-12">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
            <li><a href="#register" data-toggle="tab"><span style="text-color: grey;">Register<span></a></li>
            </ul>
            @if(Session::has('message'))
            <div class="alert {{ Session::get('alert') }} alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ Session::get('message') }}
            </div>
            @endif
            <div class="tab-content" style="padding-top: 15px;">
              <div role="tabpanel" class="tab-pane fade in active" id="login">
                <form class="form-horizontal" method="POST" action="{{ action('AuthController@login') }}">
                  @csrf
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="email" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password1') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <button type="submit" class="btn btn-primary btn-block" style="background-color:#0da857;border-radius: 8px;">
                      {{ __('Login') }}
                    </button>
                  </div>

                </form>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="register">
                <form class="form-horizontal" method="POST" action="{{ action('RegisterController@store') }}">
                  @csrf
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="name" type="text" placeholder="Nama lengkap" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="phone" type="text" placeholder="Nomer HP / WhatsApp" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
                    @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <label class="radio-inline" for="male">
                      <input type="radio" name="gender" id="male" value="male" checked>{{ __('Laki-Laki') }}
                    </label>
                    <label class="radio-inline" for="female">
                      <input type="radio" name="gender" id="female" value="female">{{ __('Perempuan') }}
                    </label>
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <textarea id="address" type="text" placeholder="Alamat Lengkap" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required ></textarea>
                    @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password1') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <input id="password-confirm" type="password" placeholder="Ketik Ulang Password" class="form-control" name="password_confirmation" required>
                  </div>
                  <div class="form-group" style="padding-left:15px;padding-right:15px;">
                    <button type="submit" class="btn btn-primary btn-block" style="background-color:#0da857;border-radius: 8px;">
                      {{ __('Register') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-2"></div>
      </div>
    </div>
  </section>
  @endsection

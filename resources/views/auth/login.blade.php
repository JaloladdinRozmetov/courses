@extends('page.layout')

@section('content')

    <!-- Page Title-->
    <div class="bg-dark page-title d-flex" aria-label="Page title" >
        <div class="container text-left align-self-center">
            <h1 class="page-title-heading text-white">Kirish / Ro'yxatdan o'tish</h1>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container mb-3">
        <div class="row">
            <div class="col-md-6 pb-5">
                <form class="needs-validation wizard" action="{{ route('login') }}" method="POST">
                    <div class="wizard-body pt-2">
                        <hr>
                        <h3 class="h5 pt-4 pb-2">Platformaga kirish</h3>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-mail"></i></span></div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="invalid-feedback">Email pochtangizni kiriting!</div>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="fe-icon-lock"></i></span></div>
                            <input id="password"  class="form-control @error('email') is-invalid @enderror" type="password" placeholder="Password" name="password" autocomplete="current-password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="invalid-feedback">Parolingizni kiriting!</div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" checked id="remember-me">
                                <label class="custom-control-label" for="remember-me">Eslab qol</label>
                            </div><a class="navi-link" href="{{route('password.request')}}">Parol unutdingmizmi?</a>
                        </div>
                    </div>
                    <div class="wizard-footer text-right">
                        <button class="btn btn-primary" type="submit">Kirish</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 pb-5">
                <h3 class="h4 pb-1">Ro'yxatdan o'tish</h3>
                <p>Ro'yxatdan o'tish shunchaki bir daqiqa vaqtingizni oladi xolos!.</p>
                <form class="needs-validation" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Ism</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">To'liq Ismingizni kiriting!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Pochta</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">Elektron pochtangizni kiriting!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Parol</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">Parolni kiriting!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password-confirm">Parolni tasdiqlang</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="invalid-feedback">Parol to'g'ri kelmayabdi!</div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

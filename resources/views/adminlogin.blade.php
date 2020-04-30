@extends('layouts.nav')
@section('title', 'Login')

<style>

    .form-control{
        box-shadow: none!important;
    }
    </style>
@section('content')


    <div class="row justify-content-center">
        <div class=" col-md-8 col-lg-6 offset-lg-0 mt-lg-5 ">
            <div class="card">
                <div class="card-header text-center ">{{ __('Login') }} As Admin</div>
                @include('layouts.msg')

                <div class="card-body">
                    <form method="POST" action="{{ route('loginadmin') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input name="phone" id="phone" type="" class="form-control value="{{ old('phone') }}" required autocomplete="phone" autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</div>
            </div>
        </div>
    </div>

{{-- </div> --}}
@endsection

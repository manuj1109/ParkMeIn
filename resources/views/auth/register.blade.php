@extends('layouts.app')

@section('head')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
    body
    {   
        background:url('/images/nmi.png') no-repeat center center;
        background-size: cover;
    }
    </style>


@endsection


@section('content')
<center>
    <div style="padding-left: 300px">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <br><br><br><br>
                 <p style="font-size: 40px; font-family: monospace; font-weight: bold;">REGISTER NOW!!</p>

                  <p style="font-size: 30px; font-family: monospace; font-weight: bold;color: red">_______________</p>
                    <br><br><br><br><br>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">SAP ID</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <br><br><br>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <br><br><center>
                                     <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                            
                                </button></center><br><br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div></center>
@endsection

@extends('layouts.app_login_register')

@section('content')
<div class="container">
    <div class="row">
        <div class="register-photo">
            <div class="form-container">
                <div class="image-holder"></div>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <h2 class="text-center"><strong>Login Admin</strong></h2>
                    <!---Email---->
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                    </div>
                    <!--Password--->
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Kata Sandi" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-4 form-group mt-2">
                        <button class="btn btn-success btn-block btn-info text-white" type="submit">Login</button>
                    </div>
                    <div class="form-group text-center pt-2">
                        <p>Selamat Datang di Login Admin!</p>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    
</div>
@endsection

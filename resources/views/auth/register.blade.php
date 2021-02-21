@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card">
            {{-- <div class="card-header">{{ __('Register') }}</div> --}}

        <div class="card-body p-4">
            <div class="text-center w-75 m-auto">
                <a href="/">
                    <span><img src="{{ asset('themes/Minton_green/assets/images/logo-dark.png') }}" alt="" height="22"></span>
                </a>
                <p class="text-muted mb-4 mt-3">Don't have an account? Create your own account, it takes less than a minute</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group ">
                    <label for="name">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="address">{{ __('Address') }}</label>

                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter your address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="password">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter your Confirm password" required autocomplete="new-password">
                </div>

                {{-- <div class="form-group">
                    <label for="q_ma">Role</label>
                    <select name="q_ma" id="q_ma" class="form-control">
                        <option value="">Please choose role</option>
                        @foreach($quyen as $quyen)
                            @if(old('q_ma') == $quyen->q_ma)
                                <option value="{{ $quyen->q_ma }}" selected>{{ $quyen->q_ten }}</option>
                            @else
                                <option value="{{ $quyen->q_ma }}">{{ $quyen->q_ten }}</option>
                            @endif
                        @endforeach
                    </select>
                </div> --}}

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                        <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                    </div>
                </div>
                <div class="form-group mb-0 text-center">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
            <div class="text-center">
                <h5 class="mt-3 text-muted">Sign up using</h5>
                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted font-weight-medium ml-1">Sign In</a></p>
        </div> <!-- end col -->
    </div>
</div>
</div>
@endsection

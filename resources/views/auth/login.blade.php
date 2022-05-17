@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                {{-- Email --}}

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
                        <div class="form-outline form-white mb-4">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <input id="email" type="email" placeholder="Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                        
                </div>
                {{-- Password --}}
                <div class="form-outline form-white mb-4">
                    <input id="password" placeholder="Password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    <label class="form-label" for="typePasswordX">Password</label>
                </div>
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                {{-- Remember Password --}}
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                <br>
                </div>
                <div class="text-center text-white-50"> 
                    <p>Remember Password</p>
                    <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                    </label>
                <div>
                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>
              
                </div>
            </div>
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
                
@endsection

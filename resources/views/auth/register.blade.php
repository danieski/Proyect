@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                {{-- Name --}}

                  <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-white-50 mb-5">Please enter your email and password!</p>
                        <div class="form-outline form-white mb-4">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input placeholder= "Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        
                </div>
                
                {{-- Email --}}
                <div class="form-outline form-white mb-4">
                    <input placeholder= "Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="form-outline form-white mb-4">
                    <input placeholder= "Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                
                {{--Password confirm --}}
                
                <div class="form-outline form-white mb-4">
                    <input placeholder= "Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <p class="mb-0">Do you have an account? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Login</a>
                </p>
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
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

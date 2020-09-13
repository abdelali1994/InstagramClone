@extends('layouts.authlayout')

@section('form')
{{-- <form method="POST" action="{{ route('login') }}">
    @csrf
				<img src="{{ asset('img/avatar.svg') }}">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
                    @error('email')
                    <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
                    @enderror
                              <h5>Email</h5>
                             

                                  <input type="text"  id="email" class=" wrap-input100 validate-input m-b-40 input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
                        
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
                    @error('password')
                    <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
                    @enderror
           		    	<h5>Password</h5>
           		    	<input type="password" id="password" class="input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form> --}}


   <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
        @csrf
        <span class="login100-form-title p-b-34">
            Account Login
        </span>


        @error('email')
            <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
        @enderror
        <div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
            <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
            <span class="focus-input100"></span>
        </div>

        @error('password')
            <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
        @enderror
        <div class="wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
        </div>

        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Sign in
            </button>
        </div>

        <div class="w-full text-center p-t-27 p-b-100">
            @if (Route::has('password.request'))
                <span class="txt1">
                    Forgot
                </span>

                <a href="{{ route('password.request') }}" class="txt2">
                    Username / password?
                </a>
            @endif
        </div>

        <div class="w-full text-center">
            <a href="{{ route('register') }}" class="txt3">
                Sign Up
            </a>
        </div>
    </form> 
@endsection
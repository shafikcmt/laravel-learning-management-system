@section('title','Admin Login')
@extends('layouts.masterauth')
@section('content')
<div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                            <img style="margin-top:-10px;" src="{{asset('images/fav.png')}}" alt="">

                            </div> Gportal Admin </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">LOGIN TO CONTINUE</p>
                        <form id="login-form" action="{{route('admin-login')}}" method="post" novalidate="">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                            @csrf
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email " value="{{old('email')}}"> 
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" value="{{old('password')}}"> 
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                <a href="/reset-password" class="forgot-btn pull-right">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                          
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
        @stop
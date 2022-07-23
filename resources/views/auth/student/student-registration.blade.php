<div>
    @extends('layouts.masterauth')
    @section('content')
    @section('title','Student Registration')
    <div class="auth" style="background:url({{asset('images/Website3.jpg')}}); background-size:cover;left:0%">
        <div class="auth-container" max-width="900px" style="left:25%">
            <div class="card">
                <header class="auth-header">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                    <h1 class="auth-title">
                        <div class="logo" style="color:#000">
                        <a href="/">
                            <img style="margin-top:-10px;" src="{{asset('images/fav.png')}}" alt="">
                            </a>

                        </div> Student Registration
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                    <form action="{{route('student-register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model="name" class="form-control underlined" name="name" id="name"
                                        placeholder="Enter name" value="{{old('name')}}">
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="roll">Roll</label>
                                    <input type="text" wire:model="roll" value="{{old('roll')}}" class="form-control underlined" name="roll" id="roll"
                                        placeholder="Enter Roll"> 
                                        <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="class">Class</label>
                                    <input type="text" wire:model="class" class="form-control underlined" name="class" id="firstname"
                                        placeholder="Enter firstname" value="{{old('class')}}">
                                        <span class="text-danger">@error('class') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="branch">Branch</label>
                                    <input type="text" wire:model="branch" class="form-control underlined" name="branch" id="branch"
                                        placeholder="Enter branch" value="{{old('branch')}}"> </div>
                                        <span class="text-danger">@error('branch') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="semester">Semester</label>
                                    <input wire:model="semester" type="text" class="form-control underlined" name="semester" id="semester"
                                        placeholder="Enter semester" value="{{old('semester')}}">
                                        <span class="text-danger">@error('semester') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="mobile">Mobile</label>
                                    <input wire:model="mobile" type="text" class="form-control underlined" name="mobile" id="mobile"
                                        placeholder="Enter mobile" value="{{old('mobile')}}"> </div>
                                        <span class="text-danger">@error('mobile') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" class="form-control underlined" name="email" id="email"
                                placeholder="Enter email address" value="{{old('email')}}"> </div>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="password" wire:model="password" class="form-control underlined" name="password" id="password"
                                        placeholder="Enter password" value="{{old('password')}}">
                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <input type="password" wire:model="re_password" class="form-control underlined" name="retype_password"
                                        id="retype_password" placeholder="Re-type password">
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" wire:click="StudentRegistration()" class="btn btn-block btn-primary">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Already have an account?
                                <a style="color:#000" href="/student-login">Login!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@stop

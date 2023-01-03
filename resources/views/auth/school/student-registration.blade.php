<div>
    @extends('layouts.masterauth')
    @section('title','Student Registration')
    @section('content')

    <div class="auth" style="background:url({{asset('images/Website3.jpg')}}); background-size:cover;left:0%">
        <div class="auth-container auth-regi" max-width="900px" style="left:25%">
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

                        </div> <span class="text-dark">Student Registration</span>
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                    <form action="{{route('school-student-register')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control underlined" name="name"
                                        id="name" placeholder="Enter name" value="{{old('name')}}">
                                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                </div>
                               
                            </div> 
                        </div>
                        <div class="form-group">
                            <div class="row">
                           <div class="col-sm-12">
                                    <label for="contact_num">Contact Number</label>
                                    <input type="text" value="{{old('contact_num')}}"
                                        class="form-control underlined" name="contact_num" id="contact_num" placeholder="Enter Contact Number">
                                    <span class="text-danger">@error('contact_num') {{$message}} @enderror</span>
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                            <div class="col-sm-12">
                             <label for="school_name">School Name</label>
                                    <input type="text" class="form-control underlined"
                                        name="school_name" id="school_name" placeholder="Enter School Name"
                                        value="{{old('school_name')}}">
                                    <span class="text-danger">@error('school_name') {{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="row">
                            <div class="col-sm-12">
                                    <label for="roll">Email</label>
                                    <input type="email" value="{{old('email')}}"
                                        class="form-control underlined" name="email" id="email" placeholder="Enter Email">
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-sm-12">
                             <label for="password">Password</label>
                                    <input type="password" class="form-control underlined"
                                        name="password" id="password" placeholder="Enter password"
                                        value="{{old('password')}}">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" 
                                class="btn btn-block btn-primary">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Already have an account?
                                <a style="color:#000" href="/school-student-login">Login!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@stop

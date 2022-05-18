<div>
    @section('title','Student Registration')
    <div class="auth">
        <div class="auth-container" max-width="900px">
            <div class="card">
                <header class="auth-header">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
                    <h1 class="auth-title">
                        <div class="logo">
                            <span class="l l1"></span>
                            <span class="l l2"></span>
                            <span class="l l3"></span>
                            <span class="l l4"></span>
                            <span class="l l5"></span>
                        </div> Student Registration
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                    <form>
                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model="name" class="form-control underlined" name="name" id="name"
                                        placeholder="Enter name" required="">
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="roll">Roll</label>
                                    <input type="text" wire:model="roll" class="form-control underlined" name="roll" id="roll"
                                        placeholder="Enter Roll" required=""> 
                                        <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="class">Class</label>
                                    <input type="text" wire:model="class" class="form-control underlined" name="class" id="firstname"
                                        placeholder="Enter firstname" required="">
                                        <span class="text-danger">@error('class') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="branch">Branch</label>
                                    <input type="text" wire:model="branch" class="form-control underlined" name="branch" id="branch"
                                        placeholder="Enter branch" required=""> </div>
                                        <span class="text-danger">@error('branch') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="semester">Semester</label>
                                    <input wire:model="semester" type="text" class="form-control underlined" name="semester" id="semester"
                                        placeholder="Enter semester" required="">
                                        <span class="text-danger">@error('semester') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="mobile">Mobile</label>
                                    <input wire:model="mobile" type="text" class="form-control underlined" name="mobile" id="mobile"
                                        placeholder="Enter mobile" required=""> </div>
                                        <span class="text-danger">@error('mobile') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" class="form-control underlined" name="email" id="email"
                                placeholder="Enter email address" required=""> </div>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="password" wire:model="password" class="form-control underlined" name="password" id="password"
                                        placeholder="Enter password" required="">
                                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <input type="password" wire:model="re_password" class="form-control underlined" name="retype_password"
                                        id="retype_password" placeholder="Re-type password" required="">
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" wire:click="StudentRegistration()" class="btn btn-block btn-primary">Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-center">Already have an account?
                                <a href="/student-login">Login!</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

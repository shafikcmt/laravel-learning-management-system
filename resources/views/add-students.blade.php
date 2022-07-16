        
        @extends('layouts.admin-master')
        @section('title', 'Add Students')
        @section('content')
      
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 style="background:#F6A94F;" class="title well p-2">Add Students <a class="btn btn-info" href="/all-student">Back</a></h1>
                <p class="title-description"> </p>
            </div>
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                    <form role="form" method="post" action="{{route('student-add')}}">
                                        @if(session()->has('add-student'))
                                            <div class="alert alert-success" id="alertMessage">
                                            {{session()->get('add-student')}}
                                            </div>
                                        @endif
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class="col-form-label">Name <span style="color:red">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class=" col-form-label">Roll <span style="color:red">*</span></label>
                                                <input type="text" name="roll" class="form-control" placeholder="Roll">
                                                <span class="text-danger">@error('roll'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class="col-form-label">Class<span style="color:red">*</span></label>
                                                <input type="text" name="class" class="form-control" placeholder="Class">
                                                <span class="text-danger">@error('class'){{$message}}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class="col-form-label">Branch<span style="color:red">*</span></label>
                                                <input type="text" name="branch" class="form-control" placeholder="Branch">
                                                <span class="text-danger">@error('branch'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class=" col-form-label">Semester <span style="color:red">*</span></label>
                                                <input type="text" name="semester" class="form-control" id="colFormLabel" placeholder="Semester">
                                                <span class="text-danger">@error('semester'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class=" col-form-label">Mobile </label>
                                                <input type="text" name="mobile" class="form-control" id="colFormLabel" placeholder="Mobile">
                                                <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class="col-form-label">Email<span style="color:red">*</span></label>
                                                <input type="email" name="email" class="form-control" placeholder="Branch">
                                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="colFormLabel" class=" col-form-label">Password <span style="color:red">*</span></label>
                                                <input type="password" name="password" class="form-control" id="colFormLabel" placeholder="password">
                                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                            </div>
                                          
                                            <!-- <div class="col-sm-4">
                                                <label for="colFormLabel" class=" col-form-label">Re-Password </label>
                                                <input type="text" name="re-password" class="form-control" id="colFormLabel" placeholder="Re-Password">
                                            </div> -->
                                    </div>
                                        <center>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Save</button>

                                            </div>
                                        </center>

                                    </form>
                                </div>
                            </div>
                        </div>
                    
                    </section>
        </article>
    </div>
</div>

@stop
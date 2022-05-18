<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Students')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Students <a class="btn btn-info" href="/all-student">All Students</a></h1>
                <p class="title-description"> </p>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form" wire:submit.prevent="AddStudent">
                                @if(session()->has('message'))
                                    <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('message')}}
                                    </div>
                                @endif
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Name <span style="color:red">*</span></label>
                                        <input type="text" wire:model="name" class="form-control" placeholder="Name">
                                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Roll <span style="color:red">*</span></label>
                                        <input type="text" wire:model="roll" class="form-control" placeholder="Roll">
                                        <span class="text-danger">@error('roll'){{$message}}@enderror</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Class<span style="color:red">*</span></label>
                                        <input type="text" wire:model="class" class="form-control" placeholder="Class">
                                        <span class="text-danger">@error('class'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Branch<span style="color:red">*</span></label>
                                        <input type="text" wire:model="branch" class="form-control" placeholder="Branch">
                                        <span class="text-danger">@error('branch'){{$message}}@enderror</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Semester <span style="color:red">*</span></label>
                                        <input type="text" wire:model="semester" class="form-control" id="colFormLabel" placeholder="Semester">
                                        <span class="text-danger">@error('semester'){{$message}}@enderror</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Mobile </label>
                                        <input type="text" wire:model="mobile" class="form-control" id="colFormLabel" placeholder="Mobile">
                                        <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Email<span style="color:red">*</span></label>
                                        <input type="email" wire:model="email" class="form-control" placeholder="Branch">
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Password <span style="color:red">*</span></label>
                                        <input type="password" wire:model="password" class="form-control" id="colFormLabel" placeholder="password">
                                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                    </div>
                                    <!--
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Re-Password </label>
                                        <input type="text" wire:model="re-password" class="form-control" id="colFormLabel" placeholder="Re-Password">
                                    </div>
-->                                </div>
                                <center>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>

                                    </div>
                                </center>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <div class="import-students">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Import Students</label>
                                    <input class="form-control" type="file" id="formFile">
                                    <center class="mt-3">
                                        <input class="btn btn-oval btn-primary" type="submit" value="submit">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
</div>

@include('includes.footer')
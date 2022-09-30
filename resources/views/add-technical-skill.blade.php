@extends('layouts.master')
@section('title','Technical Skills')
@section('content')
<article class="content dashboard-page">
    <section class="section">
        <div class="title-block">
            <h1 class="title well p-2 bg-orange text-white"> Technical Skills</h1>
        </div>
        <div class="row sameheight-container ">
            <div class="col-md-12">
                <div class="card sameheight-item shadow-lg p-3 bg-white" data-exclude="xs,sm">
                    <div class="title-block">
                        <h1 class="title well p-2 bg-orange text-white"> {{$techskills->name}}  <a
                                href="/technical-skill"><button class="btnhead">Back</button> </a> </h1>
                    </div>
                    <div class="card-block">
                    <form class="col-sm-offset-1" role="form" method="post" action="{{route('student-add')}}">
                                       
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label for="colFormLabel" class="col-form-label">Course <span style="color:red">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Course">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="colFormLabel" class=" col-form-label">Instructor Name <span style="color:red">*</span></label>
                                                <input type="text" name="roll" class="form-control" placeholder="Instructor Name">
                                                <span class="text-danger">@error('roll'){{$message}}@enderror</span>
                                            </div>
                                           
                                        </div>
                                        <div class="row mb-3">
                                        <div class="col-sm-6">
                                                <label for="colFormLabel" class="col-form-label">From<span style="color:red">*</span></label>
                                                <input type="date" name="class" class="form-control" placeholder="From">
                                                <span class="text-danger">@error('class'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="colFormLabel" class="col-form-label">To<span style="color:red">*</span></label>
                                                <input type="date" name="branch" class="form-control" placeholder="To">
                                                <span class="text-danger">@error('branch'){{$message}}@enderror</span>
                                            </div>
                                           
                                        </div>

                                        <div class="row mb-3">
                                        <div class="col-sm-6">
                                                <label for="colFormLabel" class=" col-form-label">Organiged By <span style="color:red">*</span></label>
                                                <input type="text" name="semester" class="form-control" id="colFormLabel" placeholder="Organiged By">
                                                <span class="text-danger">@error('semester'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="colFormLabel" class=" col-form-label">Learning Type </label>
                                               <select name="" id="" class="form-control">
                                                    <option selected>Select</option>
                                                    <option value="Offline">Offline</option>
                                                    <option value="Online">Online</option>
                                               </select>
                                                <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
                                            </div>
                                           
                                          
                                           
                                    </div>
                                    <div class="row mb-6">
                                    <div class="col-sm-6">
                                                <label for="colFormLabel" class="col-form-label">Certificate ID<span style="color:red">*</span></label>
                                                <input type="email" name="email" class="form-control" placeholder="Certificate ID">
                                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="colFormLabel" class=" col-form-label">Type of Campus <span style="color:red">*</span></label>
                                                <select name="" id="" class="form-control">
                                                    <option selected>Select</option>
                                                    <option value="Instructor Led">In House</option>
                                                    <option value="In House">Outside</option>
                                               </select>
                                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                            </div>
                                    </div>
                                        <center>
                                            <div class="form-group mt-5">
                                                <button type="submit" class="cssbuttons-io"><span>Add</span> </button>

                                            </div>
                                        </center>

                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

<div class="modal fade" id="modal-media">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Media Library</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body modal-tab-container">
                <ul class="nav nav-tabs modal-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                    </li>
                </ul>
                <div class="tab-content modal-tab-content">
                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                        <div class="images-container">
                            <div class="row"> </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                        <div class="upload-container">
                            <div id="dropzone">
                                <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data"
                                    class="dropzone needsclick dz-clickable" id="demo-upload">
                                    <div class="dz-message-block">
                                        <div class="dz-message needsclick"> Drop files here or click to upload.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Insert Selected</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="confirm-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fa fa-warning"></i> Alert
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to do this?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
@stop

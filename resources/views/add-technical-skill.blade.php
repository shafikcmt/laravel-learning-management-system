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
                        <h1 class="title well p-2 bg-orange text-white"> {{$techskills->name}} <a
                                href="/technical-skill/{{$techskills->id}}"><button class="btnhead">Back</button> </a>
                        </h1>
                    </div>
                    <div class="card-block">
                        @if($techskills->name == 'Trainings')
                        <!-- Training Form Start -->
                        @if(session()->has('add-training'))
                        <div class="alert alert-success" id="alertMessage">
                            {{session()->get('add-training')}}
                        </div>
                        @endif
                        <form class="col-sm-offset-1" role="form" method="post" action="{{route('add-training')}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Course <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="course" class="form-control" placeholder="Course">
                                    <span class="text-danger">@error('course') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Event <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="event" class="form-control" placeholder="Event">
                                    <span class="text-danger">@error('event'){{$message}}@enderror</span>
                                </div>
                               
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">From<span
                                            style="color:red">*</span></label>
                                    <input type="date" name="from" class="form-control" placeholder="From">
                                    <span class="text-danger">@error('from'){{$message}}@enderror</span>
                                </div>
                               
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">To<span
                                            style="color:red">*</span></label>
                                    <input type="date" name="to" class="form-control" placeholder="To">
                                    <span class="text-danger">@error('to'){{$message}}@enderror</span>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Organiged By <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="organiged_by" class="form-control" id="colFormLabel"
                                        placeholder="Organiged By">
                                    <span class="text-danger">@error('organiged_by'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Learning Type </label>
                                    <select name="learning_type" id="" class="form-control">
                                        <option selected>Select</option>
                                        <option value="Offline">Offline</option>
                                        <option value="Online">Online</option>
                                    </select>
                                    <span class="text-danger">@error('learning_type'){{$message}}@enderror</span>
                                </div>



                            </div>
                            <div class="row mb-6">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Certificate ID<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="certificate_id" class="form-control" placeholder="Certificate ID">
                                    <span class="text-danger">@error('certificate_id'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Type of Campus <span
                                            style="color:red">*</span></label>
                                    <select name="type_of_campus" id="" class="form-control">
                                        <option selected>Select</option>
                                        <option value="In House">In House</option>
                                        <option value="Outside">Outside</option>
                                    </select>
                                    <span class="text-danger">@error('type_of_campus'){{$message}}@enderror</span>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Course Completion<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="course_completion" class="form-control" placeholder="Course Completion">
                                    <span class="text-danger">@error('course_completion'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Place <span
                                            style="color:red">*</span></label>
                                   <input type="text" name="place" placeholder="Place" class="form-control">
                                    <span class="text-danger">@error('place'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-6">
                            <div class="col-sm-12">
                                    <label for="colFormLabel" class=" col-form-label">Instructor Name <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name">
                                    <span class="text-danger">@error('instructor_name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <center>
                                <div class="form-group mt-5">
                                    <button type="submit" class="cssbuttons-io"><span>Add</span> </button>

                                </div>
                            </center>

                        </form>
                        <!-- Training form end -->
                        @elseif($techskills->name == 'Certifications')
                        <!-- Add certifications Start -->
                        @if(session()->has('add-certificate'))
                        <div class="alert alert-success" id="alertMessage">
                            {{session()->get('add-certificate')}}
                        </div>
                        @endif
                        <form class="col-sm-offset-1" role="form" method="post" action="{{route('add-certificate')}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Certificate name <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="certificate_name" class="form-control" placeholder="Certificate Name">
                                    <span class="text-danger">@error('certificate_name') {{$message}} @enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Certificate Form <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="certificate_from" class="form-control" placeholder="Certificate From">
                                    <span class="text-danger">@error('certificate_from'){{$message}}@enderror</span>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Instructor Name<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name">
                                    <span class="text-danger">@error('instructor_name'){{$message}}@enderror</span>
                                </div>
                               
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Score<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="score" class="form-control" placeholder="Score">
                                    <span class="text-danger">@error('score'){{$message}}@enderror</span>
                                </div>

                               
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Test center Name <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="test_center_name" class="form-control" id="colFormLabel"
                                        placeholder="Test Center Name">
                                    <span class="text-danger">@error('test_center_name'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Year of Pass<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="year_of_pass" class="form-control" placeholder="Year of Pass">
                                    <span class="text-danger">@error('year_of_pass'){{$message}}@enderror</span>
                                </div>
                                



                            </div>
                            <div class="row mb-6">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Certificate ID<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="certificate_id" class="form-control" placeholder="Certificate ID">
                                    <span class="text-danger">@error('certificate_id'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Type of Campus <span
                                            style="color:red">*</span></label>
                                    <select name="type_of_campus" id="" class="form-control">
                                        <option selected>Select</option>
                                        <option value="In House">In House</option>
                                        <option value="Outside">Outside</option>
                                    </select>
                                    <span class="text-danger">@error('type_of_campus'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <center>
                                <div class="form-group mt-5">
                                    <button type="submit" class="cssbuttons-io"><span>Add</span> </button>

                                </div>
                            </center>

                        </form>
                    <!-- Certifications end -->
                    @elseif($techskills->name == 'Hackathon')
                    <!-- Hackathon form start -->
                    @if(session()->has('add-hackathon'))
                        <div class="alert alert-success" id="alertMessage">
                            {{session()->get('add-hackathon')}}
                        </div>
                    @endif
                        <form class="col-sm-offset-1" role="form" method="post" action="{{route('add-hackathon')}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Course<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="course" class="form-control" placeholder="Course">
                                    <span class="text-danger">@error('course') {{$message}} @enderror</span>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Instructor Name <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="instructor_name" class="form-control" placeholder="Instructor Name">
                                    <span class="text-danger">@error('instructor_name'){{$message}}@enderror</span>
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">From<span
                                            style="color:red">*</span></label>
                                    <input type="date" name="from" class="form-control" placeholder="From">
                                    <span class="text-danger">@error('from'){{$message}}@enderror</span>
                                </div>
                               
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">To<span
                                            style="color:red">*</span></label>
                                    <input type="date" name="to" class="form-control" placeholder="To">
                                    <span class="text-danger">@error('to'){{$message}}@enderror</span>
                                </div>

                               
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Organiged By <span
                                            style="color:red">*</span></label>
                                    <input type="text" name="organiged_by" class="form-control" id="colFormLabel"
                                        placeholder="Organiged By">
                                    <span class="text-danger">@error('organiged_by'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Learning Type </label>
                                    <select name="learning_type" id="" class="form-control">
                                        <option selected>Select</option>
                                        <option value="Offline">Offline</option>
                                        <option value="Online">Online</option>
                                    </select>
                                    <span class="text-danger">@error('learning_type'){{$message}}@enderror</span>
                                </div>



                            </div>
                            <div class="row mb-6">
                            <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Event<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="event" class="form-control" placeholder="Event">
                                    <span class="text-danger">@error('event'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Total Hours<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="total_hours" class="form-control" placeholder="Total Hourse">
                                    <span class="text-danger">@error('total_hours'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class="col-form-label">Certificate ID<span
                                            style="color:red">*</span></label>
                                    <input type="text" name="certificate_id" class="form-control" placeholder="Certificate ID">
                                    <span class="text-danger">@error('certificate_id'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-6">
                                    <label for="colFormLabel" class=" col-form-label">Type of Campus <span
                                            style="color:red">*</span></label>
                                    <select name="type_of_campus" id="" class="form-control">
                                        <option selected>Select</option>
                                        <option value="In House">In House</option>
                                        <option value="Outside">Outside</option>
                                    </select>
                                    <span class="text-danger">@error('type_of_campus'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <center>
                                <div class="form-group mt-5">
                                    <button type="submit" class="cssbuttons-io"><span>Add</span> </button>
                                </div>
                            </center>

                        </form>

                        <!-- Hackathon form end -->
                        @endif


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

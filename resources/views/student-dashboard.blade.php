    @extends('layouts.master')
    @section('title','Student Dashboard')
    @section('content')
    <article class="content dashboard-page">
        <div class="title-block">
            <h1 class="title well p-3"> {{$data->name}} {{$data->roll}} </h1>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="title-block">
                        <h1 class="title well p-3"> Available Course </h1>
                    </div>
                    <div class="owl-carousel owl-theme">
                        @foreach($courses as $course)
                        <div class="item">
                            <div class="card card-default">
                                <div class="card-header">
                                    <div class="header-block">
                                        <p class="title">{{$course->category_name}} </p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <img height="100px" width="100%" src="{{asset('images')}}/{{$course->image}}" alt="">
                                </div>
                                <div class="card-footer">
                                    <h3>{{$course->name}}</h3>
                                    <center>
                                        <a href="/course-view/{{$course->id}}" class="btn btn-primary stretched-link">View Course</a>

                                    </center>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

            </div>

            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="title-block">
                        <h1 class="title well p-3"> All Courses </h1>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">

                        <table class="table table-striped table-bordered table-hover">
                                <thead style="background:#F6A94F">
                                    <tr>
                                        <th>Course Category</th>
                                        <th>Course Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($courses as $course)
                                <tbody>
                                    <tr>
                                        <td>{{$course->category_name}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>
                                        <img height="50px" width="50px" src="{{asset('images')}}/{{$course->image}}" alt="">
                                        </td>
                                        <td>
                                            <a href="/course-view/{{$course->id}}" class="btn btn-primary stretched-link">View Course</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
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
                                    <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
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
<div class="main-wrapper">
    <div class="app" id="app">
        @section('title','Admin Dashboard')
        @extends('layouts.admin-master')
        @section('content')
        @extends('includes.admin-sidebar')

        <article class="content dashboard-page">

            <section class="section map-tasks">
                <div class="row sameheight-container">
                    <div class="col-xl-3 ">
                        <div class="card card-default bg-success bg-gradient">
                            <!-- <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> Default card </p>
                                    </div>
                                </div> -->
                            <div class="card-block">
                                <h1>{{$students->count()}}</h1>
                                <h4>Students</h4>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card card-default bg-info bg-gradient">
                            <!-- <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> Default card </p>
                                    </div>
                                </div> -->
                            <div class="card-block">
                                <h1>{{$questions->count()}}</h1>
                                <h4>Questions</h4>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card card-default bg-success bg-gradient">
                            <!-- <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> Default card </p>
                                    </div>
                                </div> -->
                            <div class="card-block">
                                <h1>220</h1>
                                <h4>Quizzes</h4>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card card-default bg-info bg-gradient">
                            <!-- <div class="card-header">
                                    <div class="header-block">
                                        <p class="title"> Default card </p>
                                    </div>
                                </div> -->
                            <div class="card-block">
                                <h1>220</h1>
                                <h4>Attempts</h4>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card sameheight-item" data-exclude="xs,sm">
                            <div class="card-header">
                                <div class="header-block">
                                    <h3 class="title"> Available Course </h3>
                                </div>
                            </div>
                            <div class="card-block">
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
                                        <img src="{{asset('images')}}/{{$course->image}}" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>{{$course->name}}</h3>
                                       <center><a href="#" class="btn btn-primary stretched-link">View Course</a></center> 

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
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
                                        <form action="https://modularcode.io/" method="POST"
                                            enctype="multipart/form-data" class="dropzone needsclick dz-clickable"
                                            id="demo-upload">
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
                            <i class="fa fa-warning"></i> Alert</h4>
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
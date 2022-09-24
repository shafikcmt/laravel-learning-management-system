    @extends('layouts.master')
    @section('title','Assessment Work')
    @section('content')
    <article class="content dashboard-page">
        <div class="title-block">
            <h1 class="title well p-2 bg-orange text-uppercase"> Assessment Works </h1>
        </div>
    <section class="section">
         <div class="row sameheight-container ">
            <div class="col-md-12">
                <div class="card sameheight-item shadow-lg p-3 bg-white" data-exclude="xs,sm">
                   <div class="card-block">
                       <div class="row">
                            <div class="col-xl-3 ">
                                <div class="card card-default bg-blue">
                                    
                                    <a href="/assessments" class="card-block" style="text-decoration:none">
                                        <h1>{{$drive->count()}}</h1>
                                        <h4>Drive Skills</h4>
                                    </a>

                                </div>
                            </div>
                            <!-- <div class="col-xl-3 ">
                                <div class="card card-default bg-orange">
                                    
                                    <a href="#" class="card-block" style="text-decoration:none">
                                        <h1>00</h1>
                                        <h4>CRT Attendance</h4>
                                    </a>

                                </div>
                            </div> -->
                            <!-- <div class="col-xl-3 ">
                                <div class="card card-default bg-blue">
                                    
                                    <a href="#" class="card-block" style="text-decoration:none">
                                        <h1>00</h1>
                                        <h4>Mock Interviews</h4>
                                    </a>

                                </div>
                            </div> -->
                            
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
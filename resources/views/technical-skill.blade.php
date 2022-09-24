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
                        <h1 class="title well p-2 bg-orange text-white"> Workshops <a
                                href="/add-technical-skill"><button class="btnhead">Add</button> </a> <a
                                href="/technical-work"><button class="btnhead">Back</button> </a> </h1>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover text-dark">
                                <thead>
                                   
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Course</th>
                                        <th>Instructor</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Organiged By</th>
                                        <th>Type</th>
                                        <th>Certificate ID</th>
                                        <th>Type of Campus</th>
                                        <th>Request Status</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Web Development</td>
                                        <td>Shafiqul</td>
                                        <td>01-01-2022</td>
                                        <td>01-01-2022</td>
                                        <td>GEC</td>
                                        <td>Online</td>
                                        <td>A0148</td>
                                        <td>In House</td>
                                        <td>Pending</td>
                                    </tr>
                                </tbody>
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

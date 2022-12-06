    @extends('layouts.master')
    @section('title','Student Dashboard')
    @section('content')
    <article class="content dashboard-page">
        <div class="title-block">
            <h1 class="text-dark">Your Progress</h1>
            <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated rounded"  style="width:10%">10%</div> 

            </div>
        </div>
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-md-12">
                    <div class="card sameheight-item">
                        <div class="card-body">
                        <table valign="middle" class="table table-striped table-bordered table_timeline">
                       @foreach($courses as $course)
                        <tr>
                            <th width="15%">{{$course->name}}</th>
                            <th width="10%"><span><i class="fa-solid fa-check"></i></span></th>
                            <th width="15%">Apptitude</th>
                            <th width="10%"><span><i class="fa-solid fa-check"></i></span></th>
                            <th width="15%">Technical</th>
                            <th width="10%"><span><i class="fa-solid fa-check"></i></span></th>
                            <th width="15%">Reasoning</th>
                            <th width="10%"><span><i class="fa-solid fa-check"></i></span></th>
                        </tr>
                        @endforeach
                        </table>
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
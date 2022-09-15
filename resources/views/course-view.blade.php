    @extends('layouts.master')
    @section('title','Course View')
    @section('content')
    <style>
        ul .list_img {

            margin: 0;
            padding: 6px 0px 6px 35px;
            list-style: none;
            background-image: url("http://127.0.0.1:8000/images/list.png");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: 27px;
            font-size: 18px;
        }
 
        ul .list_img a {
            text-decoration: none;
            color: #3C96B4;

        }
    </style>
    <article class="content dashboard-page">

        <div class="title-block">
            <h1 class="title well p-2 bg-orange"> {{$courses->name}} <a href="/drive-skills"><button class="btnhead">Back</button></a>
            </h1>
        </div> 
        <section class="section">
            <div class="row sameheight-container">

                <div class="col-md-12">
                    @if(session()->has('already_attemp'))
                    <div class="alert alert-danger">
                        {{session()->get('already_attemp')}}
                    </div>
                    @endif
                    <table class="table table-striped">
                        <tr>
                            @foreach($qcategories as $qcategory)
                            <div class=" shadow-sm p-3 mb-2 bg-white rounded">

                                <h3 style="padding:12px;" class="h6 text-white bg-orange">{{$qcategory->category_name}}</h3>
                                <ul class="">
                                   @if(count($qcategory->qtopic))
                                    @foreach($qcategory->qtopic as $qtopic)
                                    <li class="list_img"><a href="/start-quiz/{{$qtopic->id}}">{{$qtopic->topic_name}}</a>
                                    </li>
                                    @endforeach
                                    @else
                                    <p class="text-center pt-2">Quiz not Found !</p>
                                    @endif
                                </ul>
                            </div>
                            @endforeach
                        </tr> 
                    </table>
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
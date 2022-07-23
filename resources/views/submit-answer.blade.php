@extends('layouts.master')
@section('title', 'Questions')
@section('content')
<script>
    function quizStart() {
        var msg = "Are you ready for test !";
        alert(msg);
    }

</script>
<style>
    #grad-score {
        background-image: linear-gradient(to right top, #233873, #763a82, #b93775, #e54c52, #f07d1e);
    }

    #grad-per {
        background-image: linear-gradient(to right top, #233873, #763a82, #b93775, #e54c52, #f07d1e);

    }

</style>
<article class="content dashboard-page">
    <div class="title-block">
        <h1 class="title well p-3"><span class="text-success">Completed</span> <a class="btn btn-primary pull-right"
                href="/student-dashboard">Finish</a></h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="title-block">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h2 class="text-uppercase text-info"> Result's </h2>

                            </div>
                            <div class="row">
                                <div class="col-md-6 float-left">
                                    <?php $i=1; ?>
                                    @foreach($results as $result)
                                    <h4>Question :<?php echo $i; ?></h4>
                                    @if($result->answer == $result->qanswer)
                                    <p>Your Answer is Correct: <span style="color:green;">{{$result->answer}}</span></p>
                                    @else
                                    <p>Your Answer is Wrong: <span style="color:red;">{{$result->answer}}</span></p>
                                    @endif
                                    @if($result->answer == $result->qanswer)
                                    @else       
                                    <p> Correct Answer is :{{$result->qanswer}}</p>
                                    @endif
                                    <?php $i++; ?>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        
                                        <div id="grad-score" class="col-md-5 bg-primary p-3 text-light"
                                            style="line-height:5px">
                                            <h4>Score</h4><br>
                                            <h4 class="text-right text-light">{{$correct}}/{{$results->count()}}</h4>
                                        </div>
                                        <div id="grad-per" class="col-md-5 bg-primary p-3 text-light ml-2"
                                            style="line-height:5px">
                                            <h4>Perchantage</h4><br>
                                            <h4 class="text-right text-light">
                                                {{round($correct/$results->count() * 100)}} %</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

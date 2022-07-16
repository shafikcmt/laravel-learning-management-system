    @extends('layouts.master')
    @section('title', 'Questions')
    @section('content')
      <script>
         function examComplete(){
            alert('Thank You');
        }
      </script>
        <article class="content dashboard-page">

            <div class="title-block">
                <h1 class="title well p-3">Quiz for {{$qtopic->topic_name}} </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-8">
                        <div class="title-block">
                        <h1 class="title well p-3"> 
                            @if(session()->has('add-answer')) 
                            <div class="alert alert-success">
                                {{session()->get('add-answer')}}
                            </div>  
                            @endif 
                        </h1>
                        </div>
                       
                        <form action="{{route('submit-answer')}}" method="POST">
                            @csrf
                            <input type="hidden" name="topic_id" value="{{$qtopic->id}}">
                            <input type="hidden" name="topic_name" value="{{$qtopic->topic_name}}">
                            <div class="form-group">
                                <?php $i=1; ?>
                                @foreach($questions as $question)
                                <label for="question">  <h4>#<?php echo $i; ?>.{{$question->question}}</h4></label>
                                <input type="hidden" name="student_name" value="{{$data->name}}">
                                <input type="hidden" name="student_id" value="{{$data->id}}">
                                <input type="hidden" name="student_roll" value="{{$data->roll}}">
                                <input type="hidden" name="student_class" value="{{$data->class}}">
                                <input type="hidden" name="student_branch" value="{{$data->branch}}">
                                <input type="hidden" name="student_semester" value="{{$data->semester}}">
                                <input type="hidden" name="student_mobile" value="{{$data->mobile}}">
                                <input type="hidden" name="student_email" value="{{$data->email}}">
                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <p><input type="radio" required name="answer[{{$question->id}}]" value="{{$question->option3}}">  {{$question->option3}}</p>
                                <p><input type="radio" required name="answer[{{$question->id}}]" value="{{$question->option1}}">  {{$question->option1}}</p>
                                <p><input type="radio" required name="answer[{{$question->id}}]" value="{{$question->option2}}">  {{$question->option2}}</p>
                                <p><input type="radio" required name="answer[{{$question->id}}]" value="{{$question->option4}}">  {{$question->option4}}</p>
                                <input type="hidden" name="qanswer" value="{{$question->answer}}">
                               
                                <?php $i++; ?>
                                @endforeach                      
                            </div>
                       
                    <!-- <a type="submit" class="btn btn-primary pull-right">Next</a> -->
                    <button class="btn btn-primary pull-right mr-5 mr-5" type="submit">Next</button>
                        </form> 
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

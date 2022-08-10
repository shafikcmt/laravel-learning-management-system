        @extends('layouts.admin-master')
        @section('title', 'Questions Bulk Import')
        @section('content')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange">Questions Bulk Import <a class="btn btn-primary" href="/questions-bank">Questions List</a></h1>
            </div>
            <div class="row mb-3">
                    <div class="col-md-3 ">
                        <h4>Bulk Import</h4>
                    </div>
                    <div class="col-md-3 offset-md-6">
                        <a href="/demo-download" class=" pull-right rounded"> <button class="buttonDownload">Sample Downloads</button> </a>
                    </div>
                </div>
            <section class="section">
                <div class="row sameheight-container rounded">
                    <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                @foreach($errors->all() as $error)
                                {{ $error }} <br>
                                @endforeach      
                            </div>
                            </div>
                        </div>
                    @endif
                    @if(session()->has('bulk-question'))
                    <div class="alert alert-success" id="alertMessage">
                        {{session()->get('bulk-question')}}
                    </div>
                    @endif
                        <div class="card card-block sameheight-item">
                        <ol class="p-3">
                            <li> You need to import Excel/CSV File. For sample you can download by clicking <b><a style="text-decoration:none" href="/demo-download"> Sample Downloads</a></b></li>
                            <li> Make sure input correct answer in right column.</li>
                        </ol>
                        
                            <form role="form" action="{{route('bulk-question')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="topic_id">Quiz Name</label>
                                        <select name="qtopic_id" id="" class="form-control">
                                            <option selected >Select Quiz</option>
                                        @foreach($qtopics as $qtopic)
                                            <option value="{{$qtopic->id}}">{{$qtopic->topic_name}}</option>
                                        @endforeach
                                        </select>
                                        <div class="text-danger">@error('topic_name') {{$message}} @enderror</div>

                                    </div>
                                        <div class="form-group">
                                        <label for="colFormLabel" class=" col-form-label">Excell/CSV File <span style="color:red">*</span></label>
                                        <input type="file" name="file" class="form-control" id="colFormLabel" placeholder="">
                                        <div class="text-danger">@error('file') {{$message}} @enderror</div>

                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary rounded mt-5">Import Questions</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
</div>
@stop
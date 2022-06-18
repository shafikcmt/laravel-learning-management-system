
      
        @extends('layouts.admin-master')
        @section('title', 'Questions Bulk Import')
        @section('content')
      
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Questions Bulk Import <a class="btn btn-primary" href="/questions-bank">Questions List</a></h1>
            </div>
            <section class="section">
                <div class="container">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <h4>Bulk Import</h4>
                    </div>
                    <div class="col-md-3 offset-md-6">
                        <a href="/demo-download" class="btn btn-info pull-right rounded"> + Sample Downloads</a>
                    </div>
                </div>
                </div>
               
                <div class="row sameheight-container">
                    <div class="col-md-12">
                      @if(session()->has('bulk-question'))
                      <div class="alert alert-success" id="alertMessage">
                          {{session()->get('bulk-question')}}
                      </div>
                      @endif
                        <div class="card card-block sameheight-item">
                        <ol>
                            <li> You need to import Excel/CSV File. For sample you can download by clicking <b><a style="text-decoration:none" href="/demo-download"> Sample Downloads</a></b></li>
                            <li> Make sure input correct answer in right column.</li>
                            <li> You are uploading the question, you should match your question topic name and question topic id.</li>
                        </ol>
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Question Topic Name</th>
                                    <th>Question Topic ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach($qtopics as $qtopic)
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>{{$qtopic->topic_name}}</td>
                                    <td>{{$qtopic->id}}</td>
                                </tr>
                               <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                            <form role="form" action="{{route('bulk-question')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row mb-3">
                                   
                                    <div class="col-sm-12">
                                        <label for="colFormLabel" class=" col-form-label">Excell File <span style="color:red">*</span></label>
                                        <input type="file" name="file" class="form-control" id="colFormLabel" placeholder="">
                                        <div class="text-danger">@error('file') {{$message}} @enderror</div>
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
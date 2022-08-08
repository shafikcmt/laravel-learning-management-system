
    
        @extends('layouts.admin-master')
        @section('title', 'Add Batch')
        @section('content')
      <style>
        
         .fs{
            font-size: 20px !important;
            color:#fff !important;
         }
        
      </style>
        <article class="content responsive-tables-page">
          
            <section class="section">
           
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                        <div class="title-block">
                <h1 class="title fs well p-2 bg-orange">Create Batch</h1>

            </div>
                        <div class="card-title-block">
                            <h3 class="title"> Create Batch </h3>
                        </div>
                            <form role="form" method="POST" action="{{route('create-batch')}}">
                                @if(session()->has('add-batch'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('add-batch')}}
                                </div>
                                @endif
                                @if(session()->has('delete-batch'))
                                <div class="alert alert-success">
                                    {{session()->get('delete-batch')}}
                                </div>
                                @elseif(session()->has('students-add-batch'))
                                <div class="alert alert-success">
                                    {{session()->get('students-add-batch')}}
                                </div>
                                
                                @elseif(session()->has('student-add-batch'))
                                <div class="alert alert-success">
                                    {{session()->get('student-add-batch')}}
                                </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Batch Name</label>
                                    <input type="text" name="batch_name" class="form-control" id="category" placeholder="Enter Batch">
                                    <span class="text-danger">@error('batch_name') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
               
            <section class="section">
                <div class="row sameheight-container">
               
                    <div class="col-md-12">
                  
                        <div class="card card-block sameheight-item">
                        <div class="title-block">
                <h1 class="title well fs p-2 bg-orange">For Adding Bulk Student's to Batch</h1>

            </div>
                        <div class="card-title-block">
                            <h3 class="title"> Adding Student's to Batch <a class="btn btn-primary" href="/demo-batch-file">Sample Downloads</a></h3>
                        </div>
                            <form role="form" method="POST" action="{{route('students-add-batch')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Batch</label>
                                    <select name="batch_id" id="" class="form-control">
                                    <option value="" selected>Select Batch</option>
                                        @foreach($batches as $batch)
                                        <option value="{{$batch->id}}">{{$batch->batch_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('batch_id') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="stu">Upload Students</label>
                                    <input type="file" name="file" class="form-control">
                                    <span class="text-danger">@error('file') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
               
            <section class="section">
                <div class="row sameheight-container">
               
                    <div class="col-md-12">
                   
                        <div class="card card-block sameheight-item">
                        <div class="title-block">
                <h1 class="title well fs p-2 bg-orange"> For Adding Single Student to Batch</h1>

            </div>
                        <div class="card-title-block">
                            <h3 class="title"> Adding Student to Batch </h3>
                        </div>
                      
                            <form role="form" method="POST" action="{{route('student-add-batch')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Batch</label>
                                    <select name="batch_id" id="" class="form-control">
                                    <option value="" selected>Select Batch</option>
                                        @foreach($batches as $batch)
                                        <option value="{{$batch->id}}">{{$batch->batch_name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('batch_id') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="stu">Upload Students</label>
                                    <input type="text" name="roll" class="form-control" placeholder="Roll">
                                    <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </article>
    </div>
</div>
@stop

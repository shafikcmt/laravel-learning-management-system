
   
        @extends('layouts.admin-master')
        @section('title', 'Import Students')
        @section('content')
     
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange">Add Students <a  href="/all-student"><button class="btnhead">Back</button></a></h1>
                <p class="title-description"> </p>
            </div>
            <div class="row mb-3">
                    <div class="col-md-3">
                        <h4>Bulk Import</h4>
                    </div>
                    <div class="col-md-3 offset-md-6">
                        <a href="/import-demo" class="pull-right rounded"> <button class="buttonDownload">Sample Downloads</button></a>
                    </div>
                </div>
            <section class="section">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item shadow-lg p-3 bg-white rounded">
                            <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                                @if (count($errors) > 0)
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-1">
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
                                @if(session()->has('success'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('success')}}
                                </div>
                                @endif
                                @csrf
                            <div class="import-students">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Import Students</label>
                                    <input class="form-control" type="file" name="file" id="formFile">
                                    <span class="text-danger">@error('file'){{$message}}@enderror</span>
                                    <center class="mt-3">
                                        <button class="cssbuttons-io"><span>Submit</span></button>
                                        
                                    </center>
                                </div>
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
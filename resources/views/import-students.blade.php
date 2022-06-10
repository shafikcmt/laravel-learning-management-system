<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Import Students')
        @extends('layouts.admin-master')
        @section('content')
        @extends('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Students <a class="btn btn-info" href="/all-student">Back</a></h1>
                <p class="title-description"> </p>
            </div>
            <div class="row mb-3">
                    <div class="col-md-3">
                        <h4>Bulk Import</h4>
                    </div>
                    <div class="col-md-3 offset-md-6">
                        <a href="/import-demo" class="btn btn-info pull-right rounded"> + Sample Downloads</a>
                    </div>
                </div>
            <section class="section">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                                @if(session()->has('success'))
                                <div class="text-danger" id="alertMessage">
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
                                        <input class="btn btn-oval btn-primary" type="submit" value="submit">
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
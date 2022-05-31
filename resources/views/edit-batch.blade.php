<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Batch')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Edit Batch <a href="/add-batch" class="btn btn-info">Batch List</a></h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form" method="POST" action="{{route('update-batch')}}">
                                @if(session()->has('update-batch'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('update-batch')}}
                                </div>
                                @endif
                                @csrf
                                <input type="hidden" name="id" value="{{$batches->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Batch Name</label>
                                    <input type="text" name="batch_name" value="{{$batches->batch_name}}" class="form-control" id="category" placeholder="Enter Batch">
                                    <span class="text-danger">@error('batch_name') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
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

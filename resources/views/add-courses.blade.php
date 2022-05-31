<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Courses')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Courses </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-8 offset-md-2">
                        <div class="card card-block sameheight-item">
                            @if(session()->has('add-courses'))
                            <div class="alert alert-success">
                                {{session()->get('add-courses')}}
                            </div>
                            @endif
                            <form method="post" action="{{route('create-course')}}" enctype="multipart/form-data" >
                            @csrf    
                            <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="Name">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course category</label>
                                    <div class="col-sm-8">
                                        
                                        <select class="form-control" name="category_id">
                                       
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                        </select>
                                      
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course start date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="start_date" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course end date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="end_date" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                    </div>
                                </div>
                               
                                <div class="form-group pull-right">
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
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
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            @if(session()->has('add-courses'))
                            <div class="alert alert-success" id="alertMessage">
                                {{session()->get('add-courses')}}
                            </div>
                            @endif
                            @if(session()->has('course-deleted'))
                            <div class="alert alert-success" id="alertMessage">
                                {{session()->get('course-deleted')}}
                            </div>
                            @endif
                            <form method="post" action="{{route('create-course')}}" enctype="multipart/form-data" >
                            @csrf    
                            <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="Name">
                                        <div class="text-danger">@error('name') {{$message}} @enderror</div>
                                        
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
                                        <div class="text-danger">@error('category_id') {{$message}} @enderror</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course start date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="start_date" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                        <div class="text-danger">@error('start_date') {{$message}} @enderror</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course end date</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="end_date" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                        <div class="text-danger">@error('end_date') {{$message}} @enderror</div>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                        <div class="text-danger">@error('image') {{$message}} @enderror</div>
                                   
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

                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title">Available Course List</h3>
                                </div>
                                <section class="example">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Course Name</th>
                                                    <th>Course Category</th>
                                                    <th>Course Image</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                @foreach($courses as $key => $course)
                                                <tr>
                                                    <td>{{$courses->firstItem() + $key}}</td>
                                                    <td>{{$course->name}}</td>
                                                    <td>{{$course->category_name}}</td>
                                                    <td><img src="{{asset('images')}}/{{$course->image}}" width="60px" alt=""></td>
                                                    <td>
                                                        <a class="btn btn-primary" href="/edit-courses/{{$course->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a class="btn btn-primary" href="/delete-courses/{{$course->id}}"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                               
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$courses->links()}}
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

        </article>
    </div>
</div>
@stop
@extends('layouts.admin-master')
@section('title', 'Quiz Category')
@section('content') 
<article class="content responsive-tables-page">
    <div class="title-block">
        <h1 class="title well p-2 bg-orange">Quiz Category <a href="/questions-topic"><button class="btnhead">Add Quiz</button> </a> </h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item shadow-lg p-3 rounded bg-white">
                    <form role="form" method="post" action="{{route('create-qcategory')}}">
                        @csrf
                        @if(session()->has('add-category'))
                        <div class="alert alert-success" id="alertMessage">
                            {{ session()->get('add-category') }}
                        </div>
                        @endif
                        @if(session()->has('delete-category'))
                        <div class="alert alert-success" id="alertMessage">
                            {{ session()->get('delete-category') }}
                        </div>
                        @endif 
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Course Name</label>
                            <select name="course_id" id="" class="form-control">
                                <option selected>Select Course</option>
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">@error('course_id') {{$message}} @enderror</div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quiz Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="category"
                                name="batch" placeholder="Enter category name">
                            <div class="text-danger">@error('category_name') {{$message}} @enderror</div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="cssbuttons-io"><span>Save</span> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row sameheight-container ">
            <div class="col-md-12">
                <div class="card sameheight-item">
                    <div class="card-block">
                        <div class="card-title-block rounded shadow-lg bg-orange">
                            <h3 class="title"> Question Category List </h3>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Course Name</th>
                                            <th>Question Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($categories as $key => $category)
                                        <tr>
                                            <td> {{$categories->firstItem() + $key}} </td>
                                            <td>{{$category->name}}   </td>
                                            <td>{{$category->category_name}}</td>
                                            <td>
                                                <a href="/edit-qcategory/{{$category->id}}"
                                                    class="btn btn-primary"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="/delete-qcategory/{{$category->id}}"
                                                    class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$categories->links()}}
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

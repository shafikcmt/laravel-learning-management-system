@extends('layouts.admin-master')
@section('title', 'Course Mapping')
@section('content')

<article class="content responsive-tables-page">
    

    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card card-block sameheight-item">
                <div class="title-block">
        <h1 class="title well text-white p-2 bg-orange">Course Mapping Batch</h1>

    </div>
                    @if(session()->has('course-map'))
                    <div class="alert alert-success">
                        {{session()->get('course-map')}}
                    </div>
                    @elseif(session()->has('course-map-student'))
                    <div class="alert alert-success">
                        {{session()->get('course-map-student')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('course.map')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Category</label>
                            <div class="form-group">

                                <select class="form-control" id="category">
                                    <option selected>--Select Category--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Course</label>
                            <div class="form-group">
                                <select id="course" class="form-control" name="course_id">

                                </select>
                                <span class="text-danger">@error('course_id'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Batch</label>
                            <div class="form-group">
                                <select class="form-control" name="batch_id">
                                    <option selected>--Select Batch--</option>
                                    @foreach($batches as $batch)
                                    <option value="{{$batch->id}}">{{$batch->batch_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('batch_id'){{$message}}@enderror</span>

                            </div>
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
                @if(session()->has('course-map'))
                    <div class="alert alert-success">
                        {{session()->get('course-map')}}
                    </div>
                    @endif
                <div class="title-block">
        <h1 class="title well p-2 bg-orange text-white">Course Mapping Single Students</h1>

    </div>
                   
                    <form method="POST" action="{{route('course.map.student')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Category</label>
                            <div class="form-group">

                                <select class="form-control" id="categories">
                                    <option selected>--Select Category--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Course</label>
                            <div class="form-group">
                                <select id="courses" class="form-control" name="course_id">

                                </select>
                                <span class="text-danger">@error('course_id'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student Roll</label>
                            <div class="form-group">
                               <input type="text" name="batch_id" class="form-control" placeholder="Student Roll">
                            <span class="text-danger">@error('batch_id'){{$message}}@enderror</span>

                            </div>
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

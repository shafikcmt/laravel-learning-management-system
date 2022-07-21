
    
        @extends('layouts.admin-master')
        @section('title', 'Add Question Category')
        @section('content')
       
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange rounded">Edit Question Category <a href="/questions-category" class="btn btn-primary">Question Category List</a></h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item shadow-lg p-3 pb-2 bg-white rounded">
                            <form role="form" method="POST" action="{{route('update-qcategory')}}">
                                @if(session()->has('update-category'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('update-category')}}
                                </div>
                                @endif
                                @csrf
                                <input type="hidden" name="id" value="{{$categories->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Course Name</label>
                                    <select name="course_id" id="" class="form-control">
                                        <option selected>Select Course</option>
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">@error('category_name') {{$message}} @enderror</div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Batch Name</label>
                                    <input type="text" name="category_name" value="{{$categories->category_name}}" class="form-control" id="category" placeholder="Enter Batch">
                                    <span class="text-danger">@error('category_name') {{$message}} @enderror</span>
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

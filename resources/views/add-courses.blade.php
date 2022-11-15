
      
        @extends('layouts.admin-master')
        @section('title', 'Add Courses')
        @section('content')
      
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3 bg-orange">Add Courses </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item mb-3">
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
                                       <option value="" selected>Select</option>
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
                                    <button type="submit" class="cssbuttons-io"><span>Submit</span> </button>
                                    <button type="reset" class="cssbuttons-io"><span>Cancel</span> </button>
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
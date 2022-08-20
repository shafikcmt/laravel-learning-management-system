    @extends('layouts.admin-master')
    @section('title', 'Quiz Wise Results')
    @section('content')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3 bg-orange">Quiz Wise Results</h1>
            </div>
         
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
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
                                            <select class="form-control" id="course">
                                               
                                            </select>
                                        </div> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Quiz</label>
                                            <div class="form-group">
                                            <select class="form-control" id="quiz">
                                           
                                            </select>
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
  
@stop

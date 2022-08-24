    @extends('layouts.admin-master')
    @section('title', 'Quiz Wise Results')
    @section('content')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3 bg-orange">Quiz Wise Results</h1>
            </div>         
                    <section class="section">
                        <div class="sameheight-container">
                          
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Select Category</label>
                                            
                                            <select class="form-control" id="category">
                                            <option selected>--Select Category--</option>
                                               @foreach($categories as $category)
                                               <option value="{{$category->id}}">{{$category->category_name}}</option>
                                               @endforeach
                                            </select>
                                        </div> 
                                       
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Select Course</label>
                                            
                                            <select class="form-control" id="course">
                                               
                                            </select>
                                       
                                        </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Select Quiz</label>
                                           
                                            <select class="form-control" id="quiz">
                                           
                                            </select>
                                        </div> 
                                            </div>
                                        </div>
                                       
                                      
                                       
                                       
                                       
                                    </form>
                                </div>
                           
                           
                        </div>
                    </section>
                    <section class="section sameheight-item rounded">
                <div class="row sameheight-container ">
                    <div class="col-md-12 ">
                        <div class="table-responsive p-3 bg-white">
                            <table class="table table-striped table-bordered table-hover ">
                               <thead>
                                <tr>
                                    <!-- <th>Serial</th> -->
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Branch</th>
                                    <th>Semester</th>
                                    <th>Quiz Name</th>
                                    <!-- <th>Total Question</th> -->
                                    <th>Action</th>
                                </tr>
                               </thead>
                               <tbody id="quiz_result">
                               
                              
                              
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </article>
@stop

    @extends('layouts.admin-master')
    @section('title', 'Quiz Wise Results')
    @section('content')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Quiz Wise Results</h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-8 offset-md-2">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Category</label>
                                            <div class="form-group">
                                            <select class="form-control">
                                            <option selected>--Select Category--</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                        </div> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Course</label>
                                            <div class="form-group">
                                            <select class="form-control">
                                                <option selected>--Select Course--</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                        </div> 
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Quiz</label>
                                            <div class="form-group">
                                            <select class="form-control">
                                            <option selected>--Select Quiz--</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
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

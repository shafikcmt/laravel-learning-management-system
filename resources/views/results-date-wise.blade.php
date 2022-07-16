<div class="main-wrapper">
    @extends('layouts.admin-master')
    @section('title', 'Date Wise Results')
    @section('content')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Date Wise Results</h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-8 offset-md-2">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Date</label>
                                            <input type="date" class="form-control" placeholder="Date">
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

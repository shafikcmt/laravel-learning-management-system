<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Check Password')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Check Password</h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-8 offset-md-2">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Roll Number</label>
                                            <input type="text" class="form-control" placeholder="Roll">
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

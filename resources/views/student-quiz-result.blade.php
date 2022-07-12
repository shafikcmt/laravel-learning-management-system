@extends('layouts.master')
    @section('title', 'Personal Details')
    @section('content')
  
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3"> Quiz Results </h1>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                    </div>
                </div>
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                               <thead>
                                <tr>
                                    <th>Quiz Name</th>
                                    <th>Quiz Topic</th>
                                    <th>Total Mark</th>
                                    <th>Wrong Answer</th>
                                    <th>Right Answer</th>
                                    <th>Perchantage</th>
                                    <th>Action</th>
                                </tr>
                               </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@stop

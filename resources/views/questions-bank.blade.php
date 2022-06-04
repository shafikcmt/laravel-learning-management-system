<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Questions')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Questions </h1>
            </div>
             <section class="section">
                        <div class="row sameheight-container">
                             <div class="col-md-12">
                        <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <div class="row">
                                                <div class="col-md-4">
                                                <h3 class="title">All Question List </h3>
                                                </div>
                                                <div class="col-md-4">
                                                <input style="border:none;" type="search" class="form-control" id="colFormLabel" placeholder="Quick Search">
                                                </div>
                                               
                                            </div>
                                           
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial</th>
                                                            <th>Topic Name</th>
                                                            
                                                            <th>Question</th>
                                                        
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i=1; ?>
                                                        @foreach($questions as $question)
                                                        <tr>
                                                            <td>{{$question->id}}</td>
                                                            <td>{{$question->topic_name}}</td>
                                                            <td>{{$question->question}}</td>
                                                           
                                                            <td>
                                                                <a class="btn btn-primary" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-primary" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        <?php $i++; ?>
                                                        @endforeach
                                                       
                                                       
                                                    </tbody>
                                                    
                                                </table>
                                                {{$questions->links('pagination::bootstrap-5')}}
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

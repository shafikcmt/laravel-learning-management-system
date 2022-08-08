@extends('layouts.master')
    @section('title', 'Quiz Results')
    @section('content')
  
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange">Your Quiz Results </h1>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                    </div>
                </div>
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
                            <table class="table table-striped table-bordered table-hover ">
                               <thead>
                                <tr>
                                    <th>Quiz Name</th>
                                    <th>Total Question</th>
                                    <th>Wrong Answer</th>
                                    <th>Right Answer</th>
                                    <th>Percentage</th>
                                </tr>
                               </thead>
                               <tbody>
                                @foreach($exam_results as $exam_result)
                                <tr>
                                    <td>{{$exam_result->topic_name}}</td>
                                    <td>{{$exam_result->wrong_ans + $exam_result->right_ans}}</td>
                                    <td>{{$exam_result->wrong_ans}}</td>
                                    <td>{{$exam_result->right_ans}}</td>
                                    <td>{{round($exam_result->perchantage)}}%</td>
                                    <!-- <td><a href="#" class="btn btn-primary">View</a></td> -->
                                </tr>
                               @endforeach
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@stop

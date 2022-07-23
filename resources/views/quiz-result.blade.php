@extends('layouts.admin-master')
    @section('title', 'Quiz Results')
    @section('content')
<style>
    #grad-score {
        background-image: linear-gradient(to right top, #233873, #763a82, #b93775, #e54c52, #f07d1e);
    }

    #grad-per {
        background-image: linear-gradient(to right top, #233873, #763a82, #b93775, #e54c52, #f07d1e);

    }

</style>
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-2 bg-orange">Quiz Results <a class="btn btn-primary" href="/quiz-all-results">Back</a></h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                               <div class="row">
                                <div class="col-md-6">
                                <?php $i=1; ?>
                                    @foreach($quiz_results as $quiz_result)
                                    <h4>Question :<?php echo $i; ?></h4>
                                    @if($quiz_result->answer == $quiz_result->qanswer)
                                    <p>Your Answer is Correct: <span style="color:green;">{{$quiz_result->answer}}</span></p>
                                    @else
                                    <p>Your Answer is Wrong: <span style="color:red;">{{$quiz_result->answer}}</span></p>
                                    @endif
                                    @if($quiz_result->answer == $quiz_result->qanswer)
                                    @else
                                    <p> Correct Answer :{{$quiz_result->qanswer}}</p>
                                    @endif
                                    <?php $i++; ?>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                <div class="row">
                                @foreach($attemp_students as $attemp_student)
                                        <div id="grad-score" class="col-md-5 p-3 text-light"
                                            style="line-height:5px">
                                            <h4>Score</h4><br>
                                            <h4 class="text-right text-light">{{$attemp_student->right_ans}}/{{$attemp_student->right_ans+$attemp_student->wrong_ans}}</h4>
                                        </div>
                                        <div id="grad-per" class="col-md-5 p-3 text-light ml-2"
                                            style="line-height:5px">
                                            <h4>Perchantage</h4><br>
                                            <h4 class="text-right text-light">
                                                {{$attemp_student->perchantage}} %</h4>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                               </div>
                                </div>
                            </div>
                        </div>
                    </section>

        </article>
  
@stop

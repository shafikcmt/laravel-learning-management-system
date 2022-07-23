@extends('layouts.admin-master')
    @section('title', 'All Quiz Results')
    @section('content')
  
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange"> All Results </h1>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                    </div>
                </div>
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
                            <table class="table table-striped table-bordered table-hover">
                               <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Class</th>
                                    <th>Branch</th>
                                    <th>Semester</th>
                                    <th>Quiz Name</th>
                                    <th>Total Question</th>
                                    <th>Action</th>
                                </tr>
                               </thead>
                               <tbody>
                                <?php $i=1; ?>
                                @foreach($quiz_results as $quiz_result)
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>{{$quiz_result->student_name}}</td>
                                    <td>{{$quiz_result->student_roll}}</td>
                                    <td>{{$quiz_result->student_class}}</td>
                                    <td>{{$quiz_result->student_branch}}</td>
                                    <td>{{$quiz_result->student_semester}}</td>
                                    <td>{{$quiz_result->topic_name}}</td>
                                    <td>{{$quiz_result->wrong_ans + $quiz_result->right_ans}}</td>
                                   
                                    <td>
                                        <a href="/quiz-result/{{$quiz_result->student_id}}/{{$quiz_result->topic_id}}" class="btn btn-primary">View</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
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

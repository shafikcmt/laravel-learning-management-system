@extends('layouts.admin-master')
    @section('title', 'All Quiz Results')
    @section('content')
  
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 style="background:#F6A94F;" class="title well p-2"> All Results </h1>
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
                                    <th>Wrong Answer</th>
                                    <th>Right Answer</th>
                                    <th>Perchantage</th>
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
                                    <td>{{$quiz_result->wrong_ans}}</td>
                                    <td>{{$quiz_result->right_ans}}</td>
                                    <td>{{round($quiz_result->perchantage)}}%</td>
                                    <!-- <td><a href="#" class="btn btn-primary">View</a></td> -->
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

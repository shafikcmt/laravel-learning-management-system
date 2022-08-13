@extends('layouts.admin-master')
@section('title', 'Question Quiz')
@section('content')

<article class="content responsive-tables-page">
    <div class="title-block">
        <h1 class="title well p-2 bg-orange">{{$qcategory->category_name}} <a  href="/course-details/{{$qcategory->course_id}}"><button class="btnhead">Back</button></a></h1>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="title-block">
                    <h1 class="title well p-3"> </h1>
                </div>
                <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">

                    <table class="table table-striped table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Question Quiz Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach($qtopics as $qtopic)
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>{{$qtopic->topic_name}}</td>
                                <td><a href="/questions-view/{{$qtopic->id}}"><button class="cssbuttons-io"><span>View Questions</span></button></a></td>
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

@stop
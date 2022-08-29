      
        @extends('layouts.admin-master')
        @section('title', 'Questions Bank')
        @section('content')
      
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange">Questions <a href="/add-question"><button class="btnhead">Add Question</button></a> <a
                        href="/question-bulk-import"><button class="btnhead">Import Question</button></a></h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        @if(session()->has('delete-question'))
                        <div class="alert alert-success" id="alertMessage">
                            {{session()->get('delete-question')}}
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="title text-dark">All Question List </h3>
                                        </div>
                                        <div class="col-md-4">
                                            <input style="border:none;" type="search" class="form-control"
                                                id="colFormLabel" placeholder="Quick Search">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="student_list_icon float-right " style="background:#243873">
                                                <!-- <a title="Copy" href="#"><i class="fa-solid fa-clipboard-check"></i></a> -->
                                                <a title="Excel" href="/export-excel-question"><i
                                                        class="fa-solid fa-file-excel"></i></a>
                                                <a title="CSV" href="/export-csv-question"><i
                                                        class="fa-solid fa-file-csv"></i></a>
                                                <a title="PDF" href="/export-pdf-questions"><i
                                                        class="fa-solid fa-file-pdf"></i></a>
                                                <!-- <a title="Print" href="#"><i class="fa-solid fa-print"></i></a> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <section class="example">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Quiz Name</th>
                                                    <th>Question</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; ?>
                                                @foreach($questions as $key => $question)
                                                <tr>
                                                    <td>{{$questions->firstItem() + $key}}</td>
                                                    <td>{{$question->topic_name}}</td>
                                                    <td>{{$question->question}}</td>

                                                    <td>
                                                        <a class="btn btn-primary"
                                                            href="/edit-questions/{{$question->id}}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <a class="btn btn-primary"
                                                            href="/delete-questions/{{$question->id}}"><i
                                                                class="fa-solid fa-trash"></i></a>
                                                    </td>

                                                </tr>
                                                <?php $i++; ?>
                                                @endforeach
                                            </tbody>

                                        </table>
                                        {{$questions->links()}}
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


      
        @extends('layouts.admin-master')
        @section('title', 'Quizzes')
        @section('content')
        
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange">Add Quiz <a href="/questions-category"><button class="btnhead">Add Quiz Category</button></a></h1>

            </div>

            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item shadow-lg p-3 bg-white rounded">
                            <form role="form" method="POST" action="{{route('create-topic')}}">
                                @if(session()->has('add-topic'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{ session()->get('add-topic') }}
                                </div>
                                @endif
                                @if(session()->has('delete-topic'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{ session()->get('delete-topic') }}
                                </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course</label>
                                    <select name="course" id="course" class="form-control">
                                        <option value="" selected>Select Course</option>
                                        @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">@error('course') {{$message}} @enderror</div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quiz Category</label>
                                    <select name="category" id="quizcat" class="form-control">
                                       
                                    </select>
                                    <div class="text-danger">@error('category') {{$message}} @enderror</div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quiz Name</label>
                                    <input type="text" name="topic_name" class="form-control" id="category"
                                        name="batch" placeholder="Enter Quiz name">
                                        <div class="text-danger">@error('topic_name') {{$message}} @enderror</div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total Question</label>
                                    <input type="text" name="total_question" class="form-control" id="category"
                                        name="batch" placeholder="Enter Total Questions">
                                        <div class="text-danger">@error('total_question') {{$message}} @enderror</div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quiz Time</label>
                                    <input type="text" name="quiz_time" class="form-control" id="category"
                                        name="batch" placeholder="Time">
                                        <div class="text-danger">@error('quiz_time') {{$message}} @enderror</div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="cssbuttons-io"><span>Save</span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row sameheight-container">


                    <div class="col-md-12">

                        <div class="card sameheight-item">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title bg-orange"> Quizzes List </h3>
                                </div>
                                <section class="example">
                                    <div class="table-responsive shadow-lg bg-white rounded">
                                        <table class="table table-striped table-bordered table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Quiz Name</th>
                                                    <th>Total Question</th>
                                                    <th>Quiz Time</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($topics as $key => $topic)
                                                <tr>
                                                    <td>{{$topics->firstitem() + $key}}</td>
                                                    <td>{{$topic->topic_name}}</td>
                                                    <td>{{$topic->total_question}}</td>
                                                    <td>{{$topic->total_time}} Min</td>
                                                    <td>{{$topic->category_name}}</td>
                                                    <td>
                                                        <a href="/edit-topic/{{$topic->id}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="/delete-topic/{{$topic->id}}" class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                           
                                            @endforeach
                                        </table>
                                        {{$topics->links()}}
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

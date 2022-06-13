<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Question topic')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Question Topic <a class="btn btn-primary" href="/questions-category">Add Category</a></h1>

            </div>

            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
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
                                    <label for="exampleInputEmail1">Question Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">@error('category_id') {{$message}} @enderror</div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Topic Name</label>
                                    <input type="text" name="topic_name" class="form-control" id="category"
                                        name="batch" placeholder="Enter topic name">
                                        <div class="text-danger">@error('topic_name') {{$message}} @enderror</div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row sameheight-container">


                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title"> Question Topic List </h3>
                                </div>
                                <section class="example">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Topic</th>
                                                    <th>Category</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                              @foreach($topics as $key => $topic)
                                                <tr>
                                                    <td>{{$topics->firstitem() + $key}}</td>
                                                    <td>{{$topic->topic_name}}</td>
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

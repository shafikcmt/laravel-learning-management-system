<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Question topic')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Edit Question Topic <a class="btn btn-primary" href="/questions-topic">Back</a></h1>

            </div>

            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form method="POST" action="{{route('update-topic')}}">
                                @if(session()->has('update-topic'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{ session()->get('update-topic') }}
                                </div>
                                @endif
                                @csrf
                                <input type="hidden" name="id" value="{{$qtopics->id}}">
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
                                        value="{{$qtopics->topic_name}}" placeholder="Enter topic name">
                                        <div class="text-danger">@error('topic_name') {{$message}} @enderror</div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </section>


        </article>
    </div>
</div>
@stop

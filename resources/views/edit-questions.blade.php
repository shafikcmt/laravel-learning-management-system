@extends('layouts.admin-master')
@section('title', 'Add Question')

@section('content')

<article class="content responsive-tables-page">
    <div class="title-block ">
        <h1 class="title well p-2 bg-orange rounded">Edit Question <a href="/questions-bank"><button class="btnhead">Back</button></a>
        </h1>
    </div>
    <section class="section">
        <div class="row sameheight-container bg-white p-3 shadow-lg pb-2 rounded">
            <div class="col-md-12">
                <h1 class="title well p-2 text-center bg-orange">Topic Name : {{$questions->qtopic->topic_name}}</h1>
                @if(session()->has('add-question'))
                <div class="alert alert-success" id="alertMessage">
                    {{session()->get('add-question')}}
                </div>
                @endif
                @if(session()->has('update-question'))
                <div class="alert alert-success" id="alertMessage">
                    {{session()->get('update-question')}}
                </div>
                @endif
                <div class="card card-block sameheight-item">
                    <form role="form" method="POST" action="{{route('update-question')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$questions->id}}">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="colFormLabel" class="col-form-label">TOPIC NAME <span
                                        style="color:red">*</span></label>
                                <select class="form-control" name="qtopic_id">
                                    <option selected>Select Topic Name</option>
                                    @foreach($qtopics as $qtopic)
                                    <option value="{{$qtopic->id}}">{{$qtopic->topic_name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">@error('qtopic_id') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label for="colFormLabel" class="col-form-label">Question <span
                                        style="color:red">*</span></label>
                                <textarea class="form-control" value="{{$questions->question}}" name="question" id=""
                                    cols="30" rows="5">{{$questions->question}}</textarea>
                                <div class="text-danger">@error('question') {{$message}} @enderror</div>
                            </div>
                        </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label for="colFormLabel" class="col-form-label">Answer <span style="color:red">*</span></label>

                        <input type="text" name="answer" value="{{$questions->answer}}" class="form-control mb-3"
                            placeholder="Correct Answer">
                        <div class="text-danger">@error('answer') {{$message}} @enderror</div>
                        <label for="colFormLabel" class="col-form-label">Answer Option <span
                                style="color:red">*</span></label>
                        <input type="text" value="{{$questions->option1}}" name="option1" class="form-control mb-3"
                            placeholder="Option ....">
                        <div class="text-danger">@error('option1') {{$message}} @enderror</div>
                        <input type="text" value="{{$questions->option2}}" name="option2" class="form-control mb-3"
                            placeholder="Option ....">
                        <div class="text-danger">@error('option2') {{$message}} @enderror</div>
                        <input type="text" value="{{$questions->option3}}" name="option3" class="form-control mb-3"
                            placeholder="Option ....">
                        <div class="text-danger">@error('option3') {{$message}} @enderror</div>
                        <input type="text" value="{{$questions->option4}}" name="option4" class="form-control mb-3"
                            placeholder="Option ....">
                        <div class="text-danger">@error('option4') {{$message}} @enderror</div>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <button type="submit" class="cssbuttons-io"><span>Save Question</span></button>

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

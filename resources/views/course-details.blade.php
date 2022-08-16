@extends('layouts.admin-master')
@section('title', 'Add Courses')
@section('content')

<article class="content responsive-tables-page">

    <section class="section">
        <div class="row sameheight-container">

            <div class="col-md-12">

                <div class="card card-block sameheight-item shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="title-block">
                        <h1 class="title well p-2 bg-orange text-white">Edit Courses <a
                                href="/admin-dashboard"><button class="btnhead">Back</button></a></h1>
                    </div>
                    @if(session()->has('update-courses'))
                    <div class="alert alert-success" id="alertMessage">
                        {{session()->get('update-courses')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('update-courses')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{$course->id}}">
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$course->name}}" name="name" class="form-control"
                                    id="colFormLabel" placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course category</label>
                            <div class="col-sm-8">

                                <select class="form-control" name="category_id">
                                    <option selected>Select category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">@error('category_id') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course start date</label>
                            <div class="col-sm-8">
                                <input type="date" value="{{$course->start_date}}" name="start_date"
                                    class="form-control" id="colFormLabel" placeholder="col-form-label">
                                <div class="text-danger">@error('start_date') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course end date</label>
                            <div class="col-sm-8">
                                <input type="date" value="{{$course->end_date}}" name="end_date" class="form-control"
                                    id="colFormLabel" placeholder="col-form-label">
                                <div class="text-danger">@error('end_date') {{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image" class="form-control mb-2" id="colFormLabel"
                                    placeholder="col-form-label">
                                <img width="120px;" src="{{asset('images')}}/{{$course->image}}" alt="">
                                <div class="text-danger">@error('image') {{$message}} @enderror</div>

                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" class="cssbuttons-io"><span>Update</span></button>
                            <button type="reset" class="cssbuttons-io"><span>Cancel</span></button>
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <div class="row sameheight-container">
            <div class="col-md-12">

                <div class="table-responsive shadow-lg p-3 mb-3 bg-white rounded">
                    <div class="title-block ">
                        <h1 class="title well p-2 bg-orange">Course Category </h1>
                    </div>
                    <table class="table table-striped table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach($course->qcategory as $qcategory)
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>{{$qcategory->category_name}}</td>
                                <td>
                                    <a href="/view-topic/{{$qcategory->id}}" ><button class="cssbuttons-io"><span>View Quizes</span></button></a>

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

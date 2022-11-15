
      
        @extends('layouts.admin-master')
        @section('title', 'Add Courses')
        @section('content')
      
        <article class="content responsive-tables-page">
           
            <section class="section">
        

                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card sameheight-item">
                            <div class="card-block">
                                <div class="card-title-block bg-orange">
                                    <h3 class="title">Available Course List</h3>
                                </div>
                                <section class="example">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Course Name</th>
                                                    <th>Course Category</th>
                                                    <th>Course Image</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @if(count($courses))
                                                @foreach($courses as $key => $course)
                                                <tr>
                                                    <td>{{$courses->firstItem() + $key}}</td>
                                                    <td>{{$course->name}}</td>
                                                    <td>{{$course->category_name}}</td>
                                                    <td><img src="{{asset('images')}}/{{$course->image}}" width="60px" alt=""></td>
                                                    <td>
                                                        <a class="btn btn-primary" href="/edit-courses/{{$course->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a class="btn btn-primary" href="/delete-courses/{{$course->id}}"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                               @else
                                               <tr>
                                                <td colspan="5">Course is not Found!</td>
                                               </tr>
                                               @endif
                                            </tbody>
                                        </table>
                                        {{$courses->links()}}
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
    <div class="main-wrapper">
        <div class="app" id="app">
            @section('title','All Students')
            @extends('layouts.admin-master')
            @section('content')
            @include('includes.admin-sidebar')
            <article class="content responsive-tables-page">
                <div class="title-block">
                    <h1 class="title well p-3">Students <a class="btn btn-primary" href="/import-students">Import Students</a> <a href="/add-students" class="btn btn-primary">Add New Student</a>
                    </h1>
                    <p class="title-description"> </p>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="card-title-block">
                                        <div class="float-left">
                                            <h3 class="title">Students List </h3>
                                        </div>
                                        <div class="student_list_icon float-right ">
                                            <a href="#"><i class="fa-solid fa-clipboard-check"></i></a>
                                            <a href="#"><i class="fa-solid fa-file-excel"></i></a>
                                            <a href="#"><i class="fa-solid fa-file-csv"></i></a>
                                            <a href="#"><i class="fa-solid fa-file-pdf"></i></a>
                                            <a href="#"><i class="fa-solid fa-print"></i></a>
                                        </div>

                                    </div>
                                    <section class="example">
                                        <div class="table-responsive">
                                            @if(Session()->has('delete-student'))
                                            <div class="alert alert-danger">
                                                {{Session()->get('delete-student')}}
                                            </div>
                                            @endif
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Serial</th>
                                                        <th>Name</th>
                                                        <th>Roll No</th>
                                                        <th>Class</th>
                                                        <th>Branch</th>
                                                        <th>Semester</th>
                                                        <th>Mobile Number</th>
                                                        <th>Email Id</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1; ?>
                                                    @foreach($students as $student)
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td>{{$student->name}}</td>
                                                        <td>{{$student->roll}}</td>
                                                        <td>{{$student->class}}</td>
                                                        <td>{{$student->branch}}</td>
                                                        <td>{{$student->semester}}</td>
                                                        <td>{{$student->mobile}}</td>
                                                        <td>{{$student->email}}</td>
                                                        <td>
                                                            <a href="edit-student/{{$student->id}}"
                                                                class="btn btn-primary"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                            <a href="student-delete/{{$student->id}}"
                                                                class="btn btn-primary"><i
                                                                    class="fa-solid fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                    @endforeach

                                                </tbody>

                                                <!-- <tfoot>
                                                    <tr>
                                                        <td colspan="9">
                                                            <nav class="text-right">
                                                                <ul class="pagination">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"> Prev </a>
                                                                    </li>
                                                                    <li class="page-item active">
                                                                        <a class="page-link" href="#"> 1 </a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"> 2 </a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"> 3 </a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"> 4 </a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"> 5 </a>
                                                                    </li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"> Next </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </td>

                                                    </tr>

                                                </tfoot> -->

                                            </table>
                                            {{$students->links('pagination::bootstrap-5')}}
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

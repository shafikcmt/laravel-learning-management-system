            @extends('layouts.admin-master')
            @section('title','All Students')
            @section('content')       
            <article class="content responsive-tables-page">
                <div class="title-block">
                    <h1 class="title well p-2 bg-orange">Students <a href="/import-page"><button class="btnhead">Import Students</button></a> <a href="/add-students"> <button class="btnhead">Add New Student</button></a>
                    </h1>
                    <p class="title-description"> </p>
                </div>
                <section class="section">

                    <div class="card sameheight-item">
                        <div class="card-block">
                            <div class="card-title-block">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="title text-dark">Students List </h3>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                       <input style="" id="search" name="search" type="text" class="form-control"
                                            placeholder="Quick Search">
                                       </div>
                                      
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="student_list_icon float-right ">
                                            <!-- <a title="Copy" href="#"><i class="fa-solid fa-clipboard-check"></i></a> -->
                                            <a title="Excel" href="/export-excel"><i
                                                    class="fa-solid fa-file-excel"></i></a>
                                            <a title="CSV" href="/export-csv"><i class="fa-solid fa-file-csv"></i></a>
                                            <a title="PDF" href="/all-studentspdf"><i class="fa-solid fa-file-pdf"></i></a>
                                            <!-- <a title="Print" href="#"><i class="fa-solid fa-print"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="example">
                            <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
                                @if(Session()->has('delete-student'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{Session()->get('delete-student')}}
                                </div>
                                @endif
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" colspan="8">Total Students : <span id="total_records"></span></th>
                                        </tr>
                                        <tr>
                                            <!-- <th>Serial</th> -->
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
                                    <tbody id="students">

                                    </tbody>
                                </table>
                            
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


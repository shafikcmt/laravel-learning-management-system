<div class="main-wrapper">
    <div class="app" id="app">@section('title', 'Student List') @include('includes.header')
        @include('includes.admin-sidebar') <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Students </h1>
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
                                    <i class="fa-solid fa-clipboard-check"></i>
                                   <i class="fa-solid fa-file-excel"></i>
                                   <i class="fa-solid fa-file-csv"></i>
                                   <i class="fa-solid fa-file-pdf"></i>
                                   <i class="fa-solid fa-print"></i>
                                    </div>
                                    
                                </div>
                                <section class="example">
                                    <div class="table-responsive">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                                <tr>
                                                    <td>01</td>
                                                    <td>Shafiqul Islam</td>
                                                    <td>4919853</td>
                                                    <td>B.Tech</td>
                                                    <td>CSE</td>
                                                    <td>8th</td>
                                                    <td>7404606419</td>
                                                    <td>gth.shafiqul@geeta.edu.in</td>
                                                </tr>
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="8">
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
                                               
                                            </tfoot>

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
@include('includes.footer')

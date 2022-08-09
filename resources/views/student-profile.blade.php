    @extends('layouts.master')
    @section('title', 'Personal Details')
    @section('content')
  
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-2 bg-orange"> Personal Details </h1>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                    </div>
                </div>
                <div class="row sameheight-container">
                    <div class="col-md-12 ">
                        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded sameheight-item">
                            <table class="table table-striped table-bordered table-hover text-dark">
                                <tr>
                                    <th>Name</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Roll</th>
                                    <td>{{$data->roll}}</td>
                                </tr>
                               
                                <tr>
                                    <th>Branch</th>
                                    <td>{{$data->branch}}</td> 
                                </tr>
                                
                                <tr>
                                    <th>Class</th>
                                    <td>{{$data->class}}</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <th>Semister</th>
                                    <td>{{$data->semester}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>{{$data->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Email Id</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@stop

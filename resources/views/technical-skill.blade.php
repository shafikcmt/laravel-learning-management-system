@extends('layouts.master')
@section('title','Technical Skills')
@section('content')
<article class="content dashboard-page">
    <section class="section">
        <div class="title-block">
            <h1 class="title well p-2 bg-orange text-white"> Technical Skills</h1>
        </div>
        <div class="row sameheight-container ">
            <div class="col-md-12">
                <div class="card sameheight-item shadow-lg p-3 bg-white" data-exclude="xs,sm">
                    <div class="title-block">
                        <h1 class="title well p-2 bg-orange text-white"> {{$techskill->name}} <a
                                href="/add-technical-skill/{{$techskill->id}}"><button class="btnhead">Add</button> </a> <a
                                href="/technical-work"><button class="btnhead">Back</button> </a> </h1>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table  class="table table-striped table-bordered table-hover text-dark">
                                @if($techskill->name == 'Trainings')
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Course</th>
                                        <th>Event</th>
                                        <th>Instructor</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Organiged By</th>
                                        <th>Course Completion</th>
                                        <th>Place</th>
                                        <th>Learning Type</th>
                                        <th>Certificate ID</th>
                                        <th>Type of Campus</th>
                                        <th>Request Status</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @if($trainingskills->count())
                                    <?php $i=0; ?>
                                    @foreach($trainingskills as $trainingskill)
                                    <?php $i++; ?>
                                    <tr valign="middle">
                                        <td><?php echo $i; ?></td>
                                        <td>{{$trainingskill->course}}</td>
                                        <td>{{$trainingskill->event}}</td>
                                        <td>{{$trainingskill->instructor_name}}</td>
                                        <td>{{$trainingskill->from}}</td>
                                        <td>{{$trainingskill->to}}</td>
                                        <td>{{$trainingskill->organiged_by}}</td>
                                        <td>{{$trainingskill->course_completion}}</td>
                                        <td>{{$trainingskill->place}}</td>
                                        <td>{{$trainingskill->learning_type}}</td>
                                        <td>{{$trainingskill->certificate_id}}</td>
                                        <td>{{$trainingskill->type_of_campus}}</td>
                                        <td class="text-info">{{$trainingskill->status}}</td>
                                       
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="text-center text-danger" colspan="14">Data Not Found !!</td>
                                    </tr>
                                    @endif
                                </tbody>
                                @elseif($techskill->name == 'Certifications')
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Certificate Name</th>
                                        <th>Certificate Form</th>
                                        <th> Instructor Name</th>
                                        <th>Score</th>
                                        <th>Test center Name</th>
                                        <th>Year of Pass</th>
                                        <th>Certificate ID</th>
                                        <th>Type of Campus</th>
                                        <th>Status</th>
                                       
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $i=0; ?>
                                  @foreach($certificate as $certificate)
                                  <?php $i++; ?>
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>{{$certificate->certificate_name}}</td>
                                    <td>{{$certificate->certificate_from}}</td>
                                    <td>{{$certificate->instructor_name}}</td>
                                    <td>{{$certificate->score}}</td>
                                    <td>{{$certificate->test_center_name}}</td>
                                    <td>{{$certificate->year_of_pass}}</td>
                                    <td>{{$certificate->certificate_id}}</td>
                                    <td>{{$certificate->type_of_campus}}</td>
                                    <td>{{$certificate->status}}</td>
                                  </tr>
                                  @endforeach
                                </tbody>

                                @elseif($techskill->name == 'Hackathon')
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Course</th>
                                        <th>Event</th>
                                        <th>Instructor Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Organiged By</th>
                                        <th>Learning Type</th>
                                        <th>Total Hours</th>
                                        <th>Certificate ID</th>
                                        <th>Type of Campus</th>
                                        <th>Request Status</th>

                                    </tr>

                                </thead>
                                <tbody>
                                  
                                </tbody>
                                @elseif($techskill->name == 'HackerRank')
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Course</th>
                                        <th>Event</th>
                                        <th>Instructor</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Organiged By</th>
                                        <th>Course Completion</th>
                                        <th>Place</th>
                                        <th>Learning Type</th>
                                        <th>Certificate ID</th>
                                        <th>Type of Campus</th>
                                        <th>Request Status</th>
                                    </tr>

                                </thead>
                                <tbody>
                                  
                                </tbody>
                                @elseif($techskill->name == 'HackerRankCertificate')
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Course</th>
                                        <th>Event</th>
                                        <th>Instructor</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Organiged By</th>
                                        <th>Course Completion</th>
                                        <th>Place</th>
                                        <th>Learning Type</th>
                                        <th>Certificate ID</th>
                                        <th>Type of Campus</th>
                                        <th>Request Status</th>
                                    </tr>

                                </thead>
                                <tbody>
                                  
                                </tbody>

                                @endif



                            </table>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

<div class="modal fade" id="modal-media">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Media Library</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body modal-tab-container">
                <ul class="nav nav-tabs modal-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                    </li>
                </ul>
                <div class="tab-content modal-tab-content">
                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                        <div class="images-container">
                            <div class="row"> </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                        <div class="upload-container">
                            <div id="dropzone">
                                <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data"
                                    class="dropzone needsclick dz-clickable" id="demo-upload">
                                    <div class="dz-message-block">
                                        <div class="dz-message needsclick"> Drop files here or click to upload.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Insert Selected</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="confirm-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="fa fa-warning"></i> Alert
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to do this?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
@stop

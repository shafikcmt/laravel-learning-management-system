@extends('layouts.master')
@section('title','Assessment Work')
@section('content')
<article class="content dashboard-page">
    <section class="section">
        <div class="title-block">
            <h1 class="title well p-2 bg-orange text-white"> Assessment Works</h1>
        </div>
        <div class="row sameheight-container ">
            <div class="col-md-12">
                <div class="card sameheight-item shadow-lg p-3 bg-white" data-exclude="xs,sm">
                    <div class="title-block">
                        <h1 class="title well p-2 bg-orange text-white"> Drive Skills > Soft Skills <a
                                href="/assessments"><button class="btnhead">Back</button> </a> </h1>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover text-dark">
                                <thead>
                                    <tr>
                                        <th class="text-left" valign="middle" colspan="3">Soft Skills Level-1</th>
                                        <th class="text-right" colspan="3">
                                            <a href="/assessments-report"><button class="btnhead">Report</button> </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Topic</th>
                                        <th>Tests</th>
                                        <th>Percentage</th>
                                        <th>Topic</th>
                                        <th>Tests</th>
                                        <th>Percentage</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>2.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>3.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>2.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>4.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>5.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>6.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>7.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>8.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>9.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>10.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>11.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>12.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>13.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-striped table-bordered table-hover text-dark">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="6">Soft Skills Level-2</th>
                                    </tr>
                                    <tr>
                                        <th>Topic</th>
                                        <th>Tests</th>
                                        <th>Percentage</th>
                                        <th>Topic</th>
                                        <th>Tests</th>
                                        <th>Percentage</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>2.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>3.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>2.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>4.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>5.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>6.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>7.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>8.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>9.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>10.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>11.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>12.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                        <td>13.Articles</td>
                                        <td>5</td>
                                        <td>80%</td>
                                    </tr>
                                </tbody>
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

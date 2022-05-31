<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Questions Bulk Import')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Questions Bulk Import </h1>
            </div>
            <section class="section">
                <div class="container">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <h4>Bulk Import</h4>
                    </div>
                    <div class="col-md-3 offset-md-6">
                        <a href="#" class="btn btn-info pull-right rounded"> + Sample Downloads</a>
                    </div>
                </div>
                </div>
               
                <div class="row sameheight-container">
                    <div class="col-md-12">
                      
                        <div class="card card-block sameheight-item">
                        <ol>
                            <li>01. You need to import Excel File. For sample you can download by clicking <b>Sample Download</b></li>
                            <li>02. Make sure input correct answer in right column.</li>
                        </ol>
                            <form role="form" action="#" method="post">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <label for="colFormLabel" class="col-form-label">Topic <span style="color:red">*</span></label>
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="colFormLabel" class=" col-form-label">CATEGORY <span style="color:red">*</span></label>
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="colFormLabel" class=" col-form-label">SUB CATEGORY <span style="color:red">*</span></label>
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="colFormLabel" class=" col-form-label">Excell File <span style="color:red">*</span></label>
                                        <input type="file" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                </div>



                                <center>
                                    <button type="submit" class="btn btn-primary rounded mt-5">Import Questions</button>
                                </center>

                            </form>

                        </div>


                    </div>


                </div>


            </section>
        </article>
    </div>
</div>
@stop
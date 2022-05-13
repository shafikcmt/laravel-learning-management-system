<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Question')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Question </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Topic <span style="color:red">*</span></label>
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">CATEGORY <span style="color:red">*</span></label>
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">SUB CATEGORY <span style="color:red">*</span></label>
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">QUESTION TYPE <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Marks <span style="color:red">*</span></label>
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">IMAGE (OPTIONAL) </label>
                                        <input type="file" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <label for="colFormLabel" class="col-form-label">Question <span style="color:red">*</span></label>
                                        <div class="form-group row">

                                            <div class="col-sm-12">
                                                <div class="wyswyg">
                                                    <div class="toolbar">
                                                        <select class="ql-size">
                                                            <option value="small"></option>
                                                            <option selected></option>
                                                            <option value="large"></option>
                                                            <option value="huge"></option>
                                                        </select>
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-strike"></button>
                                                        <select title="Text Color" class="ql-color">
                                                            <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)" selected></option>
                                                            <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                            <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                            <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                            <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                            <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                            <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                            <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)"></option>
                                                            <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                            <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                            <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                            <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                            <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                            <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                            <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                            <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                            <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                            <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                            <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                            <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                            <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                            <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                            <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                            <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                            <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                            <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                            <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                            <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                            <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                            <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                            <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                            <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                            <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                            <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                            <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                                        </select>
                                                        <select title="Background Color" class="ql-background">
                                                            <option value="rgb(0, 0, 0)" label="rgb(0, 0, 0)"></option>
                                                            <option value="rgb(230, 0, 0)" label="rgb(230, 0, 0)"></option>
                                                            <option value="rgb(255, 153, 0)" label="rgb(255, 153, 0)"></option>
                                                            <option value="rgb(255, 255, 0)" label="rgb(255, 255, 0)"></option>
                                                            <option value="rgb(0, 138, 0)" label="rgb(0, 138, 0)"></option>
                                                            <option value="rgb(0, 102, 204)" label="rgb(0, 102, 204)"></option>
                                                            <option value="rgb(153, 51, 255)" label="rgb(153, 51, 255)"></option>
                                                            <option value="rgb(255, 255, 255)" label="rgb(255, 255, 255)" selected></option>
                                                            <option value="rgb(250, 204, 204)" label="rgb(250, 204, 204)"></option>
                                                            <option value="rgb(255, 235, 204)" label="rgb(255, 235, 204)"></option>
                                                            <option value="rgb(255, 255, 204)" label="rgb(255, 255, 204)"></option>
                                                            <option value="rgb(204, 232, 204)" label="rgb(204, 232, 204)"></option>
                                                            <option value="rgb(204, 224, 245)" label="rgb(204, 224, 245)"></option>
                                                            <option value="rgb(235, 214, 255)" label="rgb(235, 214, 255)"></option>
                                                            <option value="rgb(187, 187, 187)" label="rgb(187, 187, 187)"></option>
                                                            <option value="rgb(240, 102, 102)" label="rgb(240, 102, 102)"></option>
                                                            <option value="rgb(255, 194, 102)" label="rgb(255, 194, 102)"></option>
                                                            <option value="rgb(255, 255, 102)" label="rgb(255, 255, 102)"></option>
                                                            <option value="rgb(102, 185, 102)" label="rgb(102, 185, 102)"></option>
                                                            <option value="rgb(102, 163, 224)" label="rgb(102, 163, 224)"></option>
                                                            <option value="rgb(194, 133, 255)" label="rgb(194, 133, 255)"></option>
                                                            <option value="rgb(136, 136, 136)" label="rgb(136, 136, 136)"></option>
                                                            <option value="rgb(161, 0, 0)" label="rgb(161, 0, 0)"></option>
                                                            <option value="rgb(178, 107, 0)" label="rgb(178, 107, 0)"></option>
                                                            <option value="rgb(178, 178, 0)" label="rgb(178, 178, 0)"></option>
                                                            <option value="rgb(0, 97, 0)" label="rgb(0, 97, 0)"></option>
                                                            <option value="rgb(0, 71, 178)" label="rgb(0, 71, 178)"></option>
                                                            <option value="rgb(107, 36, 178)" label="rgb(107, 36, 178)"></option>
                                                            <option value="rgb(68, 68, 68)" label="rgb(68, 68, 68)"></option>
                                                            <option value="rgb(92, 0, 0)" label="rgb(92, 0, 0)"></option>
                                                            <option value="rgb(102, 61, 0)" label="rgb(102, 61, 0)"></option>
                                                            <option value="rgb(102, 102, 0)" label="rgb(102, 102, 0)"></option>
                                                            <option value="rgb(0, 55, 0)" label="rgb(0, 55, 0)"></option>
                                                            <option value="rgb(0, 41, 102)" label="rgb(0, 41, 102)"></option>
                                                            <option value="rgb(61, 20, 102)" label="rgb(61, 20, 102)"></option>
                                                        </select>
                                                        <button class="ql-list" value="ordered"></button>
                                                        <button class="ql-list" value="bullet"></button>
                                                        <select title="Text Alignment" class="ql-align">
                                                            <option selected></option>
                                                            <option value="center" label="Center"></option>
                                                            <option value="right" label="Right"></option>
                                                            <option value="justify" label="Justify"></option>
                                                        </select>
                                                        <button class="ql-link"></button>
                                                        <button style="width: auto;" type="button" title="Image" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-media">
                                                            <i class="fa fa-image"></i> Media </button>
                                                    </div>
                                                    <div class="editor"> Hello World </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-7">
                                        <label for="colFormLabel" class="col-form-label">Number of Options <span style="color:red">*</span></label>
                                        <input type="number" name="nofoption" class="form-control" placeholder="Number of Options">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <input type="text" name="option" class="form-control mb-3" placeholder="Option ....">
                                        <input type="text" name="option" class="form-control mb-3" placeholder="Option ....">
                                        <input type="text" name="option" class="form-control mb-3" placeholder="Option ....">
                                        <input type="text" name="option" class="form-control mb-3" placeholder="Option ....">
                                    </div>
                                </div>
                                <div class="form-group pull-right">
                                    <button type="submit" class="btn btn-primary">Save Question</button>

                                </div>
                            </form>
                        </div>


                    </div>


                </div>

            </section>

        </article>
    </div>
</div>
@include('includes.footer')
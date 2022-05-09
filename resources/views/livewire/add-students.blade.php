<div class="main-wrapper">
    <div class="app" id="app">@section('title', 'Student List') @include('includes.header')
        @include('includes.admin-sidebar') <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Students </h1>
                <p class="title-description"> </p>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">
                            <div class="title-block">
                                <h3 class="title"> Add Students </h3>
                            </div>
                            <form role="form">
                                <fieldset class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"> 
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="control-label" for="roll">Roll</label>
                                    <input type="text" class="form-control" id="name" name="roll" placeholder="Enter Roll"> 
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="control-label" for="class">Class</label>
                                    <input type="text" class="form-control" id="name" name="class" placeholder="Enter Class"> 
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="control-label" for="branch">Branch</label>
                                    <input type="text" class="form-control" id="branch" name="branch" placeholder="Enter Branch"> 
                                </fieldset>
                               
                               
                              
                              

                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-block sameheight-item">
                        <div class="title-block">
                                <h3 class="title"> Import Students </h3>
                            </div>
                            <form role="form">
                            <fieldset class="form-group">
                                    <label class="control-label" for="semester">Semester</label>
                                    <input type="text" class="form-control" id="semester" name="semester" placeholder="Enter Semister"> 
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="control-label" for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile"> 
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="control-label" for="email">Email Id</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"> 
                                </fieldset>
                                <fieldset class="form-group">
                                    <label class="control-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Placeholder text"> 
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@include('includes.footer')

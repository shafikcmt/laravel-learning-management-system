<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Questions')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Question Topic </h1>
            </div>
             <section class="section">
                        <div class="row sameheight-container">
                             <div class="col-md-12">
                        <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <div class="row">
                                                <div class="col-md-4">
                                                <h3 class="title"> Question Topic List </h3>
                                                </div>
                                                <div class="col-md-4">
                                                <input style="border:none;" type="search" class="form-control" id="colFormLabel" placeholder="Quick Search">
                                                </div>
                                               
                                            </div>
                                           
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial</th>
                                                            <th>Topic</th>
                                                            <th>Category</th>
                                                            <th>Question</th>
                                                            <th>Image</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ARTICLES</td>
                                                            <td>SOFT SKILLS</td>
                                                            <td>Which of the looping statements is/are supported by PHP?</td>
                                                            <td>Image</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ARTICLES</td>
                                                            <td>SOFT SKILLS</td>
                                                            <td>Which of the looping statements is/are supported by PHP?</td>
                                                            <td>Image</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ARTICLES</td>
                                                            <td>SOFT SKILLS</td>
                                                            <td>Which of the looping statements is/are supported by PHP?</td>
                                                            <td>Image</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ARTICLES</td>
                                                            <td>SOFT SKILLS</td>
                                                            <td>Which of the looping statements is/are supported by PHP?</td>
                                                            <td>Image</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ARTICLES</td>
                                                            <td>SOFT SKILLS</td>
                                                            <td>Which of the looping statements is/are supported by PHP?</td>
                                                            <td>Image</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
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
@include('includes.footer')

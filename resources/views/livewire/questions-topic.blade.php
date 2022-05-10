<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Students')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Question Topic </h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-3">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Topic Name</label>
                                            <input type="text" class="form-control" id="category" name="batch" placeholder="Enter topic name"> 
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <div class="col-md-9">
                   
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Question Topic List </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial</th>
                                                            <th>Title</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ARTICLES</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>VOICE</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>

                                                        <tr>
                                                            <td>03</td>
                                                            <td>PREPOSITIONS</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>

                                                        <tr>
                                                            <td>04</td>
                                                            <td>ADJECTIVES</td>
                                                            <td>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                                                <a class="btn btn-info" href="#"><i class="fa-solid fa-trash"></i></a>
                                                            </td>
                                                           
                                                        </tr>

                                                        <tr>
                                                            <td>05</td>
                                                            <td>TENSES</td>
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

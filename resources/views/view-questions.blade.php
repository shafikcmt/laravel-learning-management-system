<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Question Topic')
        @extends('layouts.admin-master')
        @section('content')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Questions Topic <a class="btn btn-primary" href="#">Back</a></h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="title-block">
                            <h1 class="title well p-3"> </h1>
                        </div>
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                              @foreach($qtopics as $qtopic)
                              <tr>
                                  <td><?php echo $i; ?></td>
                                  @if($qtopic->count() > 1)
                                 <p>Some Records</p>
                                  @else
                                  <p>Topic is not Found</p>
                                  @endif
                              </tr>
                              <?php $i++ ?>
                              @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@stop

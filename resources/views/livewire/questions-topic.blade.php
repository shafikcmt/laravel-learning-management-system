<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Question topic')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Question Topic </h1>

            </div>

            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form" wire:submit.prevent="insertTopic">
                                @if(session()->has('message'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Topic Name</label>
                                    <input type="text" wire:model="topic_name" class="form-control" id="category"
                                        name="batch" placeholder="Enter topic name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="row sameheight-container">


                    <div class="col-md-12">

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
                                                @foreach($qtopics as $qtopic)
                                                <tr>
                                                    <td>{{$qtopic->id}}</td>

                                                    <td>{{$qtopic->topic_title}}</td>

                                                    <td>
                                                        <button class="btn btn-info" wire:click="edit({{$qtopic->id}})"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <button class="btn btn-info" wire:click="delete({{$qtopic->id}})"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </td>

                                                </tr>
                                                @endforeach

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

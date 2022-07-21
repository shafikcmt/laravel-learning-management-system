

        
        @extends('layouts.admin-master')
        @section('title', 'Add Category')
        @section('content')
       
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3 bg-orange">Add Category </h1>

            </div>

            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">

                            <form role="form" method="post" action="{{route('create-category')}}">
                                @if(session()->has('add-category'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('add-category')}}
                                </div>
                                @endif
                                @if(session()->has('delete-category'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('delete-category')}}
                                </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" class="form-control" id="category" name="category_name"
                                        placeholder="Enter Category">
                                    <span class="text-danger">@error('category_name') {{$message}} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
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
                                    <h3 class="title"> Category List </h3>
                                </div>
                                <section class="example">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($categories))
                                                @foreach($categories as $key => $category)
                                                <tr>
                                                    <td>{{$categories->firstItem() + $key}}</td>

                                                    <td>{{$category->category_name}}</td>

                                                    <td>

                                                        <a href="/edit-category/{{$category->id}}"
                                                            class="btn btn-primary"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <a class="btn btn-primary"
                                                            href="/category-delete/{{$category->id}}"
                                                            class="btn btn-info"><i class="fa-solid fa-trash"></i></a>

                                                    </td>

                                                </tr>

                                                @endforeach
                                                @else
                                                <tr>
                                                    <td>Category Not Found !</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        {{$categories->links()}}
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
@stop

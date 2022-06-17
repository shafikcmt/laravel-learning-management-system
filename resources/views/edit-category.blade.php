
       
    
        @extends('layouts.admin-master')
        @section('title', 'Add Category')
        @section('content')
       
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Update Category <a href="/add-category" class="btn btn-info">Category List</a> </h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block sameheight-item">
                                   
                                    <form role="form" method="post" action="{{route('update-category')}}">
                                    @if(session()->has('update-category'))
                                        <div class="alert alert-success" id="alertMessage">
                                          {{session()->get('update-category')}}
                                        </div>
                                    @endif
                                    @csrf
                                    <input type="hidden" name="id" value="{{$categories->id}}">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" id="category" name="category_name" value="{{$categories->category_name}}"  placeholder="Enter Category"> 
                                            <span class="text-danger">@error('category_name') {{$message}} @enderror</span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>

                    </section>

        </article>
    </div>
</div>
@stop

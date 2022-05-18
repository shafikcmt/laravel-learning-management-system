<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Category')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Add Category </h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-8 offset-md-2">
                                <div class="card card-block sameheight-item">
                                   
                                    <form role="form" wire:submit.prevent="insertCategory">
                                    @if(session()->has('message'))
                                        <div class="alert alert-success" id="alertMessage">
                                          {{session()->get('message')}}
                                        </div>
                                    @endif
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" id="category" wire:model="category_name" name="category" placeholder="Enter Category"> 
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
@include('includes.footer')

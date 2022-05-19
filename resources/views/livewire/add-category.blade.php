<div class="main-wrapper">
    <div class="app" id="app">
        @include('livewire.edit')
        @section('title', 'Add Category')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
        <div class="title-block">
                <h1 class="title well p-3">Add Category </h1>
                
            </div>
        
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
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

                        <div class="row sameheight-container">


                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title"> Category List </h3>
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
                                                <?php $i=1; ?>
                                                @foreach($categories as $category)
                                                <tr>
                                                    <td><?php echo $i; ?></td>

                                                    <td>{{$category->category_name}}</td>

                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="edit({{$category->id}})"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <button class="btn btn-info" wire:click="delete({{$category->id}})"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </td>

                                                </tr>
                                                <?php $i++; ?>
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

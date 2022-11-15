@extends('layouts.admin-master')
@section('title', 'Quiz Category')
@section('content') 
<article class="content responsive-tables-page">
    
    <section class="section">

        <div class="row sameheight-container ">
            <div class="col-md-12">
                <div class="card sameheight-item">
                    <div class="card-block">
                        <div class="card-title-block rounded shadow-lg bg-orange">
                            <h3 class="title"> Question Category List </h3>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Course Name</th>
                                            <th>Question Category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach($categories as $key => $category)
                                        <tr>
                                            <td> {{$categories->firstItem() + $key}} </td>
                                            <td>{{$category->name}}   </td>
                                            <td>{{$category->category_name}}</td>
                                            <td>
                                                <a href="/edit-qcategory/{{$category->id}}"
                                                    class="btn btn-primary"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="/delete-qcategory/{{$category->id}}"
                                                    class="btn btn-primary"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
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

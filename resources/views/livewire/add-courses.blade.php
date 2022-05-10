<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Courses')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Courses </h1>

            </div>

            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-8 offset-md-2">
                        <div class="card card-block sameheight-item">
                            <form role="form">
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course full name</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course short
                                        name</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course category</label>
                                    <div class="col-sm-8">
                                        <select class="form-control">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course start date</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="colFormLabel"
                                            placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course end date</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="colFormLabel"
                                            placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course image</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" id="colFormLabel"
                                            placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Course short
                                        name</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="col-form-label">
                                    </div>
                                </div>
                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
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

<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Students')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Students </h1>
                <p class="title-description"> </p>
            </div>
            <section class="section">
                <div class="import-students">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Import Students</label>
                        <input class="form-control" type="file" id="formFile">
                        <center class="mt-3">
                        <input class="btn btn-oval btn-primary" type="submit" value="submit">
                        </center>
                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@include('includes.footer')

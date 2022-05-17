<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Question')
        @include('includes.header')
        @include('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Question </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Topic <span style="color:red">*</span></label>
                                        <select class="form-control" wire:model="topic">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">CATEGORY <span style="color:red">*</span></label>
                                        <select class="form-control" wire:model="category">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">SUB CATEGORY <span style="color:red">*</span></label>
                                        <select class="form-control" wire:model="sub_category">
                                            <option>Option one</option>
                                            <option>Option two</option>
                                            <option>Option three</option>
                                            <option>Option four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">QUESTION TYPE <span style="color:red">*</span></label>
                                        <input type="text" wire:model="question_type" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Marks <span style="color:red">*</span></label>
                                        <input type="text" wire:model="marks" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">IMAGE (OPTIONAL) </label>
                                        <input type="file" wire:model="image" class="form-control" id="colFormLabel" placeholder="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <label for="colFormLabel" class="col-form-label">Question <span style="color:red">*</span></label>
                                        <textarea class="form-control" wire:model="question" name="" id="" cols="30" rows="10"></textarea>


                                    </div>
                                </div>
                        

                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                        <label for="colFormLabel" class="col-form-label">Answer Option <span style="color:red">*</span></label>
                            <input type="text" name="option" wire:model="option1"  class="form-control mb-3" placeholder="Option ....">
                            <input type="text" name="option" wire:model="option2" class="form-control mb-3" placeholder="Option ....">
                            <input type="text" name="option" wire:model="option3" class="form-control mb-3" placeholder="Option ....">
                            <input type="text" name="option" wire:model="option4" class="form-control mb-3" placeholder="Option ....">
                        </div>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">Save Question</button>

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
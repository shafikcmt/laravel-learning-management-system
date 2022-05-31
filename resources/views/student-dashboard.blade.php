<div class="main-wrapper">
    <div class="app" id="app">
    @extends('layouts.master')
    @section('content')
    @include('includes.student-sidebar')
        <article class="content dashboard-page">
            <div class="title-block">
                <h1 class="title well p-3"> {{$data->name}} {{$data->roll}} </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Aptitute </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Aptitute Level-1</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Technical </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Technical Level-1</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Soft Skills </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">

                                        <h3>Soft Skills Level-1</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Reasoning </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Level-1 Reasoning</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Technical </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Technical Level-3</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Soft Skills </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">

                                        <h3>Soft Skills Level-2</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Aptitute </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Aptitute Level-2</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Technical </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Technical Level-2</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Soft Skills </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">

                                        <h3>Soft Skills Level-2</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Aptitute </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Aptitute Level-3</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Technical </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">
                                        <h3>Technical Level-2</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <div class="header-block">
                                            <p class="title">Soft Skills </p>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <img src="images/frontImg.jpg" alt="">
                                    </div>
                                    <div class="card-footer">

                                        <h3>Soft Skills Level-3</h3>
                                        <a href="#" class="btn btn-primary stretched-link">View Course</a>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <!-- <section class="section">
                <div class="row sameheight-container">
                    <div class="col-xl-12">
                        <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                            <div class="card-header bordered">
                                <div class="header-block">
                                    <h3 class="title"> Items </h3>
                                    <a href="item-editor.html" class="btn btn-primary btn-sm"> Add new </a>
                                </div>
                                <div class="header-block pull-right">
                                    <label class="search">
                                        <input class="search-input" placeholder="search...">
                                        <i class="fa fa-search search-icon"></i>
                                    </label>
                                    <div class="pagination">
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fa fa-angle-up"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <ul class="item-list striped">
                                <li class="item item-list-header">
                                    <div class="item-row">
                                        <div class="item-col item-col-header fixed item-col-img xs"></div>
                                        <div class="item-col item-col-header item-col-title">
                                            <div>
                                                <span>Name</span>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-header item-col-sales">
                                            <div>
                                                <span>Sales</span>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-header item-col-stats">
                                            <div class="no-overflow">
                                                <span>Stats</span>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-header item-col-date">
                                            <div>
                                                <span>Published</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col fixed item-col-img xs">
                                            <a href="#">
                                                <div class="item-img xs rounded"
                                                    style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-col item-col-title no-overflow">
                                            <div>
                                                <a href="#" class="">
                                                    <h4 class="item-title no-wrap"> 12 Myths Uncovered About IT &amp;
                                                        Software </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-sales">
                                            <div class="item-heading">Sales</div>
                                            <div> 4958 </div>
                                        </div>
                                        <div class="item-col item-col-stats">
                                            <div class="item-heading">Stats</div>
                                            <div class="no-overflow">
                                                <div class="item-stats sparkline" data-type="bar"></div>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-date">
                                            <div class="item-heading">Published</div>
                                            <div> 21 SEP 10:45 </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col fixed item-col-img xs">
                                            <a href="#">
                                                <div class="item-img xs rounded"
                                                    style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg)">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-col item-col-title no-overflow">
                                            <div>
                                                <a href="#" class="">
                                                    <h4 class="item-title no-wrap"> 50% of things doesn&#x27;t really
                                                        belongs to you </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-sales">
                                            <div class="item-heading">Sales</div>
                                            <div> 192 </div>
                                        </div>
                                        <div class="item-col item-col-stats">
                                            <div class="item-heading">Stats</div>
                                            <div class="no-overflow">
                                                <div class="item-stats sparkline" data-type="bar"></div>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-date">
                                            <div class="item-heading">Published</div>
                                            <div> 21 SEP 10:45 </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col fixed item-col-img xs">
                                            <a href="#">
                                                <div class="item-img xs rounded"
                                                    style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg)">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-col item-col-title no-overflow">
                                            <div>
                                                <a href="#" class="">
                                                    <h4 class="item-title no-wrap"> Vestibulum tincidunt amet laoreet
                                                        mauris sit sem aliquam cras maecenas vel aliquam. </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-sales">
                                            <div class="item-heading">Sales</div>
                                            <div> 2143 </div>
                                        </div>
                                        <div class="item-col item-col-stats">
                                            <div class="item-heading">Stats</div>
                                            <div class="no-overflow">
                                                <div class="item-stats sparkline" data-type="bar"></div>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-date">
                                            <div class="item-heading">Published</div>
                                            <div> 21 SEP 10:45 </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col fixed item-col-img xs">
                                            <a href="#">
                                                <div class="item-img xs rounded"
                                                    style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/why_this/128.jpg)">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-col item-col-title no-overflow">
                                            <div>
                                                <a href="#" class="">
                                                    <h4 class="item-title no-wrap"> 10 tips of Object Oriented Design
                                                    </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-sales">
                                            <div class="item-heading">Sales</div>
                                            <div> 124 </div>
                                        </div>
                                        <div class="item-col item-col-stats">
                                            <div class="item-heading">Stats</div>
                                            <div class="no-overflow">
                                                <div class="item-stats sparkline" data-type="bar"></div>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-date">
                                            <div class="item-heading">Published</div>
                                            <div> 21 SEP 10:45 </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col fixed item-col-img xs">
                                            <a href="#">
                                                <div class="item-img xs rounded"
                                                    style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/w7download/128.jpg)">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-col item-col-title no-overflow">
                                            <div>
                                                <a href="#" class="">
                                                    <h4 class="item-title no-wrap"> Sometimes friend tells it is cold
                                                    </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-sales">
                                            <div class="item-heading">Sales</div>
                                            <div> 10214 </div>
                                        </div>
                                        <div class="item-col item-col-stats">
                                            <div class="item-heading">Stats</div>
                                            <div class="no-overflow">
                                                <div class="item-stats sparkline" data-type="bar"></div>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-date">
                                            <div class="item-heading">Published</div>
                                            <div> 21 SEP 10:45 </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="item-row">
                                        <div class="item-col fixed item-col-img xs">
                                            <a href="#">
                                                <div class="item-img xs rounded"
                                                    style="background-image: url(../../s3.amazonaws.com/uifaces/faces/twitter/pankogut/128.jpg)">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="item-col item-col-title no-overflow">
                                            <div>
                                                <a href="#" class="">
                                                    <h4 class="item-title no-wrap"> New ways of conceptual thinking
                                                    </h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-sales">
                                            <div class="item-heading">Sales</div>
                                            <div> 3217 </div>
                                        </div>
                                        <div class="item-col item-col-stats">
                                            <div class="item-heading">Stats</div>
                                            <div class="no-overflow">
                                                <div class="item-stats sparkline" data-type="bar"></div>
                                            </div>
                                        </div>
                                        <div class="item-col item-col-date">
                                            <div class="item-heading">Published</div>
                                            <div> 21 SEP 10:45 </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
            <section class="section map-tasks">
                <div class="row sameheight-container">
                    <div class="col-md-8">
                        <div class="card sameheight-item" data-exclude="xs,sm">
                            <div class="card-header">
                                <div class="header-block">
                                    <h3 class="title"> Students by countries </h3>
                                </div>
                            </div>
                            <div class="card-block">
                                <div id="dashboard-sales-map" style="width: 100%; height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card tasks sameheight-item" data-exclude="xs,sm">
                            <div class="card-header bordered">
                                <div class="header-block">
                                    <h3 class="title"> Tasks </h3>
                                </div>
                                <div class="header-block pull-right">
                                    <a href="#" class="btn btn-primary btn-sm rounded pull-right"> Add new </a>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="tasks-block">
                                    <ul class="item-list">
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox" checked="checked">
                                                        <span>Meeting with embassador</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox" checked="checked">
                                                        <span>Confession</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Time to start building an ark</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Beer time with dudes</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox" checked="checked">
                                                        <span>Meeting new girls</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Remember damned home address</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Get home before you got sleep</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox" checked="checked">
                                                        <span>Meeting with embassador</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox" checked="checked">
                                                        <span>Confession</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Time to start building an ark</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Beer time with dudes</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox" checked="checked">
                                                        <span>Meeting new girls</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="item-row">
                                                <div class="item-col item-col-title">
                                                    <label>
                                                        <input class="checkbox" type="checkbox">
                                                        <span>Remember damned home address</span>
                                                    </label>
                                                </div>
                                                <div class="item-col fixed item-col-actions-dropdown">
                                                    <div class="item-actions-dropdown">
                                                        <a class="item-actions-toggle-btn">
                                                            <span class="inactive">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                            <span class="active">
                                                                <i class="fa fa-chevron-circle-right"></i>
                                                            </span>
                                                        </a>
                                                        <div class="item-actions-block">
                                                            <ul class="item-actions-list">
                                                                <li>
                                                                    <a class="remove" href="#" data-toggle="modal"
                                                                        data-target="#confirm-modal">
                                                                        <i class="fa fa-trash-o "></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="check" href="#">
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="edit" href="item-editor.html">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        </article>
        
        <div class="modal fade" id="modal-media">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Media Library</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body modal-tab-container">
                        <ul class="nav nav-tabs modal-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                            </li>
                        </ul>
                        <div class="tab-content modal-tab-content">
                            <div class="tab-pane fade" id="gallery" role="tabpanel">
                                <div class="images-container">
                                    <div class="row"> </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                <div class="upload-container">
                                    <div id="dropzone">
                                        <form action="https://modularcode.io/" method="POST"
                                            enctype="multipart/form-data" class="dropzone needsclick dz-clickable"
                                            id="demo-upload">
                                            <div class="dz-message-block">
                                                <div class="dz-message needsclick"> Drop files here or click to upload.
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Insert Selected</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="confirm-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-warning"></i> Alert</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to do this?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
@stop
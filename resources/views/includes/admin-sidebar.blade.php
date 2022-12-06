<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo">
                  <img src="{{asset('images/fav.png')}}" alt="">
                </div> <a style="text-decoration:none" href="/admin-dashboard">Gportal Admin</a> </div>
        </div>
      
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li class="active">
                    <a href="/admin-dashboard">
                        <i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-th-large"></i> Students Info
                        <i class="fa arrow"></i>
                    </a> 
                    <ul class="sidebar-nav">
                        <li>
                            <a href="/all-student"> Students List </a>
                        </li>
                        <li>
                            <a href="/add-students"> Add Students </a>
                        </li>

                        <li>
                            <a href="/import-page"> Import Students </a>
                        </li>

                        <!-- <li>
                            <a href="/check-password"> Check Password </a>
                        </li> -->
                        
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-area-chart"></i> Courses
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="/add-category"> Add Category </a>
                        </li>
                        <li>
                            <a href="/add-batch"> Add Batch </a>
                        </li>
                        <li>
                            <a href="/add-courses"> Add Courses </a>
                        </li>
                        <li>
                            <a href="/course-mapping"> Course Mapping </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-table"></i> Quiz
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                    <li>
                            <a href="/questions-category"> Quiz Category </a>
                        </li>
                        <li>
                            <a href="/questions-topic"> Add Quiz </a>
                        </li>
                        <li>
                            <a href="/add-question"> Add Question </a>
                        </li>
                       
                        <li>
                            <a href="/question-bulk-import"> Question Bulk Import </a>
                        </li>
                        <li>
                            <a href="/questions-bank"> Question Bank </a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="forms.html">
                        <i class="fa fa-pencil-square-o"></i> Results </a>
                        <ul class="sidebar-nav">
                        <li>
                            <a href="/quiz-all-results">All Quiz Results</a>
                        </li>
                        <li>
                            <a href="/results-quiz-wise"> Quiz Wise</a>
                        </li>
                        <li>
                            <a href="/results-batch-wise"> Batch Wise</a>
                        </li>
                        <li>
                            <a href="/results-date-wise"> Date Wise</a>
                        </li>
                    </ul>
                </li> 
            </ul>
        </nav>
    </div>
    
</aside>
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
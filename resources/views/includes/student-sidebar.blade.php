<aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <div class="logo">
                                   <img src="{{asset('images/fav.png')}}" alt="logo">
                                </div> Student Dashboard</div>
                        </div>
                        <!-- <header class="header">
                            <div class="header-block header-block-collapse d-lg-none d-xl-none">
                                <button class="collapse-btn" id="sidebar-collapse-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </header> -->
                        <nav class="menu">
                       
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li class="active">
                                    <a href="/student-dashboard">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li>
                                    <a href="/student-profile/{{$data['id']}}">
                                        <i class="fa fa-user"></i> Personal Details </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th-large"></i> Quiz Results
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                             <a href="/student-result"> Result </a> 
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                <a href="/drive-skills">
                                        <i class="fa fa-area-chart"></i> Drive Skills
                                        <i class="fa arrow"></i>
                                    </a>
                                </li>
                                <li>   
                                <a href="/assessment-work">
                                        <i class="fa fa-book"></i> Assessments Works
                                        <i class="fa arrow"></i>
                                    </a>
                                </li>
                                <li>   
                                <a href="/technical-work">
                                        <i class="fa fa-certificate"></i> Technical Work
                                        <i class="fa arrow"></i>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-area-chart"></i> Charts
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="charts-flot.html"> Flot Charts </a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html"> Morris Charts </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-table"></i> Tables
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="static-tables.html"> Static Tables </a>
                                        </li>
                                        <li>
                                            <a href="responsive-tables.html"> Responsive Tables </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <a href="forms.html">
                                        <i class="fa fa-pencil-square-o"></i> Forms </a>
                                </li> -->
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-desktop"></i> UI Elements
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="buttons.html"> Buttons </a>
                                        </li>
                                        <li>
                                            <a href="cards.html"> Cards </a>
                                        </li>
                                        <li>
                                            <a href="typography.html"> Typography </a>
                                        </li>
                                        <li>
                                            <a href="icons.html"> Icons </a>
                                        </li>
                                        <li>
                                            <a href="grid.html"> Grid </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-file-text-o"></i> Pages
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="login.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="signup.html"> Sign Up </a>
                                        </li>
                                        <li>
                                            <a href="reset.html"> Reset </a>
                                        </li>
                                        <li>
                                            <a href="error-404.html"> Error 404 App </a>
                                        </li>
                                        <li>
                                            <a href="error-404-alt.html"> Error 404 Global </a>
                                        </li>
                                        <li>
                                            <a href="error-500.html"> Error 500 App </a>
                                        </li>
                                        <li>
                                            <a href="error-500-alt.html"> Error 500 Global </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-sitemap"></i> Menu Levels
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="#"> Second Level Item
                                                <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"> Second Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Second Level Item
                                                <i class="fa arrow"></i>
                                            </a>
                                            <ul class="sidebar-nav">
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item </a>
                                                </li>
                                                <li>
                                                    <a href="#"> Third Level Item
                                                        <i class="fa arrow"></i>
                                                    </a>
                                                    <ul class="sidebar-nav">
                                                        <li>
                                                            <a href="#"> Fourth Level Item </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> Fourth Level Item </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                               -->
                            </ul>
                        </nav>
                    </div>
                   
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
<header class="header">
                    <!-- <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div> -->
                   
                   
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" style="background-image: url('{{asset('/images/avatar.jpg')}}')"> </div>
                                    <span class="name"> {{$data->name}} </span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="/student-profile/{{$data['id']}}">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                     <!-- <a class="dropdown-item" href="#">
                                        <i class="fa fa-gear icon"></i> Settings </a>  -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/student-logout">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
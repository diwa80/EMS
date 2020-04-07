

<header class="header white-bg">
          <div class="sidebar-toggle-box">
              <i class="fa fa-bars"></i>
          </div>
          <!--logo start-->
          <a href="index-2.html" class="logo">E<span>M</span>S</a>
          <!--logo end-->
        
          <div class="top-nav ">
              <!--search & user info start-->
              <ul class="nav float-right top-menu">
                 
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="{{asset(Auth::user()->avatar)}}"  width ="60px" height ="40px";>
                          <span class="username"> {{ Auth::user()->name }}</span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout dropdown-menu-right">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="#"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                 
                  <!-- user login dropdown end -->
              </ul>
              <!--search & user info end-->
          </div>
      </header>

   
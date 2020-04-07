<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="{{ route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li>
                      <a href="{{ route('employee_infos') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Employee Details</span>
                      </a>
                  </li>

                  
                  <li class="sub-menu">
                      <a href="#">
                          <i class="fa fa-laptop"></i>
                          <span>Users and Role</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('users') }}">Users</a></li> 
                      </ul>

                      <ul class="sub">
                          <li><a  href="#">Roles</a></li> 
                      </ul>
                  </li>
                  

                  <li>
                      <a href="{{ route('profile') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Profile</span>
                      </a>
                  </li>

                  

                  <li class="sub-menu">
                      <a href="#">
                          <i class="fa fa-laptop"></i>
                          <span>Leave</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('apply-leave/create')}}">Apply Leave</a></li> 
                      </ul>

                      <ul class="sub">
                          <li><a  href="{{route('apply-leave')}}">Leave List</a></li> 
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="#">
                          <i class="fa fa-laptop"></i>
                          <span>Tasks</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ route('users') }}">Assign Task</a></li> 
                      </ul>

                      <ul class="sub">
                          <li><a  href="#">Task Assigned</a></li> 
                      </ul>
                  </li>

                
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
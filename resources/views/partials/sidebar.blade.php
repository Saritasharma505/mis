<div class="app-sidebar__overlay sidebar" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" height="60px" width="60px;" src="{{ URL::asset('images/mm.jpg') }}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">{{Auth::user()->email}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('/dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
         <li><a class="app-menu__item active" href="{{url('/user-details')}}"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User Profile</span></a></li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">User Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a> -->
          <!-- <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul> -->
        </li>
          <li><a class="app-menu__item" href="{{url('/leave')}}"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Leave Request</span></a></li>
        <li><a class="app-menu__item " href="{{url('/on-duty')}}"><i class="app-menu__icon fa fa-tag "></i><span class="app-menu__label">On-Duty</span></a></li>
         <li><a class="app-menu__item" href="{{url('/attendance')}}"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Attendance</span></a></li>
          <li><a class="app-menu__item" href="{{url('/conveyance')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Conveyance</span></a></li>
            <li><a class="app-menu__item" href="{{url('/hall-of-fame')}}"><i class="app-menu__icon fa fa-trophy"></i><span class="app-menu__label">Hall OF Fame</span></a></li>
             <li><a class="app-menu__item" href="{{url('/photo-album')}}"><i class="app-menu__icon fa fa-file-image-o"></i><span class="app-menu__label">Photo Album</span></a></li>
              <li><a class="app-menu__item" href="{{url('/photo-album')}}"><i class="app-menu__icon fa fa-comment"></i><span class="app-menu__label">Feedback</span></a></li>
      </ul>
    </aside>
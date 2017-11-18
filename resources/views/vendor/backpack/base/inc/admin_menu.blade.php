
<li><a href="{{ backpack_url('trip') }}"><i class="fa fa-bus"></i> <span>Trips</span></a></li>

<li class="treeview">
    <a href="#"><i class="fa fa-road"></i> <span>Traffic Updates</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('userupdate') }}"><i class="fa fa-map-o"></i> <span>User Updates</span></a></li>
      <li><a href="{{ backpack_url('trafficupdate') }}"><i class="fa fa-road"></i> <span>Traffic Updates</span></a></li>
    </ul>
</li>

<li><a href="{{ backpack_url('incident') }}"><i class="fa fa-warning"></i> <span>Incidents</span></a></li>

<li><a href="{{ backpack_url('feedback') }}"><i class="fa fa-feed"></i> <span>Feedback</span></a></li>

<li><a href="#"><i class="fa fa-bell"></i> <span>Notifications</span></a></li>

<li><a href="#"><i class="fa fa-credit-card"></i> <span>Subscriptions</span></a></li>

<li><a href="{{ backpack_url('payment') }}"><i class="fa fa-money"></i> <span>Payments</span></a></li>

<!-- Users, Roles Permissions -->
<li class="treeview">
  <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
    <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
    <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
  </ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
      <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
      <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
      <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
</li>
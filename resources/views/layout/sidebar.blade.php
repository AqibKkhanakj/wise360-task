<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="{{route('home.show')}}" class="brand-link">
		<span class="brand-text font-weight-light ml-1"><strong>Task Management System</strong></span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('dashboard.show')}}" class="nav-link">
                            <i class="nav-icon  fas fa-desktop"></i>
                            <p>Dashboard</p>
                        </a>																
                    </li>
				<li class="nav-item">
					<a href="{{route('user.show')}}" class="nav-link">
						<i class="nav-icon  fas fa-users"></i>
						<p>Users List</p>
					</a>																
				</li>
				<li class="nav-item">
					<a href="{{route('task.create')}}" class="nav-link">
						<i class="nav-icon  fas fa-comment-alt"></i>
						<p>Assign Task</p>
					</a>																
				</li>
				<li class="nav-item">
					<a href="{{route('tasklist.show')}}" class="nav-link">
						<i class="nav-icon  fas fa-file-alt"></i>
						<p>Task List</p>
					</a>																
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-user-edit"></i>
						<p>Change Status</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-bell"></i>
						<p>Notification</p>
					</a>
				</li>						
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
 </aside>
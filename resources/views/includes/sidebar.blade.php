<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="{{ route('home') }}"> </a>
		</div>
		
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="@if ($title == 'Home Dashboard') active @endif">
				<a class="nav-link" href="{{ route('home') }}">
					<i class="fas fa-home"></i><span>Home</span>
				</a>
			</li>
		@if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
			<li class="@if ($title == 'Jadwal') active @endif">
				<a class="nav-link" href="{{ route('schedule.show') }}">
					<i class="fas fa-building"></i><span>Jadwal</span>
				</a>
			</li>	
			@endif
			
		</ul>
	
	</aside>
</div>
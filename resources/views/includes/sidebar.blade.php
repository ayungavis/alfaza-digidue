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
		
			
		
			<li class="dropdown @if (strpos($title, 'Jadwal')) active @endif">
				<a href="#" class="nav-link has-dropdown">
					<i class="fas fa-book"></i><span>Jadwal</span>
				</a>
				<ul class="dropdown-menu">
					<li class="@if ($title == 'Jadwal') active @endif">
						<a class="nav-link" href="{{ route('schedule.show') }}">
							<i class="fas fa-calendar"></i><span>Jadwal</span>
						</a>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="@if ($title == 'Jadwal Revisi') active @endif">
						<a class="nav-link" href="{{ route('schedule.show.revision') }}">
							<i class="fas fa-calendar"></i><span>Pengajuan Jadwal</span>
						</a>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="@if ($title == 'Jadwal ROB') active @endif">
						<a class="nav-link" href="{{ route('schedule.show.ROB') }}">
							<i class="fas fa-calendar"></i><span>Jadwal ROB</span>
						</a>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="@if ($title == 'Jadwal ROM') active @endif">
						<a class="nav-link" href="{{ route('schedule.show.ROM') }}">
							<i class="fas fa-calendar"></i><span>Jadwal ROM</span>
						</a>
					</li>
				</ul>
				<ul class="dropdown-menu">
					<li class="@if ($title == 'Jadwal ROH') active @endif">
						<a class="nav-link" href="{{ route('schedule.show.ROH') }}">
							<i class="fas fa-calendar"></i><span>Jadwal ROH</span>
						</a>
					</li>
				</ul>
			</li>

		</ul>

	</aside>
</div>
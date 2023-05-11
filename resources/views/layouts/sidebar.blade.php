<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">AdminKit</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						main
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('dashboard')}}">
							<i class="align-middle" data-feather="home"></i> 
							<span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('Grache.index')}}">
							<i class="fa fa-parking"></i>
							<span class="align-middle">Graches</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('Place.index')}}">
							<i class="fa fa-parking"></i>
							<span class="align-middle">Places</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('Ticket.index')}}">
							<i class="fa fa-parking"></i>
							<span class="align-middle">Tickets</span>
						</a>
					</li>

					<li class="sidebar-header">
						setting
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
							<i class="fab fa-sign-out"></i>
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</li>
				
				</ul>
			</div>
		</nav>
<nav class="navbar shadow-sm bg-white navbar-expand-md navbar-light p-3 sticky-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="{{ url('/') }}">
		@yield('page-name')
	</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<!-- Left Side Of Navbar -->
		<ul class="navbar-nav mr-auto">

		</ul>
		<!-- Right Side Of Navbar -->
		<ul class="navbar-nav ml-auto">
			<!-- Authentication Links -->
			@guest
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			</li>
			@if (Route::has('register'))
			<li class="nav-item">
				<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			</li>
			@endif
			@else
			
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					<i class="far fa-bell"></i> <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<p class="m-1 pl-1 font-weight-bold">Notificações</p>
					@for ($i = 0; $i < 5 ; $i++)
					<a class="dropdown-item p-3" href="{{ route('dashboard') }}">
						{{ 'Exemplo de Notificação ' . $i }}
					</a>
					@endfor
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->name }} <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class=" p-3" href="#">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-2 p-0">
									<img class="fluid-img" src="{{asset('images/icons/house.svg')}}">
								</div>
								<div class="col-6 text-left pt-1 align-middle">
									{{'Início'}}
								</div>
							</div>
						</div>
					</a>
					<a class="dropdown-item" href="#"><i class="fas fa-home mr-1"></i> Minhas simulações</a>
					<a class="dropdown-item" href="#"><i class="fas fa-home mr-1"></i> Configurações</a>
					<a class="dropdown-item" href="#"><i class="fas fa-home mr-1"></i> Sobre o App</a>
					<a class="dropdown-item" href="#"><i class="fas fa-home mr-1"></i> Suporte</a>
					<a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }} </a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
			@endguest
		</ul>
	</div>
</nav>
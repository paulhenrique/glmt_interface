@extends('layouts.main')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 m-auto pt-5">
			<div class="container col-md-9 m-auto text-center">
				<div class="col-md-4 m-auto pb-4">
					<img class="img-fluid" src="{{asset('images/icons/shield.svg')}}">
				</div>
				<h2 class="mb-5">Entrando na sua conta</h2>
				<form method="POST" action="{{ route('login') }}" class="">
					@csrf
					<div class="form-group row">
						<label for="email" class="">{{ __('E-mail') }}</label>
						<input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ex: jose.silva@gmail.com">
						@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group row">
						<label for="password" class="">{{ __('Password') }}</label>

						<input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

						@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
					<div class="form-group row p-0">
						<div class="col-md-7 text-left">
							<div class="custom-control custom-checkbox pl-3">
								<input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

								<label class="custom-control-label" for="remember">
									{{ __('Mantenha-me conectado') }}
								</label>
							</div>
						</div>
						<div class="col text-md-right">
							@if (Route::has('password.request'))
							<a class="btn btn-link " href="{{ route('password.request') }}">
								{{ __('Esqueci minha senha') }}
							</a>
							@endif	
						</div>
					</div>
					{{-- ===================== TODO ==================== --}}
					{{-- AJUSTAR A POSIÇÃO DO LINK DE ESQUECI MINHA SENHA --}}
					<div class="form-group row mb-0 text-right">
						<button type="submit" class="btn btn-primary pt-3 pb-3 btn-lg col-md-12 rounded shadow">
							{{ __('Entrar') }}
						</button>
					</div>
				</form>
			</div>
		</div>
		<div cclass="col-md-6">

		</div>
	</div>
</div>
@endsection

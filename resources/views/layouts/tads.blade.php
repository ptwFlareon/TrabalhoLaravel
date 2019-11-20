<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>{{config('app.name')}} @yield('title', 'Minha APP')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			@yield('custom-style')
		</style>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="/">HOME</a></li>
			</ul>
		</nav>
		<div class="conteudo">
			@yield('conteudo')
		</div>

		<footer>
			powered by TADS
		</footer>
	</body>
</html>
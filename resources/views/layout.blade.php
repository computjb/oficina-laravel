<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $titulo }}</title>
  <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('img/glyphicons-halflings.png')}}">
  <link rel="stylesheet" href="">
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">{{$titulo}}</a>
    <ul class="nav">
      <li><a href="/">Início</a></li>
      <li><a href="/cliente/create">Cadastrar</a></li>
      <li><a href="/clientes">Listar</a></li>
      <!-- <li><a href="#">Link</a></li> -->
    </ul>
  </div>
</div>	
<div class="container">
	@yield('conteudo')
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
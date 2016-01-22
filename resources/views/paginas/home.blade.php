@extends('layout')

@section('title')
Bem vindo
@endsection

@section('conteudo')
<div class="row">
	<div class="row">
		<div class="span10 offset1 hero-unit">			
			<h1>Projeto Beta MedCenter</h1>
			<br><br>
			<div class="row">
				<div class="span8 offset3"> 
					<a href="/cliente/create" class="btn btn-primary"> Cadastrar novo cliente</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
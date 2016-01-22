@extends('layout')

@section('conteudo')

<div class="row">
	@if(Session::has('mensagem'))
		@if(Session::get('mensagem') == "Atualizado com sucesso!")
		<div class="span12">
			<div class="alert alert-success">
				{{Session::get('mensagem')}}
			</div>
		</div>
		@endif
	@endif
</div>


<div class="row">
	<div class="span12">
		<table class="table table-bordered">
			<thead>
				<tr> 
					<th>Nome</th> 
					<th>Email</th> 
					<th>Cidade</th> 
					<th>Estado</th> 
					<th>Ações</th> 
				</tr> 
			</thead> 

			<tbody> 

				@foreach( $listar as $lista)	
				<tr> 

					<td>{{ $lista->tb_nome }}</td> 
					<td>{{ $lista->tb_email }}</td>
					<td>{{ $lista->tb_cidade }}</td> 
					<td>{{ $lista->tb_estado }}</td>
					<td>
						<a href="/cliente/editar/{{$lista->id}}" class="btn btn-primary btn-sm">Editar</a>
						<a href="/cliente/deletar/{{$lista->id}}" class="btn btn-danger btn-sm">Deletar</a>
						<a href="/cliente/listar/{{$lista->id}}" class="btn btn-success btn-sm">Ver</a>
					</td>
				</tr>	

				@endforeach

			</tbody> 
		</table>
	</div>
</div>
@stop
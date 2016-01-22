@extends('layout')

@section('conteudo')

@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		{{ $error }}<br>
	@endforeach
@endif	

@if(Session::has('mensagem'))
	{{Session::get('mensagem')}}
@endif


<table class="table table-bordered">
	<thead>
		<tr> 
			<th>Informações:</th> 
			<th>Valores</th> 
		</tr> 
	</thead> 
	<tbody> 

		<tr> 
			<td>Nome</td> 
			<td>{{ $cliente->tb_nome}}</td> 
		</tr>
		<tr> 
			<td>Data de Nascimento</td>
			<td>{{ date('d/m/Y', strtotime($cliente->tb_data_nascimento ))}}</td>
		</tr>
		<tr> 
			<td>E-mail</td>
			<td>{{ $cliente->tb_email}}</td>
		</tr>
		<tr> 
			<td>RG</td>
			<td>{{ $cliente->tb_rg}}</td>
		</tr>
		<tr> 
			<td>CPF</td>
			<td>{{ $cliente->tb_cpf}}</td>
		</tr>
		<tr> 
			<td>País</td> 
			<td>{{ $cliente->tb_pais}}</td> 
		</tr>

		<tr> 
			<td>Estado</td> 
			<td>{{ $cliente->tb_estado}}</td> 
		</tr>
		<tr> 
			<td>Cidade</td>
			<td>{{ $cliente->tb_cidade}}</td>
		</tr>
		<tr> 
			<td>Bairro</td>
			<td>{{ $cliente->tb_bairro}}</td>
		</tr>
		<tr> 
			<td>Logradouro</td>
			<td>{{ $cliente->tb_endereco}}</td>
		</tr>
	</tbody> 
</table>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Deletar: {{$cliente->nome}} ?</h4>
      </div>
      <div class="modal-body">
        Lembre-se que ao deletar o(a) cliente {{$cliente->nome}}, você irá retirá-lo(a) permanentemente da nossa base de dados.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Deletar</button>
      </div>
    </div>
  </div>
</div>




@stop
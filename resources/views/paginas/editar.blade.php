@extends('layout')

@section('conteudo')
<div class="row">

	
	<div class="row">
		<div class="span10 offset1 hero-unit">

			@if(count($errors) > 0)
				@foreach($errors->all() as $error)
					{{ $error }}<br>
				@endforeach
			@endif	

			@if(Session::has('mensagem'))
				{{Session::get('mensagem')}}
			@endif

			{!! Form::open( ['url'=>"cliente/update/$cliente->id", 'class' => 'form-horizontal','role'=>'form','method'=>'POST' ] ) !!}

			<div class="span8">
				<div class="control-group">	
					<div class="controls controls-row">
						<legend>Formulário de edição para clientes MedCenter:</legend>
						<label>Todos os campos com * são obrigatórios</label>
					</div>
				</div>
			</div>

			<div class="span8">
				<div class="control-group">					
					<div class="controls controls-row">
						<label>Nome completo:</label>
						<input class="span6" type="text" name="nome" value="{{ $cliente->tb_nome}}">
					</div>
				</div>
			</div>

			<div class="span8">
				<div class="control-group">					
					<div class="controls controls-row">
						<label>Data de nascimento</label>
						<input class="span6" type="date" name="dataNasc" 
						value="{{ date('d/m/Y', strtotime($cliente->tb_data_tb_nascimento ))}}" placeholder="Data de Nascimento">
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="control-group">						
					<div class="controls controls-row">
						<label>E-mail</label>
						<input class="span6" type="text" name="email" value="{{$cliente->tb_email}}" placeholder="Digite seu e-mail">
					</div>
				</div>
			</div>

			<div class="span3">
				<div class="control-group">
					<div class="controls controls-row">
						<label>RG:</label>
						<input class="" type="text" name="rg" value="{{$cliente->tb_rg}}" placeholder="Ex: 123456789">
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="control-group">
					<div class="controls controls-row">
						<label>CPF:</label>
						<input class="" type="text" name="cpf" value="{{$cliente->tb_cpf}}" placeholder="Ex: 12345678911">
					</div>
				</div>
			</div>

			<div class="span3">
				<div class="control-group">
					<div class="controls controls-row">
						<label>País</label>
						<input class="" type="text" name="pais" value="{{$cliente->tb_pais}}" placeholder="Ex: Brasil">
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="control-group">
					<div class="controls controls-row">			
						<label>Estado</label>
						<select name="estado">
							<option value="{{$cliente->tb_estado}}">{{$cliente->tb_estado}}</option>
							<option value="AC">Acre</option> 
							<option value="AL">Alagoas</option> 
							<option value="AM">Amazonas</option> 
							<option value="AP">Amapá</option> 
							<option value="BA">Bahia</option> 
							<option value="CE">Ceará</option> 
							<option value="DF">Distrito Federal</option> 
							<option value="ES">Espírito Santo</option> 
							<option value="GO">Goiás</option> 
							<option value="MA">Maranhão</option> 
							<option value="MT">Mato Grosso</option> 
							<option value="MS">Mato Grosso do Sul</option> 
							<option value="MG">Minas Gerais</option> 
							<option value="PA">Pará</option> 
							<option value="PB">Paraíba</option> 
							<option value="PR">Paraná</option> 
							<option value="PE">Pernambuco</option> 
							<option value="PI">Piauí</option> 
							<option value="RJ">Rio de Janeiro</option> 
							<option value="RN">Rio Grande do Norte</option> 
							<option value="RO">Rondônia</option> 
							<option value="RS">Rio Grande do Sul</option> 
							<option value="RR">Roraima</option> 
							<option value="SC">Santa Catarina</option> 
							<option value="SE">Sergipe</option> 
							<option value="SP">São Paulo</option> 
							<option value="TO">Tocantins</option> 
						</select>
					</div>
				</div>
			</div>

			<div class="span3">
				<div class="control-group">
					<div class="controls controls-row">
						<label>Cidade:</label>
						<input class="" type="text" name="cidade" value="{{$cliente->tb_cidade}}" placeholder="Ex: Imperatriz">
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="control-group">
					<div class="controls controls-row">			
						<label>Bairro:</label>
						<input class="" type="text" name="bairro" value="{{$cliente->tb_bairro}}" placeholder="Ex: Vila Lobão">
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="control-group">
					<div class="controls controls-row">
						<label>Logradouro: </label>
						<input class="span6" type="text" name="logradouro" value="{{$cliente->tb_endereco}}" placeholder="(Rua, Avenida , etc...)">
						<input class="span6" type="hidden" name="updated_at" value="" placeholder="(Rua, Avenida , etc...)">
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="control-group">
					<div class="controls">
						<input type="hidden" name="enviar">
						<button type="submit" class="btn btn-primary">Editar</button>
					</div>
				</div>
			</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>



@stop
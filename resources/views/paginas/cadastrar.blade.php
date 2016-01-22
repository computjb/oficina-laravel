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
			
			{!! Form::open( ['url'=>'cliente/store', 'class' => 'form-horizontal','role'=>'form','method'=>'POST' ] ) !!}

			<div class="span8">
				<div class="control-group">	
					<div class="controls controls-row">
						<legend>Formulário cadastro para clientes MedCenter:</legend>
						<label>Todos os campos com * são obrigatórios</label>
					</div>
				</div>
			</div>

			<div class="span8">
				<div class="control-group">					
					<div class="controls controls-row">
						<label>Nome completo:</label>
						<input class="span6" type="text" name="nome" placeholder="Nome completo">
					</div>
				</div>
			</div>

			<div class="span8">
				<div class="control-group">					
					<div class="controls controls-row">
						<label>Data de nascimento</label>
						<input class="span6" type="date" name="dataNasc" placeholder="Ex: 01/01/1990">
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="control-group">						
					<div class="controls controls-row">
						<label>E-mail</label>
						<input class="span6" type="text" name="email" placeholder="Digite seu e-mail">
					</div>
				</div>
			</div>

			<div class="span3">
				<div class="control-group">
					<div class="controls controls-row">
						<label>RG:</label>
						<input class="" type="text" name="rg" placeholder="Ex: 123456789">
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="control-group">
					<div class="controls controls-row">
						<label>CPF:</label>
						<input class="" type="text" name="cpf" placeholder="Ex: 12345678911">
					</div>
				</div>
			</div>

			<div class="span3">
				<div class="control-group">
					<div class="controls controls-row">
						<label>País</label>
						<input class="" type="text" name="pais" placeholder="Ex: Brasil">
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="control-group">
					<div class="controls controls-row">			
						<label>Estado</label>
						<select name="estado">
							<option value="">Estado</option>
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
						<input class="" type="text" name="cidade" placeholder="Ex: Imperatriz">
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="control-group">
					<div class="controls controls-row">			
						<label>Bairro:</label>
						<input class="" type="text" name="bairro" placeholder="Ex: Vila Lobão">
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="control-group">
					<div class="controls controls-row">
						<label>Logradouro: </label>
						<input class="span6" type="text" name="logradouro" placeholder="(Rua, Avenida , etc...)">
					</div>
				</div>
			</div>

			<div class="span12">
				<div class="control-group">
					<div class="controls">
						<input type="hidden" name="enviar">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</div>
			</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>



@stop
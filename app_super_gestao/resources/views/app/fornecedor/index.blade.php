	<h3>Fornecedores index</h3>

	{{-- @dd($fornecedor) --}}


@isset($fornecedor)
			
		@foreach ($fornecedor as $indice => $fornecedores)
											
			Fornecedor: {{ $fornecedores['nome'] }}<br>
			Status:  {{ $fornecedores['Status'] }} <br>
			Cnpj: {{ $fornecedores['cnpj'] }}<br>
			Telefone: ({{ $fornecedores['ddd'] ?? '' }}) 
			{{ $fornecedores['telefone'] ?? '' }}<br>
			<hr>
		@endforeach
	@endisset

<!-- // ISSET - SE EXISTE VARIÁVEL -->



{{-- OPERADOR "FOR" 
	@isset($fornecedor)

		@for ($i = 0; isset($fornecedor[$i]); $i++)
			Fornecedor: {{ $fornecedor[$i]['nome'] }}<br>
			Status:  {{ $fornecedor[$i]['Status'] }} <br>
			Cnpj: {{ $fornecedor[$i]['cnpj'] }}<br>
			Telefone: ({{ $fornecedor[$i]['ddd'] ?? '' }}) 
			{{ $fornecedor[$i]['telefone'] ?? '' }}<br>
			<hr>
		@endfor	

	@endisset


--}}


	

	{{-- 
	@if(count($fornecedor) > 0 && count($fornecedor) < 10)
	<h3>Existem apenas alguns fornecedores</h3>
	@elseif(count($fornecedor) > 10)
	<h3>Existem mais de 10 fornecedores</h3>
	@else
	 <h3>Ainda não existe fornecedores cadastrados</h3>
	@endif
	--}}



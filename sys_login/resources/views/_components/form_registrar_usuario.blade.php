<h3>Registro de Usuarios</h3>
<form action="{{'registrarUsuario'}}" method="post">
	@csrf
	<input type="text" name="nome" placeholder="Nome do Usuario">
	<input type="text" name="email" placeholder="Email do Usuario">
	<br>
    <button type="submit" class="borda-preta">Registrar Usuario</button>
</form>
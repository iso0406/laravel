<h3>É necessário registrar todos os campos para ter acesso ao sistema</h3>
<form action="{{'registrarAcesso'}}" method="post">
	@csrf
	<input name="nome" type="text" placeholder="Nome" required="Campo Obrigatório">
    <br>
    <input name="email" type="text" placeholder="Email">
    <br>
    <input name="login" type="text" placeholder="Login" required="Campo Obrigatório">
    <br>
    <input name="senha"  type="password" placeholder="Senha" required="Campo Obrigatório">
    <br>
    <button type="submit" class="borda-preta">Registrar-se</button>
</form>
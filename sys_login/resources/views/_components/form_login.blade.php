 

 <form action="{{route('login')}}" method="post">
    @csrf
    <input name="login" type="text" placeholder="Login" class="borda-preta">
    <br>
    <input name="senha"  type="password" placeholder="Senha" class="borda-preta">
    <br>
    <button type="submit" class="borda-preta">Acessar</button>
</form>

<a href="{{'registrar'}}">Registrar para ter acesso</a> - 
<a href="{{'registrarUsuario'}}">Registrar de Usuario</a>
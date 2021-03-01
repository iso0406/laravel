{{--    extende do temnplate básico--}}
@extends('site.layouts.basico')
{{-- nome da sessão que irá aparecer na view principal--}}

@section('titulo', 'Home')

@section('conteudo')

    

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="{{ asset('/img/check.png') }}">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="{{ asset('img/check.png') }}">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{ asset('img/player_video.jpg') }}">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                        @component('site.layouts._component.form_contato')
                        @endcomponent
                    </div>
                </div>
            </div>

            <div class="rodape">
                <div class="redes-sociais">
                    <h2>Redes sociais</h2>
                    <img src="{{ asset('img/facebook.png') }}">
                    <img src="{{ asset('img/linkedin.png') }}">
                    <img src="{{ asset('img/youtube.png') }}">
                </div>
                <div class="area-contato">
                    <h2>Contato</h2>
                    <span>(11) 3333-4444</span>
                    <br>
                    <span>supergestao@dominio.com.br</span>
                </div>
                <div class="localizacao">
                    <h2>Localização</h2>
                    <img src="{{ asset('img/mapa.png') }}">
                </div>
            </div>
@endsection
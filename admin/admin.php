<?php 
function adicionar_aba_geolocalizacao() {
    add_menu_page(
        'Geolocalização',
        'Geolocalização', 
        'manage_options', 
        'geolocalizacao-settings', 
        'renderizar_pagina_geolocalizacao', 
        'dashicons-location' 
    );
}
add_action('admin_menu', 'adicionar_aba_geolocalizacao');

function renderizar_pagina_geolocalizacao() {
    ?>
    <div class="wrap">
        <h1>Configurações de Geolocalização</h1>
    </div>
    <section class="section-admin">
      <div class="bem-vindo">
        <h2>Bem-vindo ao nosso plugin</h2>
        <p>Obrigado por baixar o nosso plugin, somos desenvolvedores independentes e temos alguns plugins disponiveis gratuitamente, alem de plugins temos tambem o nosso tema oficial e focado no Brasil o Boost Pro, e convidamos a todos a conhecer.</p>
        <a href="https://boostproecom.com/" target="_blank" class="botao-novo">Conhecer Boost Pro</a>
      </div>
      <section class="section-ajuda">
      <div class="ajuda">
        <h3>Como útilizar o plugin?</h3>
        <p>Você pode utilizar nosso shortcode e adicionar em qualquer local do seu site.</p>
        <div class="box">
            <div class="box-ajuda">
                <div><span id="box-cidade">
                    [cidade_usuario]
                    </span><button id="btn-copiar" class="botao-box">Copiar</button>
                    <p>Como irá mostrar: <?php echo do_shortcode( '[cidade_usuario]' ); ?> essa é a localização do seu usuario, aqui estamos mostrando sua localização.</p>
                </div>
                
            </div>
        </div>
      </div>
      <section class="section-ajuda">
      <div class="ajuda">
        <h3>Versão pro</h3>
        <p>Adquira nossa versão pro para poder nos ajudar, por apenas R$15,00 e tenha varias funcionalidades<br>Altere o tamanho da fonte, adicione background, diversos shortcodes diferentes para você utilizar, altere cores e muito mais.</p>
        <div class="box">
            <div class="box-ajuda">
                <a href="https://marcleitonalmeida.com/geolocalizacao" target="_blank" ><button class="botao-box">Adquirir versão pro</button></a>  <a href="https://instagram.com/marcleitondev" target="_blank" ><button class="botao-box">Seguir no instagram</button></a>
            </div>
        </div>
      </div>

      <style>
  </style>

  <script>
    document.getElementById('btn-copiar').addEventListener('click', function() {
   var boxCidade = document.getElementById('box-cidade');
   
   // Cria um elemento input temporário
   var tempInput = document.createElement('input');
   tempInput.value = boxCidade.textContent;
   document.body.appendChild(tempInput);
   
   // Seleciona o conteúdo do input
   tempInput.select();
   tempInput.setSelectionRange(0, 99999);
   
   // Copia o conteúdo para a área de transferência
   document.execCommand('copy');
   
   // Remove o elemento input temporário
   document.body.removeChild(tempInput);
   
   // Alerta o usuário que o conteúdo foi copiado
   alert('Conteúdo copiado para a área de transferência!');
});

  </script>
    <?php
}
<?php 
require_once __DIR__ . '/includes/header.php';
?>
    <header>
<nav>
  <div class="logo animar-esquerda">
    <a href="#">
      <img src="img/logo/logo_vianova.png" alt="Logo ViaNova">
    </a>
  </div>

  <div class="menu-toggle" id="menu-toggle">☰</div>

  <ul id="menu">
    <li><a href="#horarios">Horários</a></li>
    <li><a href="#sobre">Sobre</a></li>
    <li><a href="#turismo">Turismo</a></li>
    <li><a href="#compra_de_passes">Compra de passes</a></li>
    <li><a href="#contato">Contato</a></li>
    <li><a href="#localizacao">Localização</a></li>
    <li><a href="#FAQ">FAQ</a></li>
  </ul>
</nav>

</header>
<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-text">
      <h1>VIAJE COM CONFORTO E PRATICIDADE</h1>
      <p>Consulte horários, compre seus passes e conheça nossos destinos. A Viação ViaNova conecta você aos melhores lugares.</p>
      <div class="hero-buttons">
        <a href="#horarios" class="btn-primary">Ver horários</a>
        <a href="#contato" class="btn-secondary">Fale conosco</a>
      </div>
    </div>
    <div class="hero-image animar-esquerda">
      <img class="foto_principal" src="img/ilustracoes/city bus-bro.png" alt="Ônibus Via Nova">
    </div>
  </div>
</section>

<!-- HERO SECTION -->

  <main>

    <!-- Tabelas de horarios -->
<!-- Modal de visualização -->
<!-- Modal para exibir a imagem expandida -->
<div id="modalImagem" class="modal-imagem" onclick="fecharModal(event)">
  <span class="fechar-modal" onclick="fecharModal(event)">&times;</span>
  <img class="modal-conteudo" id="imagemExpandida">

  <!-- Ícones de Navegação -->
  <div class="navegacao">
    <span class="anterior" onclick="mudarImagem(-1, event)">&#10094;</span>
    <span class="proxima" onclick="mudarImagem(1, event)">&#10095;</span>
  </div>
</div>

<section id= "horarios" class="grade-horario">
  <div class="horario_titulo">
  <h2>Horários</h2>
</div>
  <h3 class="explicacao">Clique nos icones para acessar a tabela de horarios.</h3>
  <div class="grid-cidades">
  <div class="card-cidade slide-top" onclick="abrirModal('img/horarios/HORARIOS_EXCEL_MONTE_BELO_MOBILE.JPG')">
    <img src="img/ilustracoes/thumb_monte_bela.png" width="200px" alt="Monte Belo">
  </div>

  <div class="card-cidade slide-top" onclick="abrirModal('img/horarios/HORARIOS_EXCEL_VALE_ENCANTADO.JPG')">
    <img src="img/ilustracoes/thumb_vale_encantado.png" alt="Vale Encantado">
  </div>

  <div class="card-cidade slide-top" onclick="abrirModal('img/horarios/HORARIOS_EXCEL_SERRA_DO_VALE_MOBILE.JPG')">
    <img src="img/ilustracoes/thum_serra_do_vale.png" alt="Serra do Vale">
  </div>
</div>
<div id="modalHorarios" class="modal hidden" onclick="fecharModalHorarios(event)">
  <span class="fechar-modal" onclick="fecharModalHorarios(event)">&times;</span>
  <img id="imagemExpandidaHorarios" class="modal-conteudo">

  <div class="navegacao">
    <span class="anterior" onclick="mudarImagemHorarios(-1, event)">&#10094;</span>
    <span class="proxima" onclick="mudarImagemHorarios(1, event)">&#10095;</span>
  </div>
</div>
</section>


    <!-- Tabelas de horarios -->

    <!-- VENDA DE PASSES  -->
<section id="compra_de_passes" class="passes">
  <div class="passes-content">
    <div class="overlay">
      <h1>Compra de Passes</h1>
      <p>Garanta seu passe de forma rápida, prática e segura.</p>
       <div class="bloco">
      <ul>
        <li>✔ Pagamento no dinheiro ou pix</li>
        <li>✔ Escolha o melhor horário para receber seus passes</li>
        <li>✔ Atendimento rápido</li>
      </ul>
      <p>Clique no botão e adquira, basta apenas preencher o formulário.</p>
      <button class="comprar"><a class="comprar_passe_red" href="/leading_page_onibus/vendas/compra_passes.html" target="_blank">Comprar Agora</a></button>
      </div> 
    </div>

    <div class="img-container animar-esquerda">
      <img src="img/ilustracoes/Coins-rafiki.png" alt="Ilustração de ônibus">
    </div>
  </div>
</section>

    <!-- VENDA DE PASSES  -->

    <!-- SOBRE A EMPRESA -->

      <section class="sobre-empresa" id="sobre">
  <div class="topo-sobre">
    <h1>Sobre nós</h1>
    <h2>Transportando pessoas desde 2002</h2>
  </div>

  <div class="conteudo-sobre">
    <div class="bloco">
      <h3 class="subtitulo">NOSSA HISTÓRIA</h3>
      <p>
        A Viação ViaNova é uma empresa com sólida experiência no setor de transporte de
passageiros, atuando nos segmentos de linhas intermunicipais, fretamento corporativo e
turismo
      </p>
      <p>
        Nosso principal compromisso é com a segurança, pontualidade e a plena satisfação
dos nossos clientes.
      </p>
 <!-- Botão que acionará o modal -->
<button class="btn-sobre" id="btnSaibaMais">Saiba Mais</button>

    </div>

<div class="imagem-centro animar-esquerda">
  <img src="img/ilustracoes/Bus driver-amico.png" alt="Ônibus da Via Nova">
</div>

    <div class="bloco">
      <h3 class="subtitulo">NOSSA VISÃO</h3>
      <p>
        Excelência em Transporte de Passageiros, Fretamento e Turismo.
      </p>
      <ul>
        <li>✔ Conforto e pontualidade</li>
        <li>✔ Atendimento humanizado</li>
        <li>✔ Compromisso com a segurança</li>
      </ul>
      <!-- <a href="#turismo" class="btn-sobre">Nossos Serviços</a> -->
    </div>
  </div>

  <!-- <div class="cards-donos">
  <div class="card-dono">
    <img src="img/ilustracoes/Questions-bro.png" alt="Dono 1">
    <h4>Erick</h4>
    <p>Texto descritivo sobre o proprietário. Exemplo de breve apresentação.</p>
  </div>

  <div class="card-dono">
    <img src="img/ilustracoes/Webinar-bro.png" alt="Dono 2">
    <h4>Camila</h4>
    <p>Texto descritivo sobre o proprietário. Exemplo de breve apresentação.</p>
  </div>

  <div class="card-dono">
    <img src="img/ilustracoes/Problem solving-bro.png" alt="Dono 3">
    <h4>Wagner</h4>
    <p>Texto descritivo sobre o proprietário. Exemplo de breve apresentação.</p>
  </div>
</div> -->

</section>

    <!-- SOBRE A EMPRESA -->
      

  <!-- TURISMO -->


  <section class="sobre-viagens" id="sobre">
  <div class="topo-sobre">
    <h1>SERVIÇOS DE VIAGEM</h1>
    <h2>Conheça as opções que oferecemos para viagens e fretamentos <br>com conforto, segurança e qualidade.</h2>
  </div>

  <div class="conteudo-sobre">
    <div class="bloco">
      <h3 class="subtitulo">FRETAMENTO</h3>
      <p>
        Prestamos serviços de transporte para funcionários de empresas de pequeno, médio e grande
porte, com contratos personalizados de acordo com as necessidades de cada cliente.
      </p>
      <p>
        Realizamos fretamento personalizado para eventos, excursões, viagens corporativas e muito mais. Entre em contato e agende seu serviço com segurança, qualidade e pontualidade.
      </p>
      <!-- <a href="#contato" class="btn-sobre">Saiba Mais</a> -->
       <button class="btn-sobre" id="btnSaibaMaisCars">Saiba Mais</button>
    </div>

    <div class="imagem-centro animar-esquerda">
      <img src="img/ilustracoes/city bus-amico.png" alt="Ônibus da ViaNova">
    </div>

    <div class="bloco">
      <h3 class="subtitulo">TURISMO</h3>
      <p>
        Conheça nossa frota e os melhores destinos que oferecemos. Quer viajar com conforto, segurança e sem preocupações? Entre em contato conosco e faça um orçamento para sua viagem. Conheça um pouco de nossa frota de veículos, preparados para levar você aonde quiser!
      </p>
      <ul>
        <li>✔ Transporte escolar ou universitário</li>
        <li>✔ Atendimento humanizado</li>
        <li>✔ Viagens religiosas ou culturais</li>
        <!-- <li>✔ Viagens religiosas ou culturais</li> -->
      </ul>
      <a href="#contato" class="btn-contato-fretamento">SOLICITE UM ORÇAMENTO</a>
    </div>
  </div>
  </section>


</section>

<!-- Modal -->

<section class="galeria-turismo">
  <h2>GALERIA DE VEÍCULOS</h2>

  <div class="galeria-pinterest">
    <img src="img/onibus/onibus1.jpg" alt="Ônibus 1" onclick="abrirModalVeiculos(0)">
    <img src="img/onibus/onibus2.jpg" alt="Ônibus 2" onclick="abrirModalVeiculos(1)">
    <img src="img/onibus/onibus3.jpg" alt="Ônibus 3" onclick="abrirModalVeiculos(2)">
    <img src="img/onibus/onibus4.jpg" alt="Ônibus 4" onclick="abrirModalVeiculos(3)">
  </div>
</section>

<!-- Modal exclusivo da galeria -->
<div id="modalVeiculos" class="modal hidden" onclick="fecharModalVeiculos(event)">
  <span class="fechar-modal-veiculos">&times;</span>
  <img id="imagemExpandidaVeiculos" class="modal-conteudo">

  <div class="navegacao">
    <span class="anterior" onclick="mudarImagemVeiculos(-1, event)">&#10094;</span>
    <span class="proxima" onclick="mudarImagemVeiculos(1, event)">&#10095;</span>
  </div>
</div>

  <!-- TURISMO -->


  <!-- CONTATO -->
<section id= "contato" class="contato">
    <h2>Contatos</h2>
    <div class="contato-box">
<a href="#" target="_blank" class="btn-contato"><i class="fa-brands fa-whatsapp"></i> Monte Bela</a>
<a href="#" target="_blank" class="btn-contato"><i class="fa-brands fa-whatsapp"></i> Serra do Vale</a>
<a href="#" target="_blank" class="btn-contato"><i class="fa-brands fa-whatsapp"></i> Reclamações ou sugestões</a>
<!-- <a href="#" class="btn-contato"><i class="fa-brands fa-instagram"></i> Instagram</a> -->
<a href="#" class="btn-contato"><i class="fa-regular fa-envelope"></i> E-mail</a>

    </div>
  </section>
  <!-- CONTATO -->
  

  
  <!-- LOCALIZAÇÃO -->
  <section id= "localizacao" class="localizacao">
    <h2>Localização</h2>
    <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461.36873299109106!2d-45.47495482197425!3d-22.42271010745361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cb7b195b8feed3%3A0x4e9aaa5c6ce80546!2sVia Nova%20Transportes%20Ltda!5e1!3m2!1sen!2sbr!4v1747255523243!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>
  <!-- LOCALIZAÇÃO -->
  
  <!-- FAQ -->

<section class="faq" id="FAQ">
  <h2>Perguntas Frequentes</h2>

  <div class="faq-item">
    <button class="faq-question">Como posso comprar passes?</button>
    <div class="faq-answer">
      <p>Você pode realizar a compra diretamente em nosso site, na seção "Compra de Passes". Basta preencher o formulário com as informações requisitadas e realizar o pagamento via pix.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Como posso pagar o passe?</button>
    <div class="faq-answer">
      <p>O passe pode ser pago mediante a transferência PIX ou então em dinheiro em espécie(pago no ato de entrega do passe).</p>
    </div>
  </div>

    <div class="faq-item">
    <button class="faq-question">Onde encontro os horários disponíveis?</button>
    <div class="faq-answer">
      <p>Os horários podem ser consultados diretamente no site, na seção "Horários". Basta clicar no card da cidade desejada e a imagem expandida com a tabela de horário ira aparece na tela.</p>
    </div>
  </div>

    <div class="faq-item">
    <button class="faq-question">Quais linhas a Via Nova Transportes atende?</button>
    <div class="faq-answer">
      <p>A empresa opera as linhas entre Monte Bela - Águas de Aurora, Monte Bela - Vale Encantado, Serra do Vale - Nova Esperança do Sul.</p>
    </div>
  </div>

      <div class="faq-item">
    <button class="faq-question">Horário de atendimento</button>
    <div class="faq-answer">
      <p>Das 7h as 11:30 e das 13:30 as 16h.</p>
    </div>
  </div>
  <!-- Adicione mais perguntas aqui -->
</section>

  </main>

  <!-- FAQ -->

<?php 
require_once __DIR__ . '/includes/footer.php';

?>
<div id="wrapper" class="">
 
  <section id="topo">

    <div class="menu-scroll">

      <div class="container">

        <a href="<?php print $GLOBALS['base_path']; ?>"><img class="logo img-responsive" src="<?php print base_path() . path_to_theme() .'/' ?>img/tt.png" /></a>

       <ul id="menu-secoes" class="menu nav navbar-nav">
           <li><a href="#form-contato" data-toggle="modal">Contato</a></li> 
          <li><a href="#fotos" data-toggle="modal">Fotos</a></li>
          <!--li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li-->                
          <li><a data-toggle="pill" href="#participe">Participe</a></li>
          <li><a data-toggle="modal" data-target="#lista-excursoes" href="#">Excursões</a></li>                
          <!--li><a href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Evolution Town</a></li-->    
          <li><a href="#pdvs" data-toggle="modal">Pontos de Venda</a></li>
          <li><a href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
          <li><a href="<?php print $GLOBALS['base_path']; ?>lineup">Atrações</a></li>       
          </ul>
        </div>

    </div>

    <div class="container">
      
    <header>
      <div class="row">
          <div class="col-sm-12">
            <a href="<?php print $GLOBALS['base_path']; ?>"><img class="logo img-responsive" src="<?php print base_path() . path_to_theme() .'/' ?>img/tt.png" /></a>
             <span class="data">10 e 11out</span>
             
              <ul class="redes-sociais">                  
                  <li class="facebook"><a href="https://www.facebook.com/TribaltechOfficial" target="_blank">facebook</a></li>
                  <li class="instagram"><a href="https://instagram.com/tribaltechofficial/" target="_blank">instagram</a></li>
                </ul>  
          </div>     
          
            <!-- Sidebar -->
              <!--div id="sidebar">
                <ul class="menu">
                    <li><a href="<?php print $GLOBALS['base_path']; ?>">Página Inicial</a></li>
                    <li><a href="<?php print $GLOBALS['base_path']; ?>lineup">Atrações</a></li>
                    <li><a href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
                    <li><a href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Evolution Town</a></li>
                    <li><a data-toggle="pill" href="#participe">Participe</a></li>
                    <li><a data-toggle="pill" href="#excursoes">Excursões</a></li>
                    <li><a href="#">Pacotes</a></li>            
                    <li><a href="#modalcontato" data-toggle="modal">Fotos</a></li>
                    <li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li>
                    <li><a href="#form-contato" data-toggle="modal">Contato</a></li>            
                </ul>
                </div--><!-- sidebar -->
             <!--a id="menu-toggle">
                <span>MENU</span>
                <div class="burger"><b></b><b></b><b></b></div>
            </a-->
          
          <div class="col-sm-12">
            <div class="row">
                <nav id="topnav" class="navbar navbar-default" role="navigation">
                      
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                      </div>
                      <div class="collapse navbar-collapse navbar-ex1-collapse">
                         <div class="menu-secoes">
                         <ul id="menu-secoes" class="menu nav navbar-nav">
                             <li><a href="#form-contato" data-toggle="modal">Contato</a></li> 
                            <li><a href="#fotos" data-toggle="modal">Fotos</a></li>
                            <!--li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li-->                
                            <li><a data-toggle="pill" href="#participe">Participe</a></li>
                            <li><a data-toggle="modal" data-target="#lista-excursoes" href="#">Excursões</a></li>                
                            <!--li><a href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Evolution Town</a></li-->    
                            <li><a href="#pdvs" data-toggle="modal">Pontos de Venda</a></li>
                            <li><a href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
                            <li><a href="<?php print $GLOBALS['base_path']; ?>lineup">Atrações</a></li>       
                            </ul>
                        </div>
                     </div><!-- /.navbar-collapse -->
                    
              </nav>
            </div>             
             
          </div>
          
<div class="overlay">&nbsp;</div>
          
      </div>
      </header> 
      <div class="row">     
          <div class="contagem">
            <?php                
                $data_atual = date('d-m-Y h:i:s');
                $data_final = date('2015-10-10');            
                $diferenca  = strtotime($data_final) - strtotime($data_atual);
                $dias = intval($diferenca / 86400);                
            ?>
            <p class="regressiva">Faltam <strong><?php echo $dias; ?></strong> dias para você evoluir com</p>
            <h4 class="example2"><div class="rotate">CARL CRAIG, ELEKFANTZ, ROMAN FLUGEL, CHRIS LIEBING, DERRICK CARTER, MATHEW JONSON, PILLOWTALK, JUSTIN MARTIN, ADNAN SHARIF, ELLEN ALLIEN, TOUCHTALK, VERTICAL MODE, SONIC SPECIES, BORIS BREJCHA, VINTAGE CULTURE, ROLLDABEETZ</div></h4>
            <a class="botao confira-atracoes" href="<?php print $GLOBALS['base_path']; ?>lineup">Confira todas as atrações</a>
      </div>
    </div>
    
    
    </div>    
  </section><!--section1 / topo -->
<div id="ingressos">
  <div class="container">
        <div class="row">
          <div class="col-sm-4">
              <div class="ingresso1">
                <p class="comprar"><a href="http://www.aloingressos.com.br/tribaltech">Comprar</a></p>
                <a href="http://www.aloingressos.com.br/tribaltech"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/10-10.png" /></a>
                <p class="sobre">Atrações surpresas<br/>até o sol raiar</p>                
              </div>
          </div>
          <div class="col-sm-4">
            <div class="ingresso2">
              <p class="comprar"><a href="http://www.aloingressos.com.br/tribaltech">Comprar</a></p>
              <a href="http://www.aloingressos.com.br/tribaltech"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/11-10.png" /></a>
              <p class="sobre">A melhor véspera de feriado<br/>do ano</p>              
            </div>
          </div>
        <div class="col-sm-4">
          <div class="ingresso1">
            <p class="comprar"><a href="http://www.aloingressos.com.br/tribaltech">Comprar</a></p>
            <a href="http://www.aloingressos.com.br/tribaltech"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/10-11-10.png" /></a>
            <p class="sobre"><strong>evolution pass</strong><br/>A experiência completa</p>            
          </div>
        </div>
        </div>
      </div>
      </div><!-- ingressos -->
<section id="atracoes">

  <div class="container">      
      <div id="infos">
        <div class="row">
          <div class="col-sm-12">
            <div class="chamada">
        <span>2 dias<br/>ao som de</span>
        <h2>134\<br/>Atrações</h2>
      </div>
          </div>         
         
        </div>
      </div><!-- infos -->
    </div>    
    <div id="djs" class="inclinado2">
        <div class="container">

          <p>
          <span class="data">10\SÁBADO</span><br/>
          ALOK \ ANDRE MARQUES \ ANINHA \ ANNA \ AUTOMACK \ AVALON \ 
          AZAX VC. BLISS \ BIEL \ BOGHOSIAN \ BORIS BREJCHA \ CLAUDE VON STROKE \
          COBBLESTONE JAZZ \ DAKE \ DASHDOT \ DERRICK CARTER \ DOP \
          DO SANTOS \ ELI IWASA \ FABIO LEAL \ GABE \ GROMMA \ HAUSTUFF \
          ILLUSIONIZE \ JUSTIN MARTIN \ KANIO \ KLAYTON KEPPEN \ KULTRA \ MAJOR7 \
          MATHEW JONSON \ MERKABA \ PIMPO&amp;ZACCHI \ PILLOWTALK \
          RENAN MENDES &amp; BOGUS \ RENATO COHEN \ RINKADINK &amp; ELEMENT \
          RODRIGO FERRARI \ SHADOW FX &amp; TETRAMETH \ TIGER &amp; WOODS \ TOUCHTALK \
          TRAUMER \ VICTOR RUIZ AV ANY MELLO \ VINTAGE CULTURE \ VOLKODER \
          WILL CLARKE \ 4i20
          </p>
          <p>
          <span class="data">11\DOMINGO</span><br/>
          ADNAN SHARIF \ ALBUQUERQUE \ ALTRUISM \ ANTONELA \ ATMOS \
          CAPITAL MONKEY \ CARL CRAIG \ CHRIS LIEBING \ CIRCUIT BREAKERS \
          DANNY DAZE \ DAVID KENO \ DAVIS \ DIGITARIA \ DUBFIRE: LIVE HYBRID \
          ELEKFANTZ \ ELLEN ALLIEN \ FABO \ FABRICIO PEÇANHA \ FLOW&amp;ZEO \
          KUNKY FAT \ FUTURE FREQUENCY \ GAISER \ HNQO \ H.O.S.H. \ ITAL \ K-ISUMA \
          LEO JANEIRO &amp; LEOZINHO \ LOUD \ MARCO RESMANN \ MATTHIAS MEYER \
          OXIA \ POPOF \ RENATO RATIER \ RODHAD \ ROLLDABEETZ \ ROMAN FLUGEL \
          SCOTTY \ SONIC SPECIES \ STEKKE \ STMMING \ SWARUP \ THE DRONE LOVERS \
          THE FIRST STONE \ TRANG \ TRISTAN \ VERTICAL MODE \\
          </p>     
          
        </div>
        
      </div><!-- participe -->

  

</section>
  <section id="section2">
    <div class="container">      
      <div id="infos">
        <div class="row">          
          <div class="col-sm-4 col-sm-offset-1 pdv">
            <h4>pontos de<br />venda.</h4>
            <p>Saiba onde comprar seu ingresso</p>
            <a class="botao" data-toggle="modal" data-target="#pdvs" href="#">Encontre</a>
          </div>
          <div class="col-sm-4">&nbsp;</div>
          <div class="col-sm-3">&nbsp;</div>
        </div>
        <div class="row">
          <div class="col-sm-4 evolution-town pacotes">
            <h4>pacotes.</h4>
            <p>HOTEL + AÉREO + TRANSFER IN/OUT</p>            
            <a class="botao" data-toggle="modal" data-target="#pacotes" href="#">Faça sua reserva</a>                        
          </div>
          <!--div class="col-sm-4 evolution-town">
            <h4>evolution<br />town.</h4>
            <p>A cidade do festival. Com estrutura completa e programação exclusiva para seus cidadãos</p>
            <a class="botao" href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Saiba mais</a>
          </div-->
          <div class="col-sm-4">&nbsp;</div>
          <div id="excursoes" class="col-sm-4 excursao">
            <h4>sua<br/>excursão.</h4>
            <p>Não marque bobeira e agilize sua caravana Tribaltech 2015. Saída de diversos cantos do Brasil e América do Sul.</p>
            <a class="botao" data-toggle="modal" data-target="#lista-excursoes" href="#">Encontre</a>            
          </div>
        </div>
      </div><!-- infos -->
    </div>    
    <div id="participe" class="inclinado2">
        <div class="container">
          <h2>participe</h2>
          <div class="row">
               <div class="col-sm-2">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_producao.png" />
                <h4>produção</h4>
                <p>Quer participar da organização do evento/ equipe de produção durante a festa?</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form-producao">+</button>
                      
              </div>  
             
              <div class="col-sm-2">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_photo.png" />
                <h4>hey,photo!</h4>
                <p>fotógrafos, video makers, social medias. Inscrevam-se e partcipem</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form-photo">+</button>
                
              </div>
              <div class="col-sm-2">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_chefs.png" />
                <h4>praça de alimentação</h4>
                <p>Que tal trazer seu foodtruck ou seu restaurante pra Tribaltech?</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form-chefs">+</button>
                      
              </div>  
              <div class="col-sm-2">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_artistas.png" />
                <h4>artistas</h4>
                <p>Suas intervenções artísticas são muito bem vindas na Tribaltech</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form-artistas">+</button>
              </div>
              <div class="col-sm-2">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_performers.png" />
                <h4>performers</h4>
                <p>Dançarinos, Yoguis, Artistas de picadeiro. Tragam vossos brihos</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form-performers">+</button>
              </div>
              <div class="col-sm-2">
                <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_excursao2.png" />
                <h4>excursionistas</h4>
                <p>Ainda há tempo para organizar sua caravana. Se agilize!</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#form-excursao">+</button>
              </div>
             
          </div>
        </div>
        
      </div><!-- participe -->
    
  </section><!-- cd-section -->
  
  <!--section id="store" class="inclinado6">
    <div class="container">
        <img src="<?php print base_path() . path_to_theme() .'/' ?>img/tt_store.png" />
        <?php print views_embed_view('produtos_loja', 'default'); ?>      
    </div>
    
  </section--><!-- store -->
  <section id="blog" class="inclinado1">
    <div class="container">
        <img src="<?php print base_path() . path_to_theme() .'/' ?>img/blog.png" />
        <?php print views_embed_view('blog_home', 'default'); ?>      
    </div>
    
  </section><!-- store -->
  
  <section id="fotos">
    
       <!--a href="<?php print base_path() . path_to_theme() .'/' ?>album-2006.html" data-toggle="modal" data-target="#myModal-1"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/2009.jpg" class="img-responsive album" /></a-->
       <img src="<?php print base_path() . path_to_theme() .'/' ?>img/albuns.png" class="img-responsive album" usemap="#Map" />
        <map name="Map" id="Map">
            <area href="<?php print $GLOBALS['base_path']; ?>tribaltech-2006" shape="poly" coords="521,94,517,434,7,476,0,134" />
            <area href="<?php print $GLOBALS['base_path']; ?>tribaltech-2007" shape="poly" coords="523,93,523,434,1085,387,1087,48" />
            <area href="<?php print $GLOBALS['base_path']; ?>tribaltech-2008" shape="poly" coords="1598,8,1597,347,1087,388,1091,48,1597,6" />
            <area href="<?php print $GLOBALS['base_path']; ?>tribaltech-2011" shape="poly" coords="1085,389,1082,703,1599,665,1596,349" />
            <area href="<?php print $GLOBALS['base_path']; ?>tribaltech-2010" shape="poly" coords="1079,702,521,747,525,439,1081,392" />
            <area href="<?php print $GLOBALS['base_path']; ?>tribaltech-2009" shape="poly" coords="517,747,515,436,1,479,1,786" />            
        </map>
              
    
  </section><!-- fotos  -->
  
<?php include "footer.tpl.php"; ?>
</div>
<!-- MODALS -->
<!-- form producao -->
<div class="modal fade" id="form-producao" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
    <h2>produção</h2>
    <?php
         $block = module_invoke('webform', 'block_view', 'client-block-36');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form photo -->
<!-- form photo -->
<div class="modal fade" id="form-photo" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>hey,photo!</h2>
    <?php
         $block = module_invoke('webform', 'block_view', 'client-block-98');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form photo -->
<!-- form chefs -->
<div class="modal fade" id="form-chefs" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>praça de<br/>alimentação</h2>
     <?php
         $block = module_invoke('webform', 'block_view', 'client-block-99');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form chefs -->
<!-- form artistas -->
<div class="modal fade" id="form-artistas" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>artistas</h2>
     <?php
         $block = module_invoke('webform', 'block_view', 'client-block-101');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form artistas -->
<!-- form performers -->
<div class="modal fade" id="form-performers" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>performers</h2>
     <?php
         $block = module_invoke('webform', 'block_view', 'client-block-100');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form performers -->
<!-- form excursao -->
<div class="modal fade" id="form-excursao" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>excursionistas</h2>
    <?php
         $block = module_invoke('webform', 'block_view', 'client-block-91');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form excursao -->

<!-- form pacotes -->
<div class="modal fade" id="pacotes" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>pacotes</h2>
    <?php
         $block = module_invoke('webform', 'block_view', 'client-block-154');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form excursao -->

<!-- LISTA EXCURSOES -->
<div class="modal fade" id="lista-excursoes" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body"> 
<h2>EXCURS&Otilde;ES OFICIAIS</h2>
<input type="text" id="busca" placeholder="Digite o nome da sua cidade ou da excursão que deseja encontrar" />
<div class="resultado">
<?php print views_embed_view('lista_excursoes', 'block_1'); ?>
</div>
</div>
</div>
</div>
</div><!-- LISTA EXCURSOES -->

<!-- LISTA PONTOS DE VENDA -->
<div class="modal fade" id="pdvs" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body"> 
<h2>PONTOS DE VENDA</h2>
<?php print views_embed_view('lista_pdvs', 'default'); ?>
</div>
</div>
</div>
</div><!-- LISTA PONTOS DE VENDA -->

<!-- FOTOS -->
<div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
</div><!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- form contato  -->
<div class="modal fade" id="form-contato" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <h2>contato</h2>
    <?php
         $block = module_invoke('webform', 'block_view', 'client-block-4');
         print render($block['content']);
      ?>
</div>
</div>
</div>
</div><!-- form contato -->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/imageMapResizer.min.js" type="text/javascript"></script>
<!--script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/modernizr.js"></script-->
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/list-filter.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.airport.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.flip.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.simple-text-rotator.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
  $('#topo').parallax("50%", 0.1);
    $('#section2').parallax("50%", 0.2);
    $('#atracoes').parallax("50%", 0.2);
    $('#infos').parallax("50%", 2);
    /*var words = [ "CARL CRAIG", "ELEKFANTZ", "ROMAN FLUGEL", "CHRIS LIEBING", "DERRICK CARTER", "MATHEW JONSON", "PILLOWTALK", "JUSTIN MARTIN", "ADNAN SHARIF", "ELLEN ALLIEN", "TOUCHTALK", "VERTICAL MODE", "SONIC SPECIES", "BORIS BREJCHA", "VINTAGE CULTURE", "ROLLDABEETZ" ];
    $(".example2").airport(words, {
        fill_space: true,
        transition_speed: 1
    });*/
    $('#busca').keypress(function() {
      $('#lista-excursoes .resultado').css('display','block');
    });
    $('map').imageMapResize();
    $(".card").flip({
      axis: 'y',
      trigger: 'click'
    });
     $(".example2 .rotate").textrotator({
        animation: "flipUp",
        speed: 100
      });


     $(document).scroll(function() {
          var scroll = $(this).scrollTop();
          if (scroll >= 100) {              
              $('.menu-scroll').addClass('fixed');
          }else{              
              $('.menu-scroll').removeClass('fixed');
          }
      });

})
    
</script>
<div id="wrapper" class="">
<section id="topo">
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
        <div class="col-sm-6">
          <div class="chamada">
            <span>Acompanhe as novidades em nosso</span>
            <h2>BLOG</h2>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>    
  </section><!--section1 / topo -->
<section class="conteudo"> 
<div class="container" >
  
  <div class="row">
    <div class="col-sm-9">
        <?php print $content['middle']; ?>      
    </div>
    <div class="col-sm-3">
        <?php print $content['sidebar']; ?>      
        <div class="fb-page" data-href="https://www.facebook.com/TribaltechOfficial" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/TribaltechOfficial"><a href="https://www.facebook.com/TribaltechOfficial">Tribaltech</a></blockquote></div></div>
    </div>
  </div>
</div>
</section>

 
<footer>
  <div class="container">
    <div class="row">
        <div class="col-sm-1">
          <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_ttblack3.png" />
        </div>
        <div class="col-sm-5">
          <ul class="menu2">
           <li><a href="<?php print $GLOBALS['base_path']; ?>">Página Inicial</a></li>
            <li><a href="<?php print $GLOBALS['base_path']; ?>#topo-atracoes">Atrações</a></li>
            <li><a href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
            <!--li><a href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Evolution Town</a></li-->
            <li><a data-toggle="pill" href="<?php print $GLOBALS['base_path']; ?>#participe">Participe</a></li>
            <li><a data-toggle="modal" data-target="#lista-excursoes" href="#">Excursões</a></li>              
            <!--li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li-->
            <li><a href="#form-contato" data-toggle="modal">Contato</a></li>       
          </ul>
        </div>
        <div class="col-sm-5">
           <ul>
              <li><a href="https://www.facebook.com/TribaltechOfficial" target="_blank">facebook</a></li>
              <li><a href="https://instagram.com/tribaltechofficial/" target="_blank">instagram</a></li>              
            </ul>
        </div>
    </div>  
      
    </div>
    
</footer>  

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>


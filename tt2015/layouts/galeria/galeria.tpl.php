<div id="wrapper" class="">
<section id="topo">
    <div class="container">
      <header>
      <div class="row">
          <div class="col-sm-6">
            <a href="<?php print $GLOBALS['base_path']; ?>"><img class="logo" src="<?php print base_path() . path_to_theme() .'/' ?>img/tt.png" /></a>            
          </div>     
          <div class="col-sm-6">
            <!-- Sidebar -->
      <div id="sidebar">
        <ul class="menu">
            <li><a href="<?php print $GLOBALS['base_path']; ?>">Página Inicial</a></li>
            <li><a href="<?php print $GLOBALS['base_path']; ?>/lineup">Atrações</a></li>
            <li><a data-toggle="pill" href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
            <li><a data-toggle="pill" href="<?php print $GLOBALS['base_path']; ?>/evolutiontown">Evolution Town</a></li>
            <li><a data-toggle="pill" href="#participe">Participe</a></li>
            <li><a data-toggle="pill" href="#excursoes">Excursões</a></li>
            <li><a href="#">Pacotes</a></li>            
            <!--li><a href="#modalcontato" data-toggle="modal">Fotos</a></li-->
            <li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li>
            <li><a href="#modalcontato" data-toggle="modal">Contato</a></li>            
        </ul>
        </div><!-- sidebar -->
             <a id="menu-toggle">
              <span>MENU</span>
              <div class="burger"><b></b><b></b><b></b></div>
          </a>
            <span class="data">10e11out</span>
             
              <ul class="redes-sociais">
                  <li class="youtube"><a href="#">youtube</a></li>
                  <li class="facebook"><a href="#">facebook</a></li>
                  <li class="twitter"><a href="#">twitter</a></li>                  
                </ul>  
            
          </div>
          
<div class="overlay">&nbsp;</div>
          
          <!--div class="col-sm-12">
            <ul class="menu">                  
                  <li><a href="http://ecwd.net/tt2015/lineup">atrações</a></li>
                  <li><a href="#">ingressos</a></li>
                  <li><a href="#">evolution town</a></li>
                  <li><a href="#">participe</a></li>
                  <li><a href="#">excursões</a></li>
                  <li><a href="#">pacotes</a></li>
                  <li><a href="#">fotos</a></li>
                  <li><a href="#">store</a></li>
                  <li><a href="#">contato</a></li>
                </ul>
          </div-->
      </div>
      </header>  
      <div class="row">
        <div class="col-sm-6">
          <div class="chamada">
            <h2>Galeria de Imagens</h2>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>    
  </section><!--section1 / topo -->
<section class="conteudo"> 
<div class="container" >
  <div class="row">
    <div class="col-sm-12">


       <div id="carousel-bounding-box">

           <?php print $content['middle']; ?>     

        </div>       



         
    </div>
  </div>
</div>
</section>
  <footer>
  <div class="container">
    <div class="row">
        <div class="col-sm-1">
          <img src="<?php print base_path() . path_to_theme() .'/' ?>img/ico_ttwhite.png" />
        </div>
        <div class="col-sm-5">
          <ul>
            <li><a href="<?php print $GLOBALS['base_path']; ?>">home</a></li>
            <li><a href="#">atrações</a></li>
            <li><a href="#">ingressos</a></li>
            <li><a href="#">participe</a></li>
            <li><a href="#">store</a></li>
            <li><a href="#">contato</a></li>
          </ul>
        </div>
        <div class="col-sm-5">
           <ul>
              <li><a href="#">facebook</a></li>
              <li><a href="#">instagram</a></li>
              <li><a href="#">twitter</a></li>        
            </ul>
        </div>
    </div>  
      
    </div>
    
</footer>  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<!--script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/modernizr.js"></script-->
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/list-filter.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.airport.min.js"></script>
<script type="text/javascript" src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.flip.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>
<script type="text/javascript">
 var divs = $("#thumbcarousel .carousel-inner div");
    for(var i = 0; i < divs.length; i+=6) {
      divs.slice(i, i+6).wrapAll("<div class='item'></div>");
    }
</script>

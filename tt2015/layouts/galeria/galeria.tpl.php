<div id="wrapper" class="">
<section id="topo">
    <div class="container">
      

      <header>
      <div class="row">
          <div class="col-sm-12">
            <a href="<?php print $GLOBALS['base_path']; ?>"><img class="logo img-responsive" src="<?php print base_path() . path_to_theme() .'/' ?>img/tt.png" /></a>

             <span class="data">10e11out</span>
             
              <ul class="redes-sociais">
                  <li class="youtube"><a href="https://www.youtube.com/user/Tribaltechunder?feature=guide">youtube</a></li>
                  <li class="facebook"><a href="https://www.facebook.com/TribaltechOfficial">facebook</a></li>
                  <li class="twitter"><a href="https://twitter.com/tribaltechunder">twitter</a></li>                  
                </ul>  
          </div>     
          
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
                            <li><a href="<?php print $GLOBALS['base_path']; ?>#fotos">Fotos</a></li>
                            <li><a href="http://tribaltechstore.minestore.com.br/">Store</a></li>                
                            <li><a href="<?php print $GLOBALS['base_path']; ?>#participe">Participe</a></li>
                            <li><a href="<?php print $GLOBALS['base_path']; ?>#excursoes">Excursões</a></li>                
                            <li><a href="<?php print $GLOBALS['base_path']; ?>evolutiontown">Evolution Town</a></li>    
                            <li><a href="http://www.aloingressos.com.br/tribaltech">Ingressos</a></li>
                            <li><a href="<?php print $GLOBALS['base_path']; ?>#topo-atracoes">Atrações</a></li>       
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
        <div class="col-sm-12">
          <div class="chamada">
            <?php print $content['titulo']; ?>
          </div>
        </div>
        
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
</div><!-- form excursao -->

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

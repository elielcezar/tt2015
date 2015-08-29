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
          
      </div>
      </header> 
      
    
    
    </div>    
  </section><!--section1 / topo -->
<section id="principal">    
	<div class="container">    
		<?php if (($title)&&(!$is_front)): ?>    		
		<div class="titulo-pagina">    			
			<div class="container">    				
				<h1 class="title" id="page-title"><?php print $title; ?></h1>              
			</div>          	
		</div>         
	<?php endif; ?>    
	<?php if ($messages): ?>      
	<div id="messages">       
	 <div class="section clearfix">           
	  <?php print $messages; ?>      
	</div></div> <!-- /.section, /#messages -->     
	 <?php endif; ?>      
	 <?php if ($tabs): ?>       
	  <div class="tabs">         
	   <?php print render($tabs); ?>       
	    </div>     
	     <?php endif; ?>   
	      </div>
	<div class="container">
		<div class="row">
			<div id="conteudo" class="col-sm-9">
		          <?php print render($page['content']); ?>
	        </div> <!-- conteudo -->
			<div id="sidebar" class="col-sm-3">
				<?php //print render($page['sidebar']); ?>
			</div><!-- sidebar -->
		</div>
	</div><!-- container -->
</section><!-- principal -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>
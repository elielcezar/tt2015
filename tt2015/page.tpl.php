<header>

      <div class="wrap">
        <div class="container">
          <h1><a href="#"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/investchat.png" /></a></h1>
          <ul id="menu">
            <li><a href="<?php print $GLOBALS['base_path']; ?>">Home</a></li>
            <li><a href="<?php print $GLOBALS['base_path']; ?>#secondPage">Como Funciona</a></li>
            <li><a href="<?php print $GLOBALS['base_path']; ?>#3rdPage">Nossos Consultores</a></li> 
            <li><a href="#">Contato</a></li> 
          </ul>
        </div><!-- container -->
      </div><!-- wrap -->

    </header>
    



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




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js"></script>
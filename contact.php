<!DOCTYPE html> 
<html>

<head>
  <?php include_once "head.php"; ?>
</head>

<body>
  <div id="main">
	
	<header>
	  
	  
	  
	  <?php include_once "header.php"; ?>
	  
	 
	
	</header>
    
	<div id="site_content">	

     	  <div id="content">
	
        <h2>Contato</h2>
        <p>Email: miguelbh6@gmail.com</p>
		<p>Celular: (31) 8888-0509 (Claro)</p>
	
          <div class="content_item">
		    
			<div class="form_settings">      
			<form action="enviar.php" method="POST">			
			  <p><span>Name</span><input class="contact" type="text" name="nome" value="" /></p>
              <p><span>Email</span><input class="contact" type="text" name="email" value="" /></p>
			  <p><span>Mensagem</span><textarea class="contact textarea" rows="8" cols="50" name="msg"></textarea></p>
             
              <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Enviar" /></p>
			  
			  </form> 
            </div><!--close form_settings-->
		  
		  </div><!--close content_item-->
		
		 	
      
	  </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
     <footer>
	  <?php include_once "footer.php"; ?>
    </footer> 
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>	
  
</body>
</html>

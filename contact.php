<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'head.html'; ?>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <?php include_once 'header.html'; ?>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contato</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Entre em contato conosco preenchendo o formulário abaixo</h4>
				<form id="contactform" action="contact/sendmail.php" method="post" class="" name="send-contact">
					
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Insira seu nome" data-rule="maxlen:4" data-msg="Por favor, insira pelo menos 4 caracteres" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Insira endereço de email" data-rule="email" data-msg="Por favor insira email válido" />
							<div class="validation">
							</div>
						</div>
					
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Insira sua mensagem aqui..." data-rule="required" data-msg="Por favor, escreva algo"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Enviar</button>
								<span class="pull-right margintop20">* Por favor, preencha todos os campos obrigatórios, obrigado!</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
	<footer>
	<?php include_once 'footer.html'; ?>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>
</body>
</html>
<?php get_header();?>
<body id="body">
	<div id="container">
	<div class="header">
		<br><br>
		<h1><?php bloginfo('name'); ?></h1>
		<br>
		<h2><?php bloginfo('description'); ?></h2>
	</div>
	<div class="menu"><?php include_once('header-menu.php'); ?></div>
	<div class="row">
		<div role="main" class="col-md-8">
			<div class="content">
				<h1 style="text-align: center;">Recurso não encontrado!</h1>
				<p> Desculpe-me mais o recurso que procura não foi encontrado,
				permita-me ajudá-lo com as sugestões abaixo:</p>
				<ul>
					<li><a
					href="http://localhost/wordpress/index.php/category/primeira/">Categoria "Primeira"</a></li>
					<li><a
					href="http://localhost/wordpress/index.php/category/segunda/">Categoria "Segunda"</a></li>
					<li><a
					href="http://localhost/wordpress/index.php/category/terceira/">Categoria "Terceira"</a></li>
					<li><a
					href="http://localhost/wordpress/index.php/category/sem-categoria/">posts não categorizados</a></li>
				</ul>
				<?php
				$to = get_option('admin_email');
				$subject = 'Erro 404!';
				$body = get_option('home').' Apresentou erro na
				seguinte url ->'.$_SERVER['REQUEST_URI'];
				$headers = array('Content-Type: text/html; charset=UTF-8');
 
				wp_mail( $to, $subject, $body, $headers );?>
				<p><h4>Tomei a liberdade de enviar um email para o
				Administrador para que o mesmo verifique esta situação,
				obrigado pela atenção!</h4></p>
			</div>
		</div>
		<aside role="complementary" class="col-md-4">
			<div class="sidebar"><?php get_sidebar();?></div>
		</aside>
	</div>
<?php get_footer();?>

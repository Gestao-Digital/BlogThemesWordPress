<?php include_once('header.php');?>
<body>
    <div class="container">
    <div class="header">
		<br>
		<h1><?php bloginfo('name'); ?></h1>
		<br>
		<h2><?php bloginfo('description'); ?></h2>
	</div>
	<div class="menu"><?php include_once('header-menu.php'); ?></div>
	<div class="row">
		<div role="main" class="col-md-8">
			<div class="content">Área de conteudo</div>
		</div>
		<aside role="complementary" class="col-md-4">
			<div class="sidebar"><?php get_sidebar(); ?></div>
		</aside>
	</div>
<?php include_once('footer.php');?>

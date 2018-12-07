<?php
/*
Template Name: modelo1
*/
?>
<?php include_once('header.php');?>
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
			<div class="content"><?php include_once('loop-page.php'); ?></div>
		</div>
		<aside role="complementary" class="col-md-4">
			<div class="sidebar"><?php get_sidebar('sidebar-2');?></div>
		</aside>
	</div>
<?php include_once('footer.php');?>

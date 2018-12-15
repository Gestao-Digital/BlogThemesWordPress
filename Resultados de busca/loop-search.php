<!-- Container do artigo -->	
	<div class="artigo">
		<?php the_post(); ?>
		<h1>
		<?php printf( 'Resultados da busca por: %s', get_search_query() ); ?>
		</h1>
		<div class="texto">

		<!--Exibe a postagem mais recente-->
		<a href="<?php the_permalink(); ?>">
		<h2><?php the_title();?></h2></a><br>
		Publicado em <?php echo get_the_time('d/m/Y H:i'); ?>
		 por <?php the_author_posts_link(); ?>
		 na(s) categoria(s) <?php the_category(' & '); ?><br>

		<!-- Exibe as demais postagens -->
		<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>">
		<h2><?php the_title();?></h2></a><br>
		Publicado em <?php echo get_the_time('d/m/Y H:i'); ?>
		 por <?php the_author_posts_link(); ?>
		 na(s) categoria(s) <?php the_category(' & '); ?><br>
		<?php endwhile; ?>
		</div>
	</div>

<!-- Container do artigo -->	
	<div class="artigo">
		<?php the_post(); ?>
	<!-- Título do post -->
		<div class="thumbnail">
		<h1>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<?php
		if ( has_post_thumbnail() ) {
		// mostra a imagem destacada
		the_post_thumbnail();
		} else {
		// mostra outra coisa (imagem, texto, etc.)
		}?></div>
		<div class="texto">
        
		<!-- Conteúdo do post -->
		<?php the_content(); ?>
		</div>
		<!-- Categoria -->
		<!-- Data -->
		Publicado em <?php the_date(); ?> por <?php the_author_posts_link(); ?>
		<strong> na categoria <?php the_category(' & '); ?></strong>
		
		<?php edit_post_link('[Vamos editar este post?]'); ?>
		
	</div>

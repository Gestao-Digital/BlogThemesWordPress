<!-- O loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	<!-- Container do artigo -->	
	<div class="artigo">
		
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
		<?php the_excerpt(); ?>
		</div>
		Publicado em <?php the_date(); ?> por <?php the_author_posts_link(); ?>
		 na categoria <?php the_category(' & '); ?>
		<br>
		
	</div>

	<?php endwhile; ?>
		<div class="navegacao">
			<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
			<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
		</div>
	<?php else: ?>
		<div class="artigo">
			<h2>Nada Encontrado</h2>
			<p>Erro 404</p>
			<p>Lamentamos mas não foram encontrados artigos.</p>
		</div>			
	<?php endif; ?>

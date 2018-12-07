<div class="pg-autor">
	<h2><?php the_author_meta( 'display_name' );?></h2>
	<fieldset><legend><?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '100' ); }?></legend>
		<h5 align="justify"><?php the_author_meta( 'description' ); ?></h5>
		Email de contato: <a href="mailto:<?php echo get_the_author_meta( 'user_email'); ?>">
		<?php the_author_meta( 'user_email'); ?></a>
	</fieldset>

	<fieldset><legend>Redes Sociais</legend>
		Site <a href="<?php the_author_meta( 'user_url' ); ?>" target="_blank"><?php the_author_meta( 'user_url' ); ?></a><br>
		Google+ <a href="<?php the_author_meta( 'googleplus' ); ?>" target="_blank"><?php the_author_meta( 'googleplus' ); ?></a><br>
		Twitter <a href="http://www.twitter.com/<?php the_author_meta( 'twitter' ); ?>" target="_blank"><?php the_author_meta( 'twitter' ); ?></a><br>
		Facebook <a href="<?php the_author_meta( 'facebook' ); ?>" target="_blank"><?php the_author_meta( 'facebook' ); ?></a>
	</fieldset>

	<fieldset><legend><h3>Postagens do autor(a)</h3></legend>
	<!-- O loop -->

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
	<!-- Título do post -->
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		em <?php the_date() ?> - <?php the_category('&'); ?><br>
	<!-- Autor -->
	<?php endwhile; ?>
	<div class="navegacao">
		<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
		<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
	</div>
	<?php else: ?>
	<?php endif; ?>
	</fieldset>
</div>

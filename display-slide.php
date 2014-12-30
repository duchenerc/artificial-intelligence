<section class="slide"
style="background-image:url(<?php the_post_thumbnail_src(); ?>);">
	<hgroup class="c">
		
		
		<?php if ( get_field( 'link' ) ): ?>
			
			<a href="<?php the_field( 'link' ); ?>" class="cc">
				<h1><?php the_field( 'heading' ); ?></h1>
				<p>
					<?php the_field( 'content' ); ?>
				</p>
			</a>
			
		<?php else: ?>
			
			<div class="cc">
				<h1><?php the_field( 'heading' ); ?></h1>
				<p>
					<?php the_field( 'content' ); ?>
				</p>
			</div>
			
		<?php endif; ?>
		
	</hgroup>
</section>

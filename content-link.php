<?php if ( is_singular() ): ?>
	
	<article id="article"
	style="background-image:url(<?php the_post_thumbnail_src( $post ); ?>);">
	<div class="c">
		<div <?php post_class( 'article cc c' ); ?>>
			
			<?php the_content(); ?>
			
		</div>
	</div>
</article>
	
<?php else: ?>
	
	<section <?php post_class( 'w' ); ?>>
		<hgroup class="c">
			<div class="cc">
				
				<div class="icon"></div>
				
				<ul class="meta">
					<li>
						<?php the_title(); ?>
					</li>
					<li>
						<?php the_time( 'n/j/Y g:i A' ); ?>
					</li>
				</ul>
				
				<div class="content">
					
					<?php the_content(); ?>
					
				</div>
				
			</div>
		</hgroup>
	</section>
	
<?php endif; ?>

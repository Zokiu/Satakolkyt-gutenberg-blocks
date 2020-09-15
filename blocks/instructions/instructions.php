
<div class="instructions_container">
<?php if ( have_rows( 'instructions' ) ): ?>

	<?php while ( have_rows( 'instructions' ) ) : the_row(); ?>
    
		<?php if ( get_row_layout() == 'instructions_layout' ) : ?>
			<h1 class="instructions_h1"><?php the_sub_field( 'instructions_title' ); ?></h1>
            <div class="instructions_list">
			<p><?php the_sub_field( 'instruction_list' ); ?></p>
            </div>
   	<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
</div>
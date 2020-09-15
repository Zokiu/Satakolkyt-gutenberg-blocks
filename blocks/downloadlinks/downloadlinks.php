<style>
.media-container{
    width: 100%;
    height: auto;    
    display: flex;
    flex-direction: row;
    margin-top: 5vh;
}
@media (max-width: 768px) {
    .media-container {
        margin-top: 3vh;
        flex-direction: column;
    }

}
</style>

<div class="media-container">
<?php if ( have_rows( 'satakolkyt_in_media' ) ): ?>
	<?php while ( have_rows( 'satakolkyt_in_media' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'satakolkyt_in_media_layout' ) : ?>
            <?php 
                $mobilebackground = get_sub_field( 'mobile_background_color' );
            ?>
            <?php get_template_part('template-parts/content' , 'pages-tabs');?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
</div>

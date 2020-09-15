<style>
	.social_links-container{
		display:flex;
		justify-content: center;
		align-items: center;
	}
	.social_links-title{
		margin: 2vh;
	}
	.social_icon{
		margin: 5px;
		
	}	
	.social_icons{
		border-radius: 7px; 
		width: 44px; 
		height: 44px;
	}
	.hashtags{
		display: flex;
		flex-direction: column;
		margin: 5px 20px 20px 20px;
    
	}
	.social_icons-container{ 
		display: flex;
		flex-wrap: nowrap;  
    }
	@media (max-width: 800px) {
		.social_links-container{ 
		flex-direction: column;

    }
	}
	@media (max-width: 800px) {
		.social_icons-container{ 
		flex-wrap: wrap;
		text-align: center;      
    }
	}
</style>
<div class="social_links-container">
<?php if ( have_rows( 'social_media_links' ) ): ?>
	<?php while ( have_rows( 'social_media_links' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'social_media_links_layout' ) : ?>

			<h1 class="social_links-title"><?php the_sub_field( 'social_links_title' ); ?></h1>

	<div class="social_icons-container">
		<div class="social_icon">
			<?php $social_link_icon_1 = get_sub_field( 'social_link_icon_1' ); ?>
			<?php $social_media_link_1 = get_sub_field( 'social_media_link_1' ); ?>
			<?php if ( $social_media_link_1 ) { ?>
				<a style="text-decoration: none;" href="<?php echo $social_media_link_1['url']; ?>" target="<?php echo $social_media_link_1['target']; ?>"><?php if ( $social_link_icon_1 ) { ?>
				<img class="social_icons" src="<?php echo $social_link_icon_1['url']; ?>" alt="<?php echo $social_link_icon_1['alt']; ?>" />
			<?php } ?></a>
			<?php } ?>
		</div>
			
		<div class="social_icon">
			<?php $social_media_link_2 = get_sub_field( 'social_media_link_2' ); ?>
			<?php if ( $social_media_link_2 ) { ?>
				<a style="text-decoration: none;" href="<?php echo $social_media_link_2['url']; ?>" target="<?php echo $social_media_link_2['target']; ?>"><?php $social_link_icon_2 = get_sub_field( 'social_link_icon_2' ); ?>
			<?php if ( $social_link_icon_2 ) { ?>
				<img class="social_icons" src="<?php echo $social_link_icon_2['url']; ?>" alt="<?php echo $social_link_icon_2['alt']; ?>" />
			<?php } ?></a>
			<?php } ?>
			</div>
			
		<div class="social_icon">
			<?php $social_media_link_3 = get_sub_field( 'social_media_link_3' ); ?>
			<?php if ( $social_media_link_3 ) { ?>
				<a style="text-decoration: none;" href="<?php echo $social_media_link_3['url']; ?>" target="<?php echo $social_media_link_3['target']; ?>"><?php $social_link_icon_3 = get_sub_field( 'social_link_icon_3' ); ?>
			<?php if ( $social_link_icon_3 ) { ?>
				<img class="social_icons" src="<?php echo $social_link_icon_3['url']; ?>" alt="<?php echo $social_link_icon_3['alt']; ?>" />
			<?php } ?></a>
			<?php } ?>
			</div>
			
		<div class="social_icon">
			<?php $social_media_link_4 = get_sub_field( 'social_media_link_4' ); ?>
			<?php if ( $social_media_link_4 ) { ?>
				<a style="text-decoration: none;" href="<?php echo $social_media_link_4['url']; ?>" target="<?php echo $social_media_link_4['target']; ?>"><?php $social_link_icon_4 = get_sub_field( 'social_link_icon_4' ); ?>
			<?php if ( $social_link_icon_4 ) { ?>
				<img class="social_icons" src="<?php echo $social_link_icon_4['url']; ?>" alt="<?php echo $social_link_icon_4['alt']; ?>" />
			<?php } ?></a>
			<?php } ?>
			</div>
	</div>
		<div class="hashtags">
			<?php $first_hashtag_link = get_sub_field( 'first_hashtag_link' ); ?>
			<?php if ( $first_hashtag_link ) { ?>
				<a style="text-decoration: none; color: black; font-weight: 500;" href="<?php echo $first_hashtag_link['url']; ?>" target="<?php echo $first_hashtag_link['target']; ?>"><?php echo $first_hashtag_link['title']; ?></a>
			<?php } ?>

			<?php $second_hashtag_link = get_sub_field( 'second_hashtag_link' ); ?>
			<?php if ( $second_hashtag_link ) { ?>
				<a style="text-decoration: none; color: black; font-weight: 500;" href="<?php echo $second_hashtag_link['url']; ?>" target="<?php echo $second_hashtag_link['target']; ?>"><?php echo $second_hashtag_link['title']; ?></a>
			<?php } ?>
		</div>

		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
</div>

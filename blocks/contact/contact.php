<style>
    .contact-box_container{       
        width:100%; 
        height:auto;
        background-size: cover;
        text-align:center;
        margin: 10px 0px;
        vertical-align: middle; 
        background-color: #eee350;
    }
    .contact-box{
        z-index: 1;
        margin: auto; 
        width: 300px; 
        vertical-align: middle;
        background-color: #eee350;
    }
    .contact_description{
        text-align: left;
        display: inline-block; 
        margin-left: 20px; 
        line-height: 0.9;
        vertical-align: middle;
    }
    .contact_photo{
        display: inline-block;
        vertical-align: middle;
    }
</style>


<div style="margin-top: 4vh;" >
<?php if ( have_rows( 'contact_box' ) ): ?>
	<?php while ( have_rows( 'contact_box' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'contact_box' ) : ?>
          
            <div class="contact-box_container" style="">
            <style>
                .contact-box_container{
                    background-image: url('<?php the_sub_field('contact_box_background'); ?>');
                    background-size: cover;
                    background-position: center center;
                }
                @media (max-width: 768px) {
                    .contact-box_container{
                    background-image: none;
                }
                }
            </style>
            <div class="contact-box">

                <h1><?php the_sub_field( 'title' ); ?></h1>

                <div class="contact_photo">
                <?php $contact_person_photo = get_sub_field( 'contact_person_photo' ); ?>
                <?php if ( $contact_person_photo ) { ?>
                    <img style="border-radius: 50%; width:95px; height:95px; -webkit-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.75);" src="<?php echo $contact_person_photo['url']; ?>" alt="<?php echo $contact_person_photo['alt']; ?>" />
                <?php } ?>            
                </div>


                <div class="contact_description">
                    <p><?php the_sub_field( 'description' ); ?></p>
                </div>
            </div>
        </div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>
</div>
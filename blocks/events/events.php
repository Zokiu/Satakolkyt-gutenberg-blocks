<style>
    .events_section{
    display:flex;
    flex-wrap: wrap;
    justify-content:center;
    align-items:center;
}
.eventbox{
    min-height: 376px;
    
    margin: 10px;    
    background:#fdfcee;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}
.event-box_date{
    margin-top: 1px;
}
.events-box_content{
    padding: 15px;    
    display: flex;
    flex-flow: column;  
}
.slider {
    width: 65vw;
    min-height: 376px;
    margin: 20px auto;
        padding-bottom: 1vh;
    }
    @media (max-width: 768px) {
        .slider {
        width: 85vw;      
    }
}
.slick-slide {
    margin: 0px 20px;
    width: 360px;
}
    .slick-slide img {
    width: 100%;
    height: 250px;    
    }
    .slick-prev:before,
    .slick-next:before {
    color: black;
    }
    .slick-prev{
        left: -18px;
    }
    .slick-next{
    right: -18px;
    }
    .slick-track{
        margin-bottom: 4vh; 
    }
    .events_special-message{
        text-align: justify;
    }
    @media (max-width: 768px) {
        .events_special-message {
        text-align: center;
        width: 85vw;      
    }
}
</style>

<h1 style="font-weight: bold; text-align: center; margin:4vh;"><?php the_field( 'events_section_title' ); ?></h1>


<section class="regular slider">  
<?php if ( have_rows( 'event' ) ): ?>
    <?php while ( have_rows( 'event' ) ) : the_row(); ?>
    <div class="eventbox"style="" >
        <section class="single_event_box" style=" ">
            <?php if ( get_row_layout() == 'event_box' ) : ?>   
            
            
            <?php if ( get_sub_field( 'image' ) ) { ?>
                    <img style="background-size: cover;background-position: center center;" src="<?php the_sub_field( 'image' ); ?>" />
                    <?php } ?>
                
<section class="events-box_content">
        <h4 style="font-size: 1.3em;"><?php the_sub_field( 'event_title' ); ?></h4>

        <time class="event-box_date"><?php the_sub_field( 'event_date' ); ?> </time>

        <p style="text-align: justify; font-size: 1em;"><?php the_sub_field( 'event_description' ); ?></p>

        <?php $link = get_sub_field( 'link' ); ?>
        <?php if ( $link ) { ?>
            <a style="bottom: 0;left: 0;"  href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php } ?>
        
</section>

            <?php endif; ?>
            </section>
    </div>
	<?php endwhile; ?>
<?php else: ?>
    <div class="events_special-message">
    <p><?php the_field( 'message_if_case_there_are_no_events' ); ?></p>
    </div>
    <?php //   ?>
<?php endif; ?>
</section>
<div style="text-align: center;">
<?php $more_events_link = get_field( 'more_events_link' ); ?>
<?php if ( $more_events_link ) { ?>
	<a style="text-decoration: underline;color: #0366d6;font-size: 2em;font-weight: 500;" href="<?php echo $more_events_link['url']; ?>" target="<?php echo $more_events_link['target']; ?>"><?php echo $more_events_link['title']; ?></a>
<?php } ?>
</div>

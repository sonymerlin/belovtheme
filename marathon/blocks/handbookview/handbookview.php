<?php
/**
 * Handbookview Block template.
 *
 */

// Load values and assign defaults.

if( have_rows('left_column') ):
    while( have_rows('left_column') ): the_row();
        $post_image = get_sub_field('post_image');
        $post_category = get_sub_field('post_category');
        $post_title = get_sub_field('post_title');
        $post_author = get_sub_field('post_author');
        $post_date = get_sub_field('post_date');

    endwhile;
endif;

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

?>
 <div class="main">
        <section class="main-article">
            <img src="<?php echo $post_image; ?>" alt="Lil Nas X Taken On NYC Half Marathon">
            <h4><?php echo $post_category; ?></h4>
            <h2><?php echo $post_title; ?></h2>
            <p><?php echo $post_author; ?> &bull; <?php echo $post_date; ?></p>

        </section>
    <?php 
    if( have_rows('right_column') ):
    while( have_rows('right_column') ): the_row();
?>
    <section class="side-articles">
    
           <?php  if( have_rows('posts') ):
                while( have_rows('posts') ): the_row();
            
            ?>
                
                    <article>
                        <div class="image"><img src="<?php echo get_sub_field('post_image'); ?>" alt="Side Article 1"></div>
                        <div class="content">
                        <h4><?php echo get_sub_field('post_category'); ?></h4>
                        <h3><?php echo get_sub_field('post_title');  ?></h3>
                        <p><?php echo get_sub_field('post_author');  ?> &bull; <?php echo get_sub_field('post_date'); ?></p>
                        </div>
                    </article>
              

            <?php
                endwhile;
            endif;
            ?>
      </section>
    <?php
    endwhile;
    endif;
    ?>
    </div>


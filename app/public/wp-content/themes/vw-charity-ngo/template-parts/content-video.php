<?php
/**
 * The template part for displaying Video Post
 *
 * @package VW Charity NGO  
 * @subpackage vw_charity_ngo
 * @since VW Charity NGO  1.0
 */
?>
<?php 
  $vw_charity_ngo_archive_year  = get_the_time('Y'); 
  $vw_charity_ngo_archive_month = get_the_time('m'); 
  $vw_charity_ngo_archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<?php
  $vw_charity_ngo_toggle_postdate = get_theme_mod( 'vw_charity_ngo_toggle_postdate' );
  if ( 'Disable' == $vw_charity_ngo_toggle_postdate ) {
   $colmd = 'col-lg-12 col-md-12';
  } else { 
   $colmd = 'col-lg-10 col-md-10';
  } 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box">
    <?php $vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_blog_layout_option','Default');
    if($vw_charity_ngo_theme_lay == 'Default'){ ?>
      <div class="box-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the video file.
            if ( ! empty( $video ) ) {
              foreach ( $video as $video_html ) {
                echo '<div class="entry-video">';
                  echo $video_html;
                echo '</div>';
              }
            };
          };
        ?>  
      </div>
      <div class="row">
        <?php if ( 'Disable' != $vw_charity_ngo_toggle_postdate ) {?>
          <div class="col-lg-2 col-md-2">
            <div class="datebox">
              <div class="date-monthwrap">
                <span class="date-month"><a href="<?php echo esc_url( get_day_link( $vw_charity_ngo_archive_year, $vw_charity_ngo_archive_month, $vw_charity_ngo_archive_day)); ?>"><?php echo esc_html( get_the_date( 'M' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>

                <span class="date-day"><a href="<?php echo esc_url( get_day_link( $vw_charity_ngo_archive_year, $vw_charity_ngo_archive_month, $vw_charity_ngo_archive_day)); ?>"><?php echo esc_html( get_the_date( 'd') ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
              </div>
              <div class="yearwrap">
                <span class="date-year"><a href="<?php echo esc_url( get_day_link( $vw_charity_ngo_archive_year, $vw_charity_ngo_archive_month, $vw_charity_ngo_archive_day)); ?>"><?php echo esc_html( get_the_date( 'Y' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="<?php echo esc_html( $colmd ); ?>">
          <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>      
          <div class="new-text">
            <div class="entry-content">
              <p>
                <?php $vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_excerpt_settings','Excerpt');
                if($vw_charity_ngo_theme_lay == 'Content'){ ?>
                  <?php the_content(); ?>
                <?php }
                if($vw_charity_ngo_theme_lay == 'Excerpt'){ ?>
                  <?php if(get_the_excerpt()) { ?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_charity_ngo_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_charity_ngo_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_charity_ngo_excerpt_suffix',''));?></p>
                  <?php }?>
                <?php }?>
              </p>
            </div>
          </div>
          <?php if( get_theme_mod('vw_charity_ngo_button_text','Read More') != ''){ ?>
            <div class="content-bttn">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_charity_ngo_button_text',__('Read More','vw-charity-ngo')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_charity_ngo_button_text',__('Read More','vw-charity-ngo')));?></span></a>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }else if($vw_charity_ngo_theme_lay == 'Center'){ ?>
      <div class="new-text">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2> 
        <?php if( get_theme_mod( 'vw_charity_ngo_toggle_postdate',true) != '' || get_theme_mod( 'vw_charity_ngo_toggle_author',true) != '' || get_theme_mod( 'vw_charity_ngo_toggle_comments',true) != '') { ?>
          <div class="metabox">
            <?php if(get_theme_mod('vw_charity_ngo_toggle_postdate',true)==1){ ?>
                <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_charity_ngo_archive_year, $vw_charity_ngo_archive_month, $vw_charity_ngo_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_charity_ngo_toggle_author',true)==1){ ?>
                <span class="entry-author"><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_charity_ngo_toggle_comments',true)==1){ ?>
                <span class="entry-comments"> <i class="far fa-comments"></i> <?php comments_number( '0 Comments', '0 Comments', '% Comments' ); ?> </span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="box-image">
          <?php
            if ( ! is_single() ) {
              // If not a single post, highlight the video file.
              if ( ! empty( $video ) ) {
                foreach ( $video as $video_html ) {
                  echo '<div class="entry-video">';
                    echo $video_html;
                  echo '</div>';
                }
              };
            };
          ?>  
        </div>
        <div class="new-text">
          <div class="entry-content">
            <p>
              <?php $vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_excerpt_settings','Excerpt');
              if($vw_charity_ngo_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_charity_ngo_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_charity_ngo_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_charity_ngo_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_charity_ngo_excerpt_suffix',''));?></p>
                <?php }?>
              <?php }?>
            </p>
          </div>
        </div>
        <?php if( get_theme_mod('vw_charity_ngo_button_text','Read More') != ''){ ?>
          <div class="content-bttn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_charity_ngo_button_text',__('Read More','vw-charity-ngo')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_charity_ngo_button_text',__('Read More','vw-charity-ngo')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php }else if($vw_charity_ngo_theme_lay == 'Left'){ ?>
      <div class="new-text">
        <div class="box-image">
          <?php
            if ( ! is_single() ) {
              // If not a single post, highlight the video file.
              if ( ! empty( $video ) ) {
                foreach ( $video as $video_html ) {
                  echo '<div class="entry-video">';
                    echo $video_html;
                  echo '</div>';
                }
              };
            };
          ?>  
        </div>
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2> 
        <?php if( get_theme_mod( 'vw_charity_ngo_toggle_postdate',true) != '' || get_theme_mod( 'vw_charity_ngo_toggle_author',true) != '' || get_theme_mod( 'vw_charity_ngo_toggle_comments',true) != '') { ?>
          <div class="metabox">
            <?php if(get_theme_mod('vw_charity_ngo_toggle_postdate',true)==1){ ?>
                <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_charity_ngo_archive_year, $vw_charity_ngo_archive_month, $vw_charity_ngo_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_charity_ngo_toggle_author',true)==1){ ?>
                <span class="entry-author"><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_charity_ngo_toggle_comments',true)==1){ ?>
                <span class="entry-comments"> <i class="far fa-comments"></i> <?php comments_number( '0 Comments', '0 Comments', '% Comments' ); ?> </span>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="new-text">
          <div class="entry-content">
            <p>
              <?php $vw_charity_ngo_theme_lay = get_theme_mod( 'vw_charity_ngo_excerpt_settings','Excerpt');
              if($vw_charity_ngo_theme_lay == 'Content'){ ?>
                <?php the_content(); ?>
              <?php }
              if($vw_charity_ngo_theme_lay == 'Excerpt'){ ?>
                <?php if(get_the_excerpt()) { ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_charity_ngo_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_charity_ngo_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_charity_ngo_excerpt_suffix',''));?></p>
                <?php }?>
              <?php }?>
            </p>
          </div>
        </div>
        <?php if( get_theme_mod('vw_charity_ngo_button_text','Read More') != ''){ ?>
          <div class="content-bttn">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html(get_theme_mod('vw_charity_ngo_button_text',__('Read More','vw-charity-ngo')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_charity_ngo_button_text',__('Read More','vw-charity-ngo')));?></span></a>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
  <div class="clearfix"></div>
</article>
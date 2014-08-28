<?php
  // Get a title
  function title_field($title)
  {
    $title = get_field($title);
    
    if ( variable_exists($title) )
      echo '<h1 class="panel__heading text-secondary">' . $title . '</h1>';
  }
  
  // Get some text
  function text_field($text, $set_width = false, $wrapper = false)
  {
    $text = get_field($text);
    $set_width = ( $set_width === true ? 'class="panel__text"' : false );
    if ( $wrapper === true )
    {
      if ( variable_exists($text) ) echo '<p ' . $set_width . '>' . $text . '</p>';
    }
    else
    {
      echo $text;
    }
  }

  // Not sure how to put this into a useful function yet but it's a useful bit of code for srcset
  /*
              $image = get_field('product_image');
              $size = 'product_main';
              $size_2x = 'product_main_2x';
              $thumb = $image['sizes'][$size];
              $thumb_2x = $image['sizes'][$size_2x];
              <img srcset="<?php echo $thumb; ?> 1x, <?php echo $thumb_2x; ?> 2x" src="$thumb">
  */
?>
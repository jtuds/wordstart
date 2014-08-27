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
?>
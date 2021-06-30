<?php  

    $config = array(
        'skin' => 'bootstrap',
        'brd_key' => element('brd_key', $view),
        'post_md' => element('post_md', $view),
        'cache_minute' => 0,
        
        
    );
  
       echo $this->board->media_latest($config);
      
?>


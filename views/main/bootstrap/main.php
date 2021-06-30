<?php
$k = 0;
$is_open = false;
if (element('board_list', $view)) {
    foreach (element('board_list', $view) as $key => $board) {
        $config = array(
            'skin' => 'bootstrap',
            'brd_key' => element('brd_key', $board),
            'limit' => 5,
            'length' => 40,
            'is_gallery' => '',
            'image_width' => '',
            'image_height' => '',
            'cache_minute' => 1,
            'bgr_name' => element(element('brd_id', $board), element('group_list', $view)),
        );
        if ($k % 2 === 0) {
            echo '<div class="row">';
            $is_open = true;
        }
        echo $this->board->latest($config);
        if ($k % 2 === 1) {
            echo '</div>';
            $is_open = false;
        }
        $k++;
    }
}
if ($is_open) {
    echo '</div>';
    $is_open = false;
}

// stdClass Object ( [multicast_id] => 7410896442158011319 [success] => 1 [failure] => 2 [canonical_ids] => 0 [results] => Array ( [0] => stdClass Object ( [message_id] => 0:1537492369255208%68d0033bf9fd7ecd ) [1] => stdClass Object ( [error] => NotRegistered ) [2] => stdClass Object ( [error] => NotRegistered ) ) )

// $aaa = '{"multicast_id":7410896442158011319,"success":1,"failure":2,"canonical_ids":0,"results":[{"message_id":"0:1537492369255208%68d0033bf9fd7ecd"},{"error":"NotRegistered"},{"error":"NotRegistered"},{ "message_id": "1:2342", "registration_id": "32" }]}';

// $bbb = json_decode($aaa,1);

//  foreach(element('results',$bbb) as $key => $value){
//     if(array_key_exists("registration_id",$value)) print_r($value);
//     else "b";
//  }
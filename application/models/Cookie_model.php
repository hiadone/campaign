<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Post File model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Cookie_model extends CB_Model
{

    /**
     * 테이블명
     */
    public $_table = 'cookie';

    /**
     * 사용되는 테이블의 프라이머리키
     */
    public $primary_key = 'id'; // 사용되는 테이블의 프라이머리키

    function __construct()
    {
        parent::__construct();
    }
    
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 메인 페이지를 담당하는 controller 입니다.
 */
class Reward extends CB_Controller
{

    /**
     * 모델을 로딩합니다
     */
    protected $models = array('Post', 'Media_selfcert_history','Post_extra_vars');

    public $reward_history_model='';
    public $reward_key='';
    
    /**
     * 헬퍼를 로딩합니다
     */
    protected $helpers = array('form', 'array', 'number');

    function __construct()
    {
        parent::__construct();

        /**
         * 라이브러리를 로딩합니다
         */
        $this->load->library(array('querystring'));
    }


    /**
     * reward 정보
     */
    public function update($post_id,$code)
    {
        
        if (empty($post_id) || empty($code) || empty($skin)) {
            show_404();
        }

       

        
        //$this->db->cache_on();
        

       
        
        $post = $this->Post_model->get_one($post_id);
        
        $extravars = $this->Post_extra_vars_model->get_all_meta($post_id);
        

        if ( ! element('post_id', $post)) {
            show_404();
        }
        if (element('post_del', $post) > 1) {
            show_404();
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('brd_id', $board)) {
            show_404();
        }
        
        
        
        $where = array(
            'msh_key' => $code,
            'post_id' => $post_id,
        );
        $selfcert = $this->Media_selfcert_history_model->get_one('', '', $where);


        if(empty(element('post_id',$selfcert)){
            show_404();   
        }


        $layoutconfig = array(
            'layout' => 'blank',
            'skin' => $skin,
            'layout_dir' => 'bootstrap',
            'skin_dir' => 'reward/'.element('brd_key',$board).'/'.element('post_md',$post),
            'mobile_skin_dir' => 'reward/'.element('brd_key',$board).'/'.element('post_md',$post),
            'mobile_layout_dir' => 'bootstrap',
            
        );


        $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
        $this->data = $view;
        
        $this->layout = element('layout_skin_file', element('layout', $view));
        $this->view = element('view_skin_file', element('layout', $view));
        
    }




}
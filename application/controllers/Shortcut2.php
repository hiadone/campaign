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
class Shortcut2 extends CB_Controller
{

    /**
     * 모델을 로딩합니다
     */
    protected $models = array('Post', 'Post_extra_vars','Cookie');

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
        $this->load->library(array('querystring', 'board_group'));
    }


    /**
     * 전체 메인 페이지입니다
     */
    public function shortcut_info($brd_key = 0,$post_md = 0,$cookie_id = 0)
    {
        
        if (empty($post_md) || empty($brd_key)) {
            show_404();
        }
        
        $where = array(
            'post_md' => $post_md,
            'brd_id' => $this->board->item_key('brd_id', $brd_key),
        );

        $post = $this->Post_model->get_one('','',$where);
        

        if (element('post_del', $post) > 1) {
            show_404();
        }

        $post['extravars'] = $this->Post_extra_vars_model->get_all_meta(element('post_id', $post));
        
        if (!empty($cookie_id)) {
            $short_cookie = $this->Cookie_model->get_one($cookie_id);
            $view['view']['short_cookie']=$short_cookie;
        }
        
        
        
        $view['view']['post'] = $post;
        
        
        $view['view']['link'] = $link = array();

        if (element('post_link_count', $post)) {
            $this->load->model('Post_link_model');
            $linkwhere = array(
                'post_id' => element('post_id', $post),
            );
            $view['view']['link'] = $link = $this->Post_link_model
                ->get('', '', $linkwhere, '', '', 'pln_id', 'ASC');
            if ($link && is_array($link)) {
                foreach ($link as $key => $value) {
                    $view['view']['link'][$key]['link_link'] = site_url('postact/shortcut_link/' . element('pln_id', $value));
                }
            }
        }
        $view['view']['link_count'] = $link_count = count($link);

        if (element('post_file', $post) OR element('post_image', $post)) {
            $this->load->model('Post_file_model');
            $filewhere = array(
                'post_id' => element('post_id', $post),
            );
            $view['view']['file'] = $file = $this->Post_file_model
                ->get('', '', $filewhere, '', '', 'pfi_id', 'ASC');
                
            $view['view']['file_image'] = array();
            

            if ($file && is_array($file)) {
                foreach ($file as $key => $value) {
                    if (element('pfi_is_image', $value)) {
                        $value['origin_image_url'] = site_url(config_item('uploads_dir') . '/post/' . element('pfi_filename', $value));
                        $value['download_link'] = site_url('postact/shortcut_download/' . element('pfi_id', $value));
                        $value['thumb_image_url'] = thumb_url('post', element('pfi_filename', $value));
                        $view['view']['file_image'][] = $value;
                    } 
                }
            }
            $view['view']['file_image_count'] = count($view['view']['file_image']);
        }
        
        $userAgent = $this->agent->agent_string() ? $this->agent->agent_string() : '';        
        $view['view']['userAgent']=get_useragent_info($userAgent);

        $layoutconfig = array(
            'layout' => 'blank',
            'skin' => 'shortcut',
            'layout_dir' => 'bootstrap',
            'skin_dir' => 'shortcut',
            'mobile_layout_dir' => 'bootstrap',
            'mobile_skin_dir' => 'shortcut',
        );
        $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
        $this->data = $view;
        
        $this->layout = element('layout_skin_file', element('layout', $view));
        $this->view = element('view_skin_file', element('layout', $view));
        
    }
}

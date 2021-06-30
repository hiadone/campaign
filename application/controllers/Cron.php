<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Bannerclick class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 관리자>페이지설정>배너 클릭 controller 입니다.
 */
class Cron extends CB_Controller {

 

    protected $models = array('Shortcut_file_download_stat','Shortcut_link_click_stat','Shortcut_file_download_log','Shortcut_link_click_log','Mobusi_click_stat','Mobusi_link_stat','Mobusi_click_log','Mobusi_link_log','Media_link_stat','Media_link_log','Media_click_stat','Media_click_log','Cookie');   

    function __construct()
    {
        parent::__construct();

        /**
         * 라이브러리를 로딩합니다
         */
        

        /**
         * 로그인이 필요한 페이지입니다
         */
        
    }

    public function shortcut_migration(){

        
        // 이벤트 라이브러리를 로딩합니다

        $result = $this->Shortcut_file_download_stat_model
            ->migration();
        
        
         foreach($result as $value){
            
             $this->Shortcut_file_download_stat_model->replace($value);
         }

         $result = $this->Shortcut_link_click_stat_model
            ->migration();
        
        
         foreach($result as $value){
            
             $this->Shortcut_link_click_stat_model->replace($value);
         }

        $criterion = cdate('Y-m-d 00:00:00', strtotime('-1 month'));

        $deletewhere = array(
                    'slc_datetime <=' => $criterion,
                );

        $result = $this->Shortcut_link_click_log_model->delete_where($deletewhere);

        $deletewhere = array(
                    'sfd_datetime <=' => $criterion,
                );

        $result = $this->Shortcut_file_download_log_model->delete_where($deletewhere);

        echo $result;
    }

    public function mobusi_migration(){

        
        //이벤트 라이브러리를 로딩합니다

        $result = $this->Mobusi_click_stat_model
            ->migration();
        
        
         foreach($result as $value){
            
             $this->Mobusi_click_stat_model->replace($value);
         }

         $result = $this->Mobusi_link_stat_model
            ->migration();
        
        
         foreach($result as $value){
           
             $this->Mobusi_link_stat_model->replace($value);
         }

        $criterion = cdate('Y-m-d 00:00:00', strtotime('-1 day'));

        $deletewhere = array(
                    'mlc_datetime <=' => $criterion,
                );

        $result = $this->Mobusi_link_log_model->delete_where($deletewhere);

        $deletewhere = array(
                    'mfd_datetime <=' => $criterion,
                );

        $result = $this->Mobusi_click_log_model->delete_where($deletewhere);

        echo $result;
    }


    public function media_migration(){

        
        //이벤트 라이브러리를 로딩합니다

        $result = $this->Media_click_stat_model
            ->migration();
        
        
         foreach($result as $value){
            
             $this->Media_click_stat_model->replace($value);
         }

         $result = $this->Media_link_stat_model
            ->migration();
        
        
         foreach($result as $value){
           
             $this->Media_link_stat_model->replace($value);
         }

        $criterion = cdate('Y-m-d 00:00:00', strtotime('-1 day'));

        $deletewhere = array(
                    'mlc_datetime <=' => $criterion,
                );

        $result = $this->Media_link_log_model->delete_where($deletewhere);

        $deletewhere = array(
                    'mfd_datetime <=' => $criterion,
                );

        $result = $this->Media_click_log_model->delete_where($deletewhere);

        echo $result;
    }

    public function shortcut_cookie_delete(){

        
        //이벤트 라이브러리를 로딩합니다

         

        $timestamp = strtotime('-1 month');

        $deletewhere = array(
                    'timestamp <=' => $timestamp,
                );

        $result = $this->Cookie_model->delete_where($deletewhere);

        echo $result;
    }
}

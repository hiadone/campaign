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
class Media_multiple extends CB_Controller
{

    /**
     * 모델을 로딩합니다
     */
    protected $models = array('Post', 'Post_extra_vars','Cookie','Media_multiple_history');

    public $media_history_model='';
    public $media_key='';
    
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
        $this->load->library(array('querystring', 'board_group','email'));
    }


    /**
     * media 정보
     */
    public function index($brd_key = 0,$post_md = 0,$multi_code = '')
    {
        if (empty($post_md) || empty($brd_key) ) {
            show_404();
        }

        $is_multi_code = false;
        

        $this->set_init($brd_key);
        //$this->db->cache_on();
        $where = array(
            'post_md' => $post_md,
            'brd_id' => $this->board->item_key('brd_id', $brd_key),
        );

        $post = $this->Post_model->get_one('','',$where);
        

        

        if (element('post_del', $post) > 1) {
            show_404();
        }

        $post['extravars'] = $this->Post_extra_vars_model->get_all_meta(element('post_id', $post));
        
        if(element('campaign_status',element('extravars',$post)) ==='disable') show_404();
        
        if($post['extravars']['campaign_multi'] && $multi_code){
            foreach(explode(",",$post['extravars']['campaign_multi']) as $value){
                if($value === $multi_code) $is_multi_code =true;
            }
            if(!$is_multi_code) show_error('잘못된 접근입니다.'); 
        }

        

        if(!empty(element('campaign_type',element('extravars',$post))) && element('campaign_type',element('extravars',$post)) !== '상관없음' && element('campaign_type',element('extravars',$post)) !==$this->cbconfig->get_device_type()) show_404();

        if (!empty($cookie_id)) {
            $short_cookie = $this->Cookie_model->get_one($cookie_id);
            $view['view']['short_cookie']=$short_cookie;
        }
        
        
        
        $view['view']['post'] = $post;
        $view['view']['multi_code'] = $multi_code;
        
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
        //$this->db->cache_off();
        $userAgent = $this->agent->agent_string() ? $this->agent->agent_string() : '';        
        $view['view']['userAgent']=get_useragent_info($userAgent);

        
        
        $this->load->library('form_validation');
        

        $config = array(
            array(
                'field' => 'mlh_name',
                'label' => '이름',
                'rules' => 'trim|required',
            ),
            array(
                'field' => 'mlh_age',
                'label' => '나이',
                'rules' => 'trim|required|is_numeric|callback__mlh_agecheck[' . element('campaign_age',element('extravars',$post)) . ']',
            ),
            array(
                'field' => 'mlh_mobileno',
                'label' => '연락처',
                // 'rules' => 'trim|required|valid_phone|callback__mlh_mobileno_dupcheck[' . $this->input->post('post_id') .','.$this->input->post('multi_code'). ']',
                'rules' => 'trim|required|valid_mobile|callback__mlh_mobileno_dupcheck[' . $this->input->post('post_id') .']',
            ),

            
            
        );

        if($this->input->post('post_id') == "526" || $this->input->post('post_id') == "527" || $this->input->post('post_id') == "538"){
            
                $config[] = array(
                    'field' => 'cfc_num_',
                    'label' => '인증번호를 입력해 주세요',
                    'rules' => 'trim|required|callback__cfc_num_map[' . $this->input->post('post_id') . ',' . $this->input->post('mlh_mobileno') . ']',
                );

                $_POST['mlh_text'] = $this->input->post('cfc_num_');
            }

        $this->form_validation->set_rules($config);
        $form_validation = $this->form_validation->run();
        
        $skin='index';
        
        

        if ($form_validation === false) {
           

            $layoutconfig = array(
                'layout' => 'blank',
                'skin' => $skin,
                'layout_dir' => 'bootstrap',
                'skin_dir' => 'media/'.$brd_key.'/'.$post_md,
                'mobile_skin_dir' => 'media/'.$brd_key.'/'.$post_md,
                'mobile_layout_dir' => 'bootstrap',
                
            );


            $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
            $this->data = $view;
            
            $this->layout = element('layout_skin_file', element('layout', $view));
            $this->view = element('view_skin_file', element('layout', $view));
        } else {
            $param =& $this->querystring;
            if (empty($this->input->post('post_id')) OR $this->input->post('post_id') < 1) {
                show_404();
            }
            $mlh_goods_type='';
            if($this->input->post('mlh_goods_type',null,'') ==="1")
                $mlh_goods_type="럭셔리";
            elseif($this->input->post('mlh_goods_type',null,'') ==="2")
                $mlh_goods_type="프로페셔널";
            $insertdata = array(
                'post_id' => $this->input->post('post_id'),
                'multi_code' => $multi_code,
                'mlh_name' => $this->input->post('mlh_name',null,''),
                'mlh_age' => $this->input->post('mlh_age',null,''),
                'mlh_gender' => $this->input->post('mlh_gender',null,''),
                'mlh_email' => $this->input->post('mlh_email',null,''),
                'mlh_mobileno' => $this->input->post('mlh_mobileno',null,''),
                'mlh_datetime' => cdate('Y-m-d H:i:s'),
                'mlh_ip' => $this->input->ip_address(),
                'mlh_referer' => $this->agent->referrer(),
                'mlh_text' => $this->input->post('mlh_text',null,''),
                'mlh_status' => 1,
                'mlh_val1' => $mlh_goods_type,
                $this->media_key => $this->input->post($this->media_key,null,''),
            );

           
            $mlh_id = $this->{ucfirst($this->media_history_model)}->insert($insertdata);

            $extradata = array();
            if ($this->input->post('q_a') || $this->input->post('q_b') || $this->input->post('q_c')) {
                
                if(!empty($this->input->post('q_a'))) $extradata['q_a'] = $this->input->post('q_a', null, '');
                if(!empty($this->input->post('q_b'))) $extradata['q_b'] = $this->input->post('q_b', null, '');
                if(!empty($this->input->post('q_c'))) $extradata['q_c'] = $this->input->post('q_c', null, '');

                $this->Tenping_extra_vars_model->save($mlh_id, $this->board->item_key('brd_id', $brd_key), $extradata);
            }

            $view['view']['message'] = '고객님의 신청이 <br>
                정상적으로 접수 되었습니다.<br>
                빠른 시간내에 전문 상담사가 <br>
                연락 드리도록 하겠습니다.<br>
                감사합니다';
            

            $view['view']['mlh_id'] = $mlh_id;
            
            $view['view']['mlh_mobileno'] = $this->input->post('mlh_mobileno',null,'');
            
            if(element('post_id', $post) === '484' || element('post_id', $post) === '500' || element('post_id', $post) === '505'|| element('post_id', $post) === '516' || element('post_id', $post) === '518' || element('post_id', $post) === '520' || element('post_id', $post) === '600' || element('post_id', $post) === '601' || element('post_id', $post) === '602' || element('post_id', $post) === '620'){
                $this->email->clear(true);
                $this->email->from($this->cbconfig->item('webmaster_email'), '하이애드DB');
                $this->email->to('webmaster@jionmeditech.com');
                $this->email->subject('안녕하세요 하이애드원입니다.');
                $emailform['emailform'] = $insertdata;
                $message = $this->load->view('admin/' . ADMIN_SKIN . '/config/testemail/email_campaign_form', $emailform, true);
                $this->email->message($message);            
                $this->email->send();
            }
            
            $view['view']['mlh_name'] = $this->input->post('mlh_name',null,'');
            
            $view['view']['mlh_age'] = $this->input->post('mlh_age',null,'');
            
            $this->session->set_flashdata(
                'message',
                '고객님의 신청이 <br>
                정상적으로 접수 되었습니다.<br>
                빠른 시간내에 전문 상담사가 <br>
                연락 드리도록 하겠습니다.<br>
                감사합니다'
            );

            $this->session->set_flashdata(
                'mlh_id',
                $mlh_id
            );

            $this->session->set_flashdata(
                'mlh_mobileno',
                $this->input->post('mlh_mobileno',null,'')
            );

            $this->session->set_flashdata(
                'mlh_name',
                $this->input->post('mlh_name',null,'')
            );

            $this->session->set_flashdata(
                'mlh_age',
                $this->input->post('mlh_age',null,'')
            );

            $this->session->set_flashdata(
                'mlh_text',
                $this->input->post('mlh_text',null,'')
            );

            
            
            if($this->input->post('redirecturl'))
                redirect($this->input->post('redirecturl'));
            else {
                $layoutconfig = array(
                    'layout' => 'blank',
                    'skin' => $skin,
                    'layout_dir' => 'bootstrap',
                    'skin_dir' => 'media/'.$brd_key.'/'.$post_md,
                    'mobile_skin_dir' => 'media/'.$brd_key.'/'.$post_md,
                    'mobile_layout_dir' => 'bootstrap',
                    
                );


                $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
                $this->data = $view;
                
                $this->layout = element('layout_skin_file', element('layout', $view));
                $this->view = element('view_skin_file', element('layout', $view));
            }
        }
    }




    


    public function cpaProc($mlh_id = 0,$rst = '',$msg = '')
    {
        
        if (empty($mlh_id) || empty($rst)) {
            show_404();
        }

        

        
        $updatedata = array(
            'mlh_api_flag' => 1,
            'mlh_rst' => $rst,
            'mlh_msg' => urldecode($msg),
         );
        $this->Media_linkmine_history_model->update($mlh_id, $updatedata);
        

            
    }

    public function act_cpaProc($mlh_id = 0,$rst = '',$msg = '')
    {
        
        if (empty($mlh_id) || empty($rst)) {
            show_404();
        }
        
        $updatedata = array(
            'mlh_api_flag2' => 1,
            'mlh_rst2' => $rst,
            'mlh_msg2' => urldecode($msg),
            'mlh_rst2_date' => cdate('Y-m-d H:i:s')
         );
        $this->Media_linkmine_history_model->update($mlh_id, $updatedata);
            
    }


    public function tpProc($mlh_id = 0,$rst = '',$msg = '')
    {
        
        if (empty($mlh_id) || empty($rst)) {
            show_404();
        }

        

        
        $updatedata = array(
            'mlh_api_flag' => 1,
            'mlh_rst' => $rst,
            'mlh_msg' => urldecode($msg),
         );
        $this->Media_multiple_history_model->update($mlh_id, $updatedata);
        

            
    }

    public function act_tpProc($mlh_id = 0,$rst = 0,$msg = '')
    {
        
        if (empty($mlh_id) || !isset($rst)) {
            show_404();
        }
        
        $updatedata = array(
            'mlh_api_flag2' => 1,
            'mlh_rst2' => $rst,
            'mlh_msg2' => urldecode($msg),
            'mlh_rst2_date' => cdate('Y-m-d H:i:s')
            
         );
        $this->Media_multiple_history_model->update($mlh_id, $updatedata);
            
    }

    public function act_update($mlh_id = 0,$msg = '')
    {
        
        if (empty($mlh_id) ) {
            show_404();
        }
        
        $updatedata = array(
            'mlh_api_flag2' => 1,
            'mlh_msg2' => urldecode($msg),
            'mlh_rst2_date' => cdate('Y-m-d H:i:s')
            
         );
        $this->Media_multiple_history_model->update($mlh_id, $updatedata);
            
    }


    public function set_init($brd_key)
    {
        
        if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2'){
            $this->media_history_model='Media_multiple_history_model';
            $this->media_key='jid';
        }
        
    }

    public function _mlh_mobileno_dupcheck($str,$param)
    {   

        $param = preg_split('/,/', $param);
        $str = get_phone($str);
        $countwhere = array(
            'mlh_mobileno' => $str,
            'post_id' => $param[0],
        );
         
         if(!empty($param[1])) $countwhere['multi_code'] = $param[1];

        $row = $this->{ucfirst($this->media_history_model)}->count_by($countwhere);

        if ($row > 0) {
            $this->form_validation->set_message(
                '_mlh_mobileno_dupcheck',
                $str . ' 번호는 이미 상담신청한 번호 입니다.'
            );
            return false;
        }

        return true;
    }

    public function _mlh_agecheck($str,$mlh_age='')
    {   

        if($mlh_age){
            $campaign_age = explode("~",$mlh_age);

            $campaign_age[0]=trim($campaign_age[0]);
            $campaign_age[1]=trim($campaign_age[1]);

            if(!empty($campaign_age[0]) && $str < $campaign_age[0]) {
                $this->form_validation->set_message(
                    '_mlh_agecheck',
                    $campaign_age[0] . ' 세 이상만 신청이 가능합니다.'
                );
                return false;
            }
            if(!empty($campaign_age[1]) && $str > $campaign_age[1]) {
                
                $this->form_validation->set_message(
                    '_mlh_agecheck',
                    $campaign_age[1] . ' 세 이하만 신청이 가능합니다.'
                );
                return false;
            }
        }
        return true;
    }


    public function act_laProc($mlh_id = 0,$rst = 0,$msg = '')
    {
        
        if (empty($mlh_id) || !isset($rst)) {
            show_404();
        }
        
        $updatedata = array(
            'mlh_api_flag2' => 1,
            'mlh_rst2' => $rst,
            'mlh_msg2' => urldecode($msg),
            'mlh_rst2_date' => cdate('Y-m-d H:i:s')
            
         );
        $this->Media_linkasia_history_model->update($mlh_id, $updatedata);
            
    }


    public function _cfc_num_map($str,$param)
    {   

        $param = preg_split('/,/', $param);
        $mlh_mobileno = get_phone($param[1]);
        
         
        

        $this->load->model( 'Sms_send_history_model');

        $timestamp = strtotime("-1 hours");

        $sendwhere= array(
            'post_id' => $param[0],
            'ssh_phone' => str_replace("-","",$mlh_mobileno),
            'ssh_success' => 1,
            'ssh_datetime >=' => date("Y-m-d H:i:s", $timestamp),
            'ssc_key' => $str,
        );

        
        
        $cnt = 0 ;
        $cnt = $this->Sms_send_history_model->count_by($sendwhere);

        if($cnt < 1){


                $this->form_validation->set_message(
                    '_cfc_num_map',
                    $str . ' 인증 번호가 맞지 앖습니다. 다시 확인해 주세요 '
                );
                return false;
            
          
        }

       

        return true;
    }

}

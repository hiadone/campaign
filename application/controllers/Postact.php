<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Postact class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 게시물 열람 페이지에서 like, scrap,신고 등 각종 이벤트를 발생할 때 필요한 controller 입니다.
 */
class Postact extends CB_Controller
{

    /**
     * 모델을 로딩합니다
     */
    protected $models = array('Post');

    /**
     * 헬퍼를 로딩합니다
     */
    protected $helpers = array('form', 'array');

    function __construct()
    {
        parent::__construct();

        /**
         * 라이브러리를 로딩합니다
         */
        $this->load->library(array('querystring', 'accesslevel', 'email', 'notelib', 'point'));
    }


    /**
     * 게시물 삭제하기
     */
    public function delete($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_delete';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            show_404();
        }
        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            alert('해당 게시물에서만 접근 가능합니다');
        }

        $post = $this->Post_model->get_one($post_id);

        if ( ! element('post_id', $post)) {
            show_404();
        }

        $board = $this->board->item_all(element('brd_id', $post));
        $mem_id = (int) $this->member->item('mem_id');

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if (element('block_delete', $board) && $is_admin === false) {
            alert('이 게시판의 글은 관리자에 의해서만 삭제가 가능합니다');
            return false;
        }
        if (element('protect_post_day', $board) > 0 && $is_admin === false) {
            if (ctimestamp() - strtotime(element('post_datetime', $post)) >= element('protect_post_day', $board) * 86400) {
                alert('이 게시판은 ' . element('protect_post_day', $board) . '일 이상된 게시글의 삭제를 금지합니다');
                return false;
            }
        }
        if (element('protect_comment_num', $board) > 0 && $is_admin === false) {
            if (element('protect_comment_num', $board) <= element('post_comment_count', $post)) {
                alert(element('protect_comment_num', $board) . '개 이상의 댓글이 달린 게시글은 삭제할 수 없습니다');
                return false;
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('step1', $eventname);

        if (element('mem_id', $post)) {
            if ($is_admin === false
                AND $mem_id !== abs(element('mem_id', $post))) {
                alert('회원님은 이 글을 삭제할 권한이 없습니다');
                return false;
            }
        } else {

            $view= array();
            $view['view'] = array();

            // 이벤트가 존재하면 실행합니다
            $view['view']['event']['step2'] = Events::trigger('step2', $eventname);

            if ($is_admin !== false) {
                $this->session->set_userdata(
                    'can_delete_' . element('post_id', $post),
                    '1'
                );
            }
            if ( ! $this->session->userdata('can_delete_' . element('post_id', $post))
                && $this->input->post('modify_password')) {

                if ( ! function_exists('password_hash')) {
                    $this->load->helper('password');
                }
                if ( password_verify($this->input->post('modify_password'), element('post_password', $post))) {
                    $this->session->set_userdata(
                        'can_delete_' . element('post_id', $post),
                        '1'
                    );
                    redirect(current_url());
                } else {
                    $view['view']['message'] = '패스워드가 잘못 입력되었습니다';
                }
            }
            if ( ! $this->session->userdata('can_delete_' . element('post_id', $post))) {

                // 이벤트가 존재하면 실행합니다
                $view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

                /**
                 * 레이아웃을 정의합니다
                 */
                $view['view']['info'] = '게시글 삭제를 위한 패스워드 입력페이지입니다.<br />패스워드를 입력하시면 게시글 삭제가 가능합니다';

                $page_title = element('board_name', $board) . ' 글삭제';
                $layout_dir = element('board_layout', $board) ? element('board_layout', $board) : $this->cbconfig->item('layout_board');
                $mobile_layout_dir = element('board_mobile_layout', $board) ? element('board_mobile_layout', $board) : $this->cbconfig->item('mobile_layout_board');
                $use_sidebar = element('board_sidebar', $board) ? element('board_sidebar', $board) : $this->cbconfig->item('sidebar_board');
                $use_mobile_sidebar = element('board_mobile_sidebar', $board) ? element('board_mobile_sidebar', $board) : $this->cbconfig->item('mobile_sidebar_board');
                $skin_dir = element('board_skin', $board) ? element('board_skin', $board) : $this->cbconfig->item('skin_board');
                $mobile_skin_dir = element('board_mobile_skin', $board) ? element('board_mobile_skin', $board) : $this->cbconfig->item('mobile_skin_board');
                $layoutconfig = array(
                    'path' => 'board',
                    'layout' => 'layout',
                    'skin' => 'password',
                    'layout_dir' => $layout_dir,
                    'mobile_layout_dir' => $mobile_layout_dir,
                    'use_sidebar' => $use_sidebar,
                    'use_mobile_sidebar' => $use_mobile_sidebar,
                    'skin_dir' => $skin_dir,
                    'mobile_skin_dir' => $mobile_skin_dir,
                    'page_title' => $page_title,
                );
                $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
                $this->data = $view;
                $this->layout = element('layout_skin_file', element('layout', $view));
                $this->view = element('view_skin_file', element('layout', $view));
                return true;
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('step3', $eventname);

        if (element('use_post_delete_log', $board)) {
            $updata = array(
                'post_del' => 1,
            );
            $this->Post_model->update(element('post_id', $post), $updata);
            $metadata = array(
                'delete_mem_id' => $mem_id,
                'delete_mem_nickname' => $this->member->item('mem_nickname'),
                'delete_datetime' => cdate('Y-m-d H:i:s'),
                'delete_ip' => $this->input->ip_address(),
            );
            $this->load->model('Post_meta_model');
            $this->Post_meta_model
                ->save(element('post_id', $post), element('brd_id', $board), $metadata);
        } else {
            $this->board->delete_post($post_id);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        redirect(board_url(element('brd_key', $board)));

    }


    /**
     * 목록에서 여러 게시물 선택삭제하기
     */
    public function multi_delete($flag = '')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_multi_delete';
        $this->load->event($eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_ids = $this->input->post('chk_post_id');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 게시물이 없습니다.');
            exit(json_encode($result));
        }

        foreach ($post_ids as $post_id) {
            $post_id = (int) $post_id;
            if (empty($post_id) OR $post_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $post = $this->Post_model->get_one($post_id);
            $board = $this->board->item_all(element('brd_id', $post));

            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            $this->board->delete_post($post_id);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => '선택된 게시글이 삭제되었습니다');
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 게시물 선택삭제하기
     */
    public function multi_media_delete($flag = '',$brd_key='')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_multi_delete';
        $this->load->event($eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_ids = $this->input->post('chk_post_id');
        // $mlh_memos = $this->input->post('mlh_memo');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 항목이 없습니다.');
            exit(json_encode($result));
        }
        $flag = (int) $flag;
        $select = 'mlh_id';

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->load->model('Media_tenping_history_model');
        else if($brd_key==='linkmine')
            $this->load->model('Media_linkmine_history_model');
        else if($brd_key==='linkasia')
            $this->load->model('Media_linkasia_history_model');
        else if($brd_key==='multiple' || $brd_key==='b-a-1' ||  $brd_key==='b-a-2')
            $this->load->model('Media_multiple_history_model');
        else if($brd_key==='viashare')
            $this->load->model('Media_viashare_history_model');
        else if($brd_key==='selfcert_ad'){
            $this->load->model('Media_selfcert_history_model');
            $select = 'msh_id';
        }

        


        foreach ($post_ids as $mlh_id) {
            $mlh_id = (int) $mlh_id;
            if (empty($mlh_id) OR $mlh_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            

            if($brd_key==='tenping' || $brd_key==='nomal_campaign')
                $post = $this->Media_tenping_history_model->get_one($mlh_id, $select);
            else if($brd_key==='linkmine')
                $post = $this->Media_linkmine_history_model->get_one($mlh_id, $select);
            else if($brd_key==='linkasia')
                $post = $this->Media_linkasia_history_model->get_one($mlh_id, $select);
            else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
                $post = $this->Media_multiple_history_model->get_one($mlh_id, $select);
            else if($brd_key==='viashare')
                $post = $this->Media_viashare_history_model->get_one($mlh_id, $select);
            else if($brd_key==='selfcert_ad')
                $post = $this->Media_selfcert_history_model->get_one($mlh_id, $select);
                

            if ( ! element($select, $post)) {
                $result = array('error' => '존재하지 않는 항목입니다');
                exit(json_encode($result));
            }

            
            $is_admin = $this->member->is_admin();

            if ($is_admin === false && $this->member->item('mem_level') < 1) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            

            

            if($brd_key==='tenping' || $brd_key==='nomal_campaign')
                $this->Media_tenping_history_model->delete($mlh_id);
            else if($brd_key==='linkmine')
                $this->Media_linkmine_history_model->delete($mlh_id);
            else if($brd_key==='linkasia')
                $this->Media_linkasia_history_model->delete($mlh_id);
            else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
                $this->Media_multiple_history_model->delete($mlh_id);
            else if($brd_key==='viashare')
                $this->Media_viashare_history_model->delete($mlh_id);
            else if($brd_key==='selfcert_ad')
                $this->Media_selfcert_history_model->delete($mlh_id);                
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => '선택된 게시글이 삭제되었습니다');
        exit(json_encode($result));

    }

    /**
     * 댓글 삭제하기
     */
    public function delete_comment()
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_delete_comment';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $cmt_id = (int) $this->input->post('cmt_id');
        if (empty($cmt_id) OR $cmt_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        exit($this->board->delete_comment_check($cmt_id));

    }


    /**
     * 목록에서 여러 댓글 선택삭제하기
     */
    public function comment_multi_delete()
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_multi_delete';
        $this->load->event($eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $cmt_ids = $this->input->post('chk_comment_id');
        if (empty($cmt_ids)) {
            $result = array('error' => '선택된 댓글이 없습니다.');
            exit(json_encode($result));
        }

        foreach ($cmt_ids as $cmt_id) {
            $cmt_id = (int) $cmt_id;
            if (empty($cmt_id) OR $cmt_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $return = $this->board->delete_comment_check($cmt_id, '', 1);
            $result = json_decode($return, true);
            if (element('error', $result)) {
                exit($return);
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => '선택된 댓글이 삭제되었습니다');
        exit(json_encode($result));
    }


    /**
     * 첨부파일 다운로드 하기
     */
    public function download($file_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_download';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $file_id = (int) $file_id;
        if (empty($file_id) OR $file_id < 1) {
            show_404();
        }

        $this->load->model(array('Post_file_model', 'Comment_model', 'Like_model'));

        $file = $this->Post_file_model->get_one($file_id);

        if ( ! element('pfi_id', $file)) {
            show_404();
        }
        if ( ! $this->session->userdata('post_id_' . element('post_id', $file))) {
            alert('해당 게시물에서만 접근 가능합니다');
        }
        $post = $this->Post_model->get_one(element('post_id', $file));
        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        $alertmessage = $this->member->is_member()
            ? '회원님은 다운로드 할 수 있는 권한이 없습니다'
            : '비회원은 다운로드할 수 있는 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오';
        $check = array(
            'group_id' => element('bgr_id', $board),
            'board_id' => element('brd_id', $board),
        );
        $this->accesslevel->check(
            element('access_download', $board),
            element('access_download_level', $board),
            element('access_download_group', $board),
            $alertmessage,
            $check
        );

        $mem_id = (int) $this->member->item('mem_id');

        if (element('comment_to_download', $board) && $is_admin === false
            && $mem_id && $mem_id !== (int) element('mem_id', $post)) {
            $where = array(
                'post_id' => element('post_id', $post),
                'mem_id' => $mem_id,
            );
            $cmt_count = $this->Comment_model->count_by($where);
            if ($cmt_count === 0) {
                alert('댓글을 작성하신 후에 다운로드가 가능합니다.\\n댓글을 먼저 입력해주세요');
                return false;
            }
        }

        if (element('like_to_download', $board) && $is_admin === false
            && $mem_id && $mem_id !== (int) element('mem_id', $post)) {
            $where = array(
                'target_id' => element('post_id', $post),
                'target_type' => 1,
                'mem_id' => $mem_id,
            );
            $like_count = $this->Like_model->count_by($where);
            if ($like_count === 0) {
                alert('추천을 하신 후에 다운로드가 가능합니다.\\n이 게시글을 먼저 추천해주세요');
                return false;
            }
        }

        if ($mem_id !== (int) element('mem_id', $post) && element('use_point', $board)) {

            $point = $this->point->insert_point(
                $mem_id,
                element('point_filedownload', $board),
                element('board_name', $board) . ' ' . element('post_id', $file) . ' 파일 다운로드',
                'filedownload',
                $file_id,
                '파일 다운로드'
            );

            if (element('point_filedownload', $board) < 0
                && $point < 0
                && $this->cbconfig->item('block_download_zeropoint')) {
                $this->point->delete_point(
                    $mem_id,
                    'filedownload',
                    $file_id,
                    '파일 다운로드'
                );
                alert('회원님은 포인트가 부족하므로 다운로드하실 수 없습니다. 다운로드시 ' . (element('point_filedownload', $board) * -1) . ' 포인트가 차감됩니다');
                return false;
            }
            $point = $this->point->insert_point(
                element('mem_id', $post),
                element('point_filedownload_uploader', $board),
                element('board_name', $board) . ' ' . element('post_id', $file) . ' 파일 다운로드',
                'file_uploader',
                $file_id,
                '파일 다운로드 업로더 - ' . $mem_id
            );
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('step1', $eventname);

        if ( ! $this->session->userdata('post_file_download_' . element('pfi_id', $file))) {

            $this->session->set_userdata(
                'post_file_download_' . element('pfi_id', $file),
                '1'
            );

            if (element('use_download_log', $board)) {
                $insertdata = array(
                    'pfi_id' => element('pfi_id', $file),
                    'post_id' => element('post_id', $file),
                    'brd_id' => element('brd_id', $file),
                    'mem_id' => $mem_id,
                    'pfd_datetime' => cdate('Y-m-d H:i:s'),
                    'pfd_ip' => $this->input->ip_address(),
                    'pfd_useragent' => $this->agent->agent_string(),
                );
                $this->load->model('Post_file_download_log_model');
                $this->Post_file_download_log_model->insert($insertdata);
            }
            $this->Post_file_model->update_plus(element('pfi_id', $file), 'pfi_download', 1);

        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $this->load->helper('download');

        // Read the file's contents
        $data = file_get_contents(config_item('uploads_dir') . '/post/' . element('pfi_filename', $file));
        $name = element('pfi_originname', $file);
        force_download($name, $data);

    }

    public function shortcut_download($post_id = 0,$ga='')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_shortcut_admin';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);


        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            show_404();
        }

        $this->load->model(array('Post_file_model', 'Cookie_model'));

        $where = array( 'post_id' => $post_id);
        $file = $this->Post_file_model->get_one('','',$where);
        

        if ( ! element('pfi_id', $file)) {
            show_404();
        }
        
        

        

        $mem_id = (int) $this->member->item('mem_id');

      

        // 이벤트가 존재하면 실행합니다
        

        // if ( ! $this->session->userdata('post_file_download_' . element('pfi_id', $file))) {
        $insertdata['id'] =$ga;
        $insertdata['ip_address'] =$this->input->ip_address();
        $insertdata['timestamp'] =time();
        $insertdata['data'] =$this->input->get('shortcutreferrer', null, '');
           

        $this->Cookie_model->replace($insertdata);
        
        
        $insertdata = array(
            'sfi_id' => element('pfi_id', $file),
            'post_id' => element('post_id', $file),
            'brd_id' => element('brd_id', $file),
            'mem_id' => $mem_id,
            'sfd_datetime' => cdate('Y-m-d H:i:s'),
            'sfd_ip' => $this->input->ip_address(),
            'sfd_useragent' => $this->agent->agent_string(),
            'sfd_referrer' => $this->input->get('shortcutreferrer', null, ''),
        );
        $this->load->model('Shortcut_file_download_log_model');
        $this->Shortcut_file_download_log_model->insert($insertdata);
            
            

        // }

        // 이벤트가 존재하면 실행합니다
        

        $this->load->helper('download');

        // Read the file's contents
        $data = file_get_contents(config_item('uploads_dir') . '/post/' . element('pfi_filename', $file));
        $name = element('pfi_originname', $file);
        force_download($name, $data);

    }

    /**
     * 링크 클릭 하기
     */
    public function link($link_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $link_id = (int) $link_id;
        if (empty($link_id) OR $link_id < 1) {
            show_404();
        }

        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model(array('Post_link_model'));

        $link = $this->Post_link_model->get_one($link_id);

        if ( ! element('pln_id', $link)) {
            show_404();
        }
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }

        $post = $this->Post_model->get_one(element('post_id', $link));
        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            $this->session->set_userdata(
                'post_link_click_' . element('pln_id', $link),
                '1'
            );

            if (element('use_link_click_log', $board)) {
                $insertdata = array(
                    'pln_id' => element('pln_id', $link),
                    'post_id' => element('post_id', $link),
                    'brd_id' => element('brd_id', $link),
                    'mem_id' => $mem_id,
                    'plc_datetime' => cdate('Y-m-d H:i:s'),
                    'plc_ip' => $this->input->ip_address(),
                    'plc_useragent' => $this->agent->agent_string(),
                );
                $this->load->model('Post_link_click_log_model');
                $this->Post_link_click_log_model->insert($insertdata);
            }
            $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        redirect(prep_url(strip_tags(element('pln_url', $link))));

    }

    public function shortcut_link($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            show_404();
        }

        

        $this->load->model(array('Post_link_model'));

        $link = $this->Post_link_model->get_one('','',array('post_id' => $post_id));

        if ( ! element('pln_id', $link)) {
            show_404();
        }

        $mem_id = (int) $this->member->item('mem_id');
        
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

            
                $insertdata = array(
                    'pln_id' => element('pln_id', $link),
                    'post_id' => element('post_id', $link),
                    'brd_id' => element('brd_id', $link),
                    'mem_id' => $mem_id,
                    'slc_datetime' => cdate('Y-m-d H:i:s'),
                    'slc_ip' => $this->input->ip_address(),
                    'slc_useragent' => $this->agent->agent_string(),
                );
                $this->load->model('Shortcut_link_click_log_model');
                $this->Shortcut_link_click_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        redirect(prep_url(strip_tags(element('pln_url', $link))));

    }


    public function media_link($link_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $link_id = (int) $link_id;
        if (empty($link_id) OR $link_id < 1) {
            show_404();
        }

        $param =& $this->querystring;

        $this->load->model(array('Post_link_model'));

        $link = $this->Post_link_model->get_one($link_id);

        if ( ! element('pln_id', $link)) {
            show_404();
        }
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

            
                $insertdata = array(
                    'pln_id' => element('pln_id', $link),
                    'post_id' => element('post_id', $link),
                    'brd_id' => element('brd_id', $link),
                    'mlc_datetime' => cdate('Y-m-d H:i:s'),
                    'mlc_ip' => $this->input->ip_address(),
                    'mlc_useragent' => $this->agent->agent_string() ? $this->agent->agent_string() : '',
                    'mlc_referrer' => $this->agent->referrer(),
                );
                $this->load->model('Media_link_log_model');
                $this->Media_link_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        
        if($param->output())
            redirect(prep_url(strip_tags(element('pln_url', $link)) . '?' . $param->output()));
        else 
            redirect(prep_url(strip_tags(element('pln_url', $link))));
    }


    public function reward_link($link_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $link_id = (int) $link_id;
        if (empty($link_id) OR $link_id < 1) {
            show_404();
        }

        $param =& $this->querystring;

        $this->load->model(array('Post_link_model'));

        $link = $this->Post_link_model->get_one($link_id);

        if ( ! element('pln_id', $link)) {
            show_404();
        }
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

            
                $insertdata = array(
                    'pln_id' => element('pln_id', $link),
                    'post_id' => element('post_id', $link),
                    'brd_id' => element('brd_id', $link),
                    'rlc_datetime' => cdate('Y-m-d H:i:s'),
                    'rlc_ip' => $this->input->ip_address(),
                    'rlc_useragent' => $this->agent->agent_string() ? $this->agent->agent_string() : '',
                    'rlc_referrer' => $this->agent->referrer(),
                );
                $this->load->model('Reward_link_log_model');
                $this->Reward_link_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        redirect(prep_url(strip_tags(element('pln_url', $link)) . '?' . $param->output()));
        

    }

    public function media_click($post_id)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        
        if (empty($post_id) ) {
            show_404();
        }

        
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }
        

        $select = 'post_id,brd_id';
        $post = $this->Post_model->get_one($post_id,$select);
        

        // $this->load->model(array('Post_link_model'));
        // $linkwhere = array(
        //         'post_id' =>  element('post_id', $post),
        //     );

        

        // $link = $this->Post_link_model->get_one('','',$linkwhere);

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

                $insertdata = array(
                    'post_id' => element('post_id', $post),
                    'brd_id' => element('brd_id', $post),
                    'mfd_datetime' => cdate('Y-m-d H:i:s'),
                    'mfd_ip' => $this->input->ip_address(),
                    'mfd_useragent' => $this->agent->agent_string(),
                    'mfd_referrer' => $this->agent->referrer(),
                );
                $this->load->model('Media_click_log_model');
                $this->Media_click_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

    }

    public function reward_click($post_id)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        
        if (empty($post_id) ) {
            show_404();
        }

        
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }
        

        $select = 'post_id,brd_id';
        $post = $this->Post_model->get_one($post_id,$select);
        

        // $this->load->model(array('Post_link_model'));
        // $linkwhere = array(
        //         'post_id' =>  element('post_id', $post),
        //     );

        

        // $link = $this->Post_link_model->get_one('','',$linkwhere);

        


        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

                $insertdata = array(
                    'post_id' => element('post_id', $post),
                    'brd_id' => element('brd_id', $post),
                    'rfd_datetime' => cdate('Y-m-d H:i:s'),
                    'rfd_ip' => $this->input->ip_address(),
                    'rfd_useragent' => $this->agent->agent_string(),
                    'rfd_referrer' => $this->agent->referrer(),
                );
                $this->load->model('Reward_click_log_model');
                $this->Reward_click_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

    }

    public function media_multi_link($link_id = 0,$multi_code='')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $link_id = (int) $link_id;
        if (empty($link_id) OR $link_id < 1) {
            show_404();
        }

        if (empty($multi_code)) {
            // show_404();
        }

        $param =& $this->querystring;

        $this->load->model(array('Post_link_model'));

        $link = $this->Post_link_model->get_one($link_id);

        if ( ! element('pln_id', $link)) {
            show_404();
        }
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

            
                $insertdata = array(
                    'pln_id' => element('pln_id', $link),
                    'post_id' => element('post_id', $link),
                    'brd_id' => element('brd_id', $link),
                    'mlc_datetime' => cdate('Y-m-d H:i:s'),
                    'mlc_ip' => $this->input->ip_address(),
                    'mlc_useragent' => $this->agent->agent_string() ? $this->agent->agent_string() : '',
                    'mlc_referrer' => $this->agent->referrer(),
                    'mlc_code' =>  $multi_code,
                );
                $this->load->model('Media_link_log_model');
                $this->Media_link_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        if(element('post_id', $link) === "525" || element('post_id', $link) === "537")
            redirect(prep_url(strip_tags(element('pln_url', $link))));
        else 
            redirect(prep_url(strip_tags(element('pln_url', $link)).'/' .$multi_code. '?' . $param->output()));
        

    }

    public function media_multi_click($post_id,$multi_code='')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        
        if (empty($post_id)) {
            show_404();
        }

        
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }
        

        $select = 'post_id,brd_id';
        $post = $this->Post_model->get_one($post_id,$select);
        

        // $this->load->model(array('Post_link_model'));
        // $linkwhere = array(
        //         'post_id' =>  element('post_id', $post),
        //     );

        

        // $link = $this->Post_link_model->get_one('','',$linkwhere);

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

                $insertdata = array(
                    'post_id' => element('post_id', $post),
                    'brd_id' => element('brd_id', $post),
                    'mfd_datetime' => cdate('Y-m-d H:i:s'),
                    'mfd_ip' => $this->input->ip_address(),
                    'mfd_useragent' => $this->agent->agent_string(),
                    'mfd_referrer' => $this->agent->referrer(),
                    'mfd_code' => $multi_code,
                );
                $this->load->model('Media_click_log_model');
                $this->Media_click_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

    }

    public function mobusi_link($link_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $link_id = (int) $link_id;
        if (empty($link_id) OR $link_id < 1) {
            show_404();
        }

        $param =& $this->querystring;

        $this->load->model(array('Post_link_model'));

        $link = $this->Post_link_model->get_one($link_id);

        if ( ! element('pln_id', $link)) {
            show_404();
        }
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

            
                $insertdata = array(
                    'pln_id' => element('pln_id', $link),
                    'post_id' => element('post_id', $link),
                    'brd_id' => element('brd_id', $link),
                    'mlc_datetime' => cdate('Y-m-d H:i:s'),
                    'mlc_ip' => $this->input->ip_address(),
                    'mlc_useragent' => $this->agent->agent_string(),
                    'prefijo' => $this->input->get('param2', null, ''),
                    'pubid' => $this->input->get('param3', null, ''),
                    'pixel' => $this->input->get('param1', null, ''),
                    'mlc_referrer' => $this->agent->referrer(),
                );
                $this->load->model('Mobusi_link_log_model');
                $this->Mobusi_link_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        redirect(prep_url(strip_tags(element('pln_url', $link)) . '&' . $param->output()));

    }

    public function mobusi_click($post_md = '',$brd_key = '')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_link';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        
        if (empty($brd_key) OR empty($post_md)) {
            show_404();
        }

        
        // if ( ! $this->session->userdata('post_id_' . element('post_id', $link))) {
        //     alert('해당 게시물에서만 접근 가능합니다');
        // }
        $where = array(
            'post_md' => $post_md,
            'brd_id' => $this->board->item_key('brd_id', $brd_key),
        );
        
        $select = 'post_id,brd_id';
        $post = $this->Post_model->get_one('',$select,$where);

        // $this->load->model(array('Post_link_model'));
        // $linkwhere = array(
        //         'post_id' =>  element('post_id', $post),
        //     );

        

        // $link = $this->Post_link_model->get_one('','',$linkwhere);

        

        // if ( ! $this->session->userdata('post_link_click_' . element('pln_id', $link))) {

            // $this->session->set_userdata(
            //     'post_link_click_' . element('pln_id', $link),
            //     '1'
            // );

                $insertdata = array(
                    'post_id' => element('post_id', $post),
                    'brd_id' => element('brd_id', $post),
                    'mfd_datetime' => cdate('Y-m-d H:i:s'),
                    'mfd_ip' => $this->input->ip_address(),
                    'mfd_useragent' => $this->agent->agent_string(),
                    'mfd_referrer' => $this->agent->referrer(),
                    'prefijo' => $this->input->get('PREFIJO', null, ''),
                    'pubid' => $this->input->get('PUBID', null, ''),
                    'pixel' => $this->input->get('PIXEL', null, ''),
                );
                $this->load->model('Mobusi_click_log_model');
                $this->Mobusi_click_log_model->insert($insertdata);
            
            // $this->Post_link_model->update_plus(element('pln_id', $link), 'pln_hit', 1);
        // }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

    }

    /**
     * 게시물 추천/비추천 하기
     */
    public function post_like($post_id = 0, $like_type = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_like';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $target_type = 1; //원글

        $result = array();
        $this->output->set_content_type('application/json');

        if ($this->member->is_member() === false) {
            $result = array('error' => '로그인 후 이용해주세요');
            exit(json_encode($result));
        }
        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $like_type = (int) $like_type;
        if ($like_type !== 1 AND $like_type !== 2) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model(array('Post_model', 'Like_model'));

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('use_post_like', $board) && $like_type === 1) {
            $result = array('error' => '이 게시판은 추천 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        if ( ! element('use_post_dislike', $board) && $like_type === 2) {
            $result = array('error' => '이 게시판은 비추천 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        if (abs(element('mem_id', $post)) === $mem_id) {
            $result = array('error' => '본인의 글에는 추천/비추천 기능을 사용할 수 없습니다');
            exit(json_encode($result));
        }

        $select = 'lik_id, lik_type';
        $where = array(
            'target_id' => $post_id,
            'target_type' => $target_type,
            'mem_id' => $mem_id,
        );
        $exist = $this->Like_model->get_one('', $select, $where);

        if (element('lik_id', $exist)) {
            $status = element('lik_type', $exist) === '1' ? '추천' : '비추천';
            $result = array('error' => '이미 이 글을 ' . $status . '하셨습니다');
            exit(json_encode($result));
        }

        $insertdata = array(
            'target_id' => $post_id,
            'target_type' => $target_type,
            'brd_id' => element('brd_id', $post),
            'mem_id' => $mem_id,
            'target_mem_id' => abs(element('mem_id', $post)),
            'lik_type' => $like_type,
            'lik_datetime' => cdate('Y-m-d H:i:s'),
            'lik_ip' => $this->input->ip_address(),
        );
        $this->Like_model->insert($insertdata);
        if (element('use_point', $board)) {
            if ($like_type === 1) {
                $this->point->insert_point(
                    $mem_id,
                    element('point_post_like', $board),
                    element('board_name', $board) . ' ' . $post_id . ' 추천',
                    'like',
                    $post_id,
                    '추천'
                );
                $this->point->insert_point(
                    abs(element('mem_id', $post)),
                    element('point_post_liked', $board),
                    element('board_name', $board) . ' ' . $post_id . ' 추천받음',
                    'liked',
                    $post_id,
                    '추천받음'
                );
            }
            if ($like_type === 2) {
                $this->point->insert_point(
                    $mem_id,
                    element('point_post_dislike', $board),
                    element('board_name', $board) . ' ' . $post_id . ' 추천',
                    'like',
                    $post_id,
                    '추천'
                );
                $this->point->insert_point(
                    abs(element('mem_id', $post)),
                    element('point_post_disliked', $board),
                    element('board_name', $board) . ' ' . $post_id . ' 비추천받음',
                    'disliked',
                    $post_id,
                    '비추천받음'
                );
            }
        }

        $where = array(
            'target_id' => $post_id,
            'target_type' => $target_type,
            'lik_type' => $like_type,
        );
        $count = $this->Like_model->count_by($where);


        if ($like_type === 1) {
            $field = 'post_like';
        }
        elseif ($like_type === 2) {
            $field = 'post_dislike';
        }

        $updata = array(
            $field => $count,
        );
        $this->Post_model->update($post_id, $updata);

        $status = $like_type === 1 ? '추천' : '비추천';
        $success = '이 글을 ' . $status . ' 하셨습니다';

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => $success, 'count' => $count);
        exit(json_encode($result));

    }


    /**
     * 댓글 추천/비추천 하기
     */
    public function comment_like($cmt_id = 0, $like_type = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_like';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $target_type = 2; //댓글

        $result = array();
        $this->output->set_content_type('application/json');

        if ($this->member->is_member() === false) {
            $result = array('error' => '로그인 후 이용해주세요');
            exit(json_encode($result));
        }

        $cmt_id = (int) $cmt_id;
        if (empty($cmt_id) OR $cmt_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $like_type = (int) $like_type;
        if ($like_type !== 1 AND $like_type !== 2) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model(array('Comment_model', 'Like_model'));

        $select = 'cmt_id, post_id, mem_id, cmt_del';
        $comment = $this->Comment_model->get_one($cmt_id, $select);

        if ( ! element('cmt_id', $comment)) {
            $result = array('error' => '존재하지 않는 댓글입니다');
            exit(json_encode($result));
        }
        if (element('cmt_del', $comment)) {
            $result = array('error' => '삭제된 댓글입니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one(element('post_id', $comment), $select);

        if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('use_comment_like', $board) && $like_type === 1) {
            $result = array('error' => '이 게시판은 추천 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        if ( ! element('use_comment_dislike', $board) && $like_type === 2) {
            $result = array('error' => '이 게시판은 비추천 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        if (abs(element('mem_id', $comment)) === $mem_id) {
            $result = array('error' => '본인의 글에는 추천/비추천 기능을 사용할 수 없습니다');
            exit(json_encode($result));
        }

        $select = 'lik_id, lik_type';
        $where = array(
            'target_id' => $cmt_id,
            'target_type' => $target_type,
            'mem_id' => $mem_id,
        );
        $exist = $this->Like_model->get_one('', $select, $where);

        if (element('lik_id', $exist)) {
            $status = element('lik_type', $exist) === '1' ? '추천' : '비추천';
            $result = array('error' => '이미 이 글을 ' . $status . '하셨습니다');
            exit(json_encode($result));
        }

        $insertdata = array(
            'target_id' => $cmt_id,
            'target_type' => $target_type,
            'brd_id' => element('brd_id', $post),
            'mem_id' => $mem_id,
            'target_mem_id' => abs(element('mem_id', $comment)),
            'lik_type' => $like_type,
            'lik_datetime' => cdate('Y-m-d H:i:s'),
            'lik_ip' => $this->input->ip_address(),
        );
        $this->Like_model->insert($insertdata);
        if ($like_type === 1) {
            $field = 'cmt_like';
        }
        if ($like_type === 2) {
            $field = 'cmt_dislike';
        }
        if (element('use_point', $board)) {
            if ($like_type === 1) {
                $this->point->insert_point(
                    $mem_id,
                    element('point_comment_like', $board),
                    element('board_name', $board) . ' ' . $cmt_id . ' 추천',
                    'comment_like',
                    $cmt_id,
                    '추천'
                );
                $this->point->insert_point(
                    abs(element('mem_id', $comment)),
                    element('point_comment_liked', $board),
                    element('board_name', $board) . ' ' . $cmt_id . ' 추천받음',
                    'comment_liked',
                    $cmt_id,
                    '추천받음'
                );
            }
            if ($like_type === 2) {
                $this->point->insert_point(
                    $mem_id,
                    element('point_comment_dislike', $board),
                    element('board_name', $board) . ' ' . $cmt_id . ' 추천',
                    'comment_like',
                    $cmt_id,
                    '추천'
                );
                $this->point->insert_point(
                    abs(element('mem_id', $comment)),
                    element('point_comment_disliked', $board),
                    element('board_name', $board) . ' ' . $cmt_id . ' 비추천받음',
                    'disliked',
                    $cmt_id,
                    '비추천받음'
                );
            }
        }

        $where = array(
            'target_id' => $cmt_id,
            'target_type' => $target_type,
            'lik_type' => $like_type,
        );
        $count = $this->Like_model->count_by($where);

        $updata = array(
            $field => $count
        );
        $this->Comment_model->update($cmt_id, $updata);

        $status = $like_type === 1 ? '추천' : '비추천';
        $success = '이 글을 ' . $status . ' 하셨습니다';

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => $success, 'count' => $count);
        exit(json_encode($result));

    }


    /**
     * 게시물 스크랩 하기
     */
    public function post_scrap($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_scrap';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        if ($this->member->is_member() === false) {
            $result = array('error' => '로그인 후 이용해주세요');
            exit(json_encode($result));
        }

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model('Scrap_model');

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('use_scrap', $board)) {
            $result = array('error' => '이 게시판은 스크랩 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $where = array(
            'post_id' => $post_id,
            'mem_id' => $mem_id,
        );
        $exist = $this->Scrap_model->get_one('', 'scr_id', $where);

        if (element('scr_id', $exist)) {
            $result = array('error' => '이미 이 글을 스크랩 하셨습니다');
            exit(json_encode($result));
        }

        $insertdata = array(
            'post_id' => $post_id,
            'brd_id' => element('brd_id', $post),
            'mem_id' => $mem_id,
            'target_mem_id' => abs(element('mem_id', $post)),
            'scr_datetime' => cdate('Y-m-d H:i:s'),
        );
        $this->Scrap_model->insert($insertdata);

        $where = array(
            'post_id' => $post_id,
        );
        $count = $this->Scrap_model->count_by($where);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = '이 글을 스크랩 하셨습니다';
        $result = array('success' => $success, 'count' => $count);
        exit(json_encode($result));

    }


    /**
     * 게시물 신고 하기
     */
    public function post_blame($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_blame';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $target_type = 1; // 원글
        $this->output->set_content_type('application/json');

        if ($this->member->is_member() === false) {
            $result = array('error' => '로그인 후 이용해주세요');
            exit(json_encode($result));
        }

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $post = $this->Post_model->get_one($post_id);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('use_blame', $board)) {
            $result = array('error' => '이 게시판은 신고 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $check = array(
            'group_id' => element('bgr_id', $board),
            'board_id' => element('brd_id', $board),
        );
        $can_blame = $this->accesslevel->is_accessable(
            element('access_blame', $board),
            element('access_blame_level', $board),
            element('access_blame_group', $board),
            $check
        );

        if ($can_blame === false) {
            $result = array('error' => '회원님은 신고할 수 있는 권한이 없습니다');
            exit(json_encode($result));
        }

        $where = array(
            'target_id' => $post_id,
            'target_type' => $target_type,
            'mem_id' => $mem_id,
        );
        $this->load->model('Blame_model');
        $exist = $this->Blame_model->get_one('', 'bla_id', $where);

        if (element('bla_id', $exist)) {
            $result = array('error' => '이미 이 글을 신고 하셨습니다');
            exit(json_encode($result));
        }

        $insertdata = array(
            'target_id' => $post_id,
            'target_type' => $target_type,
            'brd_id' => element('brd_id', $post),
            'mem_id' => $mem_id,
            'target_mem_id' => abs(element('mem_id', $post)),
            'bla_datetime' => cdate('Y-m-d H:i:s'),
            'bla_ip' => $this->input->ip_address(),
        );
        $this->Blame_model->insert($insertdata);

        $this->Post_model->update_plus($post_id, 'post_blame', 1);

        $count = element('post_blame', $post) + 1;

        $emailsendlistadmin = array();
        $notesendlistadmin = array();
        $smssendlistadmin = array();
        $emailsendlistpostwriter = array();
        $notesendlistpostwriter = array();
        $smssendlistpostwriter = array();

        $writer = $this->Member_model->get_one(abs(element('mem_id', $post)));

        if (element('send_email_blame_super_admin', $board)
            OR element('send_note_blame_super_admin', $board)
            OR element('send_sms_blame_super_admin', $board)) {
            $mselect = 'mem_id, mem_email, mem_nickname, mem_phone';
            $superadminlist = $this->Member_model
                ->get_superadmin_list($mselect);
        }
        if (element('send_email_blame_group_admin', $board)
            OR element('send_note_blame_group_admin', $board)
            OR element('send_sms_blame_group_admin', $board)) {
            $this->load->model('Board_group_admin_model');
            $groupadminlist = $this->Board_group_admin_model
                ->get_board_group_admin_member(element('bgr_id', $board));
        }
        if (element('send_email_blame_board_admin', $board)
            OR element('send_note_blame_board_admin', $board)
            OR element('send_sms_blame_board_admin', $board)) {
            $this->load->model('Board_admin_model');
            $boardadminlist = $this->Board_admin_model
                ->get_board_admin_member(element('brd_id', $board));
        }

        if (element('send_email_blame_super_admin', $board) && $superadminlist) {
            foreach ($superadminlist as $key => $value) {
                $emailsendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_email_blame_group_admin', $board) && $groupadminlist) {
            foreach ($groupadminlist as $key => $value) {
                $emailsendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_email_blame_board_admin', $board) && $boardadminlist) {
            foreach ($boardadminlist as $key => $value) {
                $emailsendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_email_blame_post_writer', $board)
            && element('mem_receive_email', $writer)) {
            $emailsendlistpostwriter['mem_email'] = element('post_email', $post);
        }
        if (element('send_note_blame_super_admin', $board) && $superadminlist) {
            foreach ($superadminlist as $key => $value) {
                $notesendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_note_blame_group_admin', $board) && $groupadminlist) {
            foreach ($groupadminlist as $key => $value) {
                $notesendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_note_blame_board_admin', $board) && $boardadminlist) {
            foreach ($boardadminlist as $key => $value) {
                $notesendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_note_blame_post_writer', $board) && element('mem_use_note', $writer)) {
            $notesendlistpostwriter = $writer;
        }
        if (element('send_sms_blame_super_admin', $board) && $superadminlist) {
            foreach ($superadminlist as $key => $value) {
                $smssendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_sms_blame_group_admin', $board) && $groupadminlist) {
            foreach ($groupadminlist as $key => $value) {
                $smssendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_sms_blame_board_admin', $board) && $boardadminlist) {
            foreach ($boardadminlist as $key => $value) {
                $smssendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_sms_blame_post_writer', $board)
            && element('mem_phone', $writer)
            && element('mem_receive_sms', $writer)) {
            $smssendlistpostwriter = $writer;
        }

        $searchconfig = array(
            '{홈페이지명}',
            '{회사명}',
            '{홈페이지주소}',
            '{게시글제목}',
            '{게시글내용}',
            '{게시글작성자닉네임}',
            '{게시글작성자아이디}',
            '{게시글작성시간}',
            '{게시글주소}',
            '{게시판명}',
            '{게시판주소}',
        );
        $autolink = element('use_auto_url', $board) ? true : false;
        $popup = element('content_target_blank', $board) ? true : false;
        $replaceconfig = array(
            $this->cbconfig->item('site_title'),
            $this->cbconfig->item('company_name'),
            site_url(),
            element('post_title', $post),
            display_html_content(element('post_content', $post), element('post_html', $post), element('post_image_width', $board), $autolink, $popup),
            element('post_nickname', $post),
            element('post_userid', $post),
            element('post_datetime', $post),
            post_url(element('brd_key', $board), element('post_id', $post)),
            element('brd_name', $board),
            board_url(element('brd_key', $board)),
        );
        $replaceconfig_escape = array(
            html_escape($this->cbconfig->item('site_title')),
            html_escape($this->cbconfig->item('company_name')),
            site_url(),
            html_escape(element('post_title', $post)),
            display_html_content(element('post_content', $post), element('post_html', $post), element('post_image_width', $board), $autolink, $popup),
            html_escape(element('post_nickname', $post)),
            element('post_userid', $post),
            element('post_datetime', $post),
            post_url(element('brd_key', $board), element('post_id', $post)),
            html_escape(element('brd_name', $board)),
            board_url(element('brd_key', $board)),
        );
        if ($emailsendlistadmin) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_email_blame_admin_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_email_blame_admin_content')
            );
            foreach ($emailsendlistadmin as $akey => $aval) {
                $this->email->clear(true);
                $this->email->from($this->cbconfig->item('webmaster_email'), $this->cbconfig->item('webmaster_name'));
                $this->email->to(element('mem_email', $aval));
                $this->email->subject($title);
                $this->email->message($content);
                $this->email->send();
            }
        }
        if ($emailsendlistpostwriter) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_email_blame_post_writer_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_email_blame_post_writer_content')
            );
            $this->email->clear(true);
            $this->email->from($this->cbconfig->item('webmaster_email'), $this->cbconfig->item('webmaster_name'));
            $this->email->to(element('mem_email', $emailsendlistpostwriter));
            $this->email->subject($title);
            $this->email->message($content);
            $this->email->send();
        }
        if ($notesendlistadmin) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_note_blame_admin_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_note_blame_admin_content')
            );
            foreach ($notesendlistadmin as $akey => $aval) {
                $note_result = $this->notelib->send_note(
                    $sender = 0,
                    $receiver = element('mem_id', $aval),
                    $title,
                    $content,
                    1
                );
            }
        }
        if ($notesendlistpostwriter && element('mem_id', $notesendlistpostwriter)) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_note_blame_post_writer_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_note_blame_post_writer_content')
            );
            $note_result = $this->notelib->send_note(
                $sender = 0,
                $receiver = element('mem_id', $notesendlistpostwriter),
                $title,
                $content,
                1
            );
        }
        if ($smssendlistadmin) {
            $content = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_sms_blame_admin_content')
            );
            $sender = array(
                'phone' => $this->cbconfig->item('sms_admin_phone'),
            );
            $receiver = array();
            foreach ($smssendlistadmin as $akey => $aval) {
                $receiver[] = array(
                    'mem_id' => element('mem_id', $aval),
                    'name' => element('mem_nickname', $aval),
                    'phone' => element('mem_phone', $aval),
                );
            }
            $this->load->library('smslib');
            $smsresult = $this->smslib->send($receiver, $sender, $content, $date = '', '게시글 신고 알림');
        }
        if ($smssendlistpostwriter) {
            $content = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_sms_blame_post_writer_content')
            );
            $sender = array(
                'phone' => $this->cbconfig->item('sms_admin_phone'),
            );
            $receiver = array();
            $receiver[] = $smssendlistpostwriter;
            $this->load->library('smslib');
            $smsresult = $this->smslib->send($receiver, $sender, $content, $date = '', '게시글 신고 알림');
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array(
            'success' => '이 글을 신고 하셨습니다',
            'count' => $count,
        );
        exit(json_encode($result));

    }


    /**
     * 댓글 신고 하기
     */
    public function comment_blame($cmt_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_blame';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $target_type = 2; // 댓글
        $this->output->set_content_type('application/json');

        if ($this->member->is_member() === false) {
            $result = array('error' => '로그인 후 이용해주세요');
            exit(json_encode($result));
        }

        $cmt_id = (int) $cmt_id;
        if (empty($cmt_id) OR $cmt_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model(array('Comment_model'));

        $comment = $this->Comment_model->get_one($cmt_id);

        if ( ! element('cmt_id', $comment)) {
            $result = array('error' => '존재하지 않는 댓글입니다');
            exit(json_encode($result));
        }
        if (element('cmt_del', $comment)) {
            $result = array('error' => '삭제된 댓글입니다');
            exit(json_encode($result));
        }

        $post = $this->Post_model->get_one(element('post_id', $comment));

        if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('use_comment_blame', $board)) {
            $result = array('error' => '이 게시판은 댓글 신고 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $check = array(
            'group_id' => element('bgr_id', $board),
            'board_id' => element('brd_id', $board),
        );
        $can_blame = $this->accesslevel->is_accessable(
            element('access_blame', $board),
            element('access_blame_level', $board),
            element('access_blame_group', $board),
            $check
        );

        if ($can_blame === false) {
            $result = array('error' => '회원님은 신고할 수 있는 권한이 없습니다');
            exit(json_encode($result));
        }

        $where = array(
            'target_id' => $cmt_id,
            'target_type' => $target_type,
            'mem_id' => $mem_id,
        );
        $this->load->model('Blame_model');
        $exist = $this->Blame_model->get_one('', 'bla_id', $where);

        if (element('bla_id', $exist)) {
            $result = array('error' => '이미 이 댓글을 신고 하셨습니다');
            exit(json_encode($result));
        }

        $insertdata = array(
            'target_id' => $cmt_id,
            'target_type' => $target_type,
            'brd_id' => element('brd_id', $post),
            'mem_id' => $mem_id,
            'target_mem_id' => abs(element('mem_id', $comment)),
            'bla_datetime' => cdate('Y-m-d H:i:s'),
            'bla_ip' => $this->input->ip_address(),
        );
        $this->Blame_model->insert($insertdata);

        $this->Comment_model->update_plus($cmt_id, 'cmt_blame', 1);

        $count = element('cmt_blame', $comment) + 1;

        $emailsendlistadmin = array();
        $notesendlistadmin = array();
        $smssendlistadmin = array();
        $emailsendlistpostwriter = array();
        $notesendlistpostwriter = array();
        $smssendlistpostwriter = array();
        $emailsendlistcmtwriter = array();
        $notesendlistcmtwriter = array();
        $smssendlistcmtwriter = array();
        $post_writer = $this->Member_model->get_one(abs(element('mem_id', $post)));
        $comment_writer = $this->Member_model->get_one(abs(element('mem_id', $comment)));


        if (element('send_email_comment_blame_super_admin', $board)
            OR element('send_note_comment_blame_super_admin', $board)
            OR element('send_sms_comment_blame_super_admin', $board)) {
            $mselect = 'mem_id, mem_email, mem_nickname, mem_phone';
            $superadminlist = $this->Member_model->get_superadmin_list($mselect);
        }
        if (element('send_email_comment_blame_group_admin', $board)
            OR element('send_note_comment_blame_group_admin', $board)
            OR element('send_sms_comment_blame_group_admin', $board)) {
            $this->load->model('Board_group_admin_model');
            $groupadminlist = $this->Board_group_admin_model
                ->get_board_group_admin_member(element('bgr_id', $board));
        }
        if (element('send_email_comment_blame_board_admin', $board)
            OR element('send_note_comment_blame_board_admin', $board)
            OR element('send_sms_comment_blame_board_admin', $board)) {
            $this->load->model('Board_admin_model');
            $boardadminlist = $this->Board_admin_model
                ->get_board_admin_member(element('brd_id', $board));
        }
        if (element('send_email_comment_blame_super_admin', $board) && $superadminlist) {
            foreach ($superadminlist as $key => $value) {
                $emailsendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_email_comment_blame_group_admin', $board) && $groupadminlist) {
            foreach ($groupadminlist as $key => $value) {
                $emailsendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_email_comment_blame_board_admin', $board) && $boardadminlist) {
            foreach ($boardadminlist as $key => $value) {
                $emailsendlistadmin[$value['mem_id']] = $value;
            }
        }
        if ((element('mem_email', $post_writer) && element('post_receive_email', $post))
            OR (element('send_email_comment_blame_post_writer', $board) && element('mem_receive_email', $post_writer))) {
            $emailsendlistpostwriter['mem_email'] = $post['post_email'];
        }
        if (element('send_email_comment_blame_comment_writer', $board)) {
            $emailsendlistcmtwriter['mem_email'] = element('cmt_email', $comment);
        }
        if (element('send_note_comment_blame_super_admin', $board) && $superadminlist) {
            foreach ($superadminlist as $key => $value) {
                $notesendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_note_comment_blame_group_admin', $board) && $groupadminlist) {
            foreach ($groupadminlist as $key => $value) {
                $notesendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_note_comment_blame_board_admin', $board) && $boardadminlist) {
            foreach ($boardadminlist as $key => $value) {
                $notesendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_note_comment_blame_post_writer', $board)
            && element('mem_use_note', $post_writer)) {
            $notesendlistpostwriter['mem_id'] = element('mem_id', $post_writer);
        }
        if (element('send_note_comment_blame_comment_writer', $board)
            && element('mem_use_note', $comment_writer)) {
            $notesendlistcmtwriter['mem_id'] = element('mem_id', $comment_writer);
        }
        if (element('send_sms_comment_blame_super_admin', $board) && $superadminlist) {
            foreach ($superadminlist as $key => $value) {
                $smssendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_sms_comment_blame_group_admin', $board) && $groupadminlist) {
            foreach ($groupadminlist as $key => $value) {
                $smssendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_sms_comment_blame_board_admin', $board) && $boardadminlist) {
            foreach ($boardadminlist as $key => $value) {
                $smssendlistadmin[$value['mem_id']] = $value;
            }
        }
        if (element('send_sms_comment_blame_post_writer', $board)
            && element('mem_phone', $post_writer)
            && element('mem_receive_sms', $post_writer)) {
            $smssendlistpostwriter['mem_id'] = element('mem_id', $post_writer);
            $smssendlistpostwriter['mem_nickname'] = element('mem_nickname', $post_writer);
            $smssendlistpostwriter['mem_phone'] = element('mem_phone', $post_writer);
        }
        if (element('send_sms_comment_blame_comment_writer', $board)
            && element('mem_phone', $comment_writer)
            && element('mem_receive_sms', $comment_writer)) {
            $smssendlistcmtwriter['mem_id'] = element('mem_id', $comment_writer);
            $smssendlistcmtwriter['mem_nickname'] = element('mem_nickname', $comment_writer);
            $smssendlistcmtwriter['mem_phone'] = element('mem_phone', $comment_writer);
        }

        $searchconfig = array(
            '{홈페이지명}',
            '{회사명}',
            '{홈페이지주소}',
            '{댓글내용}',
            '{댓글작성자닉네임}',
            '{댓글작성자아이디}',
            '{댓글작성시간}',
            '{댓글주소}',
            '{게시글제목}',
            '{게시글내용}',
            '{게시글작성자닉네임}',
            '{게시글작성자아이디}',
            '{게시글작성시간}',
            '{게시글주소}',
            '{게시판명}',
            '{게시판주소}',
        );
        $autolink = element('use_auto_url', $board) ? true : false;
        $popup = element('content_target_blank', $board) ? true : false;
        $replaceconfig = array(
            $this->cbconfig->item('site_title'),
            $this->cbconfig->item('company_name'),
            site_url(),
            display_html_content(element('cmt_content', $comment), 0),
            element('cmt_nickname', $comment),
            element('cmt_userid', $comment),
            element('cmt_datetime', $comment),
            post_url(element('brd_key', $board), element('post_id', $post)) . '#comment_' . element('cmt_id', $comment),
            element('post_title', $post),
            display_html_content(element('post_content', $post), element('post_html', $post), element('post_image_width', $board), $autolink, $popup),
            element('post_nickname', $post),
            element('post_userid', $post),
            element('post_datetime', $post),
            post_url(element('brd_key', $board), element('post_id', $post)),
            element('brd_name', $board),
            board_url(element('brd_key', $board)),
        );
        $replaceconfig_escape = array(
            html_escape($this->cbconfig->item('site_title')),
            html_escape($this->cbconfig->item('company_name')),
            site_url(),
            display_html_content(element('cmt_content', $comment), 0),
            html_escape(element('cmt_nickname', $comment)),
            html_escape(element('cmt_userid', $comment)),
            element('cmt_datetime', $comment),
            post_url(element('brd_key', $board), element('post_id', $post)) . '#comment_' . element('cmt_id', $comment),
            html_escape(element('post_title', $post)),
            display_html_content(element('post_content', $post), element('post_html', $post), element('post_image_width', $board), $autolink, $popup),
            html_escape(element('post_nickname', $post)),
            element('post_userid', $post),
            element('post_datetime', $post),
            post_url(element('brd_key', $board), element('post_id', $post)),
            html_escape(element('brd_name', $board)),
            board_url(element('brd_key', $board)),
        );

        if ($emailsendlistadmin) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_email_comment_blame_admin_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_email_comment_blame_admin_content')
            );
            foreach ($emailsendlistadmin as $akey => $aval) {
                $this->email->clear(true);
                $this->email->from($this->cbconfig->item('webmaster_email'), $this->cbconfig->item('webmaster_name'));
                $this->email->to(element('mem_email', $aval));
                $this->email->subject($title);
                $this->email->message($content);
                $this->email->send();
            }
        }
        if ($emailsendlistpostwriter) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_email_comment_blame_post_writer_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_email_comment_blame_post_writer_content')
            );
            $this->email->clear(true);
            $this->email->from($this->cbconfig->item('webmaster_email'), $this->cbconfig->item('webmaster_name'));
            $this->email->to(element('mem_email', $emailsendlistpostwriter));
            $this->email->subject($title);
            $this->email->message($content);
            $this->email->send();
        }
        if ($emailsendlistcmtwriter) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_email_comment_blame_comment_writer_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_email_comment_blame_comment_writer_content')
            );
            $this->email->clear(true);
            $this->email->from($this->cbconfig->item('webmaster_email'), $this->cbconfig->item('webmaster_name'));
            $this->email->to(element('mem_email', $emailsendlistcmtwriter));
            $this->email->subject($title);
            $this->email->message($content);
            $this->email->send();
        }
        if ($notesendlistadmin) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_note_comment_blame_admin_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_note_comment_blame_admin_content')
            );
            foreach ($notesendlistadmin as $akey => $aval) {
                $note_result = $this->notelib->send_note(
                    $sender = 0,
                    $receiver = element('mem_id', $aval),
                    $title,
                    $content,
                    1
                );
            }
        }
        if ($notesendlistpostwriter && element('mem_id', $notesendlistpostwriter)) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_note_comment_blame_post_writer_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_note_comment_blame_post_writer_content')
            );
            $note_result = $this->notelib->send_note(
                $sender = 0,
                $receiver = element('mem_id', $notesendlistpostwriter),
                $title,
                $content,
                1
            );
        }
        if ($notesendlistcmtwriter && element('mem_id', $notesendlistcmtwriter)) {
            $title = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_note_comment_blame_comment_writer_title')
            );
            $content = str_replace(
                $searchconfig,
                $replaceconfig_escape,
                $this->cbconfig->item('send_note_comment_blame_comment_writer_content')
            );
            $note_result = $this->notelib->send_note(
                $sender = 0,
                $receiver = element('mem_id', $notesendlistcmtwriter),
                $title,
                $content,
                1
            );
        }
        if ($smssendlistadmin) {
            $content = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_sms_comment_blame_admin_content')
            );
            $sender = array(
                'phone' => $this->cbconfig->item('sms_admin_phone'),
            );
            $receiver = array();
            foreach ($smssendlistadmin as $akey => $aval) {
                $receiver[] = array(
                    'mem_id' => element('mem_id', $aval),
                    'name' => element('mem_nickname', $aval),
                    'phone' => element('mem_phone', $aval),
                );
            }
            $this->load->library('smslib');
            $smsresult = $this->smslib->send($receiver, $sender, $content, $date = '', '댓글 신고 알림');
        }
        if ($smssendlistpostwriter) {
            $content = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_sms_comment_blame_post_writer_content')
            );
            $sender = array(
                'phone' => $this->cbconfig->item('sms_admin_phone'),
            );
            $receiver = array();
            $receiver[] = $smssendlistpostwriter;
            $this->load->library('smslib');
            $smsresult = $this->smslib->send($receiver, $sender, $content, $date = '', '댓글 신고 알림');
        }
        if ($smssendlistcmtwriter) {
            $content = str_replace(
                $searchconfig,
                $replaceconfig,
                $this->cbconfig->item('send_sms_comment_blame_comment_writer_content')
            );
            $sender = array(
                'phone' => $this->cbconfig->item('sms_admin_phone'),
            );
            $receiver = array();
            $receiver[] = $smssendlistcmtwriter;
            $this->load->library('smslib');
            $smsresult = $this->smslib->send($receiver, $sender, $content, $date = '', '댓글 신고 알림');
        }


        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array(
            'success' => '이 댓글을 신고 하셨습니다',
            'count' => $count,
        );
        exit(json_encode($result));

    }


    /**
     * 게시물 비밀글 설정 및 해제 하기
     */
    public function post_secret($post_id = 0, $flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_secret';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));
        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        if ( ! element('use_post_secret', $board)) {
            $result = array('error' => '이 게시판은 비밀글 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $updatedata = array(
            'post_secret' => $flag,
        );
        $this->Post_model->update($post_id, $updatedata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '게시물을 비밀글 처리하셨습니다' : '게시물을 비밀글을 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 게시물 비밀글 설정 및 해제 하기
     */
    public function post_multi_secret($flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_multi_secret';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_ids = $this->input->post('chk_post_id');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 게시물이 없습니다.');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        foreach ($post_ids as $post_id) {
            $post_id = (int) $post_id;
            if (empty($post_id) OR $post_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id';
            $post = $this->Post_model->get_one($post_id, $select);

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));
            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            if ( ! element('use_post_secret', $board)) {
                $result = array('error' => '이 게시판은 비밀글 기능을 사용하지 않습니다');
                exit(json_encode($result));
            }

            $updatedata = array(
                'post_secret' => $flag,
            );
            $this->Post_model->update($post_id, $updatedata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '게시물을 비밀글 처리하셨습니다' : '게시물을 비밀글을 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 댓글 비밀글 설정 및 해제 하기
     */
    public function comment_secret($cmt_id = 0, $flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_secret';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $cmt_id = (int) $cmt_id;
        if (empty($cmt_id) OR $cmt_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        $this->load->model('Comment_model');

        $select = 'cmt_id, post_id, mem_id, cmt_del';
        $comment = $this->Comment_model->get_one($cmt_id, $select);

        if ( ! element('cmt_id', $comment)) {
            $result = array('error' => '존재하지 않는 댓글입니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one(element('post_id', $comment), $select);

        if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));
        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        if ( ! element('use_comment_secret', $board)) {
            $result = array('error' => '이 게시판은 댓글에 비밀글 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $updatedata = array(
            'cmt_secret' => $flag,
        );
        $this->Comment_model->update($cmt_id, $updatedata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '댓글을 비밀글 처리하셨습니다' : '댓글을 비밀글을 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 댓글 비밀글 설정 및 해제 하기
     */
    public function comment_multi_secret($flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_multi_secret';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $cmt_ids = $this->input->post('chk_comment_id');
        if (empty($cmt_ids)) {
            $result = array('error' => '선택된 댓글이 없습니다.');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        $this->load->model('Comment_model');

        foreach ($cmt_ids as $cmt_id) {

            $cmt_id = (int) $cmt_id;
            if (empty($cmt_id) OR $cmt_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'cmt_id, post_id, mem_id, cmt_del';
            $comment = $this->Comment_model->get_one($cmt_id, $select);

            if ( ! element('cmt_id', $comment)) {
                $result = array('error' => '존재하지 않는 댓글입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id, post_del';
            $post = $this->Post_model->get_one(element('post_id', $comment), $select);

            if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
                $result = array('error' => '해당 게시물에서만 접근 가능합니다');
                exit(json_encode($result));
            }

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));
            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            if ( ! element('use_comment_secret', $board)) {
                $result = array('error' => '이 게시판은 댓글에 비밀글 기능을 사용하지 않습니다');
                exit(json_encode($result));
            }

            $updatedata = array(
                'cmt_secret' => $flag,
            );
            $this->Comment_model->update($cmt_id, $updatedata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '댓글을 비밀글 처리하셨습니다' : '댓글을 비밀글을 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 댓글 감춤/해제 하기
     */
    public function post_hide_comment($post_id = 0, $flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_hide_comment';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        $updatedata = array(
            'post_hide_comment' => $flag,
        );
        $this->Post_model->update($post_id, $updatedata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '댓글감춤 처리를 하였습니다' : '댓글감춤을 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 공지사항 올림/내림 설정
     */
    public function post_notice($post_id = 0, $flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_notice';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $flag = ((int) $flag === 1) ? 1 : 0;

        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        $updatedata = array(
            'post_notice' => $flag,
        );
        $this->Post_model->update($post_id, $updatedata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '이 게시글을 공지로 등록하였습니다' : '이 게시글을 공지에서 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 여러 게시물의 공지사항 올림/내림 설정
     */
    public function post_multi_notice($flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_multi_notice';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_ids = $this->input->post('chk_post_id');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 게시물이 없습니다.');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        foreach ($post_ids as $post_id) {
            $post_id = (int) $post_id;
            if (empty($post_id) OR $post_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id, post_del';
            $post = $this->Post_model->get_one($post_id, $select);

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }
            if (element('post_del', $post)) {
                $result = array('error' => '삭제된 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));

            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            $updatedata = array(
                'post_notice' => $flag,
            );
            $this->Post_model->update($post_id, $updatedata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '이 게시글을 공지로 등록하였습니다' : '이 게시글을 공지에서 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 게시물 블라인드 설정/해제하기
     */
    public function post_blame_blind($post_id = 0, $flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_blame_blind';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id, post_blame, post_del';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        if ( ! element('use_blame', $board)) {
            $result = array('error' => '이 게시판은 신고 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $blame_count = $flag ? element('blame_blind_count', $board): 0;
        $updatedata = array(
            'post_blame' => $blame_count,
        );
        $this->Post_model->update($post_id, $updatedata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '이 게시글을 블라인드 처리하였습니다' : '이 게시글을 블라인드 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 게시물 블라인드 설정/해제하기
     */
    public function post_multi_blame_blind($flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_multi_blame_blind';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_ids = $this->input->post('chk_post_id');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 게시물이 없습니다.');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        foreach ($post_ids as $post_id) {
            $post_id = (int) $post_id;
            if (empty($post_id) OR $post_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id, post_blame, post_del';
            $post = $this->Post_model->get_one($post_id, $select);

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }
            if (element('post_del', $post)) {
                $result = array('error' => '삭제된 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));

            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            if ( ! element('use_blame', $board)) {
                $result = array('error' => '이 게시판은 신고 기능을 사용하지 않습니다');
                exit(json_encode($result));
            }

            $blame_count = $flag ? element('blame_blind_count', $board): 0;
            $updatedata = array(
                'post_blame' => $blame_count,
            );
            $this->Post_model->update($post_id, $updatedata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '이 게시글을 블라인드 처리하였습니다' : '이 게시글을 블라인드 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 댓글 블라인드 설정/해제하기
     */
    public function comment_blame_blind($cmt_id = 0, $flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_blame_blind';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $cmt_id = (int) $cmt_id;
        if (empty($cmt_id) OR $cmt_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        $this->load->model('Comment_model');

        $select = 'cmt_id, post_id, mem_id, cmt_blame, cmt_del';
        $comment = $this->Comment_model->get_one($cmt_id, $select);

        if ( ! element('cmt_id', $comment)) {
            $result = array('error' => '존재하지 않는 댓글입니다');
            exit(json_encode($result));
        }
        if (element('cmt_del', $comment)) {
            $result = array('error' => '삭제된 댓글입니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id, post_blame, post_del';
        $post = $this->Post_model->get_one(element('post_id', $comment), $select);

        if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        if ( ! element('use_comment_blame', $board)) {
            $result = array('error' => '이 게시판은 댓글에 신고 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }

        $blame_count = $flag ? element('blame_blind_count', $board): 0;
        $updatedata = array(
            'cmt_blame' => $blame_count,
        );
        $this->Comment_model->update($cmt_id, $updatedata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '이 댓글을 블라인드 처리하였습니다' : '이 댓글을 블라인드 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 댓글 블라인드 설정/해제하기
     */
    public function comment_multi_blame_blind($flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_multi_blame_blind';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $cmt_ids = $this->input->post('chk_comment_id');
        if (empty($cmt_ids)) {
            $result = array('error' => '선택된 댓글이 없습니다.');
            exit(json_encode($result));
        }
        $flag = ((int) $flag === 1) ? 1 : 0;

        $this->load->model('Comment_model');

        foreach ($cmt_ids as $cmt_id) {
            $cmt_id = (int) $cmt_id;
            if (empty($cmt_id) OR $cmt_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'cmt_id, post_id, mem_id, cmt_blame, cmt_del';
            $comment = $this->Comment_model->get_one($cmt_id, $select);

            if ( ! element('cmt_id', $comment)) {
                $result = array('error' => '존재하지 않는 댓글입니다');
                exit(json_encode($result));
            }
            if (element('cmt_del', $comment)) {
                $result = array('error' => '삭제된 댓글입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id, post_blame, post_del';
            $post = $this->Post_model->get_one(element('post_id', $comment), $select);

            if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
                $result = array('error' => '해당 게시물에서만 접근 가능합니다');
                exit(json_encode($result));
            }

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }
            if (element('post_del', $post)) {
                $result = array('error' => '삭제된 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));

            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            if ( ! element('use_comment_blame', $board)) {
                $result = array('error' => '이 게시판은 댓글에 신고 기능을 사용하지 않습니다');
                exit(json_encode($result));
            }

            $blame_count = $flag ? element('blame_blind_count', $board): 0;
            $updatedata = array(
                'cmt_blame' => $blame_count,
            );
            $this->Comment_model->update($cmt_id, $updatedata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = ($flag) ? '이 댓글을 블라인드 처리하였습니다' : '이 댓글을 블라인드 해제하셨습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 게시물 휴지통으로 이동하기
     */
    public function post_trash($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_trash';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();

        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        $this->load->model(array('Post_meta_model', 'Comment_model', 'Comment_meta_model'));

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post) === '1') {
            $result = array('error' => '이미 삭제된 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post) === '2') {
            $result = array('error' => '이미 휴지통으로 이동된 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $updatedata = array(
            'post_del' => 2,
        );
        $this->Post_model->update($post_id, $updatedata);
        $metadata = array(
            'trash_mem_id' => $mem_id,
            'trash_datetime' => cdate('Y-m-d H:i:s'),
            'trash_ip' => $this->input->ip_address(),
        );
        $this->Post_meta_model->save($post_id, element('brd_id', $board), $metadata);

        $where = array(
            'post_id' => $post_id,
        );
        $cmts = $this->Comment_model->get('', 'cmt_id', $where);
        if ($cmts && is_array($cmts)) {
            foreach ($cmts as $cmt) {
                $cmt_id = element('cmt_id', $cmt);
                $updatedata = array(
                    'cmt_del' => 2,
                );
                $this->Comment_model->update($cmt_id, $updatedata);
                $metadata = array(
                    'trash_mem_id' => $mem_id,
                    'trash_datetime' => cdate('Y-m-d H:i:s'),
                    'trash_ip' => $this->input->ip_address(),
                );
                $this->Comment_meta_model->save($cmt_id, $metadata);
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = '이 게시글을 휴지통으로 이동하였습니다';
        $result = array(
            'success' => $success,
            'url' => board_url(element('brd_key', $board)),
        );
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 게시물 휴지통으로 이동하기
     */
    public function post_multi_trash($flag = '')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_multi_trash';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_ids = $this->input->post('chk_post_id');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 게시물이 없습니다.');
            exit(json_encode($result));
        }

        $this->load->model(array('Post_meta_model', 'Comment_model', 'Comment_meta_model'));

        foreach ($post_ids as $post_id) {

            $post_id = (int) $post_id;
            if (empty($post_id) OR $post_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id, post_del';
            $post = $this->Post_model->get_one($post_id, $select);

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }
            if (element('post_del', $post) === '1') {
                $result = array('error' => '이미 삭제된 게시물입니다');
                exit(json_encode($result));
            }
            if (element('post_del', $post) === '2') {
                $result = array('error' => '이미 휴지통으로 이동된 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));

            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            $mem_id = (int) $this->member->item('mem_id');

            $updatedata = array(
                'post_del' => 2,
            );
            $this->Post_model->update($post_id, $updatedata);
            $metadata = array(
                'trash_mem_id' => $mem_id,
                'trash_datetime' => cdate('Y-m-d H:i:s'),
                'trash_ip' => $this->input->ip_address(),
            );
            $this->Post_meta_model->save($post_id, element('brd_id', $board), $metadata);

            $where = array(
                'post_id' => $post_id,
            );
            $cmts = $this->Comment_model->get('', 'cmt_id', $where);
            if ($cmts && is_array($cmts)) {
                foreach ($cmts as $cmt) {
                    $cmt_id = element('cmt_id', $cmt);
                    $updatedata = array(
                        'cmt_del' => 2
                    );
                    $this->Comment_model->update($cmt_id, $updatedata);
                    $metadata = array(
                        'trash_mem_id' => $mem_id,
                        'trash_datetime' => cdate('Y-m-d H:i:s'),
                        'trash_ip' => $this->input->ip_address(),
                    );
                    $this->Comment_meta_model->save($cmt_id, $metadata);
                }
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => '해당 게시글을 휴지통으로 이동하였습니다');
        exit(json_encode($result));

    }


    /**
     * 댓글 휴지통으로 이동하기
     */
    public function comment_trash($cmt_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_trash';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();

        $this->output->set_content_type('application/json');

        $cmt_id = (int) $cmt_id;
        if (empty($cmt_id) OR $cmt_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $this->load->model(array('Comment_model', 'Comment_meta_model'));

        $select = 'cmt_id, post_id, mem_id, cmt_del';
        $comment = $this->Comment_model->get_one($cmt_id, $select);

        if ( ! element('cmt_id', $comment)) {
            $result = array('error' => '존재하지 않는 댓글입니다');
            exit(json_encode($result));
        }
        if (element('cmt_del', $comment) === '1') {
            $result = array('error' => '이미 삭제된 댓글입니다');
            exit(json_encode($result));
        }
        if (element('cmt_del', $comment) === '2') {
            $result = array('error' => '이미 휴지통으로 이동된 댓글입니다');
            exit(json_encode($result));
        }

        $select = 'post_id, brd_id, mem_id, post_del';
        $post = $this->Post_model->get_one(element('post_id', $comment), $select);

        if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }

        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if ($is_admin === false) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $updatedata = array(
            'cmt_del' => 2,
        );
        $this->Comment_model->update($cmt_id, $updatedata);
        $metadata = array(
            'trash_mem_id' => $mem_id,
            'trash_datetime' => cdate('Y-m-d H:i:s'),
            'trash_ip' => $this->input->ip_address(),
        );
        $this->Comment_meta_model->save($cmt_id, $metadata);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = '이 댓글을 휴지통으로 이동하였습니다';
        $result = array(
            'success' => $success,
            'url' => post_url(element('brd_key', $board), element('post_id', $post)),
        );
        exit(json_encode($result));

    }


    /**
     * 목록에서 여러 댓글 휴지통으로 이동하기
     */
    public function comment_multi_trash()
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_comment_multi_trash';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $cmt_ids = $this->input->post('chk_comment_id');
        if (empty($cmt_ids)) {
            $result = array('error' => '선택된 댓글이 없습니다.');
            exit(json_encode($result));
        }

        $this->load->model(array('Comment_model', 'Comment_meta_model'));

        foreach ($cmt_ids as $cmt_id) {

            $cmt_id = (int) $cmt_id;
            if (empty($cmt_id) OR $cmt_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'cmt_id, post_id, mem_id, cmt_del';
            $comment = $this->Comment_model->get_one($cmt_id, $select);

            if ( ! element('cmt_id', $comment)) {
                $result = array('error' => '존재하지 않는 댓글입니다');
                exit(json_encode($result));
            }
            if (element('cmt_del', $comment) === '1') {
                $result = array('error' => '이미 삭제된 댓글입니다');
                exit(json_encode($result));
            }
            if (element('cmt_del', $comment) === '2') {
                $result = array('error' => '이미 휴지통으로 이동된 댓글입니다');
                exit(json_encode($result));
            }

            $select = 'post_id, brd_id, mem_id, post_del';
            $post = $this->Post_model->get_one(element('post_id', $comment), $select);

            if ( ! $this->session->userdata('post_id_' . element('post_id', $comment))) {
                $result = array('error' => '해당 게시물에서만 접근 가능합니다');
                exit(json_encode($result));
            }

            if ( ! element('post_id', $post)) {
                $result = array('error' => '존재하지 않는 게시물입니다');
                exit(json_encode($result));
            }

            $board = $this->board->item_all(element('brd_id', $post));

            $is_admin = $this->member->is_admin(
                array(
                    'board_id' => element('brd_id', $board),
                    'group_id' => element('bgr_id', $board),
                )
            );

            if ($is_admin === false) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            $mem_id = (int) $this->member->item('mem_id');

            $updatedata = array(
                'cmt_del' => 2,
            );
            $this->Comment_model->update($cmt_id, $updatedata);
            $metadata = array(
                'trash_mem_id' => $mem_id,
                'trash_datetime' => cdate('Y-m-d H:i:s'),
                'trash_ip' => $this->input->ip_address(),
            );
            $this->Comment_meta_model->save($cmt_id, $metadata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $success = '선택하신 댓글을 휴지통으로 이동하였습니다';
        $result = array('success' => $success);
        exit(json_encode($result));

    }


    /**
     * 게시물에서 설문조사하기
     */
    public function post_poll($post_id = 0, $ppo_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_poll';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다.');
            exit(json_encode($result));
        }

        $ppo_id = (int) $ppo_id;
        if (empty($ppo_id) OR $ppo_id < 1) {
            $result = array('error' => '잘못된 접근입니다.');
            exit(json_encode($result));
        }

        $this->load->model(array('Post_poll_model', 'Post_poll_item_model', 'Post_poll_item_poll_model', 'Comment_model'));

        $select = 'post_id, brd_id, post_del, ppo_id';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! $this->session->userdata('post_id_' . element('post_id', $post))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }
        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물에서는 설문조사가 불가능합니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        $use_poll = ($this->cbconfig->get_device_view_type() === 'mobile')
            ? element('use_mobile_poll', $board) : element('use_poll', $board);

        if (empty($use_poll)) {
            $result = array('error' => '이 게시판은 현재 설문조사 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }
        $check = array(
            'group_id' => element('bgr_id', $board),
            'board_id' => element('brd_id', $board),
        );
        $can_poll_attend = $this->accesslevel->is_accessable(
            element('access_poll_attend', $board),
            element('access_poll_attend_level', $board),
            element('access_poll_attend_group', $board),
            $check
        );
        if ($can_poll_attend === false) {
            $errormessage = $this->member->is_member()
                ? '회원님은 설문조사 참여 권한이 없습니다'
                : '비회원은 설문조사 참여 권한이 없습니다. 회원이시라면 로그인 후 이용해 보십시오';
            $result = array('error' => $errormessage);
            exit(json_encode($result));
        }

        $mem_id = (int) $this->member->item('mem_id');

        $post_poll = $this->Post_poll_model->get_one($ppo_id);

        if (element('post_id', $post) !== element('post_id', $post_poll)) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        if (empty($post_poll['ppo_start_datetime'])
            OR element('ppo_start_datetime', $post_poll) === '0000-00-00 00:00:00') {
            $post_poll['ppo_start_datetime'] = '';
        }
        if (empty($post_poll['ppo_end_datetime'])
            OR element('ppo_end_datetime', $post_poll) === '0000-00-00 00:00:00') {
            $post_poll['ppo_end_datetime'] = '';
        }

        if (element('ppo_start_datetime', $post_poll)
            && element('ppo_start_datetime', $post_poll) > cdate('Y-m-d H:i:s')) {
            $result = array('error' => '아직 설문조사 시작 기간 전입니다.');
            exit(json_encode($result));
        }
        if (element('ppo_end_datetime', $post_poll)
            && element('ppo_end_datetime', $post_poll) < cdate('Y-m-d H:i:s')) {
            $result = array('error' => '설문조사 기간이 이미 지났습니다.');
            exit(json_encode($result));
        }

        $ppi_item = $this->input->post('ppi_item');
        if (empty($ppi_item)) {
            $result = array('error' => '선택된 답변이 없습니다.');
            exit(json_encode($result));
        }
        if (count($ppi_item) > element('ppo_choose_count', $post_poll)) {
            $result = array('error' => '답변은 ' . element('ppo_choose_count', $post_poll) . '개 이하로만 선택이 가능합니다');
            exit(json_encode($result));
        }

        $where = array(
            'ppo_id' => $ppo_id,
            'mem_id' => $mem_id,
        );
        $post_poll_count = $this->Post_poll_item_poll_model->count_by($where);
        if ($post_poll_count > 0) {
            $result = array('error' => '회원님은 이미 이 설문에 참여해주셨습니다. 중복 참여는 불가능합니다');
            exit(json_encode($result));
        }
        if (element('ppo_after_comment', $post_poll)) {
            $where = array(
                'post_id' => element('post_id', $post),
                'mem_id' => $mem_id,
            );
            $cmt_count = $this->Comment_model->count_by($where);
            if ($cmt_count === 0) {
                $result = array('error' => '댓글 작성 후 설문에 응답하실 수 있습니다');
                exit(json_encode($result));
            }
        }

        foreach ($ppi_item as $pkey => $pval) {
            $insertdata = array(
                'ppo_id' => $ppo_id,
                'ppi_id' => $pval,
                'mem_id' => $mem_id,
                'ppp_datetime' => cdate('Y-m-d H:i:s'),
                'ppp_ip' => $this->input->ip_address(),
            );
            $this->Post_poll_item_poll_model->insert($insertdata);
            $this->Post_poll_item_model->update_plus($pval, 'ppi_count', 1);
        }
        $this->Post_poll_model->update_plus($ppo_id, 'ppo_count', 1);

        if (element('ppo_point', $post_poll)) {
            $this->point->insert_point(
                $mem_id,
                element('ppo_point', $post_poll),
                element('board_name', $board) . ' ' . element('post_id', $post) . ' 설문참여',
                'post_poll',
                $ppo_id,
                '설문참여'
            );
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => '설문조사에 응해주셔서 감사합니다');
        exit(json_encode($result));
    }


    /**
     * 게시물에서 설문조사한 후에 결과 불러오기
     */
    public function post_poll_result($post_id = 0, $ppo_id = 0)
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_poll_result';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => '잘못된 접근입니다.');
            exit(json_encode($result));
        }

        $ppo_id = (int) $ppo_id;
        if (empty($ppo_id) OR $ppo_id < 1) {
            $result = array('error' => '잘못된 접근입니다.');
            exit(json_encode($result));
        }

        $this->load->model(array('Post_poll_model', 'Post_poll_item_model', 'Post_poll_item_poll_model'));

        $select = 'post_id, brd_id, post_del, ppo_id';
        $post = $this->Post_model->get_one($post_id, $select);

        if ( ! $this->session->userdata('post_id_' . element('post_id', $post))) {
            $result = array('error' => '해당 게시물에서만 접근 가능합니다');
            exit(json_encode($result));
        }
        if ( ! element('post_id', $post)) {
            $result = array('error' => '존재하지 않는 게시물입니다');
            exit(json_encode($result));
        }
        if (element('post_del', $post)) {
            $result = array('error' => '삭제된 게시물에서는 설문조사가 불가능합니다');
            exit(json_encode($result));
        }

        $board = $this->board->item_all(element('brd_id', $post));
        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        $use_poll = ($this->cbconfig->get_device_view_type() === 'mobile')
            ? element('use_mobile_poll', $board) : element('use_poll', $board);

        if (empty($use_poll)) {
            $result = array('error' => '이 게시판은 현재 설문조사 기능을 사용하지 않습니다');
            exit(json_encode($result));
        }
        $post_poll = $this->Post_poll_model->get_one($ppo_id);

        if (element('post_id', $post) !== element('post_id', $post_poll)) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        if (empty($post_poll['ppo_start_datetime'])
            OR element('ppo_start_datetime', $post_poll) === '0000-00-00 00:00:00') {
            $post_poll['ppo_start_datetime'] = '';
        }
        if (empty($post_poll['ppo_end_datetime'])
            OR element('ppo_end_datetime', $post_poll) === '0000-00-00 00:00:00') {
            $post_poll['ppo_end_datetime'] = '';
        }

        $itemwhere = array(
            'ppo_id' => element('ppo_id', $post_poll),
        );
        $poll_item = $this->Post_poll_item_model->get('', '', $itemwhere, '', '', 'ppi_id', 'ASC');

        $sum_count = 0;
        $max = 0;
        if ($poll_item && is_array($poll_item)) {
            foreach ($poll_item as $key => $value) {
                if ($value['ppi_count'] > $max) {
                    $max = $value['ppi_count'];
                }
                $sum_count+= $value['ppi_count'];
                $poll_item[$key]['ppi_item'] = html_escape($poll_item[$key]['ppi_item']);
            }
            foreach ($poll_item as $key => $value) {
                $rate = $sum_count ? ($value['ppi_count'] / $sum_count * 100) : 0;
                $poll_item[$key]['rate'] = $rate;
                $s_rate = number_format($rate, 1);
                $poll_item[$key]['s_rate'] = $s_rate;

                $bar = $max ? (int)($value['ppi_count'] / $max * 100) : 0;
                $poll_item[$key]['bar'] = $bar;
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array(
            'success' => 'ok',
            'poll' => $post_poll,
            'poll_item' => $poll_item,
        );
        exit(json_encode($result));
    }


    /**
     * 스팸 키워드 체크하기
     */
    public function filter_spam_keyword()
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_filter_spam_keyword';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $this->output->set_content_type('application/json');

        $title = strip_tags($this->input->post('title'));
        $content = strip_tags($this->input->post('content'));

        $spam_word = explode(',', trim($this->cbconfig->item('spam_word')));
        $return_title = '';
        $return_content = '';

        if ($spam_word) {
            for ($i = 0; $i < count($spam_word); $i++) {
                $str = trim($spam_word[$i]);
                if ($title) {
                    $pos = stripos($title, $str);
                    if ($pos !== false) {
                        $return_title = $str;
                        break;
                    }
                }
                if ($content) {
                    $pos = stripos($content, $str);
                    if ($pos !== false) {
                        $return_content = $str;
                        break;
                    }
                }
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $return = array(
            'title' => $return_title,
            'content' => $return_content,
        );
        $json = json_encode($return);

        exit($json);
    }


    /**
     * 게시물 임시저장하기
     */
    public function tempsave()
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_tempsave';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $this->output->set_content_type('application/json');

        $brd_key = trim(urldecode($this->input->post('brd_key')));
        $brd_id = $this->board->item_key('brd_id', $brd_key);
        $post_title = trim(urldecode($this->input->post('post_title')));
        $post_content = trim(urldecode($this->input->post('post_content')));

        if (empty($brd_id)) {
            exit();
        }
        if (empty($post_content)
            OR $post_content === '<p>&nbsp;</p>'
            OR $post_content === '<div>&nbsp;</div>'
            OR $post_content === '&nbsp;') {
            exit();
        }
        if ($this->member->is_member() === false) {
            exit();
        }

        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model('Tempsave_model');

        $where = array(
            'brd_id' => $brd_id,
            'mem_id' => $mem_id,
        );
        $result = $this->Tempsave_model->get_one('', '', $where);

        if (element('tmp_id', $result)) {
            $updatedata = array(
                'tmp_title' => $post_title,
                'tmp_content' => $post_content,
                'tmp_ip' => $this->input->ip_address(),
                'tmp_datetime' => cdate('Y-m-d H:i:s'),
            );
            $this->Tempsave_model->update(element('tmp_id', $result), $updatedata);
        } else {
            $insertdata = array(
                'brd_id' => $brd_id,
                'tmp_title' => $post_title,
                'tmp_content' => $post_content,
                'mem_id' => $mem_id,
                'tmp_ip' => $this->input->ip_address(),
                'tmp_datetime' => cdate('Y-m-d H:i:s'),
            );
            $this->Tempsave_model->insert($insertdata);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $return = array('success' => 'ok');
        $json = json_encode($return);

        exit($json);
    }


    /**
     * 임시저장되어있는 게시물 불러오기
     */
    public function get_tempsave()
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_get_tempsave';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $this->output->set_content_type('application/json');

        $brd_key = trim(urldecode($this->input->post('brd_key')));
        $brd_id = $this->board->item_key('brd_id', $brd_key);

        if (empty($brd_id)) {
            return;
        }
        if ($this->member->is_member() === false) {
            return;
        }
        $mem_id = (int) $this->member->item('mem_id');

        $this->load->model('Tempsave_model');

        $where = array(
            'brd_id' => $brd_id,
            'mem_id' => $mem_id,
        );
        $result = $this->Tempsave_model->get_one('', 'tmp_title, tmp_content', $where);
        $result['success'] = 'ok';

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $json = json_encode($result);

        exit($json);
    }


    /**
     * 게시물을 네이버에 핑 보내는 페이지입니다
     */
    public function naversyndi($post_id = 0)
    {
        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_naversyndi';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        if ( ! $this->cbconfig->item('naver_syndi_key')) {
            die('신디케이션 키가 입력되지 않았습니다');
        }
        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            show_404();
        }

        $post = $this->Post_model->get_one($post_id);

        if ( ! element('post_id', $post)) {
            show_404();
        }
        if (element('post_del', $post)) {
            show_404();
        }

        $board = $this->board->item_all(element('brd_id', $post));

        if ( ! element('brd_id', $board)) {
            show_404();
        }

        if ( ! element('use_naver_syndi', $board)) {
            die('이 게시판은 신디케이션 기능을 사용하지 않습니다');
        }
        if (element('access_view', $board)) {
            die('비회원이 읽기가 가능한 게시판만 신디케이션을 지원합니다');
        }
        if (element('post_secret', $post)) {
            die('비밀글은 신디케이션을 지원하지 않습니다');
        }
        if (element('use_personal', $board)) {
            die('1:1 게시판은 신디케이션을 지원하지 않습니다');
        }

        $site_url = trim(site_url(), '/');

        $post_content = display_html_content(
            element('post_content', $post),
            element('post_html', $post),
            element('post_image_width', $board),
            element('use_auto_url', $board),
            element('content_target_blank', $board)
        );
        $content = str_replace(array('&amp;', '&nbsp;'), array('&', ' '), $post_content);
        $summary = str_replace(array('&amp;', '&nbsp;'), array('&', ' '), html_escape(strip_tags(element('post_content', $post))));


        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        header('content-type: text/xml');
        header('cache-control: no-cache, must-revalidate');
        header('pragma: no-cache');

        $xml = "";
        $xml .= "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        $xml .= "<feed xmlns=\"http://webmastertool.naver.com\">\n";
        $xml .= "<id>" . $site_url . "</id>\n";
        $xml .= "<title>naver syndication feed document</title>\n";
        $xml .= "<author>\n";
        $xml .= "<name>webmaster</name>\n";
        $xml .= "</author>\n";
        $xml .= "<updated>" . cdate('Y-m-d\TH:i:s\+09:00') . "</updated>\n";
        $xml .= "<link rel=\"site\" href=\"" . $site_url . "\" title=\"" . html_escape($this->cbconfig->item('site_title')) . "\" />\n";
        $xml .= "<entry>\n";
        $xml .= "<id>" . post_url(element('brd_key', $board), $post_id) . "</id>\n";
        $xml .= "<title><![CDATA[" . html_escape(element('post_title', $post)) . "]]></title>\n";
        $xml .= "<author>\n";
        $xml .= "<name>" . html_escape(element('post_nickname', $post)) . "</name>\n";
        $xml .= "</author>\n";
        $xml .= "<updated>" .date('Y-m-d\TH:i:s\+09:00', strtotime(element('post_updated_datetime', $post))) . "</updated>\n";
        $xml .= "<published>" . date('Y-m-d\TH:i:s\+09:00', strtotime(element('post_datetime', $post))) . "</published>\n";
        $xml .= "<link rel=\"via\" href=\"" . board_url(element('brd_key', $board)) . "\" title=\"" . html_escape(element('brd_name', $board)) . "\" />\n";
        $xml .= "<link rel=\"mobile\" href=\"" . post_url(element('brd_key', $board), $post_id) . "\" />\n";
        $xml .= "<content type=\"html\"><![CDATA[{$content}]]></content>\n";
        $xml .= "<summary type=\"text\"><![CDATA[{$summary}]]></summary>\n";
        $xml .= "<category term=\"" . element('brd_key', $board) . "\" label=\"" . html_escape(element('brd_name', $board)) . "\" />\n";
        $xml .= "</entry>\n";
        $xml .= "</feed>";

        echo $xml;
    }

    public function media_status_update($mlh_id = 0,  $brd_key='' ,$flag = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $mlh_id = (int) $mlh_id;
        if (empty($mlh_id) OR $mlh_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }
        $flag = (int) $flag;

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->load->model('Media_tenping_history_model');
        else if($brd_key==='linkmine')
            $this->load->model('Media_linkmine_history_model');
        else if($brd_key==='linkasia')
            $this->load->model('Media_linkasia_history_model');
        else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
            $this->load->model('Media_multiple_history_model');
        else if($brd_key==='viashare')
            $this->load->model('Media_viashare_history_model');

        $select = 'mlh_id';

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $post = $this->Media_tenping_history_model->get_one($mlh_id, $select);
        else if($brd_key==='linkmine')
            $post = $this->Media_linkmine_history_model->get_one($mlh_id, $select);
        else if($brd_key==='linkasia')
                $post = $this->Media_linkasia_history_model->get_one($mlh_id, $select);
        else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
            $post = $this->Media_multiple_history_model->get_one($mlh_id, $select);
        else if($brd_key==='viashare')
            $post = $this->Media_viashare_history_model->get_one($mlh_id, $select);

        if ( ! element('mlh_id', $post)) {
            $result = array('error' => '존재하지 않는 항목입니다');
            exit(json_encode($result));
        }


        $is_admin = $this->member->is_admin();

        if ($is_admin === false && $this->member->item('mem_level') < 1) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        
        $postupdate = array(
            'mlh_status' => $flag,
            
         );
        

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->Media_tenping_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='linkmine')
            $this->Media_linkmine_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='linkasia')
            $this->Media_linkasia_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
            $this->Media_multiple_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='viashare')
                $this->Media_viashare_history_model->update($mlh_id,$postupdate);

        if($flag===1) $success = '유효 처리하셨습니다' ;
        else $success = '무효 처리하셨습니다' ;
        
        $result = array('success' => $success);
        exit(json_encode($result));

    }

    /**
     * 목록에서 여러 게시물 비밀글 설정 및 해제 하기
     */
    public function media_multi_status_update($flag = 0, $brd_key = '')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_multi_secret';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $post_ids = $this->input->post('chk_post_id');
        // $mlh_memos = $this->input->post('mlh_memo');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 항목이 없습니다.');
            exit(json_encode($result));
        }
        $flag = (int) $flag;

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->load->model('Media_tenping_history_model');
        else if($brd_key==='linkmine')
            $this->load->model('Media_linkmine_history_model');
        else if($brd_key==='linkasia')
            $this->load->model('Media_linkasia_history_model');
        else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
            $this->load->model('Media_multiple_history_model');
        else if($brd_key==='viashare')
            $this->load->model('Media_viashare_history_model');

        $select = 'mlh_id';
        


        foreach ($post_ids as $mlh_id) {
            $mlh_id = (int) $mlh_id;
            if (empty($mlh_id) OR $mlh_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            $select = 'mlh_id';

            if($brd_key==='tenping' || $brd_key==='nomal_campaign')
                $post = $this->Media_tenping_history_model->get_one($mlh_id, $select);
            else if($brd_key==='linkmine')
                $post = $this->Media_linkmine_history_model->get_one($mlh_id, $select);
            else if($brd_key==='linkasia')
                $post = $this->Media_linkasia_history_model->get_one($mlh_id, $select);
            else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
                $post = $this->Media_multiple_history_model->get_one($mlh_id, $select);
            else if($brd_key==='viashare')
                $post = $this->Media_viashare_history_model->get_one($mlh_id, $select);

            if ( ! element('mlh_id', $post)) {
                $result = array('error' => '존재하지 않는 항목입니다');
                exit(json_encode($result));
            }

            
            $is_admin = $this->member->is_admin();

            if ($is_admin === false && $this->member->item('mem_level') < 1) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            

            $postupdate = array(
                'mlh_status' => $flag,
                // 'mlh_memo' => $mlh_memos[$mlh_id],
            );

            if($brd_key==='tenping' || $brd_key==='nomal_campaign')
                $this->Media_tenping_history_model->update($mlh_id,$postupdate);
            else if($brd_key==='linkmine')
                $this->Media_linkmine_history_model->update($mlh_id,$postupdate);
            else if($brd_key==='linkasia')
                $this->Media_linkasia_history_model->update($mlh_id,$postupdate);
            else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
                $this->Media_multiple_history_model->update($mlh_id,$postupdate);
            else if($brd_key==='viashare')
                $this->Media_viashare_history_model->update($mlh_id,$postupdate);
            
        }

        
        

        
        if($flag===1) $success = '유효 처리하셨습니다' ;
        else $success = '무효 처리하셨습니다' ;

        $result = array('success' => $success);
        exit(json_encode($result));

    }

    public function media_memo_update($mlh_id = 0, $brd_key='', $mlh_memo = '')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        $mlh_id = (int) $mlh_id;
        if (empty($mlh_id) OR $mlh_id < 1) {
            $result = array('error' => '잘못된 접근입니다');
            exit(json_encode($result));
        }

        $select = 'mlh_id';

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->load->model('Media_tenping_history_model');
        else if($brd_key==='linkmine')
            $this->load->model('Media_linkmine_history_model');
        else if($brd_key==='linkasia')
            $this->load->model('Media_linkasia_history_model');
        else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
            $this->load->model('Media_multiple_history_model');
        else if($brd_key==='viashare')
            $this->load->model('Media_viashare_history_model');
        else if($brd_key==='selfcert_ad'){
            $this->load->model('Media_selfcert_history_model');
            $select = 'msh_id';
        }

        

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $post = $this->Media_tenping_history_model->get_one($mlh_id, $select);
        else if($brd_key==='linkmine')
            $post = $this->Media_linkmine_history_model->get_one($mlh_id, $select);
        else if($brd_key==='linkasia')
            $post = $this->Media_linkasia_history_model->get_one($mlh_id, $select);
        else if($brd_key==='multiple' ||  $brd_key==='b-a-1' ||  $brd_key==='b-a-2')
            $post = $this->Media_multiple_history_model->get_one($mlh_id, $select);
        else if($brd_key==='viashare')
            $post = $this->Media_viashare_history_model->get_one($mlh_id, $select);
        else if($brd_key==='selfcert_ad')
                $post = $this->Media_selfcert_history_model->get_one($mlh_id, $select);

        if ( ! element($select, $post)) {
            $result = array('error' => '존재하지 않는 항목입니다');
            exit(json_encode($result));
        }


        $is_admin = $this->member->is_admin();

        if ($is_admin === false &&  $this->member->item('mem_level') < 1) {
            $result = array('error' => '접근권한이 없습니다');
            exit(json_encode($result));
        }

        
        if($brd_key==='selfcert_ad'){
             $postupdate = array(
                'msh_memo' => urldecode($mlh_memo),
                
             );
        } else {
            $postupdate = array(
                'mlh_memo' => urldecode($mlh_memo),
                
             );
        }

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->Media_tenping_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='linkmine')
            $this->Media_linkmine_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='linkasia')
            $this->Media_linkasia_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='multiple' || $brd_key==='b-a-1' || $brd_key==='b-a-2')
            $this->Media_multiple_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='viashare')
            $this->Media_viashare_history_model->update($mlh_id,$postupdate);
        else if($brd_key==='selfcert_ad')
            $this->Media_selfcert_history_model->update($mlh_id,$postupdate);
        
        
        // $result = array('success' => '성공');
        //         exit(json_encode($result));

    }

    

    public function tenping_cpa_curl($jid,$status,$reason='')
    {

        
        
        $href ='http://api.tenping.kr/cpa/setvalid?jid='.$jid.'&status='.$status.'&reason='.urldecode($reason);
        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);
        
        if(isset($obj->ResultCode))
            $result = array('success' => 1 ,'ResultCode' => $obj->ResultCode,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->Message)));
        else $result = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        exit(json_encode($result));

    }

    public function tenping_query_curl($jid=0,$uid=0,$at=0,$key='')
    {

        
        
        $href ='http://api.tenping.kr/Query?jid='.$jid.'&uid='.$uid.'&at='.$at.'&key='.$key;

        
        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);
        
        $return=array();
        if(isset($obj->ResultCode))
            $return = array('success' => 1 ,'ResultCode' => $obj->ResultCode,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->Message)));
        else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

        exit(json_encode($return));

    }


    public function media_linkasia_proc($jid = '', $post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');



        if (empty($jid)) {
            $result = array('resultcode'=>1001,'message' => 'jid 가 없습니다.');
            exit(json_encode($result));
        }

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('resultcode'=>1002,'message' => 'post_id 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_name'))) {
            $result = array('resultcode'=>1003,'message' => 'mlh_name 가 없습니다.');
            exit(json_encode($result));
        }


        if (empty($this->input->get('mlh_mobileno'))) {
            $result = array('resultcode'=>1004,'message' => 'mlh_mobileno 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_text'))) {
            $result = array('resultcode'=>1005,'message' => 'mlh_text 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_age'))) {
            $result = array('resultcode'=>1006,'message' => 'mlh_age 가 없습니다.');
            exit(json_encode($result));
        }
        
        $this->load->model(array('Media_linkasia_history_model','Post_model'));
        
        $post = $this->Post_model->get_one($post_id);
        
        if ( ! element('post_id', $post)) {
            $result = array('resultcode'=>1100,'message' => '잘못된 post_id 입니다.');
            exit(json_encode($result));
        }
            

        $insertdata = array(
            'post_id' => $post_id,
            'mlh_name' => urldecode($this->input->get('mlh_name',null,'')),
            'mlh_age' => $this->input->get('mlh_age',null,''),
            'mlh_gender' => $this->input->get('mlh_gender',null,''),
            'mlh_email' => $this->input->get('mlh_email',null,''),
            'mlh_mobileno' => get_phone($this->input->get('mlh_mobileno',null,'')),
            'mlh_datetime' => cdate('Y-m-d H:i:s'),
            'mlh_ip' => $this->input->ip_address(),
            'mlh_referer' => $this->agent->referrer(),
            'mlh_text' => urldecode($this->input->get('mlh_text',null,'')),
            'mlh_status' => 1,
            'jid' => $jid
        );

        $mlh_id = $this->Media_linkasia_history_model->insert($insertdata);

        if(empty($mlh_id)){
            $result = array('resultcode'=>9000,'message' => 'DB 입력시 알 수 없는 오류가 발생하였습니다.');
            exit(json_encode($result));
        }
            
        

        
        $result = array('resultcode'=>1,'message' => '정상적으로 입력되었습니다.');
        exit(json_encode($result));
        

    }

    public function media_multiple_linkasia_proc($jid = '', $post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');



        if (empty($jid)) {
            $result = array('resultcode'=>1001,'message' => 'jid 가 없습니다.');
            exit(json_encode($result));
        }

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('resultcode'=>1002,'message' => 'post_id 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_name'))) {
            $result = array('resultcode'=>1003,'message' => 'mlh_name 가 없습니다.');
            exit(json_encode($result));
        }


        if (empty($this->input->get('mlh_mobileno'))) {
            $result = array('resultcode'=>1004,'message' => 'mlh_mobileno 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_text'))) {
            // $result = array('resultcode'=>1005,'message' => 'mlh_text 가 없습니다.');
            // exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_age'))) {
            // $result = array('resultcode'=>1006,'message' => 'mlh_age 가 없습니다.');
            // exit(json_encode($result));
        }

        if (empty($this->input->get('multi_code'))) {
            $result = array('resultcode'=>1007,'message' => 'multi_code 가 없습니다.');
            exit(json_encode($result));
        }

        
        

         $mlh_goods_type='';
        if($this->input->get('mlh_goods_type',null,'') ==="1")
            $mlh_goods_type="럭셔리";
        elseif($this->input->get('mlh_goods_type',null,'') ==="2")
            $mlh_goods_type="프로페셔널";
        else $mlh_goods_type=urldecode($this->input->get('mlh_goods_type',null,''));


        $this->load->model(array('Media_multiple_history_model','Post_model'));
        
        $post = $this->Post_model->get_one($post_id);
        
        if ( ! element('post_id', $post)) {
            $result = array('resultcode'=>1100,'message' => '잘못된 post_id 입니다.');
            exit(json_encode($result));
        }
            

        $insertdata = array(
            'post_id' => $post_id,
            'multi_code' => $this->input->get('multi_code',null,''),
            'mlh_name' => urldecode($this->input->get('mlh_name',null,'')),
            'mlh_age' => $this->input->get('mlh_age',null,''),
            'mlh_gender' => $this->input->get('mlh_gender',null,''),
            'mlh_email' => $this->input->get('mlh_email',null,''),
            'mlh_mobileno' => get_phone($this->input->get('mlh_mobileno',null,'')),
            'mlh_datetime' => cdate('Y-m-d H:i:s'),
            'mlh_ip' => $this->input->ip_address(),
            'mlh_referer' => $this->agent->referrer(),
            'mlh_text' => urldecode($this->input->get('mlh_text',null,'')),
            'mlh_status' => 1,
            'mlh_val1' => $mlh_goods_type,
            'jid' => $jid,

        );

        $mlh_id = $this->Media_multiple_history_model->insert($insertdata);

        if(empty($mlh_id)){
            $result = array('resultcode'=>9000,'message' => 'DB 입력시 알 수 없는 오류가 발생하였습니다.');
            exit(json_encode($result));
        }
        
        $this->load->library('email');

        if(element('post_id', $post) === '484'){
            $this->email->clear(true);
            $this->email->from($this->cbconfig->item('webmaster_email'), '하이애드DB');
            $this->email->to('webmaster@jionmeditech.com');
            $this->email->subject('안녕하세요 하이애드원입니다.');
            $emailform['emailform'] = $insertdata;
            $message = $this->load->view('admin/' . ADMIN_SKIN . '/config/testemail/email_campaign_form', $emailform, true);
            $this->email->message($message);            
            $this->email->send();
        }
        

        
        $result = array('resultcode'=>1,'message' => '정상적으로 입력되었습니다.');
        exit(json_encode($result));
        

    }


    public function media_multiple_withone_proc($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');



        

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('resultcode'=>1002,'message' => 'post_id 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_name'))) {
            $result = array('resultcode'=>1003,'message' => 'mlh_name 가 없습니다.');
            exit(json_encode($result));
        }


        if (empty($this->input->get('mlh_mobileno'))) {
            $result = array('resultcode'=>1004,'message' => 'mlh_mobileno 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_gender'))) {
            $result = array('resultcode'=>1005,'message' => 'mlh_gender 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('mlh_age'))) {
            $result = array('resultcode'=>1006,'message' => 'mlh_age 가 없습니다.');
            exit(json_encode($result));
        }

        if (empty($this->input->get('name'))) {
            $result = array('resultcode'=>1007,'message' => 'name 가 없습니다.');
            exit(json_encode($result));
        }
        
        $this->load->model(array('Media_multiple_history_model','Post_model'));
        
        $post = $this->Post_model->get_one($post_id);
        
        if ( ! element('post_id', $post)) {
            $result = array('resultcode'=>1100,'message' => '잘못된 post_id 입니다.');
            exit(json_encode($result));
        }
            

        $insertdata = array(
            'post_id' => $post_id,
            'multi_code' => $this->input->get('name',null,''),
            'mlh_name' => urldecode($this->input->get('mlh_name',null,'')),
            'mlh_age' => $this->input->get('mlh_age',null,''),
            'mlh_gender' => $this->input->get('mlh_gender',null,''),
            'mlh_email' => $this->input->get('mlh_email',null,''),
            'mlh_mobileno' => get_phone($this->input->get('mlh_mobileno',null,'')),
            'mlh_datetime' => cdate('Y-m-d H:i:s'),
            'mlh_ip' => $this->input->ip_address(),
            'mlh_referer' => $this->agent->referrer(),
            'mlh_text' => urldecode($this->input->get('mlh_text',null,'')),
            'mlh_status' => 1,
            'jid' => 'withone'
        );

        $mlh_id = $this->Media_multiple_history_model->insert($insertdata);

        if(empty($mlh_id)){
            $result = array('resultcode'=>9000,'message' => 'DB 입력시 알 수 없는 오류가 발생하였습니다.');
            exit(json_encode($result));
        }
            
        

        
        $result = array('resultcode'=>1,'message' => '정상적으로 입력되었습니다.');
        exit(json_encode($result));
        

    }

    public function linkasia_cpa_curl($jid,$status,$reason='')
    {

        
        
        $href ='http://eventfinder.win/postback?id='.$jid.'&status='.$status;
        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);
        
        $return=array();
        if(isset($obj->status)){
            if($obj->status == '1')
                $return = array('success' => 1 ,'ResultCode' => $obj->status,"Message" => $obj->message);
            if($obj->status == '2')
                $return = array('success' => 1 ,'ResultCode' => $obj->status,"Message" => $obj->error);
        }
        else $return = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        exit(json_encode($return));

    }


    public function media_insert($post_id = 0,$mlh_mobileno = 'none',$mlh_name = 'none'){

        
        if (empty($post_id)) {
            $result = array('resultcode' => '1001','message' => '파라메타 오류입니다.');
            exit(json_encode($result));
        }

       

    

        
        
        
        
        
        
        //$this->db->cache_off();
        $userAgent = $this->agent->agent_string() ? $this->agent->agent_string() : '';        
        $view['view']['userAgent']=get_useragent_info($userAgent);

       $mlh_name_='';
        switch ($mlh_name) {
            case '185000001':
                
                $mlh_name_='온기_pc1';
                break;
            case '185000002':
                $mlh_name_='온기_pc2';
                break;
            case '185000003':
                $mlh_name_='온기_mo1';
                break;
            case '185000004':
                $mlh_name_='온기_mo2';
                break;
            case '185000005':
                $mlh_name_='온기_mo3';
                break;
            case '185000006':
                $mlh_name_='더덕_pc1';
                break;
            case '185000007':
                $mlh_name_='더덕_pc2';
                break;
            case '185000008':
                $mlh_name_='더덕_mo1';
                break;
            case '185000009':
                $mlh_name_='더덕_mo2';
                break;
            case '185000010':
                $mlh_name_='더덕_mo3';
                break;
            
            
        }
      
      
           
        $this->load->model('Media_tenping_history_model');
        $insertdata = array(
            'post_id' => $post_id,
            'mlh_name' => $mlh_name_,
            'mlh_age' => $this->input->post('mlh_age',null,''),
            'mlh_gender' => $this->input->post('mlh_gender',null,''),
            'mlh_email' => $this->input->post('mlh_email',null,''),
            'mlh_mobileno' => $mlh_mobileno,
            'mlh_datetime' => cdate('Y-m-d H:i:s'),
            'mlh_ip' => $this->input->ip_address(),
            'mlh_referer' => $this->agent->referrer(),
            'mlh_text' => $this->input->post('mlh_text',null,''),
            'mlh_status' => 1,
            
        );

        $mlh_id = $this->Media_tenping_history_model->insert($insertdata);

            $this->output->set_content_type('application/json');
        if($mlh_id)
            $result = array('resultcode' => '1','message' => '정상적으로 입력되었습니다.');
        else 
            $result = array('resultcode' => '9000','message' => 'DB 입력시 알 수 없는 오류입니다.');

        exit(json_encode($result));
    
    }

   public function iuminous_curl($jid=0,$uid=0,$at=0,$key='')
    {

      $href ='http://www.ad4989.co.kr/common/api/hiadone/media_report.jsp?loginid=hipa180706&pageid=09Pe&begin_day=20190701&end_day=20190731&pagesum=y&rtn_type=json';


//        $href ='http://www.ad4989.co.kr/common/api/hiadone/media_report.jsp?pageid=09mg&loginid=newsis18&begin_day=20180901&end_day=20180901&pagesum=y&rtn_type=json';


        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);

        $return = arrya();
        if(isset($obj->ResultCode))
            $return = array('success' => 1 ,'ResultCode' => $obj->ResultCode,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->Message)));
        else $return = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        exit(json_encode($return));

    }


    public function lotto_query_curl($mlh_mobileno='',$partnerId='')
    {

        

        
        $url = 'http://lottozzang.kr/add_member.php';
        $data = array(
            'name' => 'none',
            'hp' => $mlh_mobileno,
            'partnerId' => $partnerId,
            'mcpId' => '지오앤플랜',
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);


        
        $url = 'http://lotto7.kr/add_member.php';
        $data = array(
            'name' => 'none',
            'hp' => $mlh_mobileno,
            'partnerId' => $partnerId,
            'mcpId' => '지오앤플랜',
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        // $obj = json_decode($result);
        
        // if(isset($obj->ResultCode))
        //     $result = array('success' => 1 ,'ResultCode' => $obj->ResultCode,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->Message)));
        // else $result = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        $return = array('resultcode' => '1','message' => '정상적으로 입력되었습니다.');

        exit(json_encode($return));

    }

    public function lottoseven_query_curl($mlh_mobileno='',$partnerId='',$mb_name='')
    {

        

        
        

        $join_hp = explode("-",$mlh_mobileno);
        
        $url = 'http://lotto-7.co.kr/intro/member_join2.php';
        $data = array(
            'mb_name' => urldecode($mb_name),
            'join_hp1' => $join_hp[0],
            'join_hp2' => $join_hp[1],
            'join_hp3' => $join_hp[2],
            'join_homepage' => $partnerId
            
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        
        // $obj = json_decode($result);
        
        // if(isset($obj->ResultCode))
        //     $result = array('success' => 1 ,'ResultCode' => $obj->ResultCode,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->Message)));
        // else $result = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        $return = array('resultcode' => '1','message' => '정상적으로 입력되었습니다.');

        exit(json_encode($return));

    }

    public function viashare_query_curl($click_key='none',$via_token='none',$mlh_id=0,$mlh_mobileno='none',$mlh_name='none')
    {

        if(empty($this->agent->referrer())) $referrer='none';
        else $referrer = $this->agent->referrer();

        
        $url = 'https://via-share.net/api/cpa_post';
        $data = array(
            'click_key' => $click_key,
            'via_token' => $via_token,
            'tel' => $mlh_mobileno,
            'name' => urldecode($mlh_name),
            'ip' => $this->input->ip_address(),
            'ref' => $referrer,
            'api_sid' => $mlh_id,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        

        $return = array();

        $obj = json_decode($result);

        if(isset($obj->result))
            $return = array('success' => 1 ,'ResultCode' => $obj->result,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->message)));
        else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

       

        exit(json_encode($return));

    }

    public function viashere_cpa_curl($mlh_id,$via_token,$status='')
    {

        
        
        $url ='https://via-share.net/api/cpa_status_update';

        $data = array(
            'via_token' => $via_token,
            'api_sid' => $mlh_id,
            'status' => $status,
            
        );

        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $return = array();
        $obj = json_decode($result);
        
        if(isset($obj->result))
            $return = array('success' => 1 ,'ResultCode' => $obj->result,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $obj->message)));
        else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

        exit(json_encode($return));

    }

    public function linkasia_wellzone_cpa_curl($mlh_id=0,$mlh_mobileno='none',$mlh_name='none',$mlh_age=0)
    {

        
        
        $url ='https://adm.wellzone.kr/request/req_result.php';


        

        $data = array(
            'provider_id' => 'linkasia',  //수정불가
            'provider_name' => 'hiadone',
            'req_datetime' => date('Y-m-d H:i:s'),
            'username' => urldecode($mlh_name),
            'userage' => $mlh_age,
            'mobile' => $mlh_mobileno,
            'userip' => $this->input->ip_address(),
            'codename' => 'ynb001'            
        );

    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        $result = curl_exec($ch);
        curl_close($ch);

        $return = array();
        // $obj = json_decode($result);
        $message=$result;
        if($result==="0000")
            $message="성공";
        else $message=$result;
        // print_r($result);
        if(isset($result))
            $return = array('success' => 1 ,'ResultCode' => $result,"Message" => urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $message)));
        else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

        exit(json_encode($return));

    }


    public function linkasia_beelineinsu_cpa_curl($mlh_id=0,$mlh_mobileno='none',$mlh_name='none',$mlh_age=0)
    {

        









        $base64_data = base64_encode('E=U&m_cd='.urldecode($mlh_name).'&o_cd='.$mlh_id.'&p_cd=query&cnt=1&price=0&c_cd=&p_nm=상담신청&tel='.$mlh_mobileno);

        // www.beelineinsu2.com/purchase/check.php?CD=DBIS 쿠키값&D=암호화데이터” 

        
        $url ='http://www.beelineinsu2.com/purchase/check.php?CD='.get_cookie('DBIS').'&D='.$base64_data;


        
        
        

    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        $result = curl_exec($ch);
        curl_close($ch);

        $return = array();

        
        if(isset($result))
            $return = array('success' => 1 ,'ResultCode' => 1111,"Message" => 'success');
        else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

        exit(json_encode($return));

    }

    // public function daine_query_curl($mlh_name='',$mlh_age='',$mlh_mobileno='',$mlh_text='')
    // {   
        
    //     $url = 'http://com.daine.co.kr/utf/hgw/hi.jsp';
    //     $data = array(
    //         'name' => urldecode($mlh_name),
    //         'age' => $mlh_age,
    //         'phone' => $mlh_mobileno,
    //         'memo' => urldecode($mlh_text)
    //     );
        
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_POST, sizeof($data));
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     $result = curl_exec($ch);
    //     curl_close($ch);
        

    //     $return = array();

    //     // $obj = json_decode($result);

    //     if(isset($result))
    //         $return = array('success' => 1 ,'ResultCode' => 0001,"Message" => 'success');
    //     else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

       

    //     exit(json_encode($return));

    // }

    /**
     * 목록에서 여러 게시물 비밀글 설정 및 해제 하기
     */
    public function msh_mem_id_check($post_id=0,$str='')
    {
        $error='';

        $str = urldecode($str);
        $this->load->helper('chkstring');

        if(empty($post_id)){
            $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
            exit(json_encode($return));
        }

        if(!empty($str)){
            if (chkstring($str, _ALPHABETIC_ + _NUMERIC_) === false) {

                $message = $str.'아이디는 공백없이 영문, 숫자만 입력 가능합니다';
                // $this->form_validation->set_message(
                //     '_mem_nickname_check',
                //     '닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다'
                // );
                
            }

            $this->load->model('Media_selfcert_history_model');
            $countwhere = array(                
                'post_id' => $post_id,
                'msh_mem_id' => $str,
            );
            
            $selfcert = $this->Media_selfcert_history_model->count_by($countwhere);

            if ($selfcert > 0) {

                $message = $str . '는 이미 이벤트에 참여하셨습니다.';
                // $this->form_validation->set_message(
                //     '_mem_nickname_check',
                //     $str . ' 는 이미 다른 회원이 사용하고 있는 닉네임입니다'
                // );
                
            } else {
                $return = array('resultcode' => '1','message' => '');
                
                exit(json_encode($return));
            }
        } else {
            $message = ' 아이디를 입력해 주세요';
        }
        
        $return = array('resultcode' => '2','message' => $message);
        
        exit(json_encode($return));

    }


    /**
     * 게시물 삭제하기
     */
    public function media_delete($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_delete';
        $this->load->event($eventname);

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            show_404();
        }
        if ( ! $this->session->userdata('post_id_' . $post_id)) {
            alert('해당 게시물에서만 접근 가능합니다');
        }

        $post = $this->Post_model->get_one($post_id);

        if ( ! element('post_id', $post)) {
            show_404();
        }

        $board = $this->board->item_all(element('brd_id', $post));
        $mem_id = (int) $this->member->item('mem_id');

        $is_admin = $this->member->is_admin(
            array(
                'board_id' => element('brd_id', $board),
                'group_id' => element('bgr_id', $board),
            )
        );

        if (element('block_delete', $board) && $is_admin === false) {
            alert('이 게시판의 글은 관리자에 의해서만 삭제가 가능합니다');
            return false;
        }
        if (element('protect_post_day', $board) > 0 && $is_admin === false) {
            if (ctimestamp() - strtotime(element('post_datetime', $post)) >= element('protect_post_day', $board) * 86400) {
                alert('이 게시판은 ' . element('protect_post_day', $board) . '일 이상된 게시글의 삭제를 금지합니다');
                return false;
            }
        }
        if (element('protect_comment_num', $board) > 0 && $is_admin === false) {
            if (element('protect_comment_num', $board) <= element('post_comment_count', $post)) {
                alert(element('protect_comment_num', $board) . '개 이상의 댓글이 달린 게시글은 삭제할 수 없습니다');
                return false;
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('step1', $eventname);

        if (element('mem_id', $post)) {
            if ($is_admin === false
                AND $mem_id !== abs(element('mem_id', $post))) {
                alert('회원님은 이 글을 삭제할 권한이 없습니다');
                return false;
            }
        } else {

            $view= array();
            $view['view'] = array();

            // 이벤트가 존재하면 실행합니다
            $view['view']['event']['step2'] = Events::trigger('step2', $eventname);

            if ($is_admin !== false) {
                $this->session->set_userdata(
                    'can_delete_' . element('post_id', $post),
                    '1'
                );
            }
            if ( ! $this->session->userdata('can_delete_' . element('post_id', $post))
                && $this->input->post('modify_password')) {

                if ( ! function_exists('password_hash')) {
                    $this->load->helper('password');
                }
                if ( password_verify($this->input->post('modify_password'), element('post_password', $post))) {
                    $this->session->set_userdata(
                        'can_delete_' . element('post_id', $post),
                        '1'
                    );
                    redirect(current_url());
                } else {
                    $view['view']['message'] = '패스워드가 잘못 입력되었습니다';
                }
            }
            if ( ! $this->session->userdata('can_delete_' . element('post_id', $post))) {

                // 이벤트가 존재하면 실행합니다
                $view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

                /**
                 * 레이아웃을 정의합니다
                 */
                $view['view']['info'] = '게시글 삭제를 위한 패스워드 입력페이지입니다.<br />패스워드를 입력하시면 게시글 삭제가 가능합니다';

                $page_title = element('board_name', $board) . ' 글삭제';
                $layout_dir = element('board_layout', $board) ? element('board_layout', $board) : $this->cbconfig->item('layout_board');
                $mobile_layout_dir = element('board_mobile_layout', $board) ? element('board_mobile_layout', $board) : $this->cbconfig->item('mobile_layout_board');
                $use_sidebar = element('board_sidebar', $board) ? element('board_sidebar', $board) : $this->cbconfig->item('sidebar_board');
                $use_mobile_sidebar = element('board_mobile_sidebar', $board) ? element('board_mobile_sidebar', $board) : $this->cbconfig->item('mobile_sidebar_board');
                $skin_dir = element('board_skin', $board) ? element('board_skin', $board) : $this->cbconfig->item('skin_board');
                $mobile_skin_dir = element('board_mobile_skin', $board) ? element('board_mobile_skin', $board) : $this->cbconfig->item('mobile_skin_board');
                $layoutconfig = array(
                    'path' => 'media',
                    'layout' => 'layout',
                    'skin' => 'password',
                    'layout_dir' => $layout_dir,
                    'mobile_layout_dir' => $mobile_layout_dir,
                    'use_sidebar' => $use_sidebar,
                    'use_mobile_sidebar' => $use_mobile_sidebar,
                    'skin_dir' => $skin_dir,
                    'mobile_skin_dir' => $mobile_skin_dir,
                    'page_title' => $page_title,
                );
                $view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
                $this->data = $view;
                $this->layout = element('layout_skin_file', element('layout', $view));
                $this->view = element('view_skin_file', element('layout', $view));
                return true;
            }
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('step3', $eventname);

        if (element('use_post_delete_log', $board)) {
            $updata = array(
                'post_del' => 1,
            );
            $this->Post_model->update(element('post_id', $post), $updata);
            $metadata = array(
                'delete_mem_id' => $mem_id,
                'delete_mem_nickname' => $this->member->item('mem_nickname'),
                'delete_datetime' => cdate('Y-m-d H:i:s'),
                'delete_ip' => $this->input->ip_address(),
            );
            $this->load->model('Post_meta_model');
            $this->Post_meta_model
                ->save(element('post_id', $post), element('brd_id', $board), $metadata);
        } else {
            $this->board->delete_post($post_id);
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);
        $param =& $this->querystring;

        $this->session->set_flashdata(
                'message',
                '선택된 게시글이 삭제되었습니다'
            );
            redirect(site_url('/media_write/'.element('brd_key', $board)).'?' . $param->output());

        

    }


    public function tour_post_chk($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_delete';
        $this->load->event($eventname);

        $modify_password = $this->input->get('modify_password');

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('error' => 1,"message" => '오류입니다 다시 시도해 주세요');
            exit(json_encode($result));

        }

        if (empty($modify_password)) {
            $result = array('error' => 1,"message" => '오류입니다 다시 시도해 주세요');
            exit(json_encode($result));
        }
        

        $post = $this->Post_model->get_one($post_id);

        if ( ! element('post_id', $post)) {
            $result = array('error' => 1,"message" => '오류입니다 다시 시도해 주세요');
            exit(json_encode($result));
        }

        if (!empty(element('mem_id', $post))) {
            $result = array('error' => 1,"message" => '오류입니다 다시 시도해 주세요');
            exit(json_encode($result));
        }
    

            

        if ( ! function_exists('password_hash')) {
            $this->load->helper('password');
        }

        if ( password_verify(urldecode($modify_password), element('post_password', $post))) {
            
            $reply = $this->Post_model->get_one('','',array('post_num' => element('post_num',$post),'post_reply' => 'A'));

            $result = array('success' => 1,"message" => '성공',"posting" => display_html_content(
                        element('post_content', $post),
                        element('post_html', $post)),"replying" => display_html_content(
                        element('post_content', $reply),
                        element('post_html', $reply)));
            exit(json_encode($result));
        } else {
            $result = array('error' => 1,"message" => '패스워드가 맞지 앖습니다.');
            exit(json_encode($result));
        }
        
        $result = array('error' => 1,"message" => '오류입니다 다시 시도해 주세요');
            exit(json_encode($result));
    }


    public function awheel($post_id)
    {   

        $num_1 = 1; //100000
        $num_2 = 2; //50000
        $num_3 = 10; //10000
        $num_4 = 100; //아메리카노
        
        $ispostback=1;
       $event_goods = array(1 =>'캐시 슬라이드 10만 포인트',2=>'캐시 슬라이드 5만 포인트',3=>'캐시 슬라이드 1만 포인트',4=>'캐시 슬라이드 1천 포인트',5=>'캐시 슬라이드 100포인트');
       
       
        if (empty($post_id) || empty($this->input->post('msh_key'))) {
            $result = array('result_code' => 2,"Message" => '잘못된 접근입니다.');
            exit(json_encode($result));
            
        }
      

        $post = $this->Post_model->get_one($post_id);      

        

        if (element('post_del', $post) > 1) {
            $result = array('result_code' => 2,"Message" => '<p class="popup_p">이벤트가 종료 되었습니다.</p>');
            exit(json_encode($result));
        }


 



        
        
       
    

        $this->load->model('Media_selfcert_history_model');
        $where = array(
            'msh_key' => $this->input->post('msh_key'),
            'post_id' => element('post_id',$post),
        );
        
        $selfcert = $this->Media_selfcert_history_model->get_one('', '', $where);

        
        if(empty(element('post_id',$selfcert))){
            show_404();   
        }
        
        if(element('msh_status',$selfcert) =="2"){
            $result = array('result_code' => 2,"Message" => '<p class="popup_p">이미 참여 하였습니다.<br><b class="popup_b">['.$event_goods[element('msh_event_result',$selfcert)].']</b> 에 당첨되었습니다.</p>');
            exit(json_encode($result));
        }

        if(element('msh_status',$selfcert) =="1"){
            // $result = array('result_code' => 2,"Message" => '<p class="popup_tit">죄송합니다</p>
            //         <p class="popup_p">본이벤트는 하이마트 앱 신규 설치 후 실행 회원을 대상으로 진행되는 이벤트입니다.</p><p class="popup_tit" style="color:blue;">반드시 하이마트앱을 실행 하셔야 합니다.</p>');
            // exit(json_encode($result));
            // 
            $ispostback =2;
        }

        if(element('msh_status',$selfcert) =="3"){

            $where = array(
                'msh_dupinfo' => element('msh_dupinfo',$selfcert),
                'post_id' => element('post_id',$post),
                'msh_val1' => 1,
                
            );

            $selfcert_count = $this->Media_selfcert_history_model->count_by($where);
            if($selfcert_count < 1){
                // $result = array('result_code' => 2,"Message" => '<p class="popup_tit">죄송합니다</p>
                //         <p class="popup_p">본이벤트는 하이마트 앱 신규 설치 후 실행 회원을 대상으로 진행되는 이벤트입니다.</p><p class="popup_tit" style="color:blue;">반드시 하이마트앱을 실행 하셔야 합니다.</p>');
                // exit(json_encode($result));
                // 
                $ispostback =2;
            }
        }

        $where = array(
            'msh_mem_id' => element('msh_mem_id',$selfcert),
            'post_id' => element('post_id',$post),
            'msh_status' => 2,                        
        );
        
        $selfcert_msh_status_2 = $this->Media_selfcert_history_model->get_one('', '', $where);
        

        if(element('post_id',$selfcert_msh_status_2)){
            $result = array('result_code' => 2,"Message" => '<p class="popup_p">이미 참여 하였습니다.<br><b class="popup_b">['.$event_goods[element('msh_event_result',$selfcert_msh_status_2)].']</b> 에 당첨되었습니다.</p>');
            exit(json_encode($result));
        }

        $where = array(
           'post_id' => element('post_id',$post),           
           'msh_status' => 2,                        
        );

        $event_result_count = $this->Media_selfcert_history_model->get_event_result_count($where);
        
        $msh_event_result = array(1 =>0,2=>0,3=>0,4=>0,5=>0);
        foreach($event_result_count as $value){
            $msh_event_result[$value['msh_event_result']] = $value['cnt'];
        }

        $r=0;
        $rank=5;
        while(true){
            $r = mt_rand(1,1000);

            $angle =0;
            if(($num_1 > $msh_event_result[1])  && $r <12){
               $angle = mt_rand(-32,33);
               $rank=1;
            }
            elseif(($num_2 > $msh_event_result[2]) && $r < 60){
               
               $angle = mt_rand(184,249);
                $rank=2;   
            }
            elseif(($num_3 > $msh_event_result[3]) && $r <210){
               $angle = mt_rand(40,105);
               
               $rank=3;
            }
            elseif(($num_4 > $msh_event_result[4]) && $r < 300){
               $angle = mt_rand(112,177);
               $rank=4;
            }
            else{
               $angle = mt_rand(256,321);
               $rank=5;
            }
            break;

        }
        if($ispostback !==1){
            $angle = mt_rand(256,321);
            $rank=5;
        }
        $updatedata = array('msh_status' => 2,'msh_event_result' => $rank,'msh_event_datetime' => cdate('Y-m-d H:i:s') );                    
        $this->Media_selfcert_history_model->update(element('msh_id',$selfcert), $updatedata);

        $result = array('result_code' => 1,"data" => array('angle' => $angle,'rank' => $rank));
        exit(json_encode($result));
    }

    public function msh_status_chk($post_id)
    {   

        
       $event_goods = array(1 =>'캐시 슬라이드 10만 포인트',2=>'캐시 슬라이드 5만 포인트',3=>'캐시 슬라이드 1만 포인트',4=>'캐시 슬라이드 1천 포인트',5=>'캐시 슬라이드 100포인트');
       
        if (empty($post_id) || empty($this->input->post('msh_key'))) {
            $result = array('result_code' => 2,"Message" => '잘못된 접근입니다.');
            exit(json_encode($result));
            
        }
      

        $post = $this->Post_model->get_one($post_id);      

        

        if (element('post_del', $post) > 1) {
            $result = array('result_code' => 2,"Message" => '<p class="popup_p">이벤트가 종료 되었습니다.</p>');
            exit(json_encode($result));
        }


 



        
        
       
    

        $this->load->model('Media_selfcert_history_model');
        $where = array(
            'msh_key' => $this->input->post('msh_key'),
            'post_id' => element('post_id',$post),
        );
        
        $selfcert = $this->Media_selfcert_history_model->get_one('', '', $where);

        
        if(empty(element('post_id',$selfcert))){
            show_404();   
        }
        
        if(element('msh_status',$selfcert) =="2"){
            $result = array('result_code' => 2,"Message" => "이미 참여 하였습니다.\n".$event_goods[element('msh_event_result',$selfcert)]."]에 당첨되었습니다.");
            exit(json_encode($result));
        }

        if(element('msh_status',$selfcert) =="1"){
            $result = array('result_code' => 1,"Message" => "죄송합니다\n
                    본이벤트는 하이마트 앱 신규 설치 후 실행 회원을 대상으로 진행되는 이벤트입니다.\n반드시 하이마트앱을 실행 하셔야 합니다.");
            exit(json_encode($result));
        }

        if(element('msh_status',$selfcert) =="3"){
            $result = array('result_code' => 3,"Message" => '');
            exit(json_encode($result));
        }

        // $where = array(
        //     'msh_mobileco' => element('msh_mobileco',$selfcert),
        //     'post_id' => element('post_id',$post),
        //     'msh_status' => 2,                        
        // );
        
        // $selfcert_count = $this->Media_selfcert_history_model->get_event_result_count($where);
            
        
    }


    public function reward($event,$msh_key)
    {
        
        if (empty($msh_key || empty($event))) {
            show_404();
        }

        
        $this->load->model('Media_selfcert_history_model');
        $where = array(
            'msh_key' => $msh_key,
            'msh_status' => 1,
            
        );
        $selfcert = $this->Media_selfcert_history_model->get_one('', '', $where);
        
         if(empty(element('post_id',$selfcert))){
            exit;
        }
        
        $post = $this->Post_model->get_one(element('post_id',$selfcert));      

        

        if (element('post_del', $post) > 1) {
            exit;
        }
        
        $msh_val1='';
        if($this->input->get('ist_type') =='1' && $this->input->get('ist_chk') =='1')
            $msh_val1=1;
        elseif($this->input->get('ist_type') =='1' && $this->input->get('ist_chk') =='0')
            $msh_val1=2;
        elseif($this->input->get('ist_type') =='2' && $this->input->get('ist_chk') =='0')
            $msh_val1=3;
        $updatedata = array('msh_adid' => $this->input->get('adid',null,''),'msh_status' => 3,'msh_postback_datetime' => cdate('Y-m-d H:i:s'),'msh_val1' => $msh_val1,'msh_event_result' => 1 );                    
        $this->Media_selfcert_history_model->update(element('msh_id',$selfcert), $updatedata);
        
        $result = array('result_code' => 1,"result_code" => "success");
        exit(json_encode($result));
        
    }




    public function multi_media_send($flag = '',$brd_key='')
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_multi_delete';
        $this->load->event($eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $post_ids = $this->input->post('chk_post_id');
        // $mlh_memos = $this->input->post('mlh_memo');
        if (empty($post_ids)) {
            $result = array('error' => '선택된 항목이 없습니다.');
            exit(json_encode($result));
        }
        $flag = (int) $flag;
        $select = 'mlh_id';

        if($brd_key==='tenping' || $brd_key==='nomal_campaign')
            $this->load->model('Media_tenping_history_model');
        else if($brd_key==='linkmine')
            $this->load->model('Media_linkmine_history_model');
        else if($brd_key==='linkasia')
            $this->load->model('Media_linkasia_history_model');
        else if($brd_key==='multiple')
            $this->load->model('Media_multiple_history_model');
        else if($brd_key==='viashare')
            $this->load->model('Media_viashare_history_model');
        else if($brd_key==='selfcert_ad'){
            $this->load->model('Media_selfcert_history_model');
            $select = 'msh_id';
        }

        


        foreach ($post_ids as $mlh_id) {
            $mlh_id = (int) $mlh_id;
            if (empty($mlh_id) OR $mlh_id < 1) {
                $result = array('error' => '잘못된 접근입니다');
                exit(json_encode($result));
            }

            

            if($brd_key==='tenping' || $brd_key==='nomal_campaign')
                $post = $this->Media_tenping_history_model->get_one($mlh_id, $select);
            else if($brd_key==='linkmine')
                $post = $this->Media_linkmine_history_model->get_one($mlh_id, $select);
            else if($brd_key==='linkasia')
                $post = $this->Media_linkasia_history_model->get_one($mlh_id, $select);
            else if($brd_key==='multiple')
                $post = $this->Media_multiple_history_model->get_one($mlh_id, $select);
            else if($brd_key==='viashare')
                $post = $this->Media_viashare_history_model->get_one($mlh_id, $select);
            else if($brd_key==='selfcert_ad')
                $post = $this->Media_selfcert_history_model->get_one($mlh_id, 'msh_id,msh_memo');
                

            if ( ! element($select, $post)) {
                $result = array('error' => '존재하지 않는 항목입니다');
                exit(json_encode($result));
            }
            
            if ( ! element('msh_memo', $post)) {
                $result = array('error' => '존재하지 않는 메일입니다');
                exit(json_encode($result));
            }

            
            $is_admin = $this->member->is_admin();

            if ($is_admin === false && $this->member->item('mem_level') < 1) {
                $result = array('error' => '접근권한이 없습니다');
                exit(json_encode($result));
            }

            

           
            

            $verify_url = base_url('media/reward_render/selfcert_ad/'.element('msh_key', $post));

            $title = 
                '중고나라 & 하이마트 룰렛 이벤트 안내 메일입니다.';
           
            $content = 
                '<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid rgb(226,226,225);border-right: 1px solid rgb(226,226,225);background-color: rgb(255,255,255);border-top:10px solid #348fe2; border-bottom:5px solid #348fe2;border-collapse: collapse;"><tr><td width="200" style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;">중고나라 & 하이마트 룰렛 이벤트 안내 메일입니다.</td><td style="font-size:12px;padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><span style="font-size:14px;font-weight:bold;color:rgb(0,0,0)">안녕하세요</span><br />이벤트 참여해 주셔서 감사합니다.</td></tr><tr style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;"><td colspan="2" style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><p>안녕하세요 </p><p>이벤트 참여해 주셔서 감사합니다.</p><p>더욱 편리한 서비스를 제공하기 위해 항상 최선을 다하겠습니다.</p><p>&nbsp;</p><p>아래 링크를 클릭하시면 이벤트에 참여하실수 있습니다.</p><p><a href="{메일인증주소}" target="_blank" style="font-weight:bold;">중고나라 & 하이마트 룰렛 이벤트참여하기</a></p><p>&nbsp;</p><p>감사합니다.</p></td></tr></table>';
          

            $title = str_replace('[이벤트 참여주소}', $verify_url, $title);
            $content = str_replace('{메일인증주소}', $verify_url, $content);
            
            $this->email->from($this->cbconfig->item('webmaster_email'), $this->cbconfig->item('webmaster_name'));
            $this->email->to($this->input->post('mem_email'));
            $this->email->subject($title);
            $this->email->message($content);
            $this->email->send();          
        }

        // 이벤트가 존재하면 실행합니다
        Events::trigger('after', $eventname);

        $result = array('success' => '선택된 항목의 메일을 발송하였습니다.');
        exit(json_encode($result));

    }


    public function msh_mobileno_chk($post_id)
    {   

        
       $event_goods = array(1 =>'캐시 슬라이드 10만 포인트',2=>'캐시 슬라이드 5만 포인트',3=>'캐시 슬라이드 1만 포인트',4=>'캐시 슬라이드 1천 포인트',5=>'캐시 슬라이드 100포인트');
       
        if (empty($post_id)) {
            $result = array('result_code' => 2,"Message" => '잘못된 접근입니다.');
            exit(json_encode($result));
            
        }
      

        $post = $this->Post_model->get_one($post_id);      

        

        if (element('post_del', $post) > 1) {
            $result = array('result_code' => 2,"Message" => '<p class="popup_p">이벤트가 종료 되었습니다.</p>');
            exit(json_encode($result));
        }


 



        
        
       
    

        $this->load->model('Media_selfcert_history_model');
        $where = array(
            'msh_mobileno' => $this->session->userdata('mobileno'),
            'post_id' => element('post_id',$post),
            'msh_status' => 2,
        );
        
        $selfcert_2 = $this->Media_selfcert_history_model->get_one('', '', $where);

        
        
        
        if(element('msh_status',$selfcert_2) =="2"){
            $result = array('result_code' => 2,"Message" => "이미 참여 하였습니다.\n".$event_goods[element('msh_event_result',$selfcert_2)]."]에 당첨되었습니다.");
            exit(json_encode($result));
        }
        

        $where = array(
            'msh_mobileno' => $this->session->userdata('mobileno'),
            'post_id' => element('post_id',$post),
            'msh_status' => 3,
        );
        
        $selfcert_3 = $this->Media_selfcert_history_model->get_one('', '', $where);

        if(element('msh_status',$selfcert_3) =="3"){
            $result = array('result_code' => 3,"Message" => element('msh_key',$selfcert_3));
            exit(json_encode($result));
        }

         $where = array(
            'msh_mobileno' => $this->session->userdata('mobileno'),
            'post_id' => element('post_id',$post),
            'msh_status' => 1,
        );

         $selfcert_1 = $this->Media_selfcert_history_model->get_one('', '', $where);

        if(element('msh_status',$selfcert_1) =="1"){
            $result = array('result_code' => 1,"Message" => element('msh_key',$selfcert_1));
            exit(json_encode($result));
        }

        

        // $where = array(
        //     'msh_mobileco' => element('msh_mobileco',$selfcert),
        //     'post_id' => element('post_id',$post),
        //     'msh_status' => 2,                        
        // );
        
        // $selfcert_count = $this->Media_selfcert_history_model->get_event_result_count($where);
            
        
    }

    public function uuid_set($post_id)
    {   


        $str = urldecode($this->input->post("uuid",null,''));        
        
        $this->load->helper('chkstring');

        if(empty($post_id)){
            $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
            exit(json_encode($return));
        }

        if(!empty($str)){
            $this->load->helper('email');
            if (chkstring($str, _ALPHABETIC_ + _NUMERIC_) === false && !$this->email->valid_email($str)) {

                $message = '아이디는 공백없이 영문, 숫자 또는 이메일만 입력 가능합니다';


                

                
                
                // $this->form_validation->set_message(
                //     '_mem_nickname_check',
                //     '닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다'
                // );
                $return = array('resultcode' => '2','message' => $message);
                exit(json_encode($return));
            }

            $this->load->model('Media_selfcert_history_model');
            $where = array(                
                'post_id' => $post_id,
                'msh_mem_id' => $str,
                'msh_status' => 2,
            );
            
            $msh_status_2 = $this->Media_selfcert_history_model->get_one('', '', $where);

            if(element('post_id',$msh_status_2)){

                

                $message = $str . "는 이미 이벤트에 참여하셨습니다.";
                $return = array('resultcode' => '2','message' => $message);
                
                exit(json_encode($return));
                

            } else {


                // $where = array(
                //     'post_id' => $post_id,
                //     'msh_mem_id' => $str,
                //     'msh_status' => 3,
                // );


                // $msh_status_3 = $this->Media_selfcert_history_model->get_one('', '', $where);

                // if(element('post_id',$msh_status_3)){

                //     $message = '감사합니다 이벤트 페이지로 안내합니다.';          

                //     $return = array('resultcode' => '3','message' => $message,'msh_key' => element('msh_key',$msh_status_3));
                // }else {

                    $where = array(                
                        'post_id' => $post_id,
                        'msh_key' => $this->input->post("msh_key",null,''),
                        
                    );
                    

                    $msh_status = $this->Media_selfcert_history_model->get_one('', '', $where);

                    if(element('msh_id',$msh_status)){
                        if(empty(element('msh_mem_id',$msh_status))){
                            $where = array(                
                                'post_id' => $post_id,
                                'msh_mem_id' => $str,
                                'msh_status' => 3,
                                'msh_val1' => 1,
                            );
                            

                            $msh_val1_cnt = $this->Media_selfcert_history_model->count_by($where);

                            if($msh_val1_cnt > 0){
                                $updatedata = array(
                                    'msh_mem_id' => $str,
                                    'msh_status' => 3,
                                );                
                            }  else {
                                $updatedata = array(
                                    'msh_mem_id' => $str
                                );                
                            }
                            $this->Media_selfcert_history_model->update(element('msh_id',$msh_status), $updatedata);
                            

                            $return = array('resultcode' => '1','message' => 'ID 등록이 완료 되었습니다 이벤트 참여 하세요');
                        
                            exit(json_encode($return));    
                        } else {
                            $return = array('resultcode' => '2','message' => element('msh_mem_id',$msh_status).' 으로 ID 등록이 완료 되었습니다.');
                            exit(json_encode($return));    
                        }
                    } else {
                        $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
                        exit(json_encode($return));
                    }
                }
            }
        //         }
        //     }
        // } else {
        //     $message = ' 아이디를 입력해 주세요';

        //     $return = array('resultcode' => '2','message' => $message);
        
        //     exit(json_encode($return));        
        // }  
      

        // $post = $this->Post_model->get_one($post_id);  
        

        // if (element('post_del', $post) > 1) {
        //     $result = array('resultcode' => '2',"Message" => '<p class="popup_p">이벤트가 종료 되었습니다.</p>');
        //     exit(json_encode($result));
        // }    
        
        
        // $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
        
        // exit(json_encode($return));        
        
    }


    public function uuid_chk($post_id)
    {   


       
        
        

        if(empty($post_id)){
            $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
            exit(json_encode($return));
        }

        
            

            $this->load->model('Media_selfcert_history_model');




            $where = array(                
                'post_id' => $post_id,
                'msh_key' => $this->input->post("msh_key",null,''),
                
            );
                    

            $msh_status = $this->Media_selfcert_history_model->get_one('', '', $where);

            
            if(!empty(element('msh_mem_id',$msh_status)))        
            {
                $return = array('resultcode' => '1');
            
                exit(json_encode($return));    
            } else {
                $return = array('resultcode' => '2','message' => '캐시슬라이드 ID 를 등록해 주세요.');
                exit(json_encode($return));
            }
    }


    public function msh_key_set($post_id)
    {   


        // $str = urldecode($this->input->post("uuid",null,''));        
        $str='';
        $msh_dupinfo='';
        $msh_adid='';
        $this->load->helper('chkstring');

        if(empty($post_id)){
            $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
            exit(json_encode($return));
        }
        if($this->input->post('adiscopePayload'))
            $msh_dupinfo = $this->input->post('adiscopePayload');
        if($this->input->post('adid'))
            $msh_adid = $this->input->post('adid');
        // if(!empty($str)){
        //     if (chkstring($str, _ALPHABETIC_ + _NUMERIC_) === false) {

        //         $message = $str.'아이디는 공백없이 영문, 숫자만 입력 가능합니다';
        //         // $this->form_validation->set_message(
        //         //     '_mem_nickname_check',
        //         //     '닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다'
        //         // );
                
        //     }

            $this->load->model('Media_selfcert_history_model');


            if($msh_dupinfo){
                $where_count = array(                
                    'post_id' => $post_id,
                    'msh_dupinfo' => $msh_dupinfo,
                    'msh_val1<>' =>'' ,
                );
                         // print_r($where_count)   ;

                $msh_cnt = $this->Media_selfcert_history_model->count_by($where_count);

                if($msh_cnt > 0 ){

                    log_message('error', "msh_key_set_1: ".$msh_dupinfo);
                    $return = array('resultcode' => '2',"message" => "이미 참여 하셨습니다.\n대박복권은 2019.12.03(화) 일괄지급 예정입니다.");
                    exit(json_encode($return));
                }
            }
            // $where = array(                
            //     'post_id' => $post_id,
            //     'msh_mem_id' => $str,
            //     'msh_status' => 2,
            // );
            
            // $msh_status_2 = $this->Media_selfcert_history_model->get_one('', '', $where);

            // if(element('post_id',$msh_status_2)){

            //     $event_goods = array(1 =>'캐시슬라이드 10만 포인트',2=>'캐시슬라이드 5만 포인트',3=>'캐시슬라이드 1만 포인트',4=>'캐시슬라이드 1천 포인트',5=>'캐시슬라이드 100포인트');

            //     $message = $str . "는 이미 이벤트에 참여하셨습니다.\n".$event_goods[element('msh_event_result',$msh_status_2)]." 에 당첨되었습니다.";
            //     $return = array('resultcode' => '2','message' => $message);
                
            //     exit(json_encode($return));
                

            // } else {


                // $where = array(
                //     'post_id' => $post_id,
                //     'msh_mem_id' => $str,
                //     'msh_status' => 3,
                // );


                // $msh_status_3 = $this->Media_selfcert_history_model->get_one('', '', $where);

                // if(element('post_id',$msh_status_3)){

                //     $message = '감사합니다 이벤트 페이지로 안내합니다.';          

                //     $return = array('resultcode' => '3','message' => $message,'msh_key' => element('msh_key',$msh_status_3));
                // }else {

                    $insertdata = array(
                        'post_id' => $post_id,
                        'msh_company' => '',
                        'msh_authtype' => '',
                        'msh_dupinfo' => $msh_dupinfo,
                        'msh_name' => '',
                        'msh_birthdate' => '',
                        'msh_gender' => '',
                        'msh_nationalinfo' => '',
                        'msh_mobileno' => '',
                        'msh_mobileco' => '',
                        'msh_datetime' => cdate('Y-m-d H:i:s'),
                        'msh_ip' => $this->input->ip_address(),
                        'msh_referer' => '',
                        'msh_status' => 1,
                        'msh_mem_id' => $str,
                        
                        
                    );

                    
                    $msh_id = $this->Media_selfcert_history_model->insert($insertdata);

                    
                    $this->load->helper('string');
                    
                    $vericode = array('$', '/', '.');
                    $verificationcode = str_replace(
                        $vericode,
                        '',
                        password_hash($msh_id . '-' . random_string('alnum', 10), PASSWORD_BCRYPT)
                    );

                    $updatedata = array(
                        'msh_key' => $verificationcode                        
                    );                    
                    $this->Media_selfcert_history_model->update($msh_id, $updatedata);
                    
                    $return = array('resultcode' => '1','msh_key' => $verificationcode);
                
                    exit(json_encode($return));    
        //         }
        //     }
        // } else {
        //     $message = ' 아이디를 입력해 주세요';

        //     $return = array('resultcode' => '2','message' => $message);
        
        //     exit(json_encode($return));        
        // }  
      

        // $post = $this->Post_model->get_one($post_id);  
        

        // if (element('post_del', $post) > 1) {
        //     $result = array('resultcode' => '2',"Message" => '<p class="popup_p">이벤트가 종료 되었습니다.</p>');
        //     exit(json_encode($result));
        // }    
        
        
        // $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
        
        // exit(json_encode($return));        
        
    }



    public function pmangnhimart_query_curl($post_id)
    {

        if(empty($post_id)){            
            show_404();
        }

        $this->load->model('Media_selfcert_history_model');




            $where = array(                
                'post_id' => $post_id,
                'msh_key' => $this->input->post("msh_key",null,''),
                
            );

        $msh_info = $this->Media_selfcert_history_model->get_one('', '', $where);

        


        $url = 'https://reward-sp.adiscope.com/v1/sponsorship';
        $data = array(
            'adiscopePayload ' => urlencode(element('msh_dupinfo',$msh_info,'')),
            'adid ' => element('adid',$msh_info,''),
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        

        $return = array();

        $obj = json_decode($result);

       
        if(isset($obj->status))
            $return = array('success' => 1 ,'ResultCode' => $obj->status,"Message" => $obj->message);
        else $return = array('success' => 1 ,'ResultCode' => 9999,"Message" => 'network error');

       
        $updatedata = array(
            
            'msh_event_result' => $obj->status,
            'msh_memo' => $obj->message,
            'msh_event_datetime' => cdate('Y-m-d H:i:s')
         );

        
        $this->Media_selfcert_history_model->update(element('msh_id',$msh_info), $updatedata);

        exit(json_encode($return));

    }

    public function pmang_chk($post_id)
    {   


       
        
        

        if(empty($post_id)){
            $return = array('resultcode' => '2','message' => '잘못된 접근입니다.');
            exit(json_encode($return));
        }

        
            

        $this->load->model('Media_selfcert_history_model');




        $where = array(                
            'post_id' => $post_id,
            'msh_key' => $this->input->post("msh_key",null,''),
            
        );
                

        $msh_info = $this->Media_selfcert_history_model->get_one('', '', $where);

        if(empty($msh_info)){
            log_message('error', "pmang_chk_1: ");
            $return = array('resultcode' => '4');
            exit(json_encode($return));
        }
        if(empty(element('msh_dupinfo',$msh_info))){
            log_message('error', "pmang_chk_2: ".element('msh_key',$msh_info));
            $return = array('resultcode' => '4');
            exit(json_encode($return));
        }
        $where_count = array(                
            'post_id' => $post_id,
            'msh_dupinfo' => element('msh_dupinfo',$msh_info),
            'msh_val1<>' =>'' ,
            'msh_key<>' =>$this->input->post("msh_key",null,'') ,
            
        );
                 // print_r($where_count)   ;

        $msh_cnt = $this->Media_selfcert_history_model->count_by($where_count);

        if($msh_cnt > 0 ){
            log_message('error', "pmang_chk_3: ".element('msh_dupinfo',$msh_info));
            $return = array('resultcode' => '3');
            exit(json_encode($return));
        }
        
    
        if(element('msh_val1',$msh_info)!=='')        
        {
            $return = array('resultcode' => '1');            
            exit(json_encode($return));    
        } else {
            $return = array('resultcode' => '2');
            exit(json_encode($return));
        }
        
    }


    public function test_curl()
    {

        
        
        $href ='http://api_test.newspopcon.com/board_post/post/2?&page_sub=1';
        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result,true);
        print_r($obj);
        exit;

        exit(json_encode($result));

    }

    public function adpot_cpa_curl($jid,$status,$reason='')
    {

        
        
        $href ='https://adpot.kr/l/receive/cpa_result.php?adpot_key='.$jid.'&cmd='.$status.'&desc='.urldecode($reason);
        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_HEADER, true);
        $result = curl_exec($ch);
        $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // $obj = json_decode($result);
        
        if($responseCode === 200)
            $result = array('success' => 1 ,'ResultCode' => element(0,explode("|",$result),0),"Message" => element(1,explode("|",$result),''));
        else $result = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        exit(json_encode($result));

    }

    public function media_multiple_adpot_proc($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);
        $this->load->library('form_validation');
        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');

        log_message('error', 'post_id'.$post_id);


        if (empty($this->input->post('adpot_key'))) {
            $result = array('result' => 'N','resultcode'=>1001,'message' => 'adpot_key 가 없습니다.');
            log_message('error', 'post_id'.$post_id.' adpot_key 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('result' => 'N','resultcode'=>1002,'message' => 'post_id 가 없습니다.');
            log_message('error', 'post_id'.$post_id.'post_id 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }

        if (empty($this->input->post('mlh_name'))) {
            $result = array('result' => 'N','resultcode'=>1003,'message' => 'mlh_name 가 없습니다.');
            log_message('error', 'post_id'.$post_id.'mlh_name 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }


        if (empty($this->input->post('mlh_mobileno'))) {
            $result = array('result' => 'N','resultcode'=>1004,'message' => 'mlh_mobileno 가 없습니다.');
            log_message('error', 'post_id'.$post_id.'mlh_mobileno 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }

        if (empty($this->input->post('multi_code'))) {
            $result = array('result' => 'N','resultcode'=>1011,'message' => 'multi_code 가 없습니다.');
            log_message('error', 'post_id'.$post_id.'multi_code 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }

        if(!$this->form_validation->valid_mobile($this->input->post('mlh_mobileno'))){
            $result = array('result' => 'N','resultcode'=>1008,'message' => '올바른 핸드폰번호를 입력해주시기 바랍니다.');
            log_message('error', 'post_id'.$post_id.$this->input->post('mlh_mobileno').'올바른 핸드폰번호를 입력해주시기 바랍니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }

        if($post_id === 564 || $post_id === 500 || $post_id === 598 || $post_id === 615){
            if (empty($this->input->post('mlh_text'))) {
                $result = array('resultcode'=>1005,'message' => 'mlh_text 가 없습니다.');
                log_message('error', 'post_id'.$post_id.'mlh_text 가 없습니다.');
                $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
                $this->output->_display();
                exit;
                
            }
        }
        if($post_id === 564 || $post_id === 500 || $post_id === 598 || $post_id === 615){
            if (empty($this->input->post('mlh_age'))) {
                $result = array('resultcode'=>1006,'message' => 'mlh_age 가 없습니다.');
                log_message('error', 'post_id'.$post_id.'mlh_age 가 없습니다.');
                $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
                $this->output->_display();
                exit;

                
            }
        }

        $mlh_val1='';
        if($post_id === 500){

            if (empty($this->input->post('mlh_goods_type'))) {
                $result = array('result' => 'N','resultcode'=>1010,'message' => 'mlh_goods_type 가 없습니다.');
                log_message('error', 'post_id'.$post_id.'mlh_goods_type 가 없습니다.');
                $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
                $this->output->_display();
                exit;
            }

            
            if($this->input->post('mlh_goods_type',null,0) ==="1")
                    $mlh_val1="럭셔리";
                elseif($this->input->post('mlh_goods_type',null,0) ==="2")
                    $mlh_val1="프로페셔널";

            
        }

        $this->load->model(array('Media_multiple_history_model','Post_model'));
        
        $post = $this->Post_model->get_one($post_id);
        
        if ( ! element('post_id', $post)) {
            $result = array('result' => 'N','resultcode'=>1100,'message' => '잘못된 post_id 입니다.');
            log_message('error', 'post_id'.$post_id.'잘못된 post_id 입니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }
        

        
        $str = get_phone($this->input->post('mlh_mobileno'));
        $countwhere = array(
            'mlh_mobileno' => $str,
            'post_id' => element('post_id', $post),
        );
         
        
        if(!empty($this->input->post('multi_code'))) $countwhere['multi_code'] = $this->input->post('multi_code');
        
        $row = $this->Media_multiple_history_model->count_by($countwhere);

        if ($row > 0) {
            if($post_id !== 564){
                $result = array('result' => 'N','resultcode'=>1012,'message' => $str . ' 번호는 이미 상담신청한 번호 입니다.');
                log_message('error', 'post_id'.$post_id.$str . ' 번호는 이미 상담신청한 번호 입니다.');
                $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
                $this->output->_display();
                exit;
            }
        }

        



        $adpot_key = $this->input->post('adpot_key');
        $mlh_name = $this->input->post('mlh_name');
        $mlh_age = $this->input->post('mlh_age',null,0);
        $mlh_gender = $this->input->post('mlh_gender',null,0);
        $mlh_mobileno = $this->input->post('mlh_mobileno');
        $mlh_text = $this->input->post('mlh_text',null,'');
        $multi_code = $this->input->post('multi_code');

        $insertdata = array(
            'post_id' => $post_id,
            'multi_code' => $multi_code,
            'mlh_name' => $mlh_name,
            'mlh_age' => $mlh_age,
            'mlh_gender' => $mlh_gender,
            'mlh_email' => $this->input->post('mlh_email',null,''),
            'mlh_mobileno' => get_phone($mlh_mobileno),
            'mlh_datetime' => cdate('Y-m-d H:i:s'),
            'mlh_ip' => $this->input->ip_address(),
            'mlh_referer' => $this->agent->referrer(),
            'mlh_text' => $mlh_text,
            'mlh_status' => 1,
            'mlh_val1' => $mlh_val1,
            'jid' => $adpot_key,

        );

        $mlh_id = $this->Media_multiple_history_model->insert($insertdata);

        if(empty($mlh_id)){
            $result = array('result' => 'N','resultcode'=>9000,'message' => 'DB 입력시 알 수 없는 오류가 발생하였습니다.');
            log_message('error','post_id'.$post_id.'DB 입력시 알 수 없는 오류가 발생하였습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }
        
        
        

        
        $result = array('result' => 'Y','resultcode'=>1,'message' => '정상적으로 입력되었습니다.');
        $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
        $this->output->_display();
        exit;
        
        
        
    }

    public function daine_query_curl()
    {

        
        
       $url = 'http://rngcrm.com/DB_IN_API.php';

       $pattern = "/([\xEA-\xED][\x80-\xBF]{2}|[a-zA-Z0-9])+/";
       preg_match_all($pattern, $this->input->post('mlh_name'), $match);
       $val = implode('', $match[0]);

        $data = array(
            "in_route_code" => $this->input->post('multi_code'), 
            'in_name' => $val,            
            'in_hp' => $this->input->post('mlh_mobileno'),
            'in_ip' => $this->input->ip_address(),
            
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        

        $result = array('result'=>$result);
            
            exit(json_encode($result));
    }

    public function smssend()
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);
        

        $result = array();
        $this->output->set_content_type('application/json');
        
        $this->load->library('form_validation');

        if(empty($this->input->post('mlh_mobileno'))) {
            $result = array('result'=>'error','message' => '잘못된 핸드폰 번호입니다.');
            
            exit(json_encode($result));
        }
        
        $mlh_mobileno = $this->form_validation->valid_mobile($this->input->post('mlh_mobileno'));
        
        
        if(empty($mlh_mobileno)) {
            $result = array('result'=>'error','message' => '잘못된 핸드폰 번호입니다.');
            
            exit(json_encode($result));
        }
        
        $this->load->model( 'Sms_send_history_model');

        $timestamp = strtotime("-1 hours");

        $sendwhere= array(
            'post_id' => $this->input->post('post_id'),
            'ssh_phone' => str_replace("-","",$mlh_mobileno),
            'ssh_success' => 1,
            'ssh_datetime >=' => date("Y-m-d H:i:s", $timestamp),
        );

        $cnt = 0 ;
        $cnt = $this->Sms_send_history_model->count_by($sendwhere);

        if($cnt > 5){
            $result = array('result'=>'error','message' => '인증 횟수가 초과 되었습니다 한시간 이후 다시 시도해 주세요.');
            
            // exit(json_encode($result));
        }

        $ssc_key = rand(111111,999999);
        

        $sender = array(
            'phone' => $this->cbconfig->item('sms_admin_phone'),
            'post_id' => $this->input->post('post_id'),
            'multi_code' => $this->input->post('multi_code'),
            'ssc_key' => $ssc_key,
        );
        $receiver = array();
        
        $content= "인증번호 (".$ssc_key.") 입력하시면 정상처리 됩니다.";

        $receiver['phone'] = $this->input->post('mlh_mobileno');
        $receiver['mem_id'] = 0;
        $receiver['name'] = $this->input->post('mlh_name',null,'');
        $this->load->library('smslib');
        $smsresult = $this->smslib->send($receiver, $sender, $content, $date = '',$this->input->post('post_title').'-'.$this->input->post('multi_code') );

        if(empty($smsresult)){
            $result = array('result'=>'error','message' => 'sms 전송시 알 수 없는 오류가 발생하였습니다..');
            
            exit(json_encode($result));
        }
        exit($smsresult);
        
        
        
        

        
        // $result = array('resultcode'=>1,'message' => '정상적으로 입력되었습니다.');
        // exit(json_encode($result));
        

    }


    public function smsmap()
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);
        

        $result = array();
        $this->output->set_content_type('application/json');
        
        $this->load->library('form_validation');

        $cfc_num = $this->input->post('cfc_num');
        
        if(empty($cfc_num)) {
            $result = array('result'=>'error','message' => '잘못된 인증 번호입니다.');
            
            exit(json_encode($result));
        }
        
        $this->load->library('form_validation');

        $mlh_mobileno = $this->form_validation->valid_mobile($this->input->post('mlh_mobileno'));
        
        if(empty($mlh_mobileno)) {
            $result = array('result'=>'error','message' => '잘못된 핸드폰 번호입니다.');
            
            exit(json_encode($result));
        }

        $this->load->model( 'Sms_send_history_model');

        $timestamp = strtotime("-1 hours");

        $sendwhere= array(
            'post_id' => $this->input->post('post_id'),
            'ssh_phone' => str_replace("-","",$mlh_mobileno),
            'ssh_success' => 1,
            'ssh_datetime >=' => date("Y-m-d H:i:s", $timestamp),
            'ssc_key' => $cfc_num,
        );

        $cnt = 0 ;
        $cnt = $this->Sms_send_history_model->count_by($sendwhere);
        
        if($cnt < 1){
            $result = array('result'=>'error','message' => '인증 번호가 맞지 앖습니다. 다시 확인해 주세요 ');
            
            exit(json_encode($result));
        }

        if($cnt > 0){
            $result = array('result'=>'success','message' => '확인 되었습니다.');
            
            exit(json_encode($result));
        }

        
        $result = array('result'=>'error','message' => 'sms 전송시 알 수 없는 오류가 발생하였습니다..');
        
        exit(json_encode($result));

        
        // $result = array('resultcode'=>1,'message' => '정상적으로 입력되었습니다.');
        // exit(json_encode($result));
        

    }


    public function media_tenping_proc($post_id = 0)
    {

        // 이벤트 라이브러리를 로딩합니다
        $eventname = 'event_postact_post_extra';
        $this->load->event($eventname);
        $this->load->library('form_validation');
        // 이벤트가 존재하면 실행합니다
        Events::trigger('before', $eventname);

        $result = array();
        $this->output->set_content_type('application/json');



        

        $post_id = (int) $post_id;
        if (empty($post_id) OR $post_id < 1) {
            $result = array('resultcode'=>1002,'message' => 'post_id 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }

        if (empty($this->input->post('jid'))) {
            $result = array('resultcode'=>1001,'message' => 'jid 가 없습니다.');
            log_message('error', 'post_id_'.$post_id.'_jid 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;

            
        }
        
        if (empty($this->input->post('mlh_name'))) {
            $result = array('resultcode'=>1003,'message' => 'mlh_name 가 없습니다.');
            log_message('error', 'post_id_'.$post_id.'_mlh_name 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }


        if (empty($this->input->post('mlh_mobileno'))) {
            $result = array('resultcode'=>1004,'message' => 'mlh_mobileno 가 없습니다.');
            log_message('error', 'post_id_'.$post_id.'_mlh_mobileno 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }

        if (empty($this->input->post('mlh_text'))) {
            $result = array('resultcode'=>1005,'message' => 'mlh_text 가 없습니다.');
            log_message('error', 'post_id_'.$post_id.'_mlh_text 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }

        if (empty($this->input->post('mlh_age'))) {
            $result = array('resultcode'=>1006,'message' => 'mlh_age 가 없습니다.');
            log_message('error', 'post_id_'.$post_id.'_mlh_age 가 없습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }

        if(!$this->form_validation->valid_mobile($this->input->post('mlh_mobileno'))){
            $result = array('resultcode'=>1008,'message' => '올바른 핸드폰번호를 입력해주시기 바랍니다.');
            log_message('error', 'post_id_'.$post_id.'_올바른 핸드폰번호를 입력해주시기 바랍니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }

        $this->load->model(array('Media_tenping_history_model','Post_model'));

        $str = get_phone($this->input->post('mlh_mobileno'));
        $countwhere = array(
            'mlh_mobileno' => $str,
            'post_id' => $post_id,
        );

        $row = $this->Media_tenping_history_model->count_by($countwhere);

        if ($row > 0) {

            $result = array('resultcode'=>1011,'message' => $str . ' 번호는 이미 상담신청한 번호 입니다.');
            log_message('error', 'post_id_'.$post_id.'_'.$str.'_번호는 이미 상담신청한 번호 입니다');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
        }
        
        $post = $this->Post_model->get_one($post_id);
        
        if ( ! element('post_id', $post)) {
            $result = array('resultcode'=>1100,'message' => '잘못된 post_id 입니다.');
            log_message('error', 'post_id_'.$post_id.'_잘못된 post_id 입니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }
            

        $insertdata = array(
            'post_id' => $post_id,
            'mlh_name' => urldecode($this->input->post('mlh_name',null,'')),
            'mlh_age' => $this->input->post('mlh_age',null,''),
            'mlh_gender' => $this->input->post('mlh_gender',null,''),
            'mlh_email' => $this->input->post('mlh_email',null,''),
            'mlh_mobileno' => get_phone($this->input->post('mlh_mobileno',null,'')),
            'mlh_datetime' => cdate('Y-m-d H:i:s'),
            'mlh_ip' => $this->input->ip_address(),
            'mlh_referer' => $this->agent->referrer(),
            'mlh_text' => urldecode($this->input->post('mlh_text',null,'')),
            'mlh_status' => 1,
            'jid' => $this->input->post('jid',null,''),
        );

        $mlh_id = $this->Media_tenping_history_model->insert($insertdata);

        if(empty($mlh_id)){
            $result = array('resultcode'=>9000,'message' => 'DB 입력시 알 수 없는 오류가 발생하였습니다.');
            log_message('error', 'post_id_'.$post_id.'_DB 입력시 알 수 없는 오류가 발생하였습니다.');
            $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
            $this->output->_display();
            exit;
            
        }
        
        $result = array('resultcode'=>1,'message' => '정상적으로 입력되었습니다.');

        $this->output->set_output(json_encode($result,JSON_UNESCAPED_UNICODE));
        $this->output->_display();
        exit;
    }

    public function adpot_query_curl($jid=0,$key='')
    {

        
        
        $href ='https://adpot.kr/l/receive/cpa.php';

        
        $data = array(
            'pid' => 'dualsonic',
            'cid' => $jid,
            'name' => $this->input->post('mlh_name'),
            'tel' => $this->input->post('mlh_mobileno'),
        );

        $url = $href;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, sizeof($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);       
        
        $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // $obj = json_decode($result);
        
        if($responseCode === 200)
            $result = array('success' => 1 ,'ResultCode' => element(0,explode("|",$result),0),"Message" => element(1,explode("|",$result),''));
        else $result = array('error' => 1,"Message" => '오류입니다 다시 시도해 주세요');

        exit(json_encode($result));

    }
}

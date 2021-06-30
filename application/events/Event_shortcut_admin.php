<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Event_shortcut_admin extends CI_Controller
{
  
    private $CI;
    protected $xmlhttp;
    function __construct()
    {
        $this->CI = & get_instance();
        $this->xmlhttp = '<script>var xmlhttp;  
        if (window.XMLHttpRequest) {  
            xmlhttp = new XMLHttpRequest();
        } 
        else {  
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        //Ajax구현부분
        xmlhttp.onreadystatechange = function() {  
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 //통신 성공시 구현부분
            }
        }
        ';
        Events::register('after_shortcut_auction_js', array($this, 'after_shortcut_auction_js'));
        // Events::register('after_shortcut_cookie', array($this, 'after_shortcut_cookie'));
        Events::register('after_shortcut_wemakeprice_js', array($this, 'after_shortcut_wemakeprice_js'));
        Events::register('after_shortcut_lottorich_js', array($this, 'after_shortcut_lottorich_js'));
        Events::register('after_shortcut_siwon_js', array($this, 'after_shortcut_siwon_js'));
    }
     
    public function after_shortcut_auction_js() {
         
        $result = array();
        
        echo $this->xmlhttp;
        echo '
        xmlhttp.open("GET", "http://newspopcon.com/common/create_js_file.php?brd_key=shortcut&post_md=auction", true);  
        xmlhttp.send();
        xmlhttp.open("GET", "http://www.popapp.co.kr/common/create_js_file.php?brd_key=shortcut&post_md=auction", true); 
        xmlhttp.send();</script>
        ';

        
        $result['result'] = 1;
        
        return $result;
    }

    public function after_shortcut_wemakeprice_js() {
         
        $result = array();
        
        echo $this->xmlhttp;
        echo '
        xmlhttp.open("GET", "http://newspopcon.com/common/create_js_file.php?brd_key=shortcut&post_md=wemakeprice", true);  
        xmlhttp.send();
        xmlhttp.open("GET", "http://www.popapp.co.kr/common/create_js_file.php?brd_key=shortcut&post_md=wemakeprice", true); 
        xmlhttp.send();</script>
        ';

        
        $result['result'] = 1;
        
        return $result;
    }

    public function after_shortcut_lottorich_js() {

        $result = array();
        
        echo $this->xmlhttp;
        echo '
        xmlhttp.open("GET", "http://newspopcon.com/common/create_js_file.php?brd_key=shortcut&post_md=lottorich", true);  
        xmlhttp.send();
        xmlhttp.open("GET", "http://www.popapp.co.kr/common/create_js_file.php?brd_key=shortcut&post_md=lottorich", true); 
        xmlhttp.send();</script>
        ';

        
        $result['result'] = 1;
        
        return $result;
    }

    public function after_shortcut_siwon_js() {

        $result = array();
        
        echo $this->xmlhttp;
        echo '
        xmlhttp.open("GET", "http://newspopcon.com/common/create_js_file.php?brd_key=shortcut&post_md=siwon", true);  
        xmlhttp.send();
        xmlhttp.open("GET", "http://www.popapp.co.kr/common/create_js_file.php?brd_key=shortcut&post_md=siwon", true); 
        xmlhttp.send();</script>
        ';

        
        $result['result'] = 1;
        
        return $result;
    }

    // public function after_shortcut_cookie() {
         
    //     $result = array();
        
    //     echo $this->xmlhttp;
    //     echo '
    //     xmlhttp.open("GET", "http://newspopcon.com/common/create_cookie_file.php", true);  
    //     xmlhttp.send();</script>
    //     ';
  
    //     $result['result'] = 1;
  
    //     return $result;
    // }
    
}
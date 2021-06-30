<?php 

$campaign_info="";
// echo element('short_cookie',$view);
if(element('short_cookie',$view)) {
    $campaign_info['iscookie'] = 1;
    exit(json_encode($campaign_info));
}
$campaign_info['extravars'] = element('extravars',element('post',$view));
$campaign_info['post_link'] = element('link',$view);
$campaign_info['post_file'] = element('file_image',$view);

$campaign_info['post_md'] = element('post_md',element('post',$view));

$campaign_info['os'] = element('os',element('userAgent',$view));

$campaign_info['icon'] = '&icon='.element('download_link',element('0',element('file_image',$view)));

$campaign_info['content'] = 'naversearchapp://addshortcut?url='.urlencode(element('link_link',element('0',element('link',$view)))).'&title='.element('campaign_title',element('extravars',element('post',$view))).'&serviceCode=nstore&version=7';


exit(json_encode($campaign_info));

?>

 
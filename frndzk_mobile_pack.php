<?php   
    /* 
    Plugin Name: Frndzk Easy Mobile Theme Switcher with Theme pack
    Plugin URI: http://www.bitto.us
    Description: Frndzk Mobile Theme Switcher and Theme Pack plugin automatically detects mobile device and shows mobile copatiable theme. It also detects desktop browser and shows main theme. No setup or configuration needed. Even you dont have to search for mobile themes. Frndzk mobile Theme Switcher comes with most lightweight mobile theme pack. Just install and you will get a mobile version of your site. visit from mobile and see [demo](http://bitto.us/wp/) plugin developed by [bitto kazi](http://bitto.us)
    Author: Bitto Kazi
    Version: 1.0 
    Author URI: http://www.bitto.us
    */
add_action('wp_head','frndzk_head_loader');
function frndzk_head_loader()
{
$mobile_browser = '0';

if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i',
    strtolower($_SERVER['HTTP_USER_AGENT']))){
    $mobile_browser++;
    }

if((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml')>0) or 
    ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))){
    $mobile_browser++;
    }
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda','xda-');

if(in_array($mobile_ua,$mobile_agents)){
    $mobile_browser++;
    }
if (strpos(strtolower($_SERVER['ALL_HTTP']),'OperaMini')>0) {
    $mobile_browser++;
    }
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'windows')>0) {
    $mobile_browser=0;
    }


if($mobile_browser>0){












echo'<meta name="generator" content="Frndzk Mobile Switcher 1.0" /></head>
<body>
';
echo'<a href="'; echo home_url(); echo'">Home Page</a>';
wp_list_pages();
wp_list_categories();
echo'<br><br>';

if(is_single()) {

 if(have_posts()) :  while(have_posts()) : echo''; the_post();
echo'post name: <a href="'; the_permalink(); echo'">'; the_title(); echo'</a>
';         
                  the_content();
                echo'<p class="postmetadata">
                Posted on:'; the_date(); echo''; _e('posted under&#58;');  

the_category(', ');   _e('by ');    the_author(); echo'<br />';
                 comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% 

Comments &#187;');   edit_post_link('Edit', ' &#124; ', ''); echo'</p>';



global $post, $wp_query;
$args = array( 'post_id' => $post->ID, 'status' => 'approve', 'order' => 'ASC' ); $wp_query->comments = get_comments($args);


echo'<ol class="commentlist">';
wp_list_comments();
echo'</ol>';

comment_form();


endwhile; 
echo '<h3>'; posts_nav_link(); echo'</h3>';
endif;

}

elseif (is_page()) {

 if(have_posts()) :  while(have_posts()) : echo''; the_post();
echo'page name: <a href="'; the_permalink(); echo'">'; the_title(); echo'</a>
';         
                  the_content();
                echo'<p class="postmetadata">
                Posted on:'; the_date(); echo''; _e('posted under&#58;');  

the_category(', ');   _e('by ');    the_author(); echo'<br />';
                 comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% 

Comments &#187;');   edit_post_link('Edit', ' &#124; ', ''); echo'</p>';



global $post, $wp_query;
$args = array( 'post_id' => $post->ID, 'status' => 'approve', 'order' => 'ASC' ); $wp_query->comments = get_comments($args);


echo'<ol class="commentlist">';
wp_list_comments();
echo'</ol>';

comment_form();

endwhile; 

endif;

}

else {

 if(have_posts()) :  while(have_posts()) : echo''; the_post();
echo'post name: <a href="'; the_permalink(); echo'">'; the_title(); echo'</a>
';         
                  the_excerpt();
                echo'<p class="postmetadata">
                Posted on:'; the_date(); echo''; _e('posted under&#58;');  

the_category(', ');   _e('by ');    the_author(); echo'<br />';
                 comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% 

Comments &#187;');   edit_post_link('Edit', ' &#124; ', ''); echo'</p>';
endwhile; 
echo '<h3>'; posts_nav_link(); echo'</h3>';
endif;

}

echo'<br><br><Center>Mobile Theme Pack Plugin Developed by <a href="http://www.bitto.us/" target="_blank">Bitto Kazi</a><center></body></html>';
exit;


















 
} else {
}
}
?>
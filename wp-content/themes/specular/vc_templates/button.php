<?php
global $cl_redata;
extract(shortcode_atts(array(

    'title' => '',

    'link' => '',

    'icon' => '',

    'align' => 'left',

    'button_bool' => 'no',

    'button_2_title' => '',

    'button_2_link' => '#'

), $atts)); 

$extra_class = '';

if($button_bool == 'yes'){
	$extra_class .= 'buttons_two al_'.$align;
	$align = '';
}

$output = '<div class="wpb_content_element button '.$extra_class.'">';
    
    $output .= '<a class="btn-bt align-'.esc_attr($align).' '.esc_attr($cl_redata['overall_button_style'][0]).'" href="'.esc_url($link).'"><span>'.esc_attr($title).'</span><i class="'.esc_attr($icon).'"></i></a>';
    if($button_bool =='yes'):
    	$output .='<a class="btn-bt '.esc_attr($cl_redata['overall_button_style'][0]).'" href="'.esc_url($button_2_link).'"><span>'.esc_attr($button_2_title).'</span><i class="'.esc_attr($icon).'"></i></a>';
    endif;

$output .= '</div>';

echo  $output;

?>
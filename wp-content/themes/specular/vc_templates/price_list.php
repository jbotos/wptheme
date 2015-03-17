<?php

		
    global $cl_redata;
		extract(shortcode_atts(array(

            'title' => '',

            'price' => '',

            'currency' => '',

            'period' => '',

            'bg_color' => '',

            'type' => '',

            'button_link' => '#',

            'button_title' => 'Purchase'

        ), $atts)); 

		$output = '<div class="wpb_content_element price_table '.esc_attr($type).'">';  


      $output .='<div class="title" style="background-color:'.esc_attr($bg_color).';"><h1>'.$title.'</h1></div>';

      $output .='<div class="price">';
                  
        $output .= '<span class="p"><sup>'.$currency.'</sup>'.$price. '</span><span class="period">'.$period.'</span>';

      $output .= '</div>';

      $output .='<div class="list" style="background-color:'.esc_attr($bg_color).';"><ul>';

        $output .= "\n\t\t\t\t".wpb_js_remove_wpautop($content);

      $output .='</ul>';

      $output .= '</div>';

      if(!empty($button_title))

        $output .= '<div class="price_button" style="background-color:'.esc_attr($bg_color).';"><a class="btn-bt '.esc_attr($cl_redata['overall_button_style'][0]).'"href="'.esc_url($button_link).'">'.$button_title.'</a></div>';
      
    $output .= '</div>';

    echo $output;


?>
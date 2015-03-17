<?php
        global $cl_redata;
		extract(shortcode_atts(array(

            'testimon' => ''

    	), $atts));

		$output = ''; 

        $output = '<div class="wpb_content_element">';

        if(!isset($testimon))

        $testimon = 0;          

        $query_post = array('posts_per_page'=> 9999, 'post_type'=> 'testimonial', 'p' => $testimon );                          

        $loop = new WP_Query($query_post);

        if($loop->have_posts()){

            while($loop->have_posts()){

                $loop->the_post();  

                            $output .= '<div class="single_testimonial"><dl class="dl-horizontal"><dt><img src="'.esc_url(codeless_image_by_id(get_post_thumbnail_id(), 'thumbnail', 'url')).'" alt=""></dt><dd>';

                            $output .= '<p>'.get_the_content().'</p>';

                            $output .= '<div class="param">';

                            $output .= '<h6>'.esc_html(get_the_title()).', </h6><span class="position"> '.esc_attr($cl_redata['staff_position']).'</span>';

                            $output .= '</div>';

                            $output .= '</dd></dl></div>';
            }

        }

        wp_reset_query();

        $output .= '</div>';

        echo $output;

?>
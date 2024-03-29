<?php

#-----------------------------------------------------------------#
# Columns
#-----------------------------------------------------------------# 

//half columns
function nectar_one_half( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_6' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'nectar_one_half');

function nectar_one_half_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_6 col_last' . $column_classes . '">' . $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_half_last', 'nectar_one_half_last');



//one third columns
function nectar_one_third( $atts, $content = null ) {
	extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_4' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'nectar_one_third');

function nectar_one_third_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_4 col_last' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_third_last', 'nectar_one_third_last');

function nectar_two_thirds( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_8' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('two_thirds', 'nectar_two_thirds');

function nectar_two_thirds_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_8 col_last' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('two_thirds_last', 'nectar_two_thirds_last');



//one fourth columns
function nectar_one_fourth( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_3' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'nectar_one_fourth');

function nectar_one_fourth_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_3 col_last' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_fourth_last', 'nectar_one_fourth_last');

function nectar_three_fourths( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_9' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourths', 'nectar_three_fourths');

function nectar_three_fourths_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_9 col_last' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('three_fourths_last', 'nectar_three_fourths_last');



//one sixth columns
function nectar_one_sixth( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_2' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('one_sixth', 'nectar_one_sixth');

function nectar_one_sixth_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_2 col_last' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('one_sixth_last', 'nectar_one_sixth_last');

function nectar_five_sixths( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_10' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div>';
}
add_shortcode('five_sixths', 'nectar_five_sixths');

function nectar_five_sixths_last( $atts, $content = null ) {
    extract(shortcode_atts(array("boxed" => 'false', "centered_text" => 'false'), $atts));
	$column_classes = null;
	$box_border = null;
	if($boxed == 'true')  { $column_classes .= ' boxed'; $box_border = '<span class="bottom-line"></span>'; }
	if($centered_text == 'true') $column_classes .= ' centered-text';
    return '<div class="col span_10 col_last' . $column_classes . '">'. $box_border . do_shortcode($content) . '</div><div class="clear"></div>';
}
add_shortcode('five_sixths_last', 'nectar_five_sixths_last');


#-----------------------------------------------------------------#
# Elements
#-----------------------------------------------------------------# 

//heading
function netar_heading($atts, $content = null) { 
    extract(shortcode_atts(array("title" => 'Title', "subtitle" => 'Subtitle'), $atts));
	$subtitle_holder = null;
	
	if($subtitle != 'Subtitle') $subtitle_holder = '<p>'.$subtitle.'</p>';
    return'
    <div class="col span_12 section-title text-align-center extra-padding">
		<h2>'.$content.'</h2>'. $subtitle_holder .'</div><div class="clear"></div>';
}
add_shortcode('heading', 'netar_heading');



//divider
function netar_divider($atts, $content = null) {  
    extract(shortcode_atts(array("line" => 'false'), $atts));
	($line == 'true') ? $divider = '<div class="divider-border"></div>' :  $divider = '<div class="divider"></div>';
    return $divider;
}
add_shortcode('divider', 'netar_divider');



//button
function netar_button($atts, $content = null) {  
    extract(shortcode_atts(array("size" => 'small', "url" => '#', "text" => 'Button Text'), $atts));
	switch ($size) {
		case 'small' :
			$button_open_tag = '<a class="nectar-button small"';
			break;
		case 'medium' :
			$button_open_tag = '<a class="nectar-button medium"';
			break;
		case 'large' :
			$button_open_tag = '<a class="nectar-button large"';
			break;	
	}
    return $button_open_tag . ' href="' . $url . '">' . $text . '</a>';
}
add_shortcode('button', 'netar_button');



//icon
function nectar_icon($atts, $content = null) {
	extract(shortcode_atts(array("size" => 'large', 'image' => 'icon-circle'), $atts)); 
	
	if($size == 'large') {
		$size_class = 'icon-3x';
	} 
	else if($size == 'tiny') {
		$size_class = 'icon-tiny';
	}
	else {
		$size_class = ''; 
	}
	
	($size == 'large') ? $border = '<i class="circle-border"></i>' : $border = ''; 
    return '<i class="'. $size_class . ' ' . $image . '">' . $border . '</i>';
}
add_shortcode('icon', 'nectar_icon');



//bar garph
function netar_bar_graph($atts, $content = null) {  
    return '<ul class="bar_graph">'.  do_shortcode($content) .'</ul>';
}
add_shortcode('bar_graph', 'netar_bar_graph');


function nectar_bar($atts, $content = null) {
	extract(shortcode_atts(array("title" => 'Title', "percent" => '1', 'id' => ''), $atts));  
	$bar = '
	<li>
		<p>' . $title . '</p>
		<div class="bar-wrap"><span data-width="' . $percent . '"> <strong>' . $percent . '%</strong> </span></div>
	</li>';
    return $bar;
}
add_shortcode('bar', 'nectar_bar');



//Team Member
function netar_team_member($atts, $content = null) {  
    extract(shortcode_atts(array("description" => 'Description', 'name' => 'Name', 'job_position' => 'Job Position', 'image_url' => '', 'social' => ''), $atts));
		
	$html = null;
			
	$html .= '<div class="team-member">';
	if(!empty($image_url)){
		$html .= '<img alt="'.$name.'" src="' . $image_url .'" title="' . $name . '" />';
	}
	else {
		$html .= '<img alt="'.$name.'" src="' . NECTAR_FRAMEWORK_DIRECTORY . 'assets/images/team-member-default.jpg" title="' . $name . '" />';
	}
	$html .= '<h3 class="light">' . $name . '</h3> <div class="position">' . $job_position . '</div>';
	$html .= '<p class="description">' . $description . '</p>';
	
	if (!empty($social)) {
		
         $social_arr = explode(",", $social);
		 
		 $html .= '<ul class="social">';
         for ($i = 0 ; $i < count($social_arr) ; $i = $i + 2) {
         		
				$target = null;
         	    $url_host = parse_url($social_arr[$i + 1], PHP_URL_HOST);
			    $base_url_host = parse_url(get_template_directory_uri(), PHP_URL_HOST);
			    if($url_host != $base_url_host || empty($url_host)) {
			    	$target = 'target="_blank"';
			    }
				
               $html .=  "<li><a ".$target." href='" . $social_arr[$i + 1] . "'>" . $social_arr[$i] . "</a></li>";   
         }
		 $html .= '</ul>';
     }
	
	$html .= '</div>';
	
	return str_replace("\r\n", '', $html);
	 
}
add_shortcode('team_member', 'netar_team_member');



//carousel
function netar_carousel($atts, $content = null) {  
    extract(shortcode_atts(array("carousel_title" => 'Title', "scroll_speed" => 'medium', 'easing' => 'easeInExpo'), $atts));
	
	$carousel_html = null;
	$carousel_html .= '
	<div class="carousel-heading">
		<h2 class="uppercase">'. $carousel_title .'</h2>
		<a class="carousel-prev" href="#"></a><a class="carousel-next" href="#"></a>
	</div>
	<div class="carousel-wrap"><span class="left-border"></span><span class="right-border"></span><ul class="row carousel" data-scroll-speed="' . $scroll_speed . '" data-easing="' . $easing . '">';
	
    return $carousel_html . do_shortcode($content) . '</ul></div>';
}
add_shortcode('carousel', 'netar_carousel');

function netar_carousel_item($atts, $content = null) {  
    return '<li class="col span_4">' . do_shortcode($content) . '</li>';
}
add_shortcode('item', 'netar_carousel_item');



//clients
function nectar_clients($atts, $content = null) {  
    extract(shortcode_atts(array("carousel" => "false", "columns" => '4'), $atts));
	
	$opening = null;
	$closing = null;
	$column_class = null;
	
	switch ($columns) {
		case '2' :
			$column_class = 'two-cols';
			break;
		case '3' :
			$column_class = 'three-cols';
			break;
		case '4' :
			$column_class = 'four-cols';
			break;	
		case '5' :
			$column_class = 'five-cols';
			break;
		case '6' :
			$column_class = 'six-cols';
			break;
	}

	if($carousel == "true"){
		$opening .= '<div class="carousel-wrap"><span class="left-border"></span><span class="right-border"></span><div class="row carousel clients '.$column_class.'" data-max="'.$columns.'">';
		$closing .= '</div></div>';
	}
	else{
		$opening .= '<div class="clients no-carousel '.$column_class.'">';
		$closing .= '</div>';
	}
	
    return $opening . do_shortcode($content) . $closing;
}
add_shortcode('clients', 'nectar_clients');

function nectar_client($atts, $content = null) {
	extract(shortcode_atts(array("image" => "", "url" => '#'), $atts));
	$client_content = null;
	
	if(!empty($url) && $url != 'none'){
		$client_content = '<div><a href="'.$url.'" target="_blank"><img src="'.$image.'" alt="client" /></a></div>';
	}  
	else {
		$client_content = '<div><img src="'.$image.'" alt="client" /></div>';
	}
    return $client_content;
}
add_shortcode('client', 'nectar_client');




//pricing tables
function nectar_pricing_table($atts, $content = null) {  
    extract(shortcode_atts(array("columns" => '4'), $atts));
	$column_class = null;
	
	switch ($columns) {
		case '2' :
			$column_class = 'two-cols';
			break;
		case '3' :
			$column_class = 'three-cols';
			break;
		case '4' :
			$column_class = 'four-cols';
			break;	
		case '5' :
			$column_class = 'five-cols';
			break;
	}
	
    return '<div class="row pricing-table '.$column_class.'">' . do_shortcode($content) . '</div>';
}
add_shortcode('pricing_table', 'nectar_pricing_table');

function nectar_pricing_column($atts, $content = null) {
	extract(shortcode_atts(array("title"=>'Column title', "highlight" => 'false', "highlight_reason" => 'Most Popular', "price" => "99", "currency_symbol" => '$', "interval" => 'Per Month'), $atts));
	
	$highlight_class = null;
	$hightlight_reason_html = null;
	
	if($highlight == 'true') {
		$highlight_class = 'highlight'; 
		$hightlight_reason_html = '<span class="highlight-reason">'.$highlight_reason.'</span>';
	}
	
    return '<div class="pricing-column '.$highlight_class.'">
  			<h3>'.$title. $hightlight_reason_html .'</h3>
            <div class="pricing-column-content">
				<h4> <span class="dollar-sign">'.$currency_symbol.'</span> '.$price.' </h4>
				<span class="interval">'.$interval.'</span>' . do_shortcode($content) . '</div></div>';
}
add_shortcode('pricing_column', 'nectar_pricing_column');



//tabbed sections
function nectar_tabs($atts, $content = null) {
    $GLOBALS['tab_count'] = 0;
	do_shortcode( $content );
	
	if( is_array( $GLOBALS['tabs'] ) ){
		
		foreach( $GLOBALS['tabs'] as $tab ){
			$tabs[] = '<li><a href="#'.$tab['id'].'">'.$tab['title'].'</a></li>';
			$panes[] = '<div id="'.$tab['id'].'">'.$tab['content'].'</div>';
		}
		
		$return = '<div class="tabbed"><ul>'.implode( "\n", $tabs ).'</ul><div class="clear"></div>'.implode( "\n", $panes )."</div>\n";
	}
	return $return;
}

add_shortcode('tabbed_section', 'nectar_tabs');


function nectar_tab( $atts, $content ){
	extract(shortcode_atts(array( 'title' => '%d', 'id' => '%d'), $atts));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array(
		'title' => sprintf( $title, $GLOBALS['tab_count'] ),
		'content' =>  do_shortcode($content),
		'id' =>  $id );
	
	$GLOBALS['tab_count']++;
}
add_shortcode( 'tab', 'nectar_tab' );


//toggle
function nectar_toggle($atts, $content = null) {
	extract(shortcode_atts(array("title" => 'Title'), $atts));  
    return '<div class="toggle"><h3><a href="#">'. $title .'</a></h3><div>' . do_shortcode($content) . '</div></div>';
}
add_shortcode('toggle', 'nectar_toggle');


#-----------------------------------------------------------------#
# Recent Posts/Work
#-----------------------------------------------------------------# 

//Recent Posts
function nectar_recent_posts($atts, $content = null) {
	extract(shortcode_atts(array("title_labels" => 'false'), $atts));  
	
	global $post; 
	global $options;
	
	$posts_page_id = get_option('page_for_posts');
	$posts_page = get_page($posts_page_id);
	$posts_page_title = $posts_page->post_title;
	$posts_page_link = get_page_uri($posts_page_id);
	
	$title_label_output = null;
	$recent_posts_title_text = (!empty($options['recent-posts-title'])) ? $options['recent-posts-title'] :'Recent Posts';		
	$recent_posts_link_text = (!empty($options['recent-posts-link'])) ? $options['recent-posts-link'] :'View All Posts';		
	
	($title_labels == 'true') ? $title_label_output = '<h2 class="uppercase">'.$recent_posts_title_text.'<a href="'. $posts_page_link.'" class="button"> / '. $recent_posts_link_text .'</a></h2>' : $title_label_output = null;
	$recent_posts_content = 
				
			$title_label_output .'
			<div class="row blog-recent">';
				
	
			    $recentBlogPosts = array(
			      'showposts' => 4,
			      'ignore_sticky_posts' => 1,
			      'tax_query' => array(
		              array( 'taxonomy' => 'post_format',
		                  'field' => 'slug',
		                  'terms' => array('post-format-link','post-format-quote'),
		                  'operator' => 'NOT IN'
		                  )
		              )
			    );
				query_posts($recentBlogPosts);
				if(have_posts()) : while(have_posts()) : the_post(); 
				
				$recent_posts_content .= '<div class="col span_3">'; 

					
					if ( has_post_thumbnail() ) { $recent_posts_content .= '<a href="' . get_permalink() . '">' . get_the_post_thumbnail($post->ID, 'blog', array('title' => '')) . '</a>'; }
						

					$recent_posts_content .= '<div class="post-header">
						<h3 class="title"><a href="'. get_permalink() .'">'.get_the_title().'</a></h3>	
						<a href="'.get_author_posts_url(get_the_author_meta( "ID" )).'">'.get_the_author().'</a> | ';
						
												
						$category = get_the_category(); 
						
						$recent_posts_content .= '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a> | ';
 
						
						$num_comments = get_comments_number(); 

						if ( comments_open() ) {
							if ( $num_comments == 0 ) {
								$comments = __('No Comments',NECTAR_THEME_NAME);
							} elseif ( $num_comments > 1 ) {
								$comments = $num_comments . __(' Comments',NECTAR_THEME_NAME);
							} else {
								$comments = __('1 Comment',NECTAR_THEME_NAME);
							}
							$recent_posts_content .= '<a href="' . get_comments_link() .'">'. $comments.'</a>';
						} 
						
					$recent_posts_content .= '</div><!--/post-header-->
					
					'.get_the_excerpt().'
					
				</div><!--/span_3-->';
				
				endwhile; endif; 
				wp_reset_query();
				
			$recent_posts_content .= '</div><!--/blog-recent-->';

	
    return $recent_posts_content;
	

}
add_shortcode('recent_posts', 'nectar_recent_posts');



//recent projects
function nectar_recent_projects($atts, $content = null) {
	extract(shortcode_atts(array("title_labels" => 'false'), $atts));   
	
	global $post; 
	global $options;
	global $nectar_love; 
	
	$title_label_output = null;
	$recent_projects_title_text = (!empty($options['carousel-title'])) ? $options['carousel-title'] : 'Recent Work';		
	$recent_projects_link_text = (!empty($options['carousel-link'])) ? $options['carousel-link'] : 'View All Work';		
	
	$portfolio_link = get_portfolio_page_link(get_the_ID());  
	($title_labels == 'true') ? $title_label_output = '<h2 class="uppercase">'.$recent_projects_title_text.'<a href="'. $portfolio_link.'" class="button"> / '. $recent_projects_link_text .'</a></h2>' : $title_label_output = null;
	
	
	
	
	
	$portfolio_link = get_portfolio_page_link(get_the_ID());  
	
				$portfolio = array(
					'posts_per_page' => '6',
					'post_type' => 'portfolio'
				);
				query_posts($portfolio); ?>
				
				
				<?php if(have_posts()) { 

					$recent_projects_content = '<div class="carousel-heading">'.$title_label_output .'
						<a class="carousel-prev" href="#"></a>
				    	<a class="carousel-next" href="#"></a>
					</div>
		
					<div class="carousel-wrap recent-work-carousel">
				
					<span class="left-border"></span> 
					<span class="right-border"></span>
					
					<ul class="row portfolio-items text-align-center carousel" data-scroll-speed="800" data-easing="easeInOutQuart">';
				 } 
				
				if(have_posts()) : while(have_posts()) : the_post();
				
					$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );  
					$video_embed = get_post_meta($post->ID, '_nectar_video_embed', true);
					$video_m4v = get_post_meta($post->ID, '_nectar_video_m4v', true);
					$media = null;
					$date = null;
					$love = $nectar_love->add_love(); 
					//video 
				    if( !empty($video_embed) || !empty($video_m4v) ) {
	
					    if( !empty( $video_embed ) ) { 
					    	
					    	$media .= '<a href="#video-popup-'.$post->ID.'" class="pp">'.__("Watch Video", NECTAR_THEME_NAME).' </a> ';
							$media .= '<div id="video-popup-'.$post->ID.'">';
					        $media .= '<div class="video-wrap">' . stripslashes(htmlspecialchars_decode($video_embed)) . '</div>';
							$media .= '</div>';
					    } 
					    
					    else {
							 $media .= '<a href="'.get_template_directory_uri(). '/includes/portfolio-functions/video.php?post-id=' .$post->ID.'&iframe=true&width=854" class="pp" >'.__("Watch Video", NECTAR_THEME_NAME).'</a> ';	 
					     }
	
			        } 
					
					//image
				    else {
				       $media .= '<a href="'. $featured_image[0].'" class="pp">'.__("View Larger", NECTAR_THEME_NAME).'</a> ';
				    }
					
					if(!empty($options['portfolio_date']) && $options['portfolio_date'] == 1) $date = get_the_time('F d, Y');
								
					$project_img = '<img src="'.get_template_directory_uri().'/img/no-portfolio-item-small.jpg" alt="no image added yet." />';
					if ( has_post_thumbnail() ) { $project_img = get_the_post_thumbnail($post->ID, 'portfolio-thumb', array('title' => '')); } 
					
					//custom thumbnail
					$custom_thumbnail = get_post_meta($post->ID, '_nectar_portfolio_custom_thumbnail', true); 
					
					if( !empty($custom_thumbnail) ){
						$project_img = '<img class="custom-thumbnail" src="'.$custom_thumbnail.'" alt="'. get_the_title() .'" />';
					}
					
					
					$recent_projects_content .='<li class="col span_4">
						
						<div class="work-item">' . $project_img . '
		
							<div class="work-info-bg"></div>
							<div class="work-info">
								
								<div class="vert-center">' . $media . '
		
								<a href="' . get_permalink() . '">'.__("More Details", NECTAR_THEME_NAME).'</a>
	
								</div><!--/vert-center-->
								
							</div>
						</div><!--work-item-->
						
						<div class="work-meta">
							<h4 class="title"> '. get_the_title() .'</h4>
							'.$date.'
						</div><div class="nectar-love-wrap">
						
						'.$love.'</div>
						
						<div class="clear"></div>
						
					</li><!--/span_4-->';
				
				endwhile; endif; 
				
			
			if(have_posts()) { 
			 $recent_projects_content .= '</ul><!--/carousel--></div><!--/carousel-wrap-->';
			}

		wp_reset_query();


	
    return $recent_projects_content; 
	

}
add_shortcode('recent_projects', 'nectar_recent_projects');



//video
function nectar_shortcode_video($atts, $content = null) {
	extract(shortcode_atts(array("title" => 'Title', 'm4v_url' => null, 'ogv_url' => null, 'image_url' => null), $atts));  
	$video_markup = null;
	
	$id = rand();
	$id = $id*rand(1,50);
	
	if (empty($image_url)) {
		$image_url = get_template_directory_uri().'/img/no-video-img.png'; 
	}

	

	$video_markup .= '<script type="text/javascript">
    	jQuery(document).ready(function($){
		
    		if( $().jPlayer ) {
    			$("#jquery_jplayer_'.$id.'").jPlayer({
    				ready: function () {
    					$(this).jPlayer("setMedia", {
    						m4v: "'.$m4v_url.'",
    						ogv: "'. $ogv_url .'",
    						poster: "'. $image_url .'"
    					});
    				},
    				size: {
			          width: "100%",
			          height: "auto"
			        },
    				swfPath: "'. get_template_directory_uri() .'/js",
    				cssSelectorAncestor: "#jp_interface_'.$id.'",
    				supplied: "m4v, ogv, all"
    			});
    		}
    	});
    </script>

    <div id="jquery_jplayer_'.$id.'" class="jp-jplayer jp-jplayer-video"></div>

    <div class="jp-video-container">
        <div class="jp-video">
            <div id="jp_interface_'.$id.'" class="jp-interface">
                <ul class="jp-controls">
                	<li><div class="seperator-first"></div></li>
                    <li><div class="seperator-second"></div></li>
                    <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                    <li><a href="#" class="jp-pause" tabindex="1">pause</a></li> 
                    <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                    <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                </ul>
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div>
                <div class="jp-volume-bar-container">
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>';
	
	
	
	
    return $video_markup;
}

add_shortcode('video', 'nectar_shortcode_video');





//aduio
function nectar_shortcode_audio($atts, $content = null) {
	extract(shortcode_atts(array("title" => 'Title', 'mp3_url' => null, 'oga_url' => null), $atts));  
	$audio_markup = null;
	
	$id = rand();
	$id = $id*rand(1,50);
	
	$audio_markup .= '<script type="text/javascript">
		
    			jQuery(document).ready(function($){
	
    				if( $().jPlayer ) {
    					$("#jquery_jplayer_'.$id.'").jPlayer({
    						ready: function () {
    							$(this).jPlayer("setMedia", {
    								mp3: "'.$mp3_url.'",
    								oga: "'.$oga_url.'",
    							});
    						},
    						swfPath: "'. get_template_directory_uri().' /js",
    						cssSelectorAncestor: "#jp_interface_'.$id.'",
    						supplied: "oga, mp3, all"
    					});
					
    				}
    			});
    		</script>
			
			<div class="audio-wrap">
				
	    	    <div id="jquery_jplayer_'.$id.'" class="jp-jplayer jp-jplayer-audio"></div>
	
	            <div class="jp-audio-container">
	                <div class="jp-audio">
	                    <div id="jp_interface_'.$id.'" class="jp-interface">
	                        <ul class="jp-controls">
	                            <li><a href="#" class="jp-play" tabindex="1">play</a></li>
	                            <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
	                            <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
	                            <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
	                        </ul>
	                        <div class="jp-progress">
	                            <div class="jp-seek-bar">
	                                <div class="jp-play-bar"></div>
	                            </div>
	                        </div>
	                        <div class="jp-volume-bar-container">
	                            <div class="jp-volume-bar">
	                                <div class="jp-volume-bar-value"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
            </div>';
	
	
	
	
    return $audio_markup;
}

add_shortcode('audio', 'nectar_shortcode_audio');


?>
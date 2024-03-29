<?php header("Content-type: text/css; charset=utf-8"); 

// Access WordPress 
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );

$options = get_option('salient'); 
?>

@media (min-width: 1300px) {
  .container {
    max-width: 1100px;  
  } 
}


@media only screen and (min-width: 1000px) and (max-width: 1300px) {
	
	.col h2 {
		font-size: 20px;
	}
	
	.col h3 {
		font-size: 18px;
	}
	
	.col h4 {
		font-size: 16px;
	}
	
	.container #portfolio.portfolio-items .col {
		margin-bottom: 20px!important;
	}
	
	.carousel-wrap.recent-work-carousel {
		height: 252px!important;
	}
	
	.carousel-wrap.recent-work-carousel .caroufredsel_wrapper .portfolio-items {
		height: 252px!important;
	}
	
	body #featured .orbit-slide article .container .span_12 {
		width: 900px!important;
	}
	
	#author-bio #author-info {
	  	width: 544px!important;
	}
	
	#portfolio.portfolio-items .col.span_3 .work-item .work-info a {
		padding: 5px 6px!important;
		font-size: 11px!important;
		margin: 1px!important;
	}
	
	#portfolio.portfolio-items .col.span_3 .work-meta, #portfolio.portfolio-items .col.span_4 .work-meta {
		width: 74%!important;
	}
	
	#portfolio.portfolio-items .col.span_3 .nectar-love-wrap, #portfolio.portfolio-items .col.span_4 .nectar-love-wrap  {
		width: 52px;
	}
	
	body.single-portfolio #sidebar.fixed-sidebar, body.single-portfolio #sidebar {
		width: 224px!important;
	}
	
	body.single-portfolio #sidebar div ul li.facebook-share, body.single-portfolio #sidebar div ul li.twitter-share, body.single-portfolio #sidebar div ul li.pinterest-share {
		margin: 0 11px 0 0!important;
		padding: 2px 11px 3px 0 !important;
	}
	
	#project-meta ul li .nectar-love-wrap.fadein {
		margin-right: 11px;
		padding-right: 11px;
	}
	
	body #featured .video {
		float: left;
		width: 540px!important;
		left: 1px;
		position: relative;
		z-index: 1;
	}
	
	body.single.single-post .section-title h1 {
		max-width: 620px;
	}
	
	body.single-portfolio .row .col.section-title h1 {
		width: 725px;
	}
	
	#featured article .post-title > a {
		left: 0px;
	}
	
	#featured .orbit-slide.has-video h2 {
	    max-width: 330px!important;
	    min-width: 330px!important;
	}
	
	#featured .orbit-slide.has-video .post-title > a {
	    left: 20px!important;
	}
	
}

<?php if( !empty($options['responsive']) && $options['responsive'] == 1 ) { ?>
	@media only screen and (min-width: 1000px) and (max-width: 1080px) {
<?php } else { ?>
	@media only screen and (max-width: 1080px) {
<?php } ?>

	body #featured .orbit-slide article .container .span_12 {
		width: 820px!important;
	}
	
	body #featured .video {
		float: left;
		width: 460px!important;
		left: 1px;
		position: relative;
		z-index: 1;
	}
	
	#featured .orbit-slide.has-video h2 {
	    max-width: 330px!important;
	    min-width: 330px!important;
	}
	
	#featured .orbit-slide.has-video .post-title > a {
	    left: 20px!important;
	}
	
	body #sidebar.fixed-sidebar, body.single-portfolio #sidebar {
		top: 0px!important;
		margin-left: 0px!important;
		position: relative!important;
	}
}

@media only screen and (max-width: 1020px) {
	#to-top {
		display: none!important;
	}
}

/* iPad landscape fixes */
@media only screen and (min-device-width: 481px) and (max-device-width: 1025px) and (orientation:landscape) {
	
	
	body[data-smooth-scrolling="1"], body[data-smooth-scrolling="1"] #header-outer {
		padding-right: 0px!important;
	}
	
	body[data-smooth-scrolling="1"] .orbit-wrapper div.slider-nav span.right {
		right: 0px!important;
	}
	
	.orbit > div {
		position: absolute !important;
		top: 0px!Important;
	}
	
	#featured.orbit > div.has-video .container {
		top: 70px!Important;	
	}
	
	#featured article {
		top: 0px!Important;
		background-position: center!important;
	}
	
	#featured .orbit-slide article .container {
		top: 145px!important;
		position: absolute!important;
	}
	
	.orbit-wrapper div.slider-nav span.left, .orbit-wrapper div.slider-nav span.right {
		position: absolute!important;
		top: 230px!important;
	}
	
	.orbit-wrapper, .orbit-wrapper #featured, .orbit-wrapper #featured article  {
  		height: 450px!important;	
  		margin-bottom: 0;
  	}
  	
  	#featured article {
  		position: relative!important;
		background-size: cover!important;
		-moz-background-size: cover!important;
		-o-background-size: cover!important;
		-webkit-background-size: cover!important;
		background-attachment: scroll!important;
	}
	
	body .fixed-sidebar, .single-portfolio #sidebar {
		top: 0px!important;
		width: 23.5%!important;
		margin-left: 0px!important;
		position: relative!important;
	}
}


<?php 
//responsive for mobile/devices
if( !empty($options['responsive']) && $options['responsive'] == 1 ) : ?>
	
@media only screen 
and (min-width : 690px) and (max-width : 1000px) {
	
	body[data-smooth-scrolling="1"] #header-outer {
		padding-right: 0px!important;	
	}
	
	.span_1, .span_2, .span_3, .span_4, .span_5, .span_6, .span_7, .span_8, .span_9, .span_10, .span_11, .span_12 { width: 100%; margin-left: 0px; }
	
	.col {
		margin-bottom: 15px;	
	}
	
	.container {
    	max-width: 600px; 
  	} 
  	
  	.orbit-wrapper, .orbit-wrapper #featured, .orbit-wrapper #featured article  {
  		height: 450px!important;	
  		position: relative!important;
  		margin-bottom: 0em;
  	}
  	
  	
	body #featured .orbit-slide article .container { 
	    top: -25px!important;
	    opacity: 1!important;
	    position: relative!important;
	}
	
	body #featured .orbit-slide article .container .span_12 {
		width: 600px!important;
	}
	
	.one-fourths.span_3 { width: 48%!important; margin-bottom: 2%; margin-right: 15px; margin-left: 0px!important; padding: 15px; float: left; }
  	
  	.one-fourths.span_3.clear-both { clear: both; }
  	.one-fourths.span_3.right-edge { margin-right: 0px; }

  	.portfolio-items .col {
  		width: 100%;
  		margin-left: 0px;
  		margin-bottom: 8px;
  	}
  	
  	.col.boxed:hover {
  		margin-top: 0px!important;
  		-o-box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
    	box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
  	}
  	
  	body #featured article .post-title h2 span {
  		font-size: 24px!important;
  		line-height: 43px!important;
  	}
  	
  	
	#featured article .post-title h2 {
		max-width: 325px!important;
    	min-width: 325px!important;
	}
	
	#featured .orbit-slide.centered article .post-title h2 {
		max-width: 415px!important;
    	min-width: 415px!important;
	}
	
	#call-to-action .container a {
		margin-top: 20px;
		margin-left: 0px!important;
	}
	
	#post-area {
		padding-right: 0px!important;
	}
	
	body.single-portfolio .row .col.section-title h1 {
		width: 450px;
	}

	.contact-info {
		padding-left: 0px!important;
	}
	
	
	#sidebar #flickr > div {
		width: 16%!important;
	}
	
	#footer-outer #copyright .col {
		width: 49%;
		margin-bottom: 0px;
	}
	
	#footer-widgets .container .col {
		margin-left: 15px;
		width: 48%;
	}
	
	#footer-widgets .one-fourths .span_3:nth-child(2n+1) {
		margin-left: 0px;
	}
	
	body #sidebar #flickr div {
		float: left;
	}
	
	#sidebar .recent_projects_widget div a, body #sidebar #flickr div a  {
		width: 90px!important;
	}
	
	body #sidebar .recent_projects_widget div a:last-child, body #sidebar #flickr div {
		margin-right: 0px!important;
	}
	
	#sidebar .recent_projects_widget div a:nth-child(3n+3), body #sidebar #flickr div:nth-child(3n+3) a {
		margin: 2% 2% 0 0!important;
	}
	
	.carousel-wrap.recent-work-carousel  {
		height: 250px!important;
	}
	
	.carousel-wrap.recent-work-carousel  .portfolio-items {
		height: 250px!important;
	}
	
	#author-bio #author-info {
	  	width: 494px!important;
	}
	
	#page-header-bg .span_6 h1 {
  		font-size: 32px!important;
  		line-height: 32px!important;
  	}
  	#page-header-bg .span_6 span.subheader {
  		font-size: 22px!important;
  	}
	
	#page-header-bg .span_6 {
		top: auto!important;
		float: none!important;
	}
	
	#portfolio-filters {
		position: relative!important;
		display: inline-block!important;
		clear: both!important;
		top: auto!important;
	}
	
	.page-header-no-bg  #portfolio-filters {
		padding-top: 15px!important;
		float: none!important;
		clear: both;
		height: auto!important;
	}
	
	.page-header-no-bg  #portfolio-filters ul {
		position: absolute;
		width: 100%;
	}
	
	.pricing-table > div { 
  		width: 50%!important; 
  		margin-bottom: 25px!important;
  	}
  	
  	.pricing-column.highlight .nectar-button {
  		margin-bottom: 10px!important;
  		margin-top: 0px!important;
  	}
  	
  	.pricing-column.highlight {
  		margin-top: 0px!important;
  	}
  	
  	.pricing-column h3 {
  		font-size: 20px!important;
  	}
  	
  	.pricing-column.highlight h3 {
  		padding: 5px 0px!important;
  	}
  	
  	body .clients.no-carousel > div { 
  		width: 24.2%!important;
  		margin-right: 1%!important;
  	}
  	
  	body .clients.no-carousel > div:nth-child(4n+4){
  		margin-right: 0px!important;
  	}
  	
  	body .clients.carousel > div {
		margin: 0px 5px!important;
	}
	
	#call-to-action .container span {
		display: block!important;
	}
}

@media only screen 
and (max-width : 690px) {
	
	body[data-smooth-scrolling="1"] #header-outer {
		padding-right: 0px!important;	
	}
	
	.container, div.slider-nav {
    	max-width: 300px!important; 
  	} 
  
  	.col {
		margin-bottom: 25px;
	}
	
	.col.boxed:hover {
  		margin-top: 0px!important;
  		-o-box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
    	box-shadow: 0 1px 2px rgba(0,0,0,0.2)!important;
  	}
  
	#header-outer .col {
  		margin-bottom: 0px;
  	}
  	
  	.orbit-wrapper #featured article .post-title h2 span {
		font-size: 18px;
	}
	
	.orbit-wrapper, .orbit-wrapper #featured {
  		height: 325px!important;	
  		margin-bottom: 0em;
  		margin-top: -31px;
  	}
  	
  	.orbit-wrapper #featured article {
  		height: 325px!important;	
  		margin-bottom: 3em;
  		position: relative!Important;
  	}
	
	.orbit-wrapper #featured article .post-title h2 span {
		line-height: 35px !important;
	}
	
	body .orbit-wrapper #featured article .post-title h2 {
		max-width: 240px!important;
		min-width: 240px!important;
	}
	
	#featured .orbit-slide.centered article .post-title h2 {
		max-width: 265px!important;
    	min-width: 265px!important;
	}
	
	body #featured .orbit-slide article .container { 
	    top: -20px!important;
	    opacity: 1!important;
	    position: relative!important;
	}
	
	body #featured .orbit-slide article .container .span_12 {
		width: 300px!important;
		position: relative;
	}
	
	.container article.post .post-meta {
		display: none;
	}
	
	.container article.post .post-content {
		padding-left: 0px!important;
	}
	
	.container article.post .post-header h2  {
		font-size: 18px;
	}	
	
	.container .post-header {
	    font-size: 10px;
	}
	
	.container .comment-list li.comment > div {
		padding: 25px 25px 70px 25px;
	}
	
	.container .comment-list li.comment > div img.avatar {
		display: none;
	}
	
	.container #respond h3 {
		font-size: 13px;
	}
	
	.container .comment-list .reply {
    	right: 29px;
    	top: auto;
    	bottom: 29px;
	}	 
	
	.container .contact-info {
		padding-left: 0px;
	}
	
	.row .col.section-title span {
		display: none;
	}
	
	#page-header-bg h1 {
		font-size: 34px!important;
	}
	
	#page-header-bg .subheader {
		font-size: 22px!important;
	}
	
	
	body #footer-outer #copyright .col ul {
		float: left;
	}
	
	body #footer-outer #copyright .col ul li:first-child {
		margin-left: 0px;
	}
	
	body .orbit-wrapper #featured article .post-title {
  		top: 120px!important;
  	}
  	
  	
	.orbit-wrapper #featured article .post-title h2 {
		max-width: 260px;
		min-width: 260px;
	}
	
	#call-to-action .container a {
		display: block!important;
		margin-top: 20px;
		margin-left: 0px!important;
	}
	
	
	#call-to-action {
		font-size: 18px!important;
	}
	
	#footer-widgets .container .col:nth-child(3) {
		margin-bottom: 40px!important;
	}
	
	.carousel-wrap.recent-work-carousel  {
		height: 250px!important;
	}
	
	.carousel-wrap.recent-work-carousel .portfolio-items {
		height: 270px!important;
	}
	
	#footer-outer #flickr img, #sidebar #flickr img {
		width: 95px;
	}
	
	#post-area #pagination {
		padding-left: 0px!important;	
	}
	
	body #featured .orbit-slide article .container {
		top: -35px!important;	
	}
	
	body #featured article .post-title > a {
  		padding: 6px 9px!important;
  		font-size: 10px;
  		top: 10px;
  	}
  	
  	body #featured .more-info {
  		display: block;
  		top: 240px!important;
  	}
  	
  	body #featured .has-video article div.post-title {
  		top: 80px!Important;
  	}
  	
  	body.single-portfolio .row .col.section-title h1 {
		width: 280px;
	}
  	
	#search-results .result  {
  		width: 100%!important;
  		margin-right: 0px!important;
  		margin-bottom: 15px!important;
  		margin-left: 0px!important;
  	}
  	
  	.gallery .gallery-item {
  		width: 100%!important;
  	}
  	
  	#author-bio img {
  		margin-right: 0px!important;
  		width: 60px;
  	}
  	
  	#author-bio #author-info {
  		width: 215px!important;
  	}

  	#contact-map {
  		height: 270px!important;
  	}
  	
  	div.pp_pic_holder {
  		left: 9px!important;
  		width: 96%!important;
  	}
  	
  	.pp_content {
  		width: 100%!important;
  		height: 290px!important;
  	}
  	
  	.pp_content iframe {
  		width: 100%!important;
  	}
  	
  	.pp_content .pp_inline iframe {
  		height: 250px!important;
  	}
  	
  	.pp_content img {
  		width: 100%!important;
  		height: auto!important;
  	}
  	
  	#page-header-bg .span_6 h1 {
  		font-size: 24px!important;
  		line-height: 24px!important;
  	}
  	#page-header-bg .span_6 span.subheader {
  		font-size: 18px!important;
  	}
  	
  	#page-header-bg .span_6 {
		top: auto!important;
		float: none!important;
	}
	
	#portfolio-filters {
		position: relative!important;
		display: block!important;
		clear: both!important;
		top: auto!important;
	}
	
	.page-header-no-bg  #portfolio-filters {
		padding-top: 15px!important;
		height: auto!important;
	}
  	
  	.pricing-table > div { 
  		width: 100%!important; 
  		margin: 0px 0px 25px 0px!important;
  	}
  	
  	body .clients.no-carousel > div { 
  		margin-right: 1%!important;
  		width: 49.4%!important;
  	}
  
    body .clients.no-carousel > div:nth-child(2n+2){
  		margin-right: 0px!important;
  	}
	
	body .clients.carousel > div {
		margin: 0px 5px!important;
		width: 150px!important;
	}
	
	body .clients.carousel.phone > div { 
		width: 150px!important;
	}
	
	body .row #error-404 h1 {
		 font-size: 150px !important;
   		 line-height: 150px !important;
	}
	
	body .row #error-404 h2 {
		 font-size: 40px;
	}
	
	body .row #error-404 {
		margin-bottom: 0px;
	}
	
	.tabbed > ul li {
		float: none;
		width: 100%;
	}
	
	.tabbed > ul li a {
		border-right: 0px!important;
	}
	
	#portfolio-nav {
		margin: 10px 0px 0px;
		position: relative!important;
	}
	
	#portfolio-nav ul {
		margin-left: 0px;
	}
	
	.row .col.section-title.project-title {
		padding-bottom: 30px;
		margin-bottom: 30px!important;
	}
	
	body #featured .slide .post-title .video img {
		height: 169px!important;
	}
	
	body #featured .orbit-slide.has-video .span_12 .post-title h2 {
		margin-top: 190px!important;
	}
	
	#footer-outer #social li {	
	   margin-right: 10px;
	   margin-left: 0px!important;
	}
}


@media only screen 
and (min-width : 1px) and (max-width : 1000px) {
	
	body[data-smooth-scrolling="1"], body[data-smooth-scrolling="1"] #header-outer {
		padding-right: 0px!important;
	}
	
	header#top #logo  {
		margin-top: 7px!important;	
	}
	
	.orbit > div {
	  position: absolute!important;	
	}
	
	body header#top #logo img {
		height: 24px!important;
		margin-top: -3px!important;
		top: 3px; 
		position: relative;
	}
	
	.admin-bar #header-outer {
		top: 0px!important;	
	}
	
	#header-outer {
  		position: relative!important;	
  		height: 52px!important;
  		padding-top: 10px!important;
  		margin-bottom: 30px;
  	}
  	
  	#header-outer #logo { top: 6px!important; left: 6px!important; }
  	#header-space, #search-outer { display: none!important; }
	header#top #toggle-nav { display: block!important; }
	
	header#top .col.span_3 {
		position: absolute;
		left: 0px;
		top: 0px;
		z-index: 1000;
  		width: 85%!important;
  	}
  	
  	header#top .col.span_9 {
  		margin-left: 0px;
  		min-height: 48px;
  		width: 100%!important;
  		float: none;
  		z-index: 100;
		position: relative;
  	}
  	
	#header-outer header#top nav > ul {
		width: 100%;
		padding: 15px 0px 25px 0px!important;
		margin: 0px auto 0px auto!important;
		float: none!important;
		z-index: 100000;
		position: relative;
	}
	
	
	#header-outer header#top nav {
		background-color: #1F1F1F;
		margin-left: -250px!important;	
		margin-right: -250px!important;	
		padding: 0px 250px 0px 250px;
		top: 48px;
		margin-bottom: 75px;
		display: none!important;
		position: relative;
		z-index: 100000;
	}
	
	header#top nav > ul li {
		display: block;
		width: 100%;
		float: none!important;
		margin-left: 0px!important;
	}
	
	#header-outer header#top nav > ul {
		overflow: hidden!important;
	}
	
	header#top nav > ul ul {
		position: relative;
		width: 100%;
		top:0px!important;
		left: 0px!important;
		padding: 0px;
		visibility: visible!important;
		box-shadow: 0px 0px 0px #fff!important;
		-moz-box-shadow: 0px 0px 0px #fff!important;
		-webkit-box-shadow: 0px 0px 0px #fff!important;
		background-color: transparent!important;
		float: none!important;
	}
	
	header#top nav > ul ul li {
		padding-left: 20px;
	}
	
	header#top .sf-menu a {
		color: rgba(255,255,255,0.6)!important;
		font-size: 12px;
		border-bottom: 1px dotted rgba(255, 255, 255, 0.3);
		padding: 16px 0px 16px 0px!important;
		background-color: transparent!important;	
	}
	
	header#top nav .sf-menu li.sfHover > a {
		color: #FFBAAF;
	}
	
	#header-outer #top nav ul li a:hover, #header-outer header#top nav .sf-menu li.sfHover > a, #header-outer header#top nav .sf-menu li.current_page_ancestor > a, #header-outer header#top nav .sf-menu li.current-menu-ancestor > a, #header-outer header#top nav .sf-menu li.current_page_item > a {
		color: #27CFC3;
	}
	
	a > .sf-sub-indicator { 
		right: 16px!important;
		position: absolute;
		left: auto!important;
  	    top: 16px!important; 
  	}
	
	header#top .sf-menu li ul li a:hover,
    header#top nav ul li a:hover, 
    header#top nav .sf-menu li.sfHover > a, 
    header#top nav .sf-menu li.current_page_ancestor > a, 
    header#top nav .sf-menu li.current-menu-ancestor > a, 
    header#top nav .sf-menu li.current_page_item > a {
		color: #FFF!Important;
	}
	
	header#top .sf-menu > li:hover  ul, header#top .sf-menu > li.sfHover  ul {
		height: 0px;
		position: absolute;
		visibility: hidden!important;
		overflow: hidden;
    }

    
    header#top .sf-menu li ul.mobile-open {
    	height: auto!important;
    	display: block!important;
    	position: relative;
    	visibility: visible!important;
    }
	
	header#top nav > ul > li > a {
		padding:16px 0px!important;
		border-bottom: 1px solid #ddd;
	}
	
	header#top, #header-outer {
		height: auto!important;
	}
	
	header#top li#search-btn {
		display: none;
	}
	
	.orbit-wrapper #featured .slide article .post-title, .orbit-wrapper .slider-nav > span {
		opacity: 1!important;
		margin-top: 0px!important;
	}
	
	#featured article {
		top: 0px!important;
		background-size: cover!important;
		-moz-background-size: cover!important;
		-o-background-size: cover!important;
		-webkit-background-size: cover!important;
		background-attachment: scroll!important;
		background-position: center 60%!important;
	}
	
	.orbit-wrapper, .orbit-wrapper #featured {
  		margin-top: -31px;
  	}
  	

	#post-area {
		padding-right: 0px!important;
	}
	
	div.slider-nav {
		position: relative;
		max-width: 600px; 
		margin: -40px auto 0px auto;
	}
	
	div.slider-nav > span {
		height: 25px!important;
		width: 25px!important;
		background-repeat: no-repeat!important;
		background-image: url(../img/icons/slider-arrows-small.png)!important;
	}
	
	body .orbit-wrapper div.slider-nav > span.left, body .orbit-wrapper div.slider-nav > span.right {
		background-color: #fff!important;
	}
	
	div.slider-nav > span.left {
		left: 0px; 
		background-position: 9px -20px!important;
	}
	
	div.slider-nav > span.right {
		left: 30px!important;
		background-position: -38px -20px!important
	}
	
	
	div.slider-nav span span {
		display: none!important;
	}
	
	#portfolio {
		margin: 3px 0 0!important;
	}
	
	#portfolio.portfolio-items .col.span_4, #portfolio.portfolio-items .col.span_3 {
  		width: 100%!important;
  		margin-right: 0px!important;
  		margin-left: 0px!important;
  	}
  	
  	.portfolio-items .col {
  		margin-bottom: 15px!important;
  	}
  	
  	.orbit-wrapper #featured article .post-title{
  		position: relative;
  	}
  	
  	.orbit-wrapper div.slider-nav span {
  		position: absolute;
  	}
  	
  	.orbit-wrapper #featured article .post-title {
  		top: 170px!important;
  		left: 0px;
  	}
  	
  	#featured .orbit-slide.centered article .post-title > a, #featured .orbit-slide.centered article .post-title h2 { 
  		left: 0px!Important;	
  	}
  	
  	.orbit-wrapper div.slider-nav span {
  		top: 0px!important;
  	}
  	
  	#footer-widgets .container .col {
  		margin-bottom: 40px;
  	}
  	
  	#footer-widgets .container .col:nth-child(3), #footer-widgets .container .col:nth-child(4) {
  		margin-bottom: 0px;
  	}
  	
  	#pagination {
		margin-bottom: 40px!important;
	}
	
    body #featured article .post-title > a {
  		padding: 10px 12px;
  		background-color: #27CFC3;
  		border-color: #27CFC3;
  		color: #fff;
  		top: 20px;
  	}
  	
  	body #featured article .post-title > a:hover {
  		border-color: #27CFC3;
  		box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
  		-moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
  		-webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
  		-o-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
  	}
  	
  	#featured article .post-title > a {
  		left: 0px!important;
  	}
  	
  	#portfolio.portfolio-items .col.span_3 .work-item .work-info a {
		padding: 9px 15px!important;
		font-size: 12px!important;
		margin: 5px!important;
	}
	
  	.wp-caption {
  		width: 100%!important;
  	}
  	
  	body.single-portfolio #sidebar.fixed-sidebar, body.single-portfolio #sidebar  {
		top: 0px!important;
		width: 100%!important;
		margin-left: 0px!important;
		margin-top: 10px;
		position: relative!important;
	}
	
	body.search .row .col.section-title h1 {
		font-size: 18px!Important;	
	}
	
	body.search .row .col.section-title span {
		display: inline-block;
		margin-top: 10px;
		font-size: 14px;
	}
	
	body.search .divider {
		display: none;	
	}
	
	.main-content > div {
		padding-bottom: 0px;
	}
	
	#single-meta {
		display: block;
		position: relative!important;
		clear both;
		margin-bottom: 10px;
	}
	
	#single-meta ul {
		margin-left: 0px;
	}
	
	body #featured .post-title h2, body #featured .post-title > a, body #featured .post-title span, body #featured .post-title div.video {
		margin-top: 0px!important;
	}
	
	body #featured .has-video .post-title {
		top: 48px!important;
	}
	
	body #featured .has-video h2 {
		text-align: center!important;
		left: auto!Important;	
		float: none!important;
		margin: 0 auto;
	}
	
	body #featured .orbit-slide.has-video .post-title h2 {
		margin-top: 80px!important;
	}
	
	body #featured .post-title .video {
		float: none;
		margin: 0 auto;
		width: 100%!important;
		left: auto;
		position: relative;
		z-index: 1;
	}

	body #featured .post-title .video img {
		height: 338px!important;
	}
	
	body #featured article .post-title > a {
		left: 0px;
	}
	
	body #featured .orbit-slide.has-video h2 {
	    max-width: 330px!important;
	    min-width: 330px!important;
	    margin-top: 60px!important;
	}
	
	body #featured .orbit-slide.has-video .post-title {
	    text-align: center!Important;
	}
	
	body #featured .more-info {
		display: block;
		position: absolute;
		z-index: 10000;
		left: 80px !important;
		top: 387px;
	}
	
	body #featured .more-info a {
		display: block;
		color: #6d6d6d;
		border-radius: 1px 1px 1px 1px;
    	background-color: #FFFFFF !important;
		padding: 2px 7px;
	}
	
	#footer-outer #social li {	
	   width: 33px;
	   margin-top: 9px;
	   margin-bottom: 9px;
	}
	
	.carousel-heading h2 {
		max-width: 82%;
	}
}


<?php else: ?>
	
	@media only screen and (max-width: 1000px) { 
		.container {
		    width: 880px;
		}
		
		#footer-outer,#call-to-action, #featured, #header-outer, #contact-map, #page-header-bg {
			min-width: 880px;	
		}
		
		#header-outer {
			position: absolute!important;
			top: 0px!Important;
		}
		
		#featured .orbit-slide article .container, .orbit-wrapper div.slider-nav span.right, .orbit-wrapper div.slider-nav span.left {
			position: absolute!important;
		}
		
		.orbit-wrapper div.slider-nav span.right {
			right: 0px!important;
		}
		
		#featured .orbit-slide article .container {
			position: absolute!important;
			top: 250px!important;
		}
		
		.orbit-wrapper div.slider-nav span.left, .orbit-wrapper div.slider-nav span.right {
			position: absolute!important;
			top: 310px!important;
		}
		
	  	body.single-portfolio #sidebar.fixed-sidebar, body.single-portfolio #sidebar {
	  		width: 224px !important;
	  	}
	  	
	  	#featured article {
			background-attachment: scroll!important;
			background-position: center top!Important;
		}
		
		body .fixed-sidebar, .single-portfolio #sidebar {
			top: 0px!important;
			width: 23.5%!important;
			margin-left: 0px!important;
			position: relative!important;
		}
		
		#author-bio #author-info {
			width: 544px !important;
		}
		
    }

    .col {
      margin-right: 2%; 
     } 

	.span_1 { width: 6.5%;  }
	.span_2 { width: 15.0%;  }
	.span_3 { width: 23.5%;  }
	.span_4 { width: 32.0%; }
	.span_5 { width: 40.5%;  }
	.span_6 { width: 49.0%;  }
	.span_7 { width: 57.5%;  }
	.span_8 { width: 66.0%;  }
	.span_9 { width: 74.5%;  }
	.span_10 { width: 83.0%; }
	.span_11 { width: 91.5%;  }
	.span_12 { width: 100%; }
	
	body,html {
		overflow-x: auto!important;
	}

<?php endif;?>
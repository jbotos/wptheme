<?php

class CodelessShortcodeWidget extends Wp_Widget{
 
 function CodelessShortcodeWidget(){

        $options = array('classname' => 'widget_shortcode', 'description' => 'Add a text widget to show shortcodes' );

		$this->WP_Widget( 'widget_shortcode', THEMENAME.' Widget Shortcode', $options );

    }

 function widget($atts, $instance){

      extract($atts, EXTR_SKIP);

	    echo $before_widget;
    

        $title = empty($instance['title']) ? '' : $instance['title'];

        $content = empty($instance['content']) ? '' : $instance['content'];
               
            if ( !empty( $title ) ) { 

		      echo $before_title . $title . $after_title; 

        }
        	  

        echo do_shortcode($content);

        		

        		
       
       echo $after_widget; 

    }     


function update($new_instance, $old_instance){

        $instance = array();
 
        $instance['title'] = $new_instance['title'];

        $instance['content'] = $new_instance['content'];

        return $instance;

    }

 function form($instance){

        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'content' => '') );

        $title = isset($instance['title']) ? $instance['title']: "";

        $content = isset($instance['content']) ? $instance['content']: "";


        ?>

        <p>

    		<label for="<?php echo $this->get_field_id('title'); ?>">Title: 

    		<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label>

        </p>

        

         <p>

    		<label for="<?php echo $this->get_field_id('content'); ?>">Text & Shortcodes: 

  <textarea id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>" type="text"><?php echo esc_attr($content); ?></textarea>

  			</label>

        </p>



        <?php

    }




}
?>
<?php
/**
 * Plugin Name: Office Hours
 * Plugin URI: http://matmon.com
 * Description: A widget for listing your office hours.
 * Version: 1.0
 * Author: Aaron Buckley
 * Author URI: http://matmon.com
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Add function to widgets_init that'll load our widget.
 * @since 1.0
 */
add_action( 'widgets_init', 'office_hours_load_widgets' );

/**
 * Register our widget.
 * 'Office_Hours_Widget' is the widget class used below.
 *
 * @since 1.0
 */
function office_hours_load_widgets() {
	register_widget( 'Office_Hours_Widget' );
}





/**
 * Example Widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 1.0
 */
class Office_Hours_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function Office_Hours_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'office-hours', 'description' => __('A widget for listing your office hours.', 'office_hours') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'office-hours-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'office-hours-widget', __('Office Hours', 'office-hours'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.	 
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		
		/* Day One. */
	    $day_1 = $instance['day_1'];
		$open_1 = $instance['open_1'];
		$ampm_open_1 = $instance['ampm_open_1'];
		$close_1 = $instance['close_1'];
		$ampm_close_1 = $instance['ampm_close_1'];
		

		/* Day Two. */
	    $day_2 = $instance['day_2'];
		$open_2 = $instance['open_2'];
		$ampm_open_2 = $instance['ampm_open_2'];
		$close_2 = $instance['close_2'];
		$ampm_close_2 = $instance['ampm_close_2'];
		
		

		/* Day Three. */
	    $day_3 = $instance['day_3'];
		$open_3 = $instance['open_3'];
		$ampm_open_3 = $instance['ampm_open_3'];
		$close_3 = $instance['close_3'];
		$ampm_close_3 = $instance['ampm_close_3'];				
		
		

		/* Day Four. */
	    $day_4 = $instance['day_4'];
		$open_4 = $instance['open_4'];
		$ampm_open_4 = $instance['ampm_open_4'];
		$close_4 = $instance['close_4'];
		$ampm_close_4 = $instance['ampm_close_4'];			
		
				

		/* Day Five. */
	    $day_5 = $instance['day_5'];
		$open_5 = $instance['open_5'];
		$ampm_open_5 = $instance['ampm_open_5'];
		$close_5 = $instance['close_5'];
		$ampm_close_5 = $instance['ampm_close_5'];		
	
	
		
		
echo '<style type="text/css">
.office-hours{
	clear: right;
    float: left;
    width: 50%;
}

.office-hours-row{

}
.days{
    float: left;
    width: 100px;
}

</style> ';		
		
				
		
		
/* Before widget (defined by themes). */
		echo $before_widget;

/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . ' ' . $title . $after_title;




/* DAY ONE NUMBERS */
			
	echo '<div class="office-hours-row">';		
				
			/* If there is a day, show it */
		if ( $day_1 )
			printf ( '<span class="days">' . __('%1$s', 'day_1.') . '</span>', $day_1 );	
			
			/* If there is a open, show it */
		if ( $open_1 )
			printf ( '<span class="times">' . __('%1$s', 'open_1.') . '', $open_1 );	
			
		/* If there is a ampm open, show it */
		if ( $ampm_open_1 )
			printf ( ' ' . __('%1$s', 'ampm_open_1.') . '</span>', $ampm_open_1 );	
			printf ( ' - ');		
			/* If there is a close, show it */
		if ( $close_1 )
			printf ( '<span class="times">' . __('%1$s', 'close_1.') . '', $close_1 );	
			
		/* If there is a ampm close, show it */
		if ( $ampm_close_1 )
			printf ( ' ' . __('%1$s', 'ampm_close_1.') . '</span>', $ampm_close_1 );				
			printf ( '<br> ');

/* DAY TWO NUMBERS */

			/* If there is a day, show it */
		if ( $day_2 )
			printf ( '<span class="days">' . __('%1$s', 'day_2.') . '</span>', $day_2 );	
			
			/* If there is a open, show it */
		if ( $open_2 )
			printf ( '<span class="times">' . __('%1$s', 'open_2.') . '', $open_2 );	
			
		/* If there is a ampm open, show it */
		if ( $ampm_open_2 )
			printf ( ' ' . __('%1$s', 'ampm_open_2.') . '</span>', $ampm_open_2 );	
			printf ( ' - ');		
			/* If there is a close, show it */
		if ( $close_2 )
			printf ( '<span class="times">' . __('%1$s', 'close_2.') . '', $close_2 );	
			
		/* If there is a ampm close, show it */
		if ( $ampm_close_2 )
			printf ( ' ' . __('%1$s', 'ampm_close_2.') . '</span>', $ampm_close_2 );				
			printf ( '<br> ');
		
	/* DAY THREE NUMBERS */

			/* If there is a day, show it */
		if ( $day_3 )
			printf ( '<span class="days">' . __('%1$s', 'day_3.') . '</span>', $day_3 );	
			
			/* If there is a open, show it */
		if ( $open_3 )
			printf ( '<span class="times">' . __('%1$s', 'open_3.') . '', $open_3 );	
			
		/* If there is a ampm open, show it */
		if ( $ampm_open_3 )
			printf ( ' ' . __('%1$s', 'ampm_open_3.') . '</span>', $ampm_open_3 );	
			printf ( ' - ');		
			/* If there is a close, show it */
		if ( $close_3 )
			printf ( '<span class="times">' . __('%1$s', 'close_3.') . '', $close_3 );	
			
		/* If there is a ampm close, show it */
		if ( $ampm_close_3 )
			printf ( ' ' . __('%1$s', 'ampm_close_3.') . '</span>', $ampm_close_3 );				
			printf ( '<br> ');	
		
		
/* DAY FOUR NUMBERS */

			/* If there is a day, show it */
		if ( $day_4 )
			printf ( '<span class="days">' . __('%1$s', 'day_4.') . '</span>', $day_4 );	
			
			/* If there is a open, show it */
		if ( $open_4 )
			printf ( '<span class="times">' . __('%1$s', 'open_4.') . '', $open_4 );	
			
		/* If there is a ampm open, show it */
		if ( $ampm_open_4 )
			printf ( ' ' . __('%1$s', 'ampm_open_4.') . '</span>', $ampm_open_4 );	
			printf ( ' - ');		
			/* If there is a close, show it */
		if ( $close_4 )
			printf ( '<span class="times">' . __('%1$s', 'close_4.') . '', $close_4 );	
			
		/* If there is a ampm close, show it */
		if ( $ampm_close_4 )
			printf ( ' ' . __('%1$s', 'ampm_close_4.') . '</span>', $ampm_close_4 );				
			printf ( '<br> ');	
				
			
/* DAY FIVE NUMBERS */

			/* If there is a day, show it */
		if ( $day_5 )
			printf ( '<span class="days">' . __('%1$s', 'day_5.') . '</span>', $day_5 );	
			
			/* If there is a open, show it */
		if ( $open_5 )
			printf ( '<span class="times">' . __('%1$s', 'open_5.') . '', $open_5 );	
			
		/* If there is a ampm open, show it */
		if ( $ampm_open_5 )
			printf ( ' ' . __('%1$s', 'ampm_open_5.') . '</span>', $ampm_open_5 );	
			printf ( ' - ');		
			/* If there is a close, show it */
		if ( $close_5 )
			printf ( '<span class="times">' . __('%1$s', 'close_5.') . '', $close_5 );	
			
		/* If there is a ampm close, show it */
		if ( $ampm_close_5 )
			printf ( ' ' . __('%1$s', 'ampm_close_5.') . '</span>', $ampm_close_5 );				

			printf ( ' ' . __('%1$s', 'ampm_close_7.') . '</span>', $ampm_close_7 );				
		
	
	
	
	
	
		
echo '</div><!-- .office_hours_widget -->';
/* After widget (defined by themes). */
		echo $after_widget;
	}

/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		/* Widgte TItle - You'll only need this ONCE. */
		$instance['title'] =  $new_instance['title'];
		
	
	
	
	
		

/* Day One */
	     /* Day . */
		$instance['day_1'] = $new_instance['day_1'];
		
		/* Time  */
		$instance['open_1'] = $new_instance['open_1'];
		
		/* AM PM  */
		$instance['ampm_open_1'] = $new_instance['ampm_open_1'];
		
		/* Time  */
		$instance['close_1'] = $new_instance['close_1'];
		
		/* AM PM  */
		$instance['ampm_close_1'] = $new_instance['ampm_close_1'];
		
/* Day Two */
	     /* Day. */
		$instance['day_2'] = $new_instance['day_2'];
		
		/* Time */
		$instance['open_2'] = $new_instance['open_2'];
		
		/* AM PM  */
		$instance['ampm_open_2'] = $new_instance['ampm_open_2'];
		
		/* Time  */
		$instance['close_2'] = $new_instance['close_2'];
		
		/* AM PM  */
		$instance['ampm_close_2'] = $new_instance['ampm_close_2'];		
					
/* Day Three */
	     /* Day. */
		$instance['day_3'] = $new_instance['day_3'];
		
		/* Time */
		$instance['open_3'] = $new_instance['open_3'];
		
		/* AM PM  */
		$instance['ampm_open_3'] = $new_instance['ampm_open_3'];
		
		/* Time  */
		$instance['close_3'] = $new_instance['close_3'];
		
		/* AM PM  */
		$instance['ampm_close_3'] = $new_instance['ampm_close_3'];		

/* Day Four */
	     /* Day. */
		$instance['day_4'] = $new_instance['day_4'];
		
		/* Time */
		$instance['open_4'] = $new_instance['open_4'];
		
		/* AM PM  */
		$instance['ampm_open_4'] = $new_instance['ampm_open_4'];
		
		/* Time  */
		$instance['close_4'] = $new_instance['close_4'];
		
		/* AM PM  */
		$instance['ampm_close_4'] = $new_instance['ampm_close_4'];		

/* Day Five */
	     /* Day. */
		$instance['day_5'] = $new_instance['day_5'];
		
		/* Time */
		$instance['open_5'] = $new_instance['open_5'];
		
		/* AM PM  */
		$instance['ampm_open_5'] = $new_instance['ampm_open_5'];
		
		/* Time  */
		$instance['close_5'] = $new_instance['close_5'];
		
		/* AM PM  */
		$instance['ampm_close_5'] = $new_instance['ampm_close_5'];		

		
		return $instance;
	}






	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 




	 
	 
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('', 'office_hours') );
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

<!-- Office Hours: Widget Title -->


<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>">
    <?php _e('Title:', 'office_hours'); ?>
  </label>
  <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
</p>





<!-- Day ONE -->
<p>
  <?php _e('Day One:', 'office_hours'); ?>
</p>
<p>
  <select name="<?php echo $this->get_field_name( 'day_1' ); ?>" for="<?php echo $this->get_field_id( 'day_1' ); ?>">
  <option for="<?php echo $this->get_field_name( 'day_1' ); ?>"><?php echo $instance['day_1']; ?></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
 
</p>

<p>
<!-- Open: -->
  <?php _e('Open:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'open_1' ); ?>" for="<?php echo $this->get_field_id( 'open_1' ); ?>">
  <option for="<?php echo $this->get_field_name( 'open_1' ); ?>"><?php echo $instance['open_1']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_open_1' ); ?>" for="<?php echo $this->get_field_id( 'ampm_open_1' ); ?>">
  <option for="<?php echo $this->get_field_name( 'ampm_open_1' ); ?>"><?php echo $instance['ampm_open_1']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
 


<!-- Close: -->
  <?php _e('Close:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'close_1' ); ?>" for="<?php echo $this->get_field_id( 'close_1' ); ?>">
  <option for="<?php echo $this->get_field_name( 'close_1' ); ?>"><?php echo $instance['close_1']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_close_1' ); ?>" for="<?php echo $this->get_field_id( 'ampm_close_1' ); ?>">
    <option for="<?php echo $this->get_field_name( 'ampm_close_1' ); ?>"><?php echo $instance['ampm_close_1']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  
</p>




<!-- Day Two -->
<p>
  <?php _e('Day Two:', 'office_hours'); ?>
</p>
<p>
  <select name="<?php echo $this->get_field_name( 'day_2' ); ?>" for="<?php echo $this->get_field_id( 'day_2' ); ?>">
  <option for="<?php echo $this->get_field_name( 'day_2' ); ?>"><?php echo $instance['day_2']; ?></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
 
</p>

<p>
<!-- Open: -->
  <?php _e('Open:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'open_2' ); ?>" for="<?php echo $this->get_field_id( 'open_2' ); ?>">
  <option for="<?php echo $this->get_field_name( 'open_2' ); ?>"><?php echo $instance['open_2']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_open_2' ); ?>" for="<?php echo $this->get_field_id( 'ampm_open_2' ); ?>">
  <option for="<?php echo $this->get_field_name( 'ampm_open_2' ); ?>"><?php echo $instance['ampm_open_2']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
 


<!-- Close: -->
  <?php _e('Close:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'close_2' ); ?>" for="<?php echo $this->get_field_id( 'close_2' ); ?>">
  <option for="<?php echo $this->get_field_name( 'close_2' ); ?>"><?php echo $instance['close_2']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_close_2' ); ?>" for="<?php echo $this->get_field_id( 'ampm_close_2' ); ?>">
    <option for="<?php echo $this->get_field_name( 'ampm_close_2' ); ?>"><?php echo $instance['ampm_close_2']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  
</p>




<!-- Day Three -->
<p>
  <?php _e('Day Three:', 'office_hours'); ?>
</p>
<p>
  <select name="<?php echo $this->get_field_name( 'day_3' ); ?>" for="<?php echo $this->get_field_id( 'day_3' ); ?>">
  <option for="<?php echo $this->get_field_name( 'day_3' ); ?>"><?php echo $instance['day_3']; ?></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
 
</p>

<p>
<!-- Open: -->
  <?php _e('Open:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'open_3' ); ?>" for="<?php echo $this->get_field_id( 'open_3' ); ?>">
  <option for="<?php echo $this->get_field_name( 'open_3' ); ?>"><?php echo $instance['open_3']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_open_3' ); ?>" for="<?php echo $this->get_field_id( 'ampm_open_3' ); ?>">
  <option for="<?php echo $this->get_field_name( 'ampm_open_3' ); ?>"><?php echo $instance['ampm_open_3']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
 


<!-- Close: -->
  <?php _e('Close:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'close_3' ); ?>" for="<?php echo $this->get_field_id( 'close_3' ); ?>">
  <option for="<?php echo $this->get_field_name( 'close_3' ); ?>"><?php echo $instance['close_3']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_close_3' ); ?>" for="<?php echo $this->get_field_id( 'ampm_close_3' ); ?>">
    <option for="<?php echo $this->get_field_name( 'ampm_close_3' ); ?>"><?php echo $instance['ampm_close_3']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  
</p>







<!-- Day Four -->
<p>
  <?php _e('Day Four:', 'office_hours'); ?>
</p>
<p>
  <select name="<?php echo $this->get_field_name( 'day_4' ); ?>" for="<?php echo $this->get_field_id( 'day_4' ); ?>">
  <option for="<?php echo $this->get_field_name( 'day_4' ); ?>"><?php echo $instance['day_4']; ?></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
 
</p>

<p>
<!-- Open: -->
  <?php _e('Open:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'open_4' ); ?>" for="<?php echo $this->get_field_id( 'open_4' ); ?>">
  <option for="<?php echo $this->get_field_name( 'open_4' ); ?>"><?php echo $instance['open_4']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_open_4' ); ?>" for="<?php echo $this->get_field_id( 'ampm_open_4' ); ?>">
  <option for="<?php echo $this->get_field_name( 'ampm_open_4' ); ?>"><?php echo $instance['ampm_open_4']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
 


<!-- Close: -->
  <?php _e('Close:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'close_4' ); ?>" for="<?php echo $this->get_field_id( 'close_4' ); ?>">
  <option for="<?php echo $this->get_field_name( 'close_4' ); ?>"><?php echo $instance['close_4']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_close_4' ); ?>" for="<?php echo $this->get_field_id( 'ampm_close_4' ); ?>">
    <option for="<?php echo $this->get_field_name( 'ampm_close_4' ); ?>"><?php echo $instance['ampm_close_4']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  
</p>








<!-- Day Five -->
<p>
  <?php _e('Day Five:', 'office_hours'); ?>
</p>
<p>
  <select name="<?php echo $this->get_field_name( 'day_5' ); ?>" for="<?php echo $this->get_field_id( 'day_5' ); ?>">
  <option for="<?php echo $this->get_field_name( 'day_5' ); ?>"><?php echo $instance['day_5']; ?></option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    <option value="Saturday">Saturday</option>
    <option value="Sunday">Sunday</option>
  </select>
 
</p>

<p>
<!-- Open: -->
  <?php _e('Open:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'open_5' ); ?>" for="<?php echo $this->get_field_id( 'open_5' ); ?>">
  <option for="<?php echo $this->get_field_name( 'open_5' ); ?>"><?php echo $instance['open_5']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_open_5' ); ?>" for="<?php echo $this->get_field_id( 'ampm_open_5' ); ?>">
  <option for="<?php echo $this->get_field_name( 'ampm_open_5' ); ?>"><?php echo $instance['ampm_open_5']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
 


<!-- Close: -->
  <?php _e('Close:', 'office_hours'); ?>
  <select name="<?php echo $this->get_field_name( 'close_5' ); ?>" for="<?php echo $this->get_field_id( 'close_5' ); ?>">
  <option for="<?php echo $this->get_field_name( 'close_5' ); ?>"><?php echo $instance['close_5']; ?></option>
    <option value="1:00">1:00</option><option value="1:30">1:30</option>
    <option value="2:00">2:00</option><option value="2:30">2:30</option>
    <option value="3:00">3:00</option><option value="3:30">3:30</option>
    <option value="4:00">4:00</option><option value="4:30">4:30</option>
    <option value="5:00">5:00</option><option value="5:30">5:30</option>
    <option value="6:00">6:00</option><option value="6:30">6:30</option>
    <option value="7:00">7:00</option> <option value="7:30">7:30</option>
    <option value="8:00">8:00</option> <option value="8:30">8:30</option>
    <option value="9:00">9:00</option><option value="9:30">9:30</option>
    <option value="10:00">10:00</option><option value="10:30">10:30</option>
    <option value="11:00">11:00</option><option value="11:30">11:30</option>
    <option value="12:00">12:00</option><option value="12:30">12:30</option>
  </select>

  <select name="<?php echo $this->get_field_name( 'ampm_close_5' ); ?>" for="<?php echo $this->get_field_id( 'ampm_close_5' ); ?>">
    <option for="<?php echo $this->get_field_name( 'ampm_close_5' ); ?>"><?php echo $instance['ampm_close_5']; ?></option>
    <option value="AM">AM</option>
    <option value="PM">PM</option>
  </select>
  
</p>






<?php
	}
}

?>

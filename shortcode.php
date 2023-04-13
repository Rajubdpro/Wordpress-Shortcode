<?php  

/**
 * Generat a shortcode
 */
class Shortcode
{
	
	function __construct(argument)
	{
		        // Add Slider ShortCode action
        add_action('init', [$this, 'function_name']);

	}
}

                function function_name()
                {
                    add_shortcode('shortcode-name', [$this, 'main_function']);
                }


new Shortcode();
?>
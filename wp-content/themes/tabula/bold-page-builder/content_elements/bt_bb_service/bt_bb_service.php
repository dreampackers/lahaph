<?php

class bt_bb_service extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'ai_prompt'    => '',
			'icon'         => '',
			'title'        => '',
			'html_tag'     => 'div',
			'text'         => '',
			'url'          => '',
			'target'       => '',
			'color_scheme' => '',
			'style'        => '',
			'size'         => '',
			'shape'        => '',
			'align'        => '',
			'button_text'  => ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$color_scheme_id = NULL;
		if ( is_numeric ( $color_scheme ) ) {
			$color_scheme_id = $color_scheme;
		} else if ( $color_scheme != '' ) {
			$color_scheme_id = bt_bb_get_color_scheme_id( $color_scheme );
		}
		$color_scheme_colors = bt_bb_get_color_scheme_colors_by_id( $color_scheme_id - 1 );
		if ( $color_scheme_colors ) $el_style .= '; --service-primary-color:' . $color_scheme_colors[0] . '; --service-secondary-color:' . $color_scheme_colors[1] . ';';
		if ( $color_scheme != '' ) $class[] = $this->prefix . 'color_scheme_' .  $color_scheme_id;		

		if ( $style != '' ) {
			$class[] = $this->prefix . 'style' . '_' . $style;
		}

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}
		
		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'size',
				'value' => $size
			)
		);

		if ( $shape != '' ) {
			$class[] = $this->prefix . 'shape' . '_' . $shape;
		}

		$this->responsive_data_override_class(
			$class, $data_override_class,
			array(
				'prefix' => $this->prefix,
				'param' => 'align',
				'value' => $align
			)
		);
		
		$link = bt_bb_get_url( $url );
		
		$icon = bt_bb_icon::get_html( $icon, '', $link, $target );

		if ( $link != '' ) {
			$title = '<a href="' . esc_url( $link ) . '" target="' . esc_attr( $target ) . '">' . $title . '</a>';
		} 

		
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		if ( $icon != '' ) $output = $icon;

		$output .= '<div class="' . esc_attr( $this->shortcode ) . '_content">';
			
			if ( $title != '' ) $output .= '<'. $html_tag . ' class="' . esc_attr( $this->shortcode ) . '_content_title">' . $title . '</'. $html_tag . '>';
			if ( $text != '' ) $output .= '<div class="' . esc_attr( $this->shortcode ) . '_content_text">' . nl2br( $text ) . '</div>';

			if ( ( $link != '' ) && ( $button_text != '' ) ) {
				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_content_button_text">';
					$output .= '<a href="' . esc_url( $link ) . '" target="' . esc_attr( $target ) . '">' . $button_text . '</a>';
				$output .= '</div>';
			}

		$output .= '</div>';

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . ' data-bt-override-class="' . htmlspecialchars( json_encode( $data_override_class, JSON_FORCE_OBJECT ), ENT_QUOTES, 'UTF-8' ) . '">' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Service', 'tabula' ), 'description' => esc_html__( 'Icon with text (and AI help)', 'tabula' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array(
					'param_name' => 'ai_prompt',
					'type' => 'ai_prompt',
					'target' =>
						array(
							'title' => array( 'alias' => 'title', 'title' => esc_html__( 'Title', 'tabula' ) ),
							'text' => array( 'alias' => 'text', 'title' => esc_html__( 'Text', 'tabula' ) ),
						),
					'system_prompt' => 'You are a copywriter and your GOAL is to help users generate website content. Based on the user prompt generate title and text for the website page.',
				),
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'html_tag', 'type' => 'dropdown', 'heading' => esc_html__( 'Title HTML tag', 'tabula' ), 'preview' => true, 'default' => 'div',
					'value' => array(
						esc_html__( 'div', 'tabula' ) => 'div',
						esc_html__( 'h1', 'tabula' ) 	=> 'h1',
						esc_html__( 'h2', 'tabula' ) 	=> 'h2',
						esc_html__( 'h3', 'tabula' ) 	=> 'h3',
						esc_html__( 'h4', 'tabula' ) 	=> 'h4',
						esc_html__( 'h5', 'tabula' ) 	=> 'h5',
						esc_html__( 'h6', 'tabula' ) 	=> 'h6'
				) ),
				array( 'param_name' => 'text', 'type' => 'textarea', 'heading' => esc_html__( 'Text', 'tabula' ) ),
				array( 'param_name' => 'button_text', 'type' => 'textfield', 'heading' => esc_html__( 'Button text', 'tabula' ), 'preview' => true ),
				array( 'param_name' => 'url', 'type' => 'textfield', 'heading' => esc_html__( 'URL', 'tabula' ) ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'tabula' ),
					'value' => array(
						esc_html__( 'Self (open in same tab)', 'tabula' ) => '_self',
						esc_html__( 'Blank (open in new tab)', 'tabula' ) => '_blank',
					)
				),
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon alignment', 'tabula' ),
					 'responsive_override' => true, 'value' => array(
						esc_html__( 'Inherit', 'tabula' )	=> 'inherit',
						esc_html__( 'Left', 'tabula' ) 	=> 'left',
						esc_html__( 'Right', 'tabula' ) 	=> 'right'
					)
				),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon size', 'tabula' ), 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ),  'responsive_override' => true,
					'value' => array(
						esc_html__( 'Small', 'tabula' ) 		=> 'small',
						esc_html__( 'Extra small', 'tabula' ) 	=> 'xsmall',
						esc_html__( 'Normal', 'tabula' ) 		=> 'normal',
						esc_html__( 'Large', 'tabula' ) 		=> 'large',
						esc_html__( 'Extra large', 'tabula' ) 	=> 'xlarge'
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'tabula' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ) ),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon style', 'tabula' ), 'preview' => true, 'group' => esc_html__( 'Design', 'tabula' ),
					'value' => array(
						esc_html__( 'Outline', 'tabula' ) 		=> 'outline',
						esc_html__( 'Filled', 'tabula' ) 		=> 'filled',
						esc_html__( 'Borderless', 'tabula' ) 	=> 'borderless'
					)
				),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon shape', 'tabula' ), 'group' => esc_html__( 'Design', 'tabula' ),
					'value' => array(
						esc_html__( 'Circle', 'tabula' ) 			=> 'circle',
						esc_html__( 'Square', 'tabula' ) 			=> 'square',
						esc_html__( 'Rounded Square', 'tabula' ) 	=> 'round'
					)
				)
			)
		) );
	}
}
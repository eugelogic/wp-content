if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_top-trumps-cards',
		'title' => 'Top Trumps Cards',
		'fields' => array (
			array (
				'key' => 'field_591891d370af0',
				'label' => 'Population',
				'name' => 'population',
				'type' => 'number',
				'instructions' => ' Add the number of inhabitants.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_591891ed70af1',
				'label' => 'Average temperature',
				'name' => 'average_temperature',
				'type' => 'text',
				'instructions' => 'Add the average temperature of the city across the year.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5918920d70af2',
				'label' => 'Restaurants',
				'name' => 'restaurants',
				'type' => 'number',
				'instructions' => 'Add number of restaurants.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5918923670af3',
				'label' => '% of public green space',
				'name' => 'green_space',
				'type' => 'number',
				'instructions' => 'Add % of public green space.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5918925670af4',
				'label' => 'Distance from London',
				'name' => 'distance',
				'type' => 'number',
				'instructions' => 'Add how many miles is away from London.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'cards',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

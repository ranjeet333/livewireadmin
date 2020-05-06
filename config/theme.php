<?php

return [

	'view_path' => resource_path('views/admin/theme1'),

	'asset_url'  => null,

	'aside_menus' => 
	[
		[
			'title' => 'One Level',
			'icon' => 'flaticon-home',
			'page' => '/admin/users',
			'bullet' => 'dot',
		],

		[
			'title' => 'Two Level',
			'icon' => 'flaticon-home',
			'page' => 'admin/create/user',
			'bullet' => 'dot',
			'sub_menu' => 
			[
				[
					'title' => 'one',
					'icon' => 'flaticon-home',
					'page' => 'admin/create/user',
					'bullet' => 'dot',
				],
			],
		],

		[
			'title' => 'Three Level',
			'icon' => 'flaticon-home',
			'page' => '/datatable',
			'bullet' => 'dot',

			'sub_menu' => 
			[
				[
					'title' => 'two',
					'icon' => 'flaticon-home',
					'bullet' => 'dot',
					'page' => '/basic',
					'sub_menu' => 
					[
						[
							'title' => 'one',
							'icon' => 'flaticon-home',
							'page' => '/row-wise',
							'bullet' => 'dot',
						],
					]
				],

			],

		]
	],

	'header_menus' => 
	[
		[
			'title' => 'One Level',
			'icon' => 'flaticon-home',
			'page' => '/admin/users',
			'bullet' => 'dot',
		],

		[
			'title' => 'Two Level',
			'icon' => 'flaticon-home',
			'page' => 'admin/create/user',
			'bullet' => 'dot',
			'sub_menu' => 
			[
				[
					'title' => 'one',
					'icon' => 'flaticon-home',
					'page' => 'admin/create/user',
					'bullet' => 'dot',
				],
			],
		],

		[
			'title' => 'Three Level',
			'icon' => 'flaticon-home',
			'page' => '/datatable',
			'bullet' => 'dot',

			'sub_menu' => 
			[
				[
					'title' => 'two',
					'icon' => 'flaticon-home',
					'bullet' => 'dot',
					'page' => '/basic',
					'sub_menu' => 
					[
						[
							'title' => 'one',
							'icon' => 'flaticon-home',
							'page' => '/row-wise',
							'bullet' => 'dot',
						],
					]
				],

			],

		]
	]
];
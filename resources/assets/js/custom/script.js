Wee.routes.map({
	'$any': [
		'common',
		'navigation'
	],
	'login': 'login',
	'register': 'register',
	'collections': {
		'$num': {
			'entries': {
				'new': 'entry'
			}
		}
	}
});

Wee.ready('routes:run');
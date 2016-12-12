Wee.routes.map({
	'$any': [
		'common',
		'navigation'
	],
	'login': 'login',
	'register': 'register'
});

Wee.ready('routes:run');
Wee.fn.make('common', {
	init: function() {
		this.$private.initHistory();
	}
}, {
	initHistory: function() {
		// Wee history
		// $.history.init({
		// 	bind: {
		// 		click: 'a'
		// 	},
		// 	request: {
		// 		success: function() {
		// 			// TODO: enable when GA script has been added
		// 			// ga('send', 'pageview');
		// 		},
		// 		error: function(xhr) {
		// 			$._win.location = xhr.responseURL;
		// 		}
		// 	}
		// });

		// Disable mouse event outlines
		$('a').on('mousedown', function() {
			var $el = $(this);

			if ($el.css('outline-style') == 'none') {
				var outlineClass = '-no-outline';

				$el.addClass(outlineClass).on('blur', function() {
					$el.removeClass(outlineClass);
				}, {
					once: true
				});
			}
		}, {
			delegate: $._body
		});
	}
});
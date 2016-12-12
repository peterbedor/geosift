Wee.fn.make('entry', {
	init: function() {
		this.$private.bindEvents();
	}
}, {
	bindEvents: function() {
		var scope = this;

		$('ref:fieldForm').submit(function(e, el) {
			var $el = $(el);

			Wee.api.post({
				url: $el.attr('action'),
				data: $el.serialize(),
				success: function(data) {
					console.log(data);
				}
			});

			e.preventDefault();
		});
	}
});
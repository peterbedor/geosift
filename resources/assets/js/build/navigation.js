Wee.fn.make('navigation', {
	init: function() {
		this.$private.init();
	}
}, {
	_construct: function() {
		this.$navigation = 	$('ref:navigation');
		this.$navigationToggle = $('ref:menuToggle');
	},

	init: function() {
		this.$navigationToggle.click(function() {
			this.toggleMenu();
		}.bind(this));
	},

	toggleMenu: function() {
		Wee.overlay.toggle();

		this.$navigation.toggleEnable();
	}
});
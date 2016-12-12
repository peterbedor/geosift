Wee.fn.make('overlay', {
	show: function() {
		this.$private.show();
	},

	hide: function() {
		this.$private.hide();
	},

	toggle: function() {
		this.$private.toggle();
	}
}, {
	_construct: function() {
		this.$overlay = $('ref:overlay');
	},

	show: function() {
		this.$overlay.show();

		this.timeout(function() {
			this.$overlay.activate();
		}.bind(this));
	},

	hide: function() {
		this.$overlay.deactivate();

		this.timeout(function() {
			this.$overlay.hide();
		}.bind(this), 200);
	},

	toggle: function() {
		if (this.$overlay.isActive()) {
			this.hide();
		} else {
			this.show();
		}
	},

	timeout: function(cb, time) {
		time = time || 1;

		$._win.setTimeout(function() {
			cb();
		}, time);
	}
});
Wee.fn.make('extension', {
	_construct: function() {
		var disabled = '-is-disabled',
			active = '-is-active';

		$.chain({
			disable: function() {
				this.addClass(disabled);

				return this;
			},

			enable: function() {
				this.removeClass(disabled);

				return this;
			},

			toggleEnable: function() {
				this.toggleClass(disabled);

				return this;
			},

			isDisabled: function() {
				return this.hasClass(disabled);
			},

			isEnabled: function() {
				return ! this.hasClass(disabled);
			},

			activate: function() {
				this.addClass(active);

				return this;
			},

			deactivate: function() {
				this.removeClass(active);

				return this;
			},

			toggleActive: function() {
				this.toggleClass(active);

				return this;
			},

			isActive: function() {
				return this.hasClass(active);
			},

			isInactive: function() {
				return ! this.hasClass(active);
			},

			click: function(callback, options) {
				options = options || {};

				return this.on('click', callback, options)
			}
		});
	}
});
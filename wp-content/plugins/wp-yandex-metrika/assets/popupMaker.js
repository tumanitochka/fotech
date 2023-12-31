jQuery(function($) {
	if (window.wpym === undefined){return;}

	const {counters} = window.wpym;

	$(this).on('pumAfterOpen', function (e, data) {
		if (!!$(e.target).find('form').length) {
			counters.forEach(counter => {
				ym(counter.number, 'reachGoal', 'ym-open-leadform');
			});
		}
	});
});

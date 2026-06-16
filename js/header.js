document.addEventListener('DOMContentLoaded', function () {
	var today = new Date();

	// Localized date string in Slovak: weekday day. month year
	try {
		var weekday = new Intl.DateTimeFormat('sk', { weekday: 'long' }).format(today);
		var month = new Intl.DateTimeFormat('sk', { month: 'long' }).format(today);
		var dateStr = weekday.charAt(0).toUpperCase() + weekday.slice(1) + ' ' + today.getDate() + '. ' + month + ' ' + today.getFullYear();
		var dateEl = document.getElementById('today-date');
		if (dateEl) dateEl.textContent = dateStr;
	} catch (e) {
		var dateElFallback = document.getElementById('today-date');
		if (dateElFallback) dateElFallback.textContent = today.toLocaleDateString();
	}

	// Fill meniny (name day) from meninySK array
	try {
		if (window.meninySK && Array.isArray(window.meninySK)) {
			var month = today.getMonth() + 1;
			var day = today.getDate();
			var entry = window.meninySK.find(function (e) { return e.month === month && e.day === day; });
			var names = entry && entry.names && entry.names.length ? entry.names.join(', ') : '';
			var nameEl = document.getElementById('today-name-day');
			if (nameEl) {
				nameEl.innerHTML = names ? 'Meniny má <strong>' + names : '</strong>';
			}
		}
	} catch (err) {
		// silent fail
	}

	// Nav links: mark active based on current URL and on click (adds 'is-active')
	(function () {
		var navLinks = document.querySelectorAll('.main-nav a');
		if (!navLinks || !navLinks.length) return;

		var currentPath = window.location.pathname.replace(/\/$/, '');

		navLinks.forEach(function (link) {
			var href = link.getAttribute('href') || '';
			// match simple paths (filename or full path)
			var hrefPath = href.split('?')[0].split('#')[0].replace(/\/$/, '');
			if (hrefPath && hrefPath !== '#' && (hrefPath === currentPath || hrefPath === currentPath.split('/').pop())) {
				link.classList.add('is-active');
			}

			link.addEventListener('click', function () {
				navLinks.forEach(function (l) { l.classList.remove('is-active'); });
				this.classList.add('is-active');
			});
		});
	})();
});

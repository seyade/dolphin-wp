(function() {
  'use strict';

  document.querySelector('.menu-btn').addEventListener('click', function(e) {
		e.preventDefault();
		document.querySelector('.main-nav').style.display = 'block';
	}, false);
})();

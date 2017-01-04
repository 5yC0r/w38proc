$(document).ready(function(){
/* ---------------------------------------------------------------------- */
/*	Inputs Focus
/* ---------------------------------------------------------------------- */
$('.search-input').focus(function() {
	if($(this).val() == 'Let’s start searching..') {
		$(this).val('');
	}
});
$('.search-input').blur(function() {
	if($(this).val() == '') {
		$(this).val('Let’s start searching..');
	}
});
$('.newsletter-input').focus(function() {
	if($(this).val() == 'Enter your email here...') {
		$(this).val('');
	}
});
$('.newsletter-input').blur(function() {
	if($(this).val() == '') {
		$(this).val('Enter your email here...');
	}
});
$('.esearch-input').focus(function() {
	if($(this).val() == 'Search in website...') {
		$(this).val('');
	}
});
$('.esearch-input').blur(function() {
	if($(this).val() == '') {
		$(this).val('Search in website...');
	}
});
$('.blog-search-input').focus(function() {
	if($(this).val() == 'Search in blog...') {
		$(this).val('');
	}
});
$('.blog-search-input').blur(function() {
	if($(this).val() == '') {
		$(this).val('Search in blog...');
	}
});
/* end Inputs Focus */
/* ---------------------------------------------------------------------- */
/*	Main Navigation
/* ---------------------------------------------------------------------- */
	(function() {
		var $mainNav    = $('#main-nav').children('ul'),
			optionsList = '<option value="" selected>Navigate...</option>';
		// Regular nav
		$mainNav.on('mouseenter', 'li', function() {
			var $this    = $(this),
				$subMenu = $this.children('ul');
			if( $subMenu.length ) $this.addClass('hover');
			$subMenu.hide().stop(true, true).fadeIn(200);
		}).on('mouseleave', 'li', function() {
			$(this).removeClass('hover').children('ul').stop(true, true).fadeOut(50);
		});
		// Responsive nav
		$mainNav.find('li').each(function() {
			var $this   = $(this),
				$anchor = $this.children('a'),
				depth   = $this.parents('ul').length - 1,
				indent  = '';

			if( depth ) {
				while( depth > 0 ) {
					indent += '--';
					depth--;
				}
			}
			optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
		}).end()
		  .after('<select class="responsive-nav">' + optionsList + '</select>');

		$('.responsive-nav').on('change', function() {
			window.location = $(this).val();
		});
	})();
/* end Main Navigation */
});
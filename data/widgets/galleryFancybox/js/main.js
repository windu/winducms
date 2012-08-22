$(document).ready(function() {
    $("a[rel=lightbox_group]").fancybox
    (
        {
        	'padding'		: 0,
        	'titleShow'		: false,
        	'autoScale'		: true,
        	'transitionIn'		: 'none',
        	'transitionOut'		: 'none',
        	'overlayColor'		: '#000',
			'overlayOpacity'	: '0.8',
			'centerOnScroll':true,
        }
    );

});
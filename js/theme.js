require.config({

	// enforceDefine: true,

	paths: {

		jquery : 'vendor/jquery-1.8.3.min'
		,underscore : 'vendor/underscore-1.4.4.min'
		// jquery : 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min'
		,modernizr : 'vendor/modernizr.foundation'
		,easing: 'vendor/jquery.easing-1.3'

		,foundationToggle: "vendor/foundation/jquery.foundation.mediaQueryToggle"
		,foundationForm: "vendor/foundation/jquery.foundation.forms"
		,foundationReveal: "vendor/foundation/jquery.foundation.reveal"
		,foundationOrbit: "vendor/foundation/jquery.foundation.orbit"
		,foundationNavigation: "vendor/foundation/jquery.foundation.navigation"
		,foundationButton: "vendor/foundation/jquery.foundation.buttons"
		,foundationTabs: "vendor/foundation/jquery.foundation.tabs"
		,foundationTooltips: "vendor/foundation/jquery.foundation.tooltips"
		,foundationAccordion: "vendor/foundation/jquery.foundation.accordion"
		,foundationPlaceholder: "vendor/foundation/jquery.placeholder"
		,foundationAlerts: "vendor/foundation/jquery.foundation.alerts"
		,foundationTopbar: "vendor/foundation/jquery.foundation.topbar"
		,foundationJoyride: "vendor/foundation/jquery.foundation.joyride"
		,foundationClearing: "vendor/foundation/jquery.foundation.clearing"
		,foundationMagellan: "vendor/foundation/jquery.foundation.magellan"

		,imagesloaded: 'vendor/jquery.imagesloaded-2.1.1'
		,socialite: 'vendor/socialite'
		,nicescroll: 'vendor/jquery.nicescroll-3.4.0'
		,boxer: 'vendor/jquery.fs.boxer-1.6.6'
		,colorbox: 'vendor/jquery.colorbox-1.4.15'
		,anchorme: 'vendor/jquery.anchorme-0.2.3'
		,totop: 'vendor/jquery.totop-0.1.0'
		,flicksimple: 'vendor/jquery.flicksimple-1.2.2'
		,vgrid: 'vendor/jquery.vgrid-0.1.9.custom'

	},

	shim: {
		jquery: {
			exports: '$'
		}
		,underscore: {
			exports: '_'
		}

		,easing: { deps: ['jquery'] }

		,foundationToggle: { deps: ['jquery'] }
		,foundationForm: { deps: ['jquery'] }
		,foundationReveal: { deps: ['jquery'] }
		,foundationOrbit: { deps: ['jquery'] }
		,foundationNavigation: { deps: ['jquery'] }
		,foundationButton: { deps: ['jquery'] }
		,foundationTabs: { deps: ['jquery'] }
		,foundationTooltips: { deps: ['jquery'] }
		,foundationAccordion: { deps: ['jquery'] }
		,foundationPlaceholder: { deps: ['jquery'] }
		,foundationAlerts: { deps: ['jquery'] }
		,foundationTopbar: { deps: ['jquery'] }
		,foundationJoyride: { deps: ['jquery'] }
		,foundationClearing: { deps: ['jquery'] }
		,foundationMagellan: { deps: ['jquery'] }

		,imagesloaded: {
			deps: ['jquery']
		}
		,socialite: {
			deps: ['jquery']
		}
		,nicescroll: {
			deps: ['jquery']
		}
		,boxer: {
			deps: ['jquery']
		}
		,colorbox: {
			deps: ['jquery']
		}
		,anchorme: {
			deps: ['jquery']
		}
		,totop: {
			deps: ['jquery']
		}
		,flicksimple: {
			deps: ['jquery']
		}
		,vgrid: {
			deps: ['jquery', 'easing']
		}
	}

});

require(['analytics']);

/* require([], function(){

	...;

}); */

/* if ($('html.lt-ie9').size()) {
	   ...;
	}
}); */

// =Underscore Test
/* require(['underscore'], function(){

	var numbers = [10, 5, 100, 2, 1000];
	console.log('test: ' + _.min(numbers));

}); */

require(['jquery', 'easing', 'vgrid'], function(){

	$(document).ready(function(){
		$(".g").vgrid({
			useLoadImageEvent:true
			,time: 500
		});
	});

});

require(['jquery', 'anchorme'], function(){

	$('.anchor a, a.anchor').anchorme({ offset: 72 });

});

require(['jquery', 'totop'], function(){

	$("#totop").totop();

});

require(['jquery', 'modernizr'], function(){

	// Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
	if (Modernizr.touch && !window.location.hash) {
		$(window).load(function () {
			setTimeout(function () {
			  window.scrollTo(0, 1);
			}, 0);
		});
	}

});

require([

		'foundationAlerts'
		// ,'foundationToggle'
		,'foundationForm'
		// ,'foundationReveal'
		,'foundationOrbit'
		,'foundationNavigation'
		,'foundationButton'
		,'foundationTabs'
		,'foundationTooltips'
		,'foundationAccordion'
		,'foundationPlaceholder'

		,'foundationTopbar'
		// ,'foundationJoyride'
		// ,'foundationClearing'
		// ,'foundationMagellan'

], function(){

		var $doc = $(document),
			Modernizr = window.Modernizr;

		$(document).ready(function() {

			// $.fn.foundationTabs ? $doc.foundationTabs({}) : null;

			$.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
			$.fn.foundationButtons          ? $doc.foundationButtons() : null;
			$.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
			$.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
			$.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
			$.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
			// $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
			$.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
			$.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
			// $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
			// $.fn.foundationClearing         ? $doc.foundationClearing() : null;

			$.fn.placeholder                ? $('input, textarea').placeholder() : null;

		});

});

// =Orbit -------------
require(['foundationOrbit', 'imagesloaded'], function(){

	$('#visual img').imagesLoaded(function(){

		var $visual = $("#visual");
		$($visual).fadeIn().find('.inner').orbit({
			animation: 'fade'
			,directionalNav: false
			,fluid: false
			,captions: false
		});
		// $($visual).find(".orbit-slide").not(":first-child").css('left', "-930px");
		// $($visual).find('.timer').remove();

	});

	$(window).resize(function(){

		$("#visual").height($(".orbit a").height());

	});

});

require(['boxer', 'colorbox', 'imagesloaded'], function(){

	$('[data-modal] img').imagesLoaded(function(){

		/* =Modalbox like lightbox ---------------------------------------- */
		if(navigator.userAgent.match(/MSIE\s+7|MSIE\s+8/i)){
			$('[data-modal]').colorbox();
			$('[data-modal="inline"]').colorbox({
				inline: true
			});
		}else{
			$('[data-modal]').boxer();
		}

	});

});

require(
    ['socialite'], function () {

		// =Socialite ----------------------------------------
		Socialite.setup({
			facebook: {
				lang     : 'ja_JP'
			}
		});
		Socialite.load();

    }
);

require(['nicescroll'], function(){

	var doNiceScroll = function(){

		$('html').niceScroll({
			cursorwidth: 5
			,cursoropacitymin: 0.5
			,zindex: 5
		});

	}

	if ($('html.lt-ie9').size()){
		$(document).ready(function(){
			doNiceScroll();
		});
	}else{
		doNiceScroll();
	}

});

/* require(['flicksimple', 'imagesloaded'], function(){

	$('#basic img').imagesLoaded(function(){
		var $width = 0;
		$('#basic .inner > *').each(function(){

			$width = $width + $(this).outerWidth();

		});

		$('#basic .inner').width($width);

		var fl = $('#basic');
		fl.flickSimple();
		var insfs = fl.flickSimple();

		var ssflg = true;
		if ( ! insfs.touchable ) {
			fl.hover(
				function() { ssflg = false; },
				function() { ssflg = true; }
			);
		}
		setInterval( function() {
			if ( ! ssflg ) { return; }
			if ( insfs.startX != null ) { return; }
			( insfs.pageLength < insfs.page +1 )
				? insfs.goTo( 1 )
				: insfs.nextPage( 1 );
		}, 3000 );
	});

}); */

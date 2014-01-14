(function(jQuery) {

	jQuery.fn.totop = function(options){

		var $options = jQuery.extend({
			offset: 200
			,smooth: false
		},options);

		return this.each(function(i, elem){
			
			var topBtn = $(this);
			topBtn.fadeOut();
			
			$(window).scroll(function () {
				if ($(this).scrollTop() > $options.offset) {
					topBtn.fadeIn();
				} else {
					topBtn.fadeOut();
				}
			});
		
			if($options.smooth){
				topBtn.click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 500);
					return false;
				});
			}

		});

	};

})(jQuery);
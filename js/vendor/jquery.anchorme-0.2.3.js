/*
 * 0.2.3 ... jQuery 1.8.x($.browserの削除)に対応。
 * 0.2.2 ... jQuery 1.8.x($.browserの削除)に対応。
 */

jQuery.fn.anchorme = function(options){

	var $options = jQuery.extend({
		offset: 0
		,speed: 400
		,from: 'href'
		,to: 'id'
	},options);

	return this.each(function(i, elem){

		/* $(document).ready(function(){
			$(elem).css('cursor','pointer');
		}); */

		$(elem).click(function(){

			/* get Attr Name */
			var $targetAttrName = $(elem).attr($options.from);
			var $targetPosition;

			// console.log($targetAttrName);

			if($options.to == 'id'){

				/* get target position */
				$targetPosition = $(($targetAttrName == "#" || $targetAttrName == "") ? 'html' : $targetAttrName).offset().top - $options.offset;

			}else{

				$targetAttrName = $targetAttrName.replace(/^#/,'');

				/* get target position */
				$targetPosition = $(
								($targetAttrName == "") ? 'html'
								: ('[' +$options.to+ '=' +$targetAttrName+ ']')
							).offset().top - $options.offset;

				// console.log($targetPosition);

			}



			var $body = (navigator.userAgent.match(/safari/i)) ? 'body' : 'html';

			// console.log(navigator.userAgent);
			// console.log($body);

			$($body)
			//$($.browser.safari ? 'body' : 'html')
			.animate({scrollTop: $targetPosition}, $options.speed, 'swing');
			return false;

		});

	}); //=return this.each(function()

};

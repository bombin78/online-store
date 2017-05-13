function Slider(options){
	var defaultOptions = {
		prevNode    : 'su-slider_prev',
		nextNode    : 'su-slider_next',
		classList   : 'su-slider_list',
		classInList : 'su-list_item',
		scrollTime  : 10
	};

	var globalOptions = $.extend(defaultOptions, options);

	var prevNode    = '.' + globalOptions.prevNode,
		nextNode    = '.' + globalOptions.nextNode,
		classList   = '.' + globalOptions.classList,
		classInList   = '.' + globalOptions.classInList,
		scrollTime  = globalOptions.scrollTime,
		states      = [];

	function move(number) {
		number = number || 0;

		var state = $(classList).css('left');
		var pos = states.indexOf(state) + number;

		if(pos == -1){
			pos = states.length - 1;
		}
		else if(pos == states.length){
			pos = 0;
		}
		$(classList).animate({
			'left' : states[pos]},
			500
		);
	}

	this.init = function () {

		var widthList = $(classList).width(),
			heightList = $(classList).parent().height(),
			objInList = $(classList).find(classInList),
			marginInList = 0;

		if(objInList.length > 1){
			marginInList = objInList.eq(1).outerWidth(true) - objInList.eq(1).outerWidth();
		}

		var widthInList = marginInList + objInList.eq(0).width();
		var clen = objInList.length / Math.floor((widthList + marginInList)/ widthInList);

		$(classList)
			.css('height', heightList + 'px')
			.css('width', widthList * (clen + 1) + 'px')
			.css('left', 0);

		for(var i =0; i < clen;i++){
			states.push(-i*(widthList + marginInList) + 'px');
		}

		$(prevNode).click(function(e){
			e.preventDefault();
			move(-1);
		});

		$(nextNode).click(function(e){
			e.preventDefault();
			move(1);
		});

		if(scrollTime){
			setInterval(function(){
				move(1);
			}, scrollTime * 1000);
		}

		// objInList.filter('[href]').fancybox({
		// 	'transitionIn'		: 'none',
		// 	'transitionOut'		: 'none',
		// 	'titlePosition' 	: 'over',
		// 	'titleFormat'       : function(title, currentArray, currentIndex, currentOpts) {
		// 		return '<span id="fancybox-title-over">Image ' +  (currentIndex + 1) + ' / ' + currentArray.length + ' ' + title + '</span>';
		// 	}
		// });
	};
}

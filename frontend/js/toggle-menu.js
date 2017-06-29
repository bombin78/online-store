//Модуль для скрытия/отображения основного меню сайта с учетом шиины экрана
function ToggleMenu(options) {
	var defaultOptions = {
		classShiftBlock: 'su-wrapper',
		classMenuOpen: 'su-header-nav_button',
		classMenuDrop: 'su-sidebar',
		modifierShiftBlock: '_su-menu',
		transitionPoint: 794 - ( 10 * 2 ),
		shiftValue: 260,
		toggleTime: 200,
		easing: 'linear'

	};

	var globalOptions = $.extend(defaultOptions, options);

	var widthBody = $('body').outerWidth(),
		correctedWidthBody = widthBody,
		classShiftBlock = '.' + globalOptions.classShiftBlock,
		classMenuOpen = '.' + globalOptions.classMenuOpen,
		classMenuDrop = '.' + globalOptions.classMenuDrop,
		modifierShiftBlock = globalOptions.modifierShiftBlock,
		transitionPoint = globalOptions.transitionPoint,
		shiftValue = globalOptions.shiftValue,
		toggleTime = globalOptions.toggleTime,
		easing = globalOptions.easing;


	//Скрыть/отобразить меню для мобильного устройства
	function toggleMenu(e, target) {
		var animateLeft = {left: '-' + shiftValue},
			animatePaddingLeft = {paddingLeft: shiftValue};

		if (!target.closest(classMenuDrop)[0]) {

			if ($(classShiftBlock).hasClass(modifierShiftBlock)) {

				$(classShiftBlock).removeClass(modifierShiftBlock);
				$(classShiftBlock).animate(
					{paddingLeft: 0},
					toggleTime,
					easing,
					function () {
						$(classMenuDrop).removeAttr('style');
						$(classShiftBlock).removeAttr('style');
					}
				);

			}
			else {
				if (target.closest(classMenuOpen)[0]) {
					var cssValues = {
						//position: 'fixed',
						//boxSizing: 'content-box',
						//width:      '100vw',
						//width: '100%',
						//maxWidth: correctedWidthBody
					};

					e.preventDefault();

					//$(classShiftBlock).css(cssValues);
					//$(classMenuDrop).css({display: 'inline-block'});
					$(classShiftBlock).animate(
						animatePaddingLeft,
						toggleTime,
						easing,
						function () {
							$(classShiftBlock).addClass(modifierShiftBlock);
						}
					);

				}
			}
		}
	}

	this.init = function (options) {
		globalOptions = options;

		//Событие для: скрыть/отобразить меню в зависимости
		//от ширины экрана
		$(window)
			.on('click', function (e) {
				var target = $(e.target);

				if (widthBody < transitionPoint) {
					toggleMenu(e, target);
					console.log(widthBody);
				}

			})
			.on('resize', function () {
				widthBody = $('body').outerWidth();
				console.log(widthBody);
			});
	}
}
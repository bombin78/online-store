//------------------------------------------------------------
// МОДУЛЬ ПОКАЗАТЬ/СКРЫТЬ МЕНЮ В МОБИЛЬНОЙ ВЕРСИИ.
// Стили находятся в директории "scss/layout/connect/wrapper".
(function () {
	var selectorWrapper = '.su-wrapper',
		modifierWrapper = '_su-show-menu',
		selectorWrapperCover = '.su-wrapper-cover',
		selectorBtn = '.su-header-nav_button',
		showStyle = {paddingLeft: 275},
		hideStyle = {paddingLeft: 0};

	$(document)
		.on('click', selectorBtn, function () {
			//Если модификатора нет, открываем меню.
			if (!$(selectorWrapper).hasClass(modifierWrapper)) {
				$(selectorWrapper).css(showStyle);
				$(selectorWrapper).addClass(modifierWrapper);
				$(selectorWrapper).removeAttr('style');
			}
		})
		.on('click', selectorWrapperCover, function () {
			//Если модификатор есть, скрываем меню.
			if ($(selectorWrapper).hasClass(modifierWrapper)) {
				$(selectorWrapper).css(hideStyle);
				$(selectorWrapper).removeClass(modifierWrapper);
				$(selectorWrapper).removeAttr('style');
			}
		});
})();
//------------------------------------------------------------

//------------------------------------------------------------
// МОДУЛЬ ПОКАЗАТЬ/СКРЫТЬ ВЛОЖЕННОЕ МЕНЮ КАТАЛОГА В МОБИЛЬНОЙ ВЕРСИИ.
$('._su-list').on('click', function (e) {
	e.preventDefault();
	var wrapper = $(this).closest('.su-list_item'),
		wrapperModifier = '_su-open',
		wrapperAttr = 'style',
		description = wrapper.find('.su-dropdown'),
		duration = 200;

	if (wrapper.hasClass(wrapperModifier)) {
		description.slideUp(duration, function () {
			wrapper.removeClass(wrapperModifier);
			description.removeAttr(wrapperAttr);
		});
	}
	else {
		description.slideDown(duration, function () {
			wrapper.addClass(wrapperModifier);
			description.removeAttr(wrapperAttr);
		});
	}
});
//------------------------------------------------------------

//------------------------------------------------------------
// ИНИЦИАЛИЗАЦИЯ ВЫПАДАЮЩЕГО СПИСКА КАРЗИНЫ
var toggleBasket = new ToggleShow();
toggleBasket.init(
	{
		closeDropdown: 'otherClose',
		classNameMain: 'su-header-basket',
		classNameOpen: 'su-header-basket_link',
		classNameDrop: 'su-header-basket_dropdown',
		modifierNameDrop: '_su-show'
	}
);
//------------------------------------------------------------

//------------------------------------------------------------
// ИНИЦИАЛИЗАЦИЯ ВЫПАДАЮЩЕГО СПИСКА ПРОФИЛЯ ПОЛЬЗОВАТЕЛЯ
var toggleUser = new ToggleShow();
 toggleUser.init(
	 {
		 closeDropdown: 'otherClose',
		 classNameMain: 'su-header-user',
		 classNameOpen: 'su-header-user_avatar',
		 classNameDrop: 'su-header-user_dropdown',
		 modifierNameDrop: '_su-show'
	 }
 );
//------------------------------------------------------------

// УСТРАНЕНИЕ ЭФФЕКТА СМЕЩЕНИЯ ШАПКИ ПРИ ОТКРЫТИИ МОДАЛЬНОГО ОКНА
//------------------------------------------------------------
$(document)
	.on('show.bs.modal', function () {
		if ($(window).outerHeight(true) < $('.su-wrapper').outerHeight(true)) {
			var scrollDiv = document.createElement('div');
			//без этого класса не работает
			scrollDiv.className = 'modal-scrollbar-measure';
			$('body').append(scrollDiv);
			var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
			$('body')[0].removeChild(scrollDiv);
			$('.su-header-control').css({paddingRight: scrollbarWidth})
		}
	})
	.on('hidden.bs.modal', function () {
		$('.su-header-control').removeAttr('style');
	});
//------------------------------------------------------------

//ЧТЕНИЕ ПАРАМЕТРОВ ЗАПРОСА
//------------------------------------------------------------
$.extend({
	getUrlVars: function () {
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for (var i = 0; i < hashes.length; i++) {
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	},
	getUrlVar: function (name) {
		return $.getUrlVars()[name];
	}
});
//------------------------------------------------------------

//ПОДТВЕРЖДЕНИЕ ОТПРАВКИ ЗАКАЗА
//------------------------------------------------------------
if ($.getUrlVar('form') == 'y') {
	$(".su-modal-confirmation").modal('show');
}
//------------------------------------------------------------

//------------------------------------------------------------
// ИНИЦИАЛИЗАЦИЯ ПЛАГИНА JSCROLLPANE ДЛЯ БЛОКА
// "ПРОСМОТРЕННЫЕ ПРЕДЛОЖЕНИЯ"
$(function(){
	if (jQuery('.su-sidebar-viewed_list').size()) {
		var element = jQuery('.su-sidebar-viewed_list').jScrollPane(),
			api = element.data('jsp'),
			verticalScrollBar = api.getIsScrollableV();

		// Добавление класса (модификатора) для отслеживания
		// наличия вертикальной полосы прокрутки.
		if (verticalScrollBar) {
			$('.su-sidebar-viewed_list').find('.jspContainer').addClass('_jspOffset');
		}
		else {
			$('.su-sidebar-viewed_list').find('.jspContainer').removeClass('_jspOffset');
		}

		//api.reinitialise(s);
	}
});
//------------------------------------------------------------


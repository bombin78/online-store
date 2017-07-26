// МОДУЛЬ: СКРЫТИЕ/ОТОБРАЖЕНИЕ ВЫПАДАЮЩЕГО БЛОКА (СПИСКА)
// 1.  Описание свойств:
// 1.1 closeDropdown - устанавливает, будет ли сворачиваться выпадающий
//     блок по клику в его области;
// 1.2 classNameCheck - устанавливает область проверки.
//     При присвоении класса, все найденные открытые выпадающие блоки
//     (внутри блока с данным классом, значение которых устанавливается
//     свойством "classNameDrop") кроме текущего, будут закрыты.
//     По умолчанию - отключено;
// 1.3 classNameMain - задает класс блока внутри которого находится
//     открывающая/закрывающая ссылка (classNameOpen) и сам выпадающий
//     блок (classNameDrop)
// 1.4 modifierNameDrop - модификатор, присваиваемый открывающей ссылке
//     открытого выпадающего блока.
//     По умолчанию - отключено;
// 1.5 modifierNameDrop - модификатор, присваиваемый открытому
//     выпадающему блоку.
//     По умолчанию - присвоено значение '_show';
//----------------------------------------------------------------------
//----------------------------------------------------------------------

function ToggleShow() {
	var defaultOptions = {
		closeDropdown: true,
		classNameLevel: false,
		classNameMain: 'block',
		classNameOpen: 'block_link',
		classNameDrop: 'block_dropdown',
		modifierNameOpen: false,
		modifierNameDrop: '_show'
	};

	function controlDropdown(e, target, flag, cs0, cs1, cs2, cs3, mr2, mr3) {

		var selfMain = target.closest(cs1),
			selfOpen = target.closest(cs2),
			selfDrop = target.closest(cs3);

		// Проверка на открытые ранее блоки с таким-же классом
		if (cs0 != false) {
			closeOtherDropdown(selfMain, cs0, cs1, cs2, cs3, mr2, mr3);
		}

		// Переключатель выпадающего блока
		toggleDropdown(e, flag, selfOpen, selfDrop, cs1, cs2, cs3, mr2, mr3);

	}

	function closeOtherDropdown(selfMain, cs0, cs1, cs2, cs3, mr2, mr3) {
		$(cs0).find(cs1).each(function () {
			if (this != selfMain[0] && $(this).find(cs3).hasClass(mr3)) {
				if(mr2) {
					$(this).find(cs2).removeClass(mr2);
				}
				$(this).find(cs3).removeClass(mr3);
			}
		});
	}

	function toggleDropdown(e, flag, selfOpen, selfDrop, cs1, cs2, cs3, mr2, mr3) {
		var foundLink = selfOpen.closest(cs1).find(cs2),
			foundList = selfOpen.closest(cs1).find(cs3),
			fullCycle = true;

		if (selfOpen[0]) {
			e.preventDefault();

			changeModifiers(fullCycle, foundLink, foundList, mr2, mr3);
		}
		else if (selfDrop[0]) {
			// Выпадающий блок закрываеться по клику внутри его области
			if (flag || flag == 'dropClose') {
				foundLink = selfDrop.closest(cs1).find(cs2);
				foundList = selfDrop.closest(cs1).find(cs3);
				fullCycle = false;

				changeModifiers(fullCycle, foundLink, foundList, mr2, mr3);
			}
			// Выпадающий блок НЕ закрываеться по клику внутри его области
			else {
				return false;
			}
		}
		else {
			// Выпадающий блок закрываеться по клику за пределами
			// открывающей/закрывающей ссылки и выпадающего блока
			if (flag || flag == 'otherClose') {
				foundLink = $(cs2);
				foundList = $(cs3);
				fullCycle = false;

				changeModifiers(fullCycle, foundLink, foundList, mr2, mr3);
			}
			// Выпадающий блок НЕ закрываеться по клику за пределами
			// открывающей/закрывающей ссылки и выпадающего блока
			else {
				return false;
			}
		}
	}

	function changeModifiers(fullCycle, foundLink, foundList, mr2, mr3) {

		if (fullCycle) {
			// Если задан модификатор для ссылки
			if (mr2) {
				foundLink.toggleClass(mr2);
			}
			foundList.toggleClass(mr3);
		}
		else {
			// Если задан модификатор для ссылки
			if (mr2) {
				foundLink.removeClass(mr2);
			}
			foundList.removeClass(mr3);
		}

	}

	this.init = function (options) {
		var param = $.extend(defaultOptions, options);

		var flag = param.closeDropdown,
			cs0 = param.classNameLevel,
			cs1 = '.' + param.classNameMain,
			cs2 = '.' + param.classNameOpen,
			cs3 = '.' + param.classNameDrop,
			mr2 = param.modifierNameOpen,
			mr3 = param.modifierNameDrop;
		
		if(cs0) {
			cs0 = '.' + param.classNameLevel;
			cs1 = cs0 + cs1;
			cs2 = cs0 + cs2;
			cs3 = cs0 + cs3;
		}

		$(document).on('click', function (e) {
			var target = $(e.target);

			controlDropdown(e, target, flag, cs0, cs1, cs2, cs3, mr2, mr3);

		});
	}
}

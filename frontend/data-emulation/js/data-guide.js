dataEmulation['typeTemplate'] = '_su-guide';

dataEmulation['basicBlocks'] = [
	{
		title: 'Вспомогательные компоненты',
		rows: [
			{
				modifier: '_su-light',
				file: 'Блок-обертка (block.twig)',
				url: 'components/basic/block.twig'
			}
		]
	},
	{
		title: 'Тексты, заголовки и ссылки',
		rows: [
			{
				modifier: '_su-light',
				file: 'Составной заголовок с картинкой (title-complex.twig)',
				url: 'components/basic/title-complex.twig'
			},
			{
				modifier: '_su-light',
				file: 'Текст с классом "text" (text.twig)',
				url: 'components/basic/text.twig'
			},
			{
				modifier: '_su-dark',
				file: 'Ссылка (link.twig)',
				url: 'components/basic/link.twig'
			},
			{
				modifier: '_su-light',
				file: 'Блок определения - свойство/значение (detail.twig)',
				url: 'components/basic/detail.twig'
			},
			{
				modifier: '_su-light',
				file: 'Вставка знака валюты - (currency.twig)',
				url: 'components/basic/currency.twig'
			}
		]
	},
	{
		title: 'Кнопки, ссылки-кнопки и т.д.',
		rows: [
			{
				modifier: '_su-light',
				file: 'Ссылка-кнопка (link-btn.twig)',
				url: 'components/basic/link-btn.twig'
			},
			{
				modifier: '_su-light',
				file: 'Кнопка (btn.twig)',
				url: 'components/basic/btn.twig'
			},
			{
				modifier: '_su-light',
				file: 'Группа кнопок (group-buttons.twig)',
				url: 'components/composite/group-buttons.twig'
			},
			{
				modifier: '_su-light',
				file: 'Нумерация страниц (pagination.twig)',
				url: 'components/composite/pagination.twig'
			},
			{
				modifier: '_su-light',
				file: 'Блок "посмотреть все/еще" (more.twig)',
				url: 'components/basic/more.twig'
			}
		]
	},
	{
		title: 'Картинки',
		rows: [
			{
				modifier: '_su-light',
				file: 'Ссылка-картинка (link-img.twig)',
				url: 'components/basic/link-img.twig'
			},
			{
				modifier: '_su-dark',
				file: 'Предварительный просмотр (preview.twig)',
				url: 'components/composite/preview.twig'
			},
			{
				modifier: '_su-light',
				file: 'Баннер (banner-block.twig)',
				url: 'components/composite/banner-block.twig'
			},
			{
				modifier: '_su-light',
				file: 'Рейтинг (rating.twig)',
				url: 'components/basic/rating.twig'
			},
			{
				modifier: '_su-light',
				file: 'Фотография в тексте (photo-paragraph.twig)',
				url: 'components/basic/photo-paragraph.twig'
			},
			{
				modifier: '_su-light',
				file: 'Фотография (photo-figure.twig)',
				url: 'components/basic/photo-figure.twig'
			}
		]
	},
	{
		title: 'Списки',
		rows: [
			{
				modifier: '_su-light',
				file: 'Список с классом "list" (list.twig)',
				url: 'components/basic/list.twig'
			},
			{
				modifier: '_su-light',
				file: 'Многоуровневый список (list-multilevel.twig)',
				url: 'components/basic/list-multilevel.twig'
			},
			{
				modifier: '_su-dark _su-for-dropdown',
				file: 'Выпадающий список (dropdown.twig)',
				url: 'components/composite/dropdown.twig'
			},
			{
				modifier: '_su-light',
				file: 'Хлебные крошки (breadcrumb.twig)',
				url: 'components/basic/breadcrumb.twig'
			},
			{
				modifier: '_su-light',
				file: 'Популярное (popular.twig)',
				url: 'components/composite/popular.twig'
			}
		]
	},
	{
		title: 'Поля',
		rows: [
			{
				modifier: '_su-light',
				file: 'Поле поиска (field-search.twig)',
				url: 'components/basic/field-search.twig'
			},
			{
				modifier: '_su-light',
				file: 'Поле выбора (field-select.twig)',
				url: 'components/basic/field-select.twig'
			},
			{
				modifier: '_su-light',
				file: 'Поле выбора количества - спиннер (field-spinner.twig)',
				url: 'components/basic/field-spinner.twig'
			},
			{
				modifier: '_su-light',
				file: 'Текстовое поле со всеми элементами (field-text.twig)',
				url: 'components/basic/field-text.twig',
				withUrl: {'typeField': 'full'}
			},
			{
				modifier: '_su-light',
				file: 'Текстовое поле с меткой (field-text.twig)',
				url: 'components/basic/field-text.twig',
				withUrl: {'typeField': 'label'}
			},
			{
				modifier: '_su-light',
				file: 'Простое текстовое поле (field-text.twig)',
				url: 'components/basic/field-text.twig'
			},
			{
				modifier: '_su-light',
				file: 'Текстовая область со всеми элементами (field-textarea.twig)',
				url: 'components/basic/field-textarea.twig',
				withUrl: {'typeField': 'full'}
			},
			{
				modifier: '_su-light',
				file: 'Текстовая область с меткой (field-textarea.twig)',
				url: 'components/basic/field-textarea.twig',
				withUrl: {'typeField': 'label'}
			},
			{
				modifier: '_su-light',
				file: 'Простая текстовая область (field-textarea.twig )',
				url: 'components/basic/field-textarea.twig'
			},
			{
				modifier: '_su-light',
				file: 'Проверка на робота (captcha.twig)',
				url: 'components/composite/captcha.twig',
			}
		]
	},
	{
		title: 'Предложения/заказы',
		rows: [
			{
				modifier: '_su-light',
				file: 'Предложение (offer.twig)',
				url: 'components/composite/offer.twig'
			},
			{
				modifier: '_su-light',
				file: 'Отображение предложений плиткой (tile.twig + offer.twig)',
				url: 'components/composite/tile.twig',
				withUrl: {'tile': true}
			},
			{
				modifier: '_su-light',
				file: 'Заказ (order.twig)',
				url: 'components/composite/order.twig'
			}
		]
	},
	{
		title: 'Прочее',
		rows: [
			{
				modifier: '_su-light',
				file: 'Комментарии/отзывы - для полноценного отображения необходимо подключить и инициализировать плагин jscrollpane (comments.twig)',
				url: 'components/composite/comments.twig'
			},
			{
				modifier: '_su-light',
				file: 'Получите бесплатно (free-mail.twig + mailerlite.twig)',
				url: 'components/composite/free-mail.twig'
			},
			{
				modifier: '_su-light',
				file: 'Способы оплаты (payment-icons.twig)',
				url: 'components/composite/payment-icons.twig'
			},
			{
				modifier: '_su-light',
				file: 'Видео (videoblock.twig)',
				url: 'components/composite/videoblock.twig'
			}
		]
	}
];

dataEmulation['groupButtons'] = {
	typeAction: 'Показать:',
	valueAction: [
		{
			modifier: '_su-desc',
			href:'#',
			textLink:'Все'
		},
		{
			modifier: '#',
			href:'#',
			textLink:'Активные'
		},
		{
			modifier: '#',
			href:'#',
			textLink:'Выполненные'
		},
		{
			modifier: '#',
			href:'#',
			textLink:'Отмененные'
		}
	]
};

dataEmulation['popular'] = [
	{
		modifier: '',
		href:'#',
		title:'кусачки Сталекс'
	},
	{
		modifier: '',
		href:'#',
		title:'кусачки Zinger'
	}
];

dataEmulation['offer'] = [
	{
		href: '#',
		src: 'img/offers/offer_2.jpg',
		accent: false,
		title: 'Кусачки Mertz 3420-14',
		annotation: false,
		text: 'Как правильно выбрать кусачки для кутикулы? Как правильно выбрать кусачки? ' +
		'Этим вопросом задаются все женщины. На каких кусачках остановить свой выбор. ' +
		'Кусачки 660С имеют длинное полотно. Кусачки 660С имеют длинное полотно.',
		rating: true,
		priceLabel: 'Лучшая цена:',
		priceValue: '2450',
		oldPriceLabel: false,
		oldPriceValue: false,
		price: false,
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	}
];

dataEmulation['order'] = [
	{
		modifierOrders: false,
		stateLabel: false,
		stateValue: false,
		href: '#',
		src: 'img/offers/offer_1.jpg',
		title: 'Кусачки Mertz 3420-14',
		quantity: false,
		price: 999,
		close: true
	},
	{
		modifierOrders: false,
		stateLabel: false,
		stateValue: false,
		href: '#',
		src: 'img/offers/offer_1.jpg',
		title: 'Кусачки Mertz 3420-14',
		quantity: '10 шт.',
		price: 999,
		close: true
	},
	{
		modifierOrders: '_su-activated',
		stateLabel: 'Активен с:',
		stateValue: '10.04.17',
		href: '#',
		src: 'img/offers/offer_1.jpg',
		title: 'Кусачки Mertz 3420-14',
		quantity: '2 шт.',
		price: 999,
		close: true
	},
	{
		modifierOrders: '_su-canceled',
		stateLabel: 'Отменен:',
		stateValue: '11.04.17',
		href: '#',
		src: 'img/offers/offer_1.jpg',
		title: 'Кусачки Mertz 3420-14',
		quantity: '10 шт.',
		price: 155000,
		close: true
	},
	{
		modifierOrders: '_su-completed',
		stateLabel: 'Выполнен:',
		stateValue: '12.04.17',
		href: '#',
		src: 'img/offers/offer_1.jpg',
		title: 'Кусачки Mertz 3420-14',
		quantity: '999 шт.',
		price: 3000,
		close: true
	}
];

dataEmulation['tileOffers'] = [
	{
		href: '#',
		src: 'img/offers/offer_2.jpg',
		accent: false,
		title: 'Кусачки Mertz 3420-14',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '5000',
		price: '3500',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_3.jpg',
		accent: false,
		title: 'Кусачки Сталекс КМ0111111111111111111111111',
		annotation: 'Прекрасный выбор! Стильный и надежныйййййййййййййййййййййййййййййййййййййййййййййййййййййййййййй.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '5060',
		price: '500',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_1.jpg',
		accent: false,
		title: 'Маникюрные кусачки Сталекс КМ02',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '510',
		price: '100',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_4.jpg',
		accent: false,
		title: 'Маникюрные кусачки Mertz 660 C',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '5109999',
		price: '12000',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_5.jpg',
		accent: false,
		title: 'Маникюрные кусачки Mertz 664 RF',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '3500',
		price: '1500',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_5.jpg',
		accent: false,
		title: 'Маникюрные кусачки Mertz 664 RF',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '3500',
		price: '1500',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_5.jpg',
		accent: false,
		title: 'Маникюрные кусачки Mertz 664 RF',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '3500',
		price: '1500',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	},
	{
		href: '#',
		src: 'img/offers/offer_5.jpg',
		accent: false,
		title: 'Маникюрные кусачки Mertz 664 RF',
		annotation: 'Прекрасный выбор! Стильный и надежный.',
		text: false,
		rating: false,
		priceLabel: false,
		priceValue: false,
		oldPriceLabel: 'Старая цена:',
		oldPriceValue: '3500',
		price: '1500',
		buttonModifier: '_su-buy',
		buttonHref: '#',
		buttonTitle: 'Купить'
	}
];

dataEmulation['comments'] = [
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '60',
		author: 'Имя 1-го автора'
	},
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '100',
		author: 'Имя 2-го автора'
	},
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '80',
		author: 'Имя 3-го автора'
	},
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '50',
		author: 'Имя 4-го автора'
	},
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '60',
		author: 'Имя 5-го автора'
	},
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '50',
		author: 'Имя 6-го автора'
	},
	{
		text: 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		valueRating: '20',
		author: 'Имя 7-го автора'
	}
];

dataEmulation['videoList'] = [
	{
		title: false,
		preview: false,
		src: '//www.youtube.com/embed/BuNxtVF3kDs?rel=0'
	}
];

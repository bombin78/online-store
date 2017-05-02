<?php

//---------------------------------------------------
//ТИП ШАБЛОНИЗАТОРА
$dataEmulation['typeTwig'] = 'php';
//---------------------------------------------------


//---------------------------------------------------
//WRAPPER
//1. Тип шаблона по умолчанию
$dataEmulation['typeTemplate'] = '_su-normal';
//---------------------------------------------------


//---------------------------------------------------
//HEADER
//1. Тип шапки по умолчанию
$dataEmulation['typeHeader'] = '_su-guest';

//2. Меню профиля пользователя
$dataEmulation['headerUser'] = [
	['modifier' => '', 'href' => 'card.html', 'attr' => '', 'title' => 'Мои заказы'],
	['modifier' => '', 'href' => '#', 'attr' => '', 'title' => 'Личный кабинет'],
	['modifier' => '', 'href' => '#', 'attr' => '', 'title' => 'Выход']
];

//3. Главное меню
$dataEmulation['headerNav'] = [
	['title' => 'О доставке и оплате', 'href' => 'about-purchase.html'],
	['title' => 'Помощь', 'href' => 'faq.html'],
	['title' => 'Контакты', 'href' => 'contacts.html']
];

//4. Карзина
$dataEmulation['basketItems'] = [
	['href' => '#', 'title' => 'LED- UV лампа 24W с таймером ELSA Professional', 'cost' => '2 400'],
	['href' => '#', 'title' => 'Маникюрный набор Mertz 9736', 'cost' => '51 574'],
	['href' => '#', 'title' => 'Терка Mertz 544', 'cost' => '75']
];

//5. Ссылка логотипа
$dataEmulation['headerLogo'] = [
	'href' => 'index.html',
	'src' => 'img/header/logo.png',
	'alt' => 'Магазин ManicurShop.ru'
];

//6. Вывод баннера в шапке (по умолчнию не выводиться]
$dataEmulation['headerBanner'] = false;

//---------------------------------------------------


//---------------------------------------------------
//SIDEBAR
//1. Тип (расположение) боковой панели
$dataEmulation['typeSidebar'] = '';

//2. Sidebar catalog
$dataEmulation['sidebarCatalog'] = [
	'title' => 'Каталог',
	'data' => [
		['modifier' => '', 'href' => '#', 'title' => 'Маникюрные наборы'],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Маникюрный инструмент',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 3'],
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 4'],
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 5'],
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 6'],
				['modifier' => '', 'href' => '#', 'title' => 'Маникюрный инструмент 7']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Оборудование и приборы',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 3'],
				['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 4'],
				[
					'modifier' => '_su-list', 'href' => '#', 'title' => 'Оборудование и приборы 5',
					'sublist' => [
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.1'],
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.2'],
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.3'],
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.4'],
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.5'],
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.6'],
						['modifier' => '', 'href' => '#', 'title' => 'Оборудование и приборы 5.7']
					]
				]
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Уход за руками',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Все для евроманикюра'],
				[
					'modifier' => '_su-list',
					'href' => '#',
					'title' => 'Средства по уходу за ногтямииииииииииииииииииииииииииииииииииииииииииии',
					'sublist' => [
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтямиииииииииииииии 1'],
						[
							'modifier' => '',
							'href' => '#',
							'title' => 'Средства по уходу за ногтями ногтями ногтями ногтями ногтями2'
						],
						[
							'modifier' => '',
							'href' => '#',
							'title' => 'Средства по уходу за ногтямиииииииииииииииииииииииииииииииииииииииииии 3'
						],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 4'],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 5'],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 6'],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 7'],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 8'],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 9'],
						['modifier' => '', 'href' => '#', 'title' => 'Средства по уходу за ногтями 10']
					]
				],
				[
					'modifier' => '_su-list', 'href' => '#', 'title' => 'Лак для ногтей',
					'sublist' => [
						['modifier' => '', 'href' => '#', 'title' => 'Лак для ногтей 1'],
						['modifier' => '', 'href' => '#', 'title' => 'Лак для ногтей 2']
					]
				],
				['modifier' => '', 'href' => '#', 'title' => 'Шелак'],
				[
					'modifier' => '_su-list', 'href' => '#', 'title' => 'Дизайн ногтей',
					'sublist' => [
						['modifier' => '', 'href' => '#', 'title' => 'Дизайн ногтей 1'],
						['modifier' => '', 'href' => '#', 'title' => 'Дизайн ногтей 2'],
						['modifier' => '', 'href' => '#', 'title' => 'Дизайн ногтей 3']
					]
				],
				['modifier' => '', 'href' => '#', 'title' => 'Французкий маникюр'],
				['modifier' => '', 'href' => '#', 'title' => 'Наращивание ногтей'],
				['modifier' => '', 'href' => '#', 'title' => 'Мужской маникюр']

			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Уход за ногами',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Уход за ногами 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за ногами 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за ногами 3']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Уход за телом',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Уход за телом 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за телом 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за телом 3']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Уход за волосами',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Уход за волосами 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за волосами 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за волосами 3']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Уход за лицом',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 3'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 4'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 5'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 6'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 7'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 8'],
				['modifier' => '', 'href' => '#', 'title' => 'Уход за лицом 9']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Парфюмерия и косметика',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Парфюмерия и косметика 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Парфюмерия и косметика 2'],
				['modifier' => '', 'href' => '#', 'title' => 'Парфюмерия и косметика 3'],
				['modifier' => '', 'href' => '#', 'title' => 'Парфюмерия и косметика 4']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Подарки',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Подарки 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Подарки 2']
			]
		],
		[
			'modifier' => '_su-list', 'href' => '#', 'title' => 'Специальные предложения',
			'dropdown' => [
				['modifier' => '', 'href' => '#', 'title' => 'Специальные предложения 1'],
				['modifier' => '', 'href' => '#', 'title' => 'Специальные предложения 2']
			]
		]
	]
];

//3. Sidebar buttons
$dataEmulation['sidebarButtons'] = [
	[
		'modifier' 	=> '_su-bestsellers',
		'href' 		=> '#',
		'title' 	=> 'Хиты продаж'
	],
	[
		'modifier' 	=> '_su-sale',
		'href' 		=> '#',
		'title' 	=> 'Распродажа'
	]
];

//4. Sidebar banner
$dataEmulation['sidebarBanner'] = [
	[
		'modifier' 	=> '',
		'href' 		=> '#',
		'src' 		=> 'img/sidebar/banner/banner_1.png',
		'alt' 		=> 'Бесплатный курс "ПРО Маникюр"'
	],
	[
		'modifier' 	=> '',
		'href' 		=> '#',
		'src' 		=> 'img/sidebar/banner/banner_2.png',
		'alt' 		=> 'Заточка маникюрного инструмента'
	]
];

//5. Sidebar blog
$dataEmulation['sidebarBlog'] = [
	'title' => 'Наш блог',
	'row' => [
		['modifier' => '', 'href' => '#', 'title' => 'Что подарить мужчине на 23 февраля?'],
		['modifier' => '', 'href' => '#', 'title' => 'Shellac-маникюр в 2 раза быстрее обычного: как сделать на дому?'],
		['modifier' => '', 'href' => '#', 'title' => 'Как сделать ему мужской маникюр своими руками на 23 февраля?'],
		['modifier' => '', 'href' => '#', 'title' => 'Зачем нужно удалять кутикулу?'],
		['modifier' => '', 'href' => '#', 'title' => 'Маникюр к 14 февраля, который вы сможете повторить самостоятельно'],
		['modifier' => '', 'href' => '#', 'title' => 'читать еще']
	]
];

//6. Sidebar viewed offers
$dataEmulation['sidebarViewedOffers'] = [
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_2.jpg',
		'accent' => false,
		'title' => 'Кусачки Mertz 3420-14',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => '',
		'priceValue' => '2450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '#',
		'buttonHref' => '#',
		'buttonTitle' => false
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_3.jpg',
		'accent' => false,
		'title' => 'Кусачки Сталекс КМ01',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => '',
		'priceValue' => '1450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '#',
		'buttonHref' => '#',
		'buttonTitle' => false
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_1.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Сталекс КМ02',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => '',
		'priceValue' => '100',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '#',
		'buttonHref' => '#',
		'buttonTitle' => false
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_4.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 660 C',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => '',
		'priceValue' => '12000',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '#',
		'buttonHref' => '#',
		'buttonTitle' => false
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_5.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 664 RF',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => '',
		'priceValue' => '1250',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '#',
		'buttonHref' => '#',
		'buttonTitle' => false
	]
];
//---------------------------------------------------


//---------------------------------------------------
//FOOTER
//1. Social network block
$dataEmulation['footerSocialNetwork'] = [
	'title' => 'Поделитесь<br> с вашими друзьями:'
];

//2. Info block
$dataEmulation['footerInfo'] = [
	'title' => 'Информация и обучение',
	'row' => [
		['href' => 'about-purchase.html', 'title' => 'Доставка и оплата'],
		['href' => 'faq.html', 'title' => 'Вопросы и ответы'],
		['href' => '#', 'title' => 'Учимся дома (блог)'],
		['href' => '#', 'title' => 'Обучающие видео']
	]
];

//3. Catalog block
$dataEmulation['footerCatalog'] = [
	'title' => 'Каталог',
	'row' => [
		['href' => '#', 'title' => 'Маникюрные наборы'],
		['href' => '#', 'title' => 'Парафинотерапия'],
		['href' => '#', 'title' => 'Уход за волосами'],
		['href' => '#', 'title' => 'Лак для ногтей'],
		['href' => '#', 'title' => 'Заточка на заказ'],
		['href' => 'catalog.html', 'title' => '...смотреть все разделы']
	]
];

//4. About us block
$dataEmulation['footerAboutUs'] = [
	'title' => 'Наша компания',
	'row' => [
		['href' => 'about-store.html', 'title' => 'О нас'],
		['href' => 'contacts.html', 'title' => 'Контакты'],
		['href' => 'contract.html', 'title' => 'Оферта (реквизиты)'],
		['href' => '#', 'title' => 'Карта сайта']
	]
];

//5. Contacts block
$dataEmulation['footerContacts'] = [
	'title' => 'Заказ по телефону:',
	'phones' => [
		['phone' => '+7 (495] 645-35-03'],
		['phone' => '+7 (812] 309-53-28']
	],
	'schedule' => 'Звоните в будни <br>с 10:00 до 19:00'
];

//6. Copyright block
$dataEmulation['footerCopyright'] = '&copy; Интернет-магазин «Маникюр Шоп», 2007–2017, <a class="su-link" href="#" title="на главную">профессиональные товары для ногтей</a>';

//7. Developer block
$dataEmulation['footerDeveloper'] = 'Компания "Название компании"';
//---------------------------------------------------


//---------------------------------------------------
//FOR PAGE GUIDE.CSS
//1. guideDropdown
$dataEmulation['guideDropdown'] = [
	[
		'title' => 'О компании', 'href' => '#', 'modifier' => ''
	],
	[
		'title' => 'Сертификаты и дипломы', 'href' => '#', 'modifier' => ''
	],
	[
		'title' => 'Карта сайта', 'href' => '#', 'modifier' => ''
	],
	[
		'title' => 'Контакты', 'href' => '#', 'modifier' => ''
	]
];
//2. guideListLinks
$dataEmulation['guideListLinks'] = [
	['href' => 'index.html', 'title' => 'Главная'],
	['href' => '#', 'title' => 'О компании'],
	['href' => '#', 'title' => 'Сертификаты и дипломы'],
	['href' => '#', 'title' => 'О продукции'],
	['href' => '#', 'title' => 'Новости'],
	['href' => '#', 'title' => 'Отзывы'],
	['href' => '#', 'title' => 'Партнеры'],
	['href' => '#', 'title' => 'Контакты']
];
//---------------------------------------------------

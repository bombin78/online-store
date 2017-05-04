<?php
$dataEmulation['typeHeader'] = '_active';

$dataEmulation['breadcrumb'] = [
	[
		'modifier' 	=> '',
		'href' 		=> '#',
		'title' 	=> 'Главная'
	],
	[
		'title' 	=> 'Личный кабинет'
	]
];

$dataEmulation['groupButtonsFilter'] = [
	'typeAction' 	=> 'Показать:',
	'valueAction'	=> [
		[
			'modifier' 	=> '_su-desc',
			'href'		=>'#',
			'textLink' 	=>'Все'
		],
		[
			'modifier'	=> '',
			'href'		=>'#',
			'textLink' 	=>'Активные'
		]
		,
		[
			'modifier'	=> '',
			'href'		=>'#',
			'textLink' 	=>'Выполненные'
		]
		,
		[
			'modifier'	=> '',
			'href'		=>'#',
			'textLink' 	=>'Отмененные'
		]
	]
];

$dataEmulation['groupButtonsSorting'] = [
	'typeAction' 	=> 'Сортировать по:',
	'valueAction'	=> [
		[
			'modifier' 	=> '_su-desc',
			'href'		=>'#',
			'textLink' 	=>'Цене'
		],
		[
			'modifier'	=> '',
			'href'		=>'#',
			'textLink' 	=>'Наименованию'
		]
	]
];

$dataEmulation['orders'] = [
	[
		'modifierOrders' => '_su-activated',
		'stateLabel' => 'Активен с:',
		'stateValue' => '10.04.17',
		'href' => '#',
		'src' => 'img/offers/offer_1.jpg',
		'title' => 'Кусачки Mertz 3420-14 fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
		'quantity' => '2 шт.',
		'price' => '999',
		'close' => true
	],
	[
		'modifierOrders' => '_su-canceled',
		'stateLabel' => 'Отменен:',
		'stateValue' => '11.04.17',
		'href' => '#',
		'src' => 'img/offers/offer_2.jpg',
		'title' => 'Кусачки Mertz 3420-14',
		'quantity' => '10 шт.',
		'price' => '155000',
		'close' => true
	],
	[
		'modifierOrders' => '_su-completed',
		'stateLabel' => 'Выполнен:',
		'stateValue' => '12.04.17',
		'href' => '#',
		'src' => 'img/offers/offer_3.jpg',
		'title' => 'Кусачки Mertz 3420-14',
		'quantity' => '999 шт.',
		'price' => '3000',
		'close' => true
	]
];

$dataEmulation['favoritesOffers'] = [
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_2.jpg',
		'accent' => false,
		'title' => 'Кусачки Mertz 3420-14',
		'annotation' => false,
		'text' =>   false,
		'rating' => false,
		'priceLabel' => 'Цена:',
		'priceValue' => '2450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить',
		'close' => true
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_3.jpg',
		'accent' => false,
		'title' => 'Кусачки Сталекс КМ01',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => 'Цена:',
		'priceValue' => '1450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить',
		'close' => true
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_1.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Сталекс КМ02',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => 'Цена:',
		'priceValue' => '100',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить',
		'close' => true
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_4.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 660 CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC ',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => 'Цена:',
		'priceValue' => '120000000',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить',
		'close' => true
	]
];

$dataEmulation['specialOffers'] = [
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_2.jpg',
		'accent' => false,
		'title' => 'Кусачки Mertz 3420-14',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => 'Cпец.цена:',
		'priceValue' => '2450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_3.jpg',
		'accent' => false,
		'title' => 'Кусачки Сталекс КМ01',
		'annotation' => false,
		'text' =>   false,
		'rating:' => false,
		'priceLabel' => 'Cпец.цена:',
		'priceValue' => '1450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_1.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Сталекс КМ02',
		'annotation' => false,
		'text' =>   false,
		'rating' => false,
		'priceLabel' => 'Cпец.цена:',
		'priceValue' => '100',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => 'card.html',
		'src' => 'img/offers/offer_4.jpg',
		'accent:' => false,
		'title' => 'Маникюрные кусачки Mertz 660 CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC ',
		'annotation' => false,
		'text' => false,
		'rating' => false,
		'priceLabel' => 'Cпец.цена:',
		'priceValue' => '120000000',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	]
];

$dataEmulation['addressList'] = [
	[
		'address' => 'Санкт-Петербург, 8-я линия В.О. д.30, кв.18'
	],
	[
		'address' => 'Санкт-Петербург, Московский пр д.208, БЦ"Центр", оф.304'
	],
	[
		'address' => 'Санкт-Петербург, Большой пр. д.93, кв.288'
	]
];

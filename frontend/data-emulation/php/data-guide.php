<?php
$dataEmulation['typeTemplate'] = '_su-guide';

$dataEmulation['groupButtons'] = [
	'typeAction' 	=> 'Показать:',
	'valueAction' 	=> [
		[
			'modifier' 	=> '_su-desc',
			'href' 		=>'#',
			'textLink' 	=>'Все'
		],
		[
			'modifier' 	=> '#',
			'href' 		=>'#',
			'textLink' 	=>'Активные'
		],
		[
			'modifier' 	=> '#',
			'href' 		=>'#',
			'textLink' 	=>'Выполненные'
		],
		[
			'modifier' 	=> '#',
			'href' 		=>'#',
			'textLink' 	=>'Отмененные'
		]
	]
];

$dataEmulation['popular'] = [
	[
		'modifier'	=> '',
		'href' 		=> '#',
		'title' 	=> 'кусачки Сталекс'
	],
	[
		'modifier' 	=>  '',
		'href' 		=> '#',
		'title' 	=> 'кусачки Zinger'
	]
];

$dataEmulation['searchPopup'] = [
	[
		'name'		=> 'маникюрный набор',
		'quantity' 	=>'41'
	],
	[
		'name' 		=> 'маникюрный набор шкатулки',
		'quantity' 	=>'7'
	],
	[
		'name' 		=> 'маникюрные аппараты',
		'quantity' 	=>'2'
	],
	[
		'name' 		=> 'маникюрные кусачки 8 мм',
		'quantity' 	=>'1'
	],
	[
		'name' 		=> 'маникюрный набор mrz',
		'quantity' 	=>'1'
	]
];

$dataEmulation['videoList'] = [
	[
		'title'		=> false,
		'preview' 	=> false,
		'src' 		=> '//www.youtube.com/embed/BuNxtVF3kDs?rel=0'
	]
];

$dataEmulation['order'] = [
	[
		'modifierOrders' 	=> '',
		'stateLabel' 		=> false,
		'stateValue' 		=> false,
		'href' 				=> '#',
		'src' 				=> 'img/offers/offer_1.jpg',
		'title' 			=> 'Кусачки Mertz 3420-14',
		'quantity' 			=> false,
		'price' 			=> 999,
		'close' 			=> true
	],
	[
		'modifierOrders' 	=> '',
		'stateLabel' 		=> false,
		'stateValue' 		=> false,
		'href' 				=> '#',
		'src' 				=> 'img/offers/offer_2.jpg',
		'title' 			=> 'Кусачки Mertz 3420-14',
		'quantity' 			=> '10 шт.',
		'price' 			=> 155000,
		'close' 			=> true
	],
	[
		'modifierOrders' 	=> '_su-activated',
		'stateLabel' 		=> 'Активен с:',
		'stateValue' 		=> '10.04.17',
		'href' 				=> '#',
		'src' 				=> 'img/offers/offer_1.jpg',
		'title' 			=> 'Кусачки Mertz 3420-14 fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
		'quantity' 			=> '2 шт.',
		'price' 			=> 999,
		'close' 			=> true
	],
	[
		'modifierOrders' 	=> '_su-canceled',
		'stateLabel' 		=> 'Отменен:',
		'stateValue' 		=> '11.04.17',
		'href' 				=> '#',
		'src' 				=> 'img/offers/offer_2.jpg',
		'title' 			=> 'Кусачки Mertz 3420-14',
		'quantity' 			=> '10 шт.',
		'price' 			=> 155000,
		'close' 			=> true
	],
	[
		'modifierOrders' 	=> '_su-completed',
		'stateLabel' 		=> 'Выполнен:',
		'stateValue' 		=> '12.04.17',
		'href' 				=> '#',
		'src' 				=> 'img/offers/offer_3.jpg',
		'title' 			=> 'Кусачки Mertz 3420-14',
		'quantity' 			=> '999 шт.',
		'price' 			=> 3000,
		'close' 			=> true
	]
];

$dataEmulation['tileCatalog'] = [
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Маникюрные наборы'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Маникюрный инструмент'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Оборудование и приборы'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Уход за руками'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Уход за ногами'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Уход за телом'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Уход за волосами'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Уход за лицом'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Парфюмерия и косметика'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Подарки'
	],
	[
		'src' => 'img/example/example_8.jpg',
		'href' =>'offers.html',
		'title' =>'Специальные предложения'
	]
];

$dataEmulation['tileOffers'] = [
	[
		'href' => '#',
		'src' => 'img/offers/offer_2.jpg',
		'accent' => false,
		'title' => 'Кусачки Mertz 3420-14',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '5000',
		'price' => '3500',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_3.jpg',
		'accent' => false,
		'title' => 'Кусачки Сталекс КМ0111111111111111111111111',
		'annotation' => 'Прекрасный выбор! Стильный и надежныйййййййййййййййййййййййййййййййййййййййййййййййййййййййййййй.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '5060',
		'price' => '500',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_1.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Сталекс КМ02',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '510',
		'price' => '100',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_4.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 660 C',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '5109999',
		'price' => '12000',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_5.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 664 RF',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '3500',
		'price' => '1500',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_5.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 664 RF',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '3500',
		'price' => '1500',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_5.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 664 RF',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '3500',
		'price' => '1500',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'href' => '#',
		'src' => 'img/offers/offer_5.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 664 RF',
		'annotation' => 'Прекрасный выбор! Стильный и надежный.',
		'text' => false,
		'rating' => false,
		'priceLabel' => false,
		'priceValue' => false,
		'oldPriceLabel' => 'Старая цена:',
		'oldPriceValue' => '3500',
		'price' => '1500',
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	]
];

$dataEmulation['columnOffers'] = [
	[
		'offerModifier' => '_su-top-sales',
		'href' =>'card.html',
		'src' => 'img/offers/offer_2.jpg',
		'accent' => false,
		'title' => 'Кусачки Mertz 3420-14',
		'annotation' => false,
		'text' =>   'Как правильно выбрать кусачки для кутикулы? Как правильно выбрать кусачки?
					Этим вопросом задаются все женщины. На каких кусачках остановить свой выбор.
					Кусачки 660С имеют длинное полотно. Кусачки 660С имеют длинное полотно.',
		'rating' => true,
		'priceLabel' => 'Лучшая цена:',
		'priceValue' => '2450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'offerModifier' => '',
		'href' =>'card.html',
		'src' => 'img/offers/offer_3.jpg',
		'accent' => false,
		'title' => 'Кусачки Сталекс КМ01',
		'annotation' => false,
		'text' =>   'Как правильно выбрать кусачки для кутикулы? Как правильно выбрать кусачки?
					Этим вопросом задаются все женщины. На каких кусачках остановить свой выбор.
					Кусачки 660С имеют длинное полотно. Кусачки 660С имеют длинное полотно.',
		'rating' => true,
		'priceLabel' => 'Лучшая цена:',
		'priceValue' => '1450',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'offerModifier' => '',
		'href' =>'card.html',
		'src' => 'img/offers/offer_1.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Сталекс КМ02',
		'annotation' => false,
		'text' =>   'Как правильно выбрать кусачки для кутикулы? Как правильно выбрать кусачки?
					Этим вопросом задаются все женщины. На каких кусачках остановить свой выбор.
					Кусачки 660С имеют длинное полотно. Кусачки 660С имеют длинное полотно.',
		'rating' => true,
		'priceLabel' => 'Лучшая цена:',
		'priceValue' => '100',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'offerModifier' => '',
		'href' =>'card.html',
		'src' => 'img/offers/offer_4.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 660 C',
		'annotation' => false,
		'text' =>   'Как правильно выбрать кусачки для кутикулы? Как правильно выбрать кусачки?
					Этим вопросом задаются все женщины. На каких кусачках остановить свой выбор.
					Кусачки 660С имеют длинное полотно. Кусачки 660С имеют длинное полотно.',
		'rating' => true,
		'priceLabel' => 'Лучшая цена:',
		'priceValue' => '12000',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	],
	[
		'offerModifier' => '',
		'href' =>'card.html',
		'src' => 'img/offers/offer_5.jpg',
		'accent' => false,
		'title' => 'Маникюрные кусачки Mertz 664 RFАААААААААААААААААААААААААААААААФФФФФФФФФФФФФФФФ',
		'annotation' => false,
		'text' =>   'Как правильно выбрать кусачки для кутикулы?
					Этим вопросом задаются все женщины. На каких кусачках остановить свой выбор.
					Кусачки 660С имеют длинное полотно. Если у вас пальчики ииииииииииииииииииииииииииииииииииииии ',
		'rating' => true,
		'priceLabel' => 'Лучшая цена:',
		'priceValue' => '1250',
		'oldPriceLabel' => false,
		'oldPriceValue' => false,
		'price' => false,
		'buttonModifier' => '_su-buy',
		'buttonHref' => '#',
		'buttonTitle' => 'Купить'
	]
];

$dataEmulation['contentSlider'] = [
	'title' => 'Обратите внимание на эти товары',
	'data' 	=> [
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_2.jpg',
			'accent' => false,
			'title' => 'Кусачки Mertz 3420-14',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '3500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_3.jpg',
			'accent' => false,
			'title' => 'Кусачки Сталекс КМ0111111111111111111111111',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_1.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Сталекс КМ02',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '100',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_4.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 660 C',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '12000',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_5.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 664 RF',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '1500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_5.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 664 RF',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '1500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_5.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 664 RF',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '1500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_5.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 664 RF',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '1500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_5.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 664 RF',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '1500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		],
		[
			'href' => 'offers.html',
			'src' => 'img/offers/offer_5.jpg',
			'accent' => false,
			'title' => 'Маникюрные кусачки Mertz 664 RF',
			'annotation' => false,
			'text' => false,
			'rating' => false,
			'priceLabel' => false,
			'priceValue' => false,
			'oldPriceLabel' => false,
			'oldPriceValue' => false,
			'price' => '1500',
			'buttonModifier' => '_su-buy',
			'buttonHref' => '#',
			'buttonTitle' => 'Купить'
		]
	]
];

$dataEmulation['comments'] = [
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '60',
		'author' 		=> 'Имя 1-го автора'
	],
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '100',
		'author' 		=> 'Имя 2-го автора'
	],
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '80',
		'author' 		=> 'Имя 3-го автора'
	],
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '50',
		'author' 		=> 'Имя 4-го автора'
	],
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '60',
		'author' 		=> 'Имя 5-го автора'
	],
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '50',
		'author' 		=> 'Имя 6-го автора'
	],
	[
		'text' 			=> 'заказала маме в подарок. мама была в восторге!давно себе такой набор хотела) спасибо огромное!!! :)',
		'valueRating' 	=> '20',
		'author' 		=> 'Имя 7-го автора'
	]
];

$dataEmulation['basicBlocks'] = [
	[
		'title' => 'КОМПОНЕНТЫ: заголовки, тексты, ссылки, блоки',
		'rows' 	=> [
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Составной заголовок с картинкой (title-complex.twig)',
				'url' 		=> 'components/basic/title-complex.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Текст с классом "text" (text.twig)',
				'url' 		=> 'components/basic/text.twig'
			],
			[
				'modifier' 	=> '_su-dark',
				'file' 		=> 'Ссылка (link.twig)',
				'url' 		=> 'components/basic/link.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Блок определения - свойство/значение (detail.twig)',
				'url' 		=> 'components/basic/detail.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Вставка знака валюты - (currency.twig)',
				'url' 		=> 'components/basic/currency.twig'
			],
			[
				'modifier'	=> '_su-light',
				'file' 		=> 'Блок-обертка (block.twig)',
				'url' 		=> 'components/basic/block.twig'
			]
		]
	],
	[
		'title' => 'КОМПОНЕНТЫ: кнопки',
		'rows' 	=> [
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Ссылка-кнопка (link-btn.twig)',
				'url' 		=> 'components/basic/link-btn.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Кнопка (btn.twig)',
				'url' 		=> 'components/basic/btn.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Блок "посмотреть все/еще" (more.twig)',
				'url' 		=> 'components/basic/more.twig'
			]
		]
	],
	[
		'title' => 'КОМПОНЕНТЫ: изображения',
		'rows' 	=> [
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Ссылка-картинка (link-img.twig)',
				'url' 		=> 'components/basic/link-img.twig'
			],
			[
				'modifier' 	=> '_su-dark',
				'file' 		=> 'Предварительный просмотр (preview.twig)',
				'url' 		=> 'components/composite/preview.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Баннер (banner-block.twig)',
				'url' 		=> 'components/composite/banner-block.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Рейтинг (rating.twig)',
				'url' 		=> 'components/basic/rating.twig'
			]
		]
	],
	[
		'title' => 'КОМПОНЕНТЫ: списки',
		'rows' 	=> [
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Список с классом "list" (list.twig)',
				'url' 		=> 'components/basic/list.twig'
			],
			[
				'modifier'	=> '_su-light',
				'file' 		=>  'Список с классом "list" и модификатором "_su-circle" (list.twig)',
				'url' 		=>  'components/basic/list.twig',
				'withUrl' 	=>  ['modifierList' => '_su-circle']
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Многоуровневый список (list-multilevel.twig)',
				'url' 		=> 'components/basic/list-multilevel.twig'
			],
			[
				'modifier' 	=> '_su-dark _su-for-dropdown',
				'file' 		=> 'Выпадающий список (dropdown.twig)',
				'url' 		=> 'components/composite/dropdown.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Хлебные крошки (breadcrumb.twig)',
				'url' 		=> 'components/basic/breadcrumb.twig'
			]
		]
	],
	[
		'title' => 'КОМПОНЕНТЫ: поля',
		'rows' 	=> [
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Поле поиска (field-search.twig)',
				'url' 		=> 'components/basic/field-search.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Поле выбора (field-select.twig)',
				'url' 		=> 'components/basic/field-select.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Поле выбора количества - спиннер (field-spinner.twig)',
				'url' 		=> 'components/basic/field-spinner.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Текстовое поле со всеми элементами (field-text.twig)',
				'url' 		=> 'components/basic/field-text.twig',
				'withUrl' 	=> ['typeField' => 'full']
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Текстовое поле с меткой (field-text.twig)',
				'url' 		=> 'components/basic/field-text.twig',
				'withUrl' 	=> ['typeField' => 'label']
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Простое текстовое поле (field-text.twig)',
				'url' 		=> 'components/basic/field-text.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Текстовая область со всеми элементами (field-textarea.twig)',
				'url' 		=> 'components/basic/field-textarea.twig',
				'withUrl' 	=> ['typeField' => 'full']
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Текстовая область с меткой (field-textarea.twig)',
				'url' 		=> 'components/basic/field-textarea.twig',
				'withUrl' 	=> ['typeField' => 'label']
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Простая текстовая область (field-textarea.twig )',
				'url' 		=> 'components/basic/field-textarea.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Проверка на робота (captcha.twig)',
				'url' 		=> 'components/composite/captcha.twig',
			]
		]
	],
	[
		'title' => 'МОДУЛИ КОНТЕНТА',
		'rows' 	=> [
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Строка поиска контента с всплывающим окном (search-content.twig)',
				'url' 		=> 'modules/search-content.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Популярное (popular.twig)',
				'url' 		=> 'modules/popular.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Группа кнопок (group-buttons.twig)',
				'url' 		=> 'modules/group-buttons.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Нумерация страниц (pagination.twig)',
				'url' 		=> 'modules/pagination.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Статья (article.twig)',
				'url' 		=> 'modules/article.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Фотография в тексте (photo-paragraph.twig)',
				'url' 		=> 'modules/photo-paragraph.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Фотография (photo-figure.twig)',
				'url' 		=> 'modules/photo-figure.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Видео (videoblock.twig)',
				'url' 		=> 'modules/videoblock.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Заказ (5-ть вариантов): каждая строка отдельный модуль (order.twig)',
				'url' 		=> 'modules/order.twig'
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Отображение элементов (на примере каталога) плиткой (tile.twig )',
				'url' 		=> 'modules/tile.twig',
				'withUrl' 	=> [
					'dataTile' => $dataEmulation['tileCatalog']
				]
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Отображение предложений плиткой (tile-offers.twig + offer.twig)',
				'url' 		=> 'modules/tile-offers.twig',
				'withUrl' 	=> [
					'tileTitle'	=> 'Заголовок модуля',
					'dataTile' 	=> $dataEmulation['tileOffers'],
					'tileMore' 	=> 'посмотрите все товары'
				]
			],
			[
				'modifier' 	=> '_su-light',
				'file' 		=> 'Отображение предложений колонкой (column.twig + offer.twig)',
				'url' 		=> 'modules/column.twig',
				'withUrl' 	=> [
					'dataColumn' => $dataEmulation['columnOffers']
				]
			],
			[
				'modifier' 		=> '_su-light',
				'file' 			=> 'Комментарии/отзывы - для полноценного отображения необходимо подключить и инициализировать плагин jscrollpane (comments.twig)',
				'url' 			=> 'modules/comments.twig'
			],
			[
				'modifier' 		=> '_su-light',
				'file' 			=> 'Получите бесплатно (free-mail.twig + mailerlite.twig)',
				'url' 			=> 'modules/free-mail.twig'
			],
			[
				'modifier' 		=> '_su-light',
				'file' 			=> 'Способы оплаты (payment-icons.twig)',
				'url' 			=> 'modules/payment-icons.twig'
			],
			[
				'modifier' 		=> '_su-light',
				'modifierCode' 	=> '_open',
				'file' 			=> 'Слайдер контента (slider.twig + offer.twig)',
				'url' 			=> 'modules/slider.twig'
			]
		]
	]
];








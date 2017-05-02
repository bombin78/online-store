<?php
$dataEmulation['typeTemplate'] = '_su-basket';

$dataEmulation['typeHeader'] = '_su-active';

$dataEmulation['basketSteps'] = [
	[
		'modifiers'	=>'_su-first',
		'href' 		=>'basket-step1.html',
		'title' 	=>'Корзина'
	],
	[
		'modifiers' =>'_su-second _su-active',
		'href' 		=>'basket-step2-1.html',
		'title' 	=>'Доставка'
	]
];

$dataEmulation['orders'] = [
	[
		'href' 		=> '#',
		'src:' 		=> 'img/offers/offer_1.jpg',
		'title' 	=> 'Кусачки Mertz 3420-14 fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
		'quantity' 	=> '2 шт.',
		'price' 	=> 999,
		'close' 	=> true
	],
	[
		'href' 		=> '#',
		'src' 		=> 'img/offers/offer_2.jpg',
		'title' 	=> 'Кусачки Mertz 3420-14',
		'quantity' 	=> '10 шт.',
		'price' 	=> 155000,
		'close' 	=> true
	],
	[
		'href' 		=> '#',
		'src' 		=> 'img/offers/offer_3.jpg',
		'title' 	=> 'Кусачки Mertz 3420-14',
		'quantity' 	=> '999 шт.',
		'price' 	=> 3000,
		'close' 	=> true
	]
];

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Список видео</title>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/video.css">
	<link rel="stylesheet" href="vendors/jscrollpane/jquery.jscrollpane.css">
	<script src="vendors/jquery-1/jquery-1.11.1.min.js"></script>
	<script src="vendors/jquery-1/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/vendors/bootstrap.min.js"></script>
	<script src="vendors/jscrollpane/jquery.jscrollpane.min.js"></script>
	<script src="vendors/jscrollpane/jquery.mousewheel.js"></script>
</head>
<body>
<?php
	$dataEmulation = [];

	require_once 'config.php';
	require_once 'data-emulation/php/data-common.php';
	require_once 'data-emulation/php/data-video.php';

	$template = $twig->load('templates/pages/video_grid-2.twig');

	echo $template->render([
		//Данные шаблона
		'typeTwig'      		=> $dataEmulation['typeTwig'],
		'typeTemplate'      	=> $dataEmulation['typeTemplate'],
		'typeHeader'        	=> $dataEmulation['typeHeader'],
		'headerUser'        	=> $dataEmulation['headerUser'],
		'headerNav'        		=> $dataEmulation['headerNav'],
		'basketItems'       	=> $dataEmulation['basketItems'],
		'headerLogo'        	=> $dataEmulation['headerLogo'],
		'headerBanner'       	=> $dataEmulation['headerBanner'],
		'typeSidebar'        	=> $dataEmulation['typeSidebar'],
		'sidebarCatalog'        => $dataEmulation['sidebarCatalog'],
		'sidebarButtons'        => $dataEmulation['sidebarButtons'],
		'sidebarBanner'        	=> $dataEmulation['sidebarBanner'],
		'sidebarBlog'        	=> $dataEmulation['sidebarBlog'],
		'sidebarViewedOffers'	=> $dataEmulation['sidebarViewedOffers'],
		'footerSocialNetwork'	=> $dataEmulation['footerSocialNetwork'],
		'footerInfo'        	=> $dataEmulation['footerInfo'],
		'footerCatalog'        	=> $dataEmulation['footerCatalog'],
		'footerAboutUs'  		=> $dataEmulation['footerAboutUs'],
		'footerContacts'    	=> $dataEmulation['footerContacts'],
		'footerCopyright'    	=> $dataEmulation['footerCopyright'],
		'footerDeveloper'    	=> $dataEmulation['footerDeveloper'],
		//Данные контента
		'contentBanner'         => $dataEmulation['contentBanner'],
		'breadcrumb'         	=> $dataEmulation['breadcrumb'],
		'videoPage' 			=> $dataEmulation['videoPage'],
		'listVideo'         	=> $dataEmulation['listVideo']
	]);
?>
</body>
</html>
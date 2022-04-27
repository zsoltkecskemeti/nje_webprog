<?php
$pagetitle = array(
    'title' => 'FSZK'
);

$header = array(
    'imagesource' => 'NFSZK_logo.jpg',
    'imagealt' => 'logo',
	'title' => ' Equal Opportunities of Persons with Disabilities Non-profit Ltd. ',
	'motto' => 'Nemzeti Fogyatékosságügyi- és Szociálpolitikai Központ Közhasznú Nonprofit Kft.'
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'maker' => 'Kecskeméti Zsolt András (CRQOKX)',
    'original' => 'https://fszk.hu'
);

$pages = array(
	'/' => array('file' => 'homepage', 'text' => 'HomePage'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
	'articles' => array('file' => 'articles', 'text' => 'Articles'),
    'videos' => array('file' => 'videos', 'text' => 'Videos')
    
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');

?>
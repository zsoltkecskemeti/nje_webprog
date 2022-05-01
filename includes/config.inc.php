<?php
$pagetitle = array(
    'title' => 'FSZK'
);

$header = array(
    'imagesource' => 'NFSZK_logo.jpg',
    'imagealt' => 'logo',
	'title' => ' Equal Opportunities of Persons with Disabilities Non-profit Ltd. ',
	'motto' => 'Nemzeti Fogyatékosságügyi- <br>és Szociálpolitikai <br> Központ Közhasznú Nonprofit Kft.'
);

$PICFOLDER = './gallery/';
$FORMATS = array('jpg', 'png');
$ALLOWED_PICTYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "Y.m.d. H:i";
$MAXPICSIZE = 500*1024;

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'maker' => 'Kecskeméti Zsolt András (CRQOKX)',
    'original' => 'https://fszk.hu'
);

$pages = array(
	'/' => array('file' => 'homepage', 'text' => 'HomePage'),
    'aboutme' => array('file' => 'aboutme', 'text' => 'About Me'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
    'message' => array('file' => 'message', 'text' => 'Message'),
	'gallery' => array('file' => 'gallery', 'text' => 'Gallery'),
    'videos' => array('file' => 'videos', 'text' => 'Videos')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');

?>
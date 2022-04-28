<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $pagetitle['title'] . ( (isset($pagetitle['motto'])) ? ('|' . $pagetitle['motto']) : '' ) ?></title>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
	<?php if(file_exists('./css/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./css/<?= $find['file']?>.css" type="text/css"><?php } ?>
</head>

<body>

	<header>
		<img src="./imgs/<?=$header['imagesource']?>" alt="<?=$header['imagealt']?>">
		<h1><?= $header['title'] ?></h1>
		<?php if (isset($header['motto'])) { ?><h3><?= $header['motto'] ?></h3><?php } ?>
	</header>

    <div id="wrapper">

        <aside id="nav">
            <nav>
                <ul>
					<?php foreach ($pages as $url => $page) { ?>
						<li<?= (($page == $find) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
						<?= $page['text'] ?></a>
						</li>
					<?php } ?>
                </ul>
            </nav>
        </aside>

        <div id="content">
            <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
        </div>

    </div>

    <footer>

        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>

		&nbsp;

        <?php if(isset($footer['maker'])) { ?><?= $footer['maker']; ?><?php } ?>
        &nbsp;

        <?php if (isset($footer['original'])) { ?>
        <p id="authors-note">This site is not official.&nbsp;<a id="original" href="<?= $footer['original'] ?>" target="_blank">This is official page!</a></p>
        <?php } ?>

    </footer>

</body>
</html>

<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<html>

<head>
	<link rel='stylesheet' href='http://localhost/textart/public/style.css'/>
</head>
<body>
<?php

require __DIR__.'/classes/Canvas.php';
require __DIR__.'/classes/SimpleShape.php';
require __DIR__.'/classes/Rectangle.php';

$canvas = new Canvas (100, 30);
$canvas->setBackgroundCharacter(Canvas::WHITE_CHARACTER);

$canvas->add(new Rectangle(5, 2, 10, 5));
$canvas->add(new Rectangle(20, 2, 10, 5));
$canvas->add(new Rectangle(35, 2, 10, 5));
$canvas->add(new Rectangle(50, 2, 10, 5));

$canvas->add(new Rectangle(5, 10, 10, 5));
$canvas->add(new Rectangle(20, 10, 10, 5));
$canvas->add(new Rectangle(35, 10, 10, 5));
$canvas->add(new Rectangle(50, 10, 10, 5));

$canvas->add(new Rectangle(5, 20, 55, 10));

$canvas->render();

?>
</body>

</html>
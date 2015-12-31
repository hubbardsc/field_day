<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title ><?php wp_title( '', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='text/javascript' src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<?php wp_head(); ?>
</head>

<body>
<div class="banner">
	<h1 class="title">Field Day of the Past</h1>
	<?php wp_nav_menu(); ?>
</div>

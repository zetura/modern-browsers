<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, target-densitydpi=medium-dpi" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />

	<title></title>

	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-touch-icon-57.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-touch-icon-144.png" />

	<link href="assets/images/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image" sizes="320" />
	<link href="assets/images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" sizes="640x920" />
	<link href="assets/images/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" sizes="640x1096" />
	<link href="assets/images/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image" />
	<link href="assets/images/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image" />
	<link href="assets/images/apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
	<link href="assets/images/apple-touch-startup-image-1496x2048.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

	<link rel="stylesheet" href="assets/css/moobile.css" />
	<link rel="stylesheet" href="assets/css/moobile.ios.css" />
	<!--
	<link rel="stylesheet" href="css/moobile.android.css" />
	-->

	<!-- your own styles -->
	<link rel="stylesheet" href="assets/css/app.css" />
	<!--link rel="stylesheet" href="css/app.min.css" /-->

	<!-- mootools -->
	<script type="text/javascript" src="assets/js/libs/mootools-core-1.4.5.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/mootools-more-1.4.0.1.min.js"></script>

	<!-- moobile -->
	<script type="text/javascript" src="assets/js/libs/moobile-0.2.1.js"></script>
	<!--script type="text/javascript" src="js/libs/moobile-0.2.1.min.js"></script-->

	<!-- your app code -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<!--script type="text/javascript" src="js/app.min.js"></script -->

</head>
<body>

<script type="text/javascript">

	window.addEvent('ready', function() {
		new Moobile.WindowController().setRootViewController(viewControllerStack);
	});

</script>

</body>
</html>
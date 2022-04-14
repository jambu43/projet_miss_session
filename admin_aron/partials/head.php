<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta charset="utf-8">
		<!--[if lt IE 9]>
		     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	   <![endif]-->
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="styles/theme.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="styles/admin-forms.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>
		<?php 
			if (isset($title)) {
				echo $title;
			}
			else
			{
				echo "notre projet mi-session";
			}
		?> 
	</title>
</head>
<body>
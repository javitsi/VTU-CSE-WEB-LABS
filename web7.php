<!-- META TAG:- Metadata about the HTML Document. It's inside head element and are typically used to specify character set, page description, keywords, author of Document and Viewport settings. Its not displayed on the page and used by browsers to fetch keywords and etc-->
<!--http-equip:- provides an HTTP header for the information of the content attribute.s -->
<html>
<head>
	<title>DIGITAL CLOCK</title>
	<meta http-equiv="refresh" content="1"/>
	<style>
		p {
			color:yellow;
			font-size:90px;
			position:absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		body {
			background-color:maroon;
		}
	</style>
	<p> <?php echo date(" h: i : s A");?> </p>
</head>
<body>
</body>
</html>

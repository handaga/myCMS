<html>
<head>
	<title>This is default template of MyCMS</title>
	<link type='text/css' rel='stylesheet' href="<?php echo $this->getCurrentTemplatePath(); ?>CSS/style.css" />
</head>
<body>
<div class="wrapper">
	<div class="header">MyCMS</div>
	<div class='clear'></div>
	<div class="sidebar">this is sidebar<br><br><br></div>
	<div class="content"><?php echo $this->appOutput(); ?></div>
	<div class='clear'></div>
	<div class="footer">this is footer</div>
</div>
</body>
</html>
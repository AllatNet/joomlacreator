<?php
/**
 * User: Christian Hoefer
 * Date: 16.04.2014
 * Time: 10:53
 */

$baseUrl = Yii::app()->theme->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="<?php echo $baseUrl; ?>/views/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container" style="width: 500px; margin-top: 15%;">
	<div class="well">
		<?php echo $content; ?>
	</div>
</div>
<script src="<?php echo $baseUrl; ?>/views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
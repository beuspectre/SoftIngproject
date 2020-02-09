<?php
if(count($gabime) > 0):
?>
<style type="text/css">
	.gabime{
	width: 70%;
	margin: 0px auto;
	padding: 0px;
	border: 1px solid red;
	color: red;
	font-size: 60%;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
	float: left;
}
</style>
	<div class="gabime">
	<?php 
	foreach ($gabime as $gabim):
	?> 
	<p><?php echo $gabim; ?></p>
<?php endforeach ?>
</div>
<?php endif ?>

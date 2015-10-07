<style>
*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
			box-sizing: border-box;
}
body{
	padding: 10px;
}
div{
	float: left;
	width: 32.6%;
	height: 100px; /* just for a demo look */
	margin-right: 1%;
	margin-bottom: 1%;
	background-color: #ededed;
}
/* 1st Column : 1, 4, 7, ... */
div:nth-of-type( 3n+1 ){
	background-color: #e2721a;
	clear: both;
}
/* 3rd Column: 3, 6, 9, ... */
div:nth-of-type( 3n+3 ){
	background-color: #fcd103;
	float: right;
	margin-right: 0;
}
</style>

<?php
//The PHP Loop
for( $i = 1; $i < 8; $i++ ) { ?>
	<div>
		DIV #<?php echo $i; ?>
	</div>
<?php }
?>
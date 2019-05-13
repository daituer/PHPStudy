<!DOCTYPE html>
<html>
<head>
    <title>商品价格计算小项目</title>
    <style>
        p {
        	text-align: center;
        }
        table {
        	background:#ccc;
        	width:250px;
        	height:133px;
        	margin:20px auto;
        }
        table td {
        	background:#fff;
        }
    </style>
</head>
<body>
	<?php
	$apple=$_POST['apple'];
	$pig=$_POST['pig'];
	$biscuit=$_POST['biscuit'];
	$apple=$apple*5.8;
	$pig=$pig*18.2;
	$biscuit=$biscuit*25;
	$sum=$apple+$pig+$biscuit;
	?>
	<p>您的商品价格是：</p>
	<form method="post" action="postorder.php">
    	<table>
    	<tr>
    		<td>您的商品</td>
    		<td>价格</td>
    		<td>数量</td>
    		<td>小记</td>
    	</tr>
    	<tr>
    		<td>苹果</td>
    		<td>5.8元/斤</td>
    		<td><?echo $_POST['apple'] ?>
    		</td><td><?echo $apple ?>元</td>
    	</tr>
    	<tr>
    		<td>猪肉</td>
    		<td>18.2元/斤</td>
    		<td><?echo $_POST['pig'] ?></td>
    		<td><?echo $pig ?>元</td>
    	</tr>
    	<tr>
    		<td>饼干</td>
    		<td>25元/盒</td>
    		<td><?echo $_POST['biscuit'] ?></td>
    		<td><?echo $biscuit ?>元</td>
    	</tr>
    	<tr>
    		<td colspan="4" align="center">商品总价为：<?echo $sum ?>元 [<a href="orderform.php">返回修改</a>]</td>
    	</tr>
    	</table>
	</form>
</body>
</html>
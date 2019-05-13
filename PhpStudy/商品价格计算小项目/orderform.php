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
    <p>商品价格计算器：</p>
    <form method="post" action="postorder.php">
        <table>
            <tr>
                <td>您的商品</td>
                <td>价格</td>
                <td>数量</td>
            </tr>
            <tr>
                <td>苹果</td>
                <td>5.8元/斤</td>
                <td><input type="text" size="5" name="apple" /></td>
            </tr>
            <tr>
                <td>猪肉</td>
                <td>18.2元/斤</td>
                <td><input type="text" size="5" name="pig" /></td>
            </tr>
            <tr>
                <td>饼干</td>
                <td>25元/盒</td>
                <td><input type="text" size="5" name="biscuit" /></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="发送订单" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
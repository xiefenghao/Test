<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\xamp\htdocs\ht\public/../application/index\view\login\deallist.html";i:1604504076;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


<?php if(count($data) == count($data, 1)): ?> <?php echo $data['num']; ?> //判断数组维度
<?php else: ?> 
<table><?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>	
		<tr>
			<td><img src="/ht/public/<?php echo $data['image']; ?>" height="20px"></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['total_amount']; ?></td>
			<td><?php echo $data['num']; ?></td>
		<td><?php if(($data['refund'] == 1)): ?>已退款 
		<!--  //判断某个值是否为特定值
 -->
<?php else: ?> <a href="<?php echo url('login/refund',array('trade_no'=>$data['trade_no'],'price' =>$data['total_amount'],'out_trade_no'=>$data['out_trade_no'])); ?>">退款</a></td>
<?php endif; ?>		
		</tr>
		<input type="hidden" name="" value="<?php echo $data['trade_no']; ?>">
	</table>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>

</body>
</html>
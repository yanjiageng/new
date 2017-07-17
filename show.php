// <?php
// header("content-type:text/html;charset=utf-8");
// mysql_connect('127.0.0.1','root','root');
// mysql_query('set names utf8');
// mysql_select_db('1503phpb');
// $titles = isset($_POST['titles'])?$_POST['titles']:"";
// $udesc = isset($_POST['udesc'])?$_POST['udesc']:"";
// $stick = isset($_POST['stick'])?$_POST['stick']:"";
// $time = time();
// $sql = "insert into yuekao Values('','$titles','$udesc','$time')";
// mysql_query($sql);
// $sql = "select * from yuekao order by addtime desc";
// $res = mysql_query($sql);
// while($arr = mysql_fetch_assoc($res))
// {
// 	$data[] = $arr;
// }
// ?>
// <!DOCTYPE html>
// <html lang="en">
// <head>
// 	<meta charset="UTF-8">
// 	<title>展示数据</title>
// </head>
// <body>
// 	<table>
// 		<tr>
// 			<td>id</td>
// 			<td>标题</td>
// 			<td>发布时间</td>
// 			<td>操作</td>
// 		</tr>
// 		<tbody id="tbox">
// 		<?php foreach ($data as $k=>$v){?>
// 		<tr>
// 			<td><?php echo $v['id']?></td>
// 			<td class="JD" opt="<?php echo $v['id']?>"><?php echo $v['titles']?></td>
// 			<td><?php echo date("Y-m-d",$v['addtime'])?></td>
// 			<td><a href="">删除</a></td>
// 		</tr>
// 		<?php
// 		}
// 		?>
// 		</tbody>
// 	</table>
// </body>
// </html>
// <script src="jquery-1.7.2.min.js"></script>
// <script type="text/javascript">
// 	//即点
// 	$(".JD").on("click",function(){
// 		if(!$(this).children().attr('class'))
// 		{
// 		//获取姓名的文本
// 		var zhi = $(this).html();
// 		//获取一个文本框
// 		var input = "<input type = 'text' value='"+zhi+"' class='blur'/>";
// 		$(this).html(input);
// 		}		
// 	});
// 	//即改
// 	$("#tbox").delegate(".blur",'blur',function(){
// 		var zhi  = $(this).val();
// 		var id = $(this).parent().attr("opt");
// 		var obj = $(this);
// 		$.ajax({
// 		   type: "GET",
// 		   url: "jesc.php",
// 		   data: "zhi="+zhi+"&id="+id,
// 		   success: function(msg){
// 		   	obj.parent().html(zhi);
// 		   }
// 		});
// 	})
// </script>
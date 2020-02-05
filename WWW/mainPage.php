<!DOCTYPE html>
<!-- saved from url=(0035)http://localhost/vradmin/index1.php -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="noarchive">
	<link href="./前端网页_files/public.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="./前端网页_files/jquery.min.js.下载"></script>
	<title>Main Page</title>

</head>

<body style="">
    <div id="dcWrap" style="background-color: rgba(242, 242, 242, 1);">
		<div id="dcHead">
			<div id="head">
				<div ><font size="6" color="black">VR Management Platform</font></div>
				<div class="nav">
					<ul class="navRight">
						<li class="M noLeft"><font size="4" color="black">Welcome !</font></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Head 结束 -->
		
		<div id="dcLeft">
			<div id="menu">
				<ul class="top">
				    <li><font size="4" color="black">Menu</font></li>
					<li><font size="4" color="black">Virtual Panorama List</font></li>
				</ul>
			</div>
		</div>

		

		<script language="php">
         $con = mysql_connect("localhost:3386","root","Bd53a");
         /* localhost 是服务器 root 是用户名 abc123 是密码*/
         if (!$con)
          {
          die("Connect database failed !");
          }

         /* 这就是一个逻辑非判断，如果错误就输出括号里的字符串 */

         @mysql_select_db("login_test", $con);
         /* 选择mysql服务器里的一个数据库,假设你的数据库名为 a*/

         $sql = "SELECT * FROM panorama";
         /* 定义变量sql, "SELECT * FROM " 是SQL指令，表示选取表中的数据 */

         $result = mysql_query($sql); //执行SQL语句，获得结果集


 //        while( $row = mysql_fetch_array($result) )

        /*逐行获取结果集中的记录，得到数组row */

 //        {
         /*数组row的下标对应着数据库中的字段值 */

 //        $id = $row['Id'];
 //        $name = $row['username'];
 //        $path = $row['path'];
 //        }
		</script>


		<div id="dcMain">
			<!-- 当前位置 -->
			<div class="mainBox">
				<style>
					.num_edit{
						float:right;
						margin-right:10px;
						cursor: pointer;
						.btn { display: block; position: relative; background: #aaa; padding: 5px; float: left; color: #fff; text-decoration: none; cursor: pointer; }  
						.btn.blue { background: #2ae; }   
						
					}
				</style>
				<h3>
					<form action="" method="post">
						<table>

						</table>
					</form>
				</h3>
				<script language="php">
					  while( $row = mysql_fetch_array($result) )

                             /*逐行获取结果集中的记录，得到数组row */

                             {
						     $id = $row['Id'];
                             $path = $row['path'];
                             $picname = $row['picname'];
							 $time = $row['time'];
							 $name = $row['name'];


					</script>
				<table class="tableBasic" border="0" cellpadding="8" cellspacing="0" width="100%">
					<tbody>
					<tr>
					<th class="tc">Virtual Panorama</th>
						<th>ID</th>
						<th>Time</th>
						<th>Name</th>
						<th>Embed</th>
					</tr>
					<tr>
                        <td><a href='<?="./pic1/".$picname."/vtour/tour.html"?>' title='panorama' target="_blank">
					            <img src="<?= $path ?>" width="220" height="120">
				            </a>
						</td>
						<td><?= $id ?></td>
                        <td><?= $time ?></td>
						<td><?= $name ?></td>
						<td><a href='<?="./upload/".$picname."/vtour/tour.html"?>' class="btn blue">
						               <font size="3" color="black">Embed</font></a>
						</td>
                    </tr>
					</tbody>
				</table>
					
				
				<script language="php">
				}
				</script>


				<div class="list-page">
					<style type="text/css">
						.pagebox{
							text-align:center;
							margin-top:10px;
						}
						.pagebox span{
							margin-left:-10px;
						}
						a.apage{
							height:25px;line-height:25px;padding:3px 6px;margin-right:10px;border:1px solid #ccc;border-radius:3px;
						}
						a.apage.on, a.apage:hover{
							background: #60BBFF;border:1px solid #75a2c3;color:#fff;
						}
					</style>
				</div>

				<script type="text/javascript">
					//删除项目
					function del_project(pid){
						var pname = $("#p_"+pid).text();
						if(confirm("确认删除项目“"+pname+"”吗？")){
							$.post("/vradmin/?m=pic",{act:"delete",pid:pid},function(data){
								var data = json_decode(data);
								if(data.status==1){
									alert('成功删除项目');
									window.location.reload();
								}else{
									alert("删除失败");
								}
							});
						}
					}

					function edit(pid,type,ele){
						var num = parseInt($(ele).val());
						$(ele).addClass('inpEditing');
						$(ele).val('');
						if(isNaN(num) || num<1){
							alert('请输入大于0的整数');
							$(ele).removeClass('inpEditing');
							return false;
						}
						$.post("/vradmin/?m=pic",{
							act:"edit_num",
							type:type,
							num:num,
							pid:pid
						},function(res){
							res = eval("("+res+")");
							if (res.flag==1) {
								$(ele).removeClass('inpEditing');
								$(ele).val(res.num);
							}
						})
					}

					function edit_recommon(pid){
						$.post("/vradmin/?m=pic",{
							act:"edit_recommon",
							pid:pid
						},function(res){
							res = eval("("+res+")");
							if (res.flag==1) {
								$("#recomm_"+pid).html('<img src="/static/images/ico/'+(res.recommend==0?"yes":"no")+'.gif" >');
							}else{
								alert("操作失败");
							}
						})
					}
				</script>
			</div>
		</div>
		<div class="clear"></div>
		<div class="clear"></div>
	</div>

	<script type="text/javascript" src="./前端网页_files/global.js.下载"></script>
	<script type="text/javascript" src="./前端网页_files/jquery.tab.js.下载"></script>
	<script type="text/javascript" src="./前端网页_files/common.js.下载"></script>
	<script type="text/javascript" src="./前端网页_files/jquery.form.js.下载"></script>
	<script type="text/javascript" src="./前端网页_files/jquery.form.submit.js.下载"></script>
	<script type="text/javascript" src="./前端网页_files/calendar.js.下载"></script>
	<script>
		function clear_cache(ele) {
			if(confirm("该操作不会删除/temp/krpano目录下生成的临时切图文件，如果要删除请使用ftp手动删除！")){
				$(ele).css({
					"background-image":"url(/static/images/tm_loading.gif)",
					"background-position":"left center ",
					"background-repeat":"no-repeat",
					"background-size":"15px",
					"padding-left":"20px",
				});
				$.get('/vradmin/?m=clear_cache',{
				},function(res){
					if (res.status==1) {
						$(ele).css({
							"background-image":"none",
							"padding-left":"15px",
						});
					}
				},'json');
			}
		}
	</script>
</body>
</html>
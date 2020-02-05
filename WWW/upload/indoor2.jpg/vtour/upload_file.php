<?php
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["drivingLicence"]["name"]);
//echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["drivingLicence"]["type"] == "image/gif")
|| ($_FILES["drivingLicence"]["type"] == "image/jpeg")
|| ($_FILES["drivingLicence"]["type"] == "image/jpg")
|| ($_FILES["drivingLicence"]["type"] == "image/pjpeg")
|| ($_FILES["drivingLicence"]["type"] == "image/x-png")
|| ($_FILES["drivingLicence"]["type"] == "image/png")
)
&& ($_FILES["drivingLicence"]["size"] < 20048000)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["drivingLicence"]["error"] > 0)
	{
		echo "error: " . $_FILES["drivingLicence"]["error"] . "<br>";
	}
	else
	{
		//echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		//echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		//echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		//echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		//$dir = iconv("UTF-8", "GBK", "upload/".$_FILES["file"]["name"]);
        //if (!file_exists($dir)){
        //    mkdir ($dir,0777,true);
           // echo '创建文件夹bookcover成功';
		//	move_uploaded_file($_FILES["file"]["tmp_name"], $dir."/".$_FILES["file"]["name"]);
		//	echo"<script>alert('upload successfully!');history.go(-1);</script>";  
        //} else {
         //   echo '需创建的文件夹bookcover已经存在';
        //}
		if (file_exists( $_FILES["drivingLicence"]["name"]))
		{
			echo"<script>alert('The file already existed !');history.go(-1);</script>";
		}
		else
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($_FILES["drivingLicence"]["tmp_name"], $_FILES["drivingLicence"]["name"]);
			echo"<script>alert('upload successfully!');history.go(-1);</script>";  
			//echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
		}
	}
}
else
{
	echo "invalid file format";
}
?>
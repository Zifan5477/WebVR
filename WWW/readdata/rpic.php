<?php
session_start();
//array�����з�ͼƬ�ĸ�ʽ
$uptypes = array("image/jpg","image/jpeg","image/png","image/pjpeg","image/gif","image/bmp","image/x-png");
$files =$_FILES["uppic"];
if($files["size"]>2097152){ //ͼƬ��С�ж�
echo "�ϴ�ͼƬ���ܴ���2M";
echo "<meta http-equiv='REFRESH' CONTENT='1;URL=pic.php'>";
exit;
}
$ftype =$files["type"];
if(!in_array($ftype,$uptypes)){ //ͼƬ��ʽ�ж�
echo "�ϴ���ͼƬ�ļ���ʽ����ȷ";
echo "<meta http-equiv='REFRESH' CONTENT='1;URL=pic.php'>";
}
$fname = $files["tmp_name"]; //�ڷ�������ʱ�洢����
$image_info = getimagesize($fname);
$name = $files["name"];
$str_name = pathinfo($name); //���������ʽ�����ļ�·������Ϣ
$extname = strtolower($str_name["extension"]); //���ַ�����ΪСд extensiorn��չ��
$upload_dir = "upload/"; //upload�ļ���
$file_name = date("YmdHis").rand(1000,9999).".".$extname;
$str_file = $upload_dir.$file_name; //�ļ�Ŀ¼
//�������ݿ�
$con=mysql_connect("localhost","root","");
if(!$con){
die(("���ݿ�����ʧ��").mysql_error());
}
mysql_select_db("mywork",$con);
$sql="update user set picpath='$str_file' where user_name='$username'"; //��ͼƬ��ַ�������ݿ�mywork 
mysql_query($sql,$con);
mysql_close($con); 
if(!file_exists($upload_dir)){
mkdir($upload_dir); //����Ŀ¼ �ɹ��򷵻�true ʧ���򷵻�flase
}
if(!move_uploaded_file($files["tmp_name"],$str_file)){ //���ϴ����ļ��ƶ����µ�Ŀ¼ Ҫ�ƶ��ļ����ļ���Ŀ¼ �ɹ��򷵻�true
echo "ͼƬ�ϴ�ʧ��";
echo "<meta http-equiv='REFRESH' CONTENT='1;URL=����ʧ�ܺ�ϣ����ת��ҳ��>";
}
else{
//echo "<img src=".$str_file.">";
echo "ͼƬ�ϴ��ɹ�";
echo "<meta http-equiv='REFRESH' CONTENT='1;URL=����ɹ�ϣ����ս��ҳ��>"; 
}

?>
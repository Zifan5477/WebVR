<?php

$con = mysql_connect("localhost","root","Bd53a");
/* localhost �Ƿ����� root ���û��� abc123 ������*/ 
if (!$con)
 {
 die("Connect database failed !");
 }

/* �����һ���߼����жϣ��������������������ַ��� */ 

@mysql_select_db("login_test", $con); 
/* ѡ��mysql���������һ�����ݿ�,����������ݿ���Ϊ a*/ 

$sql = "SELECT * FROM panorama"; 
/* �������sql, "SELECT * FROM qq" ��SQLָ���ʾѡȡ��qq�е����� */ 

$result = mysql_query($sql); //ִ��SQL��䣬��ý���� 

/*�������ѡ���Ե������ӡ�ˣ����ڲ������ľ���������������ӡ��*/

//��ӡ��� 
echo "<table border=1>"; 
while( $row = mysql_fetch_array($result) )

/*���л�ȡ������еļ�¼���õ�����row */

{  
/*����row���±��Ӧ�����ݿ��е��ֶ�ֵ */

$id = $row['Id']; 
$name = $row['username']; 
$path = $row['path']; 
echo "<tr>"; 
echo "<td>$id</td>"; 
echo "<td>$name</td>"; 
echo $path;
echo "</tr>"; 
}
echo "<table />"; 

?>
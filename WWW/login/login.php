<!DOCTYPE html>
<html>
<head>
<title>��¼</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div class="content" align="center">
        <!--ͷ��-->
        <div class="header">
        <h1>��¼ҳ��</h1>
        </div>
        <!--�в�-->
        <div class="middle">
            <form id="loginform" action="loginaction.php" method="post">
                <table border="0">
                    <tr>
                        <td>�û�����</td>
                        <td>
                            <input type="text" id="name" name="username" required="required"
                            value="<?php echo isset($_COOKIE["wang"])?$_COOKIE["wang"]:"";?>">
                        </td>
                    </tr>
                    <tr>
                        <td>��&nbsp;&nbsp;&nbsp;�룺</td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" name="remember"><small>��ס��
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <!--��ʾ��Ϣ-->
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "�û������������";
                                    break;
                                    case 2:
                                    echo "�û��������벻��Ϊ�գ�";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="login" name="login" value="��¼">
                            <input type="reset" id="reset" name="reset" value="����">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            ��û���˺ţ���ȥ<a href="register.php">ע��</a>�ɣ�
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!--�Ų�-->
        <div class="footer">
        <small>Copyright &copy; ��Ȩ���С���ӭ����
        </div>
    </div>
</body>
</html>
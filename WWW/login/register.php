<!DOCTYPE html>
<html>
<head>
<title>ע��</title>
<meta name="content-type"; charset=UTF-8">
</head>
<body>
    <div class="content" align="center">
        <!--ͷ��-->
        <div class="header">
        <h1>ע��ҳ��</h1>
        </div>
        <!--�в�-->
        <div class="middle">
            <form action="registeraction.php" method="post">
                <table border="0">
                    <tr>
                        <td>�û�����</td>
                        <td><input type="text" id="id_name" name="username" required="required"></td>
                    </tr>
                    <tr>
                        <td>��&nbsp;&nbsp;&nbsp;�룺</td>
                        <td><input type="password" id="password" name="password" required="required"></td>
                    </tr>
                    <tr>
                        <td>�ظ����룺</td>
                        <td><input type="password" id="re_password" name="re_password" required="required"></td>
                    </tr>
                    <tr>
                        <td>�Ա�</td>
                        <td>
                            <input type="radio" id="sex" name="sex" value="��">��
                            <input type="radio" id="sex" name="sex" value="Ů">Ů
                        </td>
                    </tr>
                    <tr>
                        <td>QQ��</td>
                        <td><input type="text" id="qq" name="qq" required="required"></td>
                    </tr>
                    <tr>
                        <td>Email��</td>
                        <td><input type="email" id="email" name="email" required="required"></td>
                    </tr>
                    <tr>
                        <td>�绰��</td>
                        <td><input type="text" id="phone" name="phone" required="required"></td>
                    </tr>
                    <tr>
                        <td>��ַ��</td>
                        <td><input type="text" id="address" name="address" required="required"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <!--��ʾ��Ϣ-->
                            <?php
                                $err=isset($_GET["err"])?$_GET["err"]:"";
                                switch($err) {
                                    case 1:
                                    echo "�û����Ѵ��ڣ�";
                                    break;
                                    case 2:
                                    echo "�������ظ����벻һ�£�";
                                    break;
                                    case 3:
                                    echo "ע��ɹ���";
                                    break;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="register" name="register" value="ע��">
                            <input type="reset" id="reset" name="reset" value="����">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            ��������˺ţ���ȥ<a href="login.php">��¼</a>�ɣ�
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
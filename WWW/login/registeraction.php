<?php
    //��������

    $username = isset($_POST['username'])?$_POST['username']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $re_password = isset($_POST['re_password'])?$_POST['re_password']:"";
    $sex = isset($_POST['sex'])?$_POST['sex']:"";
    $qq = isset($_POST['qq'])?$_POST['qq']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $phone = isset($_POST['phone'])?$_POST['phone']:"";
    $address = isset($_POST['address'])?$_POST['address']:"";

    if($password == $re_password) {
        //��������
        $conn = mysqli_connect('localhost','root','123','php');
        //׼��SQL���,��ѯ�û���
        $sql_select="SELECT username FROM User WHERE username = '$username'";
        //ִ��SQL���
        $ret = mysqli_query($conn,$sql_select);
        $row = mysqli_fetch_array($ret);
        //�ж��û����Ƿ��Ѵ���
        if($username == $row['username']) {
            //�û����Ѵ��ڣ���ʾ��ʾ��Ϣ
            header("Location:register.php?err=1");
        } else {

            //�û��������ڣ���������
            //׼��SQL���
            $sql_insert = "INSERT INTO User(username,password,sex,qq,email,phone,address) VALUES('$username','$password','$sex','$qq','$email','$phone','$address')";
            //ִ��SQL���
            mysqli_query($conn,$sql_insert);
            header("Location:register.php?err=3");
        }

        //�ر����ݿ�
        mysqli_close($conn);
    } else {
        header("Location:register.php?err=2");
    }

?>
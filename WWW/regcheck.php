<?php 
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "Register") 
    { 
        $user = $_POST["username"]; 
        $psw = $_POST["password"]; 
        $psw_confirm = $_POST["confirm"]; 
        if($user == "" || $psw == "" || $psw_confirm == "") 
        { 
            echo "<script>alert('Please input all the information !'); history.go(-1);</script>"; 
        } 
        else 
        { 
            if($psw == $psw_confirm) 
            { 
                mysql_connect("localhost","root","Bd53a");   //连接数据库 
                mysql_select_db("login_test");  //选择数据库 
                mysql_query("set names 'gdk'"); //设定字符集 
                $sql = "select username from user where username = '$_POST[username]'"; //SQL语句 
                $result = mysql_query($sql);    //执行SQL语句 
                $num = mysql_num_rows($result); //统计执行结果影响的行数 
                if($num)    //如果已经存在该用户 
                { 
                    echo "<script>alert('Username already exists. '); history.go(-1);</script>"; 
                } 
                else    //不存在当前注册用户名称 
                { 
                   // $sql_insert = "insert into user (username,password,phone,address) values('$_POST[username]','$_POST[password]','','')";
                    $sql_insert = "insert into user (username,password) values('$_POST[username]','$_POST[password]')";  
                    $res_insert = mysql_query($sql_insert); 
                    //$num_insert = mysql_num_rows($res_insert); 
                    if($res_insert) 
                    { 
                        echo "<script>alert('Register successful!');</script>"; 
						$url = "loginPage.html"; 
                        echo "<script language='javascript' type='text/javascript'>"; 
                        echo "window.location.href='$url'"; 
                        echo "</script>"; 
                    } 
                    else 
                    { 
                        echo "<script>alert('Error !'); history.go(-1);</script>"; 
                    } 
                } 
            } 
            else 
            { 
                echo "<script>alert('Password does not match !'); history.go(-1);</script>"; 
            } 
        } 
    } 
    else 
    { 
        echo "<script>alert('submit unsuccessful !'); history.go(-1);</script>"; 
    } 
?>
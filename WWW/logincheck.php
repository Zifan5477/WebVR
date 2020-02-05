<?php 
    if(isset($_POST["submit"]) && $_POST["submit"] == "login") 
    { 
        $user = $_POST["username"]; 
        $psw = $_POST["password"]; 
        if($user == "" || $psw == "") 
        { 
            echo "<script>alert('Please input username or password !'); history.go(-1);</script>"; 
        } 
        else 
        { 
            mysql_connect("localhost","root","Bd53a"); 
            mysql_select_db("login_test"); 
            mysql_query("set names 'gbk'"); 
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'"; 
            $result = mysql_query($sql); 
            $num = mysql_num_rows($result); 
            if($num) 
            { 
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中 
                //echo "Welcome"." ".$row[0]; 
				$url = "mainPage.html"; 
                echo "<script language='javascript' type='text/javascript'>"; 
                echo "window.location.href='$url'"; 
                echo "</script>"; 
                
            } 
            else 
            { 
                echo "<script>alert('Username or password is incorrect !');history.go(-1);</script>"; 
            } 
        } 
    } 
    else 
    { 
        echo "<script>alert('Submit unsuccessful !'); history.go(-1);</script>"; 
    } 
   
?>
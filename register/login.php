<?php require("includes/connection.php"); ?>
<?php include("/includes/header.php"); ?>
<?php
if(isset($_SESSION["session_username"])){ 
//  ��������� ������
echo "<script>window.location = '../index.php';</script>";
}
if(isset($_POST["login"])){ 
if(!empty($_POST['username']) && !empty($_POST['password'])) { 
    $username=$_POST['username'];
    $password=md5($_POST['password']); 
    $query =mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'"); 

    $numrows=mysql_num_rows($query); //���������� ���������� ����� ���������� �������
    if($numrows!=0) // ���� ����� �� ����� 0 �� 
    {
    while($row=mysql_fetch_assoc($query)) //���������� ��� ���������� ������� � �������� �������������� �������
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }
    if($username == $dbusername && $password == $dbpassword)
    {
    $_SESSION['session_username']=$username;
 //��������������� �������� 
	//  session_start();
    echo "<script>window.location = '../index.php';</script>";
    }
    } else {
 $message =  "������������ ���� ��� ������!";
    }
} else {
    $message = "�� ���� ����'����� ��� ����������!";
}
}
?>
	<?php if (!empty($message)) {echo "<p class=\"error\">" . $message . "</p>";} ?>
    <div class="container mlogin">
            <div id="login">
    <h1>���� �� ����</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p><label for="user_login">����<br>
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label></p>
    <p><label for="user_pass">������<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label></p>
        <p class="submit"><input type="submit" name="login" class="button" value="�����" /></p>
        <p class="regtext">���� ��������? <a href="register.php" >���������</a> | <a href="../index.php" >�� �������</a></p>
</form>
    </div>
    </div>
	
	
	